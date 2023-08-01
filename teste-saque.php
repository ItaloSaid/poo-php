<?php

use Italo\Banco\Modelo\Conta\{Conta, ContaCorrente, ContaPoupanca, Titular};
use Italo\Banco\Modelo\{Endereco,CPF};

require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'),
        'Italo Said',
        new Endereco('Eusebio', 'Teste', 'City', '37')
    )
);

$conta-> transfere();
$conta ->deposita(500);
$conta ->saca(100);

echo $conta -> recuperaSaldo();
