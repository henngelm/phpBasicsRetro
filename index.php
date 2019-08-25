<?php
    // die("Si estás viendo esto, bienvenido! Es desde PHP con Docker :-)");

//Declarar arreglo en la variable $barcelona

//Crear nuevo arreglo vacío, para poder llenarlo en el ciclo, con los jugadores de número PAR.

//Recorrer el arreglo barcelona (los titulares, y los suplentes) y guardar en el arreglo vacío aquellos jugadores que tengan en su camiseta un numero PAR

//Ordenar el nuevo arreglo (nuevosJugadores) por nombre del jugador.
//Leer más en https://www.w3schools.com/php/php_arrays_sort.asp

//Mostrar los jugadores del nuevo arreglo (nuevosJugadores) ordenados por nombre.
//Imprimir en pantalla esos jugadores

    $barcelona = array(
        'titular' => array(
            '10' => 'Messi',
            '9' => 'Suarez',
            '11' => 'Dembele'
        ),
        'suplente' => array(
            '8' => 'Arthur',
            '3' => 'Pique',
            '4' => 'Juan'
        )
    );

    $nuevosJugadores = array();
    
    echo '<h2>Recorriendo el array Barcelona</h2>';

    foreach ($barcelona as $status => $plantilla) {
        foreach ($plantilla as $numero => $jugador) {
            if ($numero % 2 == 0 ) {
                echo 'El numero de camiseta '.$numero.' del barcelona lo tiene '.$jugador.' y va como '.ucfirst($status);
                echo '<br />';
                $nuevosJugadores[] = $jugador;
                sort($nuevosJugadores);
            } else {
                echo 'El numero de camiseta '.$numero.' del barcelona lo tiene '.$jugador.' y va como '.ucfirst($status);
                echo '<br />';
            }
        }
    }
    echo '<h2>Jugadores con numero de camiseta par</h2>';
    foreach ($nuevosJugadores as $jugadoresConNumeroPar) {
        echo $jugadoresConNumeroPar.'<br />';
    }

?>