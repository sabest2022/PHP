<?php

class Product
{
    public $id;
    public $title;
    public $price;
    public $inStock;

    // TODO Skriv en konstruktor som sätter alla properties
    public function __construct($id, $title, $price, $inStock)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->inStock = $inStock;
    }
    // TODO Skriv getters för alla properties
    public function getProduct()
    {

        return  [$this->id, $this->title, $this->price, $this->inStock];
    }
}
$product1 = new product(1, "iPhone 11", 2500, 10);
$product2 = new Product(2, "M2 SSD", 400, 3);
$cart = array($product1, $product2);
echo "<br>";
print_r($cart);
echo "<br> <br>this is the JSON array for Cart with two products: ";
$cartJSN = json_encode($cart);
echo "<br>  ";
print_r($cartJSN);
echo "<br>", $cart[0]->title, "<br> <br>";

print_r($product1);
echo "<br><br>  this is the JSON array for Product1:";
$cart1 = json_encode($product1);
echo "<br>  ";
print_r($cart1);
echo "<br>this is the reverse decoding <br>";
var_dump(json_decode($cart1, true));



echo "<br>";
class Pro
{
    private array $items = [];
    public function addProduct($product, $qnt)
    {
        $prods = [$qnt, $product];
        echo " <br>This is printed out BEFORE from addproduct function on Pro Class<br>";
        print_r($this->items);
        echo "<br>";

        // $this->items = [$this->items, $product];
        return array_push($this->items, json_encode($prods));
    }
    public function removeProduct($product)
    {
        $product = json_encode($product);
        unset($this->items, $product);
        // unset($this->items, $product[0]);
        //  unset($this->items, $product);
        //  return
    }
    public function showProduct()
    {
        return $this->items;
    }
}
echo "<br> new code from hereeeeeeee ";
$collection = new Pro();
print_r($collection);
echo "<br>";
$collection->addProduct($product1, 2);
print_r($collection);
echo "<br><br>";
$collection->addProduct($product2, 1);
// $collection->addProduct($product2, 1);
// $collection->addProduct($product1, 2);
// $collection->removeProduct($product1);
// unset($collection, $product1);
echo "<br> This is Parseeeeeeeee file of collection with print_r() for product<br>";

print_r($collection->showProduct());
echo "<br>";
echo "<br>";
//how to address the item
echo "<br> this is item of collection <br>";
print_r($collection->showProduct()[0]);
echo "<br>";
echo "<br>";
//how to address quantinety
print_r($collection->showProduct()[0][3]);
echo "<br>";
$collect = $collection->showProduct()[1];
// print_r($collect);

// $collect = array_slice($collect, 1);

echo "<br> this is item of collection <br>";
print_r($collect);
echo "<br> this is new variable";
print_r($collection->showProduct()[1]);
echo "<br>";
print_r($collection->showProduct()[1]);
echo "<br>";
echo "<br> this is new  JSON_Decode collection, item 0 <br>";
print_r(json_decode($collection->showProduct()[0]));
echo "<br>";
echo "<br> this is new  JSON_Decode Item 1 <br>";
$item1 = json_decode($collection->showProduct()[1], true);
print_r($item1[1]);
echo "<br>";
// var_dump($item1[1]);
echo "<br>";
echo "<br> this is new array_column extraction from stdClass Object <br>";
$object_id = array_column($item1, 'title');
print_r($object_id);
echo "<br>";
// print_r(json_decode($collection->showProduct()[0][1]->id));
echo "<br>";
// print_r(json_decode($collection->showProduct()[2]));
// echo "<br>";
// print_r(json_decode($collection->showProduct()[2])->title);
$saeed = array("name" => "saeed", "family" => "Askarian");
echo "<br> this is  saeeds Array <br>";
print_r($saeed);
echo "<br> this is new  JSON_encode saeeds Array <br>";
$item7 = json_encode($saeed, true);
print_r($item7);
echo "<br> this is new  JSON_decode saeeds Array <br>";
$item8 = json_decode($item7, true);
print_r($item8);
echo "<br>";
