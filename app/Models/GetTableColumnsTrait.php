<?php

namespace App\Models;

/**
 * Trait de retorno de colunas de tabela
 */
trait GetTableColumnsTrait
{
    /**
     * Retorna as colunas de tabelas
     *
     * @return array
     */
    public function getTableColumns()
    {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }
}
