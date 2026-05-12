<?php
    class Usuario {
        //Atributo
        private $nome;
        private $email;
        private $emprestimos = [];

        //Método construtor
        public function __construct($nome, $email){
            $this->nome = $nome;
            $this->email = $email;
        }

        public function adicionarEmprestismos(Emprestimo $emprestimo){
            $this->emprestimos[] = $emprestimo;
        }

        //Método de encapsulamento
        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setEmail($email){
            $this->email = $email;
        }

    }












