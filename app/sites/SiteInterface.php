<?php
namespace Pholmes\Sites;

interface SiteInterface
{
    /**
     *
     */
    public function url() :String;

    /**
     *
     */
    public function userProfileUrl(String $username) :String;
}
