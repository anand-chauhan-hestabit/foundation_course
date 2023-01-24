<?php

function upperCase(string $param):string
{
    $length = strlen($param);
    if ($length<2) {
        $uppercase = strtoupper($param);
        return $uppercase;
    }
} 

function lowerCase(string $param):string 
{
    $lenght = strlen($param);
    if ($lenght>=2 && strpos(trim($param),' ')===false) {
       $lowercases = strtolower($param);
       return $lowercases;
    }
}

function sentenseCase(string $param):string
{
    $lenght = strlen($param);
    if ($lenght>=2 && strpos(trim($param),' ')>0) {
       $sentensecase = ucfirst(strtolower($param));
       return $sentensecase; 
    }
}

function lastCase(string $param):string 
{
       $lenght = strlen($param);
       if (!uppercase($lenght) || !lowercase($lenght) || !sentensecase($lenght)) {
        $something = "coudnt not understand";
        return $something;
       }
}

echo upperCase("d");
echo "<br>";
echo lowerCase("ADFDFDFDFDfdfdf");
echo "<br>";
echo sentenseCase("anand chauhan adamputr");
echo "<br>";
echo lastCase("");

?>
