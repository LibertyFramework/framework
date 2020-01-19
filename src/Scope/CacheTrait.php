<?php
/**
 * DocForge.
 *
 * PHP version 7
 *
 * @category   Script
 *
 * @author     Francesco Bianco <bianco@javanile.org>
 * @license    https://goo.gl/KPZ2qI  MIT License
 * @copyright  2015-2020 Javanile
 */

namespace DocForge\Framework\Scope;

use DocForge\Framework\Functions;
use DocForge\Framework\Page;

trait CacheTrait
{
    /**
     *
     */
    protected $cache = [];

    /**
     *
     */
    public function hasCache($method, $key = null)
    {
        return $key !== null
            ? isset($this->cache[$method][$key])
            : isset($this->cache[$method]);
    }

    /**
     * @param $page
     */
    public function getCache($method, $key = null)
    {
        return $key !== null
            ? $this->cache[$method][$key]
            : $this->cache[$method];
    }

    /**
     * @return mixed
     */
    public function setCache($method, $key, $value = null)
    {
        if ($value !== null) {
            $this->cache[$method][$key] = $value;
        } else {
            $this->cache[$method] = $key;
            $value = $key;
        }

        return $value;
    }
}
