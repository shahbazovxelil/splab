<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.sliders.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//        print_r($_POST['apnd']);

        parse_str($_POST['apnd'],$resultt);

        $request['s_title'] = $resultt['s_title'];
        $request['s_about'] = $resultt['s_about'];

        $this->validate($request,array(
            's_title'=>'required',
            's_about'=>'required',
        ));

        if($request->hasFile('s_img')) {
            $file = $request->file('s_img');
            $slider = new Slider();
            //you also need to keep file extension as well
            $name = time().'_.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/uploads/', $name);
            $slider->s_img= 'uploads/'. $name;
            $slider->s_title = $resultt['s_title'];
            $slider->s_about =$resultt['s_about'];
            $slider->s_short_about = $resultt['s_short_about'];
            $slider->s_link_readmore = $resultt['s_link_readmore'];
            $slider->save();

        }
        return response()->json(['success'=>'1',200]);





    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $slider = Slider::find($id);

        return view('admin.sliders.update',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        parse_str($_POST['apnd'],$resultt);

        $request['s_title'] = $resultt['s_title'];
        $request['s_about'] = $resultt['s_about'];

        $this->validate($request,array(
            's_title'=>'required',
            's_about'=>'required',
        ));
        $slider = Slider::find($id);
        if($request->hasFile('s_img')) {
            $path = public_path(''.$slider->s_img);

            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('s_img');

            //you also need to keep file extension as well
            $name = time().'_.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/uploads/', $name);
            $slider->s_img= 'uploads/'. $name;
        }
            $slider->s_title = $resultt['s_title'];
            $slider->s_about =$resultt['s_about'];
            $slider->s_short_about = $resultt['s_short_about'];
            $slider->s_link_readmore = $resultt['s_link_readmore'];
            $slider->save();


        return response()->json(['success'=>'1',200]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Slider::destroy($id);

        return response()->json(['success'=>'1'],200);
    }
}
