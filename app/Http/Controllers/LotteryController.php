<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lotery;
use App\Package;
use Session;
class LotteryController extends Controller
{
    public function create(){
$all=Lotery::all();
$pak=Package::all();
    	return view('Lottery.create')->withdata($all)->withpack($pak);
    }
    public function store(Request $request){
    		//dd($request['package_id']);
$class=new Lotery();
$class->package_id=$request['package_id'];
$class->prize=$request['prize'];
$class->save();
$all=Lotery::all();
     Session::flash('flash_success', 'successfully added!');
            
return back()->withdata($all);


    }




public function delete($id){
$rec=Lotery::where('id',$id)->first();
$rec->delete();
return back();

}

public function getLottery($id){

   $get=Lotery::where('package_id','=',$id)->where('status','=',null)->get();
	return view('Lottery.view')->withlotteries($get);
}

}
