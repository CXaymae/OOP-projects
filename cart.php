<?php

class cart {

    /**
     * @var cartItem[]
     */ 
    
     private array $items = [];

    // generate setters and getters of properties

    /**
     * add product into cart. If the product already exists inside cart
     * it must update quantity.
     * This must create cartItem and return from method
     * b: $quantity must not become more than whaterver
     * is $availableQuantity of the product
     * 
     * @param pproduct $product
     * @param int $quantity
     * @return CartItem
     */
    
     public function getItems(){
        return $this->items;
     }

     /**
      * @param \CartItems[] $items
      */

      public function setItems($items){
        $this->items = $items;
      }

     public function addProduct(product $product, int $quantity){
        // implement method
        // find product in cart by iterating over each item
        //foreach($this->items as $item){
          //  if ($item->)
        //}
        $cartItem = $this->findCartItems($product->getId());
        if ($cartItems === null){
            $cartItem = new cartItem($product, 0);
            $this->items[$product->getId()] = $cartItem;
        }
        $cartItem = increaseQuantity($quantity);
        return $cartItem;
     }


     private function findCartItem(int $productId){
        return $this->items[$productId] ?? null;
     }

     /**
      * remove product from cart
      * @param product $product
      */

      public function removeProduct(product $product){
        unset($this->items[$product->getId()]);

      }

      /**
       * This returns total number of products added in cart
       * @return int
       */

       public function getTotalQuantity(){
       // implement method
       $sum = 0;
       foreach ($this->items as $item){
        $sum += $item->getQuantity();
       }
       return $sum;
       }

       /** 
        * This return total price of products added in cart
        * @return float
        */

        public function getTotalSum(){
        $totalSum = 0;
       foreach ($this->items as $item){
        $totalSum += $item->getQuantity() * $item->getProduct()->getPrice();
        }

        return $totalSum;
} 
