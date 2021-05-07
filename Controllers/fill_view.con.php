<?php
    include('../actions/autoload.act.php');


    $room_id = $_POST['room_id1'];

    $type_id = $_POST['type_id1'];

    $fill = new Ajax();
    $result = $fill->fill_views($room_id,$type_id);

    $output = '';

    foreach ($result as $row ) {

        $output .= '<option value="'.$row["rooms_view_id"].'">'.$row["room_view_name"].'</option>';

    }

    echo $output;
