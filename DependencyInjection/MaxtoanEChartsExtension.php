<?php

/*
 * This file is part of the Máximo Sojo - package.
 * 
 * (c) https://maxtoan.github.io/
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Maxtoan\EChartBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * MaxtoanEChartsExtension
 *
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class MaxtoanEChartsExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $container->setParameter('maxtoan_echarts.version', $config['version']);
        $container->setParameter('maxtoan_echarts.locale', $config['locale']);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');
    }
}
