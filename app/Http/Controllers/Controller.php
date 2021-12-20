<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function imageUpload($request, $path='uploads'){
        if ($request->file('image')){
            if(!file_exists($path)){
                mkdir($path, 0777, true);
            }
            $image = $request->file('image');
            $imageName = md5(rand(1000, 9999).microtime()).'.'.$image->getClientOriginalExtension();
            $image->move(public_path($path.'/'), $imageName);

            return $path.'/'.$imageName;

        }else{
            return 'No image';
        }
    }


}
