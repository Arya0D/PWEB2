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
