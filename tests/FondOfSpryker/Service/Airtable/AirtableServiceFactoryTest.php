<?php

namespace FondOfSpryker\Service\Airtable;

use Codeception\Test\Unit;
use FondOfSpryker\Service\Airtable\Reader\ReaderInterface;
use FondOfSpryker\Service\Airtable\Table\Table;
use FondOfSpryker\Service\Airtable\Writer\WriterInterface;

class AirtableServiceFactoryTest extends Unit
{
    /**
     * @var \FondOfSpryker\Service\Airtable\AirtableServiceFactory
     */
    private $factory;

    /**
     * @var \FondOfSpryker\Service\Airtable\Table\Table
     */
    private $table;

    /**
     * @return void
     */
    protected function _before()
    {
        $this->factory = $this->make(AirtableServiceFactory::class);
        $this->table = $this->make(Table::class, [
            'base' => function (string $baseId) {
                return $this->table;
            },
            'table' => function (string $tableId) {
                return $this->table;
            },
        ]);
    }

    /**
     * @return void
     */
    public function testReaderFactory()
    {
        $reader = $this->factory->createReader($this->table, 'baseId', 'tableId');
        $this->assertInstanceOf(ReaderInterface::class, $reader);
    }

    /**
     * @return void
     */
    public function testWriterFactory()
    {
        $writer = $this->factory->createWriter($this->table, 'baseId', 'tableId');
        $this->assertInstanceOf(WriterInterface::class, $writer);
    }
}
