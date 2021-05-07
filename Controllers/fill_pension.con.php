<?php

include('../actions/autoload.act.php');


    $fill = new Ajax();
    $result = $fill->fill_pension();


    $output = '';

    foreach ($result as $row ) {

        $output .= '<option value="' . $row['pension_id'] . '">' . $row['pension_name'] . '</option>';

    }

    echo  $output;