<?php

namespace FondOfSpryker\Service\Airtable\Writer;

use FondOf\Airtable\Table;

class Writer implements WriterInterface
{
    /**
     * @var \FondOf\Airtable\Table
     */
    protected $table;

    /**
     * @param \FondOf\Airtable\Table $table
     */
    public function __construct(Table $table)
    {
        $this->table = $table;
    }

    /**
     * @param array $fields
     *
     * @return string
     */
    public function writeRecord(array $fields): string
    {
        return $this->table->writeRecord($fields);
    }
}
