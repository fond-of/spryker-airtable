<?php

namespace FondOfSpryker\Service\Airtable;

use FondOf\Airtable\Table;
use FondOfSpryker\Service\Airtable\Reader\Reader;
use FondOfSpryker\Service\Airtable\Reader\ReaderInterface;
use FondOfSpryker\Service\Airtable\Writer\Writer;
use FondOfSpryker\Service\Airtable\Writer\WriterInterface;
use Spryker\Service\Kernel\AbstractServiceFactory;

class AirtableServiceFactory extends AbstractServiceFactory
{
    /**
     * @return \FondOf\Airtable\Table
     */
    public function createTable(): Table
    {
        $client = $this->getProvidedDependency(AirtableServiceDependencyProvider::AIRTABLE_CLIENT);

        return new Table($client);
    }

    /**
     * @param \FondOf\Airtable\Table $table
     * @param string $baseId
     * @param string $tableId
     * @param int|null $limit
     *
     * @return \FondOfSpryker\Service\Airtable\Reader\ReaderInterface
     */
    public function createReader(Table $table, string $baseId, string $tableId, ?int $limit = null): ReaderInterface
    {
        if ($limit !== null) {
            $table = $table->limit($limit);
        }
        return new Reader($table->base($baseId)->table($tableId));
    }

    /**
     * @param \FondOf\Airtable\Table $table
     * @param string $baseId
     * @param string $tableId
     *
     * @return \FondOfSpryker\Service\Airtable\Writer\WriterInterface
     */
    public function createWriter(Table $table, string $baseId, string $tableId): WriterInterface
    {
        return new Writer($table->base($baseId)->table($tableId));
    }
}
