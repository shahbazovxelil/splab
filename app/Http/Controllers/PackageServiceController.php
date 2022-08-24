<?php

namespace App\Http\Controllers;

use App\Models\Package_services;
use Illuminate\Http\Request;

class PackageServiceController extends Controller
{
    public  function index(){

        $package_types = Package_services::all();

        return view('admin.package_services.index',compact('package_types'));
    }
    public  function edit($id){

        $package = Package_services::find($id);

        return view('admin.package_services.update',compact('package'));
    }
    public  function update(Request $request,$id){

//        $this->validate(request(),array(
//            'email'=>'required'
//        ));
        $packe =Package_services::find($id);
        $packe->p_title = request('p_title');
        $packe->p_about_short	 = request('p_about_short');
        $packe->p_bottom_section_one = request('p_bottom_section_one');
        $packe->p_bottom_section_two = request('p_bottom_section_two');
        $packe->p_bottom_section_three = request('p_bottom_section_three');
        $packe->p_bottom_section_four = request('p_bottom_section_four');
        $packe->p_bottom_section_five = request('p_bottom_section_five');
        $packe->exec_time = request('exec_time');


        $packe->save();
        if ($packe){
            return  response()->json(['success'=>'1']);


        }

    }


}
