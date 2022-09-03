<?php
/*      private $A;
        private $B;
        private $Raio; */

        include("circulo.php");

        $circulo = new Circulo(0,0,0);
        
        echo "X = " . $circulo->x = 3;
        echo "<p></p>";
        echo "Y = " . $circulo->y = -1;
        echo "<p></p>";
        echo "R² = " . $circulo->Raio = 16," => R = ", -4;
        echo "<p></p>";
        echo "Area = " .number_format( $circulo->Area(), 2 , ",", ".");;
        echo "<p></p>";

        $circulo->Mover(5);
        echo "Mover: X = " . $circulo->x . ", Y = " . $circulo->y;
        echo "<p></p>";

        $circulo->Inflar(10);
        echo "Inflar: " . $circulo->Raio;
        echo "<p></p>";

        $circulo->Desinflar(5);
        echo "Desinflar: " . $circulo->Raio;



?>