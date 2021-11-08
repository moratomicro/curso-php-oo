<?php

    class Venda 
    {
        private $data;        
        private $produto;
        private $quantidade;
        private $valorTotal;
        

        public function __construct($data, $produto, $quantidade, $valorTotal)
        {
            $this->data = $data;
            $this->produto = $produto;
            $this->quantidade = $quantidade;
            $this->valorTotal = $valorTotal;
        }

        public function obterVenda()
        {

            return "Data da venda: ".$this->data. 
                    "\nProduto: " .$this->produto. 
                    "\nQuantidade: " .$this->quantidade. " cursos\nValor total da venda: R$" .$this->valorTotal. ",00 \n";
        }        
    };

    $venda = new Venda(
        '08/11/2021', // data
        'Curso de PHP', // produto
        10, // quantidade
        1200.00 // valorTotal
    );

    echo $venda->obterVenda();