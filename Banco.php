<?php

require_once 'C:\Users\mpmar\OneDrive\Documentos\php orientação obijeto\src\Conta.php';
require_once 'C:\Users\mpmar\OneDrive\Documentos\php orientação obijeto\src\Cpf.php';
require_once 'C:\Users\mpmar\OneDrive\Documentos\php orientação obijeto\src\Titular.php';




$marcos = new Titular (new CPF ('125.501.629-94'),'marddd');
$primeiraConta = new Conta ($marcos);
$joyce = new Titular (new CPF ('123.333.333-33'),'maddvdfr');
$segundaConta = new Conta ($joyce);
$pedro = new Titular (new CPF ('333.333.333-33'),'mdwefwear');
$terceiraConta = new Conta ($pedro);

echo Conta:: RecuperarNumeroDeContas();
var_dump ($primeiraConta);
var_dump ($segundaConta);
var_dump ($terceiraConta);
//$novaconta ->depositar (500);

//echo $novaconta -> recuperarSaldo();

//var_dump ($novaconta);

