<?php

class MealRepository extends Repository {

        public function getAllMealFromDatabase($id_meal): ?Meal {
            $stmt = $this->database->connect()->prepare('
                SELECT * FROM public.meals WHERE id_meal = :id_meal
            ');
            $stmt->bindParam(':id_meal', $id_meal, PDO::PARAM_STR);
            $stmt->execute();

            $meal = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$meal) {
                return null;
            }

            return new Meal(
                $meal['id_meal'],
                $meal['name'],
                $meal['type'],
                $meal['goal'],
                $meal['time'],
                $meal['level_diff'],
                $meal['description'],
                $meal['products'],
                $meal['optional_products'],
                $meal['image'],
            );
        }


}