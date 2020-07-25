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
 * XAxis
 * 
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class XAxis
{
    use \Maximosojo\EChartsPHP\Traits\TypeTrait;
    use \Maximosojo\EChartsPHP\Traits\DataTrait;
    
    /**
     * Legend constructor.
     */
    public function __construct()
    {
        $this->data = new Data();
    }
}