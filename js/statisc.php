<?php

use Person as GlobalPerson;

class Person
{

    public $personProperty = 0;
    static $personSProperty = 0;

    public function increseProperty()
    {
        return $this->personProperty++;
    }
    public static function increseSProperty()
    {
        self::$personSProperty++;
    }
}

$person1 = new Person();
$person1->increseProperty();
var_export($person1);
echo "<br>";
echo $person1->personProperty . "<br>";

Person::increseSProperty();
Person::increseSProperty();
echo Person::$personSProperty . "<br>";
var_export(Person::$personSProperty);
echo "<br>";
$person2 = new Person();
$person2->increseProperty();
echo $person2->personProperty . "<br>";
var_export($person1);


echo "<br>";
class myclass
{
    var $prop1 = 1;
    public $prop2 = 2;
    public function __construct($prop1, $prop2)
    {
        $this->prop1 = $prop1;
        $this->prop2 = $prop2;
        return [$prop1, $prop2];
    }
    public function increase()
    {
        $this->prop1++;
    }
};
$minobj = new myclass(3, 4);
$minobj1 = new myclass(0, 0);
$minobj->increase();
var_dump($minobj);
echo "<br>";

$dinobj = new class(3, 4)
{
    public $prop1 = 1;
    public $prop2 = 2;
    public function __construct($prop1, $prop2)
    {
        $this->prop1 = $prop1;
        $this->prop2 = $prop2;
        return [$prop1, $prop2];
    }

    public function increase()
    {
        $this->prop1++;
    }
    public function showdata()
    {
        return [$this->prop1, $this->prop2];
    }
};
$dinobj->increase();
var_dump($dinobj);
echo "<br>";
$thevar = $dinobj->showdata();


echo $thevar[0], $thevar[1] . "<br>";
if (is_a($minobj, "myclass")) {
    echo "Yes it is!";
};
echo "<br>";
echo get_class($dinobj) . "<br>";
print_r(get_class_vars("myclass"));
echo "<br>";
print_r(get_object_vars($minobj1));

class myclass1
{
    var $property1 = 1;
    public $property2 = 2;
    public function set($prop1, $prop2)
    {
        $this->property1 = $prop1;
        $this->prop2 = $prop2;
        return [$prop1, $prop2];
    }
    public function increase()
    {
        $this->property1++;
    }
};
$myobj2 = new myclass1();
$myobj2->set(2, 4);

echo "<br>";
print_r(get_class_vars("myclass1"));
echo "<br>";
print_r(get_object_vars($myobj2));
$myobj2->increase();

echo "<br>";
print_r(get_object_vars($myobj2));
echo "<br>";
print_r(get_class_methods($myobj2));

class Bycycle
{
    public $brand;
    public $model;
    public $year;
    public $description;
    public $weight_kg = 0.0;
    public function name()
    {
        return  $this->brand . "  " . $this->model . "  " . $this->year . "  (" . $this->weight_kg . ")";
    }
    public function setName($brand, $model, $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }
    public function setWeight($weight_ls)
    {
        $this->weight_kg = $weight_ls / 2.204;
    }
    public function setWeight_kg($weight_kg)
    {
        $this->weight_kg = $weight_kg;
    }
    public function getWeight()
    {
        echo $this->weight_kg;
    }
    public function getWeight_lbs()
    {
        echo $this->weight_kg * 2.204;
    }
}
$bycycle1 = new Bycycle();
$bycycle1->setName('Trek', 'Emonde', '2017', 37.5);
$bycycle1->Name();
echo "<br>";
$bycycle1->setWeight(4);
$bycycle1->setWeight_kg(8);
echo $bycycle1->weight_kg;
echo "<br>";
$bycycle1->getWeight();
echo "<br>";
$bycycle1->getWeight_lbs();

class elBycycle extends Bycycle
{
    public $power = 0.0;
    public $range = 0.0;
    public function setInfo($power, $range)
    {
        $this->power = $power;
        $this->range = $range;
    }
    public function getInfo()
    {
        echo   " Brand:  " . $this->brand . ", Model Name:  " . $this->model . ", Model Year:   " . $this->year . ", Power: " . $this->power . "(watt) , Range: " . $this->range . "(km) , Weight: (" . $this->weight_kg * 2.2 . "lbs)";
    }
}
$elcycle = new elBycycle();
echo "<br>";
print_r(get_object_vars($elcycle));
$elcycle->setName('Prek', 'Bermonda', '2019', 83.5);
echo "<br>";
$elcycle->setInfo(45, 23);
$elcycle->setWeight_kg(14);
$elcycle->getInfo();
echo "<br>";
var_export($elcycle);
echo "<br>";
$myarr = (get_object_vars($elcycle));
echo $myarr["power"] . $myarr['brand'] . $myarr['year'];
echo "<br>";
echo "The parent class is: " . (get_parent_class($elcycle));
echo "<br>";

// echo $myobj;
// function conster($prop1, $prop2)
// {
//     return $prop1 + $prop2;
// }

// $myobj = conster(4, 7);

// print_r($myobj);
