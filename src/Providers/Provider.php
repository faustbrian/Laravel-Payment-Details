<?php

/*
 * This file is part of Laravel Payment Details.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace BrianFaust\PaymentDetails\Providers;

abstract class Provider
{
    public function getIdentifier()
    {
        return snake_case($this->getName());
    }

    public function getName()
    {
        return class_basename($this->getClass());
    }

    public function getClass()
    {
        return static::class;
    }

    abstract public function getFields();
}
