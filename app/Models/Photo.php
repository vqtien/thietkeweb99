<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Image;
class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo_path',
        'photo_size'
    ];

    public static function upload($request, $name)
    {
        $photo  = new Photo;

        $file   = $request->file($name);

        $photo_name             = $file->getClientOriginalName();
        $photo_path             = md5($photo_name.time());
        $arr                    = explode('.', $photo_name);
        $ext                    = end($arr); 
        $photo_path             = $photo_path . "." . $ext;   

        $photo->name            = $photo_name;
        $photo->photo_size      = $file->getSize();
        $photo->photo_path      = $photo_path;
        
        $photo->save();
                
        $largePath  = public_path('uploads/images/');
        $mediumPath = public_path('uploads/images/medium/');
        //  Resize 400px 
        $imgMedium = Image::make($file->path());
        $imgMedium->resize(400, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save($mediumPath . $photo_path);

        $file->move($largePath, $photo_path); 

        return $photo;
    }

    protected static function booted()
    {
        static::deleting(function ($photo){                          
            $image_path     = public_path('uploads/images/') . $photo->photo_path;
            $medium_path    = public_path('uploads/images/medium/') . $photo->photo_path;
            if (File::exists($image_path))
                    File::delete($image_path);
            if (File::exists($medium_path))
                    File::delete($medium_path);            
        });
    }
}
