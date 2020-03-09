<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="max-width=device-max-width, initial-scale=1">

         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>

        <title>Wordnet</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                background-image: url('./images/ugm.jpg');
                background-size: cover;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-max-height {
                width: 1200px;
                height: 550px;
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

           ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #1A2C43;
                min-max-width: 100%;
            }

            li {
                float: left;
                margin-left:2%;
            }

            li a {
                display: inline-block;
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
                background-color: #1A2C43;
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
                max-width: 90%; 
                padding: 3%;
                border: 1px #1A2C43;
                margin: 2%;
                background-color: #F1F1F1;
                font-family: "Times New Roman", Times, serif;
                color: black;
                font-size: 15px;
                margin-left: 5%;
                margin-top: 1%;
            }

            .log-box{
                max-width: 350px;
                max-height: 280px;
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
                width: 290px;
            }

            .img-pos{
                max-width:80px; 
                max-height:85px;
                padding-top: 6px;
                margin-left: 5%;
                margin-left: 60px;
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

            .vl {
                border-left: 6px solid #A4B4BE;
                max-height: 450px;
                left: 50%;
                margin-left: 3%;
                top: 10%;
            }

            .teks2{
                color: #000000;
                font-family: "Times New Roman", Times, serif;
                margin-left: 5%;
                padding-top: 2%;
            }

            .box-kk{
                width: 125%;
                height: 50%;
                padding: auto;
                padding-top: 10%;
                padding-bottom: 10%;
                padding-left: 12%;
                padding-right: 12%;
                border: 1px #1A2C43;
                margin: auto;
                background-color: #F1F1F1;
                border-color: #004A74;
                font-family: "Times New Roman", Times, serif;
                color: black;
                font-size: 15px;
                /* margin-left: 2%;
                margin-top: 2%; */
            }

            .input-kk{
                padding: 4px;
                border-radius: 5px;
                border-color: #004A74;
                max-width: 300px;
            }
            
           .tombol-kk{
            max-width: 300px;
            max-height: 40px;
            margin: 20px;
            margin-left: 2px;
            background-color: #004A74;
            color: white;
            border-radius: 20px;
           }

           .box-cari{
            min-width: 60%;
            min-height: 45%;
            padding-top: 5%;
            padding-left: 8%;
            padding-right: 5%;
            border: 1px #1A2C43;
            margin: 10%;
            background-color: #F1F1F1;
            font-family: "Times New Roman", Times, serif;
            color: black;
            font-size: 15px;
            margin-left: 20%;
            margin-right: 20%;
            margin-top: 10%;
            margin-bottom: 10%;
            position: absolute;
            }

            .font-cari{
                padding-left:10%;
                font-size: 30px;
            }

            .font-info{
                font-size: 14px;
                padding-top: 2%;
               
            }

            .teks3{
                color: #004267;
                font-family: "Times New Roman", Times, serif;
                margin-left: 21%;
                padding-top: 7%;
            }
           
        </style>
    </head>

    <body>

    <header>

<div>

    <ul>
        <li><img class="w" src="https://ugm.ac.id/images/optimasi/ugm_header.png"></li>
        <li class="teks">Wordnet UGM</li>
        <li><a href="/SeputarLaman">Seputar Laman</a></li>
        <li><a href="/usersearch">Pencarian</a></li>
        <li><a href="/Kedalaman/login">Kedalaman Kata</a></li>

    <div class="right">
        <li>
        <a href="/logout">Keluar</a></li>
    </div>

    </ul>

</div>

</header>


<div class="flex-center position-ref full-max-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}"></a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif     
            @endauth
        </div>
        
    @endif

    @yield('content')

</div>
        <footer>
            <p class="tab"> © 2020 UNIVERSITAS GADJAH MADA</p>
        </footer>
        
    </body>
</html>
