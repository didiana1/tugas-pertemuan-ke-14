<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "DIANA";

$conn = mysqli_connect($host,$user,$pass,$db);

if ($conn == false)
{
echo "Koneksi ke server gagal.";
die();
}

?>