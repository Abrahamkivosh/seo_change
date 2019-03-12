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
                    <a href="dashboard.">
                      <i class="zmdi zmdi-home"></i> SEO Kenya</a>
                  </li>
                  <li class="breadcrumb-item active">Admin</li>
                </ul>
              </div>
            </div>
          </div>


          <div class="container-fluid">



          <div class="row clearfix">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                  <div class="header">
                  <p>
                  <p>
                    <h2>Expired SEO Clients Projects</h2>
                    <p>
                    <p>
                    <ul class="header-dropdown m-r--5">
                      <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                          aria-expanded="false">
                          <i class="zmdi zmdi-more-vert"></i>
                        </a>
                        <ul class="dropdown-menu float-right">
                          <li>
                            <a href="javascript:void(0);">Action</a>
                          </li>
                          <li>
                            <a href="javascript:void(0);">Another action</a>
                          </li>
                          <li>
                            <a href="javascript:void(0);">Something else here</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="body">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>NAME</th>
                            <th>Website</th>
                            <th>STATUS</th>
                            <th>View Project</th>
                            <th>START DATE</th>
                            <th>END DATE</th>
                            <th>MONTHLY SUBSCRIPTION</th>
                          </tr>
                        </thead>
                        <tbody>

                          <form action=" action('AdminsController@expiredservices') }}" method="POST" >

                                    @foreach ($expiredservices as $expire)


                                    <tr>
                                        <td>1</td>
                                            <td>
                                               <a href="#"> <span>{{ $expire -> name }}</span></a>
                                            </td>
                                            <td><a href="#">
                                                <span class="text text-link">{{ $expire ->website }}</span></a>
                                            </td>
                                            <td>

                                                        @switch($expire->status)
                                                        @case(0)

                                                        <span class="label label-important">    PEDDING </span>
                                                            @break
                                                        @case(1)
                                                        <span class="label label-success">   ON GOINING</span>
                                                            @break
                                                            @case(2)
                                                            <span class="label label-danger">   EXPIRED</span>
                                                            @break
                                                            @case(3)
                                                            <span class="label label-success">   COMPLETED</span>
                                                            @break
                                                            @case(4)
                                                            <span class="label label-warning">  WAITING APPROVAL</span>
                                                            @break

                                                        @default
                                                        <div class="alert alert-primary" role="alert">
                                                          PROBLEM
                                                        </div>

                                                    @endswitch

                                            </td>
                                                <td>
                                                        <div class="col-lg-12"><div class="pull-center">
                                                            <a href="{{ route('projects.show',$expire->id) }}" class="btn btn-raised btn-primary waves-effect">View Project</a></div>
                                                        </div>
                                                </td>

                                            <td>
                                                    <span class="text-success">{{ $expire->created_at }}</span>
                                            </td>
                                            <td>
                                                    <span class="text-success">{{ $expire->updated_at }}</span>
                                            </td>
                                            <td>
                                                    <span class=" text-danger">Null</span>
                                            </td>
                                     </tr>





                                  @endforeach


                          </form>



                        </tbody>
                      </table>
                    </div>

                  </div>
                </div>
              </div>
          </div>
          </div>
        </section>

@section('nav')
@include('include.navbar')
@endsection
@section('aside-left')
@include('include.aside-left')
@endsection
@section('content')
<!-- Main Content -->
@stop

@section('aside-right')
@include('include.aside-right')
@stop
