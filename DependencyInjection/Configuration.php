<?php

namespace Opti\LolApiBundle\DependencyInjection;

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
        $rootNode = $treeBuilder->root('opti_lol_api');

        $rootNode
            ->children()
                ->scalarNode('key')
                    ->defaultValue(false)
                    ->info('Sets the API key to be used to query the League of Legends Servers')
                ->end()
                ->booleanNode('cache')
                    ->defaultFalse()
                    ->info('Toggles the caching option of the bundle')
                ->end()
                ->arrayNode('endpoints')
                ->addDefaultsIfNotSet()
                    ->children()
                        ->scalarNode('br')->defaultValue('br.api.pvp.net')->end()
                        ->scalarNode('eune')->defaultValue('eune.api.pvp.net')->end()
                        ->scalarNode('euw')->defaultValue('euw.api.pvp.net')->end()
                        ->scalarNode('kr')->defaultValue('kr.api.pvp.net')->end()
                        ->scalarNode('lan')->defaultValue('lan.api.pvp.net')->end()
                        ->scalarNode('las')->defaultValue('las.api.pvp.net')->end()
                        ->scalarNode('na')->defaultValue('na.api.pvp.net')->end()
                        ->scalarNode('oce')->defaultValue('oce.api.pvp.net')->end()
                        ->scalarNode('tr')->defaultValue('tr.api.pvp.net')->end()
                        ->scalarNode('ru')->defaultValue('ru.api.pvp.net')->end()
                        ->scalarNode('pbe')->defaultValue('pbe.api.pvp.net')->end()
                        ->scalarNode('global')->defaultValue('global.api.pvp.net')->end()
                    ->end()
                ->end()
            ->end()
        ;
        return $treeBuilder;
    }
}
