<?php

    require_once "Funcionario.php";
    require_once "data.php";

    $dataEntrada = new Data();
    $dataEntrada-> dia = 4;
    $dataEntrada-> mes = 9;
    $dataEntrada-> ano = 2001;


    $seguranca = new Funcionario();

    $seguranca->departamento = "Segurança Cofre";
    $seguranca->salario = 3000;
    $seguranca->CPF = "09889876";
    $seguranca-> setDataEntrada($dataEntrada);
    $seguranca->recebeAumento(0.5);

    $seguranca->mostra();




