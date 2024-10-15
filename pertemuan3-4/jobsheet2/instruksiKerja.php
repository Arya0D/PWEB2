<?php
//membuat class Pengguna
abstract class Pengguna
{
    //atribut kelas pengguna
    private $nama;
    //constructer method
    public function __construct($nama)
    {
        $this->nama = $nama;
    }
    //method getNama untuk mendapatkan atribut nama
    public function getNama()
    {
        return $this->nama;
    }

    //membuat method aksesFitur
    abstract public function aksesFitur();
}

//membuat class Dosen dengan extend class Pengguna
class Dosen extends Pengguna
{
    //atribut Dosen
    private $mataKuliah;
    //constructer method
    public function __construct($mataKuliah, $nama)
    {
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }
    //method getNama untuk mendapatkan atribut mataKuliah
    public function getMataKuliah()
    {
        return $this->mataKuliah;
    }

    //method aksesFitur
    public function aksesFitur()
    {
        echo "Mengakses fitur input data nilai mahasiswa";
    }
}

//membuat class mahasiswa
class Mahasiswa extends Pengguna
{
    //atribut dari kelas Mahasiswa
    private $nama;
    private $nim;
    private $jurusan;

    public function __construct($nama, $nim, $jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //membuat setter method menetapkan data atribut
    public function setNama($nama)
    {
        $this->nama = $nama;
    }
    public function setNim($nim)
    {
        $this->nim = $nim;
    }
    public function setJurusan($jurusan)
    {
        $this->jurusan = $jurusan;
    }

    //membuat getter method untuk mendapatkan atribut
    public function getNama()
    {
        return $this->nama;
    }
    public function getNim()
    {
        return $this->nim;
    }
    public function getJurusan()
    {
        return $this->jurusan;
    }

    //method tampilkanData
    public function tampilkanData()
    {
        echo "Nama: $this->nama<br>";
        echo "Nim: $this->nim<br>";
        echo "Jurusan: $this->jurusan<br>";
    }

    //method aksesFitur
    public function aksesFitur()
    {
        echo "Mengakses fitur lihat data nilai mahasiswa";
    }
}

//instansiasi objek dosen
echo "Dosen<br>";
$budi = new Dosen("Komputer", "budi");
$budi->aksesFitur();

echo "<br>";
//instansiasi objek mahasiswa
echo "Mahasiswa<br>";
$arya = new Mahasiswa("Arya", 230202054, "Komputer dan Bisnis");
$arya->aksesFitur();