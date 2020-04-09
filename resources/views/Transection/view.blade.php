@extends('Dashboard/dashboard')
@section('content')
<div id="myModal" style="margin-top:30px"  class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <form role="form" id="myform" >
        
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align: center">Enter Amount</h4>
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
		
	
	<h2 style="text-align: center;"> Transection Ids</h2>


<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
            	<th>Id</th>
                <th>User Name</th>
                <th>User  Phone</th>
                <th>Transection Id</th>
                <th>Transfer Money</th>
                <th>Status</th>
               
                
            </tr>
        </thead>
       
        <tbody>
        	@foreach($all as $cls)
            <tr>

                <td>{{$cls->id}}</td>
                <td>{{$cls->userDetail->name}}</td>
                <td>{{$cls->userDetail->phone}}</td>
                <td>{{$cls->t_id }}</td>
                <td>@if($cls->status==0)
Pending

@else
Transfered
@endif

                </td>
                <td>
@if($cls->status==0)
                    <a  class="btn btn-xs btn-primary edit"><i class="glyphicon glyphicon-edit"></i>Transfer</a>
@else
Already Transfered
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
<script type="text/javascript" src="{{asset('js/Transection/transection.js')}}"></script>
<script type="text/javascript">
var token='{{Session::token()}}';
var add='{{route('store.money.in.account')}}';

</script> 
</div>  @endsection