<?php

namespace NathanDunn\Chargebee\Api\CouponSets;

use Http\Client\Exception;
use NathanDunn\Chargebee\Api\AbstractApi;

class CouponSet extends AbstractApi
{
    /**
     * @param array $parameters
     * @param array $headers
     *
     * @return array|string
     * @throws Exception
     */
    public function list(array $parameters = [], array $headers = [])
    {
        $resolver = $this->createOptionsResolver();

        $url = $this->url('coupon_sets');

        return $this->get($url, $resolver->resolve($parameters), $headers);
    }

    /**
     * @param string $id
     * @param array $headers
     *
     * @return array|string
     * @throws Exception
     */
    public function find(string $id, array $headers = [])
    {
        $url = $this->url('coupon_sets/%s', $id);

        return $this->get($url, [], $headers);
    }

    /**
     * @param array $data
     * @param array $headers
     *
     * @return array|string
     * @throws Exception
     */
    public function create(array $data, array $headers = [])
    {
        $url = $this->url('coupon_sets');

        return $this->post($url, $data, $headers);
    }

    /**
     * @param string $id
     * @param array $data
     * @param array $headers
     *
     * @return array|string
     * @throws Exception
     */
    public function addCouponCodes(string $id, array $data, array $headers = [])
    {
        $url = $this->url('coupon_sets/%s/add_coupon_codes', $id);

        return $this->post($url, $data, $headers);
    }

    /**
     * @param string $id
     * @param array $data
     * @param array $headers
     *
     * @return array|string
     * @throws Exception
     */
    public function update(string $id, array $data, array $headers = [])
    {
        $url = $this->url('coupon_sets/%s/update', $id);

        return $this->post($url, $data, $headers);
    }

    /**
     * @param string $id
     * @param array $headers
     *
     * @return array|string
     * @throws Exception
     */
    public function delete(string $id, array $headers = [])
    {
        $url = $this->url('coupon_sets/%s/delete', $id);

        return $this->post($url, [], $headers);
    }

    /**
     * @param string $id
     * @param array $headers
     *
     * @return array|string
     * @throws Exception
     */
    public function deleteUnusedCouponCodes(string $id, array $headers = [])
    {
        $url = $this->url('coupon_sets/%s/delete_unused_coupon_codes', $id);

        return $this->post($url, [], $headers);
    }
}
