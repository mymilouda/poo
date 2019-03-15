<?php

class Form 
{
    public function add($form)
    {
        $this->area *= 1 + $form / 100;
        $this->perimeter = round($this->perimeter, 2);
    }
}