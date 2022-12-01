<?php

/*
 * This file is part of the Máximo Sojo - package.
 * 
 * (c) https://maximosojo.github.io/
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
     * Type
     * @var string
     */
    public $type;

    /**
     * Orient
     * @var string
     */
    public $orient;

    /**
     * Right
     * @var string
     */
    public $right;

    /**
     * top
     * @var string
     */
    public $top;

    /**
     * Bottom
     * @var string
     */
    public $bottom;

    /**
     * Selected
     * @var string
     */
    public $selected;

    // use \Maximosojo\EChartsPHP\Traits\AxisTrait;
    use \Maximosojo\EChartsPHP\Traits\DataTrait;
    use \Maximosojo\EChartsPHP\Traits\ShowTrait;

    /**
     * Legend constructor.
     */
    public function __construct()
    {
        $this->data = new Data();
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
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
