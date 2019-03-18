<?php

/*
 * This file is part of the Máximo Sojo - package.
 * 
 * (c) https://maxtoan.github.io/
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Maxtoan\EChartBundle\Model\Traits;

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
    protected $x;

    /**
     * y
     *
     * @var int
     */
    protected $y;

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
