{"filter":false,"title":"BookPersisterInterface.php","tooltip":"/Persistance/DataObject/Book/BookPersisterInterface.php","undoManager":{"mark":18,"position":18,"stack":[[{"start":{"row":9,"column":0},"end":{"row":9,"column":30},"action":"remove","lines":["class BookPersister implements"],"id":2},{"start":{"row":9,"column":0},"end":{"row":9,"column":1},"action":"insert","lines":["i"]},{"start":{"row":9,"column":1},"end":{"row":9,"column":2},"action":"insert","lines":["n"]},{"start":{"row":9,"column":2},"end":{"row":9,"column":3},"action":"insert","lines":["t"]},{"start":{"row":9,"column":3},"end":{"row":9,"column":4},"action":"insert","lines":["e"]},{"start":{"row":9,"column":4},"end":{"row":9,"column":5},"action":"insert","lines":["r"]},{"start":{"row":9,"column":5},"end":{"row":9,"column":6},"action":"insert","lines":["f"]},{"start":{"row":9,"column":6},"end":{"row":9,"column":7},"action":"insert","lines":["f"]},{"start":{"row":9,"column":7},"end":{"row":9,"column":8},"action":"insert","lines":["a"]},{"start":{"row":9,"column":8},"end":{"row":9,"column":9},"action":"insert","lines":["c"]},{"start":{"row":9,"column":9},"end":{"row":9,"column":10},"action":"insert","lines":["e"]}],[{"start":{"row":9,"column":6},"end":{"row":9,"column":7},"action":"remove","lines":["f"],"id":3}],[{"start":{"row":11,"column":0},"end":{"row":19,"column":5},"action":"remove","lines":["    use ExceptionFactoryTrait;","    ","    public function __construct( ExceptionFactoryInterface $exception_Factory, WriterConnectionInterface $writer, ReaderConnectionInterface $reader, BookDataObjectFactoryInterface $data_object_factory )","    {","        $this->setExceptionFactory( $exception_Factory );","        $this->writer = $writer;","        $this->reader = $reader;","        $this->data_object_factory = $data_object_factory;","    }"],"id":4}],[{"start":{"row":13,"column":71},"end":{"row":21,"column":4},"action":"remove","lines":["","    {","        $resource = $this->getFileResource( $this->connection_parameters[ ConnectionParametersInterface::FILE_PATH ], 'w+' ) ;","        $standard_objects = $this->loadStandardObjects();","        $standard_objects[ $data_object->getGUID() ] = $data_object;","        ","        fwrite( $resource, json_encode( $standard_objects ) );","    }","    "],"id":5}],[{"start":{"row":14,"column":65},"end":{"row":22,"column":4},"action":"remove","lines":["","    {","        $standard_objects = $this->loadStandardObjects();        ","        $this->throwInvalidGUIDException( isset( $standard_objects[ $data_object->getGUID() ] ), $guid );","        $standard_object = $standard_objects[ $guid ];","        ","        return $this->data_object_factory->create( $standard_object->guid, $standard_object->authors, $standard_object->published_year, $standard_object->subtitle, $standard_object->title );","    }","    "],"id":6}],[{"start":{"row":15,"column":1},"end":{"row":27,"column":5},"action":"remove","lines":["   private function loadStandardObjects(): array","    {","        return json_decode( $this->reader->read() );","    }","    ","    private function throwInvalidGUIDException( bool $exists, string $guid ) :void","    {","        if( ! $exists )","        {","            $message = \"Cannot locate saved data for GUID $guid.\";","            throw $this->createException( $message );","        }","    }"],"id":7},{"start":{"row":15,"column":1},"end":{"row":16,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":15,"column":0},"end":{"row":15,"column":1},"action":"remove","lines":[" "],"id":8}],[{"start":{"row":14,"column":65},"end":{"row":14,"column":66},"action":"insert","lines":[";"],"id":9}],[{"start":{"row":13,"column":71},"end":{"row":13,"column":72},"action":"insert","lines":[";"],"id":10}],[{"start":{"row":11,"column":0},"end":{"row":12,"column":4},"action":"remove","lines":["","    "],"id":11},{"start":{"row":11,"column":0},"end":{"row":12,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":11,"column":26},"end":{"row":11,"column":27},"action":"remove","lines":[" "],"id":12}],[{"start":{"row":11,"column":26},"end":{"row":11,"column":27},"action":"insert","lines":[" "],"id":13}],[{"start":{"row":4,"column":0},"end":{"row":7,"column":72},"action":"remove","lines":["use JasonWKeith\\Domain\\Boundary\\Infrastructure\\Exception\\ExceptionFactoryInterface;","use JasonWKeith\\Persistance\\Infrastructure\\Exception\\ExceptionFactoryTrait;","use JasonWKeith\\Persistance\\Infrastructure\\ConnectionParameters\\ConnectionParametersInterface;","use JasonWKeith\\Persistance\\Infrastructure\\FileHandler\\FileHandlerTrait;"],"id":14},{"start":{"row":4,"column":0},"end":{"row":5,"column":0},"action":"remove","lines":["",""]},{"start":{"row":4,"column":0},"end":{"row":5,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":7,"column":66},"end":{"row":8,"column":0},"action":"insert","lines":["",""],"id":15},{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":8,"column":0},"end":{"row":8,"column":85},"action":"insert","lines":["    public function readCollection( array $guids ): BookDataObjectCollectionInterface"],"id":16}],[{"start":{"row":8,"column":85},"end":{"row":8,"column":86},"action":"insert","lines":[";"],"id":17}],[{"start":{"row":8,"column":90},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":18},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":9,"column":0},"end":{"row":9,"column":48},"action":"insert","lines":["    public function remove( string $guid ): void"],"id":19}],[{"start":{"row":9,"column":48},"end":{"row":9,"column":49},"action":"insert","lines":[";"],"id":20}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":9,"column":49},"end":{"row":9,"column":49},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1618855396818,"hash":"b42113225e20c954f64257759c733847652b7e9f"}