<!--navbar start-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark py-3" data-aos="fade-down">
        <div class="container">
        @php
            $logo = App\Models\Header::all();
        @endphp
        @foreach ($logo as $logos )
          <a class="navbar-brand fs-3" href="#"><img src="{{asset('uploads/header/'.$logos->logo)}}" class="img-fluid" width="40px"><span style="color: #ff5B01;"> GreenLand</span> Law</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

        @endforeach
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                @php
                    $menu = App\Models\Menu::with('submenus')->where('status','0')->orderBy('order','asc')->get();
                @endphp
                @foreach ($menu as $menus )
                    @if (count($menus->submenus)>0)

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{$menus->title}}
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        @foreach ($menus->submenus as $submenus )
                                        <li><a class="dropdown-item" href="{{$submenus->slug}}">{{$submenus->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>

                        @else
                        <li class="nav-item">
                            <a class="nav-link {{$menus->slug==request()->path() ? 'active' : ''}}" href="{{$menus->slug}}">{{$menus->title}}</a>
                        </li>
                    @endif

                @endforeach

                {{--  <li class="nav-item">
                    <a class="nav-link btn btn-main" aria-current="page" href="#contact">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-second" aria-current="page" href="#contact">Register</a>
                </li>  --}}
                <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link btn btn-main" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link btn btn-second" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                     <a class="dropdown-item" href="{{route('document')}}">My Document</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest



            </ul>

          </div>
        </div>
      </nav>
    <!--navbar end-->
