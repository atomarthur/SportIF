<?php

function conectar()
{
    $conn = new PDO ("mysql:dbname=sportif;host=localhost:3306","root","arthur");
    return $conn;
}
 ?>
