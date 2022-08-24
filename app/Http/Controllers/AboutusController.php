<?php

namespace App\Http\Controllers;

use App\Models\Aboutus;
use Illuminate\Http\Request;
use File;

class AboutusController extends Controller
{
    public function edit(){

        $aboutus = Aboutus::find(1);
        return view('admin.about_us.update',compact('aboutus'));
    }

    public  function update(Request $request,$id){


        parse_str($_POST['apnd'],$resultt);

        $request['ab_title1'] = $resultt['ab_title1'];
        $request['ab_text1'] = $resultt['ab_text1'];

        $this->validate($request,array(
            'ab_title1'=>'required',
            'ab_text1'=>'required',
        ));
        $aboutus = Aboutus::find(1);
        if($request->hasFile('ab_img1') && $request->hasFile('ab_img2')) {


            $path1 = public_path('/'.$aboutus->ab_img1);
            $path2 = public_path('/'.$aboutus->ab_img2);
            if(File::exists($path1))
            {
                File::delete($path1);
            }
            if(File::exists($path2))
            {
                File::delete($path2);
            }
            $file1 = $request->file('ab_img1');
            $file2 = $request->file('ab_img2');

            $name1 = time().'_.'.$file1->getClientOriginalExtension();
            $file1->move(public_path().'/uploads/aboutus1/', $name1);
            $aboutus->ab_img1= 'uploads/aboutus1/'. $name1;

            $name2 = time().'_.'.$file2->getClientOriginalExtension();
            $file2->move(public_path().'/uploads/aboutus2/', $name2);
            $aboutus->ab_img2= 'uploads/aboutus2/'. $name2;

        }
        $aboutus->ab_title1 = $resultt['ab_title1'];
        $aboutus->ab_text1 = $resultt['ab_text1'];
        $aboutus->ab_title2 = $resultt['ab_title2'];
        $aboutus->ab_text2 = $resultt['ab_text2'];
        $aboutus->ab_seed_analysis = $resultt['ab_seed_analysis'];
        $aboutus->ab_soil_analysis = $resultt['ab_soil_analysis'];
        $aboutus->ab_water_analysis = $resultt['ab_water_analysis'];
        $aboutus->ab_plant_analysis = $resultt['ab_plant_analysis'];
        $aboutus->ab_fertilizer_analysis = $resultt['ab_fertilizer_analysis'];

        $aboutus->save();


        return response()->json(['success'=>'1',200]);

    }



}
