{"filter":false,"title":"PersonMapper.php","tooltip":"/Persistance/DataObject/Person/PersonMapper.php","undoManager":{"mark":41,"position":41,"stack":[[{"start":{"row":23,"column":5},"end":{"row":24,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":24,"column":0},"end":{"row":24,"column":4},"action":"insert","lines":["    "]},{"start":{"row":24,"column":4},"end":{"row":25,"column":0},"action":"insert","lines":["",""]},{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":25,"column":0},"end":{"row":28,"column":5},"action":"insert","lines":["    public function createEntity( PersonDataObjectInterface $data_object ): PersonInterface","    {","        return $this->person_factory->create( $data_object->getGUID(), $data_object->getFirstName(), $data_object->getMiddleName(), $data_object->getLastName(), $data_object->getNickname(), $data_object->getSuffix(), $data_object->hasMD(), $data_object->hasPHD() );","    }"],"id":3}],[{"start":{"row":25,"column":32},"end":{"row":25,"column":33},"action":"insert","lines":["C"],"id":4}],[{"start":{"row":25,"column":20},"end":{"row":25,"column":33},"action":"remove","lines":["createEntityC"],"id":5},{"start":{"row":25,"column":20},"end":{"row":25,"column":42},"action":"insert","lines":["createEntityCollection"]}],[{"start":{"row":25,"column":82},"end":{"row":25,"column":83},"action":"insert","lines":["s"],"id":6}],[{"start":{"row":25,"column":60},"end":{"row":25,"column":61},"action":"insert","lines":["C"],"id":7},{"start":{"row":25,"column":61},"end":{"row":25,"column":62},"action":"insert","lines":["o"]},{"start":{"row":25,"column":62},"end":{"row":25,"column":63},"action":"insert","lines":["l"]},{"start":{"row":25,"column":63},"end":{"row":25,"column":64},"action":"insert","lines":["l"]},{"start":{"row":25,"column":64},"end":{"row":25,"column":65},"action":"insert","lines":["e"]},{"start":{"row":25,"column":65},"end":{"row":25,"column":66},"action":"insert","lines":["c"]},{"start":{"row":25,"column":66},"end":{"row":25,"column":67},"action":"insert","lines":["t"]},{"start":{"row":25,"column":67},"end":{"row":25,"column":68},"action":"insert","lines":["o"]},{"start":{"row":25,"column":68},"end":{"row":25,"column":69},"action":"insert","lines":["i"]},{"start":{"row":25,"column":69},"end":{"row":25,"column":70},"action":"insert","lines":["n"]}],[{"start":{"row":25,"column":67},"end":{"row":25,"column":69},"action":"remove","lines":["oi"],"id":8},{"start":{"row":25,"column":67},"end":{"row":25,"column":68},"action":"insert","lines":["i"]},{"start":{"row":25,"column":68},"end":{"row":25,"column":69},"action":"insert","lines":["o"]}],[{"start":{"row":25,"column":103},"end":{"row":25,"column":104},"action":"insert","lines":["C"],"id":9},{"start":{"row":25,"column":104},"end":{"row":25,"column":105},"action":"insert","lines":["o"]},{"start":{"row":25,"column":105},"end":{"row":25,"column":106},"action":"insert","lines":["l"]},{"start":{"row":25,"column":106},"end":{"row":25,"column":107},"action":"insert","lines":["l"]},{"start":{"row":25,"column":107},"end":{"row":25,"column":108},"action":"insert","lines":["e"]},{"start":{"row":25,"column":108},"end":{"row":25,"column":109},"action":"insert","lines":["c"]},{"start":{"row":25,"column":109},"end":{"row":25,"column":110},"action":"insert","lines":["t"]},{"start":{"row":25,"column":110},"end":{"row":25,"column":111},"action":"insert","lines":["i"]},{"start":{"row":25,"column":111},"end":{"row":25,"column":112},"action":"insert","lines":["o"]},{"start":{"row":25,"column":112},"end":{"row":25,"column":113},"action":"insert","lines":["n"]}],[{"start":{"row":5,"column":73},"end":{"row":6,"column":0},"action":"insert","lines":["",""],"id":10}],[{"start":{"row":4,"column":66},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":12}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":76},"action":"insert","lines":["use JasonWKeith\\Domain\\Boundary\\DataObject\\Person\\PersonCollectionInterface;"],"id":13}],[{"start":{"row":7,"column":0},"end":{"row":8,"column":0},"action":"remove","lines":["",""],"id":14}],[{"start":{"row":27,"column":5},"end":{"row":28,"column":0},"action":"insert","lines":["",""],"id":15},{"start":{"row":28,"column":0},"end":{"row":28,"column":8},"action":"insert","lines":["        "]},{"start":{"row":28,"column":8},"end":{"row":29,"column":0},"action":"insert","lines":["",""]},{"start":{"row":29,"column":0},"end":{"row":29,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":28,"column":8},"end":{"row":28,"column":9},"action":"insert","lines":["P"],"id":16},{"start":{"row":28,"column":9},"end":{"row":28,"column":10},"action":"insert","lines":["e"]}],[{"start":{"row":28,"column":9},"end":{"row":28,"column":10},"action":"remove","lines":["e"],"id":17},{"start":{"row":28,"column":8},"end":{"row":28,"column":9},"action":"remove","lines":["P"]}],[{"start":{"row":28,"column":8},"end":{"row":28,"column":9},"action":"insert","lines":["$"],"id":18},{"start":{"row":28,"column":9},"end":{"row":28,"column":10},"action":"insert","lines":["p"]},{"start":{"row":28,"column":10},"end":{"row":28,"column":11},"action":"insert","lines":["e"]},{"start":{"row":28,"column":11},"end":{"row":28,"column":12},"action":"insert","lines":["r"]},{"start":{"row":28,"column":12},"end":{"row":28,"column":13},"action":"insert","lines":["s"]},{"start":{"row":28,"column":13},"end":{"row":28,"column":14},"action":"insert","lines":["o"]},{"start":{"row":28,"column":14},"end":{"row":28,"column":15},"action":"insert","lines":["n"]},{"start":{"row":28,"column":15},"end":{"row":28,"column":16},"action":"insert","lines":["s"]}],[{"start":{"row":28,"column":16},"end":{"row":28,"column":17},"action":"insert","lines":[" "],"id":19},{"start":{"row":28,"column":17},"end":{"row":28,"column":18},"action":"insert","lines":["="]}],[{"start":{"row":28,"column":18},"end":{"row":28,"column":19},"action":"insert","lines":[" "],"id":20},{"start":{"row":28,"column":19},"end":{"row":28,"column":20},"action":"insert","lines":["a"]},{"start":{"row":28,"column":20},"end":{"row":28,"column":21},"action":"insert","lines":["r"]},{"start":{"row":28,"column":21},"end":{"row":28,"column":22},"action":"insert","lines":["r"]},{"start":{"row":28,"column":22},"end":{"row":28,"column":23},"action":"insert","lines":["a"]},{"start":{"row":28,"column":23},"end":{"row":28,"column":24},"action":"insert","lines":["y"]}],[{"start":{"row":28,"column":24},"end":{"row":28,"column":26},"action":"insert","lines":["()"],"id":21}],[{"start":{"row":28,"column":26},"end":{"row":28,"column":27},"action":"insert","lines":[";"],"id":22}],[{"start":{"row":28,"column":27},"end":{"row":29,"column":0},"action":"insert","lines":["",""],"id":23},{"start":{"row":29,"column":0},"end":{"row":29,"column":8},"action":"insert","lines":["        "]},{"start":{"row":29,"column":8},"end":{"row":29,"column":9},"action":"insert","lines":["f"]},{"start":{"row":29,"column":9},"end":{"row":29,"column":10},"action":"insert","lines":["o"]},{"start":{"row":29,"column":10},"end":{"row":29,"column":11},"action":"insert","lines":["r"]},{"start":{"row":29,"column":11},"end":{"row":29,"column":12},"action":"insert","lines":["e"]},{"start":{"row":29,"column":12},"end":{"row":29,"column":13},"action":"insert","lines":["a"]},{"start":{"row":29,"column":13},"end":{"row":29,"column":14},"action":"insert","lines":["c"]},{"start":{"row":29,"column":14},"end":{"row":29,"column":15},"action":"insert","lines":["h"]}],[{"start":{"row":29,"column":15},"end":{"row":29,"column":17},"action":"insert","lines":["()"],"id":24}],[{"start":{"row":29,"column":16},"end":{"row":29,"column":17},"action":"insert","lines":[" "],"id":25},{"start":{"row":29,"column":17},"end":{"row":29,"column":18},"action":"insert","lines":["$"]},{"start":{"row":29,"column":18},"end":{"row":29,"column":19},"action":"insert","lines":["d"]}],[{"start":{"row":29,"column":17},"end":{"row":29,"column":19},"action":"remove","lines":["$d"],"id":26},{"start":{"row":29,"column":17},"end":{"row":29,"column":30},"action":"insert","lines":["$data_objects"]}],[{"start":{"row":29,"column":30},"end":{"row":29,"column":31},"action":"insert","lines":[" "],"id":27},{"start":{"row":29,"column":31},"end":{"row":29,"column":32},"action":"insert","lines":["a"]},{"start":{"row":29,"column":32},"end":{"row":29,"column":33},"action":"insert","lines":["s"]}],[{"start":{"row":29,"column":33},"end":{"row":29,"column":34},"action":"insert","lines":[" "],"id":28},{"start":{"row":29,"column":34},"end":{"row":29,"column":35},"action":"insert","lines":["$"]},{"start":{"row":29,"column":35},"end":{"row":29,"column":36},"action":"insert","lines":["d"]},{"start":{"row":29,"column":36},"end":{"row":29,"column":37},"action":"insert","lines":["a"]}],[{"start":{"row":29,"column":34},"end":{"row":29,"column":37},"action":"remove","lines":["$da"],"id":29},{"start":{"row":29,"column":34},"end":{"row":29,"column":46},"action":"insert","lines":["$data_object"]}],[{"start":{"row":29,"column":46},"end":{"row":29,"column":47},"action":"insert","lines":[" "],"id":30}],[{"start":{"row":29,"column":48},"end":{"row":30,"column":0},"action":"insert","lines":["",""],"id":31},{"start":{"row":30,"column":0},"end":{"row":30,"column":8},"action":"insert","lines":["        "]},{"start":{"row":30,"column":8},"end":{"row":30,"column":9},"action":"insert","lines":["{"]}],[{"start":{"row":30,"column":9},"end":{"row":32,"column":9},"action":"insert","lines":["","            ","        }"],"id":32}],[{"start":{"row":34,"column":44},"end":{"row":34,"column":45},"action":"insert","lines":["C"],"id":33},{"start":{"row":34,"column":45},"end":{"row":34,"column":46},"action":"insert","lines":["o"]},{"start":{"row":34,"column":46},"end":{"row":34,"column":47},"action":"insert","lines":["l"]},{"start":{"row":34,"column":47},"end":{"row":34,"column":48},"action":"insert","lines":["l"]},{"start":{"row":34,"column":48},"end":{"row":34,"column":49},"action":"insert","lines":["e"]},{"start":{"row":34,"column":49},"end":{"row":34,"column":50},"action":"insert","lines":["c"]},{"start":{"row":34,"column":50},"end":{"row":34,"column":51},"action":"insert","lines":["t"]},{"start":{"row":34,"column":51},"end":{"row":34,"column":52},"action":"insert","lines":["i"]},{"start":{"row":34,"column":52},"end":{"row":34,"column":53},"action":"insert","lines":["o"]},{"start":{"row":34,"column":53},"end":{"row":34,"column":54},"action":"insert","lines":["n"]}],[{"start":{"row":34,"column":56},"end":{"row":34,"column":272},"action":"remove","lines":["$data_object->getGUID(), $data_object->getFirstName(), $data_object->getMiddleName(), $data_object->getLastName(), $data_object->getNickname(), $data_object->getSuffix(), $data_object->hasMD(), $data_object->hasPHD()"],"id":34},{"start":{"row":34,"column":56},"end":{"row":34,"column":57},"action":"insert","lines":["$"]},{"start":{"row":34,"column":57},"end":{"row":34,"column":58},"action":"insert","lines":["p"]},{"start":{"row":34,"column":58},"end":{"row":34,"column":59},"action":"insert","lines":["e"]},{"start":{"row":34,"column":59},"end":{"row":34,"column":60},"action":"insert","lines":["r"]},{"start":{"row":34,"column":60},"end":{"row":34,"column":61},"action":"insert","lines":["s"]},{"start":{"row":34,"column":61},"end":{"row":34,"column":62},"action":"insert","lines":["o"]},{"start":{"row":34,"column":62},"end":{"row":34,"column":63},"action":"insert","lines":["n"]},{"start":{"row":34,"column":63},"end":{"row":34,"column":64},"action":"insert","lines":["s"]}],[{"start":{"row":31,"column":12},"end":{"row":31,"column":13},"action":"insert","lines":["a"],"id":35},{"start":{"row":31,"column":13},"end":{"row":31,"column":14},"action":"insert","lines":["r"]},{"start":{"row":31,"column":14},"end":{"row":31,"column":15},"action":"insert","lines":["r"]},{"start":{"row":31,"column":15},"end":{"row":31,"column":16},"action":"insert","lines":["a"]}],[{"start":{"row":31,"column":12},"end":{"row":31,"column":16},"action":"remove","lines":["arra"],"id":36},{"start":{"row":31,"column":12},"end":{"row":31,"column":22},"action":"insert","lines":["array_push"]}],[{"start":{"row":31,"column":22},"end":{"row":31,"column":24},"action":"insert","lines":["()"],"id":37}],[{"start":{"row":31,"column":23},"end":{"row":31,"column":24},"action":"insert","lines":[" "],"id":38},{"start":{"row":31,"column":24},"end":{"row":31,"column":25},"action":"insert","lines":["$"]},{"start":{"row":31,"column":25},"end":{"row":31,"column":26},"action":"insert","lines":["p"]},{"start":{"row":31,"column":26},"end":{"row":31,"column":27},"action":"insert","lines":["e"]},{"start":{"row":31,"column":27},"end":{"row":31,"column":28},"action":"insert","lines":["r"]},{"start":{"row":31,"column":28},"end":{"row":31,"column":29},"action":"insert","lines":["s"]},{"start":{"row":31,"column":29},"end":{"row":31,"column":30},"action":"insert","lines":["o"]},{"start":{"row":31,"column":30},"end":{"row":31,"column":31},"action":"insert","lines":["n"]},{"start":{"row":31,"column":31},"end":{"row":31,"column":32},"action":"insert","lines":["s"]}],[{"start":{"row":31,"column":32},"end":{"row":31,"column":33},"action":"insert","lines":[","],"id":39}],[{"start":{"row":31,"column":33},"end":{"row":31,"column":34},"action":"insert","lines":[" "],"id":40}],[{"start":{"row":31,"column":34},"end":{"row":31,"column":284},"action":"insert","lines":["$this->person_factory->create( $data_object->getGUID(), $data_object->getFirstName(), $data_object->getMiddleName(), $data_object->getLastName(), $data_object->getNickname(), $data_object->getSuffix(), $data_object->hasMD(), $data_object->hasPHD() );"],"id":41}],[{"start":{"row":31,"column":283},"end":{"row":31,"column":284},"action":"remove","lines":[";"],"id":42},{"start":{"row":31,"column":282},"end":{"row":31,"column":283},"action":"remove","lines":[")"]}],[{"start":{"row":31,"column":283},"end":{"row":31,"column":284},"action":"insert","lines":[" "],"id":43},{"start":{"row":31,"column":284},"end":{"row":31,"column":285},"action":"insert","lines":[")"]},{"start":{"row":31,"column":285},"end":{"row":31,"column":286},"action":"insert","lines":[";"]}],[{"start":{"row":34,"column":56},"end":{"row":34,"column":57},"action":"insert","lines":["."],"id":44},{"start":{"row":34,"column":57},"end":{"row":34,"column":58},"action":"insert","lines":["."]},{"start":{"row":34,"column":58},"end":{"row":34,"column":59},"action":"insert","lines":["."]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":34,"column":59},"end":{"row":34,"column":59},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1618423116068,"hash":"99971ec4f635edf8f22348a2cf36370021f3d0a1"}