<?php

namespace FondOfSpryker\Service\Airtable;

use Generated\Shared\Transfer\AirtableRequestDataTransfer;
use Generated\Shared\Transfer\AirtableResponseDataTransfer;

interface AirtableServiceInterface
{
    /**
     * Specification:
     * - Write data into given airtable identified by base id and table id
     * - Returns airtable response transfer
     *
     * @api
     *
     * @param string $baseId
     * @param string $tableId
     * @param \Generated\Shared\Transfer\AirtableRequestDataTransfer $airtableRequestDataTransfer
     *
     * @return \Generated\Shared\Transfer\AirtableResponseDataTransfer
     */
    public function writeRecord(string $baseId, string $tableId, AirtableRequestDataTransfer $airtableRequestDataTransfer): AirtableResponseDataTransfer;

    /**
     * Specification:
     * - Return a record by id from an airtable identified by base id and table id
     * - Returns airtable response transfer
     *
     * @api
     *
     * @param string $baseId
     * @param string $tableId
     * @param string $recordId
     *
     * @return \Generated\Shared\Transfer\AirtableResponseDataTransfer
     */
    public function getRecord(string $baseId, string $tableId, string $recordId): AirtableResponseDataTransfer;

    /**
     * Specification:
     * - Return all records from an airtable identified by base id and table id
     * - Optional set the limit of records
     * - Returns airtable response transfer
     *
     * @api
     *
     * @param string $baseId
     * @param string $tableId
     * @param int|null $limit
     *
     * @return \Generated\Shared\Transfer\AirtableResponseDataTransfer
     */
    public function getRecords(string $baseId, string $tableId, ?int $limit = null): AirtableResponseDataTransfer;
}
