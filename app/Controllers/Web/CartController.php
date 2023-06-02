<?php

require_once("app/Model/Cart.php");
require_once("app/Model/Product.php");
require_once("app/Model/Category.php");

class CartController
{

    private $cart;
    private $category;

    public function __construct()
    {
        $this->cart = new Cart();
        $this->category = new Category();
    }

    public function index()
    {
        if(!isset($_SESSION['user'])) {
            header("location: index.php?controller=authentication&action=showlogin&module=web");
        } else {
            $target_file = "public/assets/admin/img/";
            $categories = $this->category->all();
            require "views/web/cart/cart.php";
        }
    }

    public function addToCart()
    {
        $productId = $_POST['product_id'];
        $productQuatity = $_POST['product_qt'];
        $this->cart->add($productId, $productQuatity);
        header("location: index.php?controller=cart&action=index&module=web");
    }


    public function updateCart()
    {
        $productIdInput = $_POST['product_id_input'];
        $productQuantity = $_POST['quantity'];
        $this->cart->update($productIdInput, $productQuantity);
        header("location: index.php?controller=cart&action=index&module=web");
    }
    public function deleteItem()
    {
        $productId = $_GET['product_id'];
        $this->cart->deleteCartItem($productId);
        header("location: index.php?controller=cart&action=index&module=web");


    }

}