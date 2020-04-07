<?php

namespace FondOfSpryker\Service\Airtable\Writer;

use Generated\Shared\Transfer\AirtableRequestDataTransfer;
use Generated\Shared\Transfer\AirtableResponseDataTransfer;

interface WriterInterface
{
    /**
     * @param \Generated\Shared\Transfer\AirtableRequestDataTransfer $airtableRequestDataTransfer
     *
     * @return \Generated\Shared\Transfer\AirtableResponseDataTransfer
     */
    public function writeRecord(AirtableRequestDataTransfer $airtableRequestDataTransfer): AirtableResponseDataTransfer;
}
