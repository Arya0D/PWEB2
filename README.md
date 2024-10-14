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

## HASIL:

<img src='img/instrusi kerja.png'>

# TUGAS

## 1.
