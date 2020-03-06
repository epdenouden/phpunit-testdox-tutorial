# PHPUnit TestDox tutorial

Download and install the tutorial and PHPUnit using Composer:
```shell script
composer create-project epdenouden/phpunit-testdox-tutorial
```

Keep self-testing and fixing until everything is green!
```shell script
cd phpunit-testdox-tutorial/
composer test
```

## Topics covered

| File | Topic |
|------|-------|
| [`unit/HowToUseThisTutorialTest.php`](./tests/unit/HowToUsethisTutorialTest.php) | `@testdox` annotation basics|
| [`unit/TestDoxAutomaticCapitalizationTest.php`](./tests/unit/TestDoxAutomaticCapitalizationTest.php) | improve naming of tests and test suites |
| [`unit/TestDoxDataProviderTest.php`](./tests/unit/TestDoxDataProviderTest.php) | data providers: quickly identify failing scenarios by including parameter values |
| [`end-to-end/*.phpt`](./tests/end-to-end/) | PHPUnit end-to-end (self-)testing |

## TestDox manual
- PHPUnit manual on the [`@testdox` annotation](https://phpunit.readthedocs.io/en/9.0/annotations.html#testdox)
- PHPUnit manual on the [`--testdox` command line option](https://phpunit.readthedocs.io/en/9.0/textui.html#testdox)
- [PHPT file format reference](https://qa.php.net/phpt_details.php)
