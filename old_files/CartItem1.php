<?php


class CartItem
{
    private $product;
    private int $quantity;

    // TODO Skriv en konstruktor som sätter alla properties

    // TODO Skriv getters för alla properties
    public function __construct($product, $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
        return [$product, $quantity];
    }
    public function getProduct()
    {
        return $this->product;
    }
    public function getQuantity()
    {
        return $this->quantity;
    }

    //VG: Skall utöka antalet på ett cartItem med 1. 
    //VG: Det skall inte vara möjligt att utöka så att antalet överstiger produktens $inStock.
    public function increaseQuantity()
    {
        if ($this->getQuantity() === $this->product->getInstock()) {
            echo $this->product->getTitle() . "   Kan inte läggas till. Slut i lager";
            return;
        } else {
            $this->quantity += 1;
        }

        // [$this->product, $this->quantity + 1];

    }
    public function decreaseQuantity()
    {
        $this->quantity -= 1;

        // [$this->product, $this->quantity + 1];

    }
}
// $bad = new CartItem($product1, 3);
