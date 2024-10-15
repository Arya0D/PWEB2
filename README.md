# PWEB2

### OOP

OOP (Object-Oriented Programming) adalah paradigma pemrograman yang berfokus pada konsep objek, yang dapat menyimpan data (dalam bentuk atribut atau properti) dan fungsi (dalam bentuk metode). Tujuan OOP adalah untuk memodelkan dunia nyata dalam kode dengan cara yang lebih intuitif dan terstruktur.

### kelas(Class)

Template atau blueprint untuk membuat objek. Kelas mendefinisikan atribut dan metode yang dimiliki oleh objek.

- Struktur atau blueprint yang mendefinisikan atribut dan metode yang dimiliki
  oleh objek.
- Atribut atau properties adalah variabel yang menyimpan data untuk objek.
- Metode adalah fungsi yang ditentukan dalam kelas yang dapat dipanggil oleh
  objek.

### Objek (Object)

Instansi dari kelas. Objek adalah representasi nyata dari sebuah kelas, yang berisi data dan bisa melakukan tindakan melalui metode yang didefinisikan dalam kelas.

### Atribut

atribut adalah variabel atau data yang dimiliki oleh sebuah objek. Atribut menyimpan informasi atau keadaan (state) dari objek tersebut. Atribut biasanya didefinisikan di dalam kelas dan diakses melalui objek yang merupakan instansi dari kelas tersebut.

### Metode (Method)

method adalah fungsi yang didefinisikan di dalam sebuah kelas dan bisa dijalankan oleh objek dari kelas tersebut. Method digunakan untuk mendefinisikan perilaku atau tindakan yang dapat dilakukan oleh objek. Sebagai bagian dari objek, method dapat mengakses dan memanipulasi atribut yang ada dalam kelas.

### Enkapsulasi (Encapsulation)

Konsep yang menyembunyikan detail internal dari suatu objek dan hanya menyediakan antarmuka untuk berinteraksi dengannya. Hal ini dilakukan untuk menjaga keamanan data dan menghindari perubahan langsung dari luar.

### Pewarisan (Inheritance)

Mekanisme di mana suatu kelas dapat mewarisi atribut dan metode dari kelas lain. Hal ini memungkinkan penggunaan kembali kode dan memperluas fungsionalitas kelas.

### Enkapsulasi (Encapsulation)

Konsep yang menyembunyikan detail internal dari suatu objek dan hanya menyediakan antarmuka untuk berinteraksi dengannya. Hal ini dilakukan untuk menjaga keamanan data dan menghindari perubahan langsung dari luar.

### Abstraksi (Abstraction)

Proses menyederhanakan kompleksitas dengan hanya menampilkan fitur penting dari suatu objek, sembari menyembunyikan detail yang tidak relevan.

### Polimorfisme (Polymorphism)

Kemampuan objek untuk merespons metode yang sama dengan cara yang berbeda, tergantung pada kelas yang diinstansiasi. Ini sering diterapkan dengan metode yang memiliki nama yang sama tetapi berperilaku berbeda di kelas turunan.

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

# JOBSHEET 3

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

### hasil:

<img src="img/ik1-2.png">

### 2. Polymorphism

```php
<?php

// Kelas Person yang mendefinisikan atribut dan metode dasar untuk sebuah orang
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

// Kelas Teacher yang merupakan turunan dari kelas Person
class Teacher extends Person
{
    private $teacherId; // Atribut privat untuk menyimpan ID guru

    // Konstruktor untuk menginisialisasi objek Teacher dengan nama dan ID guru
    public function __construct($name, $teacherId)
    {
        parent::__construct($name); // Memanggil konstruktor kelas induk (Person) untuk mengatur nama
        $this->teacherId = $teacherId; // Mengatur ID guru menggunakan parameter konstruktor
    }

    // Mengoverride metode getName() untuk menambahkan prefiks "Nama:"
    public function getName()
    {
        return "Nama: " . parent::getName(); // Mengembalikan nama dengan prefiks "Nama:"
    }
}

// Instansiasi objek Teacher
$budi = new Teacher("Budi", 123);

// Memanggil metode getName() untuk mendapatkan nama guru
echo $budi->getName(); // Menampilkan "Nama: Budi"

```

### Hasil:

<img src="img/ik2-2.png">

### 3. Encapsulation

```php
<?php
// Kelas Student yang mendefinisikan atribut studentId dan name
class Student
{
    private $studentId; // Atribut privat untuk menyimpan ID mahasiswa
    private $name; // Atribut privat untuk menyimpan nama mahasiswa

    // Konstruktor untuk menginisialisasi objek Student dengan nama dan ID mahasiswa
    public function __construct($name, $studentId)
    {
        $this->name = $name; // Mengatur nama mahasiswa
        $this->studentId = $studentId; // Mengatur ID mahasiswa
    }

    // Metode untuk mendapatkan nilai dari atribut tertentu secara dinamis
    public function get($atribut)
    {
        return $this->$atribut; // Mengembalikan nilai atribut yang diberikan sebagai parameter
    }

    // Metode untuk mengatur nilai atribut tertentu secara dinamis
    public function set($atribut, $setAtribut)
    {
        $this->$atribut = $setAtribut; // Mengubah nilai atribut dengan nilai baru
    }
}

// Instansiasi objek Student dengan nama "arya" dan ID mahasiswa 2222222
$arya = new Student("arya", 2222222);

// Menampilkan nama dan ID mahasiswa
echo "Nama: " . $arya->get("name") . "<br>"; // Mengambil dan menampilkan atribut "name"
echo "nim: " . $arya->get("studentId") . "<br>"; // Mengambil dan menampilkan atribut "studentId"

// Mengubah nama mahasiswa menjadi "nale"
$arya->set("name", "nale");

// Setelah nama diubah
echo "Setelah nama dirubah:<br>";
echo "Nama: " . $arya->get("name"); // Menampilkan nama setelah perubahan

```

### Hasil:

<img src="img/ik3-2.png">

### 4. Abstraction

```php
<?php
// Kelas abstrak course yang mendefinisikan metode abstrak getCourseDetails
abstract class course
{
    // Metode abstrak yang harus diimplementasikan oleh kelas turunan
    abstract function getCourseDetails();
}

// Kelas onlineCourse yang merupakan turunan dari kelas course
class onlineCourse extends course
{
    // Mengimplementasikan metode getCourseDetails untuk memberikan detail kursus online
    public function getCourseDetails()
    {
        echo "pembelajaran dengan metode online<br>"; // Menampilkan pesan untuk pembelajaran online
    }
}

// Kelas offlineCourse yang merupakan turunan dari kelas course
class offlineCourse extends course
{
    // Mengimplementasikan metode getCourseDetails untuk memberikan detail kursus offline
    public function getCourseDetails()
    {
        echo "pembelajaran dengan metode offline<br>"; // Menampilkan pesan untuk pembelajaran offline
    }
}

// Instansiasi objek dari kelas onlineCourse
$belajarPhp = new onlineCourse();
$belajarPhp->getCourseDetails(); // Memanggil metode getCourseDetails() dari onlineCourse
echo "<br>";

// Instansiasi objek dari kelas offlineCourse
$belajarCss = new offlineCourse();
$belajarCss->getCourseDetails(); // Memanggil metode getCourseDetails() dari offlineCourse

```

### Hasil:

<img src='img/ik4-2.png'>

## Tugas

```php
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

```

<img src='img/ik5-2.png'>
