<?php

class Rectangle extends Shape
{
    protected int $width;
    protected int $height;
    
    public function __construct(int $x, int $y, string $color, float $opacity, int $width, int $height)
    {
        parent::__construct($x, $y, $color, $opacity);

        $this->width = $width;
        $this->height = $height;
    }
    
     public function getWidth(): int
    {
        return $this->width;
    }

    public function setWidth(int $width): void
    {
        $this->width = $width;
    }
    
     public function getHeight(): int
    {
        return $this->height;
    }

    public function setHeight(int $height): void
    {
        $this->height = $height;
    }
    
    public function draw() : string
    {
        return sprintf('<rect x="%s" y="%s" width="%s" height="%s" fill="%s" opacity="%f"></rect>',
            $this->x,
            $this->y,
            $this->width,
            $this->height,
            $this->color,
            $this->opacity
        );
    }
}