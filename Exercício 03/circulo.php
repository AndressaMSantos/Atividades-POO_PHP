<!-- Exercício 03: Escreva uma classe que represente um circulo no plano cartesiano.
 Forneçra os seguintes membros de classe:

Um contrutor que incialize o ponto em um local por parâmetros ou na origem do espaço;
Métodos getter e setter.
Métodos de inflar e desinflar que respectivamente aumenta e diminuem o tamanho do circulo.
Método para moverr o circulo a partir de outro ponto ou para a origem do espaço.
Método que retorna a àrea do círculo.  -->
<?php
    class Circulo {
        //tributos

        private $x;
        private $y;
        private $Raio;

        //Um contrutor que incialize o ponto em um local por parâmetros ou na origem do espaço;
        public function __construct($Raio,$a = 0, $b = 0 ) 
        {
            $this->x = $a;
            $this->y = $b;
        }
        //Métodos getter e setter.
        public function __get($value)
        {
            return $this->$value;
        }

        public function __set($atributs, $value)
        {
            $this->$atributs = $value;
        }

       //Métodos de inflar e desinflar que respectivamente aumenta e diminuem o tamanho do circulo.
       public function Inflar($value) 
       { 
           $this->Raio += $value; 
       }
   
       public function Desinflar($value) 
       { 
           $this->Raio -= $value; 
       }

        // Método para mover o circulo a partir de outro ponto ou para a origem do espaço
        public function Mover($move) 
        {
            $this->x = $move;
            $this->y = $move;
        }
        
        // Método que retorna a àrea do círculo. 
        public function Area() 
        { 
            return pi() * ($this->Raio * 2); 
        }
   
 
    }
?>