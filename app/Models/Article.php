<?php

namespace App\Models;

use Illuminate\Routing\Route;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\File;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Article extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;



    protected $fillable=[];

    protected $guarded = [];


    public function rejisterMediaConvertions (Media $media = null):void
    {

    $this->addMediaConvertion('tumb')
    ->width(600)
    ->height(400)
    ->sharpen(10);
    // ->nonqueue()

}
// public function rejisterMediaCollections() :void
// {

//     $this->addMediaCollection('only-jpg-file')
//     ->acceptsFile(function(File $file){
//         return $file->mimeType === 'image/jpg';
//     });
// }
    // public function media()
    // {
    //     articleItem = Article::getMedia();
    //     article = addMediaConvertion()
    //     ->
    //     ->performToCollection();


    // }



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
