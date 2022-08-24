<?php

namespace App\Http\Controllers;

use App\Models\Statistic;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    public function index(){
        $statistic = Statistic::find(1);
        return view('admin.statistic.update',compact('statistic'));
    }

    public function update(Request $request,$id){

        $statistic =Statistic::find($id);
        $statistic->service_count = request('service_count');
        $statistic->service_districts_count = request('service_districts_count');
        $statistic->branch_count = request('branch_count');
        $statistic->employee_count = request('employee_count');
        $statistic->cooperation_withus = request('cooperation_withus');
        $statistic->advantage_one = request('advantage_one');
        $statistic->advantage_two = request('advantage_two');
        $statistic->advantage_three = request('advantage_three');
        $statistic->advantage_four = request('advantage_four');
        $statistic->advantage_five = request('advantage_five');
        $statistic->advantage_six = request('advantage_six');

        $statistic->save();
        if ($statistic){
            return  response()->json(['success'=>'1']);


        }

    }
}
