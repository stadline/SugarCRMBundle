<?php

namespace Api\SugarCRMBundle\DependencyInjection;

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
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('api_sugar_crm');

        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.
        $rootNode->children()
        ->scalarNode('base_url')->isRequired()->cannotBeEmpty()->end()
        ->scalarNode('username')->isRequired()->cannotBeEmpty()->end()
        ->scalarNode('password')->isRequired()->cannotBeEmpty()->end()
        ->end();
                
        return $treeBuilder;
    }
}
