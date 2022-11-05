<?php
class siswa {
    public $nama = "Muhammad Ryan Handhika Susanto";
    public $kelas = "XI";
    protected $jurusan = "PPLG";
    private $nis = "543210";
    function tampilDataSiswa() {
        echo "Nama : $this->nama <br>";
        echo "Kelas : $this->kelas <br>";
        echo "Jurusan : $this->jurusan <br>";
        echo "Nis : $this->nis <br>";
    }
}

class pplg extends siswa {

}

$siswa1 = new siswa();
$siswa1->tampilDataSiswa();
?>