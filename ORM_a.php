<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
interface connect_interface{
    public static function connect_database();
}

class connect implements connect_interface{
    public static function connect_database()
    {
        $con = new mysqli("localhost","hestabit","hestabit","anand");
        if($con->connect_error){
            die("connection failed :".$con->connect_error);
        }
        else{
            echo"connection succesfull";
        }
    }
}
echo"<pre>";
echo"<h2>a. Need a static class to communicate with DB. It should implement the interface.</h2>";
connect::connect_database();


?>