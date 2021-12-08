<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.1/umd/popper.min.js" integrity="sha512-8jeQKzUKh/0pqnK24AfqZYxlQ8JdQjl9gGONwGwKbJiEaAPkD3eoIjz3IuX4IrP+dnxkchGUeWdXLazLHin+UQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/gh/Eonasdan/tempus-dominus@master/dist/js/tempus-dominus.js"></script>
    <link href="https://cdn.jsdelivr.net/gh/Eonasdan/tempus-dominus@master/dist/css/tempus-dominus.css" rel="stylesheet">

</head>

<body>
    <div class="container">
        <header class="container">
            <div class="col-5">
                <a href="/" class="navbar-brand">
                    <img src="{{ asset('images/fidela.jpg') }}" class="img-fluid rounded float-start mt-3 mx-5" style="width:60px" />
                </a>
            </div>
            <div class="">
                <div class="row">
                    <span>5026201131</span>
                </div>
                <div class="row">
                    <span>Fidela Nathania</span>
                </div>
            </div>
        </header>
        <div class="row m-5">
            <aside class="col-2">
                <div class="row">
                    <nav class="navbar navbar-expand align-items-start py-2 sticky-top">
                        <div class="col ">
                            <div class="align-items-start fw-bold mb-1">
                                <span>Menu</span>
                            </div>
                            <ul class="navbar-nav flex-column">
                                <li class="nav-item mb-2">
                                    <a href="/pegawai" class="nav-link">Data Pegawai</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="/absen" class="nav-link">Data Absen</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="#" class="nav-link disabled">Minggu Depan</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="#" class="nav-link disabled">Praktikum</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

            </aside>

            <div class="col-8">
                <div class="row container-fluid">
                    <h3>@yield('judulhalaman')</h3>
                    @section('konten')
                    @show
                </div>
            </div>
        </div>
        <footer class="m-5">
            <div class="row text-center">
                <span> 2021</span>
            </div>
            <div class="row text-center">
                <span>Hak Cipta oleh 5026201131 - Fidela Nathania</span>
                <div class="row text-center">
                    <a target="_blank" href="https://www.instagram.com/fidelanathania/"><i class="fab fa-instagram"></i></a>
                    <a target="_blank" href="https://github.com/fideyla/PWEB_fidela131"><i class="fab fa-github-square"></i></a>
                    <a target="_blank" href="https://www.linkedin.com/in/fidelanathania/"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>


</head>

</html>
