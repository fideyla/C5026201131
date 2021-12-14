<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.1/umd/popper.min.js" integrity="sha512-8jeQKzUKh/0pqnK24AfqZYxlQ8JdQjl9gGONwGwKbJiEaAPkD3eoIjz3IuX4IrP+dnxkchGUeWdXLazLHin+UQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/gh/Eonasdan/tempus-dominus@master/dist/js/tempus-dominus.js"></script>
    <link href="https://cdn.jsdelivr.net/gh/Eonasdan/tempus-dominus@master/dist/css/tempus-dominus.css" rel="stylesheet">
    <style>
        body {
            font-family: "Poppins", Arial, sans-serif;
            font-size: 14px;
            line-height: 1.8;
            font-weight: normal;
            background: #fff;
            color: gray;
        }

        #kotak {
            width: 100%;
            margin: 0 auto;
            padding-top: 30px;
            padding-right: 50px;
            padding-bottom: 30px;
            padding-left: 50px;
            border: solid #523A28 2px;
            border-radius: 20px;
            box-shadow: 10px 10px 3px #D0B49F;
            background-color: white;
        }

        a {
            -webkit-transition: .3s all ease;
            -o-transition: .3s all ease;
            transition: .3s all ease;
            color: #2f89fc;
            text-decoration: none !important;
        }

        a:hover,
        a:focus {
            text-decoration: none !important;
            outline: none !important;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        button {
            -webkit-transition: .3s all ease;
            -o-transition: .3s all ease;
            transition: .3s all ease;
        }

        button:hover,
        button:focus {
            text-decoration: none !important;
            outline: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
        }

        #pegawai,
        #absen,
        #masker {
            border-collapse: collapse;
            border: 1px solid #523A28;
            text-align: center;
            width: 100%;
        }

        #pegawai td,
        #pegawai th,
        #absen td,
        #absen th,
        #masker td,
        #masker th {
            padding: 8px;
        }

        #pegawai tr:hover,
        #absen tr:hover,
        #masker tr:hover {
            background-color: #F6DDCC;
        }

        #pegawai th,
        #absen th,
        #masker th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #A47551;
            color: white;
        }

        span {
            color: #fff;
        }

        h1,
        h3,
        h4,
        h5,
        .h1,
        .h3,
        .h4,
        .h5 {
            line-height: 1.5;
            font-weight: 400;
            font-family: "Poppins", Arial, sans-serif;
            color: #000;
        }

        h2,
        .h2 {
            line-height: 1.5;
            font-weight: 400;
            font-family: "Poppins", Arial, sans-serif;
            color: white;
        }

        .img {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }

        .wrapper {
            width: 100%;
        }

        #sidebar {
            min-width: 300px;
            max-width: 300px;
            background: #AC9480;
            color: #EED6D3;
            -webkit-transition: all 0.3s;
            -o-transition: all 0.3s;
            transition: all 0.3s;
            position: relative;
        }

        #sidebar .h6 {
            color: #fff;
        }

        #sidebar.active {
            margin-left: -300px;
        }

        #sidebar.active .custom-menu {
            margin-right: -50px;
        }

        #sidebar.active .btn.btn-1:before {
            content: "\f053";
            font-family: "FontAwesome";
            right: 2px !important;
        }

        #sidebar.active .btn.btn-1:after {
            display: none;
        }

        #sidebar h1 {
            margin-bottom: 20px;
            font-weight: 700;
            font-size: 20px;
        }

        #sidebar h1 .logo {
            color: #fff;
            display: block;
            padding: 10px 30px;
            background: #fff;
        }

        #sidebar ul.components {
            padding: 0;
        }

        #sidebar ul li {
            font-size: 16px;
        }

        #sidebar ul li>ul {
            margin-left: 10px;
        }

        #sidebar ul li>ul li {
            font-size: 14px;
        }

        #sidebar ul li a {
            padding: 15px 30px;
            display: block;
            color: #fff;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        #sidebar ul li a:hover {
            color: #fff;
            background: #A47551;
            border-bottom: 1px solid #A47551;
        }

        #sidebar ul li.active>a {
            background: transparent;
            color: #fff;
        }

        #sidebar ul li.active>a:hover {
            background: #A47551;
            border-bottom: 1px solid #A47551;
        }

        @media (max-width: 991.98px) {
            #sidebar {
                margin-left: -300px;
            }

            #sidebar.active {
                margin-left: 0;
            }

            #sidebar .custom-menu {
                margin-right: -60px !important;
                top: 10px !important;
            }
        }

        #sidebar .custom-menu {
            display: inline-block;
            position: absolute;
            top: 20px;
            right: 0;
            margin-right: -35px;
            -webkit-transition: 0.3s;
            -o-transition: 0.3s;
            transition: 0.3s;
        }

        @media (prefers-reduced-motion: reduce) {
            #sidebar .custom-menu {
                -webkit-transition: none;
                -o-transition: none;
                transition: none;
            }
        }

        #sidebar .custom-menu .btn.btn-1 {
            background: #A47551;
            border-color: transparent;
            position: relative;
            color: #000;
            width: 30px;
            height: 30px;
        }

        #sidebar .custom-menu .btn.btn-1:after,
        #sidebar .custom-menu .btn.btn-1:before {
            position: absolute;
            top: 2px;
            left: 0;
            right: 0;
            bottom: 0;
            font-family: "FontAwesome";
            color: #fff;
        }

        #sidebar .custom-menu .btn.btn-1:after {
            content: "\f054";
            left: 2px;
        }

        .bg-wrap {
            width: 100%;
            position: relative;
            z-index: 0;
        }

        .bg-wrap:after {
            z-index: -1;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            content: '';
            background: #000;
            opacity: .3;
        }

        .bg-wrap .user-logo .img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 0 auto;
            margin-bottom: 10px;
        }

        .bg-wrap .user-logo h3 {
            color: #fff;
            font-size: 18px;
        }

        a[data-toggle="collapse"] {
            position: relative;
        }

        select {
            outline: 0;
            background: white;
            width: 100%;
            height: 100%;
            color: black;
            cursor: pointer;
            border: 1px solid lightgray;
            border-radius: 3px;
            font-size: 12pt;
        }

        .select {
            position: relative;
            display: block;
            width: 15em;
            height: 2em;
            line-height: 3;
            overflow: hidden;
            border-radius: .25em;
            padding-bottom: 10px;
        }

        @media (max-width: 991.98px) {
            #sidebarCollapse span {
                display: none;
            }
        }

        #content {
            width: 100%;
            padding: 0;
            min-height: 100vh;
            -webkit-transition: all 0.3s;
            -o-transition: all 0.3s;
            transition: all 0.3s;
        }

        .btn.btn-warning {
            background: #696969;
            border-color: #696969;
            color: white;
        }

        .btn.btn-1 {
            background: #92705E;
            border-color: #92705E;
            color: white;
        }

        .btn.btn-1:hover,
        .btn.btn-1:focus {
            background: #C4A289 !important;
            border-color: #C4A289 !important;
        }

        .btn.btn-2 {
            background: #ebb684;
            border-color: #ebb684;
            color: white;
        }

        .btn.btn-2:hover,
        .btn.btn-2:focus {
            background: #f2d0b0 !important;
            border-color: #f2d0b0 !important;
        }

        #search-box {
            display: block;
            width: 100%;
            height: calc(1.5em + 0.75rem + 2px);
            padding: 15px 15px 15px 25px;
            font-size: 13pt;
            font-weight: 400;
            line-height: 1.5;
            color: #92705E;
            background-clip: padding-box;
            border: 1px solid black;
            border-radius: 0.25rem;
        }

        #opsi {
            display: block;
            width: 100%;
            height: 35px;
        }

        .input-group-btn.input-space {
            padding-left: 15px;
        }

        footer {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 200px;
            background-color: #AC9480;
            color: white;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-1">
                </button>
            </div>
            <div class="img bg-wrap text-center py-4" style="background-image: url(/images/background.jpeg);">
                <div class="user-logo">
                    <div class="img" style="background-image: url(/images/fidela.jpg);">
                    </div>
                    <h2>Fidela Nathania <br> 5026201131 </h2>
                </div>
            </div>
            <ul class="list-unstyled components mb-5">
                <li class="active">
                    <a href="/"><span class="fa fa-home mr-3"></span>&nbsp Home</a>
                </li>
                <li>
                    <a href="/pegawai"><i class="fas fa-users mr-3"></i>
                        Data Pegawai
                    </a>
                </li>
                <li>
                    <a href="/absen"><i class="fas fa-clipboard-list mr-3"></i>
                        &nbsp Data Absen
                    </a>
                </li>
                <li>
                    <a href="/masker"><i class="fas fa-notes-medical mr-3"></i>
                        &nbsp Praktikum</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-stopwatch mr-3"></i>
                        </span>&nbsp Minggu Depan</a>
                </li>
            </ul>

            <footer class="m-5">
                <div class="row text-center">
                    <span>2021 ©Copyright by <br> Fidela Nathania <br> 5026201131</span>
                </div>
            </footer>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <h3>@yield('judulhalaman')</h3>
            @section('konten')
            @show
        </div>
    </div>

    <script>
        (function($) {

            "use strict";

            var fullHeight = function() {

                $('.js-fullheight').css('height', $(window).height());
                $(window).resize(function() {
                    $('.js-fullheight').css('height', $(window).height());
                });

            };
            fullHeight();

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });

        })(jQuery);
    </script>
</body>

</html>
