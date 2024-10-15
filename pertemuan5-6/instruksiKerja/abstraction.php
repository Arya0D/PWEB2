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
