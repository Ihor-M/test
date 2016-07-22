<?php
/**
 * Created by PhpStorm.
 * User: ihorm
 * Date: 21.07.16
 * Time: 19:49
 */

namespace App\Services;


use App\Http\Requests\Request;

class ImageUpload
{
    public function imageUpload($file)
    {
        $imageName = str_random(20) . '.' . $file->getClientOriginalExtension();
        $file->move(base_path() . '/public/images/', $imageName);
        return $imageName;


    }
}