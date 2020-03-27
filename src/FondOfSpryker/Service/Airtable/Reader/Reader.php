<?php

namespace FondOfSpryker\Service\Airtable\Reader;

use FondOfSpryker\Service\Airtable\Table\TableInterface;

class Reader implements ReaderInterface
{
    /**
     * @var \FondOfSpryker\Service\Airtable\Table\TableInterface
     */
    protected $table;

    /**
     * @param \FondOfSpryker\Service\Airtable\Table\TableInterface $table
     */
    public function __construct(TableInterface $table)
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
