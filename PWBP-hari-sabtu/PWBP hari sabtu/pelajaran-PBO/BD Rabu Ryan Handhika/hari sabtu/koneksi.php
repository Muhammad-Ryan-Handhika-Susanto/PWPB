<?php
// Koneksi simpel
// $conn = mysqli_connect("localhost", "root", "", "bebasaja");
// if (!$conn) {
//   die("Koneksi Gagal");
// }
// echo "Koneksi Berhasil";

// PDO -> PHP DATA OBJECT

// instansiasi class
$koneksi = new PDO("mysql:host=localhost;dbname=bebasaja", "root", "");
// $koneksi->query("INSERT INTO siswa VALUES ('6','cobaBelajarBackEnd')");
// $koneksi->query("DELETE FROM siswa WHERE id=6");
// $koneksi->query("UPDATE siswa SET nama='kerbau' WHERE id=2");

// query
$query = $koneksi->query("SELECT * FROM siswa");

// ambil / masukan data kedalam variabel
$data = $query->fetchAll(); // array

// var_dump($data);

// mengulang untuk menampilkan data
// foreach ($data as $data){
//     echo $data['nama'] . "</br>";
// }

// mengecek database berhasil terkoneksi atau tidak
// if ($koneksi) {
//     echo "Database berhasil terkoneksi";
// } else {
//     echo "Database gagal terkoneksi";
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data siswa</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
        </tr>
        <?php foreach($data as $data) : ?>
        <?php $i = 1 ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $data['nama'] ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>