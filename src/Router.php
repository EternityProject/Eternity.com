<?php

namespace App;

class Router
{ 
	private $conf;

	public function __construct ( array $configuration )
	{
		$this->conf = $configuration;
	}
	
	public function getController( Request $req )
	{
	   $path   = $req->getPath();
	   $found  = array_key_exists( $path, $this->conf );
	   if( $found )
	   {
	       return new $this->conf[$path];
	   }
	   
	   return new $this->conf['404']; 
	}
}