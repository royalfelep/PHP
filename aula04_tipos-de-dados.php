<?php
//str
$teste = "Teste um";
var_dump($teste);

if (is_string($teste)) :
    echo "Positivo para string.";
else :
    echo "Negativo para string.";
endif;

$teste = 123;
var_dump($teste);

if (is_string($teste)) :
    echo "Positivo para string.";
else :
    echo "Negativo para string.";
endif;

echo "<hr>";

//int
$idade = 21;
var_dump($idade);

if (is_int($idade)) :
    print("Positivo para inteiro");
else :
    print("Negativo para inteiro");
endif;

echo "<hr>";

//float
$altura = 8.9;
var_dump($altura);

if (is_float($altura)) :
    print("Positivo para float");
else :
    print("Negativo para float");
endif;

echo "<hr>";

//boolean
$eu = false;
var_dump($eu);

if (is_bool($eu)) :
    print("Positivo para boolean");
else :
    print("Negativo para boolean");
endif;

echo "<hr>";

//array
$etc = array("felipe", 123, 12.3, true);
var_dump($etc);

if (is_array($etc)) :
    print("Positivo para array");
else :
    print("Netagitvo para array");
endif;

echo "<hr>";

//object
class pessoa
{
    public $nome;
    public function atribuirNome($nome)
    {
        $this->$nome = $nome;
    }
}
$pessoa = new pessoa();
$pessoa->atribuirNome("Felipe");
var_dump($pessoa);

if (is_object($pessoa)) :
    print("Positivo para object");
else :
    print("Netagitvo para object");
endif;

echo "<hr>";

//NULL
$valor = NULL;
var_dump($valor);
