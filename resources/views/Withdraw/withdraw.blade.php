@extends('Dashboard/dashboard')
@section('content')

@include('message')
<div class="col-md-12">
 	<p style="color: red">Read this before making request</p>
 	<li>Your Account Balance Should Be Less than Your Account Balance</li>
 	<li>Within Two Hour Your Earn Moeny Would Be Sent In Your Account Which You Provided At Signup</li>
 	<li>Write Down Moeny Here In Digit which You Want To Withdraw</li>
</div>
<br>
<div class="col-md-12">
	

<form method="post" action="{{route('get.withdraw')}}">
  {{csrf_field()}}
<div class="row">
  <div class="col-md-3">
    <input type="number" name="request" placeholder="put money here in digits" class="form-control">
  </div>
  <div class="col-md-3">
    <button class="btn btn-block btn-danger">Send</button>
  </div>
</div>
</form>
</div>
	@endsection
	