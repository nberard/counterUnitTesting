<?php

namespace counterUnitTesting;

class CounterTest extends \PHPUnit_Framework_TestCase
{
    public function testStep1NewCounter()
    {
        $counter = new Counter();
        $this->assertEquals(0, $counter->getValue());
    }

    public function testStep2NewCounterAndInc()
    {
        $counter = new Counter();
        $counter->increment();
        $this->assertEquals(1, $counter->getValue());
    }

    public function testStep3NewCounterInit()
    {
        $counter = new Counter(42);
        $this->assertEquals(42, $counter->getValue());
    }

    public function testStep4NewCounterInitInc()
    {
        $counter = new Counter(42);
        $counter->increment();
        $this->assertEquals(43, $counter->getValue());
    }

    public function testStep5NewCounterInitDec()
    {
        $counter = new Counter(42);
        $counter->decrement();
        $this->assertEquals(41, $counter->getValue());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage invalid init value
     */
    public function testStep6NewCounterInitKo()
    {
        new Counter('broken');
    }

    public function testStep7NewCounterDec()
    {
        $counter = new Counter();
        $counter->decrement();
        $this->assertEquals(-1, $counter->getValue());
    }

    public function testStep8NewCounterIncDec()
    {
        $counter = new Counter();
        $counter->increment();
        $counter->decrement();
        $this->assertEquals(0, $counter->getValue());
    }

    public function testStep9NewCounterInitStep()
    {
        $counter = new Counter(11, 2);
        $this->assertEquals(11, $counter->getValue());
    }

    public function testStep9NewCounterInitStepInc()
    {
        $counter = new Counter(11, 2);
        $counter->increment();
        $this->assertEquals(13, $counter->getValue());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage invalid step value
     */
    public function testStep10NewCounterInitStepKo()
    {
        new Counter(11, 'failed');
    }

    public function testStep11NewCounterInitStepIncDec()
    {
        $counter = new Counter(11, 2);
        $counter->increment();
        $counter->increment();
        $counter->decrement();
        $this->assertEquals(13, $counter->getValue());
    }

    public function testStep12ChainCalls()
    {
        $counter = new Counter(11, 2);
        $counter->increment()->increment()->decrement();
        $this->assertEquals(13, $counter->getValue());
    }

    public function testStep13ChainCalls()
    {
        $counter = new Counter(42);
        $counter
            ->increment()
            ->increment()
            ->increment()
            ->increment()
            ->increment()
            ->increment()
            ->increment()
            ->increment()
            ->increment()
            ->increment();
        $this->assertEquals(52, $counter->getValue());
    }

    public function testStep14ReInit()
    {
        $counter = new Counter(42);
        $counter->reInit(3);
        $this->assertEquals(3, $counter->getValue());
    }

    public function testStep15ReInitInc()
    {
        $counter = new Counter(42);
        $counter->reInit(3);
        $counter->increment();
        $this->assertEquals(4, $counter->getValue());
    }

    public function testStep16IncDecStep()
    {
        $counter = new Counter(42, 3);
        $counter
            ->increment()
            ->increment()
            ->increment()
            ->increment()
            ->increment()
            ->increment()
            ->increment()
            ->increment()
            ->increment()
            ->increment()
            ->decrement()
            ->decrement()
            ->decrement();
        $this->assertEquals(63, $counter->getValue());
    }

    public function testStep17ChangeStep()
    {
        $counter = new Counter(42, 3);
        $counter->setStep(4);
        $counter->decrement();
        $this->assertEquals(38, $counter->getValue());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage invalid step value
     */
    public function testStep17ChangeStepKo()
    {
        $counter = new Counter(42, 3);
        $counter->setStep('wtf');
    }
}
