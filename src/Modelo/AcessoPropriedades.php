<?php

namespace Italo\Banco\Modelo;

trait AcessoPropriedades
{
    public function __get($nomeAtributo)
    {
        $metodo =  'recupera' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }

}