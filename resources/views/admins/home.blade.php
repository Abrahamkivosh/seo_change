
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

  <div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif


</div>

@section('nav')
@include('include.navbar')
@endsection
@section('aside-left')
@include('include.aside-left')
@endsection
@section('content')
<!-- Main Content -->
  <section class="content home">
    <div class="block-header">
      <div class="row">
        <div class="col-lg-7 col-md-6 col-sm-12">
          <h2>SEO Kenya
            <small class="text-muted">Welcome to the management dashboard</small>
          </h2>
        </div>
        <div class="col-lg-5 col-md-6 col-sm-12">
          <ul class="breadcrumb float-md-right">
            <li class="breadcrumb-item">
              <a href="home">
                <i class="zmdi zmdi-home"></i> SEO Kenya</a>
            </li>
            <li class="breadcrumb-item active">Admin</li>
          </ul>
        </div>
      </div>
    </div>



    </div>
  </section>
@stop

@section('aside-right')
@include('include.aside-right')
@stop

