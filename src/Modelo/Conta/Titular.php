<?php

namespace Italo\Banco\Modelo\Conta;

use Italo\Banco\Modelo\Autenticavel;
use Italo\Banco\Modelo\Pessoa;
use Italo\Banco\Modelo\CPF;
use Italo\Banco\Modelo\Endereco;
class Titular extends Pessoa implements Autenticavel
{
    private $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent:: __construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }
}
