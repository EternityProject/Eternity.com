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
	     
	}
    
	public function sum($a,$b)
	{
	   
	   return $a+$b;
	}
	
    static $routes = array();
    public static function add($link, $url, $as = null){
        self::$routes[] = [
            'link'  =>  $link, 
            'url'   =>  $url,
            'as'    =>  $as
                ];
    }
    public static function getArray(){
        return self::$routes;
    }
    public static function name($input){
        foreach (self::$routes as $r){
            if($input == $r['as'] || $input == $r['link']){
                echo $r['link'];
                break;
            }
        }
    }
}