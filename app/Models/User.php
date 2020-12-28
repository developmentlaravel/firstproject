<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     *
     *
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // protected $primaryKey = 'user_no';

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
    function comments()
    {
        return $this->hasMany(Comment::class);
    }
    function likes()
    {
        return $this->hasMany(Like::class, 'likes' , 'user_id', 'comment_id')->withTimeStamps();
    }

    // public function conversations()
    // {
    //     return $this->hasToMany(Conversation::class);
    // }


    // public function rejisterMediaCollections(): void
    // {
    //     $this->addMediaCollection('avator')
    //     ->singleFile();
    // }

}
