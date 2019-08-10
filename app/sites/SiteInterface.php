<?php
namespace Pholmes\Sites;

interface SiteInterface
{
    /**
     *
     */
    public function url(): string;

    /**
     *
     */
    public function userProfileUrl(string $username): string;
}
