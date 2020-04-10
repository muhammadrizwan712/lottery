<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use App\Transection;
use App\Payment;
use App\ShareRefer;
use auth;
class AccountController extends Controller
{
	
public function Store(){
$payment=new Payment();
$new=new Account();
$rec=Transection::where('t_id',$_POST['id'])->first();
$rec->status=1;
$check=Account::where('user_id',$rec->user_id)->first();
if($check==null){


$new->user_id=$rec->user_id;

$new->balance=$_POST['name'];
$new->save();
//give money to refer_id


$check_refer_id=ShareRefer::where('user_id',$rec->user_id)->first();

//return response($check_refer_id);

if($check_refer_id){

$get_refer_id=$check_refer_id->refer_id;

//now send five percent to this refer account;
$deposit_amount=$_POST['name'];

$get_five_percent=$deposit_amount*0.05;

//see either refer account exist or not
$check_refer_exist=Account::where('user_id','=',$get_refer_id)->first();

if($check_refer_exist==null){
	$refer_account=new Account();
$refer_account->balance=$get_five_percent;

$refer_account->user_id=$get_refer_id;
$refer_account->save();
//return response('Transfered Successfully');
$refer_payment=new Payment();
$refer_payment->payment=$get_five_percent;
$refer_payment->user_id=$get_refer_id;
$refer_payment->save();

}else{

$refer_balance=$check_refer_exist->balance;
$total_refer=$refer_balance+$get_five_percent;

$check_refer_exist->balance=$total_refer;

$check_refer_exist->update();



$payment->payment=$get_five_percent;
$payment->user_id=$get_refer_id;
$payment->save();




//return response($get_refer_id);

}
}





$rec->update();

$payment->payment=$_POST['name'];
$payment->user_id=$rec->user_id;
$payment->save();
return response('Transfered Successfully');

}
else{


$balance=$check->balance;
$total=$balance+$_POST['name'];
$check->balance=$total;
$check->update();
$rec->status=1;
$rec->update();

$payment->payment=$_POST['name'];
$payment->user_id=$rec->user_id;
$payment->save();
return response('Balance updated');

}	


}   


    
}
