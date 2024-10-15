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
echo $arya->getName(); //menampilkan nama student
