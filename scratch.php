<?php

use Italo\Banco\Modelo\CPF;
use Italo\Banco\Modelo\Funcionario\Desenvolvedor;

$desenvolvedor = new Desenvolvedor('Italo', new CPF('123.456.789-10'), 2000);
$desenvolvedor->nome;