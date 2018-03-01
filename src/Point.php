<?php
/**
 * Created by PhpStorm.
 * User: nicebot14
 * Date: 3/1/18
 * Time: 10:51 PM
 */

namespace App;

class Point
{
    private $x;
    private $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return float
     */
    public function getX(): float
    {
        return $this->x;
    }

    /**
     * @return float
     */
    public function getY(): float
    {
        return $this->y;
    }

    public function createNewPoint(Turn $turn, Walk $walk)
    {
        $newX = $this->x + ($walk->getDistance() * cos($turn->getDegrees() * pi() / 180));
        $newY = $this->y + ($walk->getDistance() * sin($turn->getDegrees() * pi() / 180));

        return new Point($newX, $newY);
    }
}
