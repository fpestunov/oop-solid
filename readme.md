# SOLID

Применимы в широком смысле - функции, классы, компоненнты.

## 01. S – The Single Responsibility Principle

Принцип единственной ответственности.

> [Just because you can, doesn’t mean you should.](01-SRP/01.jpg)

Каждый класс не был перегружен логикой и выполнял только одну задачу.

Если ваш класс имеет более одной ответственности, то изменения его при изменении бизнес-логики будут происходить чаще. Так же класс взаимодействует с большим количеством других классов, что сильнее их связывает между собой и становится сложнее в поддержке.

Ложка и вилка вместо ложка-вилка-нож.

- [Animal](01-SRP/Animal/readme.md)
- [Order - работа с заказом](01-SRP/Order/readme.md)
- [Order2 - работа с заказом](01-SRP/Order2/readme.md)

## 02. O – Open Closed Principle

Entities should be open for extension, but closed for modification.

- [Shapes](02-OCP/Shapes/readme.md)
- [Shop Checkout](02-OCP/Checkout/readme.md)

## 03. L – Liskov Sustitution Principle

- [Lesson](03-LSP/Lesson/index.php)
