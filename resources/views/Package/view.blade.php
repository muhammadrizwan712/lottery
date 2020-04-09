@extends('Dashboard/dashboard')
@section('content')
@include('message')

  <div class="col_3">
    
  
@foreach($allpack as $pak)
       
           <a href="{{route('lottery.get',$pak->id)}}">
           <div class="col-md-3 widget widget2">
                <div class="r3_counter_box">
                    <i class="pull-left fa fa-upload icon-rounded"></i>
                    <div class="stats">
                        
                      <h5><strong>{{$pak->name}}Rs</strong></h5>
                      <span style="color: blue">Package</span>
                    </div>
                </div>
            </div>
            
            </a>
      
      @endforeach
</div>

@endsection