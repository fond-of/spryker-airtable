<?php

namespace FondOfSpryker\Service\Airtable\Writer;

use Codeception\Stub\Expected;
use Codeception\Test\Unit;
use FondOf\Airtable\Table;
use FondOfSpryker\Service\Airtable\Mapper\AirtableResponseMapper;
use Generated\Shared\Transfer\AirtableRequestDataTransfer;
use Generated\Shared\Transfer\AirtableResponseDataTransfer;

class WriterTest extends Unit
{
    /**
     * @return void
     */
    public function testWriteRecord()
    {
        $table = $this->make(Table::class, [
            'writeRecord' => Expected::once('success'),
        ]);

        $mapper = $this->make(AirtableResponseMapper::class, [
            'mapSingleRecord' => Expected::once(new AirtableResponseDataTransfer()),
        ]);

        $writer = new Writer($table, $mapper);
        $requestTransfer = new AirtableRequestDataTransfer();
        $result = $writer->writeRecord($requestTransfer);

        $this->assertInstanceOf(AirtableResponseDataTransfer::class, $result);
    }
}
