<?php

/*
 * This file is part of the Máximo Sojo - package.
 * 
 * (c) https://maximosojo.github.io/
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Maximosojo\EChartsPHP\Options\Bar;

use Maximosojo\EChartsPHP\Options\Title;
use Maximosojo\EChartsPHP\Options\Tooltip;
use Maximosojo\EChartsPHP\Options\Grid;
use Maximosojo\EChartsPHP\Options\Series;
use Maximosojo\EChartsPHP\Options\Toolbox;
use Maximosojo\EChartsPHP\Options\Legend;
use Maximosojo\EChartsPHP\Options\XAxis;
use Maximosojo\EChartsPHP\Options\YAxis;

/**
 * BarChartOptions
 * 
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class BarChartOptions
{
    /**
     * Text to display for title.
     *
     * Default: no title
     *
     * @var string
     */
    public $title;

	/**
     * @var Legend
     */
    public $legend;

    /**
     * @var Legend
     */
    public $grid;

    /**
     * @var Series
     */
    public $series;

    /**
     * @var Toolbox
     */
    public $toolbox;

    /**
     * @var XAxis
     */
    public $xAxis;

    /**
     * @var YAxis
     */
    public $yAxis;

    /**
     * BarChartOptions constructor.
     */
    public function __construct()
    {
        $this->title = new Title();
        $this->tooltip = new Tooltip();
        $this->legend = new Legend();
    	$this->grid = new Grid();
        $this->toolbox = new Toolbox();
        $this->xAxis = new XAxis();
        $this->yAxis = new YAxis();
    }

    /**
     * @return Title
     */
    public function getTitle()
    {
        return $this->title;
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
     * @return Grid
     */
    public function getGrid()
    {
        return $this->grid;
    }

    /**
     * @return Series
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * @return Series
     */
    public function addSerie(Series $serie)
    {
        $this->series[] = $serie;
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