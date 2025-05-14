<?php
    class Conta{
        public $Nome;
        public $Cpf;
        private $Saldo;

        public function Sacar($valor){
            if($valor > $this->Saldo){
                $resultado = "Saldo Insuficiente";
                return $resultado;
            }else{
                $this->Saldo = $this->Saldo - $valor;
                $resultado = "Saldo atualizado para R$" . $this->Saldo;
                return $resultado;
            }
        }

        public function Depositar($valor){
            $this->Saldo = $this->Saldo + $valor;
            return $this->Saldo;
        }
        public function ConsultarSaldo(){
            echo "NOME: " . $this->Nome . "<br>";
            echo "CPF: " . $this->Cpf . "<br>";
            echo "Saldo Atual: " . $this->Saldo . "<br>";
        }
    }
?>