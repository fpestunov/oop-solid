# 03 LSP

Image I want to rent a car when I'm moving house. I ring up the hire company and ask them what models they have. They tell me though that I'll just be given the next car that comes available:

```
public class CarHireService {
    public Car hireCar() {
        return availableCarPool.getNextCar();
    }
}
```

But they have given me a brochure that tells me all of their models come with these features:

```
public interface Car {
    public void drive();
    public void playRadio();
    public void addLuggage();
}
```

That sounds just what I'm looking for, so I book a car & go away happy. On moving day, a Formula One car shows up outside my house:

```
public class FormulaOneCar implements Car {
    public void drive() {
        //Code to make it go super fast
    }

    public void addLuggage() {
        throw new NotSupportedException("No room to carry luggage, sorry.");
    }

    public void playRadio() {
        throw new NotSupportedException("Too heavy, none included.");
    }
}
```

I'm not happy, because I was essentially lied to by their brochure — it doesn't matter if the Formula One car has a fake boot that looks like it can hold luggage but won't open, that's useless for moving house!

If I'm told that "these are the things all of our cars do", then any car I'm given should behave in this way. If I can't trust the details in their brochure, it's useless. That's the essence of the Liskov Substitution Principle.