<?php

include 'vendor/autoload.php';

//print_r($_SERVER);

class Car
{
    protected $name;
    
    public function __construct( $name )
    {
        $this->name = $name;
    }
    
    public function getName()
    {
        return $this->name;
    }
}

class Bus
{
    protected $name;
    
    public function __construct( $name )
    {
        $this->name = $name;
    }
    
    public function hitCar( Car $car )
    {
        echo $this->name . " hits car " . $car->getName() . PHP_EOL;
    }
}

$ferrari    = new Car( 'F40' );
$moskvich   = new Car( '408' );

$setra    = new Bus( 'Bus Setra ' );
$mercedes   = new Bus( 'Bus Mercedes' );

var_dump( $ferrari );
var_dump( $moskvich );

$setra->hitCar( $ferrari );
$mercedes->hitCar( $moskvich );


/*
\App\Router::add('index', 'index.php', 'index');
\App\Router::add('gallery', 'gallery.php', 'gallery');
\App\Router::add('aboutus', 'aboutus.php', 'aboutus');
\App\Router::add('userid', 'userid.php', 'user');

\App\Router::getArray();

$routes = \App\Router::getArray();
print_r ($routes);
*/
echo 'done'; 
exit;