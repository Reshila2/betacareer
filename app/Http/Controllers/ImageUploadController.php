<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postimage;

class ImageUploadController extends Controller
{
    public function storeImage(Request $request){
        $data= new Postimage();
        if($request->file('image')){
            $file= $request->file('image');
            $filename = $file->getClientOriginalName();
            $file-> move(public_path('images/'), $filename);
            $data['image']= $filename;
        }
        $data->save();
        return redirect()->route('home');

    }
}
