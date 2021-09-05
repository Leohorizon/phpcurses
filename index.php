<?php

//aula 1
echo "<strong>Meu primeiro codigo php</strong><br/>";
echo "editado via git hub<br/>";

//variaveis
$nome = "Hcode";
//criar variaveis
echo $nome;
echo "<br/>";
var_dump($nome);
echo "<br/>";

//diferenciar variaveis
$anoNascimento = 1999;

echo $anoNascimento;
echo "<br/>";
//limpando a variavel
unset($anoNascimento);
$anoNascimento = 1998;
//isset verifica se a variavel existe
    if(isset($anoNascimento)){
        echo $anoNascimento;
    }

$sobrenome = "Henrique";
$nome = "Leonardo";
//processo de concatenar variaveis
$nomeCompleto = $nome ." ". $sobrenome;

    echo $nomeCompleto;

//tipos especiais

$site = 'www.hcode.com.br';

$ano = 1990;
$salario = 5000.99;
$bloqueado= false;
//arrey
$frutas = array("abacaxi", "manga", "maca");

echo $frutas[1];

$nascimento = new dateTime();

echo "<br/>";

var_dump($nascimento);

$arquivo = fopen("exemplo-03","w");

var_dump($arquivo);

//nulo e vazio

$nulo = NULL;
$vazio ="";

//super globais

$nome = (int)$_GET["a"];

var_dump($nome);

$ip = $_SERVER["SCRIPT_NAME"];



echo $ip;










?>
