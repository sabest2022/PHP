<?php


class Product
{
    private $id;
    private $title;
    private $price;
    private $inStock;

    // TODO Skriv en konstruktor som sätter alla properties
    public function __construct(private $id, private $title, private $price, private $inStock)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->inStock = $inStock;
    }
    // TODO Skriv getters för alla properties
    public function getProduct()
    {

        return [$this->id, $this->title, $this->price, $this->inStock];
    }
}
