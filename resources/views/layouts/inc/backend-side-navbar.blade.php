<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/')}}" target="_blank" class="brand-link">
      {{-- <img src="" alt="Admin" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
      <span class="brand-text font-weight-light">Greenland Law Firm</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('images/law1.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{route('dashboard.index')}}" class="nav-link {{request()->is('dashboard*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>

          <li class="nav-item">
          <a href="{{route('user.index')}}" class="nav-link {{request()->is('user*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                User Register
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">@php

                    $user = App\Models\User::where('id', '>=','1' )->get();
                    $wordCount = $user->count();
                @endphp
            {{$wordCount}}
            </span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('document.index')}}" class="nav-link {{request()->is('document*') ? 'active':''}}">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  My Document
                  <i class="fas fa-angle-left right"></i>
                  <span class="badge badge-info right">
                      @php
                      $mydoc = App\Models\Mydocument::where('id', '>=','1' )->get();
                      $wordCount = $mydoc->count();
                  @endphp
              {{$wordCount}}
              </span>
                </p>
              </a>
            </li>

            <li class="nav-item">
            <a href="{{route('header.index')}}" class="nav-link {{request()->is('header*') ? 'active' :""}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Header
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>

            <li class="nav-item">
                <a href="{{route('menu.index')}}" class="nav-link {{request()->is('menu*') ? 'active' : ""}}">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                      Menu
                      <i class="fas fa-angle-left right"></i>
                      <span class="badge badge-info right">
                          @php
                          $mydoc = App\Models\Menu::where('id', '>=','1' )->get();
                          $wordCount = $mydoc->count();
                      @endphp
                  {{$wordCount}}
                  </span>
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('submenu.index')}}" class="nav-link {{request()->is('submenu*') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                          Submenu
                          <i class="fas fa-angle-left right"></i>
                          <span class="badge badge-info right">
                              @php
                              $mydoc = App\Models\Submenu::where('id', '>=','1' )->get();
                              $wordCount = $mydoc->count();
                          @endphp
                      {{$wordCount}}
                      </span>
                        </p>
                      </a>
                    </li>

          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{route('about.index')}}" class="nav-link {{request()->is('about*') ? 'active' :""}}">
                  <i class="far fa-eye nav-icon"></i>
                  <p>About Us</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('services.index')}}" class="nav-link {{request()->is('services*') ? 'active' :""}}">
                    <i class="far fa-eye nav-icon"></i>
                    <p>Our Services</p>
                  </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('objective.index')}}" class="nav-link {{request()->is('objective*') ? 'active' :""}}">
                        <i class="far fa-eye nav-icon"></i>
                        <p>Our Objectives</p>
                      </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('portfolio.index')}}" class="nav-link {{request()->is('portfolio*') ? 'active' :""}}">
                        <i class="far fa-eye nav-icon"></i>
                        <p>Our Portfolio</p>
                      </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('activity.index')}}" class="nav-link">
                        <i class="far fa-eye nav-icon"></i>
                        <p>Our Activities</p>
                      </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('message.index')}}" class="nav-link">
                        <i class="far fa-eye nav-icon"></i>
                        <p>Message From MD</p>
                      </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('team.index')}}" class="nav-link">
                        <i class="far fa-eye nav-icon"></i>
                        <p>Our Team Members</p>
                      </a>
                </li>


            </ul>
          </li>



        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
