<link href = 'style.css' rel="stylesheet">
<p><a href="index.php">Home</a></p>
<h3>2. Инкапсуляция в PHP</h3>

<?php

class Cat
{
    private $name;
    private $color;

    public function __construct(string $name, string $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function sayHello()
    {
        echo 'Привет! Меня зовут ' . $this->name . ', ' . 'я ' . $this->color . '.';
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setColor(string $color)
    {
        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color;
    }

}

$cat1 = new Cat('Снежок', 'белый');
$cat1->sayHello();
echo '<br>';
$cat2 = new Cat('Барсик', 'черный');
$cat2->sayHello();
echo '<br>';
echo 'цвет первого кота: ' . $cat1->getColor() . '.'; //получает свойство color
echo '<br>';
$cat1 = new Cat('Снежок', 'все еще белый');
$cat1->sayHello();
echo '<br>';
$cat2 = new Cat('Барсик', 'рыжий');
$cat2->sayHello();