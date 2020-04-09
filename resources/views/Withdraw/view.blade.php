@extends('Dashboard/dashboard')
@section('content')
<div id="myModal" style="margin-top:30px"  class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <form role="form" id="myform" >
        
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align: center">Edit withdraw</h4>
      </div>
      <div class="modal-body" width="30px" >
       <textarea id="body" name="body" class="form-control" placeholder="your report must be solid"></textarea>
          <textarea id="idclass" name="idclass" style="display: none" class="form-control" placeholder="your report must be solid"></textarea>
     
       <input type="hidden" name="_token" value="{{Session::token()}}">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
     <button id="save" type="button" class="btn btn-primary" >Save</button> 
      </div>
      
      </form>

    </div>

  </div>
</div>
<div style="background-color: white">
		
	
	<h2 style="text-align: center;"> Withdrawl Data</h2>


<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
            	<th>Id</th>
                <th>User Name</th>
                <th>User Phone</th>
                <th>Cash Type</th>
                
                <th>Requested Money</th>
<th>Date</th>
                <th>Status</th>

               
                
            </tr>
        </thead>
       
        <tbody>
        	@foreach($all as $cls)
            <tr>

                <td>{{$cls->id}}</td>
                <td>{{$cls->userDetail->name}}</td>

                <td>{{$cls->userDetail->phone}}</td>
                <td>{{$cls->userDetail->type}}</td>
                <td>{{$cls->amount}}</td>
                <td>{{$cls->created_at}}</td>
                  @if($cls->status==0)

                <td>

                   <input type="checkbox" name="shiftcleaning" value="{{$cls->id}}"></td>

@else
<td>
                    <input type="checkbox" name="ok" checked="true" value="{{$cls->id}}">
</td>
@endif
</td>   
               
               
               
            </tr>
           @endforeach
        </tbody>
    </table>
<script type="text/javascript">
	
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script type="text/javascript" src="{{asset('js/Withdraw/withdraw.js')}}"></script>
<script type="text/javascript">
var token='{{Session::token()}}';
var add='{{route('send.money.to.account')}}';

</script> 

<script type="text/javascript">
var token='{{Session::token()}}';
var ok='{{route('send.payment.back')}}';

</script> 
</div>  @endsection