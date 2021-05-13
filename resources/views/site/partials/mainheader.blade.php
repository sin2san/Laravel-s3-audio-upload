<header id="header" class="header">
    <div class="middle-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-12">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            @if($option->logo)
                                <img src="{{ asset('storage/options/'.$option->logo) }}" alt="{{ $option->name }}">
                            @else
                                <h4><span>{{ str_limit($option->name, 10) }}</span> {{  str_limit($option->name, 10) }}</h4>
                            @endif
                        </a>
                    </div>
                    <div class="link">
                        <a href="{{ url('/') }}">
                            @if($option->logo)
                                <img src="{{ asset('storage/options/'.$option->logo) }}" alt="{{ $option->name }}">
                            @else
                                <h4><span>{{ str_limit($option->name, 10) }}</span> {{ str_limit($option->name, 10) }}</h4>
                            @endif
                        </a>
                    </div>
                    <button class="mobile-arrow"><i class="fa fa-bars"></i></button>
                    <div class="mobile-menu"></div>
                </div>
                <div class="col-lg-10 col-12">
                    <div class="mainmenu">
                        <nav class="navigation">
                            <ul class="nav menu">
                                @if(Auth::user())
                                    @role('admin')
                                    <li><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                                    @endrole
                                @endif
                                <li class="{{ (Request::is('/') ? 'active' : '') }}"><a href="{{ url('/') }}">Home</a></li>
                                <li class="add-my-audio-class"><a href="{{ url('intro') }}">Add My Audio</a></li>
                                @if(Auth::user())
                                <li class="{{ (Request::is('feeds', 'feed/audio*', 'audio/add') ? 'active' : '') }}"><a href="{{ url('feeds') }}">Feed</a></li>
                                @endif
                                @if(!Auth::user())
                                    <li class="{{ (Request::is('login') ? 'active' : '') }}"><a href="{{ url('login') }}">Login</a></li>
                                @endif
                                @if(Auth::user())
                                    <li><a href="{{ url('logout') }}">Logout</a></li>
                                @endif
                            </ul>
                        </nav>
                        <div class="button">
                            @if(Auth::user())
                                <a href="{{ url('intro') }}" class="btn"><i class="fa fa-microphone mr-1"></i> Add My Audio</a>
                            @else
                                <a href="{{ url('register') }}" class="btn"><i class="fa fa-user-circle-o mr-1"></i> New User?</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
