<?php

/*
 * This file is part of the Máximo Sojo - package.
 * 
 * (c) https://maxtoan.github.io/
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Maxtoan\EChartBundle\Model\Options\BarChart;

use Maxtoan\EChartBundle\Model\Options\Tooltip;
use Maxtoan\EChartBundle\Model\Options\Series;
use Maxtoan\EChartBundle\Model\Options\Toolbox;
use Maxtoan\EChartBundle\Model\Options\Legend;
use Maxtoan\EChartBundle\Model\Options\XAxis;
use Maxtoan\EChartBundle\Model\Options\YAxis;

/**
 * BarChartOptions
 * 
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class BarChartOptions
{
	/**
     * @var Legend
     */
    protected $legend;

    /**
     * @var Series
     */
    protected $series;

    /**
     * @var Toolbox
     */
    protected $toolbox;

    /**
     * @var XAxis
     */
    protected $xAxis;

    /**
     * @var YAxis
     */
    protected $yAxis;

    /**
     * BarChartOptions constructor.
     */
    public function __construct()
    {
        $this->tooltip = new Tooltip();
    	$this->legend = new Legend();
        $this->series = new Series();
        $this->toolbox = new Toolbox();
        $this->xAxis = new XAxis();
        $this->yAxis = new YAxis();
    }

    /**
     * @return Tooltip
     */
    public function getTooltip()
    {
        return $this->tooltip;
    }

    /**
     * @return Legend
     */
    public function getLegend()
    {
        return $this->legend;
    }

    /**
     * @return Series
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * @return Toolbox
     */
    public function getToolbox()
    {
        return $this->toolbox;
    }

    /**
     * @return XAxis
     */
    public function getXAxis()
    {
        return $this->xAxis;
    }

    /**
     * @return YAxis
     */
    public function getYAxis()
    {
        return $this->yAxis;
    }
}