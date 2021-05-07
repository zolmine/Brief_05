<?php
class Ajax extends Dbc{

    public function fill_rooms(){

        $sql = "SELECT * FROM rooms ";

        $stmt = $this->connect()->query($sql);

        return $stmt->fetchAll();
    }

    public function fill_types($id){

        $sql = "SELECT * FROM rooms_type WHERE room_id = ? ";

        $stmt = $this->connect()->prepare($sql);

        $stmt->execute([$id]);

        return  $stmt->fetchAll();

    }
    function fill_views($room_id,$type_id){

        $sql = "SELECT * FROM rooms_view WHERE room_id = ? and room_type_id = ? ";

        $stmt = $this->connect()->prepare($sql);

        $stmt->execute([$room_id,$type_id]);

        return $stmt->fetchAll();


    }
    public function fill_pension(){

        $sql = "SELECT * FROM pension ";

        $stmt = $this->connect()->query($sql);

        return $stmt->fetchAll();

    }
    function fill_pension_type($id){

        $sql = "SELECT * FROM pension_type WHERE pension_id = ?";

        $stmt = $this->connect()->prepare($sql);

        $stmt->execute([$id]);

        return $stmt->fetchAll();

    }
}