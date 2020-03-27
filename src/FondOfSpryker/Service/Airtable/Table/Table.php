<?php

namespace FondOfSpryker\Service\Airtable\Table;

use FondOf\Airtable\TableInterace;

class Table implements TableInterace
{
    /**
     * @param \FondOf\Airtable\TableInterace $table
     */
    public function __construct(TableInterace $table)
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
        $this->table->writeRecord($fields);
    }

    /**
     * @param string $id
     *
     * @return string
     */
    public function getRecord(string $id): string
    {
        $this->table->getRecord($id);
    }

    /**
     * @return string
     */
    public function getRecords(): string
    {
        $this->table->getRecords();
    }

    /**
     * @param string $base
     *
     * @return \FondOf\Airtable\TableInterace
     */
    public function base(string $base): TableInterface
    {
        $this->table->base($base);
        return $this;
    }

    /**
     * @param string $table
     *
     * @return \FondOf\Airtable\TableInterace
     */
    public function table(string $table): TableInterface
    {
        $this->table->table($table);
        return $this;
    }

    /**
     * @param int $limit
     *
     * @return \FondOf\Airtable\TableInterace
     */
    public function limit(int $limit): TableInterface
    {
        $this->table->limit($limit);
        return $this;
    }
}
