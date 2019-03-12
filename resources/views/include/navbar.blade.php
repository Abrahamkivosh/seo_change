<nav class="navbar">
        <div class="col-12">

            <div class="navbar-header">
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="home">SEO Kenya</a>
            </div>

            <ul class="nav navbar-nav navbar-left">
                <li><a href="javascript:void(0);" class="ls-toggle-btn" data-close="true"><i class="zmdi zmdi-swap"></i></a></li>
                <li><a href="/mail" class="inbox-btn hidden-sm-down" data-close="true"><i class="zmdi zmdi-email"></i></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="zmdi zmdi-search"></i></a></li>



                <li>
                    <a  href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i></a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form>




                </li>
                <li class=""><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
            </ul>
        </div>
      </nav>
