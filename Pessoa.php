<?php

class Pessoa
{
  private $nome;
  private $email;
  private $fone;

  public function __construct($nome = null, $email = null, $fone = null)
  {
    $this->nome = $nome;
    $this->email = $email;
    $this->fone = $fone;
  }

  public function getNome()
  {
    return $this->nome;
  }

  public function setNome($nome)
  {
    $this->nome = $nome;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function setFone($fone)
  {
    $this->fone = $fone;
  }

  public function receiveData($post)
  {
    $this->nome = $post["nome"];
    $this->email = $post["email"];
    $this->fone = $post["fone"];
  }
}
