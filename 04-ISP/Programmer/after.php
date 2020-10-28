<?php

// interface Programmer
// {
//     public function writeCode();
//     public function eatPizza();
// }

interface CodeProducer
{
    public function writeCode();
}

interface PizzaConsumer
{
    public function eatPizza();
}

class RegularProgrammer implements CodeProducer, PizzaConsumer
{
    public function writeCode()
    {
    }
    public function eatPizza()
    {
    }
}

class Freelancer implements CodeProducer
{
    public function writeCode()
    {
    }
}
