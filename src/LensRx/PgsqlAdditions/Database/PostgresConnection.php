<?php namespace LensRx\PgsqlAdditions\Database;

class PostgresConnection extends \Illuminate\Database\PostgresConnection {

    /**
     * Get the default schema grammar instance.
     *
     * @return \LensRx\PgsqlAdditions\Database\Schema\Grammars\Grammar
     */
    protected function getDefaultSchemaGrammar()
    {
        return $this->withTablePrefix(new Schema\Grammars\PostgresGrammar);
    }

    /**
     * Get a schema builder instance for the connection.
     *
     * @return \Illuminate\Database\Schema\Builder
     */
    public function getSchemaBuilder()
    {
        if (is_null($this->schemaGrammar)) { $this->useDefaultSchemaGrammar(); }

        return new Schema\Builder($this);
    }

}
