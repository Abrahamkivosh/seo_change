<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}



    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  {{-- {{ config('app.name', 'SEO Kenya') }} --}}
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <!-- Favicon-->
  <link href="{{ asset('assets/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
  <!--WaitMe Css-->
  <link rel="stylesheet" href="{{ asset('assets/plugins/waitme/waitMe.css') }}" />
  <!-- Custom Css -->
  <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/color_skins.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/authentication.css') }}">
   <script src="{{ asset('css/app.css') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/inbox.css') }}">



    <script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>
    <!-- Lib Scripts Plugin Js -->
    <script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script>
    <!-- Lib Scripts Plugin Js -->

    <script src="{{ asset('assets/bundles/countTo.bundle.js') }}"></script>
    <!-- Jquery CountTo Plugin Js -->
    <script src="{{ asset('assets/bundles/knob.bundle.js') }}"></script>
    <!-- Jquery Knob Plugin Js -->
    <script src="{{ asset('assets/bundles/sparkline.bundle.js') }}"></script>
    <!-- Sparkline Plugin Js -->
    <script src="{{ asset('assets/plugins/waitme/waitMe.js') }}"></script>
    <!-- Wait Me Plugin Js -->
    <script src="{{ asset('assets/js/pages/widgets/infobox/infobox-1.js') }}"></script>
    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('assets/js/pages/charts/jquery-knob.js') }}"></script>
    <script src="{{ asset('assets/js/pages/charts/sparkline.js') }}"></script>
    <script src="{{ asset('assets/js/pages/cards/basic.js') }}"></script>


    <!-- Scripts -->
    {{--  <script src="{{ asset('js/app.js') }}" defer></script>  --}}



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    {{--  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('js/app.js') }}" rel="stylesheet">  --}}




</head>
{{-- <body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger f-->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
                            <li><a href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a></li>
                        @else

                        <li><a href="{{ route('companies.index') }}"><i class="fa fa-building" aria-hidden="true"></i> Companies</a></li>
                            <li><a href="{{ route('projects.index') }}"><i class="fa fa-briefcase" aria-hidden="true"></i> Projects</a></li>
                            <li><a href="{{ route('tasks.index') }}"><i class="fa fa-tasks" aria-hidden="true"></i> Tasks</a></li>
@if(Auth::user()->role_id == 1)


        <li class="dropdown">
                                        <a href="#" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-expanded="false">
                                        <i class="fa fa-user" aria-hidden="true"></i>  Admin <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu" role="menu">
        <li><a href="{{ route('projects.index') }}"><i class="fa fa-briefcase" aria-hidden="true"></i> All Projects</a></li>
        <li><a href="{{ route('users.index') }}"><i class="fa fa-user" aria-hidden="true"></i> All Users</a></li>
        <li><a href="{{ route('tasks.index') }}"><i class="fa fa-tasks" aria-hidden="true"></i> All Tasks</a></li>
        <li><a href="{{ route('companies.index') }}"><i class="fa fa-building" aria-hidden="true"></i> All Companies</a></li>
        <li><a href="{{ route('roles.index') }}"><i class="fa fa-envelope" aria-hidden="true"></i> All Roles</a></li>

                                        </ul>
                                    </li>

        @endif


                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle"
                                data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>  {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fa fa-power-off" aria-hidden="true"></i>  Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container" >

        @include('partials.errors')
        @include('partials.success')

            <div class="row">
                @yield('content')

            </div>
         </div>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    @yield('jqueryScript')
</body>
</html> --}}


<body class="theme-orange">


    @yield('requirements')
    @include('include.messages')

    <!-- Top Bar -->
     @yield('nav')
    <!-- Left Sidebar -->
    @yield('aside-left')
    <!-- Right Sidebar -->
    @yield('aside-right')
    @yield('aside-left-mail')

    @yield('user-info')

    <main class="py-4">
        @yield('content')
    </main>
</div>

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
<script>
    $('textarea').ckeditor();
    // $('.textarea').ckeditor(); // if class is prefered.
</script>
</body>
</html>
