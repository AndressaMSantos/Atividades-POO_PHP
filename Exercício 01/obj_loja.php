<?php
include("loja.php");
$loja_inf = new Invoice ("001","Monitor Samsung",8, 906);
echo"<p></p>";
echo "nº Item Faturado: ".$loja_inf->n_item ;
echo"<p></p>";
echo  "Descriçaõ: ". $loja_inf -> desc;
echo"<p></p>";
echo "Quantidade: ".$loja_inf -> qtd ;
echo"<p></p>";
echo  "Preço: ".number_format($loja_inf -> preco, 2 , ",", ".");
echo"<p></p>";
echo  "Total: ".number_format($loja_inf -> getInvoiceAmount(), 2 , ",", ".");
 

?>
   