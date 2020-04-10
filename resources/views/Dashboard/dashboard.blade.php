
<!DOCTYPE HTML>
<html>
<head>
<title>dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="school system " />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="{{asset('dashboard/css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="{{asset('dashboard/css/style.css')}}" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="{{asset('dashboard/css/lines.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('dashboard/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- jQuery -->
<script src="{{asset('dashboard/js/jquery.min.js')}}"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="{{asset('dashboard/css/custom.css')}}" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="{{asset('dashboard/js/metisMenu.min.js')}}"></script>
<script src="{{asset('dashboard/js/custom.js')}}"></script>
<!-- Graph JavaScript -->
<script src="{{asset('dashboard/js/d3.v3.js')}}"></script>
<script src="{{asset('dashboard/js/rickshaw.js')}}"></script>
 <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

<script src="{{asset('dashboard/js/Chart.js')}}"></script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="">{{Auth::user()->name}}</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
				
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="{{asset('dashboard/images/1.png')}}"><span class="badge"></span></a>
	        		<ul class="dropdown-menu">
						
						
						 <li class="dropdown">
                                

                                
                                    <li  class="m_2">
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                               
                            </li>

	        		</ul>
	      		</li>
			</ul>
			




            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       
 <li>
                            <a href="/home"><i class="fa fa-dashboard nav_icon"></i>Dashboard<span class="fa arrow"></span></a>
                           
                            <!-- /.nav-second-level -->
                        </li> 
         <li>
                            <a href="/"><i class="fa fa-home nav_icon"></i>Home<span class="fa arrow"></span></a>
                           
                            <!-- /.nav-second-level -->
                        </li> 

                        
                      
@if(@Auth::user()->hasrole('user'))
               
                                  <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>Depost Money<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('transection.create')}}">Enter T-Id</a>
                                </li>
                               
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                           <li>
                            <a href="#"><i class="fa fa-dollar nav_icon"></i>Withdraw Cash<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('get.withdraw')}}">Send Request</a>
                                </li>
                                <li>
                                    <a href="{{route('info.withdraw')}}">Withdraw History</a>
                                </li>
                               
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-ticket nav_icon"></i>Buy Lottery<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('package.view')}}">Select Package</a>
                                </li>
                               
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                                  
                         
                                  @endif
                       



@if(@Auth::user()->hasrole('admin'))

 <li>
                            <a href="#"><i class="fa fa-user nav_icon"></i>User Module<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('get.users')}}">Users List</a>
                                </li>
                               
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>   
                     <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>Lottery Module<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('package.create')}}">Enter Packages</a>
                                </li><li>
                                    <a href="{{route('lottery.create')}}">Make Lotteries</a>
                                </li>
                               
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                               
 <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>Payment Module<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('transection.view')}}">view transection id</a>
                                </li>
                                <li>
                                    <a href="{{route('withdraw.view')}}">withdraw request</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                      
                                  @endif
                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                                                 
<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="margin-right: 3px;margin-bottom: 2px;margin-right: 1px">
              
          {{csrf_field()}}
<button class="btn-block btn-success">Logout</button></form>

                        
                       
                       
                         
                        
                        
                        
                       
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="graphs">
        @if(Auth::User()->hasrole('admin'))

    @if(Request::is('home'))
@include('message')
  
       
   
      <div class="row">
           
            <div class="col-md-3 widget widget1">
                <div class="r3_counter_box">
                    <i class="pull-left fa fa-dollar  user2 icon-rounded"></i>
                    <div class="stats">
                        
                      <h5><strong>{{$totalwithdraw}}Rs</strong></h5>
                      <span style="color: red">Total Given Amount</span>
                    </div>
                </div>
            </div>
            
            
           
      
       
           
            <div class="col-md-3 widget widget2">
                <div class="r3_counter_box">
                    <i class="pull-left fa fa-dollar user1  icon-rounded"></i>
                    <div class="stats">
                        
                      <h5><strong >{{$totalinamount}}Rs</strong></h5>
                      <span style="color: red">Invested Amount</span>
                    </div>
                </div>
            </div>
            
            
          
  
           
            <div class="col-md-3 widget widget1">
                <div class="r3_counter_box">
                    <i class="pull-left fa fa-dollar  icon-rounded"></i>
                    <div class="stats">
                        
                      <h5><strong >{{$totalinamount-$totalwithdraw}}Rs</strong></h5>
                      <span style="color: red">Profit/Loss</span>
                    </div>
                </div>
            </div>
            
            
            <div class="clearfix"> </div>
