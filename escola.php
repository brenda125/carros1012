<?php

class escola

{
    public $escola1 = "Nova - ";
    public $escola2 = "Uniforme - ";
    public $escola3 = "Carteira - ";
    public $escola4 = "Professor - ";
    public $escola5 = "Aluno -";
 
    public $caracteristica1 = "Reforma.";
    public $caracteristica2 = "da porta pra dentro";
    public $caracteristica3 = "bonitos ";
    public $caracteristica4 = "escola em perfeito estado";
    public $caracteristica5 = "Um pouco apertado";

    public function mostrar ()
        {
            echo "Escola : {$this -> escola1} Parece Limpa pois foi feita uma  {$this -> caracteristica1} <br>";
    
            echo "A escola : {$this -> escola2} Obriga o uso, {$this -> caracteristica2} <br>";

            echo "A escola : {$this -> escola3} So para alunos {$this -> caracteristica3} <br><br><br>";

        }   
    

    
    public $escola11 = "Sala";
    public $escola21 = "Coordenação ";
    public $escola31 = "Sub cordenador ";
    public $escola41 = "Sub diretor ";
    public $escola51 = "Cantineiras";
 
    public $caracteristica11 = "Organizada";
    public $caracteristica21 = "Orienta";
    public $caracteristica31 = "Ajuda ";
    public $caracteristica41 = "Ensina";
    public $caracteristica51 = "Ajuda";
     
    public function escola ()
    
    {
        echo " A Direção tem : {$this -> escola11} Limpa e   {$this -> caracteristica11} <br>";
    
        echo "Todos os dias a {$this -> escola21} os alunos {$this -> caracteristica21} <br>";

        echo "A escola tem: {$this -> escola31} sempre que pode {$this -> caracteristica31} <br><br><br>";
    }

    public $escola111 = "Chamada -";
    public $escola211 = "Cortina ";
    public $escola311 = "Recreio ";
    public $escola411 = "Castigo ";
    public $escola511 = "Banheiro";
 
    public $caracteristica111 = "Limpa";
    public $caracteristica211 = "cheirosa";
    public $caracteristica311 = "Luz ";
    public $caracteristica411 = "Ar condicionado";
    public $caracteristica511 = "Portão";

    public function carac ()
    {
        echo " A escola faz: {$this -> escola111} para os alunos   {$this -> caracteristica111} <br>";
    
        echo "Temos  : {$this -> escola211} super linda e {$this -> caracteristica211} <br>";

        echo "A escola: {$this -> escola311} Marca boa hora, e apagamos a {$this -> caracteristica311} <br>";

    }
}

$escola1 = new escola ();
$escola1 -> mostrar ();
$escola1-> escola ();
$escola1->carac ();