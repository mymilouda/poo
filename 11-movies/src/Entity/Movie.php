<?php

namespace Entity;

/**
 * Cette classe représente un film.
 */
class Movie
{
    public $id;
    public $title;
    public $synopsis;
    public $released_at;
    public $category;

    public function getReleasedAt()
    {
        $date = new \DateTime($this->released_at);

        return $date->format('d F Y');
    }

    /**
     * Ajouter un getter pour le synopsis.
     * Si le synopsis est plus long que 15 caractères, on affiche seulement les 15 premiers caractères avec ... 
     */
    public function getSynopsis($truncate = 9)
    {
        $output = $this->synopsis;

        // Si la taille de la chaine est supérieure à $truncate
        if (strlen($output) > $truncate) {
            $output = substr($output, 0, $truncate) . '...';
        }

        return $output;
    }

    /**
     * On passe les données de $_POST dans l'instance de Movie
     */
    public function hydrate($data)
    {
        if (empty($data)) { // S'il n'y a pas de data, on hydrate pas
            return;
        }

        // On hydrate
        $this->title = trim($data['title']);
        $this->synopsis = trim($data['synopsis']);
        $this->released_at = trim($data['released_at']);
        $this->category = trim($data['category']);
    }

    /**
     * On vérifie que les données du film soient valides
     */
    public function isValid()
    {
        $valid = true;

        if (strlen($this->title) < 2) {
            $valid = false;
        }

        if (strlen($this->synopsis) < 15) {
            $valid = false;
        }

        // 2020-12-01
        // On vérifie que la date soit valide
        $parseDate = explode('-', $this->released_at);

        if (count($parseDate) === 3) { // on vérifie qu'on a bien 2020, 12 et 01 dans un tableau
            $day = $parseDate[2];
            $month = $parseDate[1];
            $year = $parseDate[0];
            if (!checkdate($month, $day, $year)) {
                $valid = false;
            }
        } else {
            // Si la date est à "toto"
            $valid = false;
        }

        if (strlen($this->category) < 2) {
            $valid = false;
        }

        return $valid;
    }
}
