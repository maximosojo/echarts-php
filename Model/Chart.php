<?php

/*
 * This file is part of the Máximo Sojo - package.
 * 
 * (c) https://maxtoan.github.io/
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Maximosojo\EChartsPHP\Model;

use Maximosojo\EChartsPHP\Interfaces\ChartOptionsInterface;

/**
 * Chart
 * 
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
abstract class Chart
{
    /**
     * @var string
     */
    protected $elementID;

    /**
     * @var ChartOptionsInterface
     */
    protected $options;

    public function __construct()
    {
    }

    /**
     * Returns the instance options.
     */
    abstract public function getOptions();

    /**
     * Sets the instance Options.
     *
     * @param ChartOptionsInterface $options
     *
     * @return ChartOptionsInterface
     */
    abstract public function setOptions($options);

    /**
     * @param string $elementID
     *
     * @return $this
     */
    public function setElementID($elementID)
    {
        $this->elementID = $elementID;

        return $this;
    }

    /**
     * @return string
     */
    public function getElementID()
    {
        return $this->elementID;
    }
}
