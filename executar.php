<?php
require_once 'Operacao.php';

$op1 = new Operacao();

$op1->setValor1($_POST['valor1']);
$op1->setValor2($_POST['valor2']);
$operacao = ($_POST['operacao']);

if ($operacao == 'somar') {
    $op1->somar();

} else if ($operacao == 'subtrair') {
    $op1->subtrair();

} else if ($operacao == 'multiplicar') {
    $op1->multiplicar();

} else if ($operacao == 'dividir') {
    $op1->dividir();

} else if($operacao == 'exponenciar') {
    $op1->exponenciar();
}

?>
