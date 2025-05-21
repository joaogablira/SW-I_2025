<?php
    class Produto{
        private $Nome;
        private $Preco;
        private $Quantidade;
        
        public function __construct($Nome, $Preco = 0.0, $Quantidade = 0){
            $this->Nome = $Nome;
            $this->Preco = $Preco;
            $this->Quantidade = $Quantidade;
        }

        public function getNome(){
            return $this->Nome = $Nome;
        }
        public function setNome(){
            $this->Nome;
        }

        public function getPreco(){
            return $this->Preco = $Preco;
        }
        public function setPreco(){
            $this->Preco;
        }

        public function adiconarEstoque($Quantidade){
            $this->Quantidade += $Quantidade;
        }
        public function RemoverEstoque($Quantidade){
            $this->Quantidade -= $Quantidade;
        }

        public function mostrarDetalhes(){
            echo "NOME: {$this->Nome} <br>";
            echo "Preço: {$this->Preco} <br>";
            echo "Estoque: {$this->Quantidade} <br>";
            echo "<hr>";
        }
    }

?>

