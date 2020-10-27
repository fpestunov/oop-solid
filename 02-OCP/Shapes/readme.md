# Areas Calculator

```php
// Square.php
namespace Acme;

class Square {
    public $width;
    public $height;

    function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }
}

// AreaCalculator.php
namespace Acme;

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

```

> Separate extensible behavior behind an interface and flip the dependencies.
> Uncle Bob.

## Interface

How to shortcats to add implemented methods?

```php
```