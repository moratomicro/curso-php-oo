<?php

function divisao(array $numero)
{
    if ($numero['num1'] = 0 || $usuario['num2'] = 0 || empty($numero['num1']) || empty($numero['num2'])) {
        throw new Exception("Os valores não podem se nulos ou 0!");
    }

    return true;
}

$numero = [
    'num1' => 10,
    'num2' => 5,
];

$status = false;

try {
    $status = divisao($numero);
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo "\nStatus da Operação: " . (int)$status; // cast
    die("\nA divisão de " .$numero['num1']. "/" .$numero['num2']. " = " .$numero['num1']/$numero['num2']);
}