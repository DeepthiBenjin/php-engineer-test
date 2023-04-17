<?php
/*
 * The Diamond Class
 */

namespace FlickerLeap;

class Diamond extends Shape
{
    /**
     * @var int $length The length of the diamond (in pixels)
     */
    public $length;

    /**
     * Diamond constructor.
     *
     * @param int $length The length of the diamond (in pixels)
     */
    public function __construct($length)
    {
        $this->sides = 6;
        $this->sideLength = $length;
        $this->length = $length;
        parent::__construct();
    }

    /**
     * Draws the diamond shape.
     */
    public function draw()
    {
        // Calculate the center of the diamond
        $center = floor($this->length / 2);

        // Loop through the rows of the diamond
        for ($row = 0; $row < $this->length; $row++) {
            // Calculate the number of pixels to draw on this row
            $pixels = ($row < $center) ? ($row * 2) + 1 : (($this->length - $row - 1) * 2) + 1;

            // Calculate the amount of padding needed on this row
            $padding = $center - floor($pixels / 2);

            // Output the padding and pixels for this row
            echo $this->padding($padding);
            echo str_repeat($this->pixel, $pixels);
            $this->newLine();
        }
    }
}