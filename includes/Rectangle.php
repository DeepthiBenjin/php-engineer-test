<?php
/*
 * The Shape Class
 */

namespace FlickerLeap;

use FlickerLeap\Shape;

/**
 *
 */
class Rectangle extends Shape
{
    /**
     *
     * @param int $length
     * @param int $width
     */
    public function __construct($length = 5, $width = 10) {
        $this->name = 'Rectangle';
        $this->sides = 4;
        $this->sideLength = $length;
        $this->sideWidth = $width;
        $this->pixel = "*";
    }

    /**
     *
     */
    public function displayName()
    {
        echo $this->name;

    }

    /**
     * Draws the square.
     */
    public function draw()
    {
        for ($i = 0; $i < $this->sideLength; $i++) {
            for ($j = 0; $j < $this->sideWidth; $j++) {
                if ($i == 0 || $j == 0 || $i == $this->sideLength - 1 || $j == $this->sideWidth - 1) {
                    echo $this->pixel;
                } else {
                    echo $this->padding();
                }
            }
            $this->newLine();
        }
    }
}
