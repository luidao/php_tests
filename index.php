<?php

$pessoa = [
    "nome" => "Jon",
    "sobrenome" => "Snow",
    "idade" => 27,
    "passatempo" => ["Netflix", "Futebol", "Música"]
];

// echo "<pre>";
// var_dump($pessoa); 

// echo "========";

$pessoa["idade"] = 25;

// echo "<pre>";
// var_dump($pessoa); 

$pessoa["endereço"] = "Winterfell";

// echo "<pre>";
// var_dump($pessoa); 

// echo "=======";

$pessoa["passatempo"][] = "coding";

// echo "<pre>";
// var_dump($pessoa); 

echo "Condicionais <br>";

$a = 42;
$b = 27;

if ($a > $b) {
    echo "o maior é $a";
} else {
    echo "o maior é $b";
}

echo "exercicio 2: <br>";

$numeroAleatorio = rand(1, 5);

if ($numeroAleatorio == 3 || $numeroAleatorio == 5) {
    echo "Numero da sorte!";
} else {
    echo "não é número da sorte :,(";
}

if ($numeroAleatorio != 3) {
    echo "<br>O numero não é 3!";
} else {
    echo "<br> $numeroAleatorio <br>";
}

$numeroAleale = rand(1, 100);

if ($numeroAleale > 50) {
    echo "<br>o numero eh maior que 50";
} else {
    echo "<br>o numero eh menor que 50";
}

echo "<br>=====LOGIN=====";

$usuario = "admin";
$senha = "123";

if ($usuario == "admin" && $senha == "123") {
    echo "<br>Bem Vindo";
} else {
    echo "<br>putz kk";
}

$number = rand(1, 10);

echo ($number % 2 == 0) ? "<br>O numero eh par" : "<br>O numero eh impar<br>";

// no if normal ficaria assim:
    // if ($number % 2 == 0) {
    //     echo "o numero eh par"
    // } else {
    //     echo "o numero eh impar";
    // }

$nota = rand(1, 10);
switch ($nota) { 
    case 1: 
    echo "aluno reprovado";
    break;
    case 2:
    echo "aluno reprovado";
    break;
    case 3:
    echo "aluno reprovado";
    break;
    case 4:
    echo "na risca";
    break;
    case 5:
    echo "na risca";
    break;
    case 6: 
    echo "bom";
    break;
    case 7:
    echo "bom";
    break;
    case 8:
    echo "bom";
    break;
    case 9:
    echo "bom";
    break;
    case 10:
    echo "excelente";
    default:
    echo "numero invalido sururu";
    break;
}

echo "<br>=======loop=======<br>";

echo "exercicio 1:<br>";

for ($i = 1; $i <= 10; $i++) {
    echo "2 x $i =". (2 * $i) . "<br>";
}

$num = 100;
while ($num >= 85) {
    echo "$num <br>";
    $num--;
}

echo "-----counter-----<br>";

$counter = 1;

while ($counter <= 5) {
    echo $counter * 2 . "<br>";
    $counter++;
}

echo "<br>---moedas---<br>";

$cara = 0; //contador de quantas vezes deu cara
$jogadas = 0; //contador de jogadas

// while ($cara <= 5) {
//     $moeda = rand (0,1); //cara é 1
//     echo "<br> moeda: $moeda";
//     if ($moeda == 1) {
//         $cara++;
//     } else {
//         $cara = 0;
//     }
//     $jogadas++;
// }

// echo "foram $jogadas jogadas";

echo "<br>ex 5 ==============<br>";

$nomes = ["joao", "paula", "maria", "brubru", "sheesh"];

//     for ($i = 0; $i < count($nomes); $i++) {
//         echo $nomes[$i];
//     }

$i = 0;
// while ($i < count($nomes) ) {
//     echo $nomes[$i];
//     $i++;
// }

// do {
//     echo $nomes[$i];
//     $i++;
// } while ($i < count($nomes));

foreach ($nomes as $valor){
    echo $valor;
    echo "<br>";
}

?>