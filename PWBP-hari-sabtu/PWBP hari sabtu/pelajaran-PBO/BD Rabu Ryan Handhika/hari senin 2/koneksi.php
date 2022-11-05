<?php

$id = $_GET['id'];
$nama = $_GET['nama'];
$email = $_GET['email'];
$alamat = $_GET['alamat'];  


$koneksi = new PDO("mysql:host=localhost;dbname=subcriber", "root", "");
$koneksi->query("INSERT INTO public VALUES ('$id','$email','$nama','$alamat')"); 

?>                     