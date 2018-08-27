<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
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



    public function newsletter(Request $request){
        //dd($request->all());
        $this-> validate($request, [
            'sub_name' => 'required',
            'sub_email' => 'required|email',
        ]);

        Mail::send('emails.subscribe-message', [
            'sub_name' => $request->sub_name,
            'sub_email' => $request->sub_email,
        ], function($mail) use($request){
            $mail->from($request->sub_email, $request->sub_name);

            $mail->to('anna.hakobyan@aratours.travel')-> subject('Contact Message');
        });

        return redirect()->back()->with('flash_message', "Thank you for your subscription");
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

    public function search(){
        $search = Input::get('search');
        //dd($search);
        
            $products = Products_model::where('title', 'LIKE', '%' . $search . '%')
            ->orWhere('subcategory', 'LIKE', '%' . $search . '%')->get();

            //print_r( $products);
            if ($search != "") {
                return view('search',['products'=>$products,'allproducts'=>$this->allproducts]);
            }
            else{
                return view('error',['allproducts'=>$this->allproducts]);
            }
        
        
    }

}
