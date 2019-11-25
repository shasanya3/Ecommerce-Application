<?php

namespace App\Http\Controllers;
use Image;
use Illuminate\Http\Request;
use App\Product;
class AdminsController extends Controller
{
    public function create(){
        return view('admin.create');
    }

    public function store(Request $request){
        $this->validate($request,[


        ]);
        $product = new Product();
        $product->name = $request->name;
        $product->detail = $request->detail;
        $product->price = $request->price;
        $product->description = $request->description;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time(). '.' . $image->getClientOriginalExtension();
            $location = public_path('/images/' . $filename);
            Image::make($image)->resize(800, 600)->save($location);
        }
        $product->image = $filename;
        $product->save();
        
        return redirect()->back();

    }
}
