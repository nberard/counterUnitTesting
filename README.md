# counterUnitTesting

The aim of this project is to do a tutorial on unit testing based on a simple class Counter

## Steps

| Action  | Result  |
|---|---|
| new counter | The counter value is 0  |
| new counter and increment it | The counter value is 1  |
| new counter with initial value 42 | The counter value is 42  |
| new counter(42) and increment it | The counter value is 43  |
| new counter(42) and decrement it | The counter value is 41  |
| new counter('broken') | Invalid argument exception raised  |
| new counter and decrement it | The counter value is -1  |
| new counter and increment it and decrement it | The counter value is 0  |
| new counter(11) and step of 2 | The counter value is 11  |
| new counter(11, 2) and increment it | The counter value is 13  |
| new counter(11, 'failed') | Invalid argument exception raised  |
| new counter(11, 2) and increment it(x2) and decrement it | The counter value is 13  |
| i can chain calls on the counter (counter->..()->..()) | --  |
| new counter(42) and increment it(x10) | The counter value is 52  |
| new counter(42) and increment and reinit(3) | The counter value is 3  |
| new counter(42) and reinit(3) and increment it | The counter value is 4  |
| new counter(42, 3) and increment it(x10) and decrement it(x3) | The counter value is 63  |
| new counter(42, 3) and changeStep(4) and decrement it | The counter value is 38 |
| new counter(42, 3) and changeStep('wtf') | Invalid argument exception raised  |

## How to test

```
composer install
bin/phpunit tests
```