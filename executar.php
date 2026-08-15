<?php
require_once 'Operacao.php';

$op1 = new Operacao();

$op1->setValor1($_POST['valor1']);
$op1->setValor2($_POST['valor2']);
$operacao = $_POST['operacao'];

if ($operacao == 'somar') {
    $resultado = $op1->somar();
    $nome = "Soma";
} else if ($operacao == 'subtrair') {
    $resultado = $op1->subtrair();
    $nome = "Subtração";
} else if ($operacao == 'multiplicar') {
    $resultado = $op1->multiplicar();
    $nome = "Multiplicação";
} else if ($operacao == 'dividir') {
    $resultado = $op1->dividir();
    $nome = "Divisão";
} else if($operacao == 'exponenciar') {
    $resultado = $op1->exponenciar();
    $nome = "Exponenciação";
}

echo "Valor1: " . $op1->getValor1() . "<br>";
echo "Valor2: " . $op1->getValor2() . "<br><br>";
echo "$nome: $resultado";
?>
