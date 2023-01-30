<?php

class Products {

    private int $id_products;
    private string $product_1;
    private string $amount_1;
    private string $unit_1;
    private string $product_2;
    private string $amount_2;
    private string $unit_2;
    private string $product_3;
    private string $amount_3;
    private string $unit_3;
    private string $product_4;
    private string $amount_4;
    private string $unit_4;
    private string $product_5;
    private string $amount_5;
    private string $unit_5;
    private string $product_6;
    private string $amount_6;
    private string $unit_6;
    private string $product_7;
    private string $amount_7;
    private string $unit_7;
    private string $product_8;
    private string $amount_8;
    private string $unit_8;
    private string $product_9;
    private string $amount_9;
    private string $unit_9;
    private string $product_10;
    private string $amount_10;
    private string $unit_10;

    public function __construct(
        int $id_products = null,
        string $product_1 = null,
        string $amount_1 = null,
        string $unit_1 = null,
        string $product_2 = null,
        string $amount_2 = null,
        string $unit_2 = null,
        string $product_3 = null,
        string $amount_3 = null,
        string $unit_3 = null,
        string $product_4 = null,
        string $amount_4 = null,
        string $unit_4 = null,
        string $product_5 = null,
        string $amount_5 = null,
        string $unit_5 = null,
        string $product_6 = null,
        string $amount_6 = null,
        string $unit_6 = null,
        string $product_7 = null,
        string $amount_7 = null,
        string $unit_7 = null,
        string $product_8 = null,
        string $amount_8 = null,
        string $unit_8 = null,
        string $product_9 = null,
        string $amount_9 = null,
        string $unit_9 = null,
        string $product_10 = null,
        string $amount_10 = null,
        string $unit_10 = null
        ) {

        $this->id_products = $id_products;
        $this->product_1 = $product_1;
        $this->amount_1 = $amount_1;
        $this->unit_1 = $unit_1;
        $this->product_2 = $product_2;
        $this->amount_2 = $amount_2;
        $this->unit_2 = $unit_2;
        $this->product_3 = $product_3;
        $this->amount_3 = $amount_3;
        $this->unit_3 = $unit_3;
        $this->product_4 = $product_4;
        $this->amount_4 = $amount_4;
        $this->unit_4 = $unit_4;
        $this->product_5 = $product_5;
        $this->amount_5 = $amount_5;
        $this->unit_5 = $unit_5;
        $this->product_6 = $product_6;
        $this->amount_6 = $amount_6;
        $this->unit_6 = $unit_6;
        $this->product_7 = $product_7;
        $this->amount_7 = $amount_7;
        $this->unit_7 = $unit_7;
        $this->product_8 = $product_8;
        $this->amount_8 = $amount_8;
        $this->unit_8 = $unit_8;
        $this->product_9 = $product_9;
        $this->amount_9 = $amount_9;
        $this->unit_9 = $unit_9;
        $this->product_10 = $product_10;
        $this->amount_10 = $amount_10;
        $this->unit_10 = $unit_10;
    }

    public function getIdProducts(): int {
        return $this->id_products;
    }

    public function getProduct1(): string {
        return $this->product_1;
    }

    public function setProduct1(string $product_1) {
        $this->product_1 = $product_1;
    }

    public function getAmount1(): string {
        return $this->amount_1;
    }

    public function setAmount1(string $amount_1) {
        $this->amount_1 = $amount_1;
    }

    public function getUnit1(): string {
        return $this->unit_1;
    }

    public function setUnit1(string $unit_1) {
        $this->unit_1 = $unit_1;
    }

    public function getProduct2(): string {
        return $this->product_2;
    }

    public function setProduct2(string $product_2) {
        $this->product_2 = $product_2;
    }

    public function getAmount2(): string {
        return $this->amount_2;
    }

    public function setAmount2(string $amount_2) {
        $this->amount_2 = $amount_2;
    }

    public function getUnit2(): string {
        return $this->unit_2;
    }

