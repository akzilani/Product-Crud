<?php

namespace App\Http\Controllers\Account\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function onIndex(){


      $data['products']=Product::all();
      return view('accounts.admin.crud.index',$data);

    }
        function onCreate(){

        }
        public function onStore(Request $request){
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
            $input = $request->all();
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
                return view('accounts.admin.crud.create');

        }
        public function onShow($id){
            $data['products']=Product::find($id);
            return view('accounts.admin.crud.view',$data);

        }

        public function onEdit($id){
            $data['products']=Product::find($id);
            return view('accounts.admin.crud.edit',$data);
        }



        public function onUpdate(Request $request,$id){

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
            $data=Product::find($id);
            $input = $request->all();
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

                return redirect()->route('index');




        }
        function onDelete(){

        }
}
