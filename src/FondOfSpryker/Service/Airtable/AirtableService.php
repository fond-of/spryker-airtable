<?php

namespace FondOfSpryker\Service\Airtable;

use Generated\Shared\Transfer\AirtableRequestDataTransfer;
use Generated\Shared\Transfer\AirtableResponseDataTransfer;
use Spryker\Service\Kernel\AbstractService;
use SprykerSdk\Spryk\Exception\ArgumentNotFoundException;

/**
 * Class AirtableService
 *
 * @package FondOfSpryker\Service\Airtable
 * @method \FondOfSpryker\Service\Airtable\AirtableServiceFactory getFactory()
 */
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
     * @throws \SprykerSdk\Spryk\Exception\ArgumentNotFoundException
     *
     * @return \Generated\Shared\Transfer\AirtableResponseDataTransfer
     */
    public function writeRecord(string $baseId, string $tableId, AirtableRequestDataTransfer $airtableRequestDataTransfer): AirtableResponseDataTransfer
    {
        if ($baseId === '' || $tableId === '') {
            throw new ArgumentNotFoundException('Base ID or Table ID not set.');
        }

        return $this->getFactory()->createWriter($this->table, $baseId, $tableId)->writeRecord($airtableRequestDataTransfer);
    }

    /**
     * @param string $baseId
     * @param string $tableId
     * @param string $recordId
     *
     * @throws \SprykerSdk\Spryk\Exception\ArgumentNotFoundException
     *
     * @return \Generated\Shared\Transfer\AirtableResponseDataTransfer
     */
    public function getRecord(string $baseId, string $tableId, string $recordId): AirtableResponseDataTransfer
    {
        if ($baseId === '' || $tableId === '') {
            throw new ArgumentNotFoundException('Base ID or Table ID not set.');
        }

        return $this->getFactory()->createReader($this->table, $baseId, $tableId)->getRecord($recordId);
    }

    /**
     * @param string $baseId
     * @param string $tableId
     * @param int|null $limit
     *
     * @throws \SprykerSdk\Spryk\Exception\ArgumentNotFoundException
     *
     * @return \Generated\Shared\Transfer\AirtableResponseDataTransfer
     */
    public function getRecords(string $baseId, string $tableId, ?int $limit = null): AirtableResponseDataTransfer
    {
        if ($baseId === '' || $tableId === '') {
            throw new ArgumentNotFoundException('Base ID or Table ID not set.');
        }

        return $this->getFactory()->createReader($this->table, $baseId, $tableId, $limit)->getRecords();
    }
}
