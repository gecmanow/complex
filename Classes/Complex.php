<?php

namespace Classes\Complex;

class Complex {

    public $a;
    public $b;
    private $z;

    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }

    public function __toString() {
        return (string) $this->z;
    }

    public function addition() {
        $this->z = $this->a + $this->b;
        return $this->z;
    }
    public function subtraction() {
        $this->z = $this->a - $this->b;
        return $this->z;
    }
    public function multiplication() {
        $this->z = $this->a * $this->b;
        return $this->z;
    }
    public function division() {
        $this->z = $this->a / $this->b;
        return $this->z;
    }
}