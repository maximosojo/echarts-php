<?php

namespace MXT\EChartBundle\Model\Options;

/**
 * Data
 * 
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class Data
{
    /**
     * @var array
     */
    private $array;

    /**
     * Data constructor.
     */
    public function __construct()
    {
        $this->array = [];
    }

    /**
     * @return array
     */
    public function getArray()
    {
        return $this->array;
    }

    /**
     * @param array $array
     */
    public function setArray($array)
    {
        $this->array = $array;
    }
}
