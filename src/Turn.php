<?php
/**
 * Created by PhpStorm.
 * User: nicebot14
 * Date: 3/1/18
 * Time: 11:06 PM
 */

namespace App;

class Turn
{
    private $degrees;

    public function __construct(float $degrees)
    {
        $this->degrees = $degrees;
    }

    public function getDegrees(): float
    {
        return $this->degrees;
    }

    private function setDegrees(float $degrees): void
    {
        $this->degrees = $degrees;
    }

    public function add(Turn $action): void
    {
        $newDegrees = $this->degrees += $action->getDegrees();

        if ($newDegrees >= 0) {
            $newDegrees = ($newDegrees > 360) ? $newDegrees % 360 : $newDegrees;
        } else {
            $newDegrees = 360 - (-$newDegrees);
        }

        $this->setDegrees($newDegrees);
    }
}
