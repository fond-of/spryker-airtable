<?php

namespace FondOfSpryker\Service\Airtable\Writer;

use FondOf\Airtable\TableInterface;
use FondOfSpryker\Service\Airtable\Mapper\AirtableMapperInterface;
use Generated\Shared\Transfer\AirtableRequestDataTransfer;
use Generated\Shared\Transfer\AirtableResponseDataTransfer;

class Writer implements WriterInterface
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
     * @param \Generated\Shared\Transfer\AirtableRequestDataTransfer $airtableRequestDataTransfer
     *
     * @return \Generated\Shared\Transfer\AirtableResponseDataTransfer
     */
    public function writeRecord(AirtableRequestDataTransfer $airtableRequestDataTransfer): AirtableResponseDataTransfer
    {
        return $this->mapper->mapSingleRecord(
            $this->table->writeRecord($airtableRequestDataTransfer->getFields())
        );
    }
}
