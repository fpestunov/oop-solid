<?php

class Square
{
    public $width;
    public $height;

    function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }
}

class Circle
{
    public $radius;

    function __construct($radius)
    {
        $this->radius = $radius;
    }
}

class AreaCalculator
{

    public function calculate($shapes)
    {
        foreach ($shapes as $shape) {
            if ($shape instanceof Square) {
                $area[] = $shape->width * $shape->height;
            } elseif (is_a($shape, 'Circle')) {
                $area[] = $shape->radius * $shape->radius * pi();
            }
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
