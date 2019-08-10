<?php
namespace Pholmes\Sites;

class Twitter implements SiteInterface
{
    /**
     *
     */
    public function url(): string
    {
        return 'https://www.twitter.com/';
    }

    /**
     *
     */
    public function userProfileUrl(string $username): string
    {
        $url = $this->url();
        return "{$url}{$username}";
    }
}
