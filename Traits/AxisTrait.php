<?php

/*
 * This file is part of the Máximo Sojo - package.
 * 
 * (c) https://maximosojo.github.io/
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Maximosojo\EChartsPHP\Traits;

/**
 * AxisTrait
 * 
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
trait AxisTrait
{
    /**
     *  x
     *
     * @var int
     */
    public $x;

    /**
     * y
     *
     * @var int
     */
    public $y;

    /**
     * @param int $x
     *
     * @return $this
     */
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * @param int $y
     *
     * @return $this
     */
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }
}
