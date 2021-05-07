<?php
    include '../actions/autoload.act.php';
    if (isset($_POST['login'])) {

        $email = $_POST['email'];
        $pass = $_POST['password'];

        $log = new Authentication();
        $login = $log->login_customers($email, $pass);

        session_start();
        $_SESSION['id'] = $login['id'];
        $_SESSION['user_name'] = $login['full_name'];
//            header('location : ../Views/dash_customer.php');
        header("location: ../Views/dash_customer.php");

    }
