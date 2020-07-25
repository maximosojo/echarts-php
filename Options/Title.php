<?php

/*
 * This file is part of the Máximo Sojo - package.
 * 
 * (c) https://maxtoan.github.io/
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
    protected $text;

    /**
     * SubText
     * @var string
     */
    protected $subtext;

    use \Maximosojo\EChartsPHP\Traits\AxisTrait;

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
}
