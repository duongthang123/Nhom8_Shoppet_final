<?php 

require_once("app/Model/User.php");
require_once("app/Model/Order.php");

class HomepageController 
{
    private $user;
    private $order;


    public function __construct()
    {
        $this->user = new User();
        $this->order = new Order();
    }

    public function index()
    {
        if(!isset($_SESSION['admin'])) {
            header("location: index.php?controller=authentication&action=showloginAdmin&module=web");
        } else {
            $countUsers = $this->user->coutUser();
            $countSuccessOrders =$this->order->countSuccessOrder();
            $totalMoneyForMonth = $this->order->getTotalForMonth();
            // print_r($totalMoneyForMonth);die();
            require "views/admin/homepage/index.php";
        }
    }

}