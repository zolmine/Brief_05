<?php

    class Customer extends Dbc
    {

        public function get_customers_data(): array
        {
            $sql = "SELECT * From customers";
            $stmt = $this->connect()->query($sql);
            return $stmt->fetchAll();
        }

        public function get_customer_data_for_login($email, $pass): array
        {

            $sql = "SELECT * FROM customers WHERE user_email = ? and user_pass = ? ";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$email, $pass]);
            return $stmt->fetchAll();
        }

        public function get_customer_reservations($user_id, $gen_id): array
        {
            $sql = "SELECT * FROM reserve inner join reserve_rooms where reserve_cust_id = reserver_rom_cus_id = :user_id and reserve.gen_id = reserve_room.gen_id = :gen_id";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([':user_id' => $user_id, ':gen_id' => $gen_id]);
            return $stmt->fetchAll();
        }

        public function get_customers_name($id)
        {
            $sql = "SELECT full_name From customers where id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);
            return $stmt->fetch();
        }

        public function del_customer($id)
        {
            $sql = "DELETE FROM customers WHERE id = :id";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([':id' => $id]);
        }

        public function regiter()
        {

        }
        public function createUserSession($user){
            $_SESSION['user_id'] = $user->id;
            $_SESSION['user_email'] = $user->email;
            $_SESSION['user_name'] = $user->name;
            redirect('pages/index');
        }

        public function logout(){
            unset($_SESSION['user_id']);
            unset($_SESSION['user_email']);
            unset($_SESSION['user_name']);
            session_destroy();
            redirect('users/login');
        }

        public function isLoggedIn(){
            if(isset($_SESSION['user_id'])){
                return true;
            } else {
                return false;
            }
        }
        public function get_reservation_data_for_customer($id): array
        {
            $sql = "SELECT * from reserve where user_id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);
            return $stmt->fetchAll();
        }

    }