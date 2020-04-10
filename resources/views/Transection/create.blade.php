@extends('Dashboard/dashboard')
@section('content')
@include('message')
<div class="col-md-12">
	<b><p style="color: red">Account me paisy jama krwanay ka Triqa</p></b>
	<p style="color: blue"></p>
  <li>Jitney paisy ap apny account mn jama krwana chahty hn wo nichy diye gaye numbers pay easypaisa ya jazzcash krwa dn</li>
  <li>Paisy send krny k bad masool hony wali transection id ko nichy diye gaye box mn enter kr k send k button ko press kr dn</li>
  <li>Send ka button press krny k bad ap k account mn 10 minut k doran paisy transfer ho jayn gn</li>
  
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