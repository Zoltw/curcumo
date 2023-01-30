<?php

class Meal {

    private int $id_meal;
    private string $name;
    private string $type;
    private string $goal;
    private string $time;
    private string $level_diff;
    private string $products;
    private string $optional_products;
    private string $image;
    private string $description_1;
    private string $description_2;
    private string $description_3;
    private string $description_4;
    private string $description_5;

    public function __construct(
        int $id_meal = null,
        string $name = null,
        string $type = null,
        string $goal = null,
        string $time = null,
        string $level_diff = null,
        string $products = "",
        string $optional_products = "",
        string $image = "",
        string $description_1 = "",
        string $description_2 = "",
        string $description_3 = "",
        string $description_4 = "",
        string $description_5 = ""
        ) {

        $this->id_meal = $id_meal;
        $this->name = $name;
        $this->type = $type;
        $this->goal = $goal;
        $this->time = $time;
        $this->level_diff = $level_diff;
        $this->products = $products;
        $this->optional_products = $optional_products;
        $this->image = $image;
        $this->description_1 = $description_1;
        $this->description_2 = $description_2;
        $this->description_3 = $description_3;
        $this->description_4 = $description_4;
        $this->description_5 = $description_5;
    }

    public function getId_meal(): int {
        return $this->id_meal;
    }

    public function setId_meal(int $id_meal) {
        $this->id_meal = $id_meal;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function getType(): string {
        return $this->type;
    }

    public function setType(string $type) {
        $this->type = $type;
    }

    public function getGoal(): string {
        return $this->goal;
    }

    public function setGoal(string $goal) {
        $this->goal = $goal;
    }

    public function getTime(): string {
        return $this->time;
    }

    public function setTime(string $time) {
        $this->time = $time;
    }

    public function getLevel_diff(): string {
        return $this->level_diff;
    }

    public function setLevel_diff(string $level_diff) {
        $this->level_diff = $level_diff;
    }

    public function getProducts(): string {
        return $this->products;
    }

    public function setProducts(string $products) {
        $this->products = $products;
    }

    public function getOptional_products(): string {
        return $this->optional_products;
    }

    public function setOptional_products(string $optional_products) {
        $this->optional_products = $optional_products;
    }

    public function getImage(): string {
        return $this->image;
    }

    public function setImage(string $image) {
        $this->image = $image;
    }

    public function getDescription_1(): string {
        return $this->description_1;
    }

    public function setDescription_1(string $description_1) {
        $this->description_1 = $description_1;
    }

    public function getDescription_2(): string {
        return $this->description_2;
    }

    public function setDescription_2(string $description_2) {
        $this->description_2 = $description_2;
    }

    public function getDescription_3(): string {
        return $this->description_3;
    }

    public function setDescription_3(string $description_3) {
        $this->description_3 = $description_3;
    }

    public function getDescription_4(): string {
        return $this->description_4;
    }

    public function setDescription_4(string $description_4) {
        $this->description_4 = $description_4;
    }

    public function getDescription_5(): string {
        return $this->description_5;
    }

    public function setDescription_5(string $description_5) {
        $this->description_5 = $description_5;
    }

}