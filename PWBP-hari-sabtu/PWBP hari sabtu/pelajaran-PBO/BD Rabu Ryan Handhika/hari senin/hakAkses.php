<?php
echo "<h1>Pembrograman Berbasis Objek</h1>";
class siswa {
    function tampilDataSiswa() {
        echo "ini Data siswa";
    }
}
$siswa1 = new siswa();
$siswa1->tampilDataSiswa();

