<?php

class Reserve extends dbc {

    public function insert_data_to_reserve_part1($kids_nbr,$babys_nbr,$babys_name,$adults_nbr,$adults_name,$check_in,$check_out,$amount,$user_id,$gen_id){

        $sql = "INSERT INTO `reserve` (`reserve_kids`, `reserve_babys`, `reserve_babys_type`, `reserve_adult`, `reserve_adult_type`, `check_in`, `check_out`, `amount`,`user_id`,`gen_id`) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?,?,?);";

        $query = $this->connect()->prepare($sql);
        $query->execute([$kids_nbr,$babys_nbr,$babys_name,$adults_nbr,$adults_name,$check_in,$check_out,$amount,$user_id,$gen_id]);

    }

    public function insert_data_to_reserve_part2($data){

        $sql = "INSERT INTO `reserve_rooms` (`reserve_room_name`, `reserve_room_type`, `reserve_room_view`, `reserve_pension`,`reserve_pension_type`,`reserve_amount`,`user_id`, `gen_id`) VALUES (:room_name, :room_type, :room_view,  :pension_name, :pension_type,:amount, :user_id, :gen_id);";

        $query = $this->connect()->prepare($sql);

        $query->execute($data);

    }

}




