<?php

class Person
{
    private $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}


class Teacher extends Person
{
    private $teacherId;

    public function __construct($name, $teacherId)
    {
        parent::__construct($name);
        $this->teacherId = $teacherId;
    }

    public function getName()
    {
        return parent::getName();
    }

}