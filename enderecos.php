<?php

use Italo\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Petropolis','Qualquer', 'Minha rua', '71B');
$outroEndereco = new Endereco("Rio","Centro",'Qualquer','50');

echo $umEndereco->bairro;
exit();
echo $umEndereco . PHP_EOL;
echo $outroEndereco;