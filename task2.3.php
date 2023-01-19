<?php

//create a traits
trait getdata{
    public $first_number,$second_number;
    public $result;

    //method to get a input
    function getdata(float $first_value, float $second_value)
    {
        $this->first_number  = $first_value;
        $this->second_number = $second_value;
    }
}
//class for devision
class devide{
    use getdata;
    
    //method for devide
    function division()
    {
        $this->result = $this->first_number / $this->second_number;
        echo "Devision :".$this->result;
    }
}
//class for basic addition and multiplications
class calculator extends devide{
    use getdata;

    //methods for add
    function add(){
         $this->result = $this->first_number + $this->second_number;
         echo "Addition :".$this->result;
    }

    function multiply(){
        $this->result = $this->first_number * $this->second_number;
        echo "Multiplication :".$this->result;
    }
}

$object = new calculator();
$object->getdata(100,11);
echo "<h2>3. Create a calculator with the only Add, Multiply & Divide functionality by using
the inheritance and using Trait.</h2>";
echo "First number is :".$object->first_number."<br>". "second number is :".$object->second_number."<br>";
$object->add()
;echo"<br>";
$object->multiply();
echo"<br>";
$object->division()
?>