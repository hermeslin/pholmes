<?php
namespace Pholmes\Sites;

class Medium implements SiteInterface
{
    /**
     *
     */
    public function url(): string
    {
        return 'https://medium.com/';
    }

    /**
     *
     */
    public function userProfileUrl(string $username): string
    {
        $url = $this->url();
        return "{$url}@{$username}";
    }
}
