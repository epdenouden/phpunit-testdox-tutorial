--TEST--
Override TestDox automatic naming capitalization
--FILE--
<?php declare(strict_types=1);
$arguments = [
    '--testdox',
    '--colors=always',
    'tests/unit/TestDoxAcronymCapitalizationTest.php'
];
\array_splice($_SERVER['argv'], 1, count($arguments), $arguments);

require __DIR__ . '/../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF_EXTERNAL--
../_files/raw-acronym-capitalization.txt
