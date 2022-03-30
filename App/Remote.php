<?php

include 'Model.php';

interface ResourceActions
{
    public function recruite(Resource $obj):string;
    public function list();
    public function search($n="",$s="",$l="",$c=0);
    public function read($ind);
    public function delete($ind);
}
?>