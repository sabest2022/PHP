<?php


class Cart
{
    private array $items = [];

    //TODO Skriv getter för items

    /*
     Skall lägga till en produkt i kundvagnen genom att
     skapa ett nytt cartItem och lägga till i $items array.
     Metoden skall returnera detta cartItem.

     VG: Om produkten redan finns i kundvagnen
     skall istället quantity på cartitem ökas.
     */
    public function addProduct($product)
    {
        $item = new CartItem($product, 1);
        // print_r($item);
        array_push($this->items, $item);
        return $item;
    }
    public function getProducten()
    {

        return  $this->items;
    }
    public function getProduct($i)
    {

        return  $this->items[$i];
    }
    //Skall ta bort en produkt ur kundvagnen (använd unset())
    public function removeProduct($product)
    {
        // $this->quantity += 1;
        // $cartItem2->getProduct();
        // $storage = $this->items;
        // $storage->count();
        $t = 0;
        foreach ($this->items as $item) {
            // $f = [];
            // print_r($this->items);
            if ($item->getProduct() === $product) {
                echo "<br> <br>";

                if ($item->getQuantity() > 0) {
                    $item->decreaseQuantity();
                }

                // $x = get_id($item);
                // echo $x;
                if ($item->getQuantity() === 0) {
                    unset($this->items[$t]);
                    return;
                    // print_r($item);
                    // unset($this->items, $item);
                    // print_r($item);
                    // unset($this->product);

                    // print_r($item);

                };
            }
            $t++;
        }
        echo $t;

        // return $this->items;


        // unset($this->items, $cartItem2);
        // print_r($t);
        // echo "<br> <br>";
        // // unset($this->items[0]);
        // print_r($this->items);
    }

    //Skall returnera totala antalet produkter i kundvagnen
    //OBS: Ej antalet unika produkter
    public function getTotalQuantity()
    {
        $b = 0;
        foreach ($this->items as $item) {
            $b += $item->getQuantity();
        }
        print_r($b);
    }

    //Skall räkna ihop totalsumman för alla produkter i kundvagnen
    //VG: Tänk på att ett cartitem kan ha olika quantity
    public function getTotalSum()
    {
        $b = 0;

        foreach ($this->items as $item) {
            $b += ($item->getProduct()->getPrice() * $item->getQuantity());
            // print_R($item->getProduct());
        }
        print_r($b);
    }
}
