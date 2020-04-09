@extends('Dashboard/dashboard')
@section('content')

@include('message')
<h1 style="text-align: center;color: green">Enter  Lotterys</h1>
  <div class="panel-body">
      <form role="form" class="form-horizontal" action="{{route('lottery.store')}}" method="post">
        {{csrf_field()}}
              <div class="form-group">
              <label class="col-md-2 control-label">Lottery Prize</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-user"></i>
                  </span>
                  <input required="true" id="name" name="prize" class="form-control1" type="number" placeholder="Lottery prize">
                </div>
               <div class="form-group">
              
             
                <div class="input-group input-icon right">
                
                  <select name="package_id" class="form-control">
                    <option>Select Package</option>
                  
                    @foreach($pack as $class)
                    <option value="{{$class->id}}">{{$class->name}}</option>
                    @endforeach
                  
                  </select>
                   
                </div>
              
              
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
    
  
  <h2 style="text-align: center;"> All Lotterys</h2>


<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
              <th>Id</th>
                <th>Package</th>
                <th>Prize</th>
                <th>Status</th>
                <th>Action</th>
               
                
            </tr>
        </thead>
       
        <tbody>
          @if(!$data)
          No data found
           @else
           @foreach($data as $cls)
            <tr>

                <td>{{$cls->id}}</td>
                <td>{{$cls->package->name}}Rs</td>
                <td>{{$cls->prize}}Rs</td>
                @if($cls->status==null)<td>
Not Sold
                </td>
                @else
                <td style="color: red">Sold Out</td>
                @endif
                <td>
                <a href="{{route('lottery.delete',$cls->id)}}" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove"></i> Delete</a>
               </td>
               
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

  @endsection
  