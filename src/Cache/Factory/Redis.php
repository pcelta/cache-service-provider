<?php

namespace Dafiti\Silex\Cache\Factory;

use Dafiti\Silex\Exception\InvalidCacheConfig;

class Redis extends AbstractFactory
{
    const MODULE_NAME = 'redis';

    public function getModuleName()
    {
        return self::MODULE_NAME;
    }

    public function create(array $params)
    {
        if (!$this->isValidatParams($params)) {
            throw new InvalidCacheConfig();
        }

        $redis = new \Redis();
        $redis->connect($params['host'], $params['port']);

        return $redis;
    }

    /**
     * @param array $params
     *
     * @return bool
     */
    private function isValidatParams(array $params)
    {
        if (!isset($params['host'])) {
            return false;
        }

        if (!isset($params['port'])) {
            return false;
        }

        return true;
    }
}