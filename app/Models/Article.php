<?php

namespace App\Models;

use Illuminate\Routing\Route;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;



    protected $fillable=[];

    protected $guarded = [];




    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function registerMediaCollection():void
     {

        // $this->addmedia
     }


}
