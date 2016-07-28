<?php

namespace counterUnitTesting;

class Counter
{
    /*
     * @var integer
     */
    private $value;

    /*
     * @var integer
     */
    private $step;

    /**
     * Counter constructor.
     * @param int $value
     */
    public function __construct($value = 0, $step = 1)
    {
        if ($value === 'broken') {
            throw new \InvalidArgumentException();
        }
        $this->value = $value;
        $this->step = $step;
    }


    public function getValue()
    {
        return $this->value;
    }

    public function increment()
    {
        $this->value = $this->value + $this->step;
    }

    public function decrement()
    {
        --$this->value;
    }
}
