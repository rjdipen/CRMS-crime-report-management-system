<!-- Second navbar -->
<div class="navbar navbar-default navbar-xs">
    <ul class="nav navbar-nav">
        <a class="navbar-brand" href="#">HelpLine : <i class="icon-phone-wave"></i> 999</a>
        <ul class="nav navbar-nav pull-right visible-xs-block">
            <li><a data-toggle="collapse" data-target="#social-media"><i class=" icon-link2"></i></a></li>
        </ul>
    </ul>
    <div class="navbar-collapse collapse" id="social-media">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><i class="icon-facebook2"></i></a></li>
            <li><a href="#"><i class="icon-twitter2"></i></a></li>
            <li><a href="#"><i class="icon-youtube"></i></a></li>
            <li><a href="#"><i class="icon-instagram"></i></a></li>
            <li><a href="#"><i class="icon-google-plus2"></i></a></li>
        </ul>
    </div>
</div>
<!-- /second navbar -->
<!-- Main navbar -->
<div class="navbar navbar-inverse" id="main-navbar">
    <div class="navbar-header">
        <a class="navbar-brand pt-5 pb-5 pl-20 pr-10" href="{{action('UserController@index')}}"><img src="{{asset('public/assets/images/2.png')}}"  class="" alt="" style="height: 32px;"></a>
        <h5 class="text-bold text-uppercase">CRMS</h5>

        <ul class="nav navbar-nav pull-right visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-menu3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{action('UserController@index')}}">Home</a></li>
            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <span>Complain</span>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="{{action('Fir\FirController@index')}}"><i class=" icon-file-presentation"></i> FIR Registration</a></li>
                    <li><a href="{{action('Gd\GdController@index')}}"><i class="icon-pencil5"></i> General Dairy</a></li>
                </ul>
            </li>

            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <span>Missing</span>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="{{action('Missing\UserGoodsController@index')}}"><i class=" icon-cart5"></i>Goods</a></li>
                    <li><a href="{{action('Missing\UserPersonController@index')}}"><i class=" icon-users4"></i> Person</a></li>
                </ul>
            </li>
            <li><a href="{{action('MostWanted\UserMostWantedController@index')}}">Most Wanted</a></li>
            <li><a href="{{action('Blog\UserBlogController@index')}}">Blog</a></li>

            @if(isset(Auth::user()->email))
            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{asset('public/assets/images/placeholder.jpg')}}" alt="">
                    <span>{{ isset(Auth::user()->name) ? Auth::user()->name : 'User name' }}</span>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="#"><i class="icon-paperplane"></i> {{ isset(Auth::user()->email) ? Auth::user()->email : 'User email' }}</a></li>

                    <li><a href="{{action('Dashboard\DashboardController@index')}}"><i class="icon-coins"></i> Dashboard</a></li>
                    <li class="divider"></li>
                    <li><a href="" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="icon-switch2"></i> Logout</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
                @else
                <li><a href="{{route('login')}}">Login</a></li>
                @endif

        </ul>
    </div>
</div>
<!-- /main navbar -->
