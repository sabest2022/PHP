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
        if ($this->items === []) {
            $item = new CartItem($product, 1);

            array_push($this->items, $item);
            return $item;
        } else {
            foreach ($this->items as $item) {

                if ($item->getProduct() === $product) {
                    $item->increaseQuantity();
                    echo "<h3> You added : ";
                    print_r($product->getTitle());
                    echo " , this item already exist in the Cart, so quantity rise up if not excess stock!<h3>";
                    return;
                }
            }
            $item = new CartItem($product, 1);

            array_push($this->items, $item);
            return $item;
        }
    }
    public function getItems()
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

        $t = 0;
        foreach ($this->items as $item) {
            if ($item->getProduct() === $product) {

                if ($item->getQuantity() > 0) {
                    $item->decreaseQuantity();
                }
                if ($item->getQuantity() === 0) {
                    unset($this->items[$t]);
                    return;
                };
            }
            $t++;
        }
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
        }
        print_r($b);
    }
}
