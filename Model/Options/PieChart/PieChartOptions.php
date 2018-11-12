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

use MXT\EChartBundle\Model\Options\Legend;
use MXT\EChartBundle\Model\Options\Tooltip;

/**
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class PieChartOptions
{
	/**
     * @var Tooltip
     */
    protected $tooltip;

    /**
     * @var Legend
     */
    protected $legend;

    /**
     * PieChartOptions constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->tooltip = new Tooltip();
        $this->legend = new Legend();
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
}