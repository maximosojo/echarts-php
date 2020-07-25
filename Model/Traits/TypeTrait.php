<?php

/*
 * This file is part of the Máximo Sojo - package.
 * 
 * (c) https://maxtoan.github.io/
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Maximosojo\EChartsPHP\Model\Traits;

/**
 * TypeTrait
 * 
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
trait TypeTrait
{
    /**
     * Type
     * @var string
     */
    protected $type;

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}