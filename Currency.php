<?php

class Currency
{
    private $unformattedValue = [
        "I" => 1,
        "V" => 5,
        "X" => 10,
        "L" => 50,
        "C" => 100,
        "D" => 500,
        "M" => 1000
    ];

    private $value;

    public function __construct($input)
    {
        $this->parser($input);
    }

    public function parser($input)
    {
        

    }

    public function convertValues($values)
    {

    }

}