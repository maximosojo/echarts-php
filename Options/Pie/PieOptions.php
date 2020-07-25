<?php

/*
 * This file is part of the Máximo Sojo - package.
 * 
 * (c) https://maximosojo.github.io/
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Maximosojo\EChartsPHP\Options\Pie;

use Maximosojo\EChartsPHP\Options\Title;
use Maximosojo\EChartsPHP\Options\Tooltip;
use Maximosojo\EChartsPHP\Options\Legend;
use Maximosojo\EChartsPHP\Options\Series;
use Maximosojo\EChartsPHP\Options\Toolbox;

/**
 * PieOptions
 * 
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class PieOptions
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
     * @var Tooltip
     */
    public $tooltip;

    /**
     * @var Legend
     */
    public $legend;

    /**
     * @var Series
     */
    public $series;

    /**
     * @var Toolbox
     */
    public $toolbox;

    /**
     * PieOptions constructor.
     */
    public function __construct()
    {
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