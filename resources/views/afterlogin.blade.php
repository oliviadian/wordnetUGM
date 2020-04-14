<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <!-- <meta name="viewport" content="max-width=device-max-width, initial-scale=1"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 
         CSRF Token
        <meta name="csrf-token" content="{{ csrf_token() }}"> -->
        
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
        <link rel="dns-prefetch" href="//fonts.gstatic.com">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                background-image: url({{ asset('images/ugm.jpg') }});
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed;
                color: #636b6f;
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
                display: contents;
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

            footer {
                padding-top: 5%;
                font-family: "Times New Roman", Times, serif;
                /* background-color: #1A2C43; */
                color: white;
                font-size: 12px;
                /* padding: 4px; */
                padding-top: 6%;
            }

            .tab{
                padding-left: 6px;
                padding-top: 95px;
            }

            .logo{
                max-width:200px; 
                max-height:200px;
            }

            .box-sl {
                max-width: 89%;
                max-height: 68%;
                padding: 1%;
                border: 1px #1A2C43;
                margin: 0;
                background-color: #F1F1F1;
                font-family: "Times New Roman", Times, serif;
                color: black;
                font-size: 15px;
                margin-left: 5%;
                margin-top: 1%;
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
            
            .cari {
                padding: 5%;
                max-width: 50%;
                margin-top: 5%;
                margin-left: 25%;
            }

            form.search input[type=text] {
                padding: 10px;
                font-size: 14px;
                border: 1px solid grey;
                float: left;
                width: 80%;
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
                font-size: x-large;
                /* padding: 4%;
                padding-left: 17%; */
            }

            .vl {
                border-left: 6px solid #A4B4BE;
                max-height: 450px;
                left: 50%;
                margin-left: 3%;
                top: 10%;
            }

            .teks2{
                font-family: "Times New Roman", Times, serif;
                font-weight: 300;
                margin: 10px 0;
                color: #fff;
                margin-left: 5%;
                padding-top: 2%;
                font-size: x-large;
            }

            .box-kk {
                width: 28%;
                height: 10%;
                padding-top: 3%;
                padding-bottom: 3%;
                padding-left: 3%;
                padding-right: 5%;
                border: 1px #1A2C43;
                background-color: #ececec;
                border-color: #004A74;
                font-family: "Times New Roman", Times, serif;
                color: black;
                font-size: 15px;
                margin-left: 5%;
                margin-bottom: 4%;
            }

            .input-kk{
                padding: 4px;
                border-radius: 5px;
                border-color: #b8c6ce;
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
           
            .comment{
                color: #ffff;
                font-family: Arial, Helvetica, sans-serif;
            }

            table {
                /* font-family: arial, sans-serif; */
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            th{
                color: #ffff;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }

            .tabelpost{
                width:80%;
                margin-left: 5%;
                margin-bottom: 15%;
                margin-top: 5%;
            }
        </style>
    </head>

    <body>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1A2C43;">
           
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
                        <a class="nav-link" href="/SeputarLaman/Al">Seputar Laman</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pencarian
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/pencarian/noun/al">Kata Benda</a>
                        <a class="dropdown-item" href="/pencarian/verb/al">Kata Kerja</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/Kedalaman/login">Kedalaman Kata</a>
                    </li>

               
                    <li class="nav-item">
                        <a class="top-right links" href="/logout" style="text-decoration:none">Keluar</a>
                    </li>
               
                </ul>    
            </div>
        </nav>

            <div class="flex-center position-ref full-height">
                @yield('content')
            </div>
        
        </div>

        <footer> 
            <div class="container">
                <p class="copyright"> © 2020 UNIVERSITAS GADJAH MADA</p>
            </div>
	    </footer>
        
    </body>
</html>
