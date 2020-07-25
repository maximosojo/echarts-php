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
 * Title
 * 
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class Title
{
    /**
     * Text
     * @var string
     */
    public $text;

    /**
     * SubText
     * @var string
     */
    public $subtext;

    /**
     * Left
     * @var string
     */
    public $left;

    // use \Maximosojo\EChartsPHP\Traits\AxisTrait;

    /**
     * @param string $text
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @param string $subtext
     *
     * @return $this
     */
    public function setSubtext($subtext)
    {
        $this->subtext = $subtext;

        return $this;
    }

    /**
     * @param string $left
     *
     * @return $this
     */
    public function setLeft($left)
    {
        $this->left = $left;

        return $this;
    }
}
