--TEST--
Use TestDox @dataProvider parameters
--FILE--
<?php declare(strict_types=1);
$arguments = [
    '--testdox',
    '--colors=always',
    'tests/unit/TestDoxDataProviderTest.php'
];
\array_splice($_SERVER['argv'], 1, count($arguments), $arguments);

require __DIR__ . '/../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF_EXTERNAL--
../_files/raw-dataproviders.txt
