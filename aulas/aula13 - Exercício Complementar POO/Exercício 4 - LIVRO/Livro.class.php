<?php
    class Livro{
        private $Titulo;
        private $Autor;
        private $Disponivel;

        public function __construct($titulo, $autor, $disponivel = true){
            $this->Titulo = $titulo;
            $this->Autor = $autor;
            $this->Disponivel = $disponivel;
        }

        public function Emprestar(){
            if($this->Disponivel == True){
                $this->Disponivel = False;
                echo "O livro {$this->Titulo} de {$this->Autor} foi emprestado com sucesso!";
            }else{
                echo "O livro {$this->Titulo} não está disponível e/ou já foi emprestado.";
            }            
        }
        
        public function Devolver(){
            $this->Disponivel = True;
            echo "Obrigado pela devolução do livro {$this->Titulo} de {$this->Autor}!!";
        }

        public function getTitulo(){
            return $this->Titulo;
        }
        public function getDisponivel(){
            return $this->Disponivel;
        }

        public function ExibirStatus(){
            $titulo_livro = $this->getTitulo();

            if($this->getDisponivel() == true){
                $disponivel_livro = "Disponível";
            }else{
                $disponivel_livro = "Emprestado";
            }
            
            return "O livro $titulo_livro de {$this->Autor} está $disponivel_livro";
        }
    }

?>
