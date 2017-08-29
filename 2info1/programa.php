<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 29/08/17
 * Time: 16:11
 */


    require 'classes/Conta.php';

    $minhaConta = new Conta();

    $minhaConta-> dono = "jefferson";
    $minhaConta-> numeroConta = "144236";
    $minhaConta-> saldo = 500.00;

    $minhaConta->deposita(555);



    $minhaConta-> saca(301);

if ($conseguiSacar == true) {
    echo 'consegui sacar \n';
} else {
    echo "saldo insuficiente para sacar \n";

}
    echo "O cliente { $minhaConta->dono } possui saldo de { $minhaConta->saldo}";

