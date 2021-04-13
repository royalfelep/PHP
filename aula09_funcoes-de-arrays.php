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
