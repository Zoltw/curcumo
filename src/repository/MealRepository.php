<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Meal.php';
require_once __DIR__.'/../models/Products.php';
require_once __DIR__.'/../models/OptionalProducts.php';

class MealRepository extends Repository {

        public function getMealFromDatabase($id_meal): array {
            $stmt = $this->database->connect()->prepare('
                SELECT * 
                    FROM public.meals m1
                        INNER JOIN products on m1.products = products.id_products
                        INNER JOIN optional_products on m1.optional_products = optional_products.id_optional
                        WHERE id_meal = :id_meal
            ');
            $stmt->bindParam(':id_meal', $id_meal, PDO::PARAM_INT);
            $stmt->execute();

            $meal = $stmt->fetch(PDO::FETCH_ASSOC);
            $product = new Products(
                $meal['id_products'],
                $meal['product_1'],
                $meal['amount_1'],
                $meal['unit_1'],
                $meal['product_2'],
                $meal['amount_2'],
                $meal['unit_2'],
                $meal['product_3'],
                $meal['amount_3'],
                $meal['unit_3'],
                $meal['product_4'],
                $meal['amount_4'],
                $meal['unit_4'],
                $meal['product_5'],
                $meal['amount_5'],
                $meal['unit_5'],
                $meal['product_6'],
                $meal['amount_6'],
                $meal['unit_6'],
                $meal['product_7'],
                $meal['amount_7'],
                $meal['unit_7'],
                $meal['product_8'],
                $meal['amount_8'],
                $meal['unit_8'],
                $meal['product_9'],
                $meal['amount_9'],
                $meal['unit_9'],
                $meal['product_10'],
                $meal['amount_10'],
                $meal['unit_10']
            );

            $optionals = new OptionalProducts(
                $meal['id_optional'],
                $meal['product_o_1'],
                $meal['amount_o_1'],
                $meal['unit_o_1']
            );


            if (!$meal) {
                return [];
            }

            return  [ new Meal(
                $meal['id_meal'],
                $meal['name'],
                $meal['type'],
                $meal['goal'],
                $meal['time'],
                $meal['level_diff'],
                $meal['products'],
                $meal['optional_products'],
                $meal['image'],
                $meal['description_1'],
                $meal['description_2'],
                $meal['description_3'],
                $meal['description_4'],
                $meal['description_5']
            ), $product, $optionals];
        }

        public function getAllMeals(): array {
            $result = [];
            $stmt = $this->database->connect()->prepare('
                SELECT * FROM meals ORDER BY id_meal
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
                    $meal['products'],
                    $meal['optional_products'],
                    $meal['image']
                );
            }
            return $result;
        }

}