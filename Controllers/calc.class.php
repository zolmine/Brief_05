<?php

class Calc {

    public function calc_first_part($room,$room_view,$pension,$days){

        if ($room != '') {

            $room1 = new Tarif();
            $room_price = $room1->get_room_price($room);

        }else{

            $room_price = 0;

        }
        
        if ($room_view != '') {

            $type = new Tarif();
            $room_view_price = $type->get_room_view_price($room_view);
        
        }else{

            $room_view_price = 0;

        }

        if ($pension != '') {

            $pens = new Tarif();
            $pension_price = $pens->get_pension_price($pension);

        }else{

            $pension_price = 0;

        }
        
        $tec = $room_price * $room_view_price;

        return ($pension_price + $room_price + $tec) * $days;

    }

}
