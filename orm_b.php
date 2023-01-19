<?php
class Singleton{
    private static $instance = NULL;
    private function __construct(){
        echo"<h2>Db connected</h2>";
    }
    public static function getInstance(){
        if(self::$instance == NULL){
            self::$instance = new Static();
         }else{
            echo"already connected <br>";
         }
         return self::$instance;
    }
    #DATABASE CONNECTION
    public static function getDBConn(){
        try{
            $db = self::$instance;
            $db->dbconn = new mysqli('localhost','hestabit','hestabit','anand');
            return $db->dbconn;
        }
        catch(Exception $e){
            echo "error:-".$e->getMessage();
        }
    }

   #FETCH DATA USING GIVEN TABLE AND COLUMN NAME
    public static function fetch_Data($table_name,$column_name){
        $obj =  singleton::getDBConn();
        $sql = "select $column_name from $table_name";
        $result = $obj->query($sql);
        $response = $result->fetch_all();
        echo"<pre>";print_r($response);
    }
    #INSERT DATA INTO DATABASE USING GIVEN TABLE AND COLUMN NAME
    public static function insert_Into_Db($table_name,$column_name,$value){
        $obj =  singleton::getDBConn();
        $sql = "INSERT INTO `$table_name`($column_name) VALUES ('$value')";
        $result = $obj->query($sql);
        if($result){
            echo"inserted succesfully<br>";
        }else{
            echo"not inserted data";
        }
    }

    #UPDATE ROW USING GIVEN TABLE, COLUMN NAME AND VALUES 
    public static function update_row($table_name,$column_name,$old_Value,$new_Value){
        $obj =  singleton::getDBConn();
        $sql = "UPDATE `$table_name` SET $column_name = '$new_Value' WHERE $column_name='$old_Value'";
        $result = $obj->query($sql);
        if($result){
            echo"updated data succesfully<br>";
        }else{
            echo"not updated  data";
        }
    }

    #Delete row by providing a table name, column name, and value of the column.

    public static function delete_row($table_name,$column_name,$value){
        $obj = singleton::getDBConn();
        $sql = "DELETE FROM `$table_name` WHERE $column_name = '$value'";
        $result = $obj->query($sql);
        if($result){
            echo"Deleted $value successfully....<br>";
        }else{
            echo"not deleted";
        }
    }
} echo"<pre>";
echo"<h2>b. Need the following functions in the class:
i.Connect DB (use singleton method for this)
ii.Select data by providing a table name and columns that need to be fetched.
iii.Insert into DB by providing a table name, column name, and values.
iv.Update row by providing a table name, column name, and value.
v.Delete row by providing a table name, column name, and value of the
column";
singleton::getInstance();
singleton::insert_Into_Db("anandt","name","Vikas kumar");
singleton::update_row("anandt","name","vikas kumar","Gorakhpur");
singleton::delete_row("anandt","name","Rajesh kumar");
singleton::fetch_Data("anandt","name");
?>