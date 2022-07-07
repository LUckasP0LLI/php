<?php
     class Pessoa{
      public $nome; // atributos
      public $idade; // atributos
      public $altura; // atributos
      public $peso; // atributos
      public $cpf; // atributos

           public function cadastro(){//metodos
           $this->nome = 'Lucas';
           $this->idade = 23;
           $this->altura = 1.7;
           $this->peso = 90;
           $this->cpf = '050.491.830-30';
           echo "$this->nome <hr>";
           echo "$this->idade <hr>";
           echo "$this->altura <hr>";
           echo "$this->peso <hr>";
           echo "$this->cpf <hr>";
}}

     class Humano extends Pessoa{
          public function cadastro(){
               $this->nome = 'Filho';
               $this->idade = 5;
               $this->altura = 1.2;
               $this->peso = 5.45;
               $this->cpf = null;
               echo "$this->nome <hr>";
               echo "$this->idade <hr>";
               echo "$this->altura <hr>";
               echo "$this->peso <hr>";
}}

$obj = new Humano;
$obj->cadastro();


?>