<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>{{ $title }}</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 

    <!-- FontAwesome JS-->
    <script defer src="{{ asset('assets/plugins/fontawesome/js/all.min.js') }}"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="{{ asset('assets/css/portal.css') }}">

      <!-- Trix Editor-->
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
  <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

</head> 

<body class="app">   	
    <header class="app-header fixed-top">	   	   @include('dashboard.components.navbar')  
    <!--//app-header-inner-->
        @include('dashboard.components.sidepanel')
    <!--//app-sidepanel-->
    </header><!--//app-header-->
    
    <div class="app-wrapper">
	    <div class="app-content pt-3 p-md-3 p-lg-4">
	       <div class="container-xl">
	        @yield('index')
	       </div>
	    @include('dashboard.components.footer')
    </div>
    </div><!--//app-wrapper-->    					

    
    <script src="{{ asset('assets/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>  

    <!-- Charts JS -->
    <script src="{{ asset('assets/plugins/chart.js/chart.min.js') }}"></script> 
 
    <!-- Page Specific JS -->
    <script src="{{asset('assets/js/app.js') }}"></script> 

</body>
</html> 

