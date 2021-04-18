{"filter":false,"title":"BookRepositoryInterface.php","tooltip":"/Persistance/Boundary/BookRepositoryInterface.php","undoManager":{"mark":13,"position":13,"stack":[[{"start":{"row":0,"column":0},"end":{"row":25,"column":1},"action":"insert","lines":["<?php","declare( strict_types = 1 );","namespace JasonWKeith\\Domain\\DataObject\\Book;","","use JasonWKeith\\Domain\\Boundary\\DataObject\\Person\\PersonInterface;","use JasonWKeith\\Domain\\Boundary\\DataObject\\Person\\PersonFactoryInterface;","use JasonWKeith\\Domain\\Boundary\\Infrastructure\\Exception\\ExceptionFactoryInterface;","use JasonWKeith\\Domain\\Persistance\\Infrastructure\\Repository\\RepositoryTrait;","use JasonWKeith\\Persistance\\Infrastructure\\ReaderConnection\\ReaderInterface;","use JasonWKeith\\Persistance\\Infrastructure\\WriterConnection\\WriterInterface;","","class BookRepository implements BookRepositoryInterface","{","    use RepositoryTrait;","","    public function add(  BookInterface $book ): void","    {","        $this->addItem( $book );","    }","","    public function get( string $guid ): BookInterface","    {","        return $this->getItem( $guid );","    }   ","","}"],"id":1}],[{"start":{"row":11,"column":0},"end":{"row":11,"column":31},"action":"remove","lines":["class BookRepository implements"],"id":2},{"start":{"row":11,"column":0},"end":{"row":11,"column":1},"action":"insert","lines":["i"]},{"start":{"row":11,"column":1},"end":{"row":11,"column":2},"action":"insert","lines":["n"]},{"start":{"row":11,"column":2},"end":{"row":11,"column":3},"action":"insert","lines":["t"]},{"start":{"row":11,"column":3},"end":{"row":11,"column":4},"action":"insert","lines":["e"]},{"start":{"row":11,"column":4},"end":{"row":11,"column":5},"action":"insert","lines":["r"]},{"start":{"row":11,"column":5},"end":{"row":11,"column":6},"action":"insert","lines":["f"]},{"start":{"row":11,"column":6},"end":{"row":11,"column":7},"action":"insert","lines":["a"]},{"start":{"row":11,"column":7},"end":{"row":11,"column":8},"action":"insert","lines":["c"]},{"start":{"row":11,"column":8},"end":{"row":11,"column":9},"action":"insert","lines":["e"]}],[{"start":{"row":13,"column":0},"end":{"row":14,"column":0},"action":"remove","lines":["    use RepositoryTrait;",""],"id":3},{"start":{"row":13,"column":0},"end":{"row":14,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":14,"column":0},"end":{"row":17,"column":0},"action":"remove","lines":["    {","        $this->addItem( $book );","    }",""],"id":4},{"start":{"row":14,"column":0},"end":{"row":15,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":15,"column":0},"end":{"row":17,"column":8},"action":"remove","lines":["    {","        return $this->getItem( $guid );","    }   "],"id":5},{"start":{"row":15,"column":0},"end":{"row":16,"column":0},"action":"remove","lines":["",""]},{"start":{"row":15,"column":0},"end":{"row":16,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":13,"column":53},"end":{"row":13,"column":54},"action":"insert","lines":[";"],"id":6}],[{"start":{"row":14,"column":54},"end":{"row":14,"column":55},"action":"insert","lines":[";"],"id":7}],[{"start":{"row":14,"column":55},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":8},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":15,"column":0},"end":{"row":15,"column":48},"action":"insert","lines":["    public function remove( string $guid ): void"],"id":9}],[{"start":{"row":15,"column":48},"end":{"row":15,"column":49},"action":"insert","lines":[";"],"id":10}],[{"start":{"row":4,"column":43},"end":{"row":4,"column":49},"action":"remove","lines":["Person"],"id":11},{"start":{"row":4,"column":43},"end":{"row":4,"column":44},"action":"insert","lines":["B"]},{"start":{"row":4,"column":44},"end":{"row":4,"column":45},"action":"insert","lines":["o"]},{"start":{"row":4,"column":45},"end":{"row":4,"column":46},"action":"insert","lines":["o"]},{"start":{"row":4,"column":46},"end":{"row":4,"column":47},"action":"insert","lines":["k"]}],[{"start":{"row":4,"column":48},"end":{"row":4,"column":54},"action":"remove","lines":["Person"],"id":12},{"start":{"row":4,"column":48},"end":{"row":4,"column":49},"action":"insert","lines":["B"]},{"start":{"row":4,"column":49},"end":{"row":4,"column":50},"action":"insert","lines":["o"]},{"start":{"row":4,"column":50},"end":{"row":4,"column":51},"action":"insert","lines":["o"]},{"start":{"row":4,"column":51},"end":{"row":4,"column":52},"action":"insert","lines":["k"]}],[{"start":{"row":5,"column":0},"end":{"row":9,"column":76},"action":"remove","lines":["use JasonWKeith\\Domain\\Boundary\\DataObject\\Person\\PersonFactoryInterface;","use JasonWKeith\\Domain\\Boundary\\Infrastructure\\Exception\\ExceptionFactoryInterface;","use JasonWKeith\\Domain\\Persistance\\Infrastructure\\Repository\\RepositoryTrait;","use JasonWKeith\\Persistance\\Infrastructure\\ReaderConnection\\ReaderInterface;","use JasonWKeith\\Persistance\\Infrastructure\\WriterConnection\\WriterInterface;"],"id":13},{"start":{"row":5,"column":0},"end":{"row":6,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":0,"column":0},"end":{"row":2,"column":45},"action":"remove","lines":["<?php","declare( strict_types = 1 );","namespace JasonWKeith\\Domain\\DataObject\\Book;"],"id":14},{"start":{"row":0,"column":0},"end":{"row":2,"column":43},"action":"insert","lines":["<?php","declare( strict_types = 1 );","namespace JasonWKeith\\Persistance\\Boundary;"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":2,"column":43},"end":{"row":2,"column":43},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1617292186006,"hash":"84bc8d1301780a9935358384011711ee776d4f54"}