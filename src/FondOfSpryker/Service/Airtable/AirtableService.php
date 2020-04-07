<?php

namespace FondOfSpryker\Service\Airtable;

use Generated\Shared\Transfer\AirtableRequestDataTransfer;
use Generated\Shared\Transfer\AirtableResponseDataTransfer;
use Spryker\Service\Kernel\AbstractService;
use SprykerSdk\Spryk\Exception\ArgumentNotFoundException;

class AirtableService extends AbstractService implements AirtableServiceInterface
{
    /**
     * @var \FondOf\Airtable\TableInterface
     */
    protected $table;

    public function __construct()
    {
        $this->table = $this->getFactory()->createTable();
    }

    /**
     * @param string $baseId
     * @param string $tableId
     * @param \Generated\Shared\Transfer\AirtableRequestDataTransfer $airtableRequestDataTransfer
     *
     * @return \Generated\Shared\Transfer\AirtableResponseDataTransfer
     *
     * @throws \SprykerSdk\Spryk\Exception\ArgumentNotFoundException
     */
    public function writeRecord(string $baseId, string $tableId, AirtableRequestDataTransfer $airtableRequestDataTransfer): AirtableResponseDataTransfer
    {
        if($baseId === '' || $tableId === '') {
            throw new ArgumentNotFoundException('Base ID or Table ID not set.');
        }

        return $this->getFactory()->createWriter($this->table, $baseId, $tableId)->writeRecord($airtableRequestDataTransfer);
    }

    /**
     * @param string $baseId
     * @param string $tableId
     * @param string $recordId
     *
     * @return \Generated\Shared\Transfer\AirtableResponseDataTransfer
     *
     * @throws \SprykerSdk\Spryk\Exception\ArgumentNotFoundException
     */
    public function getRecord(string $baseId, string $tableId, string $recordId): AirtableResponseDataTransfer
    {
        if($baseId === '' || $tableId === '') {
            throw new ArgumentNotFoundException('Base ID or Table ID not set.');
        }

        return $this->getFactory()->createReader($this->table, $baseId, $tableId)->getRecord($recordId);
    }

    /**
     * @param string $baseId
     * @param string $tableId
     * @param int|null $limit
     *
     * @return \Generated\Shared\Transfer\AirtableResponseDataTransfer
     *
     * @throws \SprykerSdk\Spryk\Exception\ArgumentNotFoundException
     */
    public function getRecords(string $baseId, string $tableId, ?int $limit = null): AirtableResponseDataTransfer
    {
        if($baseId === '' || $tableId === '') {
            throw new ArgumentNotFoundException('Base ID or Table ID not set.');
        }

        return $this->getFactory()->createReader($this->table, $baseId, $tableId, $limit)->getRecords();
    }
}
