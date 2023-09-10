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
 * Grid
 * 
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class Grid
{
    /**
     * left
     * @var string
     */
    public $left;

    /**
     * right
     * @var string
     */
    public $right;

    /**
     * bottom
     * @var string
     */
    public $bottom;

    /**
     * containLabel
     * @var bool
     */
    public $containLabel;

    /**
     * Grid constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param string $left
     *
     * @return $this
     */
    public function setLeft(string $left)
    {
        $this->left = $left;

        return $this;
    }

    /**
     * @param string $right
     *
     * @return $this
     */
    public function setRight(string $right)
    {
        $this->right = $right;

        return $this;
    }

    /**
     * @param string $bottom
     *
     * @return $this
     */
    public function setBottom(string $bottom)
    {
        $this->bottom = $bottom;

        return $this;
    }

    /**
     * @param array $containLabel
     *
     * @return $this
     */
    public function setContainLabel(bool $containLabel)
    {
        $this->containLabel = $containLabel;

        return $this;
    }
}
