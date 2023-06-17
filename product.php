<?php

class product{
    private int $id;
    private string $title;
    private float $price;
    private int $availableQuantity; 

/**
 *
 * add product to cat. If product already exists insidecart
 * it must update cartItem and return cartitem from method
 * b: $quantity must not become more than whaterver
 * is $availableQuantity of the product
 * 
 * @param cart $cart
 * @param int $quantity
 * @return void
 * @return cartItem
 *   */ 


 public function  __construct($id, $title, $price, $availableQuantity){
    $this->id = $id;
    $this->title = $title;
    $this->price = $price;
    $this->availableQuantity = $availableQuantity;
 }

 /**
  * @return int
  */

  public function getId(){
    return $this->id;
  }

  /**
   * @param int $id 
   */

   public function setId($id){
    $this->id = $id;
   }

   /**
    * @return string
    */

    public function getTitle($title){
        $this->title = $title;
       }

       /**
        * @param float $price
        */

        public function setPrice($price){
            $this->price = $price;
        }
    
        /**
         * @return int
         */

         public function getAvailableQuantity(){
            return $this->availableQuantity;
         }

         /**
          * @param int $availableQuantity
          */

          public function setAvailableQuantity($availableQuantity){
            return $this->availableQuantity;
         }

    public function addToCart(cart $cart, int $quantity){
        // inmplement method
        return $this->addProduct($this, $quantity)
    }

    /**
     * remove product from cart
     * @param cart $cart
     * 
     */
    
    public function removeFromCart(cart $cart){
        // inmplement method
        return $cart->removeProduct($this);
    }
}