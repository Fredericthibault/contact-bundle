<?php

namespace Viweb\ContactBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('viweb_contact');

        $rootNode
            ->children()
                ->scalarNode('main_mail')->end()
            ->end();
//            ->children()
//                ->arrayNode('geoloc')
//                    ->FloatNode('lat');


        return $treeBuilder;
    }
}
