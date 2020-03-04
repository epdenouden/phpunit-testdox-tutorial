<?php
class TestDoxDataProviderTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @testdox By default @testdox will show data rows with this postfix:
     * @dataProvider unnamedDataProvider
     */
    public function testTestdoxHasImprovedDefaultOutputForDataProviders(int $number, string $numberText)
    {
        $this->assertTrue(true);
    }

    /**
     * @testdox By default @testdox will show NAMED data rows like this:
     * @dataProvider namedDataProvider
     */
    public function testTestdoxHasImprovedDefaultOutputForNamedDataProviders(int $a, int $b, int $c)
    {
        $this->assertTrue(true);
    }

    /**
     * @dataProvider unnamedDataProvider
     */
    public function testTestdoxCanShowParameters(int $number, string $numberText)
    {
        $this->assertTrue(true);
    }

    /**
     * @dataProvider namedDataProvider
     */
    public function testTestdoxCanShowDataRowIdentifiers(int $a, int $b, int $expected)
    {
        $this->assertEquals($expected, $a + $b);
    }

    public static function unnamedDataProvider(): array
    {
        return [
            [1, 'one'],
            [2, 'two'],
        ];
    }

    public static function namedDataProvider(): array
    {
        return [
            "positive" => [1, 1, 2],
            "negative" => [1, -1, 0],
        ];
    }
}
