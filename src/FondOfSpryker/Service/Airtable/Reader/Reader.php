<?php

namespace FondOfSpryker\Service\Airtable\Reader;

use FondOf\Airtable\Table;

class Reader implements ReaderInterface
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
     * @param string $recordId
     *
     * @return string
     */
    public function getRecord(string $recordId): string
    {
        return $this->table->getRecord($recordId);
    }

    /**
     * @return string
     */
    public function getRecords(): string
    {
        return $this->table->getRecords();
    }
}
