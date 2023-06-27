<?php
namespace App\Services;

use Image;

class UploadService {

    public static function generateRandomString($length) {
        $key = '';
        $keys = array_merge(range('a', 'z'), range(0, 9), range('A', 'Z'));

        for ($i = 0; $i < $length; $i++) {
            $key .= $keys[array_rand($keys)];
        }
        return $key;
    }

    public static function upload($file, $icon, $cover_image, $location) {
        ini_set('memory_limit', '265M');
        $image_type = ['image/jpeg','image/gif','image/png'];
        $contentType = $file->getClientMimeType();
        if(!in_array($contentType, $image_type) ){
            $type = 'file';
        }else{
            $type = 'image';
        }
        $ranStrings = time().self::generateRandomString(5);
        $file_name = $ranStrings.'.'.$file->extension();
        $original_img = Image::make($file->path());

        if ($icon){
            $icon_name = $ranStrings.'.'.$icon->extension();
            $icon_img = Image::make($icon->path());
        }
        if ($cover_image){
            $cover_image_name = $ranStrings.'.'.$cover_image->extension();
            $cover_img = Image::make($cover_image->path());
        }

        //saving the image icon is icon if set true
        if ($icon == true){
            $icon_img->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio();
            })->save($location.'/'.$icon_name);
        }
        //saving cover image if set true
        if ($cover_image == true){
            //check if the image dimensional size is more than 2000px, if true reduce and save or just save
            if (getimagesize($cover_image)[0] + getimagesize($cover_image)[1] > 2000) {
                $cover_img->resize(1000, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($location.'/'.$cover_image_name);
            } else {
                $cover_img->save($location.'/'.$cover_image_name);
            }
        }

        if ($type == 'image'){
            //check if the image dimensional size is more than 2000px, if true reduce and save or just save
            if (getimagesize($file)[0] + getimagesize($file)[1] > 2000) {
                $original_img->resize(1000, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($location.'/'.$file_name);
            } else {
                $original_img->save($location.'/'.$file_name);
            }
        } else {
            $file->move(public_path($location.'/'), $file_name);
        }

        return $file_name;
    }
}

