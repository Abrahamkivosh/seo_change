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

<!-- Right Sidebar -->
@section('aside-right')
@include('include.aside-right')
@endsection


<section class="content inbox">
    <div class="container-fluid">
        <div class="card">
            <div class="row bg-white">
                <div class="col-lg-1 col-md-2 col-3">
                    <div class="checkbox m-t-20 m-l-15">
                        <input type="checkbox" id="basic_checkbox_1">
                        <label for="basic_checkbox_1"></label>
                    </div>
                </div>
                <div class="col-lg-4 col-md-3 hidden-sm-down">
                    <div class="input-group m-t-10"> <span class="input-group-addon"> <i class="zmdi zmdi-search"></i></span>
                        <div class="form-line">
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="card">
           <div class="body">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-xl-12">

                        <div class="form-group form-float">
                                {!! Form::open(['action'=>'ClientMailsController@store','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
                                <div class="form-group">
                            <div class="form-line">

                                    {!! Form::email('to','', ['class'=>'form-control']) !!}

                                    {!! Form::label('to', 'To',["class"=> "form-label"]) !!}
                            </div>
                        </div>
                        <div class="form-group form-float ">
                            <div class="form-line">
                                    {!! Form::text('subject', '', ['class'=>'form-control']) !!}
                                    {!! Form::label('subject', 'Subject',["class"=> "form-label"]) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <p>Content :</p>

                        {!! Form::textarea('body', '', ['placeholder'=>'Write your message here','class'=>' text text-box  col-md-12 col-lg-12 col-xl-12 ','id'=>'article-ckeditor']) !!}
                        <br />
                        {!! Form::submit('Send Message', ['class'=>'btn btn-raised btn-primary waves-effect m-t-20']) !!}
                    </div>

                    {!! Form::close() !!}



                </div>
           </div>
        </div>
    </div>
</section>

@stop

