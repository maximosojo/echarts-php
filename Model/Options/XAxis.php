<?php

/*
 * This file is part of the Máximo Sojo - package.
 * 
 * (c) https://maxtoan.github.io/
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Maximosojo\EChartsPHP\Model\Options;

/**
 * XAxis
 * 
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class XAxis
{
    use \Maximosojo\EChartsPHP\Model\Traits\TypeTrait;
    use \Maximosojo\EChartsPHP\Model\Traits\DataTrait;
    
    /**
     * Legend constructor.
     */
    public function __construct()
    {
        $this->data = new Data();
    }
}