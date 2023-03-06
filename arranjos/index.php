<?php

echo "ARRAY METHOD 1<br><br>";

$frutas = array("maçã", "laranja", "banana", "mamão");

foreach($frutas as $fruta) {
    echo "$fruta\t";
}

echo ("<br><br><br><br>ARRAY METHOD 2<br><br>");



$frutas2 = array(
    0 => "Maçã", 
    1 => "Laranja", 
    2 => "Mamão", 
    3 => "Banana",
);

echo nl2br ($frutas2[0]."\n");
echo nl2br ($frutas2[1]."\n");
echo nl2br ($frutas2[2]."\n");
echo nl2br ($frutas2[3]."\n");



echo ("<br><br><br><br>ARRAY METHOD 2 - ARRAYS ASSOCIATIVOS");
echo ("<br>Os arrays possuem uma chave de acess opara cada posição<br><br>");


$carro['marca'] = 'Volksvagem';
$carro['modelo'] = 'Fusca';
$carro['cor'] = 'verde';
$carro['preco'] = 5500.00;
$carro['preco'] -= 500;


echo nl2br ($carro["marca"]."\n");
echo nl2br ($carro["modelo"]."\n");
echo nl2br ($carro["cor"]."\n");
echo nl2br ($carro["preco"]."\n");




echo ("<br><br><br><br>ARRAY METHOD 3 - ARRAYS MULTIDIMENSIONAL");
echo ("<br>Arrays aninhados<br><br>");


$aleatorios = array (
    'Fusca' => 
    array(
        'ano' => 1977,
        'marca' => 'Volkswagen',
        'acessorios' => 'Cheiro de',
    ),
    'Kombi' => 
    array(
        'ano' => 1975,
        'marca' => 'Gol Fusca Turbinado',
        'acessorios' => 'Pneu queimado de',
    ),
    'Belina' => 
    array (
        'ano' => 1981, 
        'marca' => 'Ford',
        'acessorios' => 'carburador furado',

    )
);

echo nl2br ($aleatorios['Fusca']['acessorios']."\t");
echo nl2br ($aleatorios['Kombi']['acessorios']."\t");
echo nl2br ($aleatorios['Belina']['acessorios']."\t");

echo ("<br><br><br><br>Exercícios propostos (sugestão de consultar funcionalidades do PHP):");
echo ("<br><br> 4. Escrever código que mostre os elementos de um arranjo fora da ordenação dos índices dos elementos através do uso do “sort”.<br><br>");


sort($frutas2);

foreach ($frutas2 as $key => $fruta) {
    echo "fruits[" . $key . "] = " . $fruta . "<br><br>";
}


echo ("<br><br> 5. Escrever outra versão do código proposto acima, retornando a quantidade de elementos do arranjo através do uso do “count”.<br><br>");

echo count($frutas2) . " elementos.";



echo ("<br><br><br><br> 6. Ainda considerando o arranjo do exercício 4, extrair uma amostra de elementos do mesmo através do uso do “array_slice” . <br><br>");

$output = array_slice($frutas, 2);

foreach ($output as $key => $fruit) {
    echo "fruits[" . $key . "] = " . $fruit . "<br><br>";
}

?>