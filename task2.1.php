<?php
class calculator{
    //properties
    public $first_number,$second_number;
    public $result;

    //methods and functions
    //methods for add two numbers
    function addition()
    {
         $result = $this->first_number + $this->second_number;
         return $result;
    }

    //methods for two numbers
    function subtract(){
        $this->result = $this->first_number - $this->second_number;
        return $this->result;
    }

}
$object = new calculator();
$object->first_number = 10.43;
$object->second_number = 20;
echo "<h2>1. Create a basic calculator with the only Add and Subtract functionality.</h2>";
echo "First number is :".$object->first_number."<br>". "second number is :".$object->second_number."<br>";
echo "additions: ".$object->addition()."<br>";
echo "subtraction: ".$object->subtract();

?>