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
 * Label
 * 
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class Label
{
    /**
     * Text
     * @var string
     */
    public $position;

    use \Maximosojo\EChartsPHP\Traits\ShowTrait;

    /**
     * @param string $position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }
}
