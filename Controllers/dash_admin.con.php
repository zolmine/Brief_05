<?php
    include '../actions/autoload.act.php';
    function get_room_data()
    {
        $room = new Admin();
        $result = $room->get_rooms_data();

        foreach ($result as $row) {
            echo '<tr>';
            echo '<td>' . $row['room_id'] . '</td>';
            echo '<td>' . $row['room_name'] . '</td>';
            echo '<td>' . $row['room_price'] . '</td>';
            echo '<td><button data-toggle="modal" data-target="#EpicModal" class="edit_room" id="' . $row['room_id'] . '" href="#"><i class="fas fa-edit text-warning"></i></button><a class="delete_room" id="' . $row['room_id'] . '" href="#" ><i class="fas fa-trash text-danger delete_room" ></i></a></td>';

            echo '</tr>';

        }
    }

    function get_costumers_data()
    {
        $customer = new Customer();
        $result = $customer->get_customers_data();

        foreach ($result as $row) {
            $res = new Admin();
            $reserve_count = $res->count_reservation_for_each_cos($row['id']);
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['full_name'] . '</td>';
            echo '<td>' . $row['user_email'] . '</td>';
            echo '<td>' . $row['user_pass'] . '</td>';
            echo '<td>' . $reserve_count . '</td>';
            echo '<td><a class="delete_costumer" id="' . $row['id'] . '" href="#" ><i class="fas fa-trash text-danger delete_costumer" ></i></a ></td>';

        }
    }

    function reservations_number()
    {
        $nbr = new Admin();
        return $nbr->count_all_reservations();
    }

    function room_number()
    {
        $nbr = new Admin();
        return $nbr->count_all_rooms();
    }

    function costumer_number()
    {
        $nbr = new Admin();
        return $nbr->count_all_customers();
    }

    function reservations_data()
    {
        $reserve = new Admin();
        $result = $reserve->get_reservation_data();

        foreach ($result as $row) {

            $usr = new Customer();
            $user_n = $usr->get_customers_name($row['user_id']);
            if (!empty($user_n)) {
                $user_name = $user_n['full_name'];
            } else {
                $user_name = '';
            }

            $amt = new Admin();
            $amount = $amt->get_reservation_amount($row['gen_id']);
            $total = $amount + $row['amount'];

            echo '<tr>';
            echo '<td>' . $row['gen_id'] . '</td>';
            echo '<td>' . $user_name . '</td>';
            echo '<td>' . $total . '</td>';
            echo '<td>' . $row['check_in'] . '</td>';
            echo '<td>' . $row['check_out'] . '</td>';
            echo '<td><button ><i class="fas fa-plus-circle text-success add" ></i ></button ><button ><i class="fas fa-trash text-danger delete" ></i ></button ></td>';
            echo '</tr>';

        }
    }
        function get_pension_data()
        {
            $pp = new Admin();
            $result = $pp->get_pension_data();

            foreach ($result as $row) {

                echo '<tr>';
                echo '<td>' . $row['pension_id'] . '</td>';
                echo '<td>' . $row['pension_name'] . '</td>';
                echo '<td>' . $row['pension_price'] . '</td>';
                echo '<td><a class="edit_room" id="' . $row['pension_id'] . '" href="#"><i class="fas fa-edit text-warning"></i></a><a class="delete_room" id="' . $row['pension_id'] . '" href="#" ><i class="fas fa-trash text-danger delete_room" ></i></a></td>';

                echo '</tr>';

            }
        }

        function reservations_data_for_customer()
        {
            $reserve = new Customer();
            $result = $reserve->get_reservation_data_for_customer($_SESSION['id']);

            foreach ($result as $row) {


                $amt = new Admin();
                $amount = $amt->get_reservation_amount($row['gen_id']);
                $total = $amount + $row['amount'];

                echo '<tr>';
                echo '<td>' . $row['gen_id'] . '</td>';
                echo '<td>' . $total . '</td>';
                echo '<td>' . $row['check_in'] . '</td>';
                echo '<td>' . $row['check_out'] . '</td>';
                echo '<td><button ><i class="fas fa-plus-circle text-success add" ></i ></button ><button ><i class="fas fa-trash text-danger delete" ></i ></button ></td>';
                echo '</tr>';

            }
        }

