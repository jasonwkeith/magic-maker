{"filter":false,"title":"PersonFactoryInterface.php","tooltip":"/jasonwkeith/Domain/Boundary/PersonFactoryInterface.php","undoManager":{"mark":9,"position":9,"stack":[[{"start":{"row":0,"column":0},"end":{"row":2,"column":47},"action":"remove","lines":["<?php","declare( strict_types = 1 );","namespace JasonWKeith\\Domain\\DataObject\\Person;"],"id":2},{"start":{"row":0,"column":0},"end":{"row":2,"column":38},"action":"insert","lines":["<?php","declare( strict_types = 1 );","namespace JasonWKeith\\Domain\\Boundary;"]}],[{"start":{"row":8,"column":0},"end":{"row":8,"column":31},"action":"remove","lines":["class PersonFactory implements "],"id":3},{"start":{"row":8,"column":0},"end":{"row":8,"column":1},"action":"insert","lines":["i"]},{"start":{"row":8,"column":1},"end":{"row":8,"column":2},"action":"insert","lines":["n"]},{"start":{"row":8,"column":2},"end":{"row":8,"column":3},"action":"insert","lines":["t"]},{"start":{"row":8,"column":3},"end":{"row":8,"column":4},"action":"insert","lines":["e"]},{"start":{"row":8,"column":4},"end":{"row":8,"column":5},"action":"insert","lines":["r"]},{"start":{"row":8,"column":5},"end":{"row":8,"column":6},"action":"insert","lines":["f"]},{"start":{"row":8,"column":6},"end":{"row":8,"column":7},"action":"insert","lines":["a"]},{"start":{"row":8,"column":7},"end":{"row":8,"column":8},"action":"insert","lines":["c"]},{"start":{"row":8,"column":8},"end":{"row":8,"column":9},"action":"insert","lines":["e"]}],[{"start":{"row":8,"column":9},"end":{"row":8,"column":10},"action":"insert","lines":[" "],"id":4}],[{"start":{"row":10,"column":0},"end":{"row":14,"column":0},"action":"remove","lines":["    public function __construct( ExceptionFactoryInterface $exception_factory )","    {","        $this->exception_factory = $exception_factory;","    }",""],"id":5},{"start":{"row":10,"column":0},"end":{"row":11,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":10,"column":127},"end":{"row":10,"column":128},"action":"insert","lines":[";"],"id":6}],[{"start":{"row":10,"column":128},"end":{"row":13,"column":5},"action":"remove","lines":["","    {","        return new Person( $authors, $guid, $published_year, $subtitle, $title );","    }"],"id":7}],[{"start":{"row":10,"column":114},"end":{"row":10,"column":118},"action":"remove","lines":["Book"],"id":8},{"start":{"row":10,"column":114},"end":{"row":10,"column":115},"action":"insert","lines":["P"]},{"start":{"row":10,"column":115},"end":{"row":10,"column":116},"action":"insert","lines":["e"]},{"start":{"row":10,"column":116},"end":{"row":10,"column":117},"action":"insert","lines":["r"]},{"start":{"row":10,"column":117},"end":{"row":10,"column":118},"action":"insert","lines":["s"]},{"start":{"row":10,"column":118},"end":{"row":10,"column":119},"action":"insert","lines":["o"]},{"start":{"row":10,"column":119},"end":{"row":10,"column":120},"action":"insert","lines":["n"]}],[{"start":{"row":4,"column":0},"end":{"row":6,"column":58},"action":"remove","lines":["use JasonWKeith\\Domain\\Boundary\\PersonInterface;","use JasonWKeith\\Domain\\Boundary\\PersonFactoryInterface;","use JasonWKeith\\Domain\\Boundary\\ExceptionFactoryInterface;"],"id":9},{"start":{"row":4,"column":0},"end":{"row":5,"column":0},"action":"remove","lines":["",""]},{"start":{"row":4,"column":0},"end":{"row":5,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":6,"column":28},"end":{"row":6,"column":130},"action":"remove","lines":["array $authors, string $guid, int $published_year, string $subtitle, string $title ): PersonInterface;"],"id":10},{"start":{"row":6,"column":28},"end":{"row":6,"column":119},"action":"insert","lines":["string $guid, string $first_name, string $middle_name, string $last_name ): PersonInterface"]}],[{"start":{"row":6,"column":119},"end":{"row":6,"column":120},"action":"insert","lines":[";"],"id":11}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":6,"column":120},"end":{"row":6,"column":120},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1615827492254,"hash":"0d737f38fea88317e47c5df832ab65ce07891409"}