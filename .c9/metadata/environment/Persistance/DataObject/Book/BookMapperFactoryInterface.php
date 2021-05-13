{"filter":false,"title":"BookMapperFactoryInterface.php","tooltip":"/Persistance/DataObject/Book/BookMapperFactoryInterface.php","undoManager":{"mark":13,"position":13,"stack":[[{"start":{"row":6,"column":0},"end":{"row":6,"column":34},"action":"remove","lines":["class BookMapperFactory implements"],"id":2},{"start":{"row":6,"column":0},"end":{"row":6,"column":1},"action":"insert","lines":["i"]},{"start":{"row":6,"column":1},"end":{"row":6,"column":2},"action":"insert","lines":["n"]},{"start":{"row":6,"column":2},"end":{"row":6,"column":3},"action":"insert","lines":["t"]},{"start":{"row":6,"column":3},"end":{"row":6,"column":4},"action":"insert","lines":["e"]},{"start":{"row":6,"column":4},"end":{"row":6,"column":5},"action":"insert","lines":["r"]},{"start":{"row":6,"column":5},"end":{"row":6,"column":6},"action":"insert","lines":["f"]},{"start":{"row":6,"column":6},"end":{"row":6,"column":7},"action":"insert","lines":["a"]},{"start":{"row":6,"column":7},"end":{"row":6,"column":8},"action":"insert","lines":["c"]},{"start":{"row":6,"column":8},"end":{"row":6,"column":9},"action":"insert","lines":["e"]}],[{"start":{"row":9,"column":0},"end":{"row":13,"column":0},"action":"remove","lines":["    {","        $this->entity_factory = $entity_factory;","        $this->data_object_factory = $data_object_factory;","    }",""],"id":3},{"start":{"row":9,"column":0},"end":{"row":10,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":10,"column":0},"end":{"row":12,"column":5},"action":"remove","lines":["    {","        return new BookMapper( $this->entity_factory, $this->data_object_factory );","    }"],"id":4}],[{"start":{"row":9,"column":49},"end":{"row":9,"column":50},"action":"insert","lines":[";"],"id":5}],[{"start":{"row":8,"column":124},"end":{"row":8,"column":125},"action":"insert","lines":[";"],"id":6}],[{"start":{"row":10,"column":0},"end":{"row":11,"column":0},"action":"remove","lines":["",""],"id":7}],[{"start":{"row":2,"column":45},"end":{"row":2,"column":51},"action":"remove","lines":["Person"],"id":8},{"start":{"row":2,"column":45},"end":{"row":2,"column":46},"action":"insert","lines":["B"]},{"start":{"row":2,"column":46},"end":{"row":2,"column":47},"action":"insert","lines":["o"]},{"start":{"row":2,"column":47},"end":{"row":2,"column":48},"action":"insert","lines":["o"]},{"start":{"row":2,"column":48},"end":{"row":2,"column":49},"action":"insert","lines":["k"]}],[{"start":{"row":3,"column":0},"end":{"row":4,"column":0},"action":"insert","lines":["",""],"id":9}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":82},"action":"insert","lines":["use JasonWKeith\\Application\\Boundary\\Persistance\\Person\\PersonRepositoryInterface;"],"id":10}],[{"start":{"row":4,"column":0},"end":{"row":5,"column":69},"action":"remove","lines":["use JasonWKeith\\Application\\Boundary\\Persistance\\Person\\PersonRepositoryInterface;","use JasonWKeith\\Domain\\Boundary\\DataObject\\Book\\BookFactoryInterface;"],"id":11},{"start":{"row":4,"column":0},"end":{"row":6,"column":69},"action":"insert","lines":["use JasonWKeith\\Application\\Boundary\\Persistance\\Person\\PersonRepositoryInterface;","use JasonWKeith\\Domain\\Boundary\\DataObject\\Book\\BookInterface;","use JasonWKeith\\Domain\\Boundary\\DataObject\\Book\\BookFactoryInterface;"]}],[{"start":{"row":10,"column":32},"end":{"row":10,"column":123},"action":"remove","lines":[" BookFactoryInterface $entity_factory, BookDataObjectFactoryInterface $data_object_factory "],"id":12},{"start":{"row":10,"column":32},"end":{"row":10,"column":169},"action":"insert","lines":[" BookFactoryInterface $entity_factory, BookDataObjectFactoryInterface $data_object_factory, PersonRepositoryInterface $person_repository "]}],[{"start":{"row":7,"column":0},"end":{"row":7,"column":74},"action":"insert","lines":["use JasonWKeith\\Persistance\\Infrastructure\\History\\HistoryMapperInterface;"],"id":13}],[{"start":{"row":7,"column":74},"end":{"row":8,"column":0},"action":"insert","lines":["",""],"id":14}],[{"start":{"row":11,"column":0},"end":{"row":11,"column":170},"action":"remove","lines":["    public function __construct( BookFactoryInterface $entity_factory, BookDataObjectFactoryInterface $data_object_factory, PersonRepositoryInterface $person_repository )"],"id":15},{"start":{"row":11,"column":0},"end":{"row":17,"column":5},"action":"insert","lines":["    public function __construct","    ( ","        BookFactoryInterface $entity_factory, ","        BookDataObjectFactoryInterface $data_object_factory, ","        PersonRepositoryInterface $person_repository, ","        HistoryMapperInterface $history_mapper  ","    )"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":17,"column":5},"end":{"row":17,"column":5},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1620925277055,"hash":"ab23a32caa0f56b8dab9b77155f2ab13ae2dc1ed"}