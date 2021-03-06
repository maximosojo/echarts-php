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
 * DataTrait
 * 
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
trait DataTrait
{
    /**
     * Data
     * @var string
     */
    public $data;

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