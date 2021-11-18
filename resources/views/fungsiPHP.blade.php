<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="alert alert-primary">
            <h2>Your Result :</h2>
            <div class="row mt-3">
                <div class="py-4 col-5">
                    <label>Power Value :</label>
                </div>
                <div class="py-4 col-5">
                    <?php
                    $num = $_POST['num'];
                    $exp = $_POST['exp'];

                    //function : untuk membungkus proses/ menuliskan fungsi agar bisa berjalan pada php ;
                    // PowerOfNumber($num,$exp) -> parameter
                    function Power($num, $exp)
                    {
                        // multiply the base to itself exponent number of times
                        $pow = 1;
                        for ($i = 1; $i <= $exp; $i++) {
                            $pow = $pow * $num;
                        }
                        return $pow;
                    }
                    //echo : untuk menampilkan statement program di layar
                    echo Power($num, $exp);
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
