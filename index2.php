<?php
echo "/////////////////////////////////////////////";
echo "<br>";
echo "<h3>Strings</h3><br>";

//diferenca de aspas duplas e simples
$nome = "Hcode";
$nome2 = 'treinamento hcode';

var_dump($nome, $nome2);

echo "<br>";
echo "esse é o treinamto $nome<br>";
echo 'esse é o treinamto $nome<br>';

//funcoes uteis em strings

//maiusculo
echo strtoupper($nome2);
echo "<br>";
//minusculo
echo strtolower($nome);
echo "<br>";
//primeira letra de cada plavra maiuscula
echo ucwords($nome2);
echo "<br>";
//primeira letra da frase maiuscula
echo ucfirst($nome2);
echo "<br>";

//trocar letras e caracteres

$empresa = "Hcode";

$empresa = str_replace("o", "1", $empresa);

echo $empresa;

//localização da String

$frase = "A repetição é a mãe da retenção";
$palavra = "mãe";

//guarda quantos caracteres tem ate chegar na palavra desejada
$q = strpos($frase, $palavra);

//guarda a frase ate a palavra desejada ps. nao mostra a palavra
$texto = substr($frase, 0, $q);

var_dump($q);
var_dump($texto);

//guarda a frase depois da palavra desejada ps. nao mostra a palavra
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));


var_dump($texto2);








?>