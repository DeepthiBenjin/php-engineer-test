<?php
/*
 * The Diamond Class
 */

namespace FlickerLeap;

class Diamond extends Shape
{
    /**
     *
     * @param int $length The length of each side (in pixels)
     */
    public function __construct($length = 5)
    {
        $this->name = 'Diamond';
        $this->sides = 4;
        $this->sideLength = $length;
        $this->pixel = "*";
    }

    /**
     *
     */
    public function draw()
    {
        for ($i = 0; $i < $this->sideLength; $i++) {
            for ($j = 0; $j < $this->sideLength - $i; $j++) {
                echo $this->padding();
            }

            for ($j = 0; $j < 2 * $i + 1; $j++) {
                echo $this->pixel . $this->padding();
            }

            echo $this->newLine();
        }

        for ($i = $this->sideLength - 2; $i >= 0; $i--) {
            for ($j = 0; $j < $this->sideLength - $i; $j++) {
                echo $this->padding();
            }

            for ($j = 0; $j < 2 * $i + 1; $j++) {
                echo $this->pixel . $this->padding();
            }

            echo $this->newLine();
        }
    }
}
