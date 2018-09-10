<?php

namespace Athome\Bundle\AssetsVersionBundle\Strategy;

use Symfony\Component\Process\Process;

class Git implements StrategyInterface
{
    public function getVersion()
    {
        $process = new Process('git describe');
        $process->run();

        return trim($process->getOutput());
    }
}
