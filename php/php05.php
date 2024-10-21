<?php

class Rectangle{
    private $width;
    private $length;
    public function __construct($width, $length){   
        $this->width = $width;
        $this->length = $length;
        }
    function area(){
        return $this->length * $this->width;
    }
    function perimeter(){
        return 2 * ($this->length + $this->width);
    }
}

$rectangle = new Rectangle(readline("enter length "),readline("enter width  "));
echo"Area of rectangle = ".$rectangle->area()."\n";
echo "Perimeter of rectangle = ".$rectangle->perimeter()."\n";

?>