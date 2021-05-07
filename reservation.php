<?php

    session_start();
    if (!isset($_SESSION['id'])){
        header("location: Views/login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="Views/css/style.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="views/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="Views/css/home.css" rel="stylesheet">
    <title>Reservation</title>
</head>

<body >
<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center mb-lg-3">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1><a href="home.php">Valhala Resort</a></h1>

        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto " href="index.php">Home</a></li>
                <li><a class="nav-link scrollto active" href="reserv.php">Reservation</a></li>
                <li><a class="nav-link scrollto" href="Views/dash_customer.php">Dashboard</a></li>
                <li><a class="nav-link scrollto" href="Views/login.php">login</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
<div class="booking-form">
    <form action="Controllers/insert.con.php" method="POST">

        <div id="rooms_counter" >
            <div class="first_one">


            </div>

<div class="line"></div>
            <div class="display">



            </div>


            <!-- kids and adult select -->
            <div id="guests" style="display: none;">
                <div class="line"></div>
                <div class="adult">
                    <div class="lol">
                    <label for="adult">Adults</label>
                    </div>
                    <input type="number" id="adult" name="total_adults" value="0" placeholder="0" min="0"
                           >
                    <select name="adult_lit" style="display: none;" id="">
                        <option value="Select an option" disabled  selected>Please select an option</option>
                    </select>
                </div>

                <div class="space"></div>
                <div class="elem-group inlined kids">
                    <div class="lol">
                    <label for="">Kids between 2 and 10 years</label>
                    </div>                <input type="number" id="child" name="total_children" value="0" placeholder="0" min="0"
                           >
                    <select name="kid_lit" style="display: none;" id="">
                        <option value="Select an option" disabled  selected>Please select an option</option>
                    </select>
                </div>
              <div class="elem-group inlined babys">
                  <div class="space"></div>
                    <div class="lol">
                    <label for="child">kids less than 2 years</label>
                    </div>
                    <input type="number" id="baby" name="total_babys" value="0"  placeholder="0" min="0"
                           >
                    <select name="baby_lit" style="display: none;" id="">
                        <option value="Select an option" disabled  selected>Please select an option</option>
                    </select>
                </div>
                <hr>
            </div>


            <div class="line"></div>
            <!-- Date -->
            <div class="space"></div>
            <div class="space"></div>
<div class="datecontainer">

            <div class="datediv">

            <label for="">Check-in Date</label>
            <input  class="date" type="date" id="checkin-date" name="checkin" required>
            </div>
            <div class="datediv">
                <label for="">Check-out Date</label>

            <input class="date" type="date" id="checkout-date" name="checkout" required>
        </div>
    <div class="days_number"><label for="">Days Number</label><p id="day_nbr"></p></div>

        </div>
        </div>
        <input id="counter" value="0" type="number" name="counter" hidden>
        <input id="days" value="" type="number" name="days_nbr" hidden>
        <div class="space"></div>
        <button class="btnn" name="valide">Submit</button>
    </form>
</div>





    <!-- <script src="node_modules/jquery/dist/jquery.min.js "></script> -->
    <script src="Views/js/main.js "></script>
    <script src="Views/js/date_picker.js"></script>
    <script src="Views/js/main_jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</body>

</html>