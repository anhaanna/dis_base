<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products_model;

class Products extends Controller
{
    public $allproducts;
    public function __construct(){
        $man_deodorants   = Products_model::where('category','men')->where('subcategory','deodorants')->get();
        $man_parfumes     = Products_model::where('category','men')->where('subcategory','perfumes')->get();
        $women_deodorants = Products_model::where('category','women')->where('subcategory','deodorants')->get();
        $women_parfumes   = Products_model::where('category','women')->where('subcategory','perfumes')->get();

        $allproducts = ['man_deodorants'=>$man_deodorants,
                        'man_parfumes'=>$man_parfumes,
                        'women_deodorants'=>$women_deodorants,
                        'women_parfumes'=>$women_parfumes
                        ];
        $this->allproducts = $allproducts;
    }
    public function brand(){
    	return view('brand',['allproducts'=>$this->allproducts]);
    }
    public function contact(){
        return view('contact_us',['allproducts'=>$this->allproducts]);
    }
    public function error(){
        return view('error',['allproducts'=>$this->allproducts]);
    }
    public function menuproducts(){

        return view('index',['allproducts'=>$this->allproducts]);

    }
    public function pagerender($name){
        $product = Products_model::where('url_title',$name)->get();
        $data['product'] = $product;
        return view('product',['product'=>$product,'allproducts'=>$this->allproducts]);
    }
    public function categoryrender($name){
        $categorys = str_replace('-', '_', $name);
        $data = $this->allproducts[$categorys];
        return view('product_category',['data'=>$data,'allproducts'=>$this->allproducts]);
    }

}
