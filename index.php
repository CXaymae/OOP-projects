<?php
// include the classes in this file
require_once "product.php";
require_once "cart.php";
require_once "cartItem.php";
// create 3 products
$product1 = new product(1, "The alchimist", 140, 3);
$product2 = new product(2, "Sophie's world", 210, 5);
$product3 = new product(3, "Clean Code", 290, 9);
// create instance of cart
$cart = new Cart();
$cartItem1 = $cart->addProduct($product1, quantity: 2);
$cartItem2 = $product2->addToCart($cart, quantity: 3);
echo "Number of items in cart : ".PHP_EOL;
// print 5
echo $cart->getTotalQuantity().PHP_EOL;
echo "Total price of items in cart : ".PHP_EOL;
// print 350
echo $cart->getTotalSum().PHP_EOL;
// call the method twice
$cartItem2->increaseQuantity();
$cartItem2->increaseQuantity();

echo "Number of items in cart : ".PHP_EOL;
echo $cart->getTotalQuantity().PHP_EOL;

echo "Total price of items in cart : ".PHP_EOL;
echo $cart->getTotalSum().PHP_EOL;

$cart->removeProduct($product1);

echo "Number of items in cart :".PHP_EOL;
echo $cart->getTotalQuantity().PHP_EOL;