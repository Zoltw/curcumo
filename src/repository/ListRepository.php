<?php

class ListRepository extends Repository {

    public function addMealToList($id_meal_list, $id_user_list) {
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
    public function getList($id_user_list)
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM meals m1
                INNER JOIN (SELECT id_meal_list
                                FROM public.list m1
                                WHERE id_user_list = :id_user_list) l on m1.id_meal = l.id_meal_list
                INNER JOIN products on m1.products = products.id_products
                INNER JOIN optional_products on m1.optional_products = optional_products.id_optional;
        ');

        $stmt->bindParam(':id_user_list', $id_user_list, PDO::PARAM_INT);
        $stmt->execute();
        $list = [];
        $additionalList = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            for( $i=1; $i<10; $i++) {
                if ($list[$row["product_".$i]]) {
                    $list[$row["product_".$i]]+=$row["amount_".$i];
                }
                else {
                    $list[$row["product_".$i]] = $row["amount_".$i];
                }
            }
            if ($additionalList[$row["product_o_1"]]) {
                $additionalList[$row["product_o_1"]]+=$row["amount_o_1"];
            }
            else {
                $additionalList[$row["product_o_1"]] = $row["amount_o_1"];
            }
        }
        return [$list,  $additionalList];
    }

    public function deleteUserList($id_user_list) {
        $stmt = $this->database->connect()->prepare('
            DELETE FROM list WHERE id_user_list = :id_user_list
        ');
        $stmt->bindParam(':id_user_list', $id_user_list, PDO::PARAM_INT);
        $stmt->execute();
    }
}