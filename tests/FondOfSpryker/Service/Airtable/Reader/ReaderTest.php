<?php

namespace FondOfSpryker\Service\Airtable\Reader;

use Codeception\Stub\Expected;
use Codeception\Test\Unit;
use FondOf\Airtable\Table;
use FondOfSpryker\Service\Airtable\Mapper\AirtableResponseMapper;
use Generated\Shared\Transfer\AirtableResponseDataTransfer;

class ReaderTest extends Unit
{
    /**
     * @return void
     */
    public function testGetRecordById()
    {
        $table = $this->make(Table::class, [
            'getRecord' => Expected::once('foobar'),
        ]);
        $mapper = $this->make(AirtableResponseMapper::class, [
            'mapSingleRecord' => Expected::once(new AirtableResponseDataTransfer()),
        ]);

        $reader = new Reader($table, $mapper);
        $record = $reader->getRecord('foobar');

        $this->assertInstanceOf(AirtableResponseDataTransfer::class, $record);
    }

    /**
     * @return void
     */
    public function testGetRecords()
    {
        $table = $this->make(Table::class, [
            'getRecords' => Expected::once('foobar'),
        ]);

        $mapper = $this->make(AirtableResponseMapper::class, [
            'mapMultipleRecords' => Expected::once(new AirtableResponseDataTransfer()),
        ]);

        $reader = new Reader($table, $mapper);
        $record = $reader->getRecords();

        $this->assertInstanceOf(AirtableResponseDataTransfer::class, $record);
    }
}
