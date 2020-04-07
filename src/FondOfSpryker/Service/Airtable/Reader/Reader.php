<?php

namespace FondOfSpryker\Service\Airtable\Reader;

use FondOf\Airtable\TableInterface;
use FondOfSpryker\Service\Airtable\Mapper\AirtableMapperInterface;
use Generated\Shared\Transfer\AirtableResponseDataTransfer;

class Reader implements ReaderInterface
{
    /**
     * @var \FondOf\Airtable\TableInterface
     */
    protected $table;

    /**
     * @var \FondOfSpryker\Service\Airtable\Mapper\AirtableMapperInterface
     */
    protected $mapper;

    /**
     * @param \FondOf\Airtable\TableInterface $table
     * @param \FondOfSpryker\Service\Airtable\Mapper\AirtableMapperInterface $mapper
     */
    public function __construct(TableInterface $table, AirtableMapperInterface $mapper)
    {
        $this->table = $table;
        $this->mapper = $mapper;
    }

    /**
     * @param string $recordId
     *
     * @return \Generated\Shared\Transfer\AirtableResponseDataTransfer
     */
    public function getRecord(string $recordId): AirtableResponseDataTransfer
    {
        return $this->mapper->mapSingleRecord(
            $this->table->getRecord($recordId)
        );
    }

    /**
     * @return \Generated\Shared\Transfer\AirtableResponseDataTransfer
     */
    public function getRecords(): AirtableResponseDataTransfer
    {
        return $this->mapper->mapMultipleRecords(
            $this->table->getRecords()
        );
    }
}
