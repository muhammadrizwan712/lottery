<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Transection;
use Auth\User;
use App\Package;
use App\Account;
use App\Lotery;
use Session;
class TransectionController extends Controller
{
      public function create(){

    	return view('Transection.create');
    }
    public function store(Request $request){
$check=Transection::where('t_id','=',$request['tid'])->first();
  if($check){
  	

 Session::flash('flash_success', ' Alread Entered ! Contact with admin');

 return back();
}else{
$class=new Transection();
$user=Auth::user();
$class->t_id=$request['tid'];
$class->status=0;
 $class->user_id=$user->id;
 $class->save();
     Session::flash('flash_success', ' operation Successfully Done!');

 return back();
}


 }
 public function view(){


 	$all=Transection::all();
 	return view('Transection.view')->withall($all);
 }
//lotery prize wining
public function getPrize($id){

$user=Auth::user();


$lotercheck=Lotery::where('id',$id)->first();
$packcheck=Package::where('id',$lotercheck->package_id)->first();

$account=Account::where('user_id','=',$user->id)->first();

if($account!=null && $account->balance>10){
$accbal=$account->balance;

$final=$accbal-$packcheck->name;

$total=$final+$lotercheck->prize;
//dd($total);
$account->balance=$total;
$account->update();
$lotercheck->status=1;
$lotercheck->update();
     Session::flash('flash_success', 'Congratulations you have won '.$lotercheck->prize.'Rs');
     

return back();
}
else{
     Session::flash('flash_success', 'Sorry Low Balance!');

return back();

}

}


}
