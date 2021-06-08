<?php

require_once 'BaseElement.php';

// Clase heredada 

class Job extends BaseElement {
    // Constructor modifica la clase que estamos utilizando (sobrescribe el del padre)
    // Para llamar al del padre se usa parent::__construct pasando los parametros en padre e hijo

    public function __construct($title, $description) {
        // puedo enviar un nuevo elemento antes de llamar al constructor y de pasarle por el parent
        $newTitle = 'Job: ' . $title;
        $this->title = $newTitle;
        // parent::__construct($newTitle, $description);
        // $this nos permite llamar a los elementos del parent siempre y cuando la variable sea protected
    }

    public function getDurationAsString() {
        // floor envia el resultado de la division al piso inferior
        $years = floor($this->months / 12);
        // % extrae el residuo de la division
        $extraMonths = $this->months % 12;
      
        return "Job Duration: $years years";
        if ($extraMonths < 1) {
        }
          return "$extraMonths months";
    }      
}

// Polimorfismo metodo que va a funcionar en el contexto en que es llamado (models)