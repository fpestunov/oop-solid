# SOLID

Применимы в широком смысле - функции, классы, компоненнты.

## 01. S – The Single Responsibility Principle

Принцип единственной ответственности.

> [Just because you can, doesn’t mean you should.](01-SRP/01.jpg)

Каждый класс не был перегружен логикой и выполнял только одну задачу.

Если ваш класс имеет более одной ответственности, то изменения его при изменении бизнес-логики будут происходить чаще. Так же класс взаимодействует с большим количеством других классов, что сильнее их связывает между собой и становится сложнее в поддержке.

Ложка и вилка вместо ложка-вилка-нож.

Если мы применяем SRP, получаем больше модулей с меньшим количество методов в каждом.

- [Animal](01-SRP/Animal/readme.md)
- [Order - работа с заказом](01-SRP/Order/readme.md)
- [Order2 - работа с заказом](01-SRP/Order2/readme.md)

## 02. O – Open Closed Principle

Entities should be open for extension, but closed for modification.

> [Open chest surgery is not needed when putting on a coat.](02-OCP/02.jpg)

- [Shapes](02-OCP/Shapes/readme.md)
- [Shop Checkout](02-OCP/Checkout/readme.md)

## 03. L – Liskov Sustitution Principle

Классы-наследники не должны противоречить базовому классу. Например, они не могут предоставлять интерфейс уже базового. Поведение наследников должно быть ожидаемым для функций, которые используют базовый класс.

> [If it looks like a duck, quacks like a duck, but needs batteries – you probably have the wrong abstraction](03-LSP/03.jpg)

- [Lesson](03-LSP/Lesson/index.php)
- [Car rent service](03-LSP/CarRent/readme.md)

## 04. I – Interface Segregation Principle

> [You want me to plug this in, where?](04-ISP/04.jpg)

Программные сущности не должны зависеть от методов, которые они не используют.

Принцип разделения интерфейсов говорит о том, что слишком «толстые» интерфейсы необходимо разделять на более маленькие и специфические, чтобы программные сущности маленьких интерфейсов знали только о методах, которые необходимы им в работе. В итоге, при изменении метода интерфейса не должны меняться программные сущности, которые этот метод не используют.

ISP можно представлять как SRP для интерфейсов. Дробление интерфейсов действительно заставляет делить ответственность между ними.

Если мы применяем ISP, получаем больше интерфейсов с меньшим количеством методов в каждом.

- [Programmer](04-ISP/Programmer/readme.md)
- [SendReminder](04-ISP/SendReminder/readme.md)

## 05. D – Dependency Inversion Principle

> [Would you solder a lamp directly to the electrical wiring in a wall?](05-DIP/05.jpg)

Depend on abstractions, not on concretions.
Dependency Inversion does not equal Dependency Injection.

Дополнительная литература:
- http://butunclebob.com/ArticleS.UncleBob.PrinciplesOfOod
- http://blog.muradovm.com/2012/03/solid.html (с примерами)
- https://ota-solid.now.sh/
