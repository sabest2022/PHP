<?php
class Person
{
    public $propertyPerson = 0;
    static $propertySPerson = 0;

    public function increasePerson()
    {
        return $this->propertyPerson++;
    }
    public static function increseSPerson()
    {
        self::$propertySPerson++;
    }
}

$person1 = new Person();
$person1->increasePerson();
echo $person1;

Person::increseSPerson();
echo Person::$propertySPerson;
Person::increseSPerson();
echo Person::$propertySPerson;

$person1 = new Person();
$person1->increasePerson();
echo $person1;

$person2 = new Person();
$person2->increasePerson();
echo $person2;
