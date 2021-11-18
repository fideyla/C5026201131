<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Pendaftaran Kuota Internet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        function registration() {

            var name = document.getElementById("name").value;
            var nrp = document.getElementById("nrp").value;
            var jurusan = document.getElementById("jurusan").value;
            var phone = document.getElementById("phone").value;

            //name expression code (alphabets only)
            var letters = /^[A-Za-z\s]+$/;
            // numbers digit only
            var numbers = /^[0-9]*$/;

            if (name == '') {
                alert('Please enter your name');
            } else if (!letters.test(name)) {
                alert('Name field required only alphabet characters');
                document.getElementById("name").focus();
                return false;
            } else if (document.getElementById("name").value.length < 1) {
                alert('Name field must be more than 1 alphabets');
                document.getElementById("name").focus();
                return false;
            } else if (nrp == '') {
                alert('Please enter your nrp');
                document.getElementById("nrp").focus();
                return false;
            } else if (!numbers.test(nrp)) {
                alert('NRP field required only numbers characters');
                document.getElementById("nrp").focus();
                return false;
            } else if (document.getElementById("nrp").value.length < 10) {
                alert('NRP must be 10 digits');
                document.getElementById("nrp").focus();
                return false;
            } else if (jurusan == '') {
                alert('Please select an option!');
                document.getElementById("jurusan").focus();
                return false;
            } else if (phone == '') {
                alert('Please enter your phone number');
                document.getElementById("phone").focus();
                return false;
            } else if (!numbers.test(phone)) {
                alert('Phone field required only numbers characters');
                document.getElementById("phone").focus();
                return false;
            } else if (document.getElementById("phone").value.length < 9) {
                alert('Phone number minimum length is 10 digits');
                document.getElementById("phone").focus();
                return false;
            } else {
                alert('Thank You for the Registration & You are Redirecting to My University Website');
                // Redirecting to other page.
                window.location = "https://www.its.ac.id/";
                document.getElementById("name").focus();
                return true;
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            font-family: 'Montserrat', sans-serif;
        }

        p {
            margin: 0;
            padding: 5px;
            font-weight: 300;
        }

        .container-fluid {
            background: #E7E1FC;
            padding: 30px;
            margin: auto;
        }

        .title {
            text-align: center;
            font-size: 40px;
            color: #957DAD;
            letter-spacing: 3px;
            font-weight: 700;
        }

        input {
            border-radius: 20px;
            padding: 5px;
        }

        form {
            width: 600px;
            margin: 0 auto;
            padding-top: 30px;
            padding-right: 30px;
            padding-bottom: 30px;
            padding-left: 50px;
            border: solid #957DAD 2px;
            border-radius: 20px;
            box-shadow: 15px 15px 3px #b397d07b;
            background-color: white;
        }

        label {
            padding-top: 5px;
            padding-bottom: 3px;
        }

        input {
            box-shadow: 5px 5px 3px #b397d07b;
        }

        select {
            border-radius: 20px;
            padding: 7px;
            width: 100%;
            box-shadow: 5px 5px 3px #b397d07b;
        }

        .button {
            color: white;
            border-radius: 4px;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #ffffff;
            color: rgb(31, 31, 31);
            border: 2px solid #957DAD;
        }

        .button1 {
            background-color: #2f27d3;
            width: 300px;
        }

        .button2 {
            background-color: #34e967;
            width: 350px;
        }
    </style>
</head>

<body>
    <div class="container-fluid pb-5">
        <p>Fidela Nathania <br> Fidel <br> 5026201131</p>
        <hr />

        <form class="table-responsive">
            <h2 class="title py-2" style="text-align: center;">Form Pendaftaran Kuota Internet</h2>
            <table id="tableid" class="table table-borderless">
                <tr>
                    <td>
                        <label for="name">Nama Mahasiswa</label>
                    </td>
                    <td>
                        <label>:</label>
                    </td>
                    <td>
                        <input class="container form-control" type="text" size="50" name="name" id="name" placeholder="Enter Your Name" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nrp">NRP Mahasiswa</label>
                    </td>
                    <td>
                        <label>:</label>
                    </td>
                    <td>
                        <input class="container form-control" type="text" size="50" name="nrp" id="nrp" placeholder="Enter Your NRP" maxlength="10" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="jurusan">Jurusan</label>
                    </td>
                    <td>
                        <label>:</label>
                    </td>
                    <td>
                        <select name="jurusan" id="jurusan" onchange="registration()" required>
                            <option selected="" value=""> </option>
                            <option value="SI">Sistem Informasi</option>
                            <option value="TE">Teknik Elektro</option>
                            <option value="TC">Teknik Informatika</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="phone">Nomor Handphone:</label>
                    </td>
                    <td>
                        <label>:</label>
                    </td>
                    <td>
                        <input class="container form-control" type="text" size="50" name="phone" id="phone" placeholder="Enter Your Phone Number" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        &nbsp;
                    </td>
                    <td>
                        <button type="submit" class="btn button button1" onclick="registration()">Kirim</button>
                    </td>
                    <td>
                        <button type="reset" class="btn button button2 btn">Reset</button>
                    </td>
                </tr>
            </table>

        </form>
    </div>
</body>

</html>
