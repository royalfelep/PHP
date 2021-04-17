<?php
$pessoas = array("pedro", "josé", "maria");
// Is_array verifica se é um array
is_array($pessoas) ? print_r("É um array") : print_r("Não é um array");
echo "<hr>";
$pessoas_de_lugares = array("Vila Madalena" => "pedro", "Vila Planalto" => "josé", "Vila Isabel" => "maria");
// array_keys cria um novo array transformando os indices em valores
$keys = array_keys($pessoas_de_lugares);
print_r($keys);
echo "<hr>";
// array_values cria um novo array com novos indices e mantendo os valores
$values = array_values($pessoas_de_lugares);
print_r($values);
echo "<hr>";

// array_merge cria um novo array com os dois arrays passados
$paises = array("brasil", "frança", "china");
$comidas = array("churrasco", "pizza", "sushi");
$mundo = array_merge($paises, $comidas);
print_r($mundo);
echo "<hr>";

// array_pop exclui o elemento na ultima posição do array
array_pop($mundo);
print_r($mundo);
echo "<br>";
// array_pop atribui a variavel o valor do ultimo elemento do array
$novomundo = array_pop($mundo);
print_r($novomundo);
echo "<hr>";

// array_shift exclui o elemento na primeira posição do array
array_shift($mundo);
print_r($mundo);
echo "<br>";
// array_shift atribui a variavel o valor do primeiro elemento do array
$novomundo = array_shift($mundo);
print_r($novomundo);
echo "<hr>";
