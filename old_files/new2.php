<?php
class CartItem
{
    public $product;
    private int $quantity;
    //TODO Skriv getters för alla properties
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
    //get quantity by index in array
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

class Cart
{
    private array $items = [];
    public function addProduct($product)
    {
        $prods = new CartItem($product, 1);
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
    }

    public function showProduct()
    {
        return $this->items;
    }
}

$product1 = new product(1, "iPhone 11", 2500, 10);
$product2 = new Product(2, "M2 SSD", 400, 3);
echo "<h4>Concat of two products object in one array</h4> ";
$objCollection = array($product1, $product2);
print_r($objCollection);
echo "<h4>Merging two products(array) in one array, completely different from above</h4> ";
$arrCollection = array(array("Id" => "11", "title" => "iPhone", "price" => "5400"), array("Id" => "11", "title" => "iPhone", "price" => "5400"));

print_r($arrCollection);
echo "<h4>this is JSON(encoded) array for objCollection with two products: </h4>";
$cartJSN = json_encode($objCollection);
print_r($cartJSN);
echo "<br> <h4>this is JSON(decoded) array for objCollection with two products: </h4>";
$cartJSN1 = json_decode($cartJSN);
print_r($cartJSN1);
echo " <h4>Title of one product extracted from objCollection by using its index: </h4>";
echo "<br>", $objCollection[0]->title;
echo "<h4>Product one: </h4>";
print_r($product1);
echo "<h4> JSON(encoded) array for Product1:</h4>";
$product1JSN = json_encode($product1);
print_r($product1JSN);
echo "<h4> Reverse decoding for product1 </h4> ";
var_dump(json_decode($product1JSN, true));

echo " <h4>  This is cartItem,with one item (product1)</h4> ";
$cartItem = new CartItem($product1, 3);
print_r($cartItem);
echo " <h4> Extract the product from cartItem,with one item (product1)</h4> ";
print_r($cartItem->getProduct());
echo " <h4>Extracting Title of product from cartItem </h4>";
print_r($cartItem->getProduct()->getTitle());

$cart = new Cart();
$cart->addProduct($product1, 2);
echo " <h4>Creating a cart object with one product </h4>";
print_r($cart);
// adding a product to cart object
$cart->addProduct($product2, 1);
echo " <h4> This is content of Cart items, product 1 and 2</h4>";
print_r($cart);

echo " <h4> This is cartItem, all two items </h4>";
print_r($cart->getItems());
echo " <h4> Extracting title of one product from Cart by given index </h4>";
$title = $cart->getItem(1)->getProduct()->getTitle();
print_r($title);

echo " <h4> Extracting of quantity by given index </h4>";
$title = $cart->getItem(0)->getQuantity();

print_r($title);
echo "<br><br>";
// $car2 = (array)$cart;
// print_r($car2);
echo "<h4>this is JSON(encoded) array for objCollection with two products: </h4>";
$cartJSN = json_encode($cart->getItems());
print_r($cartJSN);
echo "<br> <h4>this is JSON(decoded) array for objCollection with two products: </h4>";
$cartJSN1 = json_decode($cartJSN);
print_r($cartJSN1);
extract($cartJSN1);
