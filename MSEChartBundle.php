<?php

namespace MS\EChartBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * MSEChartBundle
 * 
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class MSEChartBundle extends Bundle
{
	public function build(\Symfony\Component\DependencyInjection\ContainerBuilder $container) 
    {
        parent::build($container);
    }
}