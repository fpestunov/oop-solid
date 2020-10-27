<?php

interface Shape
{
    public function area();
}

class Square implements Shape
{
    public $width;
    public $height;

    function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function area()
    {
        return $this->height * $this->width;
    }
}

class Circle
{
    public $radius;

    function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return $this->radius * $this->radius * pi();
    }
}

class AreaCalculator
{

    public function calculate($shapes)
    {
        foreach ($shapes as $shape) {
            $area[] = $shape->area();
        }

        return array_sum($area);
    }
}

$shapes = [
    new Square(2, 3),
    new Circle(3),
    new Square(2, 2),
];

echo (new AreaCalculator)->calculate($shapes);
