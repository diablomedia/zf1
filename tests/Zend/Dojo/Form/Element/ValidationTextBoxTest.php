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
 * @package    Zend_Dojo
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id$
 */

/** Zend_Dojo_Form_Element_ValidationTextBox */
require_once 'Zend/Dojo/Form/Element/ValidationTextBox.php';

/** Zend_View */
require_once 'Zend/View.php';

/** Zend_Registry */
require_once 'Zend/Registry.php';

/** Zend_Dojo_View_Helper_Dojo */
require_once 'Zend/Dojo/View/Helper/Dojo.php';

/**
 * Test class for Zend_Dojo_Form_Element_ValidationTextBox.
 *
 * @category   Zend
 * @package    Zend_Dojo
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @group      Zend_Dojo
 * @group      Zend_Dojo_Form
 */
class Zend_Dojo_Form_Element_ValidationTextBoxTest extends PHPUnit\Framework\TestCase
{
    /**
     * Sets up the fixture, for example, open a network connection.
     * This method is called before a test is executed.
     *
     * @return void
     */
    public function setUp()
    {
        Zend_Registry::_unsetInstance();
        Zend_Dojo_View_Helper_Dojo::setUseDeclarative();

        $this->view    = $this->getView();
        $this->element = $this->getElement();
        $this->element->setView($this->view);
    }

    /**
     * Tears down the fixture, for example, close a network connection.
     * This method is called after a test is executed.
     *
     * @return void
     */
    public function tearDown()
    {
    }

    public function getView()
    {
        require_once 'Zend/View.php';
        $view = new Zend_View();
        $view->addHelperPath('Zend/Dojo/View/Helper/', 'Zend_Dojo_View_Helper');
        return $view;
    }

    public function getElement()
    {
        $element = new Zend_Dojo_Form_Element_ValidationTextBox(
            'foo',
            array(
                'value' => 'some text',
                'label' => 'ValidationTextBox',
                'class' => 'someclass',
                'style' => 'width: 100px;',
            )
        );
        return $element;
    }

    public function testInvalidMessageAccessorsShouldProxyToDijitParams()
    {
        $this->assertNull($this->element->getInvalidMessage());
        $this->assertArrayNotHasKey('invalidMessage', $this->element->dijitParams);
        $this->element->setInvalidMessage('message');
        $this->assertEquals('message', $this->element->getInvalidMessage());
        $this->assertEquals('message', $this->element->dijitParams['invalidMessage']);
    }

    public function testPromptMessageAccessorsShouldProxyToDijitParams()
    {
        $this->assertNull($this->element->getPromptMessage());
        $this->assertArrayNotHasKey('promptMessage', $this->element->dijitParams);
        $this->element->setPromptMessage('message');
        $this->assertEquals('message', $this->element->getPromptMessage());
        $this->assertEquals('message', $this->element->dijitParams['promptMessage']);
    }

    public function testRegExpAccessorsShouldProxyToDijitParams()
    {
        $this->assertNull($this->element->getRegExp());
        $this->assertArrayNotHasKey('regExp', $this->element->dijitParams);
        $this->element->setRegExp('[\w]+');
        $this->assertEquals('[\w]+', $this->element->getRegExp());
        $this->assertEquals('[\w]+', $this->element->dijitParams['regExp']);
    }

    public function testConstraintsAccessorsShouldProxyToDijitParams()
    {
        $constraints = $this->element->getConstraints();
        $this->assertEmpty($constraints);
        $this->assertArrayNotHasKey('constraints', $this->element->dijitParams);

        $constraints = array('foo' => 'bar', 'bar' => 'baz');
        $this->element->setConstraints($constraints);
        $this->assertSame($constraints, $this->element->getConstraints());
        $this->assertSame($constraints, $this->element->dijitParams['constraints']);
    }

    public function testShouldAllowSettingRetrievingAndRemovingInvididualConstraints()
    {
        $constraints = $this->element->getConstraints();
        $this->assertEmpty($constraints);
        $this->assertFalse($this->element->hasDijitParam('constraints'));

        $this->element->setConstraint('foo', 'bar');
        $this->assertTrue($this->element->hasConstraint('foo'));
        $this->assertEquals('bar', $this->element->getConstraint('foo'));
        $this->assertTrue($this->element->hasDijitParam('constraints'));
        $this->assertEquals('bar', $this->element->dijitParams['constraints']['foo']);

        $this->element->removeConstraint('foo');
        $this->assertFalse($this->element->hasConstraint('foo'));
        $this->assertTrue($this->element->hasDijitParam('constraints'));
        $this->assertEmpty($this->element->dijitParams['constraints']);
    }

    public function testShouldAllowClearingConstraints()
    {
        $this->testConstraintsAccessorsShouldProxyToDijitParams();
        $this->element->clearConstraints();
        $this->assertFalse($this->element->hasDijitParam('constraints'));
    }

    public function testShouldRenderValidationTextBoxDijit()
    {
        $html = $this->element->render();
        $this->assertContains('dojoType="dijit.form.ValidationTextBox"', $html);
    }

    public function testSettingMultipleConstraintsShouldNotOverridePreviousConstraints()
    {
        $this->element->setConstraint('foo', 'bar');

        $this->element->setConstraints(array('spam' => 'ham'));

        $this->assertEquals('bar', $this->element->getConstraint('foo'));
    }
}
