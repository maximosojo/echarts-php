<?php

/*
 * This file is part of the Máximo Sojo - package.
 * 
 * (c) https://maxtoan.github.io/
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Maximosojo\EChartsPHP\Options;

/**
 * Legend
 * 
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class Legend
{
    /**
     * Orient
     * @var string
     */
    protected $orient;

    /**
     * Right
     * @var string
     */
    protected $right;

    /**
     * top
     * @var string
     */
    protected $top;

    /**
     * Bottom
     * @var string
     */
    protected $bottom;

    /**
     * Selected
     * @var string
     */
    protected $selected;

    // use \Maximosojo\EChartsPHP\Traits\AxisTrait;
    use \Maximosojo\EChartsPHP\Traits\DataTrait;

    /**
     * Legend constructor.
     */
    public function __construct()
    {
        $this->data = new Data();
    }

    /**
     * @param string $orient
     *
     * @return $this
     */
    public function setOrient($orient)
    {
        $this->orient = $orient;

        return $this;
    }

    /**
     * @param string $right
     *
     * @return $this
     */
    public function setRight($right)
    {
        $this->right = $right;

        return $this;
    }

    /**
     * @param string $top
     *
     * @return $this
     */
    public function setTop($top)
    {
        $this->top = $top;

        return $this;
    }

    /**
     * @param string $bottom
     *
     * @return $this
     */
    public function setBottom($bottom)
    {
        $this->bottom = $bottom;

        return $this;
    }

    /**
     * @param string $selected
     *
     * @return $this
     */
    public function setSelected($selected)
    {
        $this->selected = $selected;

        return $this;
    }
}
