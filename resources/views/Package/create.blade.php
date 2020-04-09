@extends('Dashboard/dashboard')
@section('content')
@include('message')
<div id="myModal" style="margin-top:30px"  class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <form role="form" id="myform" >
        
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align: center">Edit Package</h4>
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
<h1 style="text-align: center;color: green">Enter  Packages</h1>
  <div class="panel-body">
			<form role="form" class="form-horizontal" action="{{route('package.store')}}">
							<div class="form-group">
							<label class="col-md-2 control-label">Package Name</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-user"></i>
									</span>
									<input required="true" id="name" name="name" class="form-control1" type="number" placeholder="package name">
								</div>
							</div>
							
						</div>
						
						
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<button class="btn-warning btn">Submit</button>
				<button class="btn-success btn">Cancel</button>
				
			</div>
		</div>
	
					</form>		
	</div>
	
	<div style="background-color: white">
		
	
	<h2 style="text-align: center;"> All Packages</h2>


<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
            	<th>Id</th>
                <th>Name</th>
                <th>Action</th>
               
                
            </tr>
        </thead>
       
        <tbody>
        	@foreach($package as $cls)
            <tr>

                <td>{{$cls->id}}</td>
                <td>{{$cls->name}}</td>
                <td><a  class="btn btn-xs btn-primary edit"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <a href="{{route('delete.package',$cls->id)}}" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove"></i> Delete</a>
                <a href="{{route('package.create')}}" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-plus"></i> Add Package</a>
               
            </tr>
           @endforeach
        </tbody>
    </table>
<script type="text/javascript">
	
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script type="text/javascript" src="{{asset('js/Package/package.js')}}"></script>
<script type="text/javascript">
var token='{{Session::token()}}';
var add='{{route('edit.package')}}';

</script> 
</div>

	@endsection
	