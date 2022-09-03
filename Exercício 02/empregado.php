<!-- Exercício 02: A fim de representar empregados em uma firma, crie uma classe chamada Empregado 
que inclui as três informações a seguir como atributos:

um primeiro nome
um sob_nome
um salário mensal.
Sua classe deve ter um construtor que inicializa os três atributos. Forneça um método set e get para cada atributo.
 Se o salário mensal não for positivo, configure-o como 0.0. Crie um método que exibe o salário anual e um que dê 
 10% de aumento no salário. -->
<?php
class Empregado {

    private $nome; //par
    private $sob_nome; //par1
    private $sal; //par2

    //Construtor
    public function __construct($par ,$par1, $par2)
    {
        $this ->nome = $par;
        $this->sob_nome=$par1;
        //Se o salário mensal não for positivo, configure-o como 0.0.
        //Crie um método que exibe o salário anual e um que dê 10% de aumento no salário.
        if($par2 <= 0){
            $this->sal= 0;
        }else{
            $this->sal=$par2;
        } 

    }// Crie um método que exibe o salário anual e um que dê 10% de aumento no salário.
    public function salIncrease()
    { return $this->sal += $this->sal * 10 / 100; }
    public function salAnual()
    { return $this->sal * 12; }

    // at= atributo  val= variavel
   public function __set($at, $val){
        $this->$at = $val;
   }


   public function __get($at){
       return $this->$at ;
   }

}
?>
