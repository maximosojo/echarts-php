<?php

/*
 * This file is part of the Máximo Sojo - package.
 * 
 * (c) https://maxtoan.github.io/
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MXT\EChartBundle\Model\Options\PieChart;

use MXT\EChartBundle\Model\Options\Title;
use MXT\EChartBundle\Model\Options\Tooltip;
use MXT\EChartBundle\Model\Options\Legend;
use MXT\EChartBundle\Model\Options\Series;
use MXT\EChartBundle\Model\Options\Toolbox;

/**
 * PieChartOptions
 * 
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class PieChartOptions
{
    /**
     * Text to display for title.
     *
     * Default: no title
     *
     * @var string
     */
    protected $title;

	/**
     * @var Tooltip
     */
    protected $tooltip;

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
     * PieChartOptions constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->title = new Title();
        $this->tooltip = new Tooltip();
        $this->legend = new Legend();
        $this->series = new Series();
        $this->toolbox = new Toolbox();
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
}