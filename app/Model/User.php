<?php

require_once("app/Model/Model.php");

class User extends Model
{
    protected $table = "users"; 

    public function getUserByEmailPassword($email, $password) 
    {
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

        $result = $this->dbConnection->query($sql);


        $rs = mysqli_num_rows($result);

        $user = $result->fetch_assoc();

        if($rs == 1) {
            return $user;
        } else{
            return null;
        }
    }

    public function findUserByEmail($email) {
        $sql = "SELECT * FROM users WHERE email = '$email'";

        $result = $this->dbConnection->query($sql);

        $rs = mysqli_num_rows($result);

        if($rs == 1) {
            return 1;
        } else {
            return 0;
        }
    }

    public function createUser($data)
    {
        $name = $data['name'];
        $email = $data['email'];
        $password = md5($data['password']);

        $sql = "INSERT INTO users (name, email, password) VALUES('$name', '$email', '$password')";

        return $this->dbConnection->query($sql);
    }

    public function coutUser() {
        $sql = "SELECT * FROM users";
        $result = $this->dbConnection->query($sql);
        return mysqli_num_rows($result);
    }

    
}