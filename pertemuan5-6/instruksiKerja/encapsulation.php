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
