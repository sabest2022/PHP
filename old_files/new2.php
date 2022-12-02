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
    public function getqnt($index)
    {
        return $this->items[$index];
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
    // public function getProduct()
    // {
    //     return  [$this->id, $this->title, $this->price, $this->inStock];
    // }
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
    public function addProduct($product)
    {
        // $prods = [$qnt, $product];
        $prods = new CartItem($product, 1);
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
echo " <br> This is cartItem, all items <br>";
print_r($collection->getItems());
echo " <br><br> This is cartItem, products property of given index <br>";
$title = $collection->getItem(1)->getProduct()->getTitle();
// $title = $title->getProduct();
print_r($title);
echo "<br><br>";
// $title = array_column($collection->getItems()[0], 'quantity');
echo " <br><br> This is cartObject, shows the quantity of given index <br>";
$title = $collection->getItem(0)->getQuantity();

// $title = $title->getProduct();
print_r($title);
echo "<br><br>";
// $car2 = (array)$collection;
// print_r($car2);
