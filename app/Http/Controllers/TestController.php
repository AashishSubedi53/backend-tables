<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        return view('home');
    }

    public function contact(){
        return view('contact');
    }

    public function products(){
        $data = Product::all();

        
        $products = [
            1=>'Item1',
            2=>'Item2',
            3=>'Item3',
        ];
        return view('products',[
            'products'=>$products,
            'data'=>$data
        ]);
    }

    public function productForm(Request $request){
        $data = $request->all();
        // dd($data);
        Product::create($data);
        
        
        return redirect()->route('products');


    }

    public function product($id){

    }


    // public function product(){
        

    //     return view('products', [
    //         'products'=>$products,
    //     ]);
    // }

    public function form(Request $request){
        
        $info = [];
        $info = $request->all();
        // dd($info);

        return view('users',[
            'users' => $info
        ]);

    }

   
}
