<?php

/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 29/08/17
 * Time: 16:00
 */
class Conta

{
    public $numerConta;
    public $dono;
    public $saldo;

    public function deposita(float $valor)
    {
        $this->saldo += $valor;


    }

    public function saca(float $valor){
        if ($valor <= $this -> saldo) {
            $this->saldo -= $valor;
            return true;

        } else {
             return false;
        }
    }

}
