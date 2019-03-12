@extends('layouts.app')

@section('requirements')

<div class="container0">
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

<!-- Chat-launcher -->

<section class="content inbox">
    <div class="container-fluid">
        <div class="card">
            <div class="row bg-white">
                <div class="col-lg-1 col-md-2 col-3">
                    <div class="checkbox m-t-20 m-l-15">
                        <input type="checkbox" id="basic_checkbox_0">
                        <label for="basic_checkbox_0"></label>
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






             <!-- @if(count($mails) > 0)
                 <div class="row">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                         <ul class="mail_list list-group list-unstyled">

                            <table>

                            @foreach ($mails as $mail)

                                <li class="list-group-item">
                                   {{-- <p>{{ $mail -> user()->email }}</p> --}}
                                   <tr>TO : {{ $mail -> to }}</tr>
                                     <tr>Subject :{{ $mail -> subject }}</tr>
                                    <td>Message :{{ $mail -> body }}</td>
                                </li>

                        @endforeach
                            </table>
                        </ul>
                    </div>
                 </div>
            @endif -->

             <table class="table table-striped">
                         {{-- <th>FROM</th>  --}}
                        <th>TO</th>
                        <th>SUBJECT</th>
                        @foreach ($mails as $mail )
                        <tr>
                            {{-- <td>{{ $mail -> user() ->email }}</td>  --}}
                            <td><a href="/mail/{{ $mail->id }}">{{ $mail ->to }}</a></td>
                            <td>{{ $mail ->subject }}</td>
                            <td><a href="/mail/{{ $mail->id }}" class="btn btn-primary">READ</a></td>
                            <td> {!! Form::open(['action'=>['ClientMailsController@destroy',$mail->id],'method'=>'POST','class'=>'pull-right']) !!}

                                    {!! Form::hidden('_method', 'DELETE') !!}
                                    {!! Form::submit('DELETE', ['class'=>'btn btn-danger']) !!}
                                {!! Form::close() !!}</td>
                        </tr>
                        @endforeach
                    </table>





        <div class="row">
            <div class="col-lg-12">
                <ul class="pagination m-t-20">
                    {{ $mails ->links() }}


                </ul>
            </div>
        </div>
    </div>
</section>

@stop

