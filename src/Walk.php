<?php
/**
 * Created by PhpStorm.
 * User: nicebot14
 * Date: 3/1/18
 * Time: 11:05 PM
 */

namespace App;

class Walk
{
    private $distance;

    public function __construct(float $distance)
    {
        $this->distance = $distance;
    }

    public function getDistance()
    {
        return $this->distance;
    }
}
