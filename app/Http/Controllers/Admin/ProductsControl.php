<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Intervention\Image\File;

use App\Models\Products;
use App\Models\ProductType;

class ProductsControl extends Controller
{

    public function index()
    {
        return view(
            'admin.product.index',
            [
                'products' => Products::latest()->paginate(10),
                'product_type' => ProductType::all(),
            ]
        );
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function insert(Request $request){

        //dd($request->name);
        $request->validate([
            'name' => 'required',
            'detail'=>'required',
            'typeproduct'=>'required',
            'price'=>'required|numeric',
            'image'=>'file|image|mimes:jpeg,png,jpg|max:10000',

        ]);
        //แปลงชื่อภาพใหม่
    /* $stringImageReFormat=base64_encode('_'.time());
        $ext=$request->file('image')->getClientOriginalExtension();
        $imageName=$stringImageReFormat.".".$ext;*/

        $product = new Products();
        $product->product_name = $request->name;
        $product->product_detail = $request->detail;
        $product->product_price = $request->price;
        $product->typeproduct = $request->typeproduct;
        if($request->hasFile('image')){
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path(). '/images/', $filename);
            Image::make(public_path(). '/images/'. $filename);
            $product->image = $filename;
        }else{
            $product->image = 'nopic.jpg';
        }

        $product->save();

        return redirect()->route('pro_index');

    }

    public function update($id=null, Request $request)
    {

        $find = Products::find($id);

        if($find){

            $find->product_name = $request->product_name;
            $find->product_detail = $request->product_detail;
            $find->product_price = $request->product_price;
            $find->typeproduct = $request->typeproduct;

            if($request->hasFile('image'))
            {

                /*
                *   Delete Old File
                */
                $path = public_path() . '/images/' . $find->image;

                if(file_exists($path))
                {
                   unlink($path);
                }

                /*
                *   New File
                */
                $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move(public_path(). '/images/', $filename);
                Image::make(public_path(). '/images/'. $filename);
                $find->image = $filename;

            }

            $find->save();

            return redirect()->route('pro_index');

        }else{
            return redirect()->route('pro_index');
        }

    }

    public function destroy($id=null)
    {

        $product = Products::find($id);

        if(!empty($product))
        {

            $path = public_path() . '/images/' . $product->image;

            if(file_exists($path))
            {
               unlink($path);
            }

            $product->delete();
            return redirect()->route('pro_index');

        }else{
            return redirect()->route('pro_index');
        }

    }
}
