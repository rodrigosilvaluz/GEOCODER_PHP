<?php

/*
 * This file is part of the Geocoder package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    MIT License
 */

namespace Geocoder\Provider\Nominatim\Tests;

use Geocoder\IntegrationTest\ProviderIntegrationTest;
use Geocoder\Provider\Nominatim\Nominatim;
use Psr\Http\Client\ClientInterface;

/**
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
class IntegrationTest extends ProviderIntegrationTest
{
    protected $skippedTests = [
        'testReverseQueryWithNoResults' => 'There is "Soul Buoy"',
    ];

    protected $testAddress = true;

    protected $testReverse = true;

    protected $testIpv4 = false;

    protected $testIpv6 = false;

    protected function createProvider(ClientInterface $httpClient)
    {
        return Nominatim::withOpenStreetMapServer($httpClient, 'Geocoder PHP/Nominatim Provider/Integration Test');
    }

    protected function getCacheDir()
    {
        return __DIR__.'/.cached_responses';
    }

    protected function getApiKey()
    {
        return null;
    }
}
