<?php

$conn = new mysqli("localhost","root","","productos");

if ($conn->connect_errno)
{
    echo"no hay conexion: (" $conn-connect_errno . ")" . $conn->connet_error;
}





?>