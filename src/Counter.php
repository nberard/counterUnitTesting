<?php

namespace counterUnitTesting;

class Counter
{
    /**
     * @var int
     */
    private $value;

    /**
     * @var int
     */
    private $step;

    public function __construct($initialValue = 0, $initialStep = 1)
    {
        $this->reInit($initialValue);
        $this->setStep($initialStep);
    }

    /**
     * @param int $value
     * @return $this
     */
    public function reInit($value)
    {
        if (!is_numeric($value)) {
            throw new \InvalidArgumentException('invalid init value');
        }
        $this->value = $value;
        return $this;
    }

    /**
     * @param int $step
     * @return $this
     */
    public function setStep($step)
    {
        if (!is_numeric($step)) {
            throw new \InvalidArgumentException('invalid step value');
        }
        $this->step = $step;
        return $this;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return $this
     */
    public function increment()
    {
        $this->value += $this->step;
        return $this;
    }

    /**
     * @return $this
     */
    public function decrement()
    {
        $this->value -= $this->step;
        return $this;
    }
}
