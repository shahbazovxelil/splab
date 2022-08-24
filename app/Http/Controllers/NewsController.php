<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

use File;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return  view('admin.news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.news.create');
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
        $request['by_whom'] = $resultt['by_whom'];

        $this->validate($request,array(
            'title'=>'required',
            'by_whom'=>'required',
        ));

        if($request->hasFile('news_img')) {
            $file = $request->file('news_img');
            $news = new News();

            $name = time().'_.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/uploads/news/', $name);
            $news->news_img= 'uploads/news/'. $name;
            $news->title = $resultt['title'];
            $news->by_whom = $resultt['by_whom'];
            $news->fb_link = $resultt['fb_link'];
            $news->subject = $resultt['subject'];

            $news->save();

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
        $news = News::find($id);

        return  view('admin.news.update',compact('news'));
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
        $request['by_whom'] = $resultt['by_whom'];

        $this->validate($request,array(
            'title'=>'required',
            'by_whom'=>'required',
        ));
        $news = News::find($id);
        if($request->hasFile('news_img')) {
            $path = public_path(''.$news->gal_img);

            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('news_img');

            $name = time().'_.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/uploads/news/', $name);
            $news->news_img= 'uploads/news/'. $name;
        }
        $news->title =$resultt['title'];
        $news->by_whom = $resultt['by_whom'];
        $news->fb_link = $resultt['fb_link'];
        $news->subject = $resultt['subject'];
        $news->save();


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
        News::destroy($id);

        return response()->json(['success'=>'1'],200);
    }
}
