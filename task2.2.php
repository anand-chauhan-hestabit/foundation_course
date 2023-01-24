<?php
//trait creation 
trait getdata
{
    public $first_number;
    public $second_number;
    public $result;

    //method for get input
    function getdata(float $first_value,float $second_value)
    {  
       $this->first_number = $first_value;
       $this->second_number = $second_value;
    }  

}
//class declaration and definations
class devide
{
    use getdata;
  
    function devide()
    {
      $this->result = $this->first_number / $this->second_number;
      return $this->result;
    }
}
//object creations
$object = new devide();
$object->getdata(100,3);
echo "<h2>2. Create a function of Divide using Trait.</h2>";
echo "First number is :".$object->first_number."<br>". "second number is :".$object->second_number."<br>";
echo "Devision is :".$object->devide();
?>
