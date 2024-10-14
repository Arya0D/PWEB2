<?php
//definisi kelas
class Mobil
{
    //atribut atau properties
    public $merk;
    public $warna;

    //constructor
    public function __construct($merk, $warna)
    {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    //method
    public function deskripsi()
    {
        return "Mobil ini adalah $this->merk berwana $this->warna";
    }
}

//instansiasi objek
$mobil = new Mobil("Toyota", "Hitam");
echo $mobil->deskripsi();
