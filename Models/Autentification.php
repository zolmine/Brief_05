<?php
  class Autentification extends Dbc {

    // Register user
    public function register($data)
    {
        $stmt = $this->connect()->prepare('INSERT INTO customers (full_name, user_email, user_pass) VALUES(:full_name, :user_email, :user_pass)');

        $stmt->execute([$data]);
    }
    // Login Authentication
    public function login_customers($email,$password)
    {
        $stmt = $this->connect()->prepare('SELECT * FROM customers WHERE user_email = :email and user_pass = :pwd');
        $stmt->execute([':email'=> $email]);
    }

      public function login_admins($email,$password)
      {

          $stmt = $this->connect()->prepare('SELECT * FROM admins WHERE admin_user_name = :user_name and pass = :pwd');
          $stmt->execute([':email'=> $email, ':pwd' => $password]);
      }
  }