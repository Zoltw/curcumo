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

}