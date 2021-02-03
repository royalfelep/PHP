<?php
$nome = "Felipe";
$a = 1;
$b = 2;
$c = 3;
//criando função para exibir a variável "$nome"
function showName(){
    //usando a tag "global" para acessar a variável "$nome". A função é um ambiente local. Como a variável foi criado fora dela, é uma variável global.
    global $nome;
    echo "$nome é top!";
}

showName();
echo "<hr>";

function showCity(){
    $cidade = "bsb";
    echo "$cidade";
}

showCity();
echo "<hr>";

function soma(){
    //acessar variavel diretamente do escopo global usando a tag "$globals['']"
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();

?>