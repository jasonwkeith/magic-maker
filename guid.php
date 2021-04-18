<?php
declare( strict_types = 1 );
ini_set( 'display_errors', "1" );
ini_set( 'display_startup_errors', "1" );
error_reporting( E_ALL );

require_once( "/jasonwkeith/vendor/autoload.php" );

use Ramsey\Uuid\Uuid;


for( $i = 0; $i < 10; $i++ )
{
    echo "uuid$i :  " . Uuid::uuid4() ."\n";
}
