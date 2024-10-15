<?php
abstract class course
{
    abstract function getCourseDetails();
}

class onlineCourse extends course
{
    public function getCourseDetails()
    {
        echo "pembelajaran dengan metode online";
    }
}
class offlineCourse extends course
{
    public function getCourseDetails()
    {
        echo "pembelajaran dengan metode offline";
    }
}