<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>The TimeREC</title> 
    <link rel="shortcut icon" href="{{asset('image/REC-Icon2.png')}}" type="image/x-icon">

   <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="ThemePixels">

   
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
   
    {{-- <link href="{{asset('back/lib/fontawesome-free/css/all.min.css')}}" rel="stylesheet"> --}}
    <link href="{{asset('back/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('back/lib/typicons.font/typicons.css')}}" rel="stylesheet">
    <link href="{{asset('back/lib/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
   
 
    <link rel="stylesheet" href="{{asset('back/css/azia.css')}}">
    <link rel="stylesheet" media="print" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.print.css"/>

     <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
            'user' =>  auth()->user()
        ]) !!};
       
    </script>
  </head>
  <body class="az-body az-body-sidebar az-body-dashboard-nine">
   
@php
    $image=App\User_Image::where('user_id',$user->id)->first();
    // print_r($role);
    
    // exit();
    if($role->role==1){
      $role_name='User';
    }elseif($role->role==2){
      $role_name='Manager';
    }elseif($role->role==3){
      $role_name='Admin';
    }
   
@endphp
 
    <div class="az-sidebar az-sidebar-sticky az-sidebar-indigo-dark">
      <div class="az-sidebar-header">
       
        <a href="{{url('/dashboard')}}" class="az-logo"><img src="{{asset('image/Logo 2 .png')}}" width="62px" height="50px">The TimeREC</a>
      </div><!-- az-sidebar-header -->
       
      <div class="az-sidebar-loggedin">
        <div class="az-img-user online"><img src="{{asset('uploads/image/'.$image->image)}}" alt=""></div>
        <div class="media-body">
          <h6>{{$user->name}}</h6>
          <span>{{$role_name}}</span>
        </div><!-- media-body -->
      </div><!-- az-sidebar-loggedin -->
      <div class="az-sidebar-body">
        <ul class="nav">
          <li class="nav-label">Main Menu</li>
          <li class="nav-item active show">
            <a href="{{url('/dashboard')}}" class="nav-link with-sub"><i class="typcn typcn-clipboard"></i>Dashboard</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="dashboard-one.html" class="nav-sub-link">Time Tracker</a></li>
              <li class="nav-sub-item"><a href="{{url('projects')}}" class="nav-sub-link">Projects</a></li>
              <li class="nav-sub-item"><a href="{{url('create_record')}}" class="nav-sub-link">Create Record</a></li>
              <li class="nav-sub-item"><a href="{{url('teams')}}" class="nav-sub-link">Team</a></li>
              <li class="nav-sub-item"><a href="dashboard-four.html" class="nav-sub-link">Reports</a></li>
              <li class="nav-sub-item"><a href="{{url('logs')}}" class="nav-sub-link">Logs</a></li>
              @if($role->role==2 || $role->role==3)
              <li class="nav-sub-item"><a href="{{url('pro_request')}}" class="nav-sub-link">Requests</a></li>
              @endif
              <li class="nav-sub-item"><a href="" class="nav-sub-link">Add Notes</a></li>
              @if($role->role==3)
              <li class="nav-sub-item"><a href="{{url('category')}}" class="nav-sub-link">Category</a></li>
              @endif
              
              
            </ul>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="#" class="nav-link with-sub"><i class="typcn typcn-document"></i>Personal management</a>
            <ul class="nav-sub">
              <li class="nav-sub-item">
                <a href="{{url('eventDetails')}}" class="nav-sub-link">Events Details</a>
              </li>
              <li class="nav-sub-item">
                <a href="{{url('addevents')}}" class="nav-sub-link">Add Events</a>
              </li>
              
              <li class="nav-sub-item">
                <a href="app-contacts.html" class="nav-sub-link">Tags</a>
              </li>
              
            </ul>
          </li>
          @if($role->role==3)
          <li class="nav-item">
            <a href="#" class="nav-link with-sub"><i class="typcn typcn-book"></i>Change Role</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="{{url('change_role/admin')}}" class="nav-sub-link">Admin</a></li>
              <li class="nav-sub-item"><a href="{{url('change_role/manager')}}" class="nav-sub-link">Manager</a></li>
              <li class="nav-sub-item"><a href="{{url('change_role/user')}}" class="nav-sub-link">User</a></li>
              
            </ul>
          </li>
          @endif
        </ul><!-- nav -->
      </div><!-- az-sidebar-body -->
    </div><!-- az-sidebar -->
    <div class="az-content az-content-dashboard-nine">
      <div class="az-header az-header-dashboard-nine">
        <div class="container-fluid">
          <div class="az-header-left">
            <a href="#" id="azSidebarToggle" class="az-header-menu-icon"><span></span></a>
          </div><!-- az-header-left -->
          <div class="az-header-center">
            <input type="search" id="search" onkeyup="search()" class="form-control" placeholder="Search for project via name or project ID...">
            <button class="btn"><i class="fas fa-search"></i></button>
          
          </div>
            
          <div class="az-header-right">
           
           
            <div class="dropdown az-profile-menu">
              <a href="#" class="az-img-user"><img src="{{asset('uploads/image/'.$image->image)}}" alt=""></a>
              <div class="dropdown-menu">
                <div class="az-dropdown-header d-sm-none">
                  <a href="#" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                </div>
                <div class="az-header-profile">
                  <div class="az-img-user">
                    <img src="{{asset('uploads/image/'.$image->image)}}" alt="">
                  </div><!-- az-img-user -->
                  <h6>{{$user->name}}</h6>
                  <span>{{$role_name}}</span>
                </div><!-- az-header-profile -->

                <a href="#" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                <a href="#" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
                <a href="#" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>
               
                <a class="dropdown-item" href="{{url('logout_user')}}"><i class="typcn typcn-power-outline"></i> Sign Out</a>
               
              </div><!-- dropdown-menu -->
            </div>
          </div><!-- az-header-right -->
        </div><!-- container -->
      </div><!-- az-header -->
       <div id="search_res" style="padding:5px">


        </div>
   
      <div class="az-content-header">
        <div class="az-content-header-top float-left">
        
       
      </div><!-- az-content-header -->
        <div class="well card">
            @if(Session::has('message'))
            @php
                $message=Session::get('message');
            @endphp
            <h6 class="text-info text-justify">{{$message}}</h6>
            @endif
        </div>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
       
        @yield('content')

     
     
    </div><!-- az-content -->
 
    <script src="{{asset('back/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('back/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('back/lib/ionicons/ionicons.js')}}"></script>
    <script src="{{asset('back/lib/jquery.flot/jquery.flot.js')}}"></script>
    <script src="{{asset('back/lib/jquery.flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('back/lib/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('back/lib/jqvmap/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('back/lib/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

    <script src="{{asset('back/js/azia.js')}}"></script>
    <script src="{{asset('back/js/dashboard.sampledata.js')}}"></script>
     {{-- <script src="https//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> --}}
    <script src="https//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="https//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <script>
    function time(){
     var d = new Date();
     var month=d.getMonth();
     var date=d.getDate();
     var year=d.getFullYear();
     var week=d.getDay();
     console.log(d.getDate());
     document.getElementById("date").innerHTML=date;
     $('#date').html(date);
     $('#month').html(month);
     $('#day').html(week);
      
    }
    </script>
    <script>
      $(function(){
        'use strict'

        $('.az-sidebar .with-sub').on('click', function(e){
          e.preventDefault();
          $(this).parent().toggleClass('show');
          $(this).parent().siblings().removeClass('show');
        })

        $(document).on('click touchstart', function(e){
          e.stopPropagation();

          // closing of sidebar menu when clicking outside of it
          if(!$(e.target).closest('.az-header-menu-icon').length) {
            var sidebarTarg = $(e.target).closest('.az-sidebar').length;
            if(!sidebarTarg) {
              $('body').removeClass('az-sidebar-show');
            }
          }
        });


        $('#azSidebarToggle').on('click', function(e){
          e.preventDefault();

          if(window.matchMedia('(min-width: 992px)').matches) {
            $('body').toggleClass('az-sidebar-hide');
          } else {
            $('body').toggleClass('az-sidebar-show');
          }
        });

        new PerfectScrollbar('.az-sidebar-body', {
          suppressScrollX: true
        });

      });
    </script>
    <script>
      function search(){
        var m=$('#search').val();
        console.log(m);
         $.ajax({
              type: 'get',
              url : '{{URL::to('search')}}',
              data:{'data': m},
              success:function(data){
               console.log(data);
               $('#search_res').html(data);
              }
          });

      }
    </script>
   
  </body>

</html>
