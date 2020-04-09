<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Account;
class UserController extends Controller
{
    public function getUser(){

$c = User::leftJoin('accounts', function($join) {
      $join->on('users.id', '=', 'accounts.user_id');
    })
    ->get();
    //dd($c);
    	return view('User.user')->withall($c);
    }

    
}
