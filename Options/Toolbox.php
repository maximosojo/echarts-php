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
    public $show;

    /**
     * @param string $show
     *
     * @return $this
     */
    public function getShow()
    {
        return $this->show;
    }
}
