<?php

class ShapeContainer 
{
    protected int $width;
    protected int $height;
    protected array $shape;
    
    public function __construct(int $width, int $height, array $shape)
    {
        $this->width = $width;
        $this->height = $height;
        $this->shape = $shape;
    }
    
     public function getWidth(): int
    {
        return $this->width;
    }
}