<hr>
<center><h3>Lotteries Amount</h3></center>
 
            <div class="col-md-3 widget widget1">
                <div class="r3_counter_box">
                    <i class="pull-left fa fa-ticket user2 icon-rounded"></i>
                    <div class="stats">
                        
                      <h5><strong >10Rs</strong></h5>
                      <span style="color: red">{{$ten}}</span>
                    </div>
                </div>
            </div>
  <div class="col-md-3 widget widget1">
                <div class="r3_counter_box">
                    <i class="pull-left fa fa-ticket user1 icon-rounded"></i>
                    <div class="stats">
                        
                      <h5><strong >20Rs</strong></h5>
                      <span style="color: red">{{$t}}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 widget widget1">
                <div class="r3_counter_box">
                    <i class="pull-left fa fa-ticket user2 icon-rounded"></i>
                    <div class="stats">
                        
                      <h5><strong >50Rs</strong></h5>
                      <span style="color: red">{{$f}}</span>
                    </div>
                </div>
            </div><div class="col-md-3 widget widget1">
                <div class="r3_counter_box">
                    <i class="pull-left fa fa-ticket user3 icon-rounded"></i>
                    <div class="stats">
                        
                      <h5><strong >100Rs</strong></h5>
                      <span style="color: red">{{$h}}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 widget widget1">
                <div class="r3_counter_box">
                    <i class="pull-left fa fa-ticket user4 icon-rounded"></i>
                    <div class="stats">
                        
                      <h5><strong >500Rs</strong></h5>
                      <span style="color: red">{{$fi}}</span>
                    </div>
                </div>
            </div>
      </div>
<hr>

<hr>


@endif

@endif    
  @if(Auth::User()->hasrole('user'))

    @if(Request::is('home'))
@include('message')
  <div class="row">
      
  

    <div class="col-md-3 widget widget1">
                <div class="r3_counter_box">
                    <i class="pull-left fa fa-dollar user2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong style="color: green">{{$balance}}Rs</strong></h5>
                      <span style="color: brown">Current Balance</span>
                    </div>
                </div>
            </div>
      
           
            <div class="col-md-3 widget widget2">
                <div class="r3_counter_box">
                    <i class="pull-left fa fa-dollar user4 icon-rounded"></i>
                    <div class="stats">
                        
                      <h5><strong >{{$draw}}Rs</strong></h5>
                      <span style="color: blue">Total Earning</span>
                    </div>
                </div>
            </div>
            
             <div class="clearfix"> </div>
            
           
  <div class="clearfix"> </div>

<br>
<center><h3 style="color: red">INVITE AND EARN MONEY</h3></center>
<div>
    
<p style="background-color:whitesmoke;margin: 10px;color: #17174c">
<b>
<li>Is Link Ko Copy Krin Or Apny Dosto ko Is sy Signup krwae</li> <li> wo jitny paisy deposit krwaen gn </li> <li>us ka 5% ap k account mn transfer kr dia jaye ga</li> <br>


<br>Refer Link Down Here:</b>
<a>localhost:8000/shareandinvite/{{Auth::user()->id}}</a>
       </div>
<hr>

<hr>


@endif

@endif

@yield('content')
    
	
   
		
		</div>
 
       </div>
 

      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <link rel="stylesheet" href="{{asset('dashboard/css/clndr.css')}}" type="text/css" />
            <script src="{{asset('dashboard/js/underscore-min.js')}}" type="text/javascript"></script>
            <script src= "{{asset('dashboard/js/moment-2.2.1.js')}}" type="text/javascript"></script>
            <script src="{{asset('dashboard/js/clndr.js')}}" type="text/javascript"></script>
            <script src="{{asset('dashboard/js/site.js')}}" type="text/javascript"></script>
    <script src="{{asset('dashboard/js/bootstrap.min.js')}}"></script>
     <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
</body>
</html>
