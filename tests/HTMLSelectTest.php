<?php

declare( strict_types = 1 );

use PHPUnit\Framework\TestCase;
use WaughJ\HTMLSelect\HTMLSelect;

class HTMLSelectTest extends TestCase
{
	public function testBasicSelect() : void
	{
		$select = new HTMLSelect( [ 'one' => 'One', 'two' => 'Two', 'three' => 'Three' ], [ 'class' => 'select', 'id' => 'select-1' ] );
		$this->assertEquals( '<select class="select" id="select-1"><option value="one">One</option><option value="two">Two</option><option value="three">Three</option></select>', $select->getHTML() );
	}

	public function testSimplerSelect() : void
	{
		$select = new HTMLSelect( [ 'Zero', 'One', 'Two', 'Three' ], [ 'class' => 'select', 'id' => 'select-1' ] );
		$this->assertEquals( '<select class="select" id="select-1"><option value="0">Zero</option><option value="1">One</option><option value="2">Two</option><option value="3">Three</option></select>', $select->getHTML() );
	}

	public function testComplexSelect() : void
	{
		$select = new HTMLSelect( [ [ 'value' => 'one', 'name' => 'One' ], [ 'value' => 'two', 'name' => 'Two', 'selected' => true ], [ 'value' => 'three', 'name' => 'Three', ] ], [ 'class' => 'select', 'id' => 'select-1' ] );
		$this->assertEquals( '<select class="select" id="select-1"><option value="one">One</option><option value="two" selected="selected">Two</option><option value="three">Three</option></select>', $select->getHTML() );
	}
}
