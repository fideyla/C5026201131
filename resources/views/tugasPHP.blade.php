<!DOCTYPE html>
<html>

<head>
    <title>Tugas PHP Fidela Nathania</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <p style="margin-left: 30px; color: black; margin-top: 20px;"> Fidela Nathania <br> 5026201131 <br> PWEB C</p>
        <h2 class="text-center"> Power Calculator </h2>
        <hr />

        <div class="table-responsive">
            <form action="fungsiPHP" method="post">
                @csrf
                <table id="tableid" class="table table-borderless">
                    <tr>
                        <td>
                            <label>Enter base number</label>
                        </td>
                        <td>
                            <input class="container-fluid form-control" type="number" name="num" id="num" placeholder="Base" min="1" data-default="" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Enter exponential number</label>
                        </td>
                        <td>
                            <input class="container-fluid form-control" type="number" name="exp" id="exp" placeholder="Exponent" min="1" data-default="" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            &nbsp;
                        </td>
                        <td>
                            <button type="submit" class="btn btn-dark btn-lg" id="submit"> Calculate </button>
                            <button type="reset" class="btn btn-light btn-outline-dark btn-lg" id="reset"> RESET
                            </button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>
