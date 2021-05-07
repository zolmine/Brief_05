<?php
    include('../actions/autoload.act.php');

    if (isset($_POST['submit'])) {
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $pwd = $_POST['password'];
        $data = array(
            ':full_name' => $full_name,
            ':user_email' => $email,
            ':user_pass' => $pwd
        );
        $rg = new Authentication();
        $register = $rg->register($data);
        var_dump($data);

        header("location: ../Views/login.php");



    }