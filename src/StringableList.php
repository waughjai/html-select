<?php

declare( strict_types = 1 );
namespace WaughJ\HTMLSelect;

class StringableList
{
	public function __construct( array $list = [] )
	{
        $this->list = $list;
    }

    public function __toString()
    {
        $string = "";
        foreach ( $this->list as $item )
        {
            $string .= ( string )( $item );
        }
        return $string;
    }
    
    public $list;
}
