<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Gdata_Gapps
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id $
 */

require_once 'Zend/Gdata/Gapps/Extension/Property.php';
require_once 'Zend/Gdata.php';

/**
 * @category   Zend
 * @package    Zend_Gdata_Gapps
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @group      Zend_Gdata
 * @group      Zend_Gdata_Gapps
 */
class Zend_Gdata_Gapps_PropertyTest extends PHPUnit\Framework\TestCase
{

    public function setUp(): void {
        $this->thePropertyText = file_get_contents(
                'Zend/Gdata/Gapps/_files/PropertyElementSample1.xml',
                true);
        $this->theProperty = new Zend_Gdata_Gapps_Extension_Property();
    }

    public function testEmptyPropertyShouldHaveNoExtensionElements() {
        $this->assertIsArray($this->theProperty->extensionElements);
        $this->assertTrue(count($this->theProperty->extensionElements) == 0);
    }

    public function testEmptyPropertyShouldHaveNoExtensionAttributes() {
        $this->assertIsArray($this->theProperty->extensionAttributes);
        $this->assertTrue(count($this->theProperty->extensionAttributes) == 0);
    }

    public function testSamplePropertyShouldHaveNoExtensionElements() {
        $this->theProperty->transferFromXML($this->thePropertyText);
        $this->assertIsArray($this->theProperty->extensionElements);
        $this->assertTrue(count($this->theProperty->extensionElements) == 0);
    }

    public function testSamplePropertyShouldHaveNoExtensionAttributes() {
        $this->theProperty->transferFromXML($this->thePropertyText);
        $this->assertIsArray($this->theProperty->extensionAttributes);
        $this->assertTrue(count($this->theProperty->extensionAttributes) == 0);
    }

    public function testNormalPropertyShouldHaveNoExtensionElements() {
        $this->theProperty->name = "foo";
        $this->theProperty->value = "bar";

        $this->assertEquals("foo", $this->theProperty->name);
        $this->assertEquals("bar", $this->theProperty->value);

        $this->assertCount(0, $this->theProperty->extensionElements);
        $newProperty = new Zend_Gdata_Gapps_Extension_Property();
        $newProperty->transferFromXML($this->theProperty->saveXML());
        $this->assertCount(0, $newProperty->extensionElements);
        $newProperty->extensionElements = array(
                new Zend_Gdata_App_Extension_Element('foo', 'atom', null, 'bar'));
        $this->assertCount(1, $newProperty->extensionElements);
        $this->assertEquals("foo", $newProperty->name);
        $this->assertEquals("bar", $newProperty->value);

        /* try constructing using magic factory */
        $gdata = new Zend_Gdata_Gapps();
        $newProperty2 = $gdata->newProperty();
        $newProperty2->transferFromXML($newProperty->saveXML());
        $this->assertCount(1, $newProperty2->extensionElements);
        $this->assertEquals("foo", $newProperty2->name);
        $this->assertEquals("bar", $newProperty2->value);
    }

    public function testEmptyPropertyToAndFromStringShouldMatch() {
        $propertyXml = $this->theProperty->saveXML();
        $newProperty = new Zend_Gdata_Gapps_Extension_Property();
        $newProperty->transferFromXML($propertyXml);
        $newPropertyXml = $newProperty->saveXML();
        $this->assertTrue($propertyXml == $newPropertyXml);
    }

    public function testPropertyWithValueToAndFromStringShouldMatch() {
        $this->theProperty->name = "foo2";
        $this->theProperty->value = "bar2";
        $propertyXml = $this->theProperty->saveXML();
        $newProperty = new Zend_Gdata_Gapps_Extension_Property();
        $newProperty->transferFromXML($propertyXml);
        $newPropertyXml = $newProperty->saveXML();
        $this->assertTrue($propertyXml == $newPropertyXml);
        $this->assertEquals("foo2", $this->theProperty->name);
        $this->assertEquals("bar2", $this->theProperty->value);
    }

    public function testExtensionAttributes() {
        $extensionAttributes = $this->theProperty->extensionAttributes;
        $extensionAttributes['foo1'] = array('name'=>'foo1', 'value'=>'bar');
        $extensionAttributes['foo2'] = array('name'=>'foo2', 'value'=>'rab');
        $this->theProperty->extensionAttributes = $extensionAttributes;
        $this->assertEquals('bar', $this->theProperty->extensionAttributes['foo1']['value']);
        $this->assertEquals('rab', $this->theProperty->extensionAttributes['foo2']['value']);
        $propertyXml = $this->theProperty->saveXML();
        $newProperty = new Zend_Gdata_Gapps_Extension_Property();
        $newProperty->transferFromXML($propertyXml);
        $this->assertEquals('bar', $newProperty->extensionAttributes['foo1']['value']);
        $this->assertEquals('rab', $newProperty->extensionAttributes['foo2']['value']);
    }

    public function testConvertFullNameToAndFromString() {
        $this->theProperty->transferFromXML($this->thePropertyText);
        $this->assertEquals("Some Name", $this->theProperty->name);
        $this->assertEquals("Some Value", $this->theProperty->value);
    }

}
