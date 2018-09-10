<?php

namespace Athome\Bundle\AssetsVersionBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('athome_assets_version');

        $supportedStrategies = array('timestamp', 'git');

        $rootNode->children()
            ->scalarNode('strategy')
                ->defaultValue('timestamp')
                ->validate()
                    ->ifNotInArray($supportedStrategies)
                    ->thenInvalid(
                        'The strategy %s is not supported. Please choose one of '.json_encode($supportedStrategies)
                    )
                ->end()
                ->isRequired()
                ->cannotBeEmpty()
            ->end();

        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.

        return $treeBuilder;
    }
}
