<?php

namespace FondOfSpryker\Service\Airtable;

use Codeception\Test\Unit;
use FondOf\Airtable\Table;
use FondOfSpryker\Service\Airtable\Reader\ReaderInterface;
use FondOfSpryker\Service\Airtable\Writer\WriterInterface;

class AirtableServiceFactoryTest extends Unit
{
    private $factory;
    private $table;

    protected function _before()
    {
        $this->factory = $this->make(AirtableServiceFactory::class);
        $this->table = $this->make(Table::class);
    }

    public function test_reader_factory()
    {
        $reader = $this->factory->createReader($this->table, 'baseId', 'tableId');
        $this->assertInstanceOf(ReaderInterface::class, $reader);
    }

    public function test_writer_factory()
    {
        $writer = $this->factory->createWriter($this->table, 'baseId', 'tableId');
        $this->assertInstanceOf(WriterInterface::class, $writer);
    }
}
