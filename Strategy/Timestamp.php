<?php

namespace Athome\Bundle\AssetsVersionBundle\Strategy;

class Timestamp implements StrategyInterface
{
    public function getVersion()
    {
        return time();
    }
}
