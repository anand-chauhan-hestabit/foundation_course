<?php

require "task3_file1.php";

require "task3_file2.php";

echo "<h2>Task 3:
      1. Create 2 functionalities one is to reverse the string and second to split the
      string into an array using the class and functions. For both the functionality
      5the class name will be the same StringMagic. So we need to achieve the goal
      to create the same name of classes by using Namespacing.</h2>";

$object_first = new first_namespace\StringMagic;
$object_first->reverse_the_String("hestabit");
echo "<br>";
$object_Second = new second_namespace\StringMagic;
$object_Second->split_string_array("hi this is php");

?>
