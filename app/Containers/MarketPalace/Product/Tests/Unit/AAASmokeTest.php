<?php

declare(strict_types=1);

/**
 * Contains the AAASmokeTest class.
 *
 * @copyright   Copyright (c) 2022 Aboozar Ghaffari
 * @author      Aboozar Ghaffari
 * @license     MIT
 */

namespace App\Containers\MarketPalace\Product\Tests\Unit;

use App\Containers\MarketPalace\Product\Tests\TestCase;

class AAASmokeTest extends TestCase
{
    private const MIN_PHP_VERSION = '8.1.0';

    /**
     * @test
     */
    public function smoke()
    {
        $this->assertTrue(true);
    }

    /**
     * Test for minimum PHP version
     *
     * @depends smoke
     * @test
     */
    public function php_version_satisfies_requirements()
    {
        $this->assertFalse(
            version_compare(PHP_VERSION, self::MIN_PHP_VERSION, '<'),
            'PHP version '.self::MIN_PHP_VERSION.' or greater is required but only '
            .PHP_VERSION.' found.'
        );
    }
}