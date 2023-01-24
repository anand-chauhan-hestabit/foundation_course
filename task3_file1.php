<?php

namespace first_namespace;

class StringMagic
{
    public function reverse_the_String(String $user_string)
    {
        $result = strrev($user_string);
        echo "Reverse String of $user_string"."   :";
        echo $result;

    }
}

?>
