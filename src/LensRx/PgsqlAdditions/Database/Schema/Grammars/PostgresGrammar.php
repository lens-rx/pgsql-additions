<?php namespace LensRx\PgsqlAdditions\Database\Schema\Grammars;

use Illuminate\Support\Fluent;

class PostgresGrammar extends \Illuminate\Database\Schema\Grammars\PostgresGrammar {

    /**
     * Create the column definition for a jsonb type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeJsonb(Fluent $column)
    {
        return "jsonb";
    }

    /**
     * Create the column definition for a jsonb type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeUuid(Fluent $column)
    {
        return "jsonb";
    }

}
