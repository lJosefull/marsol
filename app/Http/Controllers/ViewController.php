<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destinations;
use App\Route;
use App\Municipios;
use Auth;
use App\Banner_home;
use User;
use App\Newsletter;
use App\Consult;
class ViewController extends Controller
{
      public function index(){
        $Destinations=Municipios::all();
        $banner_imgs = Banner_home::all();

   		return view('home',[
'banner_imgs'=>$banner_imgs,
'Destinations'=>$Destinations

      ]);
    }
      public function Reservations(){
   		return view('Reservations');
    }
     public function About(){
      return view('about-us');
    }
     public function Destinations(){
      $Routes= Route::orderBy('slug','ASC')->get();
      $Destinations= Destinations::all();

      
   		return view('Destinations',[
        'Routes'=>$Routes,
        'Destinations'=>$Destinations


    ]);
   		
    }
 


    public function route(Request $request)
    {
   if($request->ajax()){
    $Destinations= Destinations::where('route_id',$request->id)->get();

    $img= Destinations::where('route_id',$request->id)->first();
    $imgbanner= $img->Route->banner_img;
     $name= $img->Route->slug;
    return response()->json(['route'=>$Destinations,'img'=>$imgbanner,'name'=>$name]);

  }
        

    }

    public function routeone(Request $request)
    {

      $Routes= Route::orderBy('slug','ASC')->first();

        $Destinations= Destinations::where('route_id',$Routes->id)->get();
        $img= Destinations::where('route_id',$Routes->id)->first();
        $imgbanner= $img->Route->banner_img;
          $name= $img->Route->slug;
     return response()->json(['route'=>$Destinations,'img'=>$imgbanner,'name'=>$name]);
         
    }

     public function newsletter(Request $request){
        if($request->ajax()){
          $verificar=Newsletter::where('email',$request->email)->count();
 if ($verificar>0) {

    return response()->json(['verificar'=>$verificar]);
 }else{

  $Newsletter = new Newsletter();
  $Newsletter->name=$request->name;
  $Newsletter->email=$request->email;
  $Newsletter->save();
  $verificar=0;
  return response()->json(['Newsletter'=>$Newsletter->name,'verificar'=>$verificar]);
  }
        }

    
    }

    public function consult(Request $request){

if($request->ajax()){

  $consult = new Consult();
  $consult->name=$request->name;
  $consult->last_name=$request->last_name;
  $consult->identity=$request->typeid;
  $consult->identity_type=$request->identity_type;
  $consult->email=$request->email;
  $consult->posting=$request->posting;
  $consult->origin=$request->origin;
  $consult->posting=$request->posting;
  $consult->D_output=$request->D_output;
  $consult->D_entry=$request->D_entry;

}
    }

    public function services(){
      return view('services');
    }
 public function contact(){
      return view('contact');
    }
}
