<?php
//define
//inalterável, de preferência utilizar letra maiúscula;
//constantes são sempre globais;
define("NOME", "Felipe");
define("IDADE", 21);
define("ESTADO", "DF"); 
echo "Meu nome é " .NOME. ', tenho ' .IDADE. ' e sou do ' .ESTADO. '.';
echo "<hr>";
//define arrays
define("PESSOAS", ['CLEBER','ROBINHO','NELSON']);
echo PESSOAS[0];
echo "<br>";
echo PESSOAS[1];
echo "<br>";
echo PESSOAS[2];
echo "<hr>";

function showName(){
    echo NOME;
    var_dump (NOME);
}

showName();