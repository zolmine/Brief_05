<?php

class Tarif extends dbc {

    public function get_room_price($room){

        $sql = "SELECT room_price FROM rooms WHERE `room_id` = ? ";

        $stmt = $this->connect()->prepare($sql);

        $stmt->execute([$room]);

        $result = $stmt->fetch();

        return $result['room_price'] ;

    }

    public function get_room_view_price($room_view){

        $sql = "SELECT `room_view_price` FROM `rooms_view` WHERE `rooms_view_id` = ? ";

        $stmt = $this->connect()->prepare($sql);

        $stmt->execute([$room_view]);

        $result = $stmt->fetch();

        return $result['room_view_price'] ;

    }

    public function get_pension_price($pension){

        $sql = "SELECT pension_price FROM pension WHERE `pension_id` = ? ";

        $stmt = $this->connect()->prepare($sql);

        $stmt->execute([$pension]);

        $result = $stmt->fetch();

        return $result['pension_price'] ;

    }

    public function get_other_type_price($other_type_id){

        $sql = "SELECT other_type_price FROM other_types WHERE other_type_id = ? ";

        $stmt = $this->connect()->prepare($sql);

        $stmt->execute([$other_type_id]);

        $result = $stmt->fetch();

        return $result['other_type_price'];

    }

}