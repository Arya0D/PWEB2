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

// Menampilkan nama Teacher
echo $budi->getName();
