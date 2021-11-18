<!DOCTYPE html>
<html>

<head>
    <title>JavaScript Form Validation Demo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            font-family: 'Montserrat', sans-serif;
        }

        .container {
            width: 100%;
            background: #E7E1FC;
            border-radius: 20px;
            border: solid #957DAD 2px;
            padding: 60px;
            margin: 0 auto;
        }

        .title {
            text-align: center;
            font-size: 46px;
            text-transform: uppercase;
            color: #957DAD;
            letter-spacing: 5px;
            font-weight: 700;
        }

        .input {
            border-radius: 20px;
            padding: 20px;
        }

        .a {
            text-decoration: none;
            color: #e51;
        }

        .form {
            width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: solid #957DAD 2px;
            border-radius: 20px;
            box-shadow: 15px 15px 3px #b397d07b;
            background-color: white;
        }

        .button {
            background-color: #957DAD;
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
            width: 150px;
        }

        .button2 {
            width: 190px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="title pb-4" style="text-align: center;">REGISTRATION FORM</h2>
        <form id="signup" class="form">
            <div class="form-group">
                <label for="username">Name:</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Enter Your Name" autocomplete="off">
                <small></small>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" name="address" id="address" class="form-control" placeholder="Enter Your Address" autocomplete="off">
                <small></small>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Enter Your Email" autocomplete="off">
                <small></small>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter Your Password" autocomplete="off">
                <small></small>
            </div>


            <div class="form-group">
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" name="confirm-password" id="confirm-password" class="form-control" placeholder="Enter Your Password" autocomplete="off">
                <small></small>
            </div>

            <div class="form-group">
                <label for="phone">Telephone:</label>
                <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Your Phone Number" autocomplete="off">
                <small></small>
            </div>

            <div class="form-group">
                <label for="sel">SELECT YOUR COURSE</label>
                <select type="text" name="sel" id="sel" class="form-control" required>
                    <option value=""></option>
                    <option value="1">BTECH</option>
                    <option value="2">BBA</option>
                    <option value="3">BCA</option>
                    <option value="4">B.COM</option>
                    <option value="5">GEEKFORGEEKS</option>
                </select>
                <small></small>
            </div>

            <div class="form-group">
                <label for="zipcode">Zipcode:</label>
                <input type="text" name="zipcode" id="zipcode" class="form-control" placeholder="Enter Your Zipcode" autocomplete="off">
                <small></small>
            </div>

            <div class="form-group">
                <input type="submit" class="btn button button1" value=" Submit ">
                <input type="reset" class="btn button button2" value=" Clear Form ">
            </div>
        </form>
    </div>

    <script src="app.js"></script>
</body>

</html>
