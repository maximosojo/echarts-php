<?php

namespace MXT\EChartBundle\Model\Options;

/**
 * AxisTrait
 * 
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class AxisTrait
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
