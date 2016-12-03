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

namespace BrianFaust\PaymentDetails;

use BrianFaust\ServiceProvider\ServiceProvider;

class PaymentDetailsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishConfig();

        $this->publishMigrations();
    }

    public function register(): void
    {
        parent::register();

        $this->mergeConfig();
    }

    public function getPackageName(): string
    {
        return 'payment-details';
    }
}
