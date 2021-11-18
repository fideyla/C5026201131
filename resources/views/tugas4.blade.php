<!DOCTYPE html>
<html>

<head>
    <title>Power Calculator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function Power() {
            var n = document.getElementById("num").value;
            var e = document.getElementById("exp").value;
            var val;

            val = PowerOfNumber(n, e);
            document.getElementById("val").value = val;
        }
        function PowerOfNumber(n, e) {
            var i, pow = 1;
            //loop exponent times
            for (i = 0; i < e; i++) {
                //multiple the base value
                pow = pow * n;
            }
            return pow;
        }
    </script>

</head>

<body>
    <div class="container">
        <h2 class="text-center"> Power Calculator </h2>
        <hr />

        <div class="table-responsive">
            <table id="tableid" class="table table-borderless">
                <tr>
                    <td>
                        <label>Enter base number</label>
                    </td>
                    <td>
                        <input class="container-fluid form-control" type="number" name="num" id="num" placeholder="Base"
                            min="1" data-default="" value="" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Enter exponential number</label>
                    </td>
                    <td>
                        <input class="container-fluid form-control" type="number" name="exp" id="exp"
                            placeholder="Exponent" min="1" data-default="" value="" />
                    </td>
                </tr>
                <tr>
                    <td>
                        &nbsp;
                    </td>
                    <td>
                        <button class="btn btn-dark btn-lg" type="button" onclick="Power()">Calculate</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Power value</label>
                    </td>
                    <td>
                        <input class="container-fluid" type="number" name="val" id="val" data-default="" readonly />
                    </td>
                </tr>
            </table>
            <script>
                $(function () {
                    $('#resetBtn').click(function () {
                        $('#tableid').find('input[type=number]').each(function () {
                            var defaultVal = $(this).data('default');
                            $(this).val(defaultVal);
                        });
                    });
                });
            </script>
            <input type="button" class="btn btn-light btn-outline-dark btn-lg btn-block" value=" RESET " id="resetBtn">
        </div>
    </div>
</body>

</html>
