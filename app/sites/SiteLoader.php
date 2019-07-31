<?php
namespace Pholmes\Sites;

class SiteLoader
{
    public function all() :array
    {
        return [
            'Medium' => \Pholmes\Sites\Medium::class,
            'Twitter' => \Pholmes\Sites\Twitter::class,
        ];
    }
}
