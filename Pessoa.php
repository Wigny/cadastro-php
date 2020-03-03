<?php

class Pessoa
  {
    private $nome;

    private $sobrenome;

    
    public function __construct($nome = null, $sobrenome = null)
    {
      $this->nome = $nome;
      $this->sobrenome = $sobrenome;
    }
    

    public function setNome($nome)
    {
      $this->nome = $nome;
    }

    public function setSobrenome($sobrenome)
    {
      $this->sobrenome = $sobrenome;
    }

    public function getNomeCompleto()
    {
      return "{$this->nome} {$this->sobrenome}";
    }

    public function receiveData($post)
    {
      $this->nome = $post["nome"];
      $this->sobrenome = $post["sobrenome"];
      $data_nasc = $post["data_nasc"];
    }
  }