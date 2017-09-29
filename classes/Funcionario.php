<?php

/**
 * Created by PhpStorm.
 * User: jefferson
 * Date: 27/09/17
 * Time: 15:57
 */
class Funcionario
{
    public $departamento;
    public $salario;
    public $dataEntrada;
    public $CPF;
    const  SALARIO_DECIMO_TERCEIRO_E_FERIAS = 13.3;

    public function recebeAumento(float $aumentoPercentual){

        $this->salario += $this->salario * $aumentoPercentual;

    }

    public function calculaGanhoAnual(): float {

        $ganhoAnual = $this->salario * self::SALARIO_DECIMO_TERCEIRO_E_FERIAS;
        return $ganhoAnual;

    }

    public function setDataEntrada(Data $dataEntrada)
    {
        $this->dataEntrada = $dataEntrada;
    }

    public function mostra(){
        echo "O funcionario {$this->CPF} trabalha no departameto {$this->departamento} com salario de {$this->salario} \n";
        echo "Seu ganho anual é de ".$this->calculaGanhoAnual();
        echo "Sua data de estrada foi 
        {$this-> dataEntrada->formatada()}";

        echo "\n\n\n";
    }

}

