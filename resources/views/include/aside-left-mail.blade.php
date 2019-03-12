<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">

        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">{{ Auth::user()->name }} </div>
            <div class="email">{{ Auth::user()->email }} </div>

        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="/home" >
                    <i class="zmdi zmdi-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="active open">
                <a href="/mail">
                    <i class="zmdi zmdi-email"></i>
                    <span>Inbox</span>
                </a>
            </li>
            <li>
                <a href="/mail/create" >
                    <i class="zmdi zmdi-plus-circle"></i>
                    <span>Compose Mail</span>
                </a>
            </li>

                            <li>
                                <i  class=" glyphicon-alert glyphicon"></i>

                                      <a class="dropdown-item" href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                                         {{ __('Logout') }}
                                             </a>

                                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                         @csrf
                                              </form>


                             </li>

        </ul>
    </div>
    <!-- #Menu -->
</aside>
