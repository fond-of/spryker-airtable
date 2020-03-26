<?php

namespace FondOfSpryker\Service\Airtable;

use Spryker\Service\Kernel\AbstractBundleDependencyProvider;
use FondOf\Airtable\Airtable;
use FondOfSpryker\Shared\Airtable\AirtableConstants;
use Spryker\Service\Kernel\Container;

class AirtableServiceDependencyProvider extends AbstractBundleDependencyProvider
{
    /**
     * Client Key
     */
    public const AIRTABLE_CLIENT = 'AIRTABLE_CLIENT';

    /**
     * @param \Spryker\Service\Kernel\Container $container
     *
     * @return \Spryker\Service\Kernel\Container
     */
    public function provideServiceDependencies(Container $container)
    {
        $container = $this->addAirtableClient();

        return $container;
    }

    /**
     * @param \Spryker\Service\Kernel\Container $container
     *
     * @return \Spryker\Service\Kernel\Container
     */
    public function addAirtableClient(Container $container): Container
    {
        return $container->set(self::AIRTABLE_CLIENT, function (Container $container) {
            return (new Airtable([
                'apiKey' => $this->getConfig(AirtableConstants::AIRTABLE_APIKEY),
            ]))->createApiClient();
        });
    }
}
