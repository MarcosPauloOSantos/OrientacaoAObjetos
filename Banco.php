<?php

require_once 'C:\Users\mpmar\OneDrive\Documentos\php orientação obijeto\src\Conta.php';
require_once 'C:\Users\mpmar\OneDrive\Documentos\php orientação obijeto\src\Cpf.php';
require_once 'C:\Users\mpmar\OneDrive\Documentos\php orientação obijeto\src\Titular.php';




$marcos = new Titular (new CPF ('12550162994'),'marddd');
$primeiraConta = new Conta ($marcos);
$joyce = new Titular (new CPF ('1255016994'),'maddvdfr');
$segundaConta = new Conta ($joyce);
$pedro = new Titular (new CPF ('1255016294'),'mdwefwear');
$terceiraConta = new Conta ($pedro);

echo Conta:: RecuperarNumeroDeContas();
var_dump ($primeiraConta);
var_dump ($segundaConta);
var_dump ($terceiraConta);
//$novaconta ->depositar (500);

//echo $novaconta -> recuperarSaldo();

//var_dump ($novaconta);

