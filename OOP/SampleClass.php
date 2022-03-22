<?php
    class Hai
    {
        public $alpha,$beta;
        public function hello()
        {
            return $this->alpha*$this->beta;
        }
    }

    $h=new Hai();// object creation
    $h->alpha=20;$h->beta=90;
    echo $h->hello()."<br/>";

    $v=new Hai();
    $v->alpha=12;$v->beta=88;
    echo $v->hello();
?>