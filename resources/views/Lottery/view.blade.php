@extends('Dashboard/dashboard')
@section('content')
@include('message')
<style>
.button {
  background-color: #0e103c; /* Green */
  border: none;
  color: white;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 2px 2px;
  cursor: pointer;
}


.button5 {border-radius: 65%;
 animation:blinkingText 3.3s infinite;
}
@keyframes blinkingText{
    0%{     color: #000;    }
    49%{    color: white; }
    60%{    color: transparent; }
    99%{    color:transparent;  }
    100%{   color: #000;    }
}


</style>

<div class="row">

@foreach($lotteries as $pak)
       <a href="{{route('get.prize',$pak->id)}}" >
          
           <div class="col-md-3 widget widget2">
                <div class="r3_counter_box">
                   <button class="button button5 ">Pickup:{{$pak->package->name}}Rs</button>
                    <div class="stats">
                        
                      <h5><strong>Lottery:<span style="color: blue">{{$pak->package->name}}Rs</span></strong></h5>
                      
                    </div>
                </div>
            </div>
            </a>
           
      
      @endforeach
</div>
@endsection

