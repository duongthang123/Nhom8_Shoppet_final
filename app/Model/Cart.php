<?php
require_once("app/Model/Model.php");
require_once("app/Model/Product.php");

class Cart extends Model
{
    private $itemIds;
    private $product;


    public function __construct()
    {
        $this->itemIds = $this->getCartSession();
        $this->product = new Product();
    }

    public function add($productId, $productQuantity)
    {
        if(isset($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId]['quantity']++;
        } else {

            $product = $this->product->getProductById($productId);
            $productName = $product['product_name'];
            $productImg = $product['img'];
            $productPrice = $product['price'];

            $_SESSION['cart'][$productId] = [
                'product_id' => $productId,
                'product_img' => $productImg,
                'name' => $productName,
                'price' => $productPrice,
                'quantity' => $productQuantity
            ];
        }
    }

    public function update($productIdInput, $productQuantity) 
    {
        if(isset($_SESSION['cart'][$productIdInput])){
            $_SESSION['cart'][$productIdInput]['quantity'] = $productQuantity;
        }
    }
    public function getCartSession()
    {
        if($_SESSION['cart']) {
            return $_SESSION['cart'];
        } else {
            $_SESSION['cart'] = array();
            return $_SESSION['cart'];
        }
    }

    
    public function applySession()
    {
        $_SESSION['cart'] = $this->itemIds;
    }

    public function deleteCartItem($productId)
    {
        unset($this->itemIds[$productId]);
        $this->applySession();

    }
    public static function clearCartSession()
    {
        unset($_SESSION['cart']);
    }
}