<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_model extends Model
{
    protected $table = 'users';
    public function scopeAllUsers($query=false)
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
 ?>