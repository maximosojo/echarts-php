<?php

/*
 * This file is part of the Máximo Sojo - package.
 * 
 * (c) https://maxtoan.github.io/
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Maxtoan\EChartBundle\Model\Options;

/**
 * Toolbox
 * 
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class Toolbox
{
    /**
     * Show
     * @var string
     */
    protected $show;

    /**
     * @param string $show
     *
     * @return $this
     */
    public function getShow($show)
    {
        return $this->show;
    }
}
