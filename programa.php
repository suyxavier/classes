<?php
/**
 * Created by PhpStorm.
 * User: jefferson
 * Date: 30/08/17
 * Time: 16:11
 */


require 'classes/Conta.php';
require 'classes/Cliente.php';

$minhaConta = new Conta();

$clienteJunior = new Cliente();
$clienteJunior->setNome("João");
$clienteJunior->cpf = "987654321";
$clienteJunior->endereco = "Av. Getulio Vargas - Araquari";

$minhaConta->setDono($clienteJunior);


print_r($minhaConta);
