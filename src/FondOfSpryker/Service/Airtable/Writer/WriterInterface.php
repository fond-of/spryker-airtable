<?php

namespace FondOfSpryker\Service\Airtable\Writer;

interface WriterInterface
{
    /**
     * @param array $fields
     *
     * @return string
     */
    public function writeRecord(array $fields): string;
}
