<?php
namespace LeoGalleguillos\PinterestTest;

use LeoGalleguillos\Pinterest\Module;
use LeoGalleguillos\Test\ModuleTestCase;

class ModuleTest extends ModuleTestCase
{
    protected function setUp()
    {
        $this->module = new Module();
    }

    public function testInstance()
    {
        $this->assertInstanceOf(
            Module::class,
            $this->module
        );
    }
}
