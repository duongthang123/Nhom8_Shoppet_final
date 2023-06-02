<?php

require_once("app/Model/Model.php");

class Order extends Model
{
    protected $table = 'oders';
    public function createOrder($data){
        $userId = $_SESSION['user']['id'];
        $fullname = $data['fullname'];
        $phoneNumber = $data['phoneNumber'];
        $city = $data['city'];
        $address = $data['address'];
        $email = $data['email'];
        $note = $data['note'];
        $pay = $data['pay'];
        $total = $data['total'];
        
        $sql = "INSERT INTO oders (user_id ,fullname, phoneNumber, city, address, email, note, pay, oder_date, total_money) 
                VALUES ($userId, '$fullname', '$phoneNumber', '$city', '$address','$email' , '$note' , '$pay', NOW() ,$total)";
        
        return $this->dbConnection->query($sql);
    }

    public function getOrderId()
    {
        $query = "SELECT id FROM oders ORDER BY id DESC LIMIT 1";
        $result = $this->dbConnection->query($query);

        return $result->fetch_assoc();
    }

    public function getAllOrders()
    {
        $sql = "SELECT * FROM oders WHERE status IS NULL";

        $result = $this->dbConnection->query($sql);
        
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function updateStatusOrder($orderId)
    {
        $sql = "UPDATE oders SET status = 'chờ xác nhận' WHERE id = $orderId";

        $result = $this->dbConnection->query($sql); 

        return $result;
    }

    public function listConfirmOrder()
    {
        // if($confirmOrder == 1) {
            $sql = "SELECT * FROM oders WHERE status IS NOT NULL";

            $result = $this->dbConnection->query($sql);
            // print_r($result->fetch_all(MYSQLI_ASSOC));die();
            return $result->fetch_all(MYSQLI_ASSOC);
        // }
    }

    public function updateStatusOrderSuccess($orderId)
    {
        $sql = "UPDATE oders SET status = 'đã xác nhận' WHERE id = $orderId";

        $result = $this->dbConnection->query($sql); 

        return $result;
    }

    public function updateStatusOrderDis($orderId)
    {
        $sql = "UPDATE oders SET status = 'đã hủy đơn' WHERE id = $orderId";

        $result = $this->dbConnection->query($sql); 

        return $result;
    }
    
    public function countSuccessOrder()
    {
        $sql = "SELECT id FROM oders WHERE status ='đã xác nhận'";
        $result = $this->dbConnection->query($sql);
        // print_r($result->fetch_assoc());die();
        return mysqli_num_rows($result);
    }

    public function getTotalForMonth()
    {
        $sql = "SELECT MONTH(oder_date) AS date, SUM(total_money) AS total FROM oders
                WHERE MONTH(oder_date) = MONTH(NOW()) AND status = 'đã xác nhận'
                GROUP BY MONTH(oder_date)";

        $result = $this->dbConnection->query($sql);

        return $result->fetch_assoc();
    }
}