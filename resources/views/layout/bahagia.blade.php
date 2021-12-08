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

        a {
            -webkit-transition: .3s all ease;
            -o-transition: .3s all ease;
            transition: .3s all ease;
            color: #2f89fc;
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

        th {
            background: #A47551;
        }

        span {
            color: #fff;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        .h1,
        .h2,
        .h3,
        .h4,
        .h5 {
            line-height: 1.5;
            font-weight: 400;
            font-family: "Poppins", Arial, sans-serif;
            color: #000;
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

        #sidebar.active .btn.btn-primary:before {
            content: "\f053";
            font-family: "FontAwesome";
            right: 2px !important;
        }

        #sidebar.active .btn.btn-primary:after {
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

        #sidebar .custom-menu .btn.btn-primary {
            background: #A47551;
            border-color: transparent;
            position: relative;
            color: #000;
            width: 30px;
            height: 30px;
        }

        #sidebar .custom-menu .btn.btn-primary:after,
        #sidebar .custom-menu .btn.btn-primary:before {
            position: absolute;
            top: 2px;
            left: 0;
            right: 0;
            bottom: 0;
            font-family: "FontAwesome";
            color: #fff;
        }

        #sidebar .custom-menu .btn.btn-primary:after {
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

        .dropdown-toggle::after {
            display: block;
            position: absolute;
            top: 50%;
            right: 0;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
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

        .btn.btn-primary {
            background: #A47551;
            border-color: #A47551;
        }

        .btn.btn-primary:hover,
        .btn.btn-primary:focus {
            background: #D0AB99 !important;
            border-color: #D0AB99 !important;
        }

        footer {
            position:absolute;
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
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                </button>
            </div>
            <div class="img bg-wrap text-center py-4" style="background-image: url(images/background.jpeg);">
                <div class="user-logo">
                    <div class="img" style="background-image: url(images/fidela.jpg);"></div>
                    <h3>Fidela Nathania <br> 5026201131 </h3>
                </div>
            </div>
            <ul class="list-unstyled components mb-5">
                <li class="active">
                    <a href="/"><span class="fa fa-home mr-3"></span> Home</a>
                </li>
                <li>
                    <a href="/pegawai"><i class="fas fa-users"></i>
                        <span class="fa fa-pegawai mr-3"></span>
                        Data Pegawai
                    </a>
                </li>
                <li>
                    <a href="/absen"><i class="fas fa-clipboard-list"></i>
                        <span class="fa fa-absen mr-3"></span>
                        Data Absen
                    </a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-trophy mr-3"></span> Praktikum</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-stopwatch"></i>
                        <span class="fa fa-waktu mr-3"></span> Minggu Depan</a>
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
