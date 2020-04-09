<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use App\Transection;
use App\Payment;
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
