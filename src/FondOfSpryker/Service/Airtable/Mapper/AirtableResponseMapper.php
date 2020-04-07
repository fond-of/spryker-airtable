<?php

namespace FondOfSpryker\Service\Airtable\Mapper;

use Generated\Shared\Transfer\AirtableResponseDataTransfer;

class AirtableResponseMapper implements AirtableMapperInterface
{
    /**
     * @param string $data
     *
     * @return \Generated\Shared\Transfer\AirtableResponseDataTransfer
     */
    public function mapSingleRecord(string $data): AirtableResponseDataTransfer
    {
        $data = json_decode($data, true);
        $responseDataTransfer = new AirtableResponseDataTransfer();
        $responseDataTransfer->setCreatedTime($data['createdTime']);
        $responseDataTransfer->setFields($data['fields']);
        $responseDataTransfer->setId($data['id']);

        return $responseDataTransfer;
    }

    /**
     * @param string $data
     *
     * @return \Generated\Shared\Transfer\AirtableResponseDataTransfer
     */
    public function mapMultipleRecords(string $data): AirtableResponseDataTransfer
    {
        $data = json_decode($data, true);
        $responseDataTransfer = new AirtableResponseDataTransfer();
        $responseDataTransfer->setRecords($data['records']);
        $responseDataTransfer->setOffset($data['offset']);

        return $responseDataTransfer;
    }
}
