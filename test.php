<?php

class TShirtFlyweight
{
    private string $style; // Assuming there's some shared state here

    public function __construct(string $style)
    {
        $this->style = $style;
    }

    public function getStyle(): string
    {
        return $this->style;
    }
}

class TShirt
{
    private TShirtFlyweight $flyweight;
    private string $color;
    private string $size;

    public function __construct(TShirtFlyweight $flyweight, string $color, string $size)
    {
        $this->flyweight = $flyweight;
        $this->color = $color;
        $this->size = $size;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getSize(): string
    {
        return $this->size;
    }

    public function getFlyweight(): TShirtFlyweight
    {
        return $this->flyweight;
    }
}

// Example usage:
$flyweight = new TShirtFlyweight("plain");
$tshirt = new TShirt($flyweight, "red", "M");

echo "Color: " . $tshirt->getColor() . "<br>";
echo "Size: " . $tshirt->getSize() . "<br>";
echo "Flyweight Style: " . $tshirt->getFlyweight()->getStyle() . "<br>";

?>

