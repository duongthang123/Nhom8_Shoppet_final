<?php

require_once("app/Model/Category.php");
require_once("app/Model/Order.php");
require_once("app/Model/OrderDetail.php");
require_once("app/requests/web/OrderRequest.php");

class OrderController
{
    private $category;
    private $order;
    private $orderDetail;

    public function __construct()
    {
        $this->category = new Category();
        $this->order = new Order();
        $this->orderDetail = new OrderDetail();
    }

    public function index()
    {
        if(!isset($_SESSION['user'])) {
            header("location: index.php?controller=authentication&action=showlogin&module=web");
        } else {
            $categories = $this->category->all();
            require "views/web/order/order.php";
        }
        
    }

    public function create()
    {
        if(isset($_POST['btn_order'])) {
            $orderRequest = new OrderRequest();
            $orderErrors = $orderRequest->VilidateOrder($_POST);
            
            if(count($orderErrors) == 0)
            {
                $result = $this->order->createOrder($_POST);
                $orderId['id'] = $this->order->getOrderId();
                $this->orderDetail->createOrderDetails($orderId['id']);
                // xóa cart
                unset($_SESSION['cart']);
                if($result) {
                    header("location:index.php?controller=order&action=success&module=web");
                }
            } else {
                require "views/web/order/order.php";
            }
        }
    }

    public function success()
    {
        $categories = $this->category->all();
        require "views/web/succesOrder/index.php";
    }
}