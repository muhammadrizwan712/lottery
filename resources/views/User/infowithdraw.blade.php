@extends('Dashboard/dashboard')
@section('content')
@include('message')


<div class="row">
  
        
    
	
	<div style="background-color: white">
		
	
	<h2 style="text-align: center;color: blue"> User Withdraw History</h2>


<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
            <th>Id</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Account Type</th>
            <th>Withdraw Amount</th>
                <th>Date&Time</th>
                <th>Status</th>
           
               
                
            </tr>
        </thead>
       
        <tbody>
          @if($infowithdraw)
        	@foreach($infowithdraw as $cls)
            <tr>
<td>{{$cls->id}}</td>
                <td>{{$cls->userDetail->name}}</td>
                <td>{{$cls->userDetail->phone}}</td>
                <td>{{$cls->userDetail->type}}</td>
            
                <td>{{$cls->amount}}</td>
            <td>{{$cls->created_at}}</td>
                @if($cls->status==0)
                {
                    <td style="color: red">wait 2 hour for payment please</td>
                }@else{
                
                    <td style="color: green">Payment sent Successfully by admin</td>
              
                @endif
            }

            </tr>
           @endforeach
           @endif
        </tbody>
    </table>
<script type="text/javascript">
	
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
 </div>

</div>

	@endsection
	