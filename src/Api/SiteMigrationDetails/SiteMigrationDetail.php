<?php

namespace NathanDunn\Chargebee\Api\SiteMigrationDetails;

use Http\Client\Exception;
use NathanDunn\Chargebee\Api\AbstractApi;

class SiteMigrationDetail extends AbstractApi
{
    /**
     * @param array $parameters
     * @param array $headers
     *
     * @return array|string
     * @throws Exception
     */
    public function list($parameters = [], array $headers = [])
    {
        $resolver = $this->createOptionsResolver();

        $url = $this->url('site_migration_details');

        return $this->get($url, $resolver->resolve($parameters), $headers);
    }
}
