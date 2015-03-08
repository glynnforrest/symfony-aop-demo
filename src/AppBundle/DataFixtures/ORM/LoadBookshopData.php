<?php

namespace AppBundle\DataFixtures\ORM;

use Hautelook\AliceBundle\Alice\DataFixtureLoader;

/**
 * LoadBookshopData
 *
 * @author Glynn Forrest <me@glynnforrest.com>
 **/
class LoadBookshopData extends DataFixtureLoader
{
    protected function getFixtures()
    {
        return [
            __DIR__.'/bookshop.yml'
        ];
    }
}
