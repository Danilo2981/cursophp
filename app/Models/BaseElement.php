<?php

// Una clase es algo abstracto que define las caracteristicas de algo
class BaseElement {
    private $title;
    public $description;
    public $visible;
    public $months;

    // Constructor funcion para enviar valores desde un principio pasando las variables como valores
    public function __construct($title, $description) {
        $this->setTitle($title);
        $this->description = $description;
    }

    // Metodos funciones que permiten que objetos funcionen 
    // funcion para obtener el parametro de la variable
    public function setTitle($title) {
        if ($title == '') {
            $this->title = 'N/A';
        } else {
            $this->title = $title;
        }
    }

    // funcion para llamar una variable privada para ser utilizada en el echo
    public function getTitle() {
        // para obtener la variable que se encuentra dentro de la instancia actual se usa $this->
        return $this->title;
    }

    public function getDurationAsString() {
        // floor envia el resultado de la division al piso inferior
        $years = floor($this->months / 12);
        // % extrae el residuo de la division
        $extraMonths = $this->months % 12;
      
        if ($extraMonths < 1) {
          return "$years years";
        }
          return "$extraMonths months";
    }
    
}

// Encapsular significa ocultar caracteristicas de nuestro objeto public (todos) private (nivel de acceso)
