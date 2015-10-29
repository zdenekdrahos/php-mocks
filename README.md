
## Expected method should be called

### Prophecy

```php
Some predictions failed:
  Double\PhpMocks\Dependency\P1:
    No calls have been made that match:
      Double\PhpMocks\Dependency\P1->expectedCall()
    but expected at least one.
```

### Mockery

```php
Mockery\Exception\InvalidCountException: Method expectedCall() from Mockery_0_PhpMocks_Dependency should be called
 exactly 1 times but called 0 times.

./vendor/mockery/mockery/library/Mockery/CountValidator/Exact.php:37
./vendor/mockery/mockery/library/Mockery/Expectation.php:271
./vendor/mockery/mockery/library/Mockery/ExpectationDirector.php:120
./vendor/mockery/mockery/library/Mockery/Container.php:297
./vendor/mockery/mockery/library/Mockery/Container.php:282
./vendor/mockery/mockery/library/Mockery.php:142
./tests/Test.php:28
```

### Phake

```php
Failed asserting that Expected PhpMocks\Dependency->expectedCall() to be called exactly <1> times, actually called <0> times. In fact, there are no interactions with this mock..

./vendor/phake/phake/src/Phake/Client/PHPUnit.php:56
./vendor/phake/phake/src/Phake/Proxies/VerifierProxy.php:109
./tests/Test.php:36
./tests/Test.php:36
```

### PhpUnit

```php
Expectation failed for method name is equal to <string:expectedCall> when invoked 1 time(s).
Method was expected to be called 1 times, actually called 0 times.
```

### Mockista

```php
Expected method PhpMocks\Dependency#1::expectedCall() should be called exactly once but not called at all.

./vendor/janmarek/mockista/Mockista/Method.php:199
./vendor/janmarek/mockista/Mockista/Mock.php:21
./vendor/janmarek/mockista/Mockista/Registry.php:103
./vendor/janmarek/mockista/Mockista/Registry.php:103
./tests/Test.php:54
```


## Call unexpected method in production code for mock without expectations

### Prophecy

```php
test passed :(
```

### Mockery

```php
BadMethodCallException: Method Mockery_0_PhpMocks_Dependency::unexpectedCall() does not exist on this mock object

./src/functions.php:12
./tests/DoNothingTest.php:25

```

### Phake

```php
test passed :(
```

### PhpUnit

```php
test passed :(
```

### Mockista

```php
Unexpected call in mock PhpMocks\Dependency#1::unexpectedCall(), args:

./vendor/janmarek/mockista/Mockista/Mock.php:98
./vendor/janmarek/mockista/Mockista/Mock.php:124
./src/functions.php:12
./tests/DoNothingTest.php:48
```
