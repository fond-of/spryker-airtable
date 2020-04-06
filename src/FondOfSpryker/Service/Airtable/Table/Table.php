<?php

namespace FondOfSpryker\Service\Airtable\Table;

use FondOf\Airtable\TableInterface;

class Table implements TableInterface
{
    /**
     * @var \FondOf\Airtable\TableInterface
     */
    protected $table;

    /**
     * @param \FondOf\Airtable\TableInterface $table
     */
    public function __construct(TableInterface $table)
    {
        $this->table = $table;
    }

    /**
     * @param array $fields
     *
     * @return string
     */
    public function writeRecord(array $fields): string
    {
        return $this->table->writeRecord($fields);
    }

    /**
     * @param string $id
     *
     * @return string
     */
    public function getRecord(string $id): string
    {
        return $this->table->getRecord($id);
    }

    /**
     * @return string
     */
    public function getRecords(): string
    {
        return $this->table->getRecords();
    }

    /**
     * @param string $base
     *
     * @return \FondOf\Airtable\TableInterface
     */
    public function base(string $base): TableInterface
    {
        $this->table->base($base);

        return $this;
    }

    /**
     * @param string $table
     *
     * @return \FondOf\Airtable\TableInterface
     */
    public function table(string $table): TableInterface
    {
        $this->table->table($table);

        return $this;
    }

    /**
     * @param int $limit
     *
     * @return \FondOf\Airtable\TableInterface
     */
    public function limit(int $limit): TableInterface
    {
        $this->table->limit($limit);

        return $this;
    }
}