    public function setUnit2(string $unit_2) {
        $this->unit_2 = $unit_2;
    }

    public function getProduct3(): string {
        return $this->product_3;
    }

    public function setProduct3(string $product_3) {
        $this->product_3 = $product_3;
    }

    public function getAmount3(): string {
        return $this->amount_3;
    }

    public function setAmount3(string $amount_3) {
        $this->amount_3 = $amount_3;
    }

    public function getUnit3(): string {
        return $this->unit_3;
    }

    public function setUnit3(string $unit_3) {
        $this->unit_3 = $unit_3;
    }

    public function getProduct4(): string {
        return $this->product_4;
    }

    public function setProduct4(string $product_4) {
        $this->product_4 = $product_4;
    }

    public function getAmount4(): string {
        return $this->amount_4;
    }

    public function setAmount4(string $amount_4) {
        $this->amount_4 = $amount_4;
    }

    public function getUnit4(): string {
        return $this->unit_4;
    }

    public function setUnit4(string $unit_4) {
        $this->unit_4 = $unit_4;
    }

    public function getProduct5(): string {
        return $this->product_5;
    }

    public function setProduct5(string $product_5) {
        $this->product_5 = $product_5;
    }

    public function getAmount5(): string {
        return $this->amount_5;
    }

    public function setAmount5(string $amount_5) {
        $this->amount_5 = $amount_5;
    }

    public function getUnit5(): string {
        return $this->unit_5;
    }

    public function setUnit5(string $unit_5) {
        $this->unit_5 = $unit_5;
    }

    public function getProduct6(): string {
        return $this->product_6;
    }

    public function setProduct6(string $product_6) {
        $this->product_6 = $product_6;
    }

    public function getAmount6(): string {
        return $this->amount_6;
    }

    public function setAmount6(string $amount_6) {
        $this->amount_6 = $amount_6;
    }

    public function getUnit6(): string {
        return $this->unit_6;
    }

    public function setUnit6(string $unit_6) {
        $this->unit_6 = $unit_6;
    }

    public function getProduct7(): string {
        return $this->product_7;
    }

    public function setProduct7(string $product_7) {
        $this->product_7 = $product_7;
    }

    public function getAmount7(): string {
        return $this->amount_7;
    }

    public function setAmount7(string $amount_7) {
        $this->amount_7 = $amount_7;
    }

    public function getUnit7(): string {
        return $this->unit_7;
    }

    public function setUnit7(string $unit_7) {
        $this->unit_7 = $unit_7;
    }

    public function getProduct8(): string {
        return $this->product_8;
    }

    public function setProduct8(string $product_8) {
        $this->product_8 = $product_8;
    }

    public function getAmount8(): string {
        return $this->amount_8;
    }

    public function setAmount8(string $amount_8) {
        $this->amount_8 = $amount_8;
    }

    public function getUnit8(): string {
        return $this->unit_8;
    }

    public function setUnit8(string $unit_8) {
        $this->unit_8 = $unit_8;
    }

    public function getProduct9(): string {
        return $this->product_9;
    }

    public function setProduct9(string $product_9) {
        $this->product_9 = $product_9;
    }

    public function getAmount9(): string {
        return $this->amount_9;
    }

    public function setAmount9(string $amount_9) {
        $this->amount_9 = $amount_9;
    }

    public function getUnit9(): string {
        return $this->unit_9;
    }

    public function setUnit9(string $unit_9) {
        $this->unit_9 = $unit_9;
    }

    public function getProduct10(): string {
        return $this->product_10;
    }

    public function setProduct10(string $product_10) {
        $this->product_10 = $product_10;
    }

    public function getAmount10(): string {
        return $this->amount_10;
    }

    public function setAmount10(string $amount_10) {
        $this->amount_10 = $amount_10;
    }

    public function getUnit10(): string {
        return $this->unit_10;
    }

    public function setUnit10(string $unit_10) {
        $this->unit_10 = $unit_10;
    }
}