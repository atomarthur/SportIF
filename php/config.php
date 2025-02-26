<?php

function conectar()
{
    $conn = new PDO ("mysql:dbname=sportif;host=localhost","root","aluno");
    return $conn;
}
 ?>
