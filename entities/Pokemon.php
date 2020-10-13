<?php

class Pokemon {

    private $number;
    private $name;
    private $region;
    private $type;
    private $height; // altura
    private $weight; // peso
    private $evolution;

    // Builder
    function __construct($number, $name, $region, $type, $height, $weight, $evolution) {
        $this->number = $number;
        $this->name = $name;
        $this->region = $region;
        $this->type = $type;
        $this->height = $height;
        $this->weight = $weight;
        $this->evolution = $evolution;
    }
    
    // Setter and Getter
    function getNumber() {
        return $this->number;
    }

    function getName() {
        return $this->name;
    }

    function getRegion() {
        return $this->region;
    }

    function getType() {
        return $this->type;
    }

    function getHeight() {
        return $this->height;
    }

    function getWeight() {
        return $this->weight;
    }

    function getEvolution() {
        return $this->evolution;
    }

    function setNumber($number) {
        $this->number = $number;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setRegion($region) {
        $this->region = $region;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setHeight($height) {
        $this->height = $height;
    }

    function setWeight($weight) {
        $this->weight = $weight;
    }

    function setEvolution($evolution) {
        $this->evolution = $evolution;
    }

}
