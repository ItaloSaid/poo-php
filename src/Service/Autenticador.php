<?php

namespace Italo\Banco\Service;

use Italo\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha) : void
    {
        if($autenticavel->podeAutenticar($senha)) {
            echo "Ok. Usuario logado no sistema.";
        } else {
            echo "Ops. Senha incorreta!";
        }
    }
}