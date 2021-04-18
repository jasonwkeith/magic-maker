{"filter":false,"title":"DataObjectAPI.php","tooltip":"/Domain/Interactor/DataObjectAPI/DataObjectAPI.php","undoManager":{"mark":21,"position":21,"stack":[[{"start":{"row":29,"column":6},"end":{"row":30,"column":0},"action":"insert","lines":["",""],"id":8},{"start":{"row":30,"column":0},"end":{"row":30,"column":4},"action":"insert","lines":["    "]},{"start":{"row":30,"column":4},"end":{"row":31,"column":0},"action":"insert","lines":["",""]},{"start":{"row":31,"column":0},"end":{"row":31,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":31,"column":0},"end":{"row":34,"column":6},"action":"insert","lines":["    public function createPerson( string $guid, string $first_name, string $middle_name, string $last_name,  string $nickname, string $suffix, bool $has_md, bool $has_phd ): PersonInterface","    {","        return $this->person_factory->create( $guid, $first_name, $middle_name, $last_name,  $nickname, $suffix, $has_md, $has_phd );","    } "],"id":9}],[{"start":{"row":31,"column":32},"end":{"row":31,"column":33},"action":"insert","lines":["F"],"id":10},{"start":{"row":31,"column":33},"end":{"row":31,"column":34},"action":"insert","lines":["a"]},{"start":{"row":31,"column":34},"end":{"row":31,"column":35},"action":"insert","lines":["c"]},{"start":{"row":31,"column":35},"end":{"row":31,"column":36},"action":"insert","lines":["t"]},{"start":{"row":31,"column":36},"end":{"row":31,"column":37},"action":"insert","lines":["o"]},{"start":{"row":31,"column":37},"end":{"row":31,"column":38},"action":"insert","lines":["r"]},{"start":{"row":31,"column":38},"end":{"row":31,"column":39},"action":"insert","lines":["y"]}],[{"start":{"row":31,"column":40},"end":{"row":31,"column":178},"action":"remove","lines":[" string $guid, string $first_name, string $middle_name, string $last_name,  string $nickname, string $suffix, bool $has_md, bool $has_phd "],"id":11}],[{"start":{"row":31,"column":49},"end":{"row":31,"column":50},"action":"insert","lines":["F"],"id":12},{"start":{"row":31,"column":50},"end":{"row":31,"column":51},"action":"insert","lines":["a"]},{"start":{"row":31,"column":51},"end":{"row":31,"column":52},"action":"insert","lines":["c"]},{"start":{"row":31,"column":52},"end":{"row":31,"column":53},"action":"insert","lines":["t"]},{"start":{"row":31,"column":53},"end":{"row":31,"column":54},"action":"insert","lines":["o"]},{"start":{"row":31,"column":54},"end":{"row":31,"column":55},"action":"insert","lines":["r"]},{"start":{"row":31,"column":55},"end":{"row":31,"column":56},"action":"insert","lines":["y"]}],[{"start":{"row":24,"column":6},"end":{"row":24,"column":7},"action":"remove","lines":[" "],"id":13},{"start":{"row":24,"column":6},"end":{"row":25,"column":0},"action":"insert","lines":["",""]},{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"insert","lines":["    "]},{"start":{"row":25,"column":4},"end":{"row":26,"column":0},"action":"insert","lines":["",""]},{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":26,"column":0},"end":{"row":29,"column":7},"action":"insert","lines":["    public function createBook(  string $guid, PersonCollectionInterface $authors, int $year, string $title, string $subtitle ): BookInterface","    {","        return $this->book_factory->create( $guid, $authors, $year, $title, $subtitle );","    }  "],"id":14}],[{"start":{"row":26,"column":30},"end":{"row":26,"column":31},"action":"insert","lines":["F"],"id":15},{"start":{"row":26,"column":31},"end":{"row":26,"column":32},"action":"insert","lines":["a"]},{"start":{"row":26,"column":32},"end":{"row":26,"column":33},"action":"insert","lines":["c"]},{"start":{"row":26,"column":33},"end":{"row":26,"column":34},"action":"insert","lines":["t"]},{"start":{"row":26,"column":34},"end":{"row":26,"column":35},"action":"insert","lines":["o"]},{"start":{"row":26,"column":35},"end":{"row":26,"column":36},"action":"insert","lines":["r"]},{"start":{"row":26,"column":36},"end":{"row":26,"column":37},"action":"insert","lines":["y"]}],[{"start":{"row":26,"column":38},"end":{"row":26,"column":132},"action":"remove","lines":["  string $guid, PersonCollectionInterface $authors, int $year, string $title, string $subtitle"],"id":16},{"start":{"row":26,"column":38},"end":{"row":26,"column":39},"action":"remove","lines":[" "]}],[{"start":{"row":26,"column":45},"end":{"row":26,"column":46},"action":"insert","lines":["F"],"id":17},{"start":{"row":26,"column":46},"end":{"row":26,"column":47},"action":"insert","lines":["a"]},{"start":{"row":26,"column":47},"end":{"row":26,"column":48},"action":"insert","lines":["c"]},{"start":{"row":26,"column":48},"end":{"row":26,"column":49},"action":"insert","lines":["t"]},{"start":{"row":26,"column":49},"end":{"row":26,"column":50},"action":"insert","lines":["o"]},{"start":{"row":26,"column":50},"end":{"row":26,"column":51},"action":"insert","lines":["r"]},{"start":{"row":26,"column":51},"end":{"row":26,"column":52},"action":"insert","lines":["y"]}],[{"start":{"row":28,"column":34},"end":{"row":28,"column":87},"action":"remove","lines":["->create( $guid, $authors, $year, $title, $subtitle )"],"id":18}],[{"start":{"row":38,"column":36},"end":{"row":38,"column":132},"action":"remove","lines":["->create( $guid, $first_name, $middle_name, $last_name,  $nickname, $suffix, $has_md, $has_phd )"],"id":19}],[{"start":{"row":29,"column":11},"end":{"row":30,"column":0},"action":"insert","lines":["",""],"id":20},{"start":{"row":30,"column":0},"end":{"row":30,"column":4},"action":"insert","lines":["    "]},{"start":{"row":30,"column":4},"end":{"row":31,"column":0},"action":"insert","lines":["",""]},{"start":{"row":31,"column":0},"end":{"row":31,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":31,"column":0},"end":{"row":34,"column":7},"action":"insert","lines":["    public function createBookFactory(): BookFactoryInterface","    {","        return $this->book_factory;","    }  "],"id":21}],[{"start":{"row":31,"column":26},"end":{"row":31,"column":30},"action":"remove","lines":["Book"],"id":22},{"start":{"row":31,"column":26},"end":{"row":31,"column":27},"action":"insert","lines":["E"]},{"start":{"row":31,"column":27},"end":{"row":31,"column":28},"action":"insert","lines":["x"]}],[{"start":{"row":31,"column":20},"end":{"row":31,"column":35},"action":"remove","lines":["createExFactory"],"id":23},{"start":{"row":31,"column":20},"end":{"row":31,"column":42},"action":"insert","lines":["createExceptionFactory"]}],[{"start":{"row":31,"column":46},"end":{"row":31,"column":50},"action":"remove","lines":["Book"],"id":24},{"start":{"row":31,"column":46},"end":{"row":31,"column":47},"action":"insert","lines":["E"]},{"start":{"row":31,"column":47},"end":{"row":31,"column":48},"action":"insert","lines":["x"]},{"start":{"row":31,"column":48},"end":{"row":31,"column":49},"action":"insert","lines":["c"]}],[{"start":{"row":31,"column":46},"end":{"row":31,"column":65},"action":"remove","lines":["ExcFactoryInterface"],"id":25},{"start":{"row":31,"column":46},"end":{"row":31,"column":71},"action":"insert","lines":["ExceptionFactoryInterface"]}],[{"start":{"row":33,"column":22},"end":{"row":33,"column":26},"action":"remove","lines":["book"],"id":26},{"start":{"row":33,"column":22},"end":{"row":33,"column":23},"action":"insert","lines":["e"]},{"start":{"row":33,"column":23},"end":{"row":33,"column":24},"action":"insert","lines":["x"]}],[{"start":{"row":33,"column":22},"end":{"row":33,"column":32},"action":"remove","lines":["ex_factory"],"id":27},{"start":{"row":33,"column":22},"end":{"row":33,"column":39},"action":"insert","lines":["exception_factory"]}],[{"start":{"row":30,"column":0},"end":{"row":34,"column":9},"action":"remove","lines":["    ","    public function createExceptionFactory(): ExceptionFactoryInterface","    {","        return $this->exception_factory;","    }    "],"id":28},{"start":{"row":30,"column":0},"end":{"row":30,"column":1},"action":"remove","lines":[" "]},{"start":{"row":30,"column":0},"end":{"row":30,"column":1},"action":"remove","lines":[" "]},{"start":{"row":30,"column":0},"end":{"row":31,"column":0},"action":"remove","lines":["",""]},{"start":{"row":30,"column":0},"end":{"row":31,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":30,"column":0},"end":{"row":31,"column":0},"action":"insert","lines":["",""],"id":29}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":31,"column":0},"end":{"row":31,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1617917046512,"hash":"18380ee12e6057170fa11c6d0cbb94d7348d68e2"}