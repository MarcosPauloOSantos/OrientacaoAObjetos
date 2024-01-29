<?php

class Titular{
    private CPF $cpf;
   private string $nome;



public function __construct(CPF $cpf,$nome)
{
    $this -> cpf = $cpf ;
    $this -> nome = $nome;
    $this -> validaNome ($nome);
}

public function recuperaCpf(): string
{
    return $this->cpf->recuperaNumero();
}

 public function RecuperaNome(string $nome):void

    {
        $this -> nome = $nome;
    }
 private function validaNome ($nome)
    {
        if (strlen($nome) < 5 ) {
            echo "nome pracisa ter mais de 5 caracteres";
            exit();
        }
    }

}