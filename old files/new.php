<?php
class CartItem
{
    public $product;
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
    }
}

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
    public function getID()
    {

        return $this->id;
    }
    public function getTitle()
    {

        return $this->title;
    }
    public function getPrice()
    {

        return $this->price;
    }
    public function getInstock()
    {

        return $this->inStock;
    }
}
$product1 = new product(1, "iPhone 11", 2500, 10);
$product2 = new Product(2, "M2 SSD", 400, 3);
$cart = array($product1, $product2);
print_r($cart);
echo "<br>this is the merge two product <br>";
$car1 = json_decode(json_encode($product1), true);
$car1 = array(array("Id" => "11", "title" => "iPhone", "price" => "5400"), array("Id" => "11", "title" => "iPhone", "price" => "5400"));
// print_r($car1[0]->price);
// $car2 = json_decode(json_encode($product2), true);
// $cart2 = array_merge(json_decode(json_encode($product2), $product1));
// $cart3 = json_decode($cart2, true);
// print_r($cart3);
echo "<br>";
print_r($car1);
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
class Cart
{
    private array $items = [];
    public function addProduct($product, $qnt)
    {
        // $prods = [$qnt, $product];
        $prods = new CartItem($product, $qnt);
        // $prods =  json_encode([$qnt, $product]);


        // $this->items = [$this->items, $product];
        return array_push($this->items, $prods);
        // return array_push($this->items, json_encode($prods));
    }
    public function getItems()
    {

        return $this->items;
    }
    public function getItem($index)
    {

        return $this->items[$index];
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

echo " <br> This is cartItem, product1 <br>";
$bat = new CartItem($product1, 3);
print_r($bat);
echo "<br><br>";
print_r($bat->getProduct());
echo " <br> <br>This is cartItem,  print title of product1 <br>";
// $first_names = array_column($bat->getProduct(), 'title');
// print_r($first_names);
print_r($bat->getProduct()->getTitle());
// print_r($pat->getProduct(array())->getID());
echo "<br><br>";

// echo "<br> new code from hereeeeeeee ";
$collection = new Cart();
// print_r($collection);
// echo "<br>";
$collection->addProduct($product1, 2);
print_r($collection);
echo "<br><br>";
$collection->addProduct($product2, 1);
// $collection->addProduct($product1, 2);
// print_r($collection->getProduct);
echo "<br><br>";
echo " <br> This is Cart items, product 1,2 <br>";
print_r($collection);
echo "<br><br>";
print_r($collection->getItems([0]));
echo " <br> This is cartItem, product of given index <br>";
$title = $collection->getItem(0)->getProduct()->getID();
// $title = $title->getProduct();
print_r($title);
echo "<br><br>";
$car2 = (array)$collection;
print_r($car2);
// // $collection->addProduct($product2, 1);
// // $collection->addProduct($product1, 2);
// // $collection->removeProduct($product1);
// // unset($collection, $product1);
// echo "<br> This is Parseeeeeeeee file of collection with print_r() for product<br>";

// print_r($collection->showProduct());
// echo "<br>";
// echo "<br>";
// //how to address the item
// echo "<br> this is item of collection <br>";
// print_r($collection->showProduct()[0]);
// echo "<br>";
// echo "<br>";
// //how to address quantinety
// print_r($collection->showProduct()[0][3]);
// echo "<br>";
// $collect = $collection->showProduct()[1];
// // print_r($collect);

// // $collect = array_slice($collect, 1);

// echo "<br> this is item of collection <br>";
// print_r($collect);
// echo "<br> this is new variable";
// print_r($collection->showProduct()[1]);
// echo "<br>";
// print_r($collection->showProduct()[1]);
// echo "<br>";
// echo "<br> this is new  JSON_Decode collection, item 0 <br>";
// print_r(json_decode($collection->showProduct()[0]));
// echo "<br>";
// echo "<br> this is new  JSON_Decode Item 1 <br>";
// $item1 = json_decode($collection->showProduct()[1], true);
// print_r($item1[1]);
// echo "<br>";
// // var_dump($item1[1]);
// echo "<br>";
// echo "<br> this is new array_column extraction from stdClass Object <br>";
// $object_id = array_column($item1, 'title');
// print_r($object_id);
// echo "<br>";
// // print_r(json_decode($collection->showProduct()[0][1]->id));
// echo "<br>";
// // print_r(json_decode($collection->showProduct()[2]));
// // echo "<br>";
// // print_r(json_decode($collection->showProduct()[2])->title);
// $saeed = array("name" => "saeed", "family" => "Askarian");
// echo "<br> this is  saeeds Array <br>";
// print_r($saeed);
// echo "<br> this is new  JSON_encode saeeds Array <br>";
// $item7 = json_encode($saeed, true);
// print_r($item7);
// echo "<br> this is new  JSON_decode saeeds Array <br>";
// $item8 = json_decode($item7, true);
// print_r($item8);
// echo "<br>";
