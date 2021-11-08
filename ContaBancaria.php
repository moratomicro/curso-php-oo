<?php

    class ContaBancaria 
    {
        private $banco;        
        private $nomeTitular;
        private $numeroAgencia;
        private $numeroConta;
        private $saldo;

        public function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo)
        {
            $this->banco = $banco;
            $this->nomeTitular = $nomeTitular;
            $this->numeroAgencia = $numeroAgencia;
            $this->numeroConta = $numeroConta;
            $this->saldo = $saldo;
        }

        public function obterSaldo()
        {
            return 'Seu saldo atual é: R$ ' .$this->saldo. ',00';
        }

        public function depositar($valor)
        {
            $this->saldo += $valor;
            return 'Depósito de R$ ' .$valor. ' realizado com sucesso!';
        }

        public function sacar($valor)
        {
            $this->saldo -= $valor;
            return 'Saque de R$ ' .$valor. ' realizado com sucesso!';
        }
    }

    $conta1 = new ContaBancaria(
        'Caixa Economica', // banco
        'Reine Alexandre Morato', // nomeTitular
        '8244', // numeroAgencia
        '57354-12', // numeroConta
        0 // saldo
    );

    var_dump($conta1);

    $conta2 = new ContaBancaria(
        'Banco do Brasil', // banco
        'Ana Paula Da Silva', // nomeTitular
        '124456', // numeroAgencia
        '1234457-21', // numeroConta
        300.00 // saldo
    ); 
    
    /*var_dump($conta2);

    echo $conta->obterSaldo(); // 0

    echo "\n";

    echo $conta->depositar(300.00);

    echo "\n";

    echo $conta->obterSaldo(); // 300.00

    echo "\n";

    echo $conta->sacar(150.00);
    
    echo "\n";

    echo $conta->obterSaldo(); // 150.00*/