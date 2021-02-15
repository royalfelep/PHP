<?php
//criando arrays numéricos
$cervejas = array("brahma", "heineken", "eisenbahn");
$cervejas[] = "petra";
$cervejas[10] = "skol";
print_r ($cervejas);
echo "<br>";
print $cervejas[3];
echo "<hr>";
//outra forma de criar array
$hospitais = array();
$hospitais = ["anchieta", "hrt", "hrsan", "hub"];
$hospitais[] = "df star";
$hospitais[] = "hran";
print_r($hospitais);
echo "<br>";
echo $hospitais[4];
echo "<hr>";

//count
echo count($cervejas)." | numero de itens registrados na string cerveja.";
echo "<br>";
echo count($hospitais)." | numero de itens registrados na string hospitais.";;
echo "<br>";
$totalhospitais = count($hospitais);
print($totalhospitais." | numero de itens registrados na string hospitais e armazenados na variável totalhospitais.");
echo "<hr>";

//percorrer array com "foreach" (jeito pratico)
echo "<u>foreach:</u><br>";
foreach($hospitais as $nome){
    echo $nome."<br>";
}
echo "<hr>";

//percorrer array com laço de repetição "while"
echo "<u>while:</u><br>";
$i=0;
while($i<count($hospitais)){
    echo $hospitais[$i]."<br>";
    $i++;
}
echo "<hr>";

//percorrer array com lado de repetição "for"
echo "<u>for:</u><br>";
for($i=0;$i<count($hospitais);$i++){
    echo $hospitais[$i]."<br>";
}
echo "<hr>";

//criando arrays associativos
$pessoa = array("nome"=>"Felipe", "cidade"=>"brasília", "altura"=>1.80);
$pessoa["hobbie"] = "ouvir música";
print_r($pessoa);
echo "<br>";
echo $pessoa['nome']."<br>";
echo $pessoa["hobbie"];
echo "<hr>";

//percorre array com foreach, retornando indice e valor
foreach($pessoa as $indice => $indice_valor){
    echo "$indice".":"." $indice_valor"."<br>";
}
echo "<hr>";

//criando array multidimensional
$estados_brasil = array(
    "norte"=>array("acre","amazonas","pará"),
    "nordeste"=>array("bahia", "ceará", "pernambuco"), 
    "centro_oeste"=>array("primeiro"=>"distrito_federal", "segundo"=>"goiás", "terceiro"=>"mato_grosso")
    );

print_r ($estados_brasil);
echo "<br><br>";
echo ($estados_brasil["norte"][1]);
echo "<br><br>";

//printa o nome do indice e o valor dele do array especificado
foreach($estados_brasil["centro_oeste"] as $indice => $indice_valor ){
    echo "$indice".":"." $indice_valor"."<br>";
}

?>