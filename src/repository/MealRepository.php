<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Meal.php';

class MealRepository extends Repository {

        public function getMealFromDatabase($id_meal): ?Meal {
            $stmt = $this->database->connect()->prepare('
                SELECT * FROM public.meals WHERE id_meal = :id_meal
            ');
            $stmt->bindParam(':id_meal', $id_meal, PDO::PARAM_INT);
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
                $meal['image']
            );
        }

        public function getAllMeals(): array {
            $result = [];
            $stmt = $this->database->connect()->prepare('
                SELECT * FROM meals
            ');
            $stmt->execute();
            $meals = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($meals as $meal) {
                $result[] = new Meal(
                    $meal['id_meal'],
                    $meal['name'],
                    $meal['type'],
                    $meal['goal'],
                    $meal['time'],
                    $meal['level_diff'],
                    "",
                    "",
                    $meal['image']
                );
            }
            return $result;
        }
}