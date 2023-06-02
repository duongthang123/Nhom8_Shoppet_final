<?php

require_once("app/Model/Model.php");


class Admin extends Model
{
    protected $table = 'role';

    public function getAdminByEmailPassword($email, $password) 
    {
        $sql = "SELECT * FROM role WHERE email = '$email' AND password = '$password'";

        $result = $this->dbConnection->query($sql);


        $rs = mysqli_num_rows($result);

        $user = $result->fetch_assoc();

        if($rs == 1) {
            return $user;
        } else{
            return null;
        }
    }

    public function findAdminByEmail($email) {
        $sql = "SELECT * FROM role WHERE email = '$email'";

        $result = $this->dbConnection->query($sql);

        $rs = mysqli_num_rows($result);

        if($rs == 1) {
            return 1;
        } else {
            return 0;
        }
    }

    public function createAdmin($data)
    {
        $name = $data['name'];
        $email = $data['email'];
        $password = sha1($data['password']);
        // $password = $data['password'];

        $sql = "INSERT INTO role (name, email, password) VALUES('$name', '$email', '$password')";

        return $this->dbConnection->query($sql);
    }
}