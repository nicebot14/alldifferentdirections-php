<?php
/**
 * Created by PhpStorm.
 * User: nicebot14
 * Date: 3/2/18
 * Time: 12:41 AM
 */

use PHPUnit\Framework\TestCase;

final class DirectionManagerTest extends TestCase
{
    public function testSampleData1()
    {
        $directions = [
            '30 40 start 90 walk 5',
            '40 50 start 180 walk 10 turn 90 walk 5'
        ];

        $directionManager = new \App\DirectionManager($directions);
        $averagePoint = $directionManager->getAveragePoint();
        $worstDistance = $directionManager->getWorstDistance($averagePoint);

        $this->assertEquals(30, $averagePoint->getX());
        $this->assertEquals(45, $averagePoint->getY());
        $this->assertEquals(0, $worstDistance);
    }

    public function testSampleData2()
    {
        $directions = [
            '87.342 34.30 start 0 walk 10.0',
            '2.6762 75.2811 start -45.0 walk 40 turn 40.0 walk 60',
            '58.518 93.508 start 270 walk 50 turn 90 walk 40 turn 13 walk 5',
        ];

        $directionManager = new \App\DirectionManager($directions);
        $averagePoint = $directionManager->getAveragePoint();
        $worstDistance = $directionManager->getWorstDistance($averagePoint);

        $this->assertEquals(97.1547, $averagePoint->getX());
        $this->assertEquals(40.2334, $averagePoint->getY());
        $this->assertEquals(7.63095, $worstDistance);
    }
}
