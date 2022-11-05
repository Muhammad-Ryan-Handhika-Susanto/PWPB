<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <style>
        body {
            background-color: cyan;
        }
        h1 {
            text-align: center;
        }
        div {
            background: white;
            width: 20rem;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
        }
        .dek {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            position: absolute;
        }
    </style>
</head>
<body>
    <h1>FORM LOGIN</h1>
    <center>
    <div>
    <form method="GET" action="koneksi.php">
    <input type="number" name="id" id="" placeholder="id">
    <br><br>
    <input type="text" name="nama" id="" placeholder="nama">
    <br><br>
    <input type="email" name="email" id="" placeholder="email">
    <br><br>
    <input type="text" name="alamat" id="" placeholder="alamat">
    <br><br>
    <input type="submit" value="Simpan">
    </form>
    </div>
    </center>
    <div class="dek"></div>
</body>
</html>