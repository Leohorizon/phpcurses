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

//escopo de variavel

$nome = "claugio";

//umEscopo
function teste(){
    global $nome;
    echo $nome;

}

function teste2(){
    global $anoNascimento;
    echo $anoNascimento;

}

teste();

teste2();


//operadores no php

//atribuição

$nome = "Hcode";

echo $nome . " eh bom";

$nome .= " eh bom";

echo $nome;

// mais igual e menos igual

$valorTotal =0;

$valorTotal +=100;

$valorTotal +=25;

echo $valorTotal;

$valorTotal -=15;

echo $valorTotal;

//modulo (resto)


$a = 10;
$b = 2;

echo "<br>";
echo $a + $b;

echo "<br>";
echo $a * $b;

echo "<br>";
echo $a / $b;

//resto
echo "<br>";
echo $a % $b;

//potencialização
echo "<br>";
echo $a ** $b;

//comparação
unset($a);
unset($b);

$a = 30.0;
$b = 30;
echo "<br>";
var_dump($a > $b);
echo "<br>";
var_dump($b > $a);
echo "<br>";
var_dump($a == $b);
echo "<br>";
var_dump($a === $b);
echo "<br>";
var_dump($a != $b);

//caso a seja maior numero sera 1
//caso b seja maior numero sera -1
//caso a e b sejam iguais o numero sera 0

unset($a);
unset($b);

$a = 10;
$b = 20;
echo "<br>";
var_dump($a <=> $b);

echo "<br>";
var_dump($b <=> $b);

echo "<br>";
var_dump($b <=> $a);

echo "<br>";

echo "teste teclado novo";


//Null colessin

unset($a);
unset($b);

$c = 100;

echo "<br>";
echo $a ?? $b ?? $c;


//incremento, para decremento a mesma logica porem com o --

$a = 10;
echo "<br>";
echo $a++;
echo "<br>";
echo $a;
echo "<br>";
echo ++$a;


//Parenteses

$Resultado = 10 + 3 /2;
$Resultado2 = (10 + 3) /2 >5 ||10 + 3 <20;

echo "<br>";
echo $Resultado;
echo "<br>";
echo $Resultado2;

var_dump($Resultado2);


?>
