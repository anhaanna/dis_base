<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products_model extends Model
{
    protected $table = 'products';
    public function scopeAllProducts($query=false)
{
    // return Products_model::where('id', '=', 1)->get();
    // return Products_model::where( `id`, '=','3')->get();

}
    // ->take(10)
    // public static function select(){
    // 	return DB::table("SELECT * FROM products");
    // }

    // protected $products = App\Products_model::all()->get();
}
