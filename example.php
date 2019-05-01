<p><a href="index.php">Home</a></p>
<h3>Для пирмеров</h3>
<link href = "style.css" rel="stylesheet">

<?php

abstract class AbstractClass
{
    abstract public function getValue();

    public function printValue()
    {
        echo 'Значение: ' . $this->getValue();
    }
}

class ClassA extends AbstractClass
{
    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}

$objectA = new ClassA('object of class');
$objectA->printValue();