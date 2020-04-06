<?php

namespace FondOfSpryker\Service\Airtable;

interface AirtableServiceInterface
{
    /**
     * @param string $baseId
     * @param string $tableId
     * @param array $fields
     *
     * @return string
     */
    public function writeRecord(string $baseId, string $tableId, array $fields): string;

    /**
     * @param string $baseId
     * @param string $tableId
     * @param string $recordId
     *
     * @return string
     */
    public function getRecord(string $baseId, string $tableId, string $recordId): string;

    /**
     * @param string $baseId
     * @param string $tableId
     * @param int|null $limit
     *
     * @return string
     */
    public function getRecords(string $baseId, string $tableId, ?int $limit = null): string;
}