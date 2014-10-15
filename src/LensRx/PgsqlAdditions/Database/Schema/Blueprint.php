<?php namespace LensRx\PgsqlAdditions\Database\Schema;

class Blueprint extends \Illuminate\Database\Schema\Blueprint {


    /**
     * Creates a new column of jsonb type
     *
     * @param $column
     * @return \Illuminate\Support\Fluent
     */
    public function jsonb($column)
    {
        return $this->addColumn('jsonb', $column, []);
    }

    /**
     * Creates a new column of uuid type
     *
     * @param $column
     * @return \Illuminate\Support\Fluent
     */
    public function uuid($column)
    {
        return $this->addColumn('uuid', $column, []);
    }

}
