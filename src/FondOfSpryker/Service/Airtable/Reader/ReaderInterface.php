<?php

namespace FondOfSpryker\Service\Airtable\Reader;

use Generated\Shared\Transfer\AirtableResponseDataTransfer;

interface ReaderInterface
{
    /**
     * @param string $recordId
     *
     * @return \Generated\Shared\Transfer\AirtableResponseDataTransfer
     */
    public function getRecord(string $recordId): AirtableResponseDataTransfer;

    /**
     * @return \Generated\Shared\Transfer\AirtableResponseDataTransfer
     */
    public function getRecords(): AirtableResponseDataTransfer;
}
