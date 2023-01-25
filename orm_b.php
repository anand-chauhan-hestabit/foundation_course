<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class DbConnect
{   
    private static $instance = null;
    private static $conn;

    private function __construct(){

        self::$conn = new mysqli('localhost', 'hestabit', 'hestabit', 'anand');
        echo "conected....<br>";

    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new DbConnect();
            return self::$instance;
        } else {
             echo "now cant initiate instance.... ";
            //die('now cant initiate instance.... ');
        }
        
    }

    public static function getConnection()
    {  
        return self::$conn;
    }


    #FETCH DATA USING GIVEN TABLE AND COLUMN NAME
    public  function fetch_Data($table_name, $column_name)
     {
            $obj =  DbConnect::getConnection();
            $sql = "select $column_name from $table_name";
            $result = $obj->query($sql);
            echo "<pre>";print_r($result->fetch_all());
    }

     #INSERT DATA INTO DATABASE USING GIVEN TABLE AND COLUMN NAME
     public function insert_Into_Db($table_name, $column_name, $value){
        $obj =  DbConnect::getConnection();
        $sql = "INSERT INTO `$table_name`($column_name) VALUES ('$value')";
        $result = $obj->query($sql);
        if ($result) {
            echo "inserted $value succesfully<br>";
        } else {
            echo "not inserted data";
        }
    }

      #UPDATE ROW USING GIVEN TABLE, COLUMN NAME AND VALUES 
      public static function update_row($table_name, $column_name, $old_Value, $new_Value){
        $obj =  DbConnect::getConnection();
        $sql = "UPDATE `$table_name` SET $column_name = '$new_Value' WHERE $column_name='$old_Value'";
        $result = $obj->query($sql);
        if ($result) {
            echo "updated data $old_Value with $new_Value succesfully<br>";
        } else { 
            echo "not updated  data";
        }
    }

    #Delete row by providing a table name, column name, and value of the column.
    public static function delete_row($table_name, $column_name, $value){
        $obj =  DbConnect::getConnection();
        $sql = "DELETE FROM `$table_name` WHERE $column_name = '$value'";
        $result = $obj->query($sql);
        if ($result) {
            echo "Deleted $value successfully....<br>";
        } else {
            echo "not deleted";
        }
    }
}

$db = DbConnect::getInstance();
$db->fetch_Data("anandt","name");
$db->insert_Into_Db("anandt","name","Vikas kumar");
$db->update_row("anandt","name","Vikas kumar","Ranjan kumar");
$db->delete_row("anandt","name","Gorakhpur");

