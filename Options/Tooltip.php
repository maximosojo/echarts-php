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
 * Tooltip
 * 
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class Tooltip
{
    /**
     * Trigger
     * @var string
     */
    protected $trigger;

    /**
     * Formatter
     * @var string
     */
    protected $formatter;

    /**
     * @param string $trigger
     *
     * @return $this
     */
    public function setTrigger($trigger)
    {
        $this->trigger = $trigger;

        return $this;
    }

    /**
     * @param string $formatter
     *
     * @return $this
     */
    public function setFormatter($formatter)
    {
        $this->formatter = $formatter;

        return $this;
    }
}
