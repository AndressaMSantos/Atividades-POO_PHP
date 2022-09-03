<?php

/* Exercício 01: Crie uma classe chamada Invoice que possa ser utilizado por uma loja de suprimentos 
de informática para representar uma fatura de um item vendido na loja. 
Uma fatura deve incluir as seguintes informações como atributos

número do item faturado,
descrição do item
quantidade comprada do item
preço unitário do item
Sua classe deve ter um construtor que inicialize os quatro atributos.
Se a quantidade não for positiva, ela deve ser configurada como 0.
Se o preço por item não for positivo ele deve ser configurado como 0.0. 
Forneça um método set e um método get para cada variável de instância. 
Além disso, forneça um método chamado getInvoiceAmount que calcula o valor da fatura 
(isso é, multiplica a quantidade pelo preço por item) e depois retorna o valor
*/


// Criar classe Invoice
class Invoice {
    // tributos
    private $n_item;
   
    private $desc;
    private $qtd;
    private $preco;

    // Construtor
    // Sua classe deve ter um construtor que inicialize os quatro atributos.
 
    public function __construct($par0 ,$par2, $par3, $par4)
    {
        $this ->n_item = $par0;
 
        $this->desc=$par2;
        // Se a qtd não for positiva, ela deve ser configurada como 0
        if($par3 <= 0){
            $this->qtd= 0;
        }else{
            $this->qtd=$par3;
        } 

         // e o preço por item não for positivo ele deve ser configurado como 0.0.

         if($par4 <= 0){
            $this->preco = 0.0;
        }else{
            $this->preco =$par4;
        }
    
    }

    public function getInvoiceAmount()
     { return $this->qtd * $this->preco; }


    public function __set($at, $val){
         $this->$at = $val;
    }


    public function __get($at){
        return $this->$at ;
    }

    
}



?>