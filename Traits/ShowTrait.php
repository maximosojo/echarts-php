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
 * ShowTrait
 * 
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
trait ShowTrait
{
    /**
     * Show
     * @var string
     */
    public $show;

    /**
     * @param string $show
     *
     * @return $this
     */
    public function setShow($show)
    {
        $this->show = $show;

        return $this;
    }
}