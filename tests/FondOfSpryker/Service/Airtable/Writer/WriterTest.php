<?php

namespace FondOfSpryker\Service\Airtable\Writer;

use Codeception\Test\Unit;
use FondOf\Airtable\Table;

class WriterTest extends Unit
{
    /**
     * @throws \Exception
     */
    public function test_write_record()
    {
        $table = $this->makeEmpty(Table::class, [
            'writeRecord' => function (array $fields) {
                return 'success';
            }
        ]);

        $writer = new Writer($table);
        $fields = [];
        $result = $writer->writeRecord($fields);

        $this->assertEquals('success', $result);
    }
}
