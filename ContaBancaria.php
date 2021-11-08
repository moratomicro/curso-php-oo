<?php

    class ContaBancaria 
    {
        public $banco;        
        public $nomeTitular = 'Reine Alexandre Morato';
        public $numeroAgencia = '3467';
        public $numeroConta;
        public $saldo = 1000.00;    
    }

    $conta = new ContaBancaria();

    var_dump($conta->nomeTitular);
    var_dump($conta->numeroAgencia);

    $conta->saldo += 500.00;

    var_dump($conta->saldo);