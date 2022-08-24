<?php

namespace App\Http\Controllers;

use App\Models\OurTeam;
use Illuminate\Http\Request;

class OurTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $our_team = OurTeam::all();
        return  view('admin.our_team.index',compact('our_team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.our_team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $ser = $request->serialize;
           $base64 = $request->imgsrc2;

            parse_str($ser,$seria);


           $base64 = str_replace('data:image/png;base64,','',$base64);



       $imgName = rand(1,100).time().'.png';
       $folderName = public_path('uploads/');
       $fileputcont =  file_put_contents( $folderName .$imgName,base64_decode($base64));


               $our_team = new OurTeam();
               $our_team->name_surname =  $seria['name_surname'];
               $our_team->position =  $seria['position'];
               $our_team->position_descr =  $seria['position_descr'];
               $our_team->email_adress =  $seria['email_adress'];
               $our_team->img =  $imgName;
               $our_team->save();

                return  response()->json(['success'=>1],200);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $our_team = OurTeam::find($id);

        return  view('admin.our_team.update',compact('our_team'));

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
        $ser = $request->serialize;
        $base64 = $request->imgsrc2;

        parse_str($ser,$seria);


        $base64 = str_replace('data:image/png;base64,','',$base64);



        $imgName = rand(1,100).time().'.png';
        $folderName = public_path('uploads/');
        $fileputcont =  file_put_contents( $folderName .$imgName,base64_decode($base64));


        $our_team =OurTeam::find($id);
        $our_team->name_surname =  $seria['name_surname'];
        $our_team->position =  $seria['position'];
        $our_team->position_descr =  $seria['position_descr'];
        $our_team->email_adress =  $seria['email_adress'];
        $our_team->img =  $imgName;
        $our_team->save();

        return  response()->json(['success'=>1],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        OurTeam::destroy($id);

        return response()->json(['success'=>'1'],200);
    }
}
