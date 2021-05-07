<?php
    include('../actions/autoload.act.php');

    $id = $_POST['id'];

    $fill = new Ajax();
    $result = $fill->fill_types($id);

    $output = '';

    foreach ($result as $row ) {

        $output .= '<option value="'.$row["room_type_id"].'">'.$row["room_type_name"].'</option>';

    }

    echo $output;
