<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo '<h2>Ejercicios Arreglos 1</h2>';

    $soul = [

            'keyStr1' => 'lado',
            0 => 'ledo',
            'keyStr2' => 'lido',
            1 => 'lodo',
            2 => 'ludo'
        
        ];
        
        foreach ($soul as $key => $value) {
            echo $value . ',';
        }
        echo '<p>decirlo al revez lo dudo,</p>';
        
        $arreglo1 = array_reverse($soul);
    
        foreach ($arreglo1 as $key => $value) {
            echo $value . ',';
        }
        
        echo '<p>!Que a trabajo me a constado!</p>';

        
// Imprimir nombre de los paises con sus ciudades
    echo '<h2>Ejercicios Arreglos 2</h2>';

    $paises = [
        'Colombia' => array('Bogotá', 'Medellín', 'Cali'),
        'Peru' => array('Lima', 'Arequipa', 'Cusco'),
        'Republica Checa' => array('Berno', 'Kali', 'Praga'),
        'Venezuela' => array('Caracas', 'Maracaibo', 'Valencia'),
        'Costa Rica' => array('Alajuela', 'Liberia', 'Cartago')
        ];
        
        echo '<p></p>';
        
        foreach ($paises as $key => $value) {
            echo '<strong>' . $key . ' = '. '</strong>';
            foreach ($value as $valor) {
                echo $valor . ' ';
            }
            echo '<p></p>';
        }
        
        echo '<p></p>';

    $a = 32 + 3;
    $b = 3 * (2+3);

    echo $a . ' y ' . $b;

    echo '   ';

    $valor = 10;
    
    if (($valor >= 5)&&($valor <= 10)) {
        echo $valor . 'correcto';
    }
    
    

// Mostrar los tres mayores valores y los tres menores valores
    echo '<h2>Ejercicios Arreglos 3</h2>';    
    
    $valores = array(23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61);
    $puestos = array(0,0,0,0,0,0);


    $lon = sizeof($valores);

    $max = 0;
    for ($i=0; $i < $lon; $i++) { 
        if ($valores[$i] > $puestos[0] ) {
            $puestos[0] = $valores[$i];
        }
    }
    for ($i=0; $i < $lon; $i++) { 
        if ($valores[$i] > $puestos[1] and $valores[$i] < $puestos[0]) {
            $puestos[1] = $valores[$i];
        }
    }
    for ($i=0; $i < $lon; $i++) { 
        if ($valores[$i] > $puestos[2] and $valores[$i] < $puestos[1]) {
            $puestos[2] = $valores[$i];
        }
    }
    $puestos[3] = $valores[0];
    for ($i=0; $i < $lon; $i++) { 
        if ($valores[$i] < $puestos[3]) {
            $puestos[3] = $valores[$i];
        }
    }

    $puestos[4] = $valores[0];
    for ($i=0; $i < $lon; $i++) { 
        if ($valores[$i] < $puestos[4] and $valores[$i] > $puestos[3]) {
            $puestos[4] = $valores[$i];
        }
    }

    $puestos[5] = $valores[0];
    for ($i=0; $i < $lon; $i++) { 
        if ($valores[$i] < $puestos[5] and $valores[$i] > $puestos[3] and $valores[$i] > $puestos[4]) {
            $puestos[5] = $valores[$i];
        }
    }

    foreach ($puestos as $value) {
        echo $value . ' ';
    }

    ?>
</body>
</html>