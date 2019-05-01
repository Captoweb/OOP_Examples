<link href = "style.css" rel="stylesheet">
<p><a href="index.php">Home</a></p>
<h3>4. Интерфейсы в PHP</h3>

<?php

interface CalculateSquare
{
    public function calculateSquare(): float;

}

interface ClassName
{
    public function className() ;
}


class Circle implements CalculateSquare, ClassName
{
    const PI = 3.1416;

    private $r;

    public function __construct(float $r)
    {
        $this->r = $r;
    }

    public function calculateSquare(): float
    {
        return self::PI * ($this->r ** 2);
    }

    public function className()
    {
        return get_class($this);
    }
}

class Rectangle implements ClassName
{
    private $x;
    private $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function calculateSquare(): float
    {
        return $this->x * $this->y;
    }

    public function className()
    {
        return get_class($this);
    }
}

class Square implements CalculateSquare, ClassName
{
    private $x;

    public function __construct(float $x)
    {
        $this->x = $x;
    }

    public function calculateSquare(): float
    {
        return $this->x ** 2;
    }

    public function className()
    {
        return get_class($this);
    }
}

$objects = [
    new Square(5),
    new Rectangle(2, 4),
    new Circle(5)
];


foreach ($objects as $object) {
    if ($object instanceof CalculateSquare) {
        echo 'Объект реализует интерфейс CalculateSquare. 
        Площадь: ' . $object->calculateSquare() . '.' .' Объект реализует класс: '. $object->className() . '.';
        echo '<br>';
    }else{
        echo 'Объект <b>НЕ</b> реализует интерфейс CalculateSquare.' .' Объект реализует класс: '.
            $object->className() . '.';
        echo '<br>';
    }
}

//конечно, тут сожно и без interface ClassName, но этож тема про интерфейсы
