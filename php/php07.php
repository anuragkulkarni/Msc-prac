<?php
// Define an abstract class Shape
abstract class Shape 
{
    // Abstract method to calculate area
    abstract public function calculateArea();
}
// Define a Triangle class that extends Shape
class Triangle extends Shape
{
    // Properties for base and height
    private $base;
    private $height;
    // Constructor to initialize base and height
    public function __construct($base, $height) 
    {
        $this->base = $base;
        $this->height = $height;
    }
    // Implement the abstract method to calculate area of triangle
    public function calculateArea()
    {
        return 0.5 * $this->base * $this->height;
    }
}
// Define a Rectangle class that extends Shape
class Rectangle extends Shape 
{
    // Properties for length and width
    private $length;
    private $width;

    // Constructor to initialize length and width
    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    // Implement the abstract method to calculate area of rectangle
    public function calculateArea()
    {
        return $this->length * $this->width;
    }
}
// Example usage
// Create a Triangle object
$triangle = new Triangle(10, 5);
echo "Area of Triangle: " . $triangle->calculateArea() . "\n";
// Create a Rectangle object
$rectangle = new Rectangle(10, 5);
echo "Area of Rectangle: " . $rectangle->calculateArea() . "\n";
?>
