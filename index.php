<?php
require_once 'Operacao.php';


    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $operacao = $_POST['operacao'];

    $calculadora = new Operacao();
    $calculadora->setValor1($valor1);
    $calculadora->setValor2($valor2);

    if ($operacao == "somar") {
        $resultado = $calculadora->somar();
    } else if ($operacao == "subtrair") {
        $resultado = $calculadora->subtrair();
    } else if ($operacao == "multiplicar") {
        $resultado = $calculadora->multiplicar();
    } else if ($operacao == "dividir") {
        $resultado = $calculadora->dividir();
    } else if ($operacao == "exponenciar") {
        $resultado = $calculadora->exponenciar();
    }
}
?>
