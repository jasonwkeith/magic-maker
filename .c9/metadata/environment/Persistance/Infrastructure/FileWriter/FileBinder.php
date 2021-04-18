{"filter":false,"title":"FileBinder.php","tooltip":"/Persistance/Infrastructure/FileWriter/FileBinder.php","undoManager":{"mark":56,"position":56,"stack":[[{"start":{"row":0,"column":0},"end":{"row":27,"column":1},"action":"insert","lines":["<?php","declare( strict_types = 1 );","namespace JasonWKeith\\Persistance\\Infrastructure\\File;","","use JasonWKeith\\Persistance\\Boundary\\Infrastructure\\File\\FileInterface;","","class File implements FileInterface","{","    public function __construct( ExceptionFactoryInterface $exception_factory, PersonFactoryInterface $person_factory, string $repository_path )","    {","        $this->setExceptionFactory( $exception_factory );  ","        $this->person_factory = $person_factory;","        $this->setRepositoryPath( $repository_path );","    }","","    public function loadFile( string $path ): PersonInterface","    {","        readfile ( string $filename )","        ","        return $this->authors;","    }","    ","    public function saveGUID(): void","    {","        ","    }","","}"],"id":1}],[{"start":{"row":4,"column":56},"end":{"row":4,"column":57},"action":"insert","lines":["R"],"id":2},{"start":{"row":4,"column":57},"end":{"row":4,"column":58},"action":"insert","lines":["e"]},{"start":{"row":4,"column":58},"end":{"row":4,"column":59},"action":"insert","lines":["a"]},{"start":{"row":4,"column":59},"end":{"row":4,"column":60},"action":"insert","lines":["d"]},{"start":{"row":4,"column":60},"end":{"row":4,"column":61},"action":"insert","lines":["e"]},{"start":{"row":4,"column":61},"end":{"row":4,"column":62},"action":"insert","lines":["r"]}],[{"start":{"row":4,"column":67},"end":{"row":4,"column":68},"action":"insert","lines":["R"],"id":3},{"start":{"row":4,"column":68},"end":{"row":4,"column":69},"action":"insert","lines":["e"]},{"start":{"row":4,"column":69},"end":{"row":4,"column":70},"action":"insert","lines":["a"]},{"start":{"row":4,"column":70},"end":{"row":4,"column":71},"action":"insert","lines":["d"]},{"start":{"row":4,"column":71},"end":{"row":4,"column":72},"action":"insert","lines":["e"]},{"start":{"row":4,"column":72},"end":{"row":4,"column":73},"action":"insert","lines":["r"]}],[{"start":{"row":21,"column":0},"end":{"row":25,"column":5},"action":"remove","lines":["    ","    public function saveGUID(): void","    {","        ","    }"],"id":4},{"start":{"row":21,"column":0},"end":{"row":22,"column":0},"action":"remove","lines":["",""]},{"start":{"row":21,"column":0},"end":{"row":22,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":15,"column":46},"end":{"row":15,"column":52},"action":"remove","lines":["Person"],"id":5},{"start":{"row":15,"column":46},"end":{"row":15,"column":47},"action":"insert","lines":["F"]},{"start":{"row":15,"column":47},"end":{"row":15,"column":48},"action":"insert","lines":["i"]},{"start":{"row":15,"column":48},"end":{"row":15,"column":49},"action":"insert","lines":["l"]},{"start":{"row":15,"column":49},"end":{"row":15,"column":50},"action":"insert","lines":["e"]}],[{"start":{"row":4,"column":83},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":6}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":83},"action":"insert","lines":["use JasonWKeith\\Persistance\\Boundary\\Infrastructure\\FileReader\\FileReaderInterface;"],"id":7}],[{"start":{"row":4,"column":67},"end":{"row":4,"column":73},"action":"remove","lines":["Reader"],"id":8}],[{"start":{"row":18,"column":0},"end":{"row":20,"column":30},"action":"remove","lines":["        readfile ( string $filename )","        ","        return $this->authors;"],"id":9}],[{"start":{"row":7,"column":10},"end":{"row":7,"column":11},"action":"insert","lines":["R"],"id":10},{"start":{"row":7,"column":11},"end":{"row":7,"column":12},"action":"insert","lines":["e"]},{"start":{"row":7,"column":12},"end":{"row":7,"column":13},"action":"insert","lines":["a"]},{"start":{"row":7,"column":13},"end":{"row":7,"column":14},"action":"insert","lines":["d"]},{"start":{"row":7,"column":14},"end":{"row":7,"column":15},"action":"insert","lines":["e"]},{"start":{"row":7,"column":15},"end":{"row":7,"column":16},"action":"insert","lines":["r"]}],[{"start":{"row":7,"column":32},"end":{"row":7,"column":33},"action":"insert","lines":["R"],"id":11},{"start":{"row":7,"column":33},"end":{"row":7,"column":34},"action":"insert","lines":["e"]},{"start":{"row":7,"column":34},"end":{"row":7,"column":35},"action":"insert","lines":["a"]},{"start":{"row":7,"column":35},"end":{"row":7,"column":36},"action":"insert","lines":["d"]},{"start":{"row":7,"column":36},"end":{"row":7,"column":37},"action":"insert","lines":["e"]},{"start":{"row":7,"column":37},"end":{"row":7,"column":38},"action":"insert","lines":["r"]}],[{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"insert","lines":["    "],"id":12}],[{"start":{"row":18,"column":4},"end":{"row":18,"column":8},"action":"insert","lines":["    "],"id":13}],[{"start":{"row":18,"column":8},"end":{"row":18,"column":9},"action":"insert","lines":["r"],"id":14},{"start":{"row":18,"column":9},"end":{"row":18,"column":10},"action":"insert","lines":["e"]},{"start":{"row":18,"column":10},"end":{"row":18,"column":11},"action":"insert","lines":["t"]},{"start":{"row":18,"column":11},"end":{"row":18,"column":12},"action":"insert","lines":["u"]},{"start":{"row":18,"column":12},"end":{"row":18,"column":13},"action":"insert","lines":["r"]},{"start":{"row":18,"column":13},"end":{"row":18,"column":14},"action":"insert","lines":["n"]}],[{"start":{"row":18,"column":14},"end":{"row":18,"column":15},"action":"insert","lines":[" "],"id":15}],[{"start":{"row":18,"column":15},"end":{"row":18,"column":16},"action":"insert","lines":["$"],"id":16},{"start":{"row":18,"column":16},"end":{"row":18,"column":17},"action":"insert","lines":["t"]},{"start":{"row":18,"column":17},"end":{"row":18,"column":18},"action":"insert","lines":["h"]},{"start":{"row":18,"column":18},"end":{"row":18,"column":19},"action":"insert","lines":["i"]},{"start":{"row":18,"column":19},"end":{"row":18,"column":20},"action":"insert","lines":["s"]},{"start":{"row":18,"column":20},"end":{"row":18,"column":21},"action":"insert","lines":["-"]},{"start":{"row":18,"column":21},"end":{"row":18,"column":22},"action":"insert","lines":[">"]},{"start":{"row":18,"column":22},"end":{"row":18,"column":23},"action":"insert","lines":["f"]},{"start":{"row":18,"column":23},"end":{"row":18,"column":24},"action":"insert","lines":["i"]}],[{"start":{"row":18,"column":24},"end":{"row":18,"column":25},"action":"insert","lines":["l"],"id":17},{"start":{"row":18,"column":25},"end":{"row":18,"column":26},"action":"insert","lines":["e"]},{"start":{"row":18,"column":26},"end":{"row":18,"column":27},"action":"insert","lines":["_"]},{"start":{"row":18,"column":27},"end":{"row":18,"column":28},"action":"insert","lines":["f"]},{"start":{"row":18,"column":28},"end":{"row":18,"column":29},"action":"insert","lines":["a"]},{"start":{"row":18,"column":29},"end":{"row":18,"column":30},"action":"insert","lines":["c"]}],[{"start":{"row":18,"column":30},"end":{"row":18,"column":31},"action":"insert","lines":["t"],"id":18},{"start":{"row":18,"column":31},"end":{"row":18,"column":32},"action":"insert","lines":["o"]},{"start":{"row":18,"column":32},"end":{"row":18,"column":33},"action":"insert","lines":["r"]},{"start":{"row":18,"column":33},"end":{"row":18,"column":34},"action":"insert","lines":["y"]},{"start":{"row":18,"column":34},"end":{"row":18,"column":35},"action":"insert","lines":["-"]},{"start":{"row":18,"column":35},"end":{"row":18,"column":36},"action":"insert","lines":[">"]}],[{"start":{"row":18,"column":36},"end":{"row":18,"column":37},"action":"insert","lines":["c"],"id":19},{"start":{"row":18,"column":37},"end":{"row":18,"column":38},"action":"insert","lines":["r"]},{"start":{"row":18,"column":38},"end":{"row":18,"column":39},"action":"insert","lines":["e"]},{"start":{"row":18,"column":39},"end":{"row":18,"column":40},"action":"insert","lines":["a"]},{"start":{"row":18,"column":40},"end":{"row":18,"column":41},"action":"insert","lines":["t"]},{"start":{"row":18,"column":41},"end":{"row":18,"column":42},"action":"insert","lines":["e"]}],[{"start":{"row":18,"column":42},"end":{"row":18,"column":44},"action":"insert","lines":["()"],"id":20}],[{"start":{"row":18,"column":43},"end":{"row":18,"column":44},"action":"insert","lines":[" "],"id":21}],[{"start":{"row":18,"column":43},"end":{"row":18,"column":44},"action":"insert","lines":[" "],"id":22},{"start":{"row":18,"column":44},"end":{"row":18,"column":45},"action":"insert","lines":["$"]},{"start":{"row":18,"column":45},"end":{"row":18,"column":46},"action":"insert","lines":["p"]},{"start":{"row":18,"column":46},"end":{"row":18,"column":47},"action":"insert","lines":["a"]},{"start":{"row":18,"column":47},"end":{"row":18,"column":48},"action":"insert","lines":["t"]},{"start":{"row":18,"column":48},"end":{"row":18,"column":49},"action":"insert","lines":["h"]}],[{"start":{"row":18,"column":51},"end":{"row":18,"column":52},"action":"insert","lines":[";"],"id":23}],[{"start":{"row":16,"column":20},"end":{"row":16,"column":24},"action":"remove","lines":["load"],"id":24},{"start":{"row":16,"column":20},"end":{"row":16,"column":21},"action":"insert","lines":["b"]},{"start":{"row":16,"column":21},"end":{"row":16,"column":22},"action":"insert","lines":["i"]},{"start":{"row":16,"column":22},"end":{"row":16,"column":23},"action":"insert","lines":["n"]},{"start":{"row":16,"column":23},"end":{"row":16,"column":24},"action":"insert","lines":["d"]}],[{"start":{"row":9,"column":79},"end":{"row":9,"column":142},"action":"remove","lines":["PersonFactoryInterface $person_factory, string $repository_path"],"id":25},{"start":{"row":9,"column":79},"end":{"row":9,"column":80},"action":"insert","lines":["F"]},{"start":{"row":9,"column":80},"end":{"row":9,"column":81},"action":"insert","lines":["i"]},{"start":{"row":9,"column":81},"end":{"row":9,"column":82},"action":"insert","lines":["l"]},{"start":{"row":9,"column":82},"end":{"row":9,"column":83},"action":"insert","lines":["e"]},{"start":{"row":9,"column":83},"end":{"row":9,"column":84},"action":"insert","lines":["F"]},{"start":{"row":9,"column":84},"end":{"row":9,"column":85},"action":"insert","lines":["A"]}],[{"start":{"row":9,"column":84},"end":{"row":9,"column":85},"action":"remove","lines":["A"],"id":26}],[{"start":{"row":9,"column":84},"end":{"row":9,"column":85},"action":"insert","lines":["A"],"id":27},{"start":{"row":9,"column":85},"end":{"row":9,"column":86},"action":"insert","lines":["C"]}],[{"start":{"row":9,"column":85},"end":{"row":9,"column":86},"action":"remove","lines":["C"],"id":28},{"start":{"row":9,"column":84},"end":{"row":9,"column":85},"action":"remove","lines":["A"]}],[{"start":{"row":9,"column":84},"end":{"row":9,"column":85},"action":"insert","lines":["a"],"id":29},{"start":{"row":9,"column":85},"end":{"row":9,"column":86},"action":"insert","lines":["c"]},{"start":{"row":9,"column":86},"end":{"row":9,"column":87},"action":"insert","lines":["t"]},{"start":{"row":9,"column":87},"end":{"row":9,"column":88},"action":"insert","lines":["o"]},{"start":{"row":9,"column":88},"end":{"row":9,"column":89},"action":"insert","lines":["r"]},{"start":{"row":9,"column":89},"end":{"row":9,"column":90},"action":"insert","lines":["y"]},{"start":{"row":9,"column":90},"end":{"row":9,"column":91},"action":"insert","lines":["I"]},{"start":{"row":9,"column":91},"end":{"row":9,"column":92},"action":"insert","lines":["n"]},{"start":{"row":9,"column":92},"end":{"row":9,"column":93},"action":"insert","lines":["t"]},{"start":{"row":9,"column":93},"end":{"row":9,"column":94},"action":"insert","lines":["e"]},{"start":{"row":9,"column":94},"end":{"row":9,"column":95},"action":"insert","lines":["r"]},{"start":{"row":9,"column":95},"end":{"row":9,"column":96},"action":"insert","lines":["f"]},{"start":{"row":9,"column":96},"end":{"row":9,"column":97},"action":"insert","lines":["a"]},{"start":{"row":9,"column":97},"end":{"row":9,"column":98},"action":"insert","lines":["c"]}],[{"start":{"row":9,"column":98},"end":{"row":9,"column":99},"action":"insert","lines":["e"],"id":30}],[{"start":{"row":9,"column":99},"end":{"row":9,"column":100},"action":"insert","lines":[" "],"id":31},{"start":{"row":9,"column":100},"end":{"row":9,"column":101},"action":"insert","lines":["$"]},{"start":{"row":9,"column":101},"end":{"row":9,"column":102},"action":"insert","lines":["f"]},{"start":{"row":9,"column":102},"end":{"row":9,"column":103},"action":"insert","lines":["i"]},{"start":{"row":9,"column":103},"end":{"row":9,"column":104},"action":"insert","lines":["l"]},{"start":{"row":9,"column":104},"end":{"row":9,"column":105},"action":"insert","lines":["e"]},{"start":{"row":9,"column":105},"end":{"row":9,"column":106},"action":"insert","lines":["_"]},{"start":{"row":9,"column":106},"end":{"row":9,"column":107},"action":"insert","lines":["f"]},{"start":{"row":9,"column":107},"end":{"row":9,"column":108},"action":"insert","lines":["a"]},{"start":{"row":9,"column":108},"end":{"row":9,"column":109},"action":"insert","lines":["c"]},{"start":{"row":9,"column":109},"end":{"row":9,"column":110},"action":"insert","lines":["t"]}],[{"start":{"row":9,"column":110},"end":{"row":9,"column":111},"action":"insert","lines":["o"],"id":32},{"start":{"row":9,"column":111},"end":{"row":9,"column":112},"action":"insert","lines":["r"]},{"start":{"row":9,"column":112},"end":{"row":9,"column":113},"action":"insert","lines":["y"]}],[{"start":{"row":12,"column":0},"end":{"row":13,"column":53},"action":"remove","lines":["        $this->person_factory = $person_factory;","        $this->setRepositoryPath( $repository_path );"],"id":33}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "],"id":34}],[{"start":{"row":12,"column":4},"end":{"row":12,"column":8},"action":"insert","lines":["    "],"id":35}],[{"start":{"row":12,"column":8},"end":{"row":12,"column":9},"action":"insert","lines":["$"],"id":36},{"start":{"row":12,"column":9},"end":{"row":12,"column":10},"action":"insert","lines":["t"]},{"start":{"row":12,"column":10},"end":{"row":12,"column":11},"action":"insert","lines":["h"]},{"start":{"row":12,"column":11},"end":{"row":12,"column":12},"action":"insert","lines":["i"]},{"start":{"row":12,"column":12},"end":{"row":12,"column":13},"action":"insert","lines":["s"]},{"start":{"row":12,"column":13},"end":{"row":12,"column":14},"action":"insert","lines":["-"]},{"start":{"row":12,"column":14},"end":{"row":12,"column":15},"action":"insert","lines":[">"]},{"start":{"row":12,"column":15},"end":{"row":12,"column":16},"action":"insert","lines":["f"]},{"start":{"row":12,"column":16},"end":{"row":12,"column":17},"action":"insert","lines":["i"]},{"start":{"row":12,"column":17},"end":{"row":12,"column":18},"action":"insert","lines":["l"]},{"start":{"row":12,"column":18},"end":{"row":12,"column":19},"action":"insert","lines":["e"]}],[{"start":{"row":12,"column":15},"end":{"row":12,"column":19},"action":"remove","lines":["file"],"id":37},{"start":{"row":12,"column":15},"end":{"row":12,"column":27},"action":"insert","lines":["file_factory"]}],[{"start":{"row":12,"column":27},"end":{"row":12,"column":28},"action":"insert","lines":[" "],"id":38},{"start":{"row":12,"column":28},"end":{"row":12,"column":29},"action":"insert","lines":["="]}],[{"start":{"row":12,"column":29},"end":{"row":12,"column":30},"action":"insert","lines":[" "],"id":39},{"start":{"row":12,"column":30},"end":{"row":12,"column":31},"action":"insert","lines":["$"]},{"start":{"row":12,"column":31},"end":{"row":12,"column":32},"action":"insert","lines":["f"]}],[{"start":{"row":12,"column":30},"end":{"row":12,"column":32},"action":"remove","lines":["$f"],"id":40},{"start":{"row":12,"column":30},"end":{"row":12,"column":43},"action":"insert","lines":["$file_factory"]}],[{"start":{"row":12,"column":43},"end":{"row":12,"column":44},"action":"insert","lines":[";"],"id":41}],[{"start":{"row":3,"column":0},"end":{"row":4,"column":0},"action":"insert","lines":["",""],"id":42}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":77},"action":"insert","lines":["use JasonWKeith\\Persistance\\Boundary\\Infrastructure\\FileReader\\FileInterface;"],"id":43}],[{"start":{"row":4,"column":16},"end":{"row":4,"column":27},"action":"remove","lines":["Persistance"],"id":44},{"start":{"row":4,"column":16},"end":{"row":4,"column":17},"action":"insert","lines":["D"]}],[{"start":{"row":4,"column":16},"end":{"row":4,"column":17},"action":"remove","lines":["D"],"id":45},{"start":{"row":4,"column":16},"end":{"row":4,"column":22},"action":"insert","lines":["Domain"]}],[{"start":{"row":4,"column":47},"end":{"row":4,"column":57},"action":"remove","lines":["FileReader"],"id":46},{"start":{"row":4,"column":47},"end":{"row":4,"column":48},"action":"insert","lines":["E"]},{"start":{"row":4,"column":48},"end":{"row":4,"column":49},"action":"insert","lines":["x"]}],[{"start":{"row":4,"column":47},"end":{"row":4,"column":49},"action":"remove","lines":["Ex"],"id":47},{"start":{"row":4,"column":47},"end":{"row":4,"column":56},"action":"insert","lines":["Exception"]}],[{"start":{"row":4,"column":57},"end":{"row":4,"column":61},"action":"remove","lines":["File"],"id":48},{"start":{"row":4,"column":57},"end":{"row":4,"column":58},"action":"insert","lines":["E"]},{"start":{"row":4,"column":58},"end":{"row":4,"column":59},"action":"insert","lines":["x"]}],[{"start":{"row":4,"column":57},"end":{"row":4,"column":68},"action":"remove","lines":["ExInterface"],"id":49},{"start":{"row":4,"column":57},"end":{"row":4,"column":82},"action":"insert","lines":["ExceptionFactoryInterface"]}],[{"start":{"row":5,"column":77},"end":{"row":6,"column":0},"action":"insert","lines":["",""],"id":50}],[{"start":{"row":6,"column":0},"end":{"row":6,"column":77},"action":"insert","lines":["use JasonWKeith\\Persistance\\Boundary\\Infrastructure\\FileReader\\FileInterface;"],"id":51}],[{"start":{"row":6,"column":67},"end":{"row":6,"column":68},"action":"insert","lines":["F"],"id":52},{"start":{"row":6,"column":68},"end":{"row":6,"column":69},"action":"insert","lines":["a"]}],[{"start":{"row":6,"column":63},"end":{"row":6,"column":78},"action":"remove","lines":["FileFaInterface"],"id":53},{"start":{"row":6,"column":63},"end":{"row":6,"column":83},"action":"insert","lines":["FileFactoryInterface"]}],[{"start":{"row":9,"column":10},"end":{"row":9,"column":16},"action":"remove","lines":["Reader"],"id":54},{"start":{"row":9,"column":10},"end":{"row":9,"column":11},"action":"insert","lines":["B"]},{"start":{"row":9,"column":11},"end":{"row":9,"column":12},"action":"insert","lines":["i"]},{"start":{"row":9,"column":12},"end":{"row":9,"column":13},"action":"insert","lines":["n"]},{"start":{"row":9,"column":13},"end":{"row":9,"column":14},"action":"insert","lines":["d"]},{"start":{"row":9,"column":14},"end":{"row":9,"column":15},"action":"insert","lines":["e"]},{"start":{"row":9,"column":15},"end":{"row":9,"column":16},"action":"insert","lines":["e"]},{"start":{"row":9,"column":16},"end":{"row":9,"column":17},"action":"insert","lines":["r"]}],[{"start":{"row":2,"column":53},"end":{"row":2,"column":54},"action":"insert","lines":["B"],"id":55}],[{"start":{"row":2,"column":49},"end":{"row":2,"column":54},"action":"remove","lines":["FileB"],"id":56},{"start":{"row":2,"column":49},"end":{"row":2,"column":60},"action":"insert","lines":["FileBindeer"]}],[{"start":{"row":17,"column":24},"end":{"row":17,"column":28},"action":"remove","lines":["File"],"id":57}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":17,"column":24},"end":{"row":17,"column":24},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1617027759733,"hash":"2d09382630217590df5ec6e6ba51398ed97392a8"}