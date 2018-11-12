<?php

/*
 * This file is part of the Máximo Sojo - package.
 * 
 * (c) https://maxtoan.github.io/
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MXT\EChartBundle\Model\Options;

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
     * Data
     * @var string
     */
    protected $data;

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
     * @param string $data
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }
}
