<?php
    class Aluno{

        private $Nome;
        private $Nota1;
        private $Nota2;

        public function __construct($nome,$n1,$n2){
            $this->Nome = $nome;
            $this->Nota1 = $n1;
            $this->Nota2 = $n2;
        }

        public function getNome(){
            return $this->Nome;
        }

        public function getMedia(){
            $media = ($this->Nota1 + $this->Nota2)/2;
            return $media;
        }

        public function verificarSituacao(){
            $media = $this->getMedia();
            if ($media >= 7){
                $resultado = "Aprovado <br><hr>";
                return $resultado;
            }else {
                $resultado = "Reprovado <br><hr>";
                return $resultado;
            } 
        }

        public function Notas(){
            echo "Nome do aluno: ". $this->Nome ."<br>";
            echo "Primeira Nota: ". $this->Nota1 ."<br>";
            echo "segunda Nota: ". $this->Nota2 ."<br>";
            echo "Resultado: ". $this->verificarSituacao() ."<br>";
            echo "<hr>";
        } 
    }
?>