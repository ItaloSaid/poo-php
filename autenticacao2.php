<?php

use Italo\Banco\Modelo\CPF;
use Italo\Banco\Modelo\Funcionario\Diretor;
use Italo\Banco\Modelo\Funcionario\Gerente;
use Italo\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Gerente(
    'Joao da Silva',
    new CPF('123.456.789-10'),
    10000
);

$autenticador -> tentaLogin($umDiretor,'4321');