<?php

interface Programmer
{
    public function writeCode();
    public function eatPizza();
}

class RegularProgrammer implements Programmer
{
    public function writeCode()
    {
    }
    public function eatPizza()
    {
    }
}

class Freelancer implements Programmer
{
    public function writeCode()
    {
    }
    public function eatPizza()
    {
        // здесь будет пусто —
        // это сигнал, что интерфейс надо дробить
    }
}
