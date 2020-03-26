<?php

namespace FondOfSpryker\Service\Airtable;

use FondOfSpryker\Shared\Airtable\AirtableConstants;
use Spryker\Service\Kernel\AbstractBundleConfig;

class AirtableConfig extends AbstractBundleConfig
{
    /**
     * @return string
     */
    public function getApiKey(): string
    {
        return $this->get(AirtableConstants::AIRTABLE_APIKEY, '');
    }
}
