<!doctype html>

<html lang="en">

    <head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">

    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">

    <meta name="generator" content="Hugo 0.87.0">

    <title>ICTO</title>

    <style>

      .bd-placeholder-img {

        font-size: 1.125rem;

        text-anchor: middle;

        -webkit-user-select: none;

        -moz-user-select: none;

        user-select: none;

      }
      @media (min-width: 768px) {

        .bd-placeholder-img-lg {

          font-size: 3.5rem;

        }

      }

    </style>

    <!-- Custom styles for this template -->

    @include('layouts.header')
    @include('layouts.includes.header')

</head>

<body>

    <main class="container-fluid p-0">

        @yield('content')

    </main>



    @include('layouts.footer')



  </body>

</html>
