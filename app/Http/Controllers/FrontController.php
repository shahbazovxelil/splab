<?php

namespace App\Http\Controllers;

use App\Models\Aboutus;
use App\Models\ChildServiceCat;
use App\Models\Customer_say;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Package_services;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Statistic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
   public function index(){

       $sliders = Slider::all();
       $statistic = Statistic::find(1);
       $package_services = Package_services::all();
       $customer_says = Customer_say::all();
       $news= News::all();
       $galleries= Gallery::take(6)->get();
       $galleries2= Gallery::where('id','>',8)->where('id','<',15)->get();
       $galleries3= Gallery::where('id','>',14)->where('id','<',21)->get();



       return view('front.index',[
           'sliders'    =>  $sliders,
           'statistic'  =>  $statistic,
           'package_services'  =>  $package_services,
           'customer_says'  =>  $customer_says,
           'news'  =>  $news,
           'galleries'  =>  $galleries,
           'galleries2'  =>  $galleries2,
           'galleries3'  =>  $galleries3

       ]);

   }


   public function about(){
       $statistic = Statistic::find(1);
       $customer_says = Customer_say::all();
       $about = Aboutus::find(1);
       return view('front.about',[
           'statistic'  =>  $statistic,
           'customer_says'  =>  $customer_says,
           'about'  =>  $about,

       ]);
   }
   public function services(){

       $services1 = ChildServiceCat::where('parent_id','=',26)->get();
       $services2 = ChildServiceCat::where('parent_id','=',27)->get();
       $services3 = ChildServiceCat::where('parent_id','=',28)->get();
        return view('front.services',[
            'services1'  =>  $services1,
            'services2'  =>  $services2,
            'services3'  =>  $services3
        ]);
   }

   public function galleries(){


       $galleries1= Gallery::where('id','>',8)->where('id','<',15)->get();
       $galleries2= Gallery::where('id','>',14)->where('id','<',21)->get();

        return view('front.galleries',[
            'galleries1'  =>  $galleries1,
            'galleries2'  =>  $galleries2,
        ]);
   }

   public function news(){


       $news = News::all();

        return view('front.news',[
            'news'  =>  $news

        ]);
   }

   public function contact(){


       $contact = Setting::find(1);

        return view('front.contact',[
            'contact'  =>  $contact

        ]);
   }

   public function sendmail(Request $request){
        $name_sname = request('name_sname');
        $email = request('email');
        $reason_apply = request('reason_apply');
        $subject = request('subject');
        $apply = request('apply');

        Mail::send('front.mail',['apply'=>$apply,'name_sname'=>$name_sname,'reason_apply'=>$reason_apply,'email'=>$email],function ($message) use ($email,$subject){
            $message->to('splab@splab.az')->subject($subject);
        });

        return redirect()->back();

   }


}
