<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class testController extends Controller
{
    function onIndex(){

    }
     function onCreate(){

    }
     function onStore(Request $request){
        $request->validate([
            'name' => 'required',
            'tag'=>'required',
            'product_price'=>'required|numeric',
            'discount_price'=>'required|numeric',
            'active_price'=>'required|numeric',
            'short_descriprion'=>'required',
            'long_description'=>'required',
            'additional_info'=>'required',
            'image'=>'required',
        ]);
        $data=new Product();
        $image = $request->image;
            if($image){

                @unlink($data->image);
                $uniqname = uniqid();
                $ext = strtolower($image->getClientOriginalExtension());
                $filepath = 'uploads/products/';
                $imagename = $filepath.$uniqname.'.'.$ext;
                $image->move($filepath,$imagename);


                $input['image'] = $imagename;

            }

            $data->fill($input)->save();
            //return view('accounts.admin.crud.create');

    }
    function onUpdate(){

    }
    function onDelete(){

    }
}
