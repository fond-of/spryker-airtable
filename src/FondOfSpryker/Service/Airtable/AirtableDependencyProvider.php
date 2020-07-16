<?php

namespace FondOfSpryker\Service\Airtable;

use FondOf\Airtable\Airtable;
use FondOf\Airtable\Table;
use Spryker\Service\Kernel\AbstractBundleDependencyProvider;
use Spryker\Service\Kernel\Container;

/**
 * Class AirtableDependencyProvider
 *
 * @package FondOfSpryker\Service\Airtable
 * @method \FondOfSpryker\Service\Airtable\AirtableConfig getConfig()
 */
class AirtableDependencyProvider extends AbstractBundleDependencyProvider
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
    public function provideServiceDependencies(Container $container): Container
    {
        $container = $this->addAirtableTable($container);

        return $container;
    }

    /**
     * @param \Spryker\Service\Kernel\Container $container
     *
     * @return \Spryker\Service\Kernel\Container
     */
    protected function addAirtableTable(Container $container): Container
    {
        $container[self::AIRTABLE_TABLE] = function () {
            $client = (new Airtable([
                'apiKey' => $this->getConfig()->getApiKey(),
            ]))->createApiClient();

            return new Table($client);
        };

        return $container;
    }
}
