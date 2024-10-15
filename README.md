# PWEB2

## Pertemuan 1-2

### OOP

Penggunaan kelas dan objek adalah inti dari pemrograman berorientasi objek
(OOP). Dalam PHP, kelas digunakan untuk mendefinisikan struktur dan perilaku objek,
sedangkan objek adalah instansiasi dari kelas tersebut. Dengan memanfaatkan kelas
dan objek, kode dapat diorganisir dengan lebih baik, lebih mudah dipelihara, dan dapat
digunakan kembali.

### kelas(Class)

- Struktur atau blueprint yang mendefinisikan atribut dan metode yang dimiliki
  oleh objek.
- Atribut atau properties adalah variabel yang menyimpan data untuk objek.
- Metode adalah fungsi yang ditentukan dalam kelas yang dapat dipanggil oleh
  objek.

### Objek (Object)

- Instansiasi dari kelas.
- Memiliki akses ke atribut dan metode yang didefinisikan dalam kelas.

### Atribut dan Metode

- Atribut: Menyimpan data atau keadaan dari objek.
- Metode: Operasi atau fungsi yang dilakukan oleh objek.

contoh program dengan OOP:

```php
<?php
// Definisi Kelas
class Mobil {
// Atribut atau Properties
public $merk;
public $warna;
// Constructor
public function __construct($merk, $warna) {
$this->merk = $merk;
$this->warna = $warna;
}
// Metode atau Function
public function deskripsi() {
return "Mobil ini adalah $this->merk berwarna $this->warna.";
}
}

// Instansiasi Objek
$mobil1 = new Mobil("Toyota", "Hitam");
echo $mobil1->deskripsi();
?>

```

# JOBSHEET 1

## Instruksi Kerja

### 1.Membuat Class dan Object

```php
//membuat class Mahasiswa
class Mahasiswa
{
    //atribut dari class mahasiswa
    public $nama;
    public $nim;
    public $jurusan;
}
//instansiasi objek
$arya = new Mahasiswa("Arya", 230202154, "Mesin");
```

### 2. Implementasi Constructor

```php
//membuat class Mahasiswa
class Mahasiswa
{
    //atribut dari class mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    //constructor untuk menginisialisasi atribut nama, nim, dan jurusan.
    public function __construct($nama, $nim, $jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

}
//instansiasi objek
$arya = new Mahasiswa("Arya", 230202154, "Mesin");
```

### 3. Membuat Metode Tambahan

```php
//membuat class Mahasiswa
class Mahasiswa
{
    //atribut dari class mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    //constructor untuk menginisialisasi atribut nama, nim, dan jurusan.
    public function __construct($nama, $nim, $jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // method tambahan untuk merubah jurusan
    public function updateJurusan($newJurusan)
    {
        $this->jurusan = $newJurusan;
    }
}
//instansiasi objek
$arya = new Mahasiswa("Arya", 230202154, "Mesin");
```

### 4. Penggunaan Atribut dan Metode

```php
//membuat class Mahasiswa
class Mahasiswa
{
    //atribut dari class mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    //constructor untuk menginisialisasi atribut nama, nim, dan jurusan.
    public function __construct($nama, $nim, $jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // method tambahan untuk merubah jurusan
    public function updateJurusan($newJurusan)
    {
        $this->jurusan = $newJurusan;
    }

    //method setter untuk merubah nim
    public function setNim($nim)
    {
        $this->nim = $nim;
    }

    //method untuk menampilkan data mahasiswa
    public function tampilData()
    {
        echo "Nama: $this->nama<br>";
        echo "Nim: $this->nim<br>";
        echo "Jurusan: $this->jurusan<br>";
    }

}
//instansiasi objek
$arya = new Mahasiswa("Arya", 230202154, "Mesin");
echo "sebelum data dirubah<br>";
$arya->tampilData();

echo "<br>";

echo "seteleah data dirubah<br>";
$arya->updateJurusan("komputer dan Bisinis");
$arya->setNim(230202054);
$arya->tampilData();
```

### HASIL:

<img src='img/instrusi kerja.png'>

## TUGAS

### 1. Implememtsi kelas Dosen dengan atribut nama, nip, mataKuliah

```php
<?php
//Pembuatan class Dosen
class Dosen
{
    //atribut dari kelas dosen
    public $nama;
    public $nip;
    public $mataKuliah;
}
```

### 2. Membuat method tampilkanDosen

```php
<?php
//Pembuatan class Dosen
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
```

### 5. Mengintansiasi objek

```php
<?php
//Pembuatan class Dosen
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

    //instansiasi objek
$budi = new Dosen("Budi", 111111, "Komputer");
$budi->tampilkanDosen();
}
```

### HASIL:

<img src='img/Tugas1.png'>

# JOBSHEET 2

## Instruksi Kerja

### 1. Membuat Class dan Object

