# 03 Liskov Substitution Principals

## Example 01

```php
class A {
    public function fire() {}
}

class B extends A {
    public function fire() {}
}

function doSomething(A $obj) {
    // итак, LSP
    // если А заменить на В,
    // то ничего не должно сломаться
}
```

## Example 02

Lesson repository example
Rigth return (and Exceptions).

## Example 03

Bad example:

```php
class Bird {
    public function fly() {}
}
// Duck can fly
class Duck extends Bird {
}
// Chicken can't fly
class Chicken extends Bird {
}
```

Good example:

```php
interface Flyable {
    public function fly();
}
class Bird {
    }
// Duck can fly
class Duck extends Bird implement Flyable {
    public function fly() {}
}
// Chicken can't fly, its ok!
class Chicken extends Bird {
}
```