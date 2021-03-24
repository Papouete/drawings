<?php

class Circle extends Shape
{
    protected int $rx;
    protected int $ry;
    
    public function __construct(int $x, int $y, string $color, float $opacity, int $rx, int $ry)
    {
        
        parent::__construct($x, $y, $color, $opacity);
        
        $this->rx = $rx;
        $this->ry = $ry;
    }
    
    public function getRx(): int
    {
        return $this->rx;
    }

    public function setRx(int $rx): void
    {
        $this->rx = $rx;
    }
    public function getRy(): int
    {
        return $this->ry;
    }

    public function setRy(int $ry): void
    {
        $this->ry = $ry;
    }
    
    public function draw() : string
    {
        return sprintf('<ellipse cx="%s" cy="%s" rx="%s" ry="%s" fill="%s" opacity="%f"></ellipse>',
            $this->x,
            $this->y,
            $this->rx,
            $this->ry,
            $this->color,
            $this->opacity
        );
    }
}