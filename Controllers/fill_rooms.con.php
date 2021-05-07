<?php
    include('../actions/autoload.act.php');

    $fill = new Ajax();
    $result = $fill->fill_rooms();

    $output = '';

    foreach ($result as $row ) {

        $output .= '<option value="'.$row["room_id"].'">'.$row["room_name"].'</option>';

    }

    echo $output;

