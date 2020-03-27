<?php

namespace FondOfSpryker\Service\Airtable;

use FondOf\Airtable\Table;
use Spryker\Service\Kernel\AbstractBundleDependencyProvider;
use FondOf\Airtable\Airtable;
use FondOfSpryker\Shared\Airtable\AirtableConstants;
use Spryker\Service\Kernel\Container;

class AirtableServiceDependencyProvider extends AbstractBundleDependencyProvider
{
    /**
     * Client Key
     */
    public const AIRTABLE_TABLE = 'AIRTABLE_TABLE';

    /**
     * @param \Spryker\Service\Kernel\Container $container
     *
     * @return \Spryker\Service\Kernel\Container
     */
    public function provideServiceDependencies(Container $container)
    {
        $container = $this->addAirtableTable();

        return $container;
    }

    /**
     * @param \Spryker\Service\Kernel\Container $container
     *
     * @return \Spryker\Service\Kernel\Container
     */
    public function addAirtableTable(Container $container): Container
    {
        return $container->set(self::AIRTABLE_TABLE, function (Container $container) {
            $client = (new Airtable([
                'apiKey' => $this->getConfig(AirtableConstants::AIRTABLE_APIKEY),
            ]))->createApiClient();
            return new Table($client);
        });
    }
}
