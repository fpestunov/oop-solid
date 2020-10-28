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