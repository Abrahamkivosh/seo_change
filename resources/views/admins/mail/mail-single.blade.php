@extends('layouts.app')

@section('requirements')
<!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <p>Please wait...</p>
            <div class="m-t-30"><img src="assets/images/logo.svg" width="48" height="48" alt="Nexa"></div>
        </div>
    </div>
    <!-- Overlay For Sidebars -->
  <div class="overlay"></div>
  <!-- Search  -->
  <div class="search-bar">
    <div class="search-icon">
      <i class="material-icons">search</i>
    </div>
    <input type="text" placeholder="Explore SEO Kenya...">
    <div class="close-search">
      <i class="material-icons">close</i>
    </div>
  </div>
@stop

{{--  <div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif


</div>  --}}

@section('nav')
@include('include.navbar')
@endsection

@section('aside-left')
@include('include.aside-left-mail')
@endsection

@section('content')
<!-- Main Content -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Search  -->
<div class="search-bar">
    <div class="search-icon"> <i class="material-icons">search</i> </div>
    <input type="text" placeholder="Explore Nexa...">
    <div class="close-search"> <i class="material-icons">close</i> </div>
</div>
@section('navbar')
@include('include.navbar')
@endsection

<!-- Left Sidebar -->
@section('aside-left')
@include('include.aside-left-mail')
@endsection

<!-- Right Sidebar -->
@section('aside-right')
@include('include.aside-right')
@endsection

<!-- Chat-launcher -->
<div class="chat-launcher"></div>
<div class="chat-wrapper">
    <div class="card">
        <div class="header">
            <h2>TL Groups</h2>
        </div>
        <div class="body">
            <div class="chat-widget">
            <ul class="chat-scroll-list clearfix">
                <li class="left float-left">
                    <img src="assets/images/xs/avatar3.jpg" class="rounded-circle" alt="">
                    <div class="chat-info">
                        <a class="name" href="#">Alexander</a>
                        <span class="datetime">6:12</span>
                        <span class="message">Hello, John </span>
                    </div>
                </li>
                <li class="right">
                    <div class="chat-info"><span class="datetime">6:15</span> <span class="message">Hi, Alexander<br> How are you!</span> </div>
                </li>
                <li class="right">
                    <div class="chat-info"><span class="datetime">6:16</span> <span class="message">There are many variations of passages of Lorem Ipsum available</span> </div>
                </li>
                <li class="left float-left"> <img src="assets/images/xs/avatar2.jpg" class="rounded-circle" alt="">
                    <div class="chat-info"> <a class="name" href="#">Elizabeth</a> <span class="datetime">6:25</span> <span class="message">Hi, Alexander,<br> John <br> What are you doing?</span> </div>
                </li>
                <li class="left float-left"> <img src="assets/images/xs/avatar1.jpg" class="rounded-circle" alt="">
                    <div class="chat-info"> <a class="name" href="#">Michael</a> <span class="datetime">6:28</span> <span class="message">I would love to join the team.</span> </div>
                </li>
                    <li class="right">
                    <div class="chat-info"><span class="datetime">7:02</span> <span class="message">Hello, <br>Michael</span> </div>
                </li>
            </ul>
            </div>
            <div class="input-group">
                <div class="form-line">
                    <input type="text" class="form-control date" placeholder="Enter your email...">
                </div>
                <span class="input-group-addon"> <i class="material-icons">send</i> </span>
            </div>
        </div>
    </div>
</div>

<section class="content inbox">
    <div class="container-fluid">
        <div class="card">
            <div class="row bg-white">
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="input-group m-t-10"> <span class="input-group-addon"> <i class="zmdi zmdi-search"></i></span>
                        <div class="form-line">
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-6 text-right">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default waves-effect col-green"><i class="zmdi zmdi-archive"></i></button>
                        <button type="button" class="btn btn-default waves-effect col-amber"><i class="zmdi zmdi-alert-circle"></i></button>
                        <button type="button" class="btn btn-default waves-effect col-red"><i class="zmdi zmdi-delete"></i></button>
                    </div>

                </div>
            </div>
        </div>
        <div class="card">
            <div class="body">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="m-t-0">{{ $mail->to }}</h3>
                        <div class="media">
                            <div class="float-left">
                                <div class="m-r-20"> <img class="rounded" src="assets/images/xs/avatar7.jpg" alt=""> </div>
                            </div>
                            <div class="media-body">
                                <p class="m-b-0">
                                    <span class="text-muted">from</span>
                                    <a href="javascript:;" class="text-default">{{ $mail->to }}</a>
                                    <span class="text-muted text-sm float-right">{{ $mail ->created_at }}</span>
                                </p>
                                <p class="m-b-0"><span class="text-muted">to</span>Me</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="col-md-12">
                        <p>SUBJECT :<h3> {{ $mail ->subject }}</h3></p><hr>
                        <p><small>{{ $mail ->body }}</small></p>
                        <hr>
                    </div>

                </div>
            </div>
        </div>
        <div class="card">
            <div class="body">
                <div class=""> Click here to <a href="/mail/create/{{ $mail ->id }}">Reply</a> or <a href="/mail/create/{{ $mail ->id }}">Forward</a> </div>
            </div>
        </div>
    </div>
</section>

@stop

@section('aside-right')
@include('include.aside-right')
@stop
