<?php

/*
 * This file is part of the Máximo Sojo - package.
 * 
 * (c) https://maximosojo.github.io/
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Maximosojo\EChartsPHP\Charts\Bar;

use Maximosojo\EChartsPHP\Charts\BarChart;
use Maximosojo\EChartsPHP\Options\Bar\WaterfallChartOptions;

/**
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class WaterfallBarChart extends BarChart
{
	public function __construct()
    {
        parent::__construct();

        $this->options = new WaterfallChartOptions();
    }
}