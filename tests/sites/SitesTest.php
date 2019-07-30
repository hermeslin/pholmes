<?php
namespace Pholmes\Tests;

use Pholmes\Sites\SiteLoader;
use PHPUnit\Framework\TestCase;

/**
 * generic testing for all sites
 */
class SitesTest extends TestCase
{
    /**
     * @test
     * @dataProvider sitesProvider
     */
    public function genericTesting($siteName): void
    {
        $site = new $siteName;
        $this->assertStringStartsWith('https://', $site->url());
        $this->assertRegexp('/iamtest/', $site->userProfileUrl('iamtest'));
    }

    /**
     * data provider
     */
    public function sitesProvider(): array
    {
        $siteLoader = new SiteLoader;

        return array_map(function ($site) {
            return [$site];
        }, $siteLoader->all());
    }

    /**
     * @test
     */
    public function sitesLoaderMap()
    {
        $siteLoader = new SiteLoader;
        $this->assertArrayHasKey('Twitter', $siteLoader->all());
    }
}
