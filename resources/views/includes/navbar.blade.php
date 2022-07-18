<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/optistrech')}}">Opti-Stretch</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse pull-right">
            <ul class="nav navbar-nav">
                {{--<li class="{{ Request::segment(1) == '' ? 'active' : '' }}"><a href="/">Home</a></li>--}}
                @if (Auth::check())
                <li class="{{ Request::segment(1) == 'book' ? 'active' : '' }}"><a href="{{url('/book')}}"><span class="fa fa-fw fa-book"></span> Read The Book</a></li>
                @endif
                <li class="{{ Request::segment(1) == 'company' ? 'active' : '' }}"><a href="{{url('/company')}}">Company Overview</a></li>
                <li class="{{ Request::segment(1) == 'biographies' ? 'active' : '' }}"><a href="{{url('/biographies')}}">Biographies</a></li>
                <li class="{{ Request::segment(1) == 'inthemedia' ? 'active' : '' }}"><a href="{{url('/inthemedia')}}">In The Media</a></li>
                <li class="{{ Request::segment(1) == 'faq' ? 'active' : '' }}"><a href="{{url('/faq')}}">FAQ's</a></li>
                <li class="{{ Request::segment(1) == 'classes' ? 'active' : '' }}"><a href="{{url('/classes')}}">Classes</a></li>
                <li class="{{ Request::segment(1) == 'testimonials' ? 'active' : '' }}"><a href="{{url('/testimonials')}}">Testimonials</a></li>
                <li class="{{ Request::segment(1) == 'knowledge' ? 'active' : '' }}"><a href="{{url('/knowledge')}}">Knowledge Base</a></li>
                <li class="{{ Request::segment(1) == 'contact' ? 'active' : '' }}"><a href="{{url('/contact')}}">Contact Us</a></li>
                @if (Auth::guest())
                <li class="{{ Request::segment(1) == 'login' ? 'active' : '' }}"><a href="{{('/login')}}">Login/Signup</a></li>
                @else
                <li><a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                     <i class="nav-icon fas fa-sign-out-alt"></i>
                        Logout
    
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                @endif
                
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
