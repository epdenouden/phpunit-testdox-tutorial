<?php
/**
 * @testdox How to use this tutorial
 */
class HowToUseThisTutorialTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @testdox Fix the errors by adding @testdox annotations
     * @group howto
     */
    public function testFixTheErrorsByAddingTestDoxAnnotations()
    {
        $this->assertTrue(true);
    }

    /**
     * @testdox You can add the @testdox annotation to $location
     * @dataProvider annotationLocationProvider
     * @group howto
     */
    public function testWhereToUseAnnotations(string $location)
    {
        $this->assertTrue(true);
    }

    /**
     * @testdox Stuck? Use the source!
     * @group howto
     */
    public function testUseTheSource()
    {
        $this->assertTrue(true);
    }

    public static function annotationLocationProvider()
    {
        return [
            ["TestCase classes"],
            ["TestCase methods"]
        ];
    }
}
