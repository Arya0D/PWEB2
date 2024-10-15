<?php
class Student
{
    private $studentId;
    private $name;
    public function __construct($name, $studentId)
    {
        $this->name = $name;
        $this->studentId = $studentId;
    }

    public function get($atribut)
    {
        return $this->$atribut;
    }

    public function set($atribut, $setAtribut)
    {
        $this->$atribut = $setAtribut;
    }
}

$arya = new Student("arya", 2222222);

echo $arya->get("name");
echo $arya->get("studentId");
$arya->set("name", "nale");

echo $arya->get("name");

