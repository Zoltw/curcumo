<?php

class Meal {

    private string $name;
    private string $type;
    private string $goal;
    private string $time;
    private string $level_diff;
    private string $description;
    private string $products;
    private string $optional_products;
    private string $image;

    public function __construct(
        string $name,
        string $type,
        string $goal,
        string $time,
        string $level_diff,
        string $description,
        string $products,
        string $optional_products,
        string $image
        ) {

        $this->name = $name;
        $this->type = $type;
        $this->goal = $goal;
        $this->time = $time;
        $this->level_diff = $level_diff;
        $this->description = $description;
        $this->products = $products;
        $this->optional_products = $optional_products;
        $this->image = $image;
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

    public function getDescription(): string {
        return $this->description;
    }

    public function setDescription(string $description) {
        $this->description = $description;
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

    public function getImage(string $image) {
        return $this->image;
    }

    public function setImage(string $image) {
        $this->image = $image;
    }

}