<?php

declare( strict_types = 1 );
namespace WaughJ\HTMLSelect;

use WaughJ\HTMLTag\HTMLTag;

class HTMLSelect extends HTMLTag
{
	public function __construct( array $options = [], array $atts = [] )
	{
		$this->options = new StringableList
		(
			self::arrayMap // PHP’s array_map & array_walk are bad.
			(
				function( $key, $item )
				{
					if ( is_array( $item ) && array_key_exists( 'value', $item ) && array_key_exists( 'name', $item ) )
					{
						$selected = $item[ 'selected' ] ?? false;
						return new HTMLOption( $item[ 'value' ], $item[ 'name' ], $selected );
					}
					return new HTMLOption( ( string )( $key ), $item );
				},
				$options
			)
		);
		parent::__construct( "select", $atts, $this->options );
	}

	private static function arrayMap( callable $function, array $array ) : array
	{
		$list = [];
		foreach ( $array as $key => $value )
		{
			$list[] = $function( $key, $value );
		}
		return $list;
	}

	private $options;
}
