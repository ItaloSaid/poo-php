<?php

namespace Italo\Banco\Service;

use Italo\Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes
{
    private  $totalBonificacoes = 0;
    public function adicionaBonificacaoDe(Funcionario $funcionario)
    {
        $this->totalBonificacoes +=$funcionario->CalculaBonificacao();
    }

    public function recuperaTotal() : float
    {
        return $this->totalBonificacoes;
    }
}