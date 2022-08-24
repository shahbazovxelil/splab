<?php

namespace App\Http\Controllers;

use App\Models\Useful_link;
use Illuminate\Http\Request;

class UsefulLinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $useful_links = Useful_link::all();


       return view('admin.useful_links.index',compact('useful_links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.useful_links.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate(request(),array(
          'name'=>'required' ,
          'link'=>'required'

       ));

       $useful_link = new Useful_link();

       $useful_link->name = request()->name;
       $useful_link->link = request()->link;

       $useful_link->save();

       return response()->json(['success'=>'1']);


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
        $useful_link =Useful_link::find($id);

        return view('admin.useful_links.update',compact('useful_link'));
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
        $useful_link =Useful_link::find($id);
        $useful_link->name = request('name');
        $useful_link->link = request('link');

        $useful_link->save();
        if ($useful_link){
            return  response()->json(['success'=>'1']);


        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    Useful_link::destroy($id);

        return response()->json(['success'=>'1'],200);
    }
}
