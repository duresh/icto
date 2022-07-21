<header class="p-3 bg-dark text-white">

  <div class="container-fluid">

    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">

        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>

      </a>







      {{-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">

        <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">

      </form> --}}



      @auth

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">

        <li><a href="{{ '/' }}" class="nav-link px-2 text-secondary">Dashboard</a></li>

        <li><a href="#" class="nav-link px-2 text-white">Users</a></li>

        <li><a href="#" class="nav-link px-2 text-white">Permissions</a></li>

        <li><a href="#" class="nav-link px-2 text-white">Cart</a></li>

        <li><a href="#" class="nav-link px-2 text-white">Sales</a></li>

        <li><a href="#" class="nav-link px-2 text-white">Reports</a></li>

      </ul>

        {{auth()->user()->name}}

        <div class="text-end">

          <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>

        </div>

      @endauth



      @guest

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">

        <li><a href="{{ '/' }}" class="nav-link px-2 text-secondary">Home</a></li>

        <li><a href="{{ '/skills' }}" class="nav-link px-2 text-white">Skills</a></li>

        <li><a href="{{ '/services' }}" class="nav-link px-2 text-white">Services</a></li>

        <li><a href="{{ '/projects' }}" class="nav-link px-2 text-white">Projects</a></li>

        <li><a href="{{ '/team' }}" class="nav-link px-2 text-white">Team</a></li>

        <li><a href="{{ '/contact' }}" class="nav-link px-2 text-white">Contact</a></li>

      </ul>

        <div class="text-end">

          <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>

          <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>

        </div>

      @endguest

    </div>

  </div>

</header>
