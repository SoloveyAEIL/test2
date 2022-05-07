<?php

// класс для проверки формы

class Checker
{

    // проверка числа, заданного в @gender
    public static function checkGender($gender)
    {

        if (( $gender >= 0) AND ( $gender < 2 )) {
            return true;
        } 
        return false;
    }


    // проверка длины имени, не меньше двух букв
    public static function checkName($name)
    {

        if (strlen($name) >= 2) {
            return true;
        }
        return false;
    }

    // проверка длины фамилии, не меньше двух букв
    public static function checkLastName($lastName)
    {

        if (strlen($lastName) >= 2) {
            return true;
        }
        return false;
    }

    // проверка длины текста, не меньше трех букв
    public static function checkCity($city)
    {

        if (strlen($city) >= 3) {
            return true;
        }
        return false;
    }
}