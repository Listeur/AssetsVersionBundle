<?php

namespace Athome\Bundle\AssetsVersionBundle\Twig\Extension;

use Athome\Bundle\AssetsVersionBundle\Strategy\StrategyInterface;

class AssetsVersionExtension extends \Twig_Extension
{
    /**
     * @var StrategyInterface
     */
    protected $manager;

    public function getGlobals()
    {
        return array(
            'athome_assets_version' => $this->getManager()->getVersion(),
        );
    }

    public function getName()
    {
        return 'athome_assets_version';
    }

    /**
     * @return StrategyInterface
     */
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * @param StrategyInterface $manager
     */
    public function setManager($manager)
    {
        $this->manager = $manager;
    }
}
