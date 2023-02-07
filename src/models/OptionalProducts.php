<?php

class OptionalProducts
{
    private  $id_optional;
    private  $product_1;
    private  $amount_1;
    private  $unit_1;

    public function __construct(
        int $id_optional = null,
        string $product_1 = null,
        string $amount_1 = null,
        string $unit_1 = null
    )
    {
        $this->id_optional = $id_optional;
        $this->product_1 = $product_1;
        $this->amount_1 = $amount_1;
        $this->unit_1 = $unit_1;
    }

    public function getIdOptional(): int {
        return $this->id_optional;
    }

    public function getProduct1() {
        return $this->product_1;
    }

    public function getAmount1() {
        return $this->amount_1;
    }

    public function getUnit1() {
        return $this->unit_1;
    }

    public function setIdOptional(int $id_optional): void {
        $this->id_optional = $id_optional;
    }

    public function setProduct1(string $product_1): void {
        $this->product_1 = $product_1;
    }

    public function setAmount1(string $amount_1): void {
        $this->amount_1 = $amount_1;
    }

    public function setUnit1(string $unit_1): void {
        $this->unit_1 = $unit_1;
    }


}