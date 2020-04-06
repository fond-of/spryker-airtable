<?php

namespace FondOfSpryker\Service\Airtable\Writer;

use FondOf\Airtable\TableInterface;

class Writer implements WriterInterface
{
    /**
     * @var \FondOf\Airtable\TableInterface
     */
    protected $table;

    /**
     * @param \FondOf\Airtable\TableInterface $table
     */
    public function __construct(TableInterface $table)
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
