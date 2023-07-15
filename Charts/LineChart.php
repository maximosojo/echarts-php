<?php

/*
 * This file is part of the Máximo Sojo - package.
 * 
 * (c) https://maximosojo.github.io/
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Maximosojo\EChartsPHP\Charts;

use Maximosojo\EChartsPHP\Model\Chart;
use Maximosojo\EChartsPHP\Options\Line\LineChartOptions;

/**
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class LineChart extends Chart
{
    /**
     * @var LineChartOptions
     */
    public $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new LineChartOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'line';
    }

    /**
     * @return LineChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param $options LineChartOptions
     *
     * @return PieChart
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
