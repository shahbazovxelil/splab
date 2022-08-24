<?php

namespace App\Http\Controllers;

use App\Models\ChildServiceCat;
use App\Models\Services;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
   public function index(){

       $services = ChildServiceCat::all();

       return view('admin.services.index',compact('services'));


   }

   public function create(){
       $services = Services::all();
       return view('admin.services.create',compact('services'));


   }

   public function store(Request $request){


       $servic = new Services();

       $servic->category_name = request('category_name');

       $servic->save();

    return  response()->json(['service'=>$servic,'success'=>1],200);

   }

   public function AddData(Request $request){


       $data = new ChildServiceCat();
       $data->parent_id = request('cat_id');
       $data->name = request('namee');
       $data->day = request('dayy');
       $data->save();

    return  response()->json(['success'=>1],200);

   }

    public function edit($id){

       $servs = ChildServiceCat::find($id);

       $services_catnames = Services::all();


       return view('admin.services.update',compact('servs','services_catnames'));


    }

    public function update(Request $request,$id){

        $serv_update = ChildServiceCat::find($id);



        $serv_update->name = request('namee');
        $serv_update->day = request('dayy');
        $serv_update->parent_id = request('cat_id');
        $serv_update->save();

//        $cat_id = request('cat_id');
//        $serv_parent = Services::find($cat_id);
//        $serv_parent->id = $cat_id;
//
//        $serv_parent->save();

        return  response()->json(['success'=>1],200);


    }


    public function destroy($id)
    {

        ChildServiceCat::destroy($id);

        return response()->json(['success'=>'1'],200);
    }


}
