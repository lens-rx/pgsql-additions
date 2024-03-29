<?php namespace LensRx\PgsqlAdditions\Database\Schema;

class Builder extends \Illuminate\Database\Schema\Builder {

    /**
     * Create a new command set with a Closure.
     *
     * @param  string   $table
     * @param  Closure  $callback
     * @return \LensRx\PgsqlAdditions\Database\Schema\Blueprint
     */
    protected function createBlueprint($table, Closure $callback = null)
    {
        return new Blueprint($table, $callback);
    }

}
