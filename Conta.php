<?php

class Conta
{
   private $Titular;
   private $saldo =0 ;
   private static $NumeroDeContas =0 ;
   

   public function __construct ($Titular)
   {
    $this -> saldo =0;
    $this -> Titular = $Titular;
    
    Conta:: $NumeroDeContas ++;
    
   }

    public function __destruct ()
    {
        self :: $NumeroDeContas--;
    }

   public function sacar (float $valorASacar):void 
   {
    if ($valorASacar > $this->saldo)
    {
        echo "saldo insuficiente";
        return;
    } 
        $this ->saldo-= $valorASacar;
    
    }

    public function depositar (float $valorADepositar):void
    {
        if ($valorADepositar<0){
            echo "esse valor precisa ser positivo";
            return;
        } 
            $this -> saldo += $valorADepositar;
        
    }
    public function trasferir (float $valorATrasferir, Conta $contaDestino):void
    {
        if ($valorATrasferir>$this -> saldo){
            echo "saldo indisponivel";
            return;
        } 
            $this -> sacar ($valorATrasferir);
            $contaDestino -> depositar ($valorATrasferir);
        
    } 

    public function recuperarSaldo():float
    {
       return $this-> saldo;
    }
   
    public static function RecuperarNumeroDeContas():int
    {
        return Conta::$NumeroDeContas;
    }
    public function RecuperaNomeTitular():string
    {
        return $this -> Titular -> RecuperaNome();
    }
    public function RecuperaCpfTitular():string
    {
       return $this -> Titular -> RecuperaCpf();
    }
}
   /*
    public function defineCpfTitular(string $cpf):void
    {
        $this -> cpfTitular = $cpf;
    }
    public function defineNomeTitular(string $nome):void
    {
        $this -> nomeTitular = $nome;
    }*/
