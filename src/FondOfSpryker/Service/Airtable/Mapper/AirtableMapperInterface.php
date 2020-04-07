<?php

namespace FondOfSpryker\Service\Airtable\Mapper;

use Generated\Shared\Transfer\AirtableResponseDataTransfer;

interface AirtableMapperInterface
{
    /**
     * @param string $data
     *
     * @return \Generated\Shared\Transfer\AirtableResponseDataTransfer
     */
    public function mapSingleRecord(string $data): AirtableResponseDataTransfer;

    /**
     * @param string $data
     *
     * @return \Generated\Shared\Transfer\AirtableResponseDataTransfer
     */
    public function mapMultipleRecords(string $data): AirtableResponseDataTransfer;
}
