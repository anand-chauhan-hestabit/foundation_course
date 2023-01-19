<?php

function uppercase(string $param):string{
    $length = strlen($param);
    if($length<2)
    {
        $uppercase = strtoupper($param);
        return $uppercase;
    }
}

function lowercase(string $param):string{
    $lenght = strlen($param);
    if($lenght>=2 && strpos(trim($param),' ')===false)
    {
      $lowercases = strtolower($param);
      return $lowercases;
    }
}
function sentensecase(string $param):string{
    $lenght = strlen($param);
    if($lenght>=2 && strpos(trim($param),' ')>0)
    {
       $sentensecase = ucfirst(strtolower($param));
       return $sentensecase; 
    }
}

function lastcase(string $param):string{
       $lenght = strlen($param);
       if(!uppercase($lenght) || !lowercase($lenght) || !sentensecase($lenght))
       {
        $something = "coudnt not understand";
        return $something;
       }
}

echo uppercase("d");
echo"<br>";
echo lowercase("ADFDFDFDFDfdfdf");
echo"<br>";
echo sentensecase("anand chauhan adamputr");
echo"<br>";
echo lastcase("");


?>