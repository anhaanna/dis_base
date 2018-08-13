<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Products_model;

class Products extends Controller
{
    public $allproducts;
    public function __construct(){
        $mens_deodorants   = Products_model::where('category','men')->where('subcategory','deodorants')->get();
        $mens_parfumes     = Products_model::where('category','men')->where('subcategory','perfumes')->get();
        $women_deodorants = Products_model::where('category','women')->where('subcategory','deodorants')->get();
        $women_parfumes   = Products_model::where('category','women')->where('subcategory','perfumes')->get();
        $men_nogas = Products_model::where('category','men')->where('subcategory','nogas')->get();
        $women_nogas   = Products_model::where('category','women')->where('subcategory','nogas')->get();

        $allproducts = ['mens_deodorants'=>$mens_deodorants,
                        'mens_parfumes'=>$mens_parfumes,
                        'women_deodorants'=>$women_deodorants,
                        'women_parfumes'=>$women_parfumes,
                        'men_nogas'=>$men_nogas,
                        'women_nogas'=>$women_nogas,
                        ];
        $this->allproducts = $allproducts;
    }
    public function brand(){
    	return view('brand',['allproducts'=>$this->allproducts]);
    }
    public function contact(){
        return view('contact_us',['allproducts'=>$this->allproducts]);
    }

    public function store(Request $request){
        //dd($request->all());
        $this-> validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'contact' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Mail::send('emails.contact-message', [
            'contact_name' => $request->name,
            'contact_email' => $request->email,
            'contact_contact' => $request->contact,
            'contact_subject' => $request->subject,
            'contact_msg' => $request->message,
        ], function($mail) use($request){
            $mail->from($request->email, $request->name);

            $mail->to('anna.hakobyan@aratours.travel')-> subject('Contact Message');
        });

        return redirect()->back()->with('flash_message', "Thank you for your message");
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
