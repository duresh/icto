<!doctype html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">

    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">

    <meta name="generator" content="Hugo 0.87.0">

    <title>Laravel 9 Custom Login and Resgisteration</title>



    <!-- Bootstrap core CSS -->

    @include('layouts.header')



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

    <link href="signin.css" rel="stylesheet">
    @push('css')
    <style>
        html,
body {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 400px;
  padding: 15px;
  margin: auto;
}

.form-signin .checkbox {
  font-weight: 400;
}
    </style>

</head>



<body class="text-center">



    <main class="form-signin">



        @yield('content')



    </main>




</body>



</html>
