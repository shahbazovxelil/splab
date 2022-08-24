<?php

namespace App\Http\Controllers;

use App\Models\CooperationWithus;
use Illuminate\Http\Request;
use File;

class CooperationWithusController extends Controller
{

    public function edit(){

        $coop = CooperationWithus::find(1);
        return view('admin.cooperation_withus.update',compact('coop'));
    }

    public  function update(Request $request,$id){


        parse_str($_POST['apnd'],$resultt);

        $request['co_title'] = $resultt['co_title'];
        $request['co_short_about'] = $resultt['co_short_about'];

        $this->validate($request,array(
            'co_title'=>'required',
            'co_short_about'=>'required',
        ));
        $coop_with = CooperationWithus::find(1);
        if($request->hasFile('co_img')) {


            $path = public_path('/'.$coop_with->co_img);
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('co_img');

            //you also need to keep file extension as well
            $name = time().'_.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/uploads/cooperation_withus/', $name);
            $coop_with->co_img= 'uploads/cooperation_withus/'. $name;
        }
        $coop_with->co_title = $resultt['co_title'];
        $coop_with->co_short_about = $resultt['co_short_about'];
        $coop_with->co_subcat_one = $resultt['co_subcat_one'];
        $coop_with->co_subcat_two = $resultt['co_subcat_two'];
        $coop_with->co_subcat_three = $resultt['co_subcat_three'];
        $coop_with->co_subcat_four = $resultt['co_subcat_four'];
        $coop_with->co_subcat_five = $resultt['co_subcat_five'];
        $coop_with->co_subcat_six = $resultt['co_subcat_six'];

        $coop_with->save();


        return response()->json(['success'=>'1',200]);

    }
}
