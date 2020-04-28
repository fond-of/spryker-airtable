<?php

namespace FondOfSpryker\Service\Airtable\Mapper;

use Codeception\Test\Unit;
use Generated\Shared\Transfer\AirtableResponseDataTransfer;

class AirtableResponseMapperTest extends Unit
{
    /**
     * @return void
     */
    public function testMapSingleRecord()
    {
        $json = <<<EOL
{
  "createdTime": "foobar",
  "id": "foobar",
  "fields": []
}
EOL;

        $mapper = new AirtableResponseMapper();
        $result = $mapper->mapSingleRecord($json);

        $this->assertInstanceOf(AirtableResponseDataTransfer::class, $result);
    }

    /**
     * @return void
     */
    public function testMapMultipleRecords()
    {
        $json = <<<EOL
{
  "offset": "foobar",
  "records": []
}
EOL;

        $mapper = new AirtableResponseMapper();
        $result = $mapper->mapMultipleRecords($json);

        $this->assertInstanceOf(AirtableResponseDataTransfer::class, $result);
    }
}
