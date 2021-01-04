<nav class="navbar navbar-expand-md navbar-light bg-white py-4">
    <div class="container">
        <a class="navbar-brand" href="{{ Auth::user() ? url('/home') : url('/') }}">
            {{ config('app.name', 'MedApp') }}
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                  @if (Route::has('login'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                  @endif

                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item dropdown">
                          {{-- {{ Auth::user()->name }}
                          <span class="caret"></span> --}}

                      <div class="" aria-labelledby="navbarDropdown">

                          @if (Auth::user()->hasRole('admin'))

                              <a class="nav-item d-md-none" href="{{ route('admin.visits.index') }}">
                                  Visits
                              </a>
                              <a class="nav-item d-md-none" href="{{ route('admin.doctors.index') }}">
                                  Doctors
                              </a>
                              <a class="nav-item d-md-none" href="{{ route('admin.patients.index') }}">
                                  Patients
                              </a>
                          @endif
                          <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                                                                                                                                                                                                                                                                               document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

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
