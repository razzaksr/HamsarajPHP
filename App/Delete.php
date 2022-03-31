<?php
include 'Controller.php';
include 'UI.php';
$who = $_GET['data'];

$m=new Manage();
$m->delete($who);

echo "<h1>". $who ." has fired</h1>";

?>