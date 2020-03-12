<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <title>Wordnet</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                /* background-image: url(./images/ugm.jpg); */
                background-image: url({{ asset('images/ugm.jpg') }});
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed;
                color: #636b6f;
                background-position: center;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100%;
                margin: 0;
            }

            .full-max-height {
                height: 84vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
                justify-items: center;
                margin-bottom: 20px;
                padding-top: 10%;
                padding-bottom: 15%
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
                color: #fff;
                font-family: "Times New Roman", Times, serif;
                font-weight: 100;
            }

           /* ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #1A2C43;
                min-width: 100%;
            } */

            /* li {
                float: left;
                margin-left:2%;
            }

            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 18px 16px;
                text-decoration: none;
            }

            li a:hover {
                background-color: #5DADE2;
                color: white;
                text-decoration: none;
            }

            li {
                display: block;
                transition-duration: 0.5s;
            }

            li:hover {
                cursor: pointer;
            }

            ul li ul {
                visibility: hidden;
                opacity: 0;
                position: absolute;
                transition: all 0.5s ease;
                margin-top: 1rem;
                left: 0;
                display: none;
            }

            ul li:hover > ul,
            ul li ul:hover {
                visibility: visible;
                opacity: 1;
                display: block;
            }

            ul li ul li {
                clear: both;
                width: 100%;
            } */

            .w {
                max-width:50px; 
                max-height:55px;
                padding-top: 6px;
            }

            .teks{
                color: #ffff;
                font-family: "Times New Roman", Times, serif;
                font-weight: 200;
                padding: 21px 12px;
                margin-left:0.01%;
            }

            footer{
                font-family: "Times New Roman", Times, serif;
                /* background-color: #1A2C43; */
                color: white;
                font-size: 12px;
                padding: 4px;
            }

            .tab{
                padding-left: 6px;
                padding-top: 8px;
            }

            .logo{
                max-width:200px; 
                max-height:200px;
            }

            .box-sl {
                max-width: 80%;
                max-height: 68%;
                padding: 1%;
                border: 1px #1A2C43;
                margin: 0;
                background-color: #F1F1F1;
                font-family: "Times New Roman", Times, serif;
                color: black;
                font-size: 15px;
                box-shadow: 10px 10px #888888;
            }

            .log-box{
                min-width: 350px;
                min-height: 280px;
                padding-top: 25px;
                padding-left: 30px;
                border: 2px #5DADE2;
                margin: 0;
                background-color: #F1F1F1;
                font-family: "Times New Roman", Times, serif;
                color: black;
                font-size: 15px;
                border-radius: 15px;
            }
            
            .cari{
                padding: 20px;
                min-width: 50%;
                margin-bottom: 200px;
            }

            form.search input[type=text] {
                padding: 10px;
                font-size: 14px;
                border: 1px solid grey;
                float: left;
                width: 70%;
                background: #f1f1f1;
                border-top-left-radius: 25px;
                border-bottom-left-radius: 25px;
            }

            form.search button {
                float: left;
                max-width: 20%;
                padding: 10px;
                background: #2196F3;
                color: white;
                font-size: 14px;
                border: 1px solid grey;
                border-left: none;
                cursor: pointer;
                border-top-right-radius: 25px;
                border-bottom-right-radius: 25px;
            }

            form.search button:hover {
                background: #0b7dda;
            }

            form.search::after {
                content: "";
                clear: both;
                display: table;
            }

            .right{
                max-width:6%;
                float:right;
                max-height:100%;
                margin-right: 2%;
            }

            .button {
                background-color: #5DADE2;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 10px;
                margin: 4px 2px;
                cursor: pointer;
                border-radius: 5px;
            }

            .tombol {
                color: #fff;
                background-color: #004A74;
                border-color: #004A74;
                padding-top: 3px;
                margin-top: 14px;
                margin-left: 2px;  
            }

            button, input {
                overflow: visible;
                width: 90%;
            }

            .img-pos{
                max-width:50%; 
                max-height:55%;
                padding-top: 6px;
                margin-left: 15%;
                margin-right: 2%;
                margin-top: 10px;
                float: left;
            }

            .position{
                color: #ffff;
                font-family: "Times New Roman", Times, serif;
                font-size: 50px;
                padding: 4%;
                padding-left: 17%;
            }

            .pencarian{
                color: #ffff;
                font-family: initial;
                font-weight: lighter;
            }

            /* .dropdown {
                float: left;
                overflow: hidden;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #ffff;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            .dropdown-content a {
                float: none;
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                text-align: left;
            } */

        </style>
    </head>

    <body>

        <!-- <header>

            <div>

                <ul>
                    <li><img class="w" src="https://ugm.ac.id/images/optimasi/ugm_header.png"></li>
                    <li class="teks">Wordnet UGM</li>
                    <li><a href="/SeputarLaman">Seputar Laman</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pencarian
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Kata Benda</a>
                            <a class="dropdown-item" href="#">Kata Kerja</a>
                        </div>
                    </li>
                    <li><a href="/usersearch">Pencarian</li>
                   
                
                    @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                    @endif
                </ul>
            </div>
            
        </header> -->

        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1A2C43;">
            <!-- <a class="navbar-brand" href="/">Wordnet</a> -->
            <a class="navbar-brand" href="/" style="font-family: Times New Roman">
                <img src="https://ugm.ac.id/images/optimasi/ugm_header.png" width="30" height="30" class="d-inline-block align-top" alt="">
                Wordnet UGM
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="/SeputarLaman">Seputar Laman</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pencarian
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/usersearch">Kata Benda</a>
                        <a class="dropdown-item" href="/pencarian/verb">Kata Kerja</a>
                    </li>

                    @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/SeputarLaman/Al') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                    @endif
                </ul>
                
            </div>
        </nav>

        <div class="flex-center position-ref full-height">
            @yield('content')
        </div>
        
        <footer>
            <p class="tab"> © 2020 UNIVERSITAS GADJAH MADA</p>
        </footer>

    </body>
</html>
