<?php

namespace FondOfSpryker\Service\Airtable\Reader;

interface ReaderInterface
{
    /**
     * @param string $recordId
     *
     * @return string
     */
    public function getRecord(string $recordId): string;

    /**
     * @return string
     */
    public function getRecords(): string;
}
