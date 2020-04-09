<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use App\Withdraw;
use App\Package;
use App\Payment;
    
use auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {

$Total_with_draw=Withdraw::sum('amount');
$Total_in_amount=Payment::sum('payment');
//dd($Total_in_amount);

        $user=Auth::User();
        $total=Account::where('user_id',$user->id)->first();
        $totaldraw=Withdraw::where('user_id',$user->id)->sum('amount');
        //dd($total);
        if( $totaldraw==null){

               $totaldraws=0;
        } else {
                    $totaldraws= $totaldraw;
       

        }
         if( $total==null){

               $totals=0;
        } else {
                    $totals= $total->balance;
       

        }

        return view('Dashboard.dashboard')->withbalance($totals)->withdraw($totaldraws)->withtotalwithdraw($Total_with_draw)->withtotalinamount($Total_in_amount);
    }
}
