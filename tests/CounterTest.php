<?php

namespace counterUnitTesting;

class CounterTest extends \PHPUnit_Framework_TestCase
{
    public function testGivenNewCounterShouldHaveValue0()
    {
        // Given
        $counter = null;

        // When
        $counter = new Counter();

        // Then
        $this->assertEquals(0, $counter->getValue());
    }

    public function testIncrementCounter()
    {
        $counter = new Counter();

        $counter->increment();

        $this->assertEquals(1, $counter->getValue());
    }

    public function testDecrementCounter()
    {
        $counter = new Counter();

        $counter->decrement();

        $this->assertEquals(-1, $counter->getValue());
    }

    public function testDecrementIncrementCounter()
    {
        $counter = new Counter();

        $counter->decrement();
        $counter->increment();

        $this->assertEquals(0, $counter->getValue());
    }

    public function testCounterInitValue()
    {
        $counter = new Counter(42);

        $this->assertEquals(42, $counter->getValue());
    }
    
    public function testCounterInitValueAndIncrement()
    {
        $counter = new Counter(42);
        $counter->increment();
        $this->assertEquals(43, $counter->getValue());
    }
    
    public function testCounterInitValueAndDecrement()
    {
        $counter = new Counter(42);
        $counter->decrement();
        $this->assertEquals(41, $counter->getValue());
    }

    public function testNewCounterBroken()
    {
        $this->setExpectedException('InvalidArgumentException');
        new Counter('broken');
    }

    public function testCounterInitValueAndStep()
    {
        $counter = new Counter(11, 2);

        $this->assertEquals(11, $counter->getValue());
    }

    public function testCounterInitValueAndStepAndIncrement()
    {
        $counter = new Counter(11, 2);

        $counter->increment();

        $this->assertEquals(13, $counter->getValue());
    }
}

