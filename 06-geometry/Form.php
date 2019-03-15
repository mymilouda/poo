<?php

/**
 * Cette classe permet de construire une forme.
 */
class Form implements Form2D
{
    /**
     * La forme va stocker plusieurs formes dans un tableau.
     */
    protected $forms = [];

    /**
     * Cette méthode permet d'ajouter une nouvelle forme dans le tableau.
     * 
     * L'argument $form est typé avec l'interface Form2D. Toutes les classes
     * Rectangle, Square, Circle sont des Form2D car ils implémentent l'interface.
     */
    public function add(Form2D $form)
    {
        $this->forms[] = $form;

        return $this;
    }

    /**
     * L'aire d'une forme quelconque est l'addition des aires de toutes les formes présentes dans son tableau.
     */
    public function area()
    {
        $area = 0;
        foreach ($this->forms as $form) {
            $area += $form->area();
        }

        return $area;
    }

    public function perimeter()
    {
        $perimeter = 0;
        foreach ($this->forms as $form) {
            $perimeter += $form->perimeter();
        }

        return $perimeter;
    }
}
