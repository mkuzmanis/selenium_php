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
        $this->open('http://laacz.lv');
        $this->assertContains("laacz.lv", $this->title());
    }
    
    public function testArchive()
    {
$this->open('http://laacz.lv');
$link->byId('archive');
$link->click();
$this->assertContains("Archivs (laacz.lv)", $this->title());

    }
}