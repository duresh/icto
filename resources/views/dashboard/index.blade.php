<!DOCTYPE html>
<html lang="en">

    <head>
        @include('dashboard.includes.header')
    </head>
    @auth

    @yield('content')

        @include('dashboard.includes.footer')
    @endauth

    @guest
    <div class="container">



    <div class="card text-center">
  <div class="card-header">
    Permissions
  </div>
  <div class="card-body">
    <h5 class="card-title">Permission denied</h5>
    <p class="card-text"><h1 class="">You are not logged in.</h1></p>
    <br><br>
    <p>
        <a href="{{ route('login.perform')}}" class="btn btn-success btn-lg ">Click to Login</a>

    </p>
  </div>
  <div class="card-footer text-muted">
    ICTO Login
  </div>
</div>

    </div>
        @endguest
</html>
<!-- end document-->
