<?php

class MealRepository extends Repository {

        public function getMeal($id): ?Meal {
            $stmt = $this->database->connect()->prepare('
                SELECT * FROM public.meals WHERE id = :id
            ');
            $stmt->bindParam(':id', $id, PDO::PARAM_STR);
            $stmt->execute();

            $meal = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$meal) {
                return null;
            }

            return new Meal(
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