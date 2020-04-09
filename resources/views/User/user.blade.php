@extends('Dashboard/dashboard')
@section('content')
@include('message')


<div class="row">
    <div class="col-md-12">
        
    
	
	<div style="background-color: white">
		
	
	<h2 style="text-align: center;"> All Users List</h2>


<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
            
                <th>Name</th>
                <th>Phone</th>
                <th>Account Type</th>
                <th>Email</th>
                <th>Account Balance</th>
           
               
                
            </tr>
        </thead>
       
        <tbody>
          @if($all)
        	@foreach($all as $cls)
            <tr>

                <td>{{$cls->name}}</td>
                <td>{{$cls->phone}}</td>
                <td>{{$cls->type}}</td>
                <td>{{$cls->email}}</td>
                @if($cls->balance)
                <td>{{$cls->balance}}</td>
                @else
                <td style="color: red">No Account</td>
               @endif
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
</div>

	@endsection
	