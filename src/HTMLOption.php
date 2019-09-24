<?php

declare( strict_types = 1 );
namespace WaughJ\HTMLSelect;

use WaughJ\HTMLTag\HTMLTag;

class HTMLOption extends HTMLTag
{
	public function __construct( string $value, string $content, bool $selected = false )
	{
		$atts = [ 'value' => $value ];
		if ( $selected )
		{
			$atts[ 'selected' ] = 'selected';
		}
		parent::__construct( "option", $atts, $content );
	}
}
