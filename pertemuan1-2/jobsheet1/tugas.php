<?php
//Pembautan class Dosen
class Dosen
{
    //atribut dari kelas dosen
    public $nama;
    public $nip;
    public $mataKuliah;

    //construct function
    public function __construct($nama, $nip, $mataKuliah)
    {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

    //method tampilkanDosen untuk menampilkan informasi dosen
    public function tampilkanDosen()
    {
        echo "Nama: $this->nama <br>";
        echo "NIP: $this->nip <br>";
        echo "Mata Kuliah: $this->mataKuliah<br>";
    }
}

//instansiasi objek
$budi = new Dosen("Budi", 111111, "Komputer");
$budi->tampilkanDosen();