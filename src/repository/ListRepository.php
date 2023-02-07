<?php

class ListRepository extends Repository{

    public function addMealToList($id_meal_list, $id_user_list) {
        echo $id_user_list;
        $stmt = $this->database->connect()->prepare('
            INSERT INTO list (id_user_list, id_meal_list)
            VALUES (:id_user_list, :id_meal_list)
        ');
        $stmt->bindParam(':id_user_list', $id_user_list, PDO::PARAM_INT);
        $stmt->bindParam(':id_meal_list', $id_meal_list, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function getNumberOfMeals($id_user_list) {
        $stmt = $this->database->connect()->prepare('
            SELECT COUNT(*) FROM list WHERE id_user_list = :id_user_list
        ');
        $stmt->bindParam(':id_user_list', $id_user_list, PDO::PARAM_INT);
        $stmt->execute();
        $number = $stmt->fetch(PDO::FETCH_ASSOC);
        return $number['count'];
    }

}