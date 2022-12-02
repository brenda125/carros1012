<?php

class carro

{
    public $carro1 = "Novo - ";
    public $carro2 = "Rebaixado - ";
    public $carro3 = "Velho - ";
    public $carro4 = "Usado - ";
    public $carro5 = "Compacto -";
 
    public $caracteristica1 = "Vermelha.";
    public $caracteristica2 = "Sem Amortecedor";
    public $caracteristica3 = "Sem rodas ";
    public $caracteristica4 = "Carro em perfeito estado";
    public $caracteristica5 = "Um pouco apertado";

    public function mostrar ()
        {
            echo "O Carro1 : {$this -> carro1} Seu dono tem preferencia pela cor  {$this -> caracteristica1} <br>";
    
            echo "O Carro2 : {$this -> carro2} Carro esta dentro das regras exigirdas pelo detran, {$this -> caracteristica2} <br>";

            echo "O Carro3 : {$this -> carro3} So para venda de peças, {$this -> caracteristica3} <br><br><br>";

        }   
    

    
    public $carro11 = "Lindo";
    public $carro21 = "Sujo ";
    public $carro31 = "Janetas ";
    public $carro41 = "Vidro ";
    public $carro51 = "Corre";
 
    public $caracteristica11 = "Liga.";
    public $caracteristica21 = "Aquecedor";
    public $caracteristica31 = "Preto ";
    public $caracteristica41 = "Parabrizas";
    public $caracteristica51 = "Rodas";
     
    public function carro ()
    
    {
        echo " O Carro1 : {$this -> carro11} Limpo e   {$this -> caracteristica11} <br>";
    
        echo "O Carro2 : {$this -> carro21} Porem quentinho tem {$this -> caracteristica21} <br>";

        echo "O Carro3 : {$this -> carro31} Muito escuras da cor {$this -> caracteristica31} <br><br><br>";
    }

    public $carro111 = "Caro";
    public $carro211 = "Barato ";
    public $carro311 = "Verde ";
    public $carro411 = "Amarelo ";
    public $carro511 = "Preto";
 
    public $caracteristica111 = "Liga.";
    public $caracteristica211 = "Chave de rodas";
    public $caracteristica311 = "Luz ";
    public $caracteristica411 = "Farou";
    public $caracteristica511 = "Calota";

    public function certos ()
    {
        echo " O Carro1 : {$this -> carro111} Feio de meis porem   {$this -> caracteristica11} <br>";
    
        echo "O Carro2 : {$this -> carro211} super organizado e tem {$this -> caracteristica21} <br>";

        echo "O Carro3 : {$this -> carro311} Marca boa e possui {$this -> caracteristica31} <br>";

    }
}

$carro1 = new carro ();
$carro1 -> mostrar ();
$carro1-> carro ();
$carro1->certos ();