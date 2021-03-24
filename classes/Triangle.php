<?php

class Triangle extends Shape
{
    protected string $t1;
    protected string $t2;
    
    public function __construct(int $x, int $y, string $color, float $opacity, string $t1, string $t2)
    {
        parent::__construct($x, $y, $color, $opacity);

        $this->t1 = $t1;
        $this->t2 = $t2;
    }
    
     public function getT1(): string
    {
        return $this->t1;
    }

    public function setT1(string $t1): void
    {
        $this->t1 = $t1;
    }
    
     public function getT2(): string
    {
        return $this->t2;
    }

    public function setT2(string $t2): void
    {
        $this->t2 = $t2;
    }
    
    public function draw() : string
    {
        return sprintf('<polygon points=" %s, %s, %s, %s " fill="%s" opacity="%f" />',
            $this->x,
            $this->t1,
            $this->t2,
            $this->y,
            $this->color,
            $this->opacity
            
        // Version alternative sans concaténation (attention il faut utiliser les "" pour délimiter la chaîne)
        // return "<rect x='{$this->x}' ...";
        );
    }
}