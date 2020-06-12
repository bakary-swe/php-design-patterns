<?php

class Shape {

    protected $type = null;
    protected $dimension = 0.0;

    public function __construct(string $type, float $dimension)
    {
        $this->type = $type;
        $this->dimension = $dimension;
    }

    public static function getShape(string $type, float $dimension) {
        switch ($type) {
            case 'circle':
                return new Circle($dimension);
                break;
            case 'square':
                return new Square($dimension);
                break;
            default:
                return new Exception('Unknow shape type');
                break;
        }
    }
}

class Circle {
    protected $radius = 0.0;

    public function __construct(float $radius = 0.0)
    {
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * ($this->radius * $this->radius);
    }
}
class Square {
    protected $side = 0.0;

    public function __construct(float $side = 0.0)
    {
        $this->side = $side;
    }

    public function getArea() {
        return $this->side * $this->side;
    }
}