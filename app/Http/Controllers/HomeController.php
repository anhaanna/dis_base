<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Mail;
use Illuminate\Http\Request;
use App\Products_model;
use DB;
USE Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $mens_deodorants   = Products_model::where('category','men')->where('subcategory','deodorants')->get();
        $mens_parfumes     = Products_model::where('category','men')->where('subcategory','perfumes')->get();
        $women_deodorants = Products_model::where('category','women')->where('subcategory','deodorants')->get();
        $women_parfumes   = Products_model::where('category','women')->where('subcategory','perfumes')->get();
        $men_nogas = Products_model::where('category','men')->where('subcategory','nogas')->get();
        $women_nogas   = Products_model::where('category','women')->where('subcategory','nogas')->get();
        $all =  Products_model::inRandomOrder()->take(3)->get();

        $allproducts = ['mens_deodorants'=>$mens_deodorants,
                        'mens_parfumes'=>$mens_parfumes,
                        'women_deodorants'=>$women_deodorants,
                        'women_parfumes'=>$women_parfumes,
                        'men_nogas'=>$men_nogas,
                        'women_nogas'=>$women_nogas,
                        'all'=>$all,
                        ];
        $this->allproducts = $allproducts;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home',['allproducts'=>$this->allproducts]);
    }
    public function changepassword(Request $request){
        $errors = '';
        $userId = Auth::id();
        $new_password = $request->password;
        $confirm = $request->confirm;
        if ($new_password==$confirm) {
            if (strlen($new_password)>5) {
                DB::table('users')->where('id', $userId)->update(['password' =>bcrypt($new_password)]);
                return view('home',['success'=>'changed','allproducts'=>$this->allproducts]);
            }else{
                return view('home',['message'=>'passworde karch ','allproducts'=>$this->allproducts]);
            }
        }else{
            return view('home',['message'=>'confirme chi hamapatasxanum','allproducts'=>$this->allproducts]);
        }
        
    }
}
