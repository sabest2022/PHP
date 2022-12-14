<?php 
class Calculator
{
    public  $num1;
    public $num2;
    public  $operator;
    public function __construct($num1, $num2, $operator)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->operator = $operator;
    }
    public function calculate()
    {
        switch ($this->operator) {
            case "add":

                return $this->num1 + $this->num2;
                break;
            case "sub":
                return  $this->num1 - $this->num2;
                break;
            case "mul":
                return  $this->num1 * $this->num2;
                break;
            case "div":
                return  $this->num1 / $this->num2;
        }
    }
}
