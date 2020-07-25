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
 * Legend
 * 
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class Legend
{
    /**
     * Orient
     * @var string
     */
    protected $orient;

    /**
     * Data
     * @var string
     */
    protected $data;

    use \Maximosojo\EChartsPHP\Traits\AxisTrait;

    /**
     * Legend constructor.
     */
    public function __construct()
    {
        $this->data = new Data();
    }

    /**
     * @param string $orient
     *
     * @return $this
     */
    public function setOrient($orient)
    {
        $this->orient = $orient;

        return $this;
    }

    /**
     * @param string $data
     *
     * @return $this
     */
    public function getData($data)
    {
        return $this->data;
    }
}
