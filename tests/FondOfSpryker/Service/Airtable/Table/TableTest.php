<?php

namespace FondOfSpryker\Service\Airtable\Table;

use Codeception\Stub\Expected;
use Codeception\Test\Unit;
use FondOf\Airtable\Table as AirTable;
use FondOf\Airtable\TableInterface;

class TableTest extends Unit
{
    /**
     * @var \FondOf\Airtable\TableInterface $airtable
     */
    private $airtable;

    /**
     * @return void
     */
    protected function _before()
    {
        $this->airtable = $this->make(AirTable::class);
    }

    /**
     * @return void
     */
    public function testTableWriteRecord()
    {
        $airtable = $this->make(AirTable::class, [
            'writeRecord' => Expected::once('foobar'),
        ]);

        $table = new Table($airtable);
        $fields = [];
        $record = $table->writeRecord($fields);

        $this->assertEquals('foobar', $record);
    }

    /**
     * @return void
     */
    public function testTableGetRecord()
    {
        $airtable = $this->make(AirTable::class, [
            'getRecord' => Expected::once('foobar'),
        ]);

        $table = new Table($airtable);

        $record = $table->getRecord('foobar');

        $this->assertEquals('foobar', $record);
    }

    /**
     * @return void
     */
    public function testTableGetRecords()
    {
        $airtable = $this->make(AirTable::class, [
            'getRecords' => Expected::once('foobar'),
        ]);

        $table = new Table($airtable);

        $record = $table->getRecords();

        $this->assertEquals('foobar', $record);
    }

    /**
     * @return void
     */
    public function testTableSetBase()
    {
        $airtable = $this->make(AirTable::class, [
            'base' => Expected::once($this->airtable),
        ]);

        $table = new Table($airtable);

        $result = $table->base('foobar');

        $this->assertInstanceOf(TableInterface::class, $result);
    }

    /**
     * @return void
     */
    public function testTableSetTable()
    {
        $airtable = $this->make(AirTable::class, [
            'table' => Expected::once($this->airtable),
        ]);

        $table = new Table($airtable);

        $result = $table->table('foobar');

        $this->assertInstanceOf(TableInterface::class, $result);
    }

    /**
     * @return void
     */
    public function testTableSetLimit()
    {
        $airtable = $this->make(AirTable::class, [
            'limit' => Expected::once($this->airtable),
        ]);

        $table = new Table($airtable);

        $result = $table->limit(10);

        $this->assertInstanceOf(TableInterface::class, $result);
    }
}
