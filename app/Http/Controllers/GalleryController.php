<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_gallery = Gallery::all();
        return  view('admin.gallery.index',compact('all_gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        parse_str($_POST['apnd'],$resultt);

        $request['title'] = $resultt['title'];
        $request['short_about'] = $resultt['short_about'];

        $this->validate($request,array(
            'title'=>'required',
            'short_about'=>'required',
        ));

        if($request->hasFile('gal_img')) {
            $file = $request->file('gal_img');
            $gallery = new Gallery();

            $name = time().'_.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/uploads/gallery/', $name);
            $gallery->gal_img= 'uploads/gallery/'. $name;
            $gallery->title = $resultt['title'];
            $gallery->short_about = $resultt['short_about'];

            $gallery->save();

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
        $gallery = Gallery::find($id);

        return  view('admin.gallery.update',compact('gallery'));
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

        $request['title'] = $resultt['title'];
        $request['short_about'] = $resultt['short_about'];

        $this->validate($request,array(
            'title'=>'required',
            'short_about'=>'required',
        ));
        $galery = Gallery::find($id);
        if($request->hasFile('gal_img')) {
            $path = public_path(''.$galery->gal_img);

            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('gal_img');

            $name = time().'_.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/uploads/gallery/', $name);
            $galery->gal_img= 'uploads/gallery/'. $name;
        }
        $galery->title =$resultt['title'];
        $galery->short_about = $resultt['short_about'];
        $galery->save();


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
        Gallery::destroy($id);

        return response()->json(['success'=>'1'],200);
    }
}
