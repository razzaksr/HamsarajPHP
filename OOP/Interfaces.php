<?php

interface Hai
{
    //public $cosmic;
    public function hello();// abstract
}

class Delta implements Hai
{
    // polymorphism: overriding : same name same parameters in two blocks
    public function hello()
    {
        echo "Hai interface function";
    }
}

$h=new Delta();
$h->hello();

?>