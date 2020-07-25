<?php

/*
 * This file is part of the Máximo Sojo - package.
 * 
 * (c) https://maxtoan.github.io/
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Maximosojo\EChartsPHP\Model\Charts;

use Maximosojo\EChartsPHP\Model\Chart;
use Maximosojo\EChartsPHP\Model\Options\BarChart\BarChartOptions;

/**
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class BarChart extends Chart
{
    /**
     * @var BarChartOptions
     */
    protected $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new BarChartOptions();
        $this->options->getSeries()->setType($this->getType());
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'bar';
    }

    /**
     * @return BarChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param $options BarChartOptions
     *
     * @return PieChart
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
