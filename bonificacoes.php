<?php


require_once 'autoload.php';

use Italo\Banco\Modelo\{Cpf};
use Italo\Banco\Modelo\Funcionario\{Funcionario, Gerente, Diretor, Desenvolvedor, EditorVideo};
use Italo\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Desenvolvedor('Italo',
    new CPF('123.456.789-10'),
    1000
);

$umFuncionario ->sobeDeNivel();

$umaFuncionaria = new Gerente('Patricia',
    new CPF('987.654.321-10'),
    3000
);

$umDiretor = new Diretor('Joao Pedro',
    new CPF('432.567.876-20'),
    5000
);

$umEditor = new EditorVideo(
    'Paulo',
    new CPF('456.765.879-10'),
    1500
);
$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();