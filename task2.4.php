<?php

class getdata
{
    public $first_value;
    public $second_value;
    public $result;

    //methods for get data
    function putdata(float $first_value, float $second_value )
    {
        $this->first_value = $first_value;
        $this->second_value = $second_value;
    }
}
class calculator extends getdata
{
    //method for additiobs
    function addition()
    {
        $this->result = $this->first_value + $this->second_value;
        echo "Addition is :" .$this->result."<br>";
    }

    //method for multiplicatios
    function multiplication()
    {
        $this->result = $this->first_value * $this->second_value;
        echo "Multiplication is :" .$this->result."<br>";
    }

    //method for subtractios
    function subtraction()
    {
        $this->result = $this->first_value - $this->second_value;
        echo "Subtraction is :" .$this->result."<br>";
    }
    //method for division
    function devision()
    {
        $this->result = $this->first_value / $this->second_value;
        echo "Devisions is :" .$this->result."<br>";
    }
}

$object = new calculator();
$object->putdata(25,4);
echo "<h2>4. Create a complete calculator with Add, Subtract, Multiply, and Divide
      functionality using the inheritance.</h2>";
echo "First number is :".$object->first_value."<br>". "second number is :".$object->second_value."<br>";
$object->addition();
$object->subtraction();
$object->multiplication();
$object->devision();

?>
