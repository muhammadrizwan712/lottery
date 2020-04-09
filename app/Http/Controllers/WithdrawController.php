<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use App\Withdraw;
use App\User;
use auth;
use Session;
class WithdrawController extends Controller
{
    public function withdraw(){

	return view('Withdraw/withdraw');
}
public function view(){

$all=Withdraw::all();
return view('Withdraw/view')->withall($all);

}
public function store($id){
$check=Withdraw::where('id','=',$id)->first();
$check->status=1;
$check->update();
return response('balance sent');


}
public function statusPayment(){

$tr=Withdraw::where('id','=',$_POST['id'])->first();

if($tr->status==0){
$tr->status=1;
$tr->update();
return response('Balance Sent');
}
else{

$tr->status=0;
$tr->update();

return response('Balance did not send');

}

}


public function withdrawPost(Request $request){

$user=Auth::User();
$obj=new Withdraw();
$checkbalance=Account::where('user_id',$user->id)->first();

if($checkbalance==null){
     Session::flash('flash_success', 'You do not have sufficient amount in your account');

	return back();
}
else{
if($checkbalance->balance>=$request['request']){
$obj->amount=$request['request'];
$obj->user_id=$user->id;
$obj->status=0;
$obj->save();

$pre=$checkbalance->balance-$request['request'];
$checkbalance->balance=$pre;
$checkbalance->update();
 Session::flash('flash_success', ' operation Successfully Done!wait 2 hours');

return back();

}
else{
 Session::flash('flash_success', 'Your Dont Have Enough Amount');

	return back();
}


}

}}
