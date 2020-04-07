<?php

namespace FondOfSpryker\Service\Airtable;

use Generated\Shared\Transfer\AirtableRequestDataTransfer;
use Generated\Shared\Transfer\AirtableResponseDataTransfer;

interface AirtableServiceInterface
{
    /**
     * @param string $baseId
     * @param string $tableId
     * @param \Generated\Shared\Transfer\AirtableRequestDataTransfer $airtableRequestDataTransfer
     *
     * @return \Generated\Shared\Transfer\AirtableResponseDataTransfer
     */
    public function writeRecord(string $baseId, string $tableId, AirtableRequestDataTransfer $airtableRequestDataTransfer): AirtableResponseDataTransfer;

    /**
     * @param string $baseId
     * @param string $tableId
     * @param string $recordId
     *
     * @return \Generated\Shared\Transfer\AirtableResponseDataTransfer
     */
    public function getRecord(string $baseId, string $tableId, string $recordId): AirtableResponseDataTransfer;

    /**
     * @param string $baseId
     * @param string $tableId
     * @param int|null $limit
     *
     * @return \Generated\Shared\Transfer\AirtableResponseDataTransfer
     */
    public function getRecords(string $baseId, string $tableId, ?int $limit = null): AirtableResponseDataTransfer;
}
