<?php
/**
 * Created by PhpStorm.
 * User: nicebot14
 * Date: 3/2/18
 * Time: 12:17 AM
 */

namespace App;

class Application
{
    public function init()
    {
        print "App successfully loaded! You can input data below.\r\nSee example: https://open.kattis.com/problems/alldifferentdirections\r\n";

        $numberOfInputs = (int) readline();
        $directions = [];

        for ($i = 1; $i <= $numberOfInputs; $i++) {
            $directions[] = readline();
        }

        $directionManager = new DirectionManager($directions);

        $averagePoint = $directionManager->getAveragePoint();
        $worstDistance = $directionManager->getWorstDistance($averagePoint);

        print $averagePoint->getX() . ' ';
        print $averagePoint->getY() . ' ';
        print $worstDistance;
        readline();
    }
}
