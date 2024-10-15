<?php

class Mahasiswa
{
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($nama, $nim, $jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function updateJurusan($newJurusan)
    {
        $this->jurusan = $newJurusan;
    }

    public function setNim($nim)
    {
        $this->nim = $nim;
    }

    public function tampilData()
    {
        echo "Nama: $this->nama<br>";
        echo "Nim: $this->nim<br>";
        echo "Jurusan: $this->jurusan<br>";
    }


}

$arya = new Mahasiswa("Arya", 230202154, "Mesin");
echo "sebelum data dirubah<br>";
$arya->tampilData();

echo "<br>";

echo "seteleah data dirubah<br>";
$arya->updateJurusan("komputer dan Bisinis");
$arya->setNim(230202054);
$arya->tampilData();