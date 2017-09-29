<?php

/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 29/09/17
 * Time: 10:59
 */
class data

{

    public $dia;
    public $mes;
    public $ano;

    public function formatada() {
            return "$this->dia/$this->mes/$this->ano";
    }
}