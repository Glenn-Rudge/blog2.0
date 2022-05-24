<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config("app.name") }}</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ asset("css/mdb.min.css") }}" rel="stylesheet">
    <!-- Your custom scripts -->
    <style>
        @media only screen and (max-width: 600px) {
            #search-form {
                display: none;
            }
        }
    </style>
</head>

<body class="homepage-v2">

<!-- Navigation -->
<header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light scrolling-navbar white">
        <div class="container-fluid justify-content-center align-items-center">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
                    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent-4">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown ml-4 mb-0">
                        {{--                        <a href="{{ route("home.index") }}" class="nav-link waves-effect waves-light font-weight-bold navbar-brand">--}}
                        {{--                            <img width="50px" src="{{ asset("images/logo.png") }}" alt="logo"/>--}}
                        {{--                        </a>--}}
                        {{--                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">--}}
                        {{--                            <a class="dropdown-item waves-effect waves-light" href="../homepage/v-1.html">V1</a>--}}
                        {{--                            <a class="dropdown-item waves-effect waves-light" href="../homepage/v-2.html">V2</a>--}}
                        {{--                            <a class="dropdown-item waves-effect waves-light" href="../homepage/v-3.html">V3</a>--}}
                        {{--                            <a class="dropdown-item waves-effect waves-light" href="../homepage/v-4.html">V4</a>--}}
                        {{--                            <a class="dropdown-item waves-effect waves-light" href="../homepage/v-5.html">V5</a>--}}
                        {{--                            <a class="dropdown-item waves-effect waves-light" href="../homepage/v-6.html">V6</a>--}}
                        {{--                            <a class="dropdown-item waves-effect waves-light" href="../homepage/v-7.html">V7</a>--}}
                        {{--                        </div>--}}
                    </li>
                    <li class="nav-item dropdown ml-4  mb-0">
                        <a href="{{ route("posts.index") }}"
                           class="nav-link waves-effect waves-light font-weight-bold">
                            POSTS
                        </a>
                    </li>
                    <li class="nav-item ml-4 mb-0">
                        <a href="{{ route("home.about") }}"
                           class="nav-link waves-effect waves-light font-weight-bold">ABOUT
                        </a>
                    </li>
                    <li class="nav-item ml-4 mb-0">
                        <a href="{{ route("home.contact") }}"
                           class="nav-link waves-effect waves-light font-weight-bold">CONTACT
                        </a>
                    </li>
                    <li class="nav-item ml-4 mb-0">
                        <a href=""
                           class="nav-link waves-effect waves-light font-weight-bold">
{{--                                                        {{ strtoupper(Auth::user()->first_name) }}--}}
                        </a>
                    </li>
                    <li class="nav-item dropdown ml-4 mb-0">
                        @auth
                            <a class="nav-link dropdown-toggle waves-effect waves-light font-weight-bold"
                               id="navbarDropdownMenuLink"
                               data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false"> {{ Auth::user()->first_name }}
                            </a>
                        @else
                            <a href="{{ route("login") }}" class="nav-link waves-effect waves-light font-weight-bold">
                                LOGIN
                            </a>
                        @endauth
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item waves-effect waves-light"
                               href="{{ route("dashboard") }}">DASHBOARD</a>
                            <form method="POST" action="{{ route("logout") }}">
                                @csrf
                                <button type="submit" class="dropdown-item waves-effect waves-light">LOGOUT</button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent-4">
                <ul class="navbar-nav ml-auto nav-flex-icons">
                    <li class="nav-item dropdown mb-0">
                        <form id="search-form" class="input-group" action="{{ route("posts.index") }}" method="GET">
                            <input aria-label="Search" class="form-control rounded" name="client-search" type="search"
                                   placeholder="Search posts...">
                            <button class="btn btn-outline-primary my-auto " type="submit">Search</button>
                        </form>
                    </li>
                    <li class="nav-item d-none d-sm-block">
                        <a target="_blank" href="https://www.linkedin.com/in/glenn-rudge/"
                           class="nav-link waves-effect waves-light">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                    <li class="nav-item d-none d-sm-block">
                        <a class="nav-link waves-effect waves-light">
                            <i class="fab fa-github"></i>
                        </a>
                    </li>
                    <li class="nav-item d-none d-sm-block">
                        <a target="_blank" href="https://stackshare.io/glenn-rudge"
                           class="nav-link waves-effect waves-light">
                            <span class="text-sm">stackshare.io</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
    <!-- Navbar -->

</header>
<!-- Navigation -->
