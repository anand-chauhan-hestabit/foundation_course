<?php

namespace second_namespace;

class StringMagic
{
    public function split_string_array(String $user_string)
    {
        echo"split the string into an array of $user_string"." :";
        print_r(explode(" ",$user_string));
      
    }
  
    }

?>
