@extends('Dashboard/dashboard')
@section('content')
@include('message')
<div class="col-md-12">
	<b><p style="color: red">READ THIS BEFORE DEPOSIT</p></b>
	<p style="color: blue">Deposit Your Moeny In Following Accounts And Put Your Transection Id Down To This Box </p>
	<li> 0332 2867233 easypaisa 
  
</li>
<li>0300 6286318 jazcash</li>
</div>
<br>

 <div class="col-md-12">
           
         
            <form method="post" action="{{route('transection.store')}}">
       {{csrf_field()}}
    <div class="col-md-6"><input type="number" class="form-control"  name="tid" placeholder="Enter Transection Id Here"></div>
    <div class="col-md-3">
        <button class="btn btn-block btn-danger">Send</button>
    </div>
   </form> 
            
            <div class="clearfix"> </div>
      </div>@endsection