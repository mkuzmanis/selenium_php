<?php

namespace phptravis\Test;

class MySauceTest extends \Sauce\Sausage\WebDriverTestCase
{
    public static $browsers = array(
        array(
            'browserName' => 'chrome',
            'desiredCapabilities' => array(
                'platform' => 'Linux'
          )
        )
    );

    public function setUp()
    {
        parent::setUp();
        $this->setBrowserUrl('http://laacz.lv');
    }

    public function testTitle()
    {
        $this->url('http://laacz.lv');
        $this->assertContains("laacz.lv", $this->title());
    }
}