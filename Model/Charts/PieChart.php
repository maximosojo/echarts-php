<?php

/*
 * This file is part of the Máximo Sojo - package.
 * 
 * (c) https://maxtoan.github.io/
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Maxtoan\EChartBundle\Model\Charts;

use Maxtoan\EChartBundle\Model\Chart;
use Maxtoan\EChartBundle\Model\Options\PieChart\PieChartOptions;

/**
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class PieChart extends Chart
{
    /**
     * @var PieChartOptions
     */
    protected $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new PieChartOptions();
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
     * @return PieChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param $options PieChartOptions
     *
     * @return PieChart
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
