<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Data Siswa

    <?php
        $koneksi = new PDO("mysql:host=localhost;dbname=subcriber", "root", "");
        $id = $_GET["id"];

        echo $id;

        $query = $koneksi->query("DELETE FROM public WHERE id=$id");
        $data = $query->fetchAll();

        foreach ($data as $data) {
            echo "<p>".$data["nama"]."</p>";
        }
    ?>
</body>
</html>