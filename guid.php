<?php
declare( strict_types = 1 );

require_once( "/jasonwkeith/vendor/autoload.php" );

use Ramsey\Uuid\Uuid;


for( $i = 0; $i < 10; $i++ )
{
    echo "uuid$i :  " . Uuid::uuid4() ."\n";
}
