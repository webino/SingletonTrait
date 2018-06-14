<?php
/**
 * Webino™ (http://webino.sk)
 *
 * @link        https://github.com/webino/SingletonTrait for the canonical source repository
 * @copyright   Copyright (c) 2018 Webino, s.r.o. (http://webino.sk)
 * @author      Peter Bačinský <peter@bacinsky.sk>
 * @license     BSD-3-Clause
 */

namespace Webino;

/**
 * Class SingletonTrait
 */
trait SingletonTrait
{
    /**
     * @var $this
     */
    protected static $instance;

    /**
     * @return $this
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static;
        }
        return static::$instance;
    }
}
