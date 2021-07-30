<?php

require_once "Product.php";
require_once "Cart.php";
require_once "CartItem.php";

$product1 = new Product(1, "Xiaomi a4", 1800, 5);
$product2 = new Product(2, "Pearl", 1100, 5);

$cart = new Cart();
$cartItem1 = $cart->addProduct($product1, 1);
echo "Number of items in cart1: ".'<br>';
echo $cart->getTotalQuantity().'<br>';;
echo "Total price of items in cart1: ".'<br>';;
echo $cart->getTotalSum().'<br>';;

$cartItem2 = $product2->addToCart($cart, 1);
echo "Number of items in cart1: ".'<br>';
echo $cart->getTotalQuantity().'<br>';;
echo "Total price of items in cart1: ".'<br>';;
echo $cart->getTotalSum().'<br>';;
