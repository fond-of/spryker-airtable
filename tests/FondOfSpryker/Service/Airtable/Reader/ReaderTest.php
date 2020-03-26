<?php

namespace FondOfSpryker\Service\Airtable\Reader;

use Codeception\Test\Unit;
use FondOf\Airtable\Table;

class ReaderTest extends Unit
{
    /**
     * @var $table
     */
    private $table;

    /**
     * @throws \Exception
     */
    public function test_get_record_by_id()
    {
        $table = $this->makeEmpty(Table::class, [
            'getRecord' => function (string $recordId) {
                return $recordId;
            }
        ]);

        $reader = new Reader($table);
        $record = $reader->getRecord('foobar');

        $this->assertEquals('foobar', $record);
    }

    /**
     * @throws \Exception
     */
    public function test_get_records()
    {
        $table = $this->makeEmpty(Table::class, [
            'getRecords' => function () {
                return 'foobar';
            },
        ]);

        $reader = new Reader($table);
        $record = $reader->getRecords();

        $this->assertEquals('foobar', $record);
    }
}
