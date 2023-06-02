<?php

require_once("app/Model/Product.php");
require_once("app/Model/Category.php");

class ShopgridController 
{
    private $product;
    private $category;

    public function __construct()
    {
        $this->product = new Product();
        $this->category = new Category();
    }

    public function index()
    {
        $target_file = "public/assets/admin/img/";

        $products = $this->product->getProductForShop();
        $categories = $this->category->all();
        require "views/web/shopgrid/shopgrid.php";
    }

    public function showProductByCategory()
    {
        $idCategory = $_GET['category_id'];
        $target_file = "public/assets/admin/img/";

        $categories = $this->category->all();
        $products = $this->product->getProductByCategory($idCategory);
        $nameCategory = $this->category->findCategoryById($idCategory);
        require "views/web/shopgrid/shopgrid.php";
    }


    public function search()
    {
        $key = $_POST['key'];
        
        $target_file = "public/assets/admin/img/";

        $products = $this->product->searchProduct($key);
        $categories = $this->category->all();
        require "views/web/shopgrid/shopgrid.php";

    }
}