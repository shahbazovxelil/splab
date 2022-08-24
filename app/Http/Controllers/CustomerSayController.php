<?php

namespace App\Http\Controllers;

use App\Models\Customer_say;
use Illuminate\Http\Request;
use File;

class CustomerSayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cust_says = Customer_say::all();
        return view('admin.customer_says.index',compact('cust_says'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customer_says.create');
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

        $request['c_title'] = $resultt['c_title'];
        $request['c_name_surname'] = $resultt['c_name_surname'];

        $this->validate($request,array(
            'c_title'=>'required',
            'c_name_surname'=>'required',
        ));

        if($request->hasFile('c_img')) {
            $file = $request->file('c_img');
            $cust_say = new Customer_say();

            $name = time().'_.'.$file->getClientOriginalExtension();

            $file->move(public_path().'/uploads/customer_say_imgs/', $name);
            $cust_say->c_img= 'uploads/customer_say_imgs/'. $name;
            $cust_say->c_title = $resultt['c_title'];
            $cust_say->c_name_surname =$resultt['c_name_surname'];
            $cust_say->c_company = $resultt['c_company'];
            $cust_say->c_position = $resultt['c_position'];
            $cust_say->save();

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
        $cust = Customer_say::find($id);

        return view('admin.customer_says.update',compact('cust'));
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

        $request['c_title'] = $resultt['c_title'];
        $request['c_name_surname'] = $resultt['c_name_surname'];

        $this->validate($request,array(
            'c_title'=>'required',
            'c_name_surname'=>'required',
        ));
        $cust_up = Customer_say::find($id);
        if($request->hasFile('c_img')) {
            #Get Image Path from Folder
            $path = public_path('/'.$cust_up->c_img);

            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('c_img');

            //you also need to keep file extension as well
            $name = time().'_.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/uploads/customer_say_imgs/', $name);
            $cust_up->c_img= 'uploads/customer_say_imgs/'. $name;
        }
        $cust_up->c_title = $resultt['c_title'];
        $cust_up->c_name_surname =$resultt['c_name_surname'];
        $cust_up->c_company = $resultt['c_company'];
        $cust_up->c_position = $resultt['c_position'];
        $cust_up->save();


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
        Customer_say::destroy($id);

        return response()->json(['success'=>'1'],200);
    }
}
