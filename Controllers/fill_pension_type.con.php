<?php

    include('../actions/autoload.act.php');

    $id = $_POST['id'];

    $fill = new Ajax();
    $result = $fill->fill_pension_type($id);

    $output = '';

    foreach($result as $row ) {

        $output .= '<option value="' .$row['pension_type_id']. '">' .$row['pension_type_name'] . '</option>';

    }

    echo $output;




