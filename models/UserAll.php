<?php

// модель для работы с людьми
class UserAll
{

    // функц. для отображ всего списка
    public static function getUsers()
    {

        $db = Db::getConnection();
        $sql = 'SELECT id, name, lastName, date, gender, city FROM user1';

        $result = $db->prepare($sql);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение команды
        $result->execute();

        // получение и возврат результатов (продукт)
        $i = 0;
        $userList = array();
        while ($row = $result->fetch()) {
            $userList[$i]['id'] = $row['id'];
            $userList[$i]['name'] = $row['name'];
            $userList[$i]['lastName'] = $row['lastName'];
            $userList[$i]['date'] = $row['date'];
            $userList[$i]['gender'] = $row['gender'];
            $userList[$i]['city'] = $row['city'];
            $i++;
        }
        return $userList;
    }

    // вывод человека по ID
    public static function getUserById($id)
    {

        $db = Db::getConnection();
        $sql = 'SELECT * FROM user1 WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetch();
    }

    public static function edit($id, $name, $lastName, $date, $gender, $city)
    {

        $db = Db::getConnection();
        $sql = "UPDATE user1 
                    SET 
                        name = :name, 
                        lastName = :lastName, 
                        date = :date, 
                        gender = :gender, 
                        city = :city 
                    WHERE id = :id";
        
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':lastName', $lastName, PDO::PARAM_STR);
        $result->bindParam(':date', $date, PDO::PARAM_INT);
        $result->bindParam(':gender', $gender, PDO::PARAM_INT);
        $result->bindParam(':city', $city, PDO::PARAM_STR);

        return $result->execute();
    }
}