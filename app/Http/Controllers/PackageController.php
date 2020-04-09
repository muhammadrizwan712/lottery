<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;
use Session;

class PackageController extends Controller
{
  public function create(){
$all=Package::all();

    	return view('Package.create')->withpackage($all);
    }
    public function store(Request $request){
$class=new Package();
$all=Package::all();

$class->name=$request['name'];
$class->save();
     Session::flash('flash_success', 'successfully added!');

return back()->withschool($all);


    }




public function delete($id){
$rec=Package::where('id',$id)->first();
$rec->delete();
return back();

}
public function edit(Request $request){

$rec=Package::where('id',$_POST['id'])->first();

$rec->name=$_POST['name'];
$rec->update();
return response($_POST['name']);

}   //

public function view(){

	$allpak=Package::all();
	return view('
		Package.view')->withallpack($allpak);
}
}
