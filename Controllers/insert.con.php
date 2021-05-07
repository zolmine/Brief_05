<?php
    include('../actions/autoload.act.php');
    include('../includes/functions.inc.php');
    $days =  $_POST['days_nbr'];
    session_start();
    $gen_id = 'Id-' . cratering_gen_id();



    if (isset($_POST['valide'])) {
        $days =  $_POST['days_nbr'];
        $adults_nbr = $_POST['total_adults'];
        $kids_nbr = $_POST['total_children'];
        $babys_nbr = $_POST['total_babys'];
        $check_in = $_POST['checkin'];
        $check_out = $_POST['checkout'];
//echo $days;
        if ($adults_nbr != 0 || $babys_nbr != 0 || $kids_nbr != 0) {
            $r_p = new Tarif();
            $simple_room_price = $r_p->get_room_price(1);
        } else {
            $simple_room_price = 0;
            $babys_nbr = 0;
            $adults_nbr = 0;
            $kids_nbr = 0;
        }
//print_r($simple_room_price);
        if (!isset($_POST['baby_lit'])) {

            $babys_price = 0;
            $babys_name = '';

        } else {

            $babys_id = $_POST['baby_lit'];
            $babys = new Tarif();
            $babys_price = $babys->get_other_type_price($babys_id);
            $babys_n = new Name();
            $babys_name = $babys_n->get_other_type_name($babys_id);
        }

        if (!isset($_POST['adult_lit'])) {

            $adults_price = 0;
            $adults_name = '';

        } else {

            $adults_id = $_POST['adult_lit'];
            $adults = new Tarif();
            $adults_price = $adults->get_other_type_price($adults_id);
            $adults_n = new name();
            $adults_name = $adults_n->get_other_type_name($adults_id);
        }
        $user_id = $_SESSION['id'];
//print_r($simple_room_price);
//    print_r($babys_price);

        $amount = (($simple_room_price * $babys_price) * $babys_nbr) + (($simple_room_price * $adults_price) * $adults_nbr) * $days ;

        $insert = new Reserve();
        $insert->insert_data_to_reserve_part1($kids_nbr, $babys_nbr, $babys_name, $adults_nbr, $adults_name, $check_in, $check_out, $amount,$user_id, $gen_id);
//        header("location: ../Views/dash_customer");
    }

    if (isset($_POST['valide'])) {

//        if ($count == )
        $days =  $_POST['days_nbr'];
        $count = $_POST['counter'];

        for ($i = 0; $i <= $count; $i++) {
//echo $i;
//echo '<br>';
            if (!isset($_POST['pension_type_' . $i])) {

                $pension_type = '';
                $pension_type_name = '';

            } else {

                $pension_type = $_POST['pension_type_' . $i];
                $p_t_n = new Name();
                $pension_type_name = $p_t_n->get_pension_type_name($pension_type);

            }

            if (!isset($_POST['room_view_' . $i])) {

                $room_view = '';
                $room_view_name = '';

            } else {

                $room_view = $_POST['room_view_' . $i];
                $v_n = new Name();
                $room_view_name = $v_n->get_room_view_price($room_view);

            }
            if (!isset($_POST['room_type_' . $i])) {

                $room_type = '';
                $room_type_name = '';


            } else {

                $room_type = $_POST['room_type_' . $i];
                $t_n = new Name();
                $room_type_name = $t_n->get_room_type_name($room_type);

            }

            if (isset($_POST['room_' . $i])) {

                $room = $_POST['room_' . $i];
                $r_n = new Name();
                $room_name = $r_n->get_room_name($room);

            } else {

                $room = '';
                $room_name = '';

            }

            if (!isset($_POST['pension_' . $i])) {

                $pension = '';
                $pension_name = '';

            } else {

                $pension = $_POST['pension_' . $i];
                $p_n = new Name();
                $pension_name = $p_n->get_pension_name($pension);

            }

            $calc = new Calc();
            $amount = $calc->calc_first_part($room, $room_view, $pension, $days);
            $user_id = $_SESSION['id'];
//    print_r($day);

            $data = array(

                ':room_name' => $room_name,
                ':room_type' => $room_type_name,
                ':room_view' => $room_view_name,
                ':pension_name' => $pension_name,
                ':pension_type' => $pension_type_name,
                ':amount' => $amount,
                ':user_id' => $user_id,
                ':gen_id' => $gen_id

            );

            $insert = new Reserve();
            $done = $insert->insert_data_to_reserve_part2($data);


            header("location: ../Views/dash_customer.php");

        }
    }

