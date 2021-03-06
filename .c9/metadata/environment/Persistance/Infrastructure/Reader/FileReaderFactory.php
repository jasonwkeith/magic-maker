{"changed":true,"filter":false,"title":"FileReaderFactory.php","tooltip":"/Persistance/Infrastructure/Reader/FileReaderFactory.php","value":"<?php\ndeclare( strict_types = 1 );\nnamespace JasonWKeith\\Persistance\\Infrastructure\\File;\n\nuse JasonWKeith\\Domain\\Boundary\\Infrastructure\\Exception\\ExceptionFactoryInterface;\nuse JasonWKeith\\Domain\\Infrastructure\\Exception\\ExceptionFactoryTrait;\nuse JasonWKeith\\Persistance\\Boundary\\Infrastructure\\FileReader\\FileWriterFactoryInterface;\nuse JasonWKeith\\Persistance\\Boundary\\Infrastructure\\FileBinder\\FileWriterInterface;\nuse JasonWKeith\\Persistance\\Infrastructure\\FileHandler\\FileHandlerTrait;\n\nclass FileReaderFactory implements FileReaderFactoryInterface\n{\n    use ExceptionFactoryTrait;\n    use FileHandlerTrait;\n    \n    public function __construct( ExceptionFactoryInterface $exception_factory )\n    {\n        $this->setExceptionFactory( $exception_factory );\n    }\n\n    public function create( string $path, string $file_handle ): FileWriterInterface\n    {\n        $file_path = $this->getFilePath( $path, $file_handle );\n        \n        if( isPathInvalid( $path) )\n        {\n            $message = \"Invalid path.  Provided path was: $path\";\n            throw $this->exception_factory->create( $message );\n        }\n\n        return new File( fopen( $file_path, \"a\" ) );\n    }    \n}","undoManager":{"mark":-2,"position":3,"stack":[[{"start":{"row":10,"column":10},"end":{"row":10,"column":16},"action":"remove","lines":["Writer"],"id":2},{"start":{"row":10,"column":10},"end":{"row":10,"column":11},"action":"insert","lines":["R"]},{"start":{"row":10,"column":11},"end":{"row":10,"column":12},"action":"insert","lines":["a"]}],[{"start":{"row":10,"column":11},"end":{"row":10,"column":12},"action":"remove","lines":["a"],"id":3}],[{"start":{"row":10,"column":11},"end":{"row":10,"column":12},"action":"insert","lines":["e"],"id":4},{"start":{"row":10,"column":12},"end":{"row":10,"column":13},"action":"insert","lines":["a"]},{"start":{"row":10,"column":13},"end":{"row":10,"column":14},"action":"insert","lines":["d"]},{"start":{"row":10,"column":14},"end":{"row":10,"column":15},"action":"insert","lines":["e"]},{"start":{"row":10,"column":15},"end":{"row":10,"column":16},"action":"insert","lines":["r"]}],[{"start":{"row":10,"column":39},"end":{"row":10,"column":45},"action":"remove","lines":["Writer"],"id":5},{"start":{"row":10,"column":39},"end":{"row":10,"column":40},"action":"insert","lines":["R"]},{"start":{"row":10,"column":40},"end":{"row":10,"column":41},"action":"insert","lines":["e"]},{"start":{"row":10,"column":41},"end":{"row":10,"column":42},"action":"insert","lines":["a"]},{"start":{"row":10,"column":42},"end":{"row":10,"column":43},"action":"insert","lines":["d"]},{"start":{"row":10,"column":43},"end":{"row":10,"column":44},"action":"insert","lines":["e"]},{"start":{"row":10,"column":44},"end":{"row":10,"column":45},"action":"insert","lines":["r"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":13,"column":17},"end":{"row":13,"column":17},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1617031162874}