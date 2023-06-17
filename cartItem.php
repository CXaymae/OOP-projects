<?php

// the following class with 2 private properties encapsulates the functionality related to a cart item, including setting the product, retrieving the product, modifying the quantity, and ensuring quantity constraints are maintained.

class cartItem{
    // the product associated with the cart item
    private product $product;
    // quantity of the product in the cart.
    private int $quantity;

// generate constructor with all properties of the class
// generate getters and setters of properties
/**
 * cartItem constructor
 * 
 * @param \product $product
 * @param int $quantity
 */
// __construct initializes the cartItem object. It takes a product object and a quantity as parameters and assigns them to the respective properties.
public function __construct(\product $product, $quantity){
    $this->product = $product;
    $this->quantity = $quantity;
}

 // Getter and setter methods are provided for accessing and modifying the properties of the cartItem class. 

/**
 * @param \product 
 */

 public function getProduct(){
    return $this->product;
 }

 /**
  * @param \product $product
  */

  public function setProduct($product){
    $this->product = $product;
  }

  /**
   * @return int
   */

   public function getQuantity(){
    return $this->quantity;
 }

 /**
  * @param int $quentity
  */

  public function getQuantity($quantity){
     $this->quantity;
 }
// The increaseQuantity method increases the quantity of the cart item by a specified amount ($amount). Before incrementing the quantity, it checks if the new quantity exceeds the available quantity of the associated product ($product::$availableQuantity). If it does, an exception is thrown to indicate that the quantity cannot exceed the available quantity.
public function increaseQuantity($amount = 1){
    // $quantity must be increased by one
    //b:  $quantity must not become more than whatever is product::$availableQuantity
    if ($this->getQuantity() + $amount > $this->getProduct()->getAvailableQuantity()){
        throw new Exception("Product quantity can not be more than ".$this->getProduct()->getAvailableQuantity());
    }
    $this->quantity += $amount;
}
 // The decreaseQuantity method decreases the quantity of the cart item by one. Before decrementing the quantity, it checks if the new quantity would be less than 1. If it is, an exception is thrown to indicate that the quantity cannot be less than 1.
public function decreaseQuantity(){
    // $quantity must be increased by one
    // $quantity must not become less than 1

    if ($this->getQuantity() - $amount < 1){
        throw new Exception("Product quantity can not be less than 1");
    }
    $this->quantity = $amount;
}
}