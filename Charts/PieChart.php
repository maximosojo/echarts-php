<?php

/*
 * This file is part of the Máximo Sojo - package.
 * 
 * (c) https://maxtoan.github.io/
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Maximosojo\EChartsPHP\Charts;

use Maximosojo\EChartsPHP\Model\Chart;
use Maximosojo\EChartsPHP\Options\Pie\PieOptions;

/**
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class PieChart extends Chart
{
    /**
     * @var PieOptions
     */
    public $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new PieOptions();
        $this->options->getSeries()->setType($this->getType());
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'pie';
    }

    /**
     * @return PieOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param $options PieOptions
     *
     * @return PieChart
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
