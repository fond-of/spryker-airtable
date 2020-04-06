<?php

namespace FondOfSpryker\Service\Airtable\Reader;

use FondOf\Airtable\TableInterface;

class Reader implements ReaderInterface
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
