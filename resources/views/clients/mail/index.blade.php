<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('app.name')}}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href=" {{ asset('../../dist/css/adminlte.min.css') }}">
  {{ asset('css/app.css') }}
  <!-- iCheck -->
  <link rel="stylesheet" href=" {{ asset('../../plugins/iCheck/flat/blue.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
              <a href="../../index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
              <a href="#" class="nav-link">Contact</a>
            </li>
          </ul>
      
          <!-- SEARCH FORM -->
          <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fa fa-search"></i>
                </button>
              </div>
            </div>
          </form>
      
          <!-- Right navbar links -->
          <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fa fa-comments-o"></i>
                <span class="badge badge-danger navbar-badge">3</span>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                  <!-- Message Start -->
                  <div class="media">
                    <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                    <div class="media-body">
                      <h3 class="dropdown-item-title">
                        Brad Diesel
                        <span class="float-right text-sm text-danger"><i class="fa fa-star"></i></span>
                      </h3>
                      <p class="text-sm">Call me whenever you can...</p>
                      <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
                    </div>
                  </div>
                  <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <!-- Message Start -->
                  <div class="media">
                    <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                    <div class="media-body">
                      <h3 class="dropdown-item-title">
                        John Pierce
                        <span class="float-right text-sm text-muted"><i class="fa fa-star"></i></span>
                      </h3>
                      <p class="text-sm">I got your message bro</p>
                      <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
                    </div>
                  </div>
                  <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <!-- Message Start -->
                  <div class="media">
                    <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                    <div class="media-body">
                      <h3 class="dropdown-item-title">
                        Nora Silvester
                        <span class="float-right text-sm text-warning"><i class="fa fa-star"></i></span>
                      </h3>
                      <p class="text-sm">The subject goes here</p>
                      <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
                    </div>
                  </div>
                  <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
              </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fa fa-bell-o"></i>
                <span class="badge badge-warning navbar-badge">15</span>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <i class="fa fa-envelope mr-2"></i> 4 new messages
                  <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <i class="fa fa-users mr-2"></i> 8 friend requests
                  <span class="float-right text-muted text-sm">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <i class="fa fa-file mr-2"></i> 3 new reports
                  <span class="float-right text-muted text-sm">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                <i class="fa fa-th-large"></i>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.navbar -->
      
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
          <!-- Brand Logo -->
          <a href="/" class="brand-link">
            <img src="../../dist/img/AdminLTELogo.png"
                 alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
          </a>
      
          <!-- Sidebar -->
          <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                <a href="#" class="d-block">{{ Auth()->User()->name }}</a>
              </div>
            </div>
      
            <!-- Sidebar Menu -->
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-dashboard"></i>
                    <p>
                      Dashboard
                      <i class="right fa fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    
                    <li class="nav-item">
                      <a href="home" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Dashboard</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="dashboard" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Analysis</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="www.tbxhost.co.uk" class="nav-link">
                    <i class="nav-icon fa fa-th"></i>
                    <p>
                      New Offers
                      <span class="right badge badge-danger">New</span>
                    </p>
                  </a>
                </li>
                {{--  <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-pie-chart"></i>
                    <p>
                      Charts
                      <i class="right fa fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="../charts/chartjs.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>ChartJS</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../charts/flot.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Flot</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../charts/inline.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Inline</p>
                      </a>
                    </li>
                  </ul>
                </li>  --}}
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-tree"></i>
                    <p>
                      UI Elements
                      <i class="fa fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="../UI/general.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>General</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../UI/icons.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Icons</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../UI/buttons.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Buttons</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../UI/sliders.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Sliders</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-edit"></i>
                    <p>
                      My project
                      <i class="fa fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="projects/create" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Create new Project</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="project" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Active project</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../forms/editors.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>edit project</p>
                      </a>
                    </li>
                  </ul>
                </li>
                
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-envelope-o"></i>
                    <p>
                      Mailbox
                      <i class="fa fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="/mail" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Inbox</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/mail/create" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Compose</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/mail/edit" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Read</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-book"></i>
                    <p>
                      Pages
                      <i class="fa fa-angle-left right"></i>
                    </p>
                  </a>
                  
            </nav>
            <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
        </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Inbox</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Inbox</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="/mail/create" class="btn btn-primary btn-block mb-3">Compose</a>

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Folders</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item active">
                  <a href="/mail" class="nav-link">
                    <i class="fa fa-inbox"></i> Inbox
                    <span class="badge bg-primary float-right">12</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-envelope-o"></i> Sent
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-file-text-o"></i> Drafts
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-filter"></i> Junk
                    <span class="badge bg-warning float-right">65</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-trash-o"></i> Trash
                  </a>
                </li>
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /. box -->
          
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">Inbox</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm">
                  <input type="text" class="form-control" placeholder="Search Mail">
                  <div class="input-group-append">
                    <div class="btn btn-primary">
                      <i class="fa fa-search"></i>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                <div class="float-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.float-right -->
              </div>
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                  <tr>
                      @foreach ($mails as $mail)
                          
                      
                    <td><input type="checkbox"></td>
                    <td class="mailbox-star"><a href="#"><i class="fa fa-star text-warning"></i></a></td>
                    <td class="mailbox-name"><a href="/mail/{{ $mail -> id }}/edit">{{ Auth::user()->name }}</a></td>
                    <td class="mailbox-subject"><b>{{ $mail ->subject }}</b> 
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">{{ $mail ->created_at }}</td>
                  </tr>
                  @endforeach
                  
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer p-0">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                <div class="float-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.float-right -->
              </div>
            </div>
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2015 - {{ date('Y')}} <a href="http://www.seokenya.co.ke">
        www.seokenya.co.ke</a>.</strong> All rights
    reserved.
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('../../plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('../../plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('../../plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('../../plugins/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('../../dist/js/adminlte.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('../../plugins/iCheck/icheck.min.js') }}"></script>
<!-- Page Script -->
<script>
  $(function () {
    //Enable iCheck plugin for checkboxes
    //iCheck for checkbox and radio inputs
    $('.mailbox-messages input[type="checkbox"]').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass   : 'iradio_flat-blue'
    })

    //Enable check and uncheck all functionality
    $('.checkbox-toggle').click(function () {
      var clicks = $(this).data('clicks')
      if (clicks) {
        //Uncheck all checkboxes
        $('.mailbox-messages input[type=\'checkbox\']').iCheck('uncheck')
        $('.fa', this).removeClass('fa-check-square-o').addClass('fa-square-o')
      } else {
        //Check all checkboxes
        $('.mailbox-messages input[type=\'checkbox\']').iCheck('check')
        $('.fa', this).removeClass('fa-square-o').addClass('fa-check-square-o')
      }
      $(this).data('clicks', !clicks)
    })

    //Handle starring for glyphicon and font awesome
    $('.mailbox-star').click(function (e) {
      e.preventDefault()
      //detect type
      var $this = $(this).find('a > i')
      var glyph = $this.hasClass('glyphicon')
      var fa    = $this.hasClass('fa')

      //Switch states
      if (glyph) {
        $this.toggleClass('glyphicon-star')
        $this.toggleClass('glyphicon-star-empty')
      }

      if (fa) {
        $this.toggleClass('fa-star')
        $this.toggleClass('fa-star-o')
      }
    })
  })
</script>
<script src="{{ asset('../../dist/js/demo.js') }}"></script>
</body>
</html>
