<?php

declare(strict_types=1);

/*
 * This file is part of Alt Three Locker.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AltThree\Tests\Locker\Facades;

use AltThree\Locker\Facades\Locker as LockerFacade;
use AltThree\Locker\Locker;
use AltThree\Tests\Locker\AbstractTestCase;
use GrahamCampbell\TestBenchCore\FacadeTrait;

/**
 * This is the locker facade test class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class LockerTest extends AbstractTestCase
{
    use FacadeTrait;

    /**
     * Setup the application environment.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return void
     */
    protected function getEnvironmentSetUp($app): void
    {
        parent::getEnvironmentSetUp($app);

        $app->config->set('database.redis.client', 'predis');
    }

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected static function getFacadeAccessor():string
    {
        return 'locker';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected static function getFacadeClass(): string
    {
        return LockerFacade::class;
    }

    /**
     * Get the facade root.
     *
     * @return string
     */
    protected static function getFacadeRoot(): string
    {
        return Locker::class;
    }
}
