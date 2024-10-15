<?php
// Kelas abstrak Person s
abstract class Person
{
    private $nama; // Properti privat untuk menyimpan nama orang

    // Konstruktor untuk menginisialisasi nama saat objek dibuat
    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    // Metode publik untuk mendapatkan nama orang
    public function getNama()
    {
        return $this->nama;
    }

    // Metode abstrak getRole harus diimplementasikan oleh kelas turunan
    abstract function getRole();
}

// Kelas Mahasiswa extends Person dan mewakili seorang mahasiswa
class Mahasiswa extends Person
{
    private $nim;  // Properti privat untuk menyimpan nim
    private $role; // Properti privat untuk menyimpan role

    // Konstruktor menginisialisasi nama dan NIM, serta mengatur role menjadi 'Mahasiswa'
    public function __construct($nama, $nim)
    {
        parent::__construct($nama); // Memanggil konstruktor dari kelas induk (Person)
        $this->nim = $nim;
        $this->role = "Mahasiswa"; // Mengatur role menjadi 'Mahasiswa'
    }

    // Metode publik untuk mendapatkan NIM mahasiswa
    public function getNim()
    {
        return $this->nim;
    }

    // Metode publik untuk mengubah NIM mahasiswa
    public function setNim($nim)
    {
        $this->nim = $nim;
    }

    // Implementasi dari metode abstrak getRole untuk mengembalikan role
    public function getRole()
    {
        return $this->role;
    }
}

// Kelas Dosen extends Person
class Dosen extends Person
{
    //aribut dari kelas dosen
    private $nidn;  // Properti privat untuk menyimpan nidn
    private $role;  // Properti privat untuk menyimpan role

    // Konstruktor menginisialisasi nama dan nidn, serta mengatur role menjadi 'Dosen'
    public function __construct($nama, $nidn)
    {
        parent::__construct($nama); // Memanggil konstruktor dari kelas induk (Person)
        $this->nidn = $nidn;
        $this->role = "Dosen"; // Mengatur role menjadi 'Dosen'
    }

    // Metode publik untuk mendapatkan NIDN dosen
    public function getNidn()
    {
        return $this->nidn;
    }

    // Metode publik untuk mengubah NIDN dosen
    public function setNidn($nidn)
    {
        $this->nidn = $nidn;
    }

    // Implementasi dari metode abstrak getRole untuk mengembalikan role
    public function getRole()
    {
        return $this->role;
    }
}

// Kelas abstrak Jurnal mendefinisikan kerangka untuk jurnal
abstract class Jurnal
{
    // Metode abstrak pengajuanJurnal yang harus diimplementasikan oleh kelas turunan
    abstract function pengajuanJurnal();
}

// Kelas JurnalMahasiswa mengimplementasikan pengajuan jurnal untuk mahasiswa
class JurnalMahasiswa extends Jurnal
{
    public function pengajuanJurnal()
    {
        echo "Pengajuan Jurnal Mahasiswa <br>";
    }
}

// Kelas JurnalDosen mengimplementasikan pengajuan jurnal untuk dosen
class JurnalDosen extends Jurnal
{
    public function pengajuanJurnal()
    {
        echo "Pengajuan Jurnal Dosen <br>";
    }
}


// Membuat objek Mahasiswa
echo "Mahasiswa <br>";
$arya = new Mahasiswa("Arya", 230202054);
echo "Nama:" . $arya->getNama() . "<br>";
echo "Nim:" . $arya->getNim() . "<br>";
echo "Role:" . $arya->getRole() . "<br>";


echo "<br>";

// Membuat objek Dosen
echo "Dosen <br>";
$budi = new Dosen("budi", 22222222);
echo "Nama:" . $budi->getNama() . "<br>";
echo "Nim:" . $budi->getNidn() . "<br>";
echo "Role:" . $budi->getRole() . "<br>";


echo "<br>";

// Membuat dan menampilkan pengajuan jurnal mahasiswa
$jurnalM = new JurnalMahasiswa();
$jurnalM->pengajuanJurnal();

// Membuat dan menampilkan pengajuan jurnal dosen
$jurnalD = new JurnalDosen();
$jurnalD->pengajuanJurnal();