```php
<?php
//membuat class mahasiswa
class Mahasiswa
{
    //atribut dari kelas Mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    //constructor
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim= $nim;
        $this->jurusan=$jurusan;
    }

    //method tampilkanData
     public function tampilkanData()
    {
        echo "Nama: $this->nama<br>";
        echo "Nim: $this->nim<br>";
        echo "Jurusan: $this->jurusan<br>";
    }

}
$arya = new Mahasiswa("Arya Dirham Wijaya Kusumah", 230202054, "Komputer dan Bisnis");
$arya->tampiData();
```

### Hasil:

<img src='img/ik1.png'>

### 2. Encapsulation

```php
<?php
//membuat class mahasiswa
class Mahasiswa
{
    //atribut dari kelas Mahasiswa
    private $nama;
    private $nim;
    private $jurusan;

    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim= $nim;
        $this->jurusan=$jurusan;
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



    public function tampilkanData()
    {
        echo "Nama: $this->nama<br>";
        echo "Nim: $this->nim<br>";
        echo "Jurusan: $this->jurusan<br>";
    }
}
//instansiasi objek
$arya = new Mahasiswa("Arya Dirham WIjaya Kusumah",230202050,"mesin");

//demostrasi setter
$arya->setNama("Arya Dirham Wijaya Kusmah");
$arya->setNim(230202054);
$arya->setJurusan("Komputer dan Bisnis");

//demonstrasi getter
echo "Nama:" . $arya->getNama() . "<br>";
echo "nim:" . $arya->getNim() . "<br>";
echo "Jurusan:" . $arya->getJurusan() . "<br>";
```

### Hasil:

<img src='img/ik2.png'>

### 2. Inheritence

```php
class Pengguna
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
}

//instansiasi objek dosen
$budi = new Dosen("Komputer", "budi");
echo "Nama:" . $budi->getNama() . "<br>";
echo "Matkul:" . $budi->getMataKuliah() . "<br>";
```

### Hasil:

<img src='img/ik3.png'>

### 4. Polymorphism

```php
<?php
//membuat class Pengguna
class Pengguna
{
    //membuat method aksesFitur
    public function aksesFitur()
    {
        echo "mengakses fitur";
    }
}

//membuat class Dosen dengan extend class Pengguna
class Dosen extends Pengguna
{
    public function aksesFitur()
    {
        echo "Mengakses fitur input data nilai mahasiswa";
    }
}

//membuat class mahasiswa
class Mahasiswa extends Pengguna
{
    public function aksesFitur()
    {
        echo "Mengakses fitur lihat data nilai mahasiswa";
    }
}

//instansiasi objek dosen
echo "Dosen<br>";
$budi = new Dosen();
$budi->aksesFitur();

echo "<br>";
//instansiasi objek mahasiswa
echo "Mahasiswa<br>";
$arya = new Mahasiswa();
$arya->aksesFitur();
```

<img src='img/ik4.png'>

### 5. Abstraction

```php
<?php
//membuat class Pengguna
abstract class Pengguna
{
    //membuat method aksesFitur
    abstract public function aksesFitur();
}

//membuat class Dosen dengan extend class Pengguna
class Dosen extends Pengguna
{
    public function aksesFitur()
    {
        echo "Mengakses fitur input data nilai mahasiswa";
    }
}

//membuat class mahasiswa
class Mahasiswa extends Pengguna
{
    public function aksesFitur()
    {
        echo "Mengakses fitur lihat data nilai mahasiswa";
    }
}

//instansiasi objek dosen
echo "Dosen<br>";
$budi = new Dosen();
$budi->aksesFitur();

echo "<br>";
//instansiasi objek mahasiswa
echo "Mahasiswa<br>";
$arya = new Mahasiswa();
$arya->aksesFitur();
```

<img src='img/ik4.png'>

# JOBSHEET

## Instruksi Kerja

### 1. Inheritance

```php
<?php

// Kelas Person
class Person
{
    private $name; // Atribut privat untuk menyimpan nama

    // Konstruktor untuk menginisialisasi objek Person dengan nama
    public function __construct($name)
    {
        $this->name = $name; // Mengatur nama objek menggunakan parameter konstruktor
    }

    // Metode untuk mendapatkan nama dari objek Person
    public function getName()
    {
        return $this->name; // Mengembalikan nilai nama
    }
}

// Kelas Student yang merupakan turunan dari kelas Person
class Student extends Person
{
    private $studentId; // Atribut privat untuk studentId

    // Konstruktor untuk menginisialisasi objek Student dengan nama dan ID mahasiswa
    public function __construct($name, $studentId)
    {
        parent::__construct($name); // Memanggil konstruktor kelas induk (Person) untuk mengatur nama
        $this->studentId = $studentId; // Mengatur ID mahasiswa menggunakan parameter konstruktor
    }
}

//instansiasi objek Student
$arya = new Student("Arya", 22);
echo $arya->getNama(); //menampilkan nama student
```

### hasil
