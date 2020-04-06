<?php

namespace FondOfSpryker\Service\Airtable;

use Spryker\Service\Kernel\AbstractService;

class AirtableService extends AbstractService implements AirtableServiceInterface
{
    /**
     * @var \FondOf\Airtable\TableInterace
     */
    protected $table;

    public function __construct()
    {
        $this->table = $this->getFactory()->createTable();
    }

    /**
     * @param string $baseId
     * @param string $tableId
     * @param array $fields
     *
     * @return string
     */
    public function writeRecord(string $baseId, string $tableId, array $fields): string
    {
        return $this->getFactory()->createWriter($this->table, $baseId, $tableId)->writeRecord($fields);
    }

    /**
     * @param string $baseId
     * @param string $tableId
     * @param string $recordId
     *
     * @return string
     */
    public function getRecord(string $baseId, string $tableId, string $recordId): string
    {
        return $this->getFactory()->createReader($this->table, $baseId, $tableId)->getRecord($recordId);
    }

    /**
     * @param string $baseId
     * @param string $tableId
     * @param int|null $limit
     *
     * @return string
     */
    public function getRecords(string $baseId, string $tableId, ?int $limit = null): string
    {
        return $this->getFactory()->createReader($this->table, $baseId, $tableId, $limit)->getRecords();
    }
}
