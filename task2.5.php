<?php
interface calculator_interface{
    public function addition(float $first_value,float $second_value);
    public function subtraction(float $first_value,float $second_value);
    public function multiplication(float $first_value,float $second_value);
    public function devision(float $first_value,float $second_value);

}

/*
interface get_data{
    public function getinput();

}
interface add{
    public function subtraction();
}
interface subtract{
    public function addition();
}
interface multiply{
    public function multiplication();

}
interface devide{
    public function devision();

}
*/
class calculator implements calculator_interface{
  
    function addition(float $first_value,float $second_value)
    {
        $result = $first_value + $second_value;
        echo "Addition is :" .$result."<br>";
    }

    //method for multiplicatios
    function multiplication(float $first_value,float $second_value)
    {
        $result = $first_value + $second_value;
        echo "Multiplication is :" .$result."<br>";
    }

    //method for subtractios
    function subtraction(float $first_value,float $second_value)
    {
        $result = $first_value + $second_value;
        echo "Subtraction is :" .$result."<br>";
    }
    //method for division
    function devision(float $first_value,float $second_value)
    {
        $result = $first_value + $second_value;
        echo "Devisions is :" .$result."<br>";
    }
}
$object = new calculator();
echo"<h2>5. Create an interface that can be used for calculator functionality.</h2>";
$object->addition(12,32);
$object->subtraction(23,-43);
$object->multiplication(12,2);
$object->devision(23,2);
?>