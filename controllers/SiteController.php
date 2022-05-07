<?php

class SiteController
{

    // для главной страницы
    public function actionIndex()
    {

        // список людей
        $userList = array();
        $userList = UserAll::getUsers();

        // подключаем вид
        require_once(ROOT.'/views/site/index.php');
        return true;
    }

    // вывод по ID
    public function actionView($id)
    {

        $userId = UserAll::getUserById($id);

        require_once(ROOT.'/views/site/view.php');     
        return true;
    }

    // редактирование по ID
    public function actionEdit($id)
    {

        $userId = UserAll::getUserById($id);

        $name = $userId['name'];
        $lastName = $userId['lastName'];
        $date = $userId['date'];
        $gender = $userId['gender'];
        $city = $userId['city'];
            $result = false;

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $lastName = $_POST['lastName'];
            $date = $_POST['date'];
            $gender = $_POST['gender'];
            $city = $_POST['city'];

            $errors = false;

            if (!Checker::checkGender($gender)) {
                $errors[] = 'Поле не соответствует правилам';
            }
            if (!Checker::checkName($name)) {
                $errors[] = 'Имя не должно быть менее 2-ух символов';
            }
            if (!Checker::checkLastName($lastName)) {
                $errors[] = 'Фамилия не должна быть короче 2-ух символов';
            }
            if (!Checker::checkCity($city)) {
                $errors[] = 'Город должен состоять не менее чем из 3-ех символом';
            }
            if ($errors = false) {
                $result = UserAll::edit($id, $name, $lastName, $date, $gender, $city);
            }
        }

        require_once(ROOT.'/views/site/edit.php');     
        return true;
    }

}