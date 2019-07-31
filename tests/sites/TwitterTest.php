<?php
namespace Pholmes\Tests;

use Pholmes\Sites\Siteinterface;
use Pholmes\Sites\Twitter;
use PHPUnit\Framework\TestCase;

/**
 * specific testing for Twitter
 */
class TwitterTest extends TestCase
{
    /**
     * @test
     */
    public function interface() :void
    {
        $site = new Twitter;
        $this->assertInstanceOf(Siteinterface::class, $site);
    }

    /**
     * @test
     */
    public function url() :void
    {
        $site = new Twitter;
        $this->assertEquals('https://www.twitter.com/', $site->url());
    }

    /**
     * @test
     */
    public function userProfileUrl() :void
    {
        $site = new Twitter;
        $this->assertEquals('https://www.twitter.com/iamtest', $site->userProfileUrl('iamtest'));
    }
}
