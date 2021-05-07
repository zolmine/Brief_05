<?php

    class Admin extends Dbc
    {

        public function get_admin_data_for_login($user_name, $pass): array
        {
            $sql = "SELECT * FROM admins where admin_user_name = ? and admin_pass = ? ";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$user_name, $pass]);
            return $stmt->fetchAll();
        }

        public function get_rooms_data(): array
        {
            $sql = "SELECT * from rooms ";
            $stmt = $this->connect()->query($sql);
            return $stmt->fetchAll();
        }

        public function count_reservation_for_each_cos($user_id)
        {
            $sql = "SELECT COUNT(id) as reserve_count from reserve where user_id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$user_id]);
            $result = $stmt->fetch();
            return $result['reserve_count'];

        }

        public function count_all_reservations()
        {
            $sql = "SELECT COUNT(id) as reserve_nbr from reserve  ";
            $stmt = $this->connect()->query($sql);
            $result = $stmt->fetch();
            return $result['reserve_nbr'];
        }

        public function count_all_rooms()
        {
            $sql = "SELECT COUNT(room_id) as room_nbr from rooms  ";
            $stmt = $this->connect()->query($sql);
            $result = $stmt->fetch();
            return $result['room_nbr'];
        }

        public function count_all_customers()
        {
            $sql = "SELECT COUNT(id) as cost_nbr from customers ";
            $stmt = $this->connect()->query($sql);
            $result = $stmt->fetch();
            return $result['cost_nbr'];
        }

        public function get_reservation_data(): array
        {
            $sql = "SELECT * from reserve ";
            $stmt = $this->connect()->query($sql);
            return $stmt->fetchAll();
        }

        public function get_reservation_amount($gen_id)
        {
            $sql = "SELECT gen_id, SUM(reserve_amount) as amount from reserve_rooms where gen_id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$gen_id]);
            $result = $stmt->fetch();
            return $result['amount'];
        }
        public function del_room($id){
            $sql = "DELETE FROM rooms WHERE room_id = :id";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([':id' => $id]);
        }
        public function get_pension_data(): array
        {
            $sql = "SELECT * FROM pension";
            $stmt = $this->connect()->query($sql);
            return $stmt->fetchAll();
        }

    }