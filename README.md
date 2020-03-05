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
| `HowToUseThisTutorialTest.php` | how and where to use `@testdox` annotations|
| `TestDoxAutomaticCapitalizationTest.php` | improve naming of individual tests and test suites |
| `TestDoxDataProviderTest.php` | quickly identify failing scenarios by including data provider parameters |
| `end-to-end/*.phpt` | PHPUnit end-to-end (self-)testing |

## TestDox manual
- PHPUnit manual on the [`@testdox` annotation](https://phpunit.readthedocs.io/en/9.0/annotations.html#testdox)
- PHPUnit manual on the [`--testdox` command line option](https://phpunit.readthedocs.io/en/9.0/textui.html#testdox)
