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
class Series
{
    /**
     * Name
     * @var string
     */
    protected $name;

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
