<?php

class Name extends dbc {

    public function get_room_name($room){

        $sql = "SELECT room_name FROM rooms WHERE `room_id` = ? ";

        $stmt = $this->connect()->prepare($sql);

        $stmt->execute([$room]);

        $result = $stmt->fetch();

        return $result['room_name'] ;

    }

    public function get_room_type_name($room_type){

        $sql = "SELECT `room_type_name` FROM `rooms_type` WHERE `room_type_id` = ? ";

        $stmt = $this->connect()->prepare($sql);

        $stmt->execute([$room_type]);

        $result1 = $stmt->fetch();

        return $result1['room_type_name'] ;

    }

    public function get_room_view_price($room_view){

        $sql = "SELECT `room_view_name` FROM `rooms_view` WHERE `rooms_view_id` = ? ";

        $stmt = $this->connect()->prepare($sql);

        $stmt->execute([$room_view]);

        $result1 = $stmt->fetch();

        return $result1['room_view_name'] ;

    }

    public function get_pension_name($pension){

        $sql = "SELECT pension_name FROM pension WHERE `pension_id` = ? ";

        $stmt = $this->connect()->prepare($sql);

        $stmt->execute([$pension]);

        $result2 = $stmt->fetch();

        return $result2['pension_name'] ;

    }

    public function get_pension_type_name($pension_type){

        $sql = "SELECT pension_type_name FROM pension_type WHERE `pension_type_id` = ? ";

        $stmt = $this->connect()->prepare($sql);

        $stmt->execute([$pension_type]);

        $result2 = $stmt->fetch();

        return $result2['pension_type_name'] ;

    }

    public function get_other_type_name($other_type_id){

        $sql = "SELECT other_type_name FROM other_types where other_type_id = ?";

        $stmt = $this->connect()->prepare($sql);

        $stmt->execute([$other_type_id]);

        $result = $stmt->fetch();

        return $result['other_type_name'];

    }

}