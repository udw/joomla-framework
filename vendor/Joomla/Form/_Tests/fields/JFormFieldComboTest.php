<?php
/**
 * @package     Joomla\Framework\Test
 * @subpackage  Form
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

/**
 * Test class for JForm.
 *
 * @package     Joomla\Framework\Test
 * @subpackage  Form
 *
 * @since       11.1
 */
class JFormFieldComboTest extends TestCase
{
	/**
	 * Sets up dependancies for the test.
	 *
	 * @return void
	 */
	protected function setUp()
	{
		include_once dirname(__DIR__) . '/inspectors.php';
	}

	/**
	 * Test the getInput method.
	 *
	 * @return void
	 */
	public function testGetInput()
	{
		$form = new JFormInspector('form1');

		$this->assertThat(
			$form->load('<form><field name="combo" type="combo" /></form>'),
			$this->isTrue(),
			'Line:' . __LINE__ . ' XML string should load successfully.'
		);

		$field = new JFormFieldCombo($form);

		$this->assertThat(
			$field->setup($form->getXml()->field, 'value'),
			$this->isTrue(),
			'Line:' . __LINE__ . ' The setup method should return true.'
		);

		$this->markTestIncomplete('Problems encountered in next assertion');

		$this->assertThat(
			strlen($field->input),
			$this->greaterThan(0),
			'Line:' . __LINE__ . ' The getInput method should return something without error.'
		);

		// TODO: Should check all the attributes have come in properly.
	}
}
