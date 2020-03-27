<?php

namespace FondOfSpryker\Service\Airtable\Writer;

use FondOf\Airtable\Table;
use FondOfSpryker\Service\Airtable\Table\TableInterface;

class Writer implements WriterInterface
{
    /**
     * @var FondOfSpryker\Service\Airtable\Table\TableInterface
     */
    protected $table;

    /**
     * @param FondOfSpryker\Service\Airtable\Table\TableInterface $table
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
