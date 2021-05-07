<?php
    include '../Controllers/dash_admin.con.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <link rel="stylesheet" href="styles.css" />
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="side" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user-secret me-2"></i>Hotelia</div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text customer active"><i class="fas fa-user-cog me-2"></i>Customers</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text reservation fw-bold"><i class="fas fa-calendar me-2"></i>Reservations</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text room fw-bold"><i class="fas fa-bed me-2"></i>Rooms</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text pension fw-bold"><i class="fas fa-utensils me-2 "></i>Pensions</a>

                <a href="../Controllers/logout.con.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Manage Customers </h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Admin
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">

                    <div class="col-md-4 ">
                        <div class="p-3  shadow-sm d-flex justify-content-around align-items-center rounded cards">
                            <div>
                                <h3 class="fs-2"><?php echo reservations_number() ?></h3>
                                <p class="fs-5">Reservations</p>
                            </div>
                            <i
                                class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="p-3 shadow-sm d-flex justify-content-around align-items-center rounded cards">
                            <div>
                                <h3 class="fs-2"><?php echo costumer_number() ?></h3>
                                <p class="fs-5">Customers</p>
                            </div>
                            <i class="far fa-user-circle fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-4">

                        <div class="p-3 shadow-sm d-flex justify-content-around align-items-center rounded cards">

                            <div>
                                <h3 class="fs-2"><?php echo room_number() ?></h3>
                                <p class="fs-5">Rooms</p>
                            </div>
                            <i class="fas fa-bed fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>
                <div id="customer_table" style="display: block"><?php include 'includes/customer_table.php' ;?></div>

                <div id="reservation_table" style="display: none"><?php include 'includes/reservations_table.php' ;?></div>
                <div id="room_table" style="display: none"><?php include 'includes/room_table.php' ;?></div>
                <div id="pension_table" style="display: none"><?php include 'includes/pension_table.php' ;?></div>
                <div  ><?php include 'includes/modal.php'?></div>

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>
<script src="js/dash.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.querySelector('#wrapper');
        var toggleButton = document.querySelector('#menu-toggle');

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>

