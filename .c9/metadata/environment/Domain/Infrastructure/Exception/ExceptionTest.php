{"filter":false,"title":"ExceptionTest.php","tooltip":"/Domain/Infrastructure/Exception/ExceptionTest.php","undoManager":{"mark":89,"position":89,"stack":[[{"start":{"row":8,"column":6},"end":{"row":8,"column":10},"action":"remove","lines":["Book"],"id":2},{"start":{"row":8,"column":6},"end":{"row":8,"column":7},"action":"insert","lines":["E"]},{"start":{"row":8,"column":7},"end":{"row":8,"column":8},"action":"insert","lines":["x"]},{"start":{"row":8,"column":8},"end":{"row":8,"column":9},"action":"insert","lines":["c"]},{"start":{"row":8,"column":9},"end":{"row":8,"column":10},"action":"insert","lines":["e"]},{"start":{"row":8,"column":10},"end":{"row":8,"column":11},"action":"insert","lines":["p"]},{"start":{"row":8,"column":11},"end":{"row":8,"column":12},"action":"insert","lines":["t"]},{"start":{"row":8,"column":12},"end":{"row":8,"column":13},"action":"insert","lines":["i"]},{"start":{"row":8,"column":13},"end":{"row":8,"column":14},"action":"insert","lines":["o"]},{"start":{"row":8,"column":14},"end":{"row":8,"column":15},"action":"insert","lines":["n"]}],[{"start":{"row":5,"column":0},"end":{"row":6,"column":59},"action":"remove","lines":["use JasonWKeith\\Domain\\Infrastructure\\Exception\\ExceptionFactory;","use JasonWKeith\\Domain\\Interactor\\TestData\\TestDataFactory;"],"id":3},{"start":{"row":5,"column":0},"end":{"row":6,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":35,"column":0},"end":{"row":35,"column":79},"action":"remove","lines":["        $this->test_data_factory = new TestDataFactory( new ExceptionFactory );"],"id":4},{"start":{"row":35,"column":0},"end":{"row":36,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":38,"column":47},"end":{"row":38,"column":51},"action":"remove","lines":["Book"],"id":7},{"start":{"row":38,"column":47},"end":{"row":38,"column":48},"action":"insert","lines":["E"]},{"start":{"row":38,"column":48},"end":{"row":38,"column":49},"action":"insert","lines":["x"]},{"start":{"row":38,"column":49},"end":{"row":38,"column":50},"action":"insert","lines":["c"]}],[{"start":{"row":38,"column":47},"end":{"row":38,"column":57},"action":"remove","lines":["ExcFactory"],"id":8},{"start":{"row":38,"column":47},"end":{"row":38,"column":63},"action":"insert","lines":["ExceptionFactory"]}],[{"start":{"row":38,"column":63},"end":{"row":38,"column":87},"action":"remove","lines":["( new ExceptionFactory )"],"id":9}],[{"start":{"row":39,"column":77},"end":{"row":39,"column":213},"action":"remove","lines":["$this->test_data->guid, $this->test_data->authors, $this->test_data->published_year, $this->test_data->subtitle, $this->test_data->title"],"id":10}],[{"start":{"row":39,"column":77},"end":{"row":39,"column":78},"action":"insert","lines":["$"],"id":11},{"start":{"row":39,"column":78},"end":{"row":39,"column":79},"action":"insert","lines":["t"]},{"start":{"row":39,"column":79},"end":{"row":39,"column":80},"action":"insert","lines":["h"]},{"start":{"row":39,"column":80},"end":{"row":39,"column":81},"action":"insert","lines":["i"]},{"start":{"row":39,"column":81},"end":{"row":39,"column":82},"action":"insert","lines":["s"]},{"start":{"row":39,"column":82},"end":{"row":39,"column":83},"action":"insert","lines":["-"]},{"start":{"row":39,"column":83},"end":{"row":39,"column":84},"action":"insert","lines":["."]}],[{"start":{"row":39,"column":83},"end":{"row":39,"column":84},"action":"remove","lines":["."],"id":12}],[{"start":{"row":39,"column":83},"end":{"row":39,"column":84},"action":"insert","lines":[">"],"id":13},{"start":{"row":39,"column":84},"end":{"row":39,"column":85},"action":"insert","lines":["t"]}],[{"start":{"row":39,"column":85},"end":{"row":39,"column":86},"action":"insert","lines":["e"],"id":14}],[{"start":{"row":39,"column":84},"end":{"row":39,"column":86},"action":"remove","lines":["te"],"id":15},{"start":{"row":39,"column":84},"end":{"row":39,"column":93},"action":"insert","lines":["test_data"]}],[{"start":{"row":39,"column":93},"end":{"row":39,"column":94},"action":"insert","lines":["-"],"id":16},{"start":{"row":39,"column":94},"end":{"row":39,"column":95},"action":"insert","lines":[">"]}],[{"start":{"row":39,"column":94},"end":{"row":39,"column":95},"action":"remove","lines":[">"],"id":17},{"start":{"row":39,"column":93},"end":{"row":39,"column":94},"action":"remove","lines":["-"]}],[{"start":{"row":12,"column":0},"end":{"row":31,"column":5},"action":"remove","lines":["    ","    public function testGetGUIDReturnsCorrectString(): void","    {","        $this->assertEquals( $this->test_data->guid, $this->system_under_test->getGUID() );","    }       ","    ","    public function testGetPublishedYearReturnsCorrectInteger(): void","    {","        $this->assertEquals( $this->test_data->published_year, $this->system_under_test->getPublishedYear() );","    }","    ","    public function testGetSubtitleReturnsCorrectString(): void","    {","        $this->assertEquals( $this->test_data->subtitle, $this->system_under_test->getSubtitle() );","    }","    ","    public function testGetTitleReturnsCorrectString(): void","    {","        $this->assertEquals( $this->test_data->title, $this->system_under_test->getTitle() );","    }"],"id":18}],[{"start":{"row":12,"column":0},"end":{"row":13,"column":4},"action":"remove","lines":["","    "],"id":19}],[{"start":{"row":8,"column":24},"end":{"row":8,"column":53},"action":"remove","lines":["GetAuthorsReturnsCorrectArray"],"id":20},{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"insert","lines":["C"]},{"start":{"row":8,"column":25},"end":{"row":8,"column":26},"action":"insert","lines":["r"]},{"start":{"row":8,"column":26},"end":{"row":8,"column":27},"action":"insert","lines":["e"]},{"start":{"row":8,"column":27},"end":{"row":8,"column":28},"action":"insert","lines":["a"]},{"start":{"row":8,"column":28},"end":{"row":8,"column":29},"action":"insert","lines":["t"]}],[{"start":{"row":8,"column":29},"end":{"row":8,"column":30},"action":"insert","lines":["e"],"id":21}],[{"start":{"row":8,"column":30},"end":{"row":8,"column":31},"action":"insert","lines":["R"],"id":22},{"start":{"row":8,"column":31},"end":{"row":8,"column":32},"action":"insert","lines":["e"]},{"start":{"row":8,"column":32},"end":{"row":8,"column":33},"action":"insert","lines":["t"]},{"start":{"row":8,"column":33},"end":{"row":8,"column":34},"action":"insert","lines":["u"]},{"start":{"row":8,"column":34},"end":{"row":8,"column":35},"action":"insert","lines":["r"]},{"start":{"row":8,"column":35},"end":{"row":8,"column":36},"action":"insert","lines":["n"]},{"start":{"row":8,"column":36},"end":{"row":8,"column":37},"action":"insert","lines":["s"]},{"start":{"row":8,"column":37},"end":{"row":8,"column":38},"action":"insert","lines":["S"]}],[{"start":{"row":8,"column":38},"end":{"row":8,"column":39},"action":"insert","lines":["t"],"id":23},{"start":{"row":8,"column":39},"end":{"row":8,"column":40},"action":"insert","lines":["r"]},{"start":{"row":8,"column":40},"end":{"row":8,"column":41},"action":"insert","lines":["i"]},{"start":{"row":8,"column":41},"end":{"row":8,"column":42},"action":"insert","lines":["n"]},{"start":{"row":8,"column":42},"end":{"row":8,"column":43},"action":"insert","lines":["g"]}],[{"start":{"row":6,"column":15},"end":{"row":6,"column":16},"action":"insert","lines":["F"],"id":24},{"start":{"row":6,"column":16},"end":{"row":6,"column":17},"action":"insert","lines":["a"]},{"start":{"row":6,"column":17},"end":{"row":6,"column":18},"action":"insert","lines":["c"]},{"start":{"row":6,"column":18},"end":{"row":6,"column":19},"action":"insert","lines":["t"]},{"start":{"row":6,"column":19},"end":{"row":6,"column":20},"action":"insert","lines":["o"]},{"start":{"row":6,"column":20},"end":{"row":6,"column":21},"action":"insert","lines":["r"]},{"start":{"row":6,"column":21},"end":{"row":6,"column":22},"action":"insert","lines":["y"]}],[{"start":{"row":10,"column":29},"end":{"row":10,"column":54},"action":"remove","lines":["$this->test_data->authors"],"id":25},{"start":{"row":10,"column":29},"end":{"row":10,"column":30},"action":"insert","lines":["$"]},{"start":{"row":10,"column":30},"end":{"row":10,"column":31},"action":"insert","lines":["t"]},{"start":{"row":10,"column":31},"end":{"row":10,"column":32},"action":"insert","lines":["h"]},{"start":{"row":10,"column":32},"end":{"row":10,"column":33},"action":"insert","lines":["i"]},{"start":{"row":10,"column":33},"end":{"row":10,"column":34},"action":"insert","lines":["s"]},{"start":{"row":10,"column":34},"end":{"row":10,"column":35},"action":"insert","lines":["-"]},{"start":{"row":10,"column":35},"end":{"row":10,"column":36},"action":"insert","lines":[">"]},{"start":{"row":10,"column":36},"end":{"row":10,"column":37},"action":"insert","lines":["t"]},{"start":{"row":10,"column":37},"end":{"row":10,"column":38},"action":"insert","lines":["e"]}],[{"start":{"row":10,"column":36},"end":{"row":10,"column":38},"action":"remove","lines":["te"],"id":26},{"start":{"row":10,"column":36},"end":{"row":10,"column":45},"action":"insert","lines":["test_data"]}],[{"start":{"row":10,"column":45},"end":{"row":10,"column":46},"action":"insert","lines":["-"],"id":27},{"start":{"row":10,"column":46},"end":{"row":10,"column":47},"action":"insert","lines":[">"]}],[{"start":{"row":10,"column":46},"end":{"row":10,"column":47},"action":"remove","lines":[">"],"id":28},{"start":{"row":10,"column":45},"end":{"row":10,"column":46},"action":"remove","lines":["-"]}],[{"start":{"row":10,"column":73},"end":{"row":10,"column":74},"action":"remove","lines":["g"],"id":30},{"start":{"row":10,"column":73},"end":{"row":10,"column":74},"action":"remove","lines":["e"]},{"start":{"row":10,"column":73},"end":{"row":10,"column":74},"action":"remove","lines":["t"]},{"start":{"row":10,"column":73},"end":{"row":10,"column":74},"action":"remove","lines":["A"]},{"start":{"row":10,"column":73},"end":{"row":10,"column":74},"action":"remove","lines":["u"]},{"start":{"row":10,"column":73},"end":{"row":10,"column":74},"action":"remove","lines":["t"]},{"start":{"row":10,"column":73},"end":{"row":10,"column":74},"action":"remove","lines":["h"]},{"start":{"row":10,"column":73},"end":{"row":10,"column":74},"action":"remove","lines":["o"]},{"start":{"row":10,"column":73},"end":{"row":10,"column":74},"action":"remove","lines":["r"]},{"start":{"row":10,"column":73},"end":{"row":10,"column":74},"action":"remove","lines":["s"]}],[{"start":{"row":10,"column":73},"end":{"row":10,"column":74},"action":"insert","lines":["c"],"id":31},{"start":{"row":10,"column":74},"end":{"row":10,"column":75},"action":"insert","lines":["r"]},{"start":{"row":10,"column":75},"end":{"row":10,"column":76},"action":"insert","lines":["e"]},{"start":{"row":10,"column":76},"end":{"row":10,"column":77},"action":"insert","lines":["a"]},{"start":{"row":10,"column":77},"end":{"row":10,"column":78},"action":"insert","lines":["t"]},{"start":{"row":10,"column":78},"end":{"row":10,"column":79},"action":"insert","lines":["e"]}],[{"start":{"row":14,"column":5},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":32},{"start":{"row":15,"column":0},"end":{"row":15,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":15,"column":0},"end":{"row":15,"column":79},"action":"insert","lines":["        $this->test_data_factory = new TestDataFactory( new ExceptionFactory );"],"id":33}],[{"start":{"row":4,"column":31},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":34}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":59},"action":"insert","lines":["use JasonWKeith\\Domain\\Interactor\\TestData\\TestDataFactory;"],"id":35}],[{"start":{"row":2,"column":0},"end":{"row":2,"column":45},"action":"remove","lines":["namespace JasonWKeith\\Domain\\DataObject\\Book;"],"id":36},{"start":{"row":2,"column":0},"end":{"row":2,"column":54},"action":"insert","lines":["namespace JasonWKeith\\Domain\\Infrastructure\\Exception;"]}],[{"start":{"row":11,"column":71},"end":{"row":11,"column":81},"action":"remove","lines":["->create()"],"id":38}],[{"start":{"row":20,"column":32},"end":{"row":20,"column":40},"action":"remove","lines":["_factory"],"id":39}],[{"start":{"row":11,"column":71},"end":{"row":11,"column":72},"action":"insert","lines":["-"],"id":40},{"start":{"row":11,"column":72},"end":{"row":11,"column":73},"action":"insert","lines":[">"]}],[{"start":{"row":11,"column":73},"end":{"row":11,"column":100},"action":"insert","lines":["create( $this->test_data );"],"id":41}],[{"start":{"row":11,"column":99},"end":{"row":11,"column":100},"action":"remove","lines":[";"],"id":42}],[{"start":{"row":21,"column":0},"end":{"row":21,"column":96},"action":"remove","lines":["        $this->system_under_test = $this->system_under_test_factory->create( $this->test_data );"],"id":43},{"start":{"row":21,"column":0},"end":{"row":22,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":17,"column":77},"end":{"row":17,"column":81},"action":"remove","lines":["Book"],"id":44},{"start":{"row":17,"column":77},"end":{"row":17,"column":78},"action":"insert","lines":["E"]},{"start":{"row":17,"column":78},"end":{"row":17,"column":79},"action":"insert","lines":["x"]},{"start":{"row":17,"column":79},"end":{"row":17,"column":80},"action":"insert","lines":["c"]},{"start":{"row":17,"column":80},"end":{"row":17,"column":81},"action":"insert","lines":["e"]},{"start":{"row":17,"column":81},"end":{"row":17,"column":82},"action":"insert","lines":["p"]},{"start":{"row":17,"column":82},"end":{"row":17,"column":83},"action":"insert","lines":["t"]},{"start":{"row":17,"column":83},"end":{"row":17,"column":84},"action":"insert","lines":["i"]},{"start":{"row":17,"column":84},"end":{"row":17,"column":85},"action":"insert","lines":["o"]},{"start":{"row":17,"column":85},"end":{"row":17,"column":86},"action":"insert","lines":["n"]}],[{"start":{"row":11,"column":29},"end":{"row":11,"column":30},"action":"insert","lines":["n"],"id":45},{"start":{"row":11,"column":30},"end":{"row":11,"column":31},"action":"insert","lines":["e"]},{"start":{"row":11,"column":31},"end":{"row":11,"column":32},"action":"insert","lines":["w"]}],[{"start":{"row":11,"column":32},"end":{"row":11,"column":33},"action":"insert","lines":[" "],"id":46},{"start":{"row":11,"column":33},"end":{"row":11,"column":34},"action":"insert","lines":["E"]},{"start":{"row":11,"column":34},"end":{"row":11,"column":35},"action":"insert","lines":["x"]},{"start":{"row":11,"column":35},"end":{"row":11,"column":36},"action":"insert","lines":["c"]},{"start":{"row":11,"column":36},"end":{"row":11,"column":37},"action":"insert","lines":["e"]},{"start":{"row":11,"column":37},"end":{"row":11,"column":38},"action":"insert","lines":["p"]},{"start":{"row":11,"column":38},"end":{"row":11,"column":39},"action":"insert","lines":["t"]}],[{"start":{"row":11,"column":39},"end":{"row":11,"column":40},"action":"insert","lines":["i"],"id":47},{"start":{"row":11,"column":40},"end":{"row":11,"column":41},"action":"insert","lines":["o"]},{"start":{"row":11,"column":41},"end":{"row":11,"column":42},"action":"insert","lines":["n"]},{"start":{"row":11,"column":42},"end":{"row":11,"column":43},"action":"insert","lines":["("]}],[{"start":{"row":11,"column":43},"end":{"row":11,"column":44},"action":"insert","lines":[" "],"id":48}],[{"start":{"row":11,"column":60},"end":{"row":11,"column":61},"action":"insert","lines":[" "],"id":49},{"start":{"row":11,"column":61},"end":{"row":11,"column":62},"action":"insert","lines":[")"]}],[{"start":{"row":9,"column":37},"end":{"row":9,"column":43},"action":"remove","lines":["String"],"id":50},{"start":{"row":9,"column":37},"end":{"row":9,"column":38},"action":"insert","lines":["E"]},{"start":{"row":9,"column":38},"end":{"row":9,"column":39},"action":"insert","lines":["x"]},{"start":{"row":9,"column":39},"end":{"row":9,"column":40},"action":"insert","lines":["c"]},{"start":{"row":9,"column":40},"end":{"row":9,"column":41},"action":"insert","lines":["e"]},{"start":{"row":9,"column":41},"end":{"row":9,"column":42},"action":"insert","lines":["p"]},{"start":{"row":9,"column":42},"end":{"row":9,"column":43},"action":"insert","lines":["t"]},{"start":{"row":9,"column":43},"end":{"row":9,"column":44},"action":"insert","lines":["i"]},{"start":{"row":9,"column":44},"end":{"row":9,"column":45},"action":"insert","lines":["o"]},{"start":{"row":9,"column":45},"end":{"row":9,"column":46},"action":"insert","lines":["n"]}],[{"start":{"row":12,"column":8},"end":{"row":12,"column":9},"action":"remove","lines":[" "],"id":51},{"start":{"row":12,"column":8},"end":{"row":13,"column":0},"action":"insert","lines":["",""]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]},{"start":{"row":13,"column":4},"end":{"row":14,"column":0},"action":"insert","lines":["",""]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]},{"start":{"row":14,"column":4},"end":{"row":14,"column":5},"action":"insert","lines":["p"]},{"start":{"row":14,"column":5},"end":{"row":14,"column":6},"action":"insert","lines":["u"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"insert","lines":["b"]},{"start":{"row":14,"column":7},"end":{"row":14,"column":8},"action":"insert","lines":["l"]},{"start":{"row":14,"column":8},"end":{"row":14,"column":9},"action":"insert","lines":["i"]},{"start":{"row":14,"column":9},"end":{"row":14,"column":10},"action":"insert","lines":["c"]}],[{"start":{"row":14,"column":10},"end":{"row":14,"column":11},"action":"insert","lines":[" "],"id":52},{"start":{"row":14,"column":11},"end":{"row":14,"column":12},"action":"insert","lines":["f"]},{"start":{"row":14,"column":12},"end":{"row":14,"column":13},"action":"insert","lines":["u"]},{"start":{"row":14,"column":13},"end":{"row":14,"column":14},"action":"insert","lines":["n"]},{"start":{"row":14,"column":14},"end":{"row":14,"column":15},"action":"insert","lines":["c"]},{"start":{"row":14,"column":15},"end":{"row":14,"column":16},"action":"insert","lines":["t"]},{"start":{"row":14,"column":16},"end":{"row":14,"column":17},"action":"insert","lines":["i"]},{"start":{"row":14,"column":17},"end":{"row":14,"column":18},"action":"insert","lines":["o"]},{"start":{"row":14,"column":18},"end":{"row":14,"column":19},"action":"insert","lines":["n"]}],[{"start":{"row":14,"column":19},"end":{"row":14,"column":20},"action":"insert","lines":[" "],"id":53},{"start":{"row":14,"column":20},"end":{"row":14,"column":21},"action":"insert","lines":["t"]},{"start":{"row":14,"column":21},"end":{"row":14,"column":22},"action":"insert","lines":["e"]},{"start":{"row":14,"column":22},"end":{"row":14,"column":23},"action":"insert","lines":["s"]},{"start":{"row":14,"column":23},"end":{"row":14,"column":24},"action":"insert","lines":["t"]},{"start":{"row":14,"column":24},"end":{"row":14,"column":25},"action":"insert","lines":["C"]},{"start":{"row":14,"column":25},"end":{"row":14,"column":26},"action":"insert","lines":["r"]},{"start":{"row":14,"column":26},"end":{"row":14,"column":27},"action":"insert","lines":["e"]},{"start":{"row":14,"column":27},"end":{"row":14,"column":28},"action":"insert","lines":["a"]}],[{"start":{"row":14,"column":28},"end":{"row":14,"column":29},"action":"insert","lines":["t"],"id":54},{"start":{"row":14,"column":29},"end":{"row":14,"column":30},"action":"insert","lines":["e"]},{"start":{"row":14,"column":30},"end":{"row":14,"column":31},"action":"insert","lines":["R"]},{"start":{"row":14,"column":31},"end":{"row":14,"column":32},"action":"insert","lines":["e"]},{"start":{"row":14,"column":32},"end":{"row":14,"column":33},"action":"insert","lines":["t"]},{"start":{"row":14,"column":33},"end":{"row":14,"column":34},"action":"insert","lines":["u"]},{"start":{"row":14,"column":34},"end":{"row":14,"column":35},"action":"insert","lines":["r"]},{"start":{"row":14,"column":35},"end":{"row":14,"column":36},"action":"insert","lines":["n"]},{"start":{"row":14,"column":36},"end":{"row":14,"column":37},"action":"insert","lines":["s"]}],[{"start":{"row":14,"column":37},"end":{"row":14,"column":38},"action":"insert","lines":["I"],"id":55},{"start":{"row":14,"column":38},"end":{"row":14,"column":39},"action":"insert","lines":["n"]},{"start":{"row":14,"column":39},"end":{"row":14,"column":40},"action":"insert","lines":["t"]},{"start":{"row":14,"column":40},"end":{"row":14,"column":41},"action":"insert","lines":["a"]}],[{"start":{"row":14,"column":41},"end":{"row":14,"column":42},"action":"insert","lines":["n"],"id":56},{"start":{"row":14,"column":42},"end":{"row":14,"column":43},"action":"insert","lines":["c"]},{"start":{"row":14,"column":43},"end":{"row":14,"column":44},"action":"insert","lines":["e"]}],[{"start":{"row":14,"column":43},"end":{"row":14,"column":44},"action":"remove","lines":["e"],"id":57},{"start":{"row":14,"column":42},"end":{"row":14,"column":43},"action":"remove","lines":["c"]},{"start":{"row":14,"column":41},"end":{"row":14,"column":42},"action":"remove","lines":["n"]},{"start":{"row":14,"column":40},"end":{"row":14,"column":41},"action":"remove","lines":["a"]},{"start":{"row":14,"column":39},"end":{"row":14,"column":40},"action":"remove","lines":["t"]}],[{"start":{"row":14,"column":39},"end":{"row":14,"column":40},"action":"insert","lines":["s"],"id":58},{"start":{"row":14,"column":40},"end":{"row":14,"column":41},"action":"insert","lines":["t"]},{"start":{"row":14,"column":41},"end":{"row":14,"column":42},"action":"insert","lines":["a"]},{"start":{"row":14,"column":42},"end":{"row":14,"column":43},"action":"insert","lines":["n"]},{"start":{"row":14,"column":43},"end":{"row":14,"column":44},"action":"insert","lines":["c"]},{"start":{"row":14,"column":44},"end":{"row":14,"column":45},"action":"insert","lines":["e"]},{"start":{"row":14,"column":45},"end":{"row":14,"column":46},"action":"insert","lines":["O"]},{"start":{"row":14,"column":46},"end":{"row":14,"column":47},"action":"insert","lines":["f"]}],[{"start":{"row":14,"column":47},"end":{"row":14,"column":48},"action":"insert","lines":["E"],"id":59},{"start":{"row":14,"column":48},"end":{"row":14,"column":49},"action":"insert","lines":["x"]},{"start":{"row":14,"column":49},"end":{"row":14,"column":50},"action":"insert","lines":["c"]},{"start":{"row":14,"column":50},"end":{"row":14,"column":51},"action":"insert","lines":["e"]},{"start":{"row":14,"column":51},"end":{"row":14,"column":52},"action":"insert","lines":["p"]},{"start":{"row":14,"column":52},"end":{"row":14,"column":53},"action":"insert","lines":["t"]},{"start":{"row":14,"column":53},"end":{"row":14,"column":54},"action":"insert","lines":["i"]},{"start":{"row":14,"column":54},"end":{"row":14,"column":55},"action":"insert","lines":["o"]},{"start":{"row":14,"column":55},"end":{"row":14,"column":56},"action":"insert","lines":["n"]},{"start":{"row":14,"column":56},"end":{"row":14,"column":57},"action":"insert","lines":["I"]},{"start":{"row":14,"column":57},"end":{"row":14,"column":58},"action":"insert","lines":["n"]},{"start":{"row":14,"column":58},"end":{"row":14,"column":59},"action":"insert","lines":["t"]},{"start":{"row":14,"column":59},"end":{"row":14,"column":60},"action":"insert","lines":["e"]},{"start":{"row":14,"column":60},"end":{"row":14,"column":61},"action":"insert","lines":["r"]}],[{"start":{"row":14,"column":61},"end":{"row":14,"column":62},"action":"insert","lines":["f"],"id":60},{"start":{"row":14,"column":62},"end":{"row":14,"column":63},"action":"insert","lines":["a"]},{"start":{"row":14,"column":63},"end":{"row":14,"column":64},"action":"insert","lines":["c"]},{"start":{"row":14,"column":64},"end":{"row":14,"column":65},"action":"insert","lines":["e"]}],[{"start":{"row":14,"column":65},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":61},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]},{"start":{"row":15,"column":4},"end":{"row":15,"column":5},"action":"insert","lines":["{"]}],[{"start":{"row":15,"column":5},"end":{"row":17,"column":5},"action":"insert","lines":["","        ","    }"],"id":62}],[{"start":{"row":14,"column":65},"end":{"row":14,"column":67},"action":"insert","lines":["()"],"id":63}],[{"start":{"row":14,"column":67},"end":{"row":14,"column":68},"action":"insert","lines":[":"],"id":64}],[{"start":{"row":14,"column":68},"end":{"row":14,"column":69},"action":"insert","lines":[" "],"id":65},{"start":{"row":14,"column":69},"end":{"row":14,"column":70},"action":"insert","lines":["v"]},{"start":{"row":14,"column":70},"end":{"row":14,"column":71},"action":"insert","lines":["o"]},{"start":{"row":14,"column":71},"end":{"row":14,"column":72},"action":"insert","lines":["i"]},{"start":{"row":14,"column":72},"end":{"row":14,"column":73},"action":"insert","lines":["d"]}],[{"start":{"row":16,"column":8},"end":{"row":16,"column":9},"action":"insert","lines":["$"],"id":66},{"start":{"row":16,"column":9},"end":{"row":16,"column":10},"action":"insert","lines":["t"]},{"start":{"row":16,"column":10},"end":{"row":16,"column":11},"action":"insert","lines":["h"]},{"start":{"row":16,"column":11},"end":{"row":16,"column":12},"action":"insert","lines":["i"]},{"start":{"row":16,"column":12},"end":{"row":16,"column":13},"action":"insert","lines":["s"]},{"start":{"row":16,"column":13},"end":{"row":16,"column":14},"action":"insert","lines":["-"]},{"start":{"row":16,"column":14},"end":{"row":16,"column":15},"action":"insert","lines":[">"]}],[{"start":{"row":16,"column":15},"end":{"row":16,"column":16},"action":"insert","lines":["a"],"id":67},{"start":{"row":16,"column":16},"end":{"row":16,"column":17},"action":"insert","lines":["s"]},{"start":{"row":16,"column":17},"end":{"row":16,"column":18},"action":"insert","lines":["s"]}],[{"start":{"row":16,"column":17},"end":{"row":16,"column":18},"action":"remove","lines":["s"],"id":68},{"start":{"row":16,"column":16},"end":{"row":16,"column":17},"action":"remove","lines":["s"]},{"start":{"row":16,"column":15},"end":{"row":16,"column":16},"action":"remove","lines":["a"]}],[{"start":{"row":16,"column":15},"end":{"row":16,"column":16},"action":"insert","lines":["a"],"id":69},{"start":{"row":16,"column":16},"end":{"row":16,"column":17},"action":"insert","lines":["s"]},{"start":{"row":16,"column":17},"end":{"row":16,"column":18},"action":"insert","lines":["s"]},{"start":{"row":16,"column":18},"end":{"row":16,"column":19},"action":"insert","lines":["e"]},{"start":{"row":16,"column":19},"end":{"row":16,"column":20},"action":"insert","lines":["r"]},{"start":{"row":16,"column":20},"end":{"row":16,"column":21},"action":"insert","lines":["t"]}],[{"start":{"row":16,"column":21},"end":{"row":16,"column":22},"action":"insert","lines":["I"],"id":70},{"start":{"row":16,"column":22},"end":{"row":16,"column":23},"action":"insert","lines":["n"]},{"start":{"row":16,"column":23},"end":{"row":16,"column":24},"action":"insert","lines":["s"]},{"start":{"row":16,"column":24},"end":{"row":16,"column":25},"action":"insert","lines":["t"]},{"start":{"row":16,"column":25},"end":{"row":16,"column":26},"action":"insert","lines":["a"]},{"start":{"row":16,"column":26},"end":{"row":16,"column":27},"action":"insert","lines":["n"]},{"start":{"row":16,"column":27},"end":{"row":16,"column":28},"action":"insert","lines":["c"]},{"start":{"row":16,"column":28},"end":{"row":16,"column":29},"action":"insert","lines":["e"]},{"start":{"row":16,"column":29},"end":{"row":16,"column":30},"action":"insert","lines":["O"]}],[{"start":{"row":16,"column":30},"end":{"row":16,"column":31},"action":"insert","lines":["f"],"id":71}],[{"start":{"row":16,"column":31},"end":{"row":16,"column":33},"action":"insert","lines":["()"],"id":72}],[{"start":{"row":16,"column":32},"end":{"row":16,"column":33},"action":"insert","lines":[" "],"id":73},{"start":{"row":16,"column":33},"end":{"row":16,"column":34},"action":"insert","lines":[" "]}],[{"start":{"row":16,"column":34},"end":{"row":16,"column":35},"action":"insert","lines":["E"],"id":74},{"start":{"row":16,"column":35},"end":{"row":16,"column":36},"action":"insert","lines":["x"]},{"start":{"row":16,"column":36},"end":{"row":16,"column":37},"action":"insert","lines":["c"]},{"start":{"row":16,"column":37},"end":{"row":16,"column":38},"action":"insert","lines":["e"]},{"start":{"row":16,"column":38},"end":{"row":16,"column":39},"action":"insert","lines":["p"]},{"start":{"row":16,"column":39},"end":{"row":16,"column":40},"action":"insert","lines":["t"]},{"start":{"row":16,"column":40},"end":{"row":16,"column":41},"action":"insert","lines":["i"]},{"start":{"row":16,"column":41},"end":{"row":16,"column":42},"action":"insert","lines":["o"]},{"start":{"row":16,"column":42},"end":{"row":16,"column":43},"action":"insert","lines":["n"]}],[{"start":{"row":16,"column":43},"end":{"row":16,"column":44},"action":"insert","lines":["I"],"id":75},{"start":{"row":16,"column":44},"end":{"row":16,"column":45},"action":"insert","lines":["n"]},{"start":{"row":16,"column":45},"end":{"row":16,"column":46},"action":"insert","lines":["t"]},{"start":{"row":16,"column":46},"end":{"row":16,"column":47},"action":"insert","lines":["e"]},{"start":{"row":16,"column":47},"end":{"row":16,"column":48},"action":"insert","lines":["r"]},{"start":{"row":16,"column":48},"end":{"row":16,"column":49},"action":"insert","lines":["f"]},{"start":{"row":16,"column":49},"end":{"row":16,"column":50},"action":"insert","lines":["a"]},{"start":{"row":16,"column":50},"end":{"row":16,"column":51},"action":"insert","lines":["c"]},{"start":{"row":16,"column":51},"end":{"row":16,"column":52},"action":"insert","lines":["e"]}],[{"start":{"row":16,"column":52},"end":{"row":16,"column":53},"action":"insert","lines":[":"],"id":76}],[{"start":{"row":16,"column":53},"end":{"row":16,"column":54},"action":"insert","lines":[":"],"id":77},{"start":{"row":16,"column":54},"end":{"row":16,"column":55},"action":"insert","lines":["c"]},{"start":{"row":16,"column":55},"end":{"row":16,"column":56},"action":"insert","lines":["l"]},{"start":{"row":16,"column":56},"end":{"row":16,"column":57},"action":"insert","lines":["a"]},{"start":{"row":16,"column":57},"end":{"row":16,"column":58},"action":"insert","lines":["s"]},{"start":{"row":16,"column":58},"end":{"row":16,"column":59},"action":"insert","lines":["s"]},{"start":{"row":16,"column":59},"end":{"row":16,"column":60},"action":"insert","lines":[","]}],[{"start":{"row":16,"column":60},"end":{"row":16,"column":61},"action":"insert","lines":[" "],"id":78},{"start":{"row":16,"column":61},"end":{"row":16,"column":62},"action":"insert","lines":["$"]}],[{"start":{"row":16,"column":61},"end":{"row":16,"column":62},"action":"remove","lines":["$"],"id":79},{"start":{"row":16,"column":61},"end":{"row":16,"column":113},"action":"insert","lines":["$this->system_under_test->create( $this->test_data )"]}],[{"start":{"row":16,"column":113},"end":{"row":16,"column":114},"action":"insert","lines":[" "],"id":80}],[{"start":{"row":16,"column":115},"end":{"row":16,"column":116},"action":"insert","lines":[";"],"id":81}],[{"start":{"row":5,"column":59},"end":{"row":6,"column":0},"action":"insert","lines":["",""],"id":82},{"start":{"row":6,"column":0},"end":{"row":7,"column":0},"action":"insert","lines":["",""]},{"start":{"row":7,"column":0},"end":{"row":7,"column":1},"action":"insert","lines":["u"]},{"start":{"row":7,"column":1},"end":{"row":7,"column":2},"action":"insert","lines":["s"]},{"start":{"row":7,"column":2},"end":{"row":7,"column":3},"action":"insert","lines":["e"]}],[{"start":{"row":7,"column":2},"end":{"row":7,"column":3},"action":"remove","lines":["e"],"id":83},{"start":{"row":7,"column":1},"end":{"row":7,"column":2},"action":"remove","lines":["s"]},{"start":{"row":7,"column":0},"end":{"row":7,"column":1},"action":"remove","lines":["u"]},{"start":{"row":6,"column":0},"end":{"row":7,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":6,"column":0},"end":{"row":6,"column":1},"action":"insert","lines":["u"],"id":84},{"start":{"row":6,"column":1},"end":{"row":6,"column":2},"action":"insert","lines":["s"]},{"start":{"row":6,"column":2},"end":{"row":6,"column":3},"action":"insert","lines":["e"]}],[{"start":{"row":6,"column":3},"end":{"row":6,"column":4},"action":"insert","lines":[" "],"id":85},{"start":{"row":6,"column":4},"end":{"row":6,"column":5},"action":"insert","lines":["J"]},{"start":{"row":6,"column":5},"end":{"row":6,"column":6},"action":"insert","lines":["a"]},{"start":{"row":6,"column":6},"end":{"row":6,"column":7},"action":"insert","lines":["s"]},{"start":{"row":6,"column":7},"end":{"row":6,"column":8},"action":"insert","lines":["o"]},{"start":{"row":6,"column":8},"end":{"row":6,"column":9},"action":"insert","lines":["n"]}],[{"start":{"row":6,"column":4},"end":{"row":6,"column":9},"action":"remove","lines":["Jason"],"id":86},{"start":{"row":6,"column":4},"end":{"row":6,"column":15},"action":"insert","lines":["JasonWKeith"]}],[{"start":{"row":6,"column":15},"end":{"row":6,"column":16},"action":"insert","lines":["\\"],"id":87},{"start":{"row":6,"column":16},"end":{"row":6,"column":17},"action":"insert","lines":["D"]},{"start":{"row":6,"column":17},"end":{"row":6,"column":18},"action":"insert","lines":["o"]},{"start":{"row":6,"column":18},"end":{"row":6,"column":19},"action":"insert","lines":["m"]}],[{"start":{"row":6,"column":16},"end":{"row":6,"column":19},"action":"remove","lines":["Dom"],"id":88},{"start":{"row":6,"column":16},"end":{"row":6,"column":22},"action":"insert","lines":["Domain"]}],[{"start":{"row":6,"column":22},"end":{"row":6,"column":23},"action":"insert","lines":["\\"],"id":89},{"start":{"row":6,"column":23},"end":{"row":6,"column":24},"action":"insert","lines":["B"]},{"start":{"row":6,"column":24},"end":{"row":6,"column":25},"action":"insert","lines":["o"]},{"start":{"row":6,"column":25},"end":{"row":6,"column":26},"action":"insert","lines":["u"]}],[{"start":{"row":6,"column":23},"end":{"row":6,"column":26},"action":"remove","lines":["Bou"],"id":90},{"start":{"row":6,"column":23},"end":{"row":6,"column":31},"action":"insert","lines":["Boundary"]}],[{"start":{"row":6,"column":31},"end":{"row":6,"column":32},"action":"insert","lines":["\\"],"id":91},{"start":{"row":6,"column":32},"end":{"row":6,"column":33},"action":"insert","lines":["E"]},{"start":{"row":6,"column":33},"end":{"row":6,"column":34},"action":"insert","lines":["x"]},{"start":{"row":6,"column":34},"end":{"row":6,"column":35},"action":"insert","lines":["c"]}],[{"start":{"row":6,"column":35},"end":{"row":6,"column":36},"action":"insert","lines":["e"],"id":92},{"start":{"row":6,"column":36},"end":{"row":6,"column":37},"action":"insert","lines":["p"]},{"start":{"row":6,"column":37},"end":{"row":6,"column":38},"action":"insert","lines":["t"]},{"start":{"row":6,"column":38},"end":{"row":6,"column":39},"action":"insert","lines":["i"]},{"start":{"row":6,"column":39},"end":{"row":6,"column":40},"action":"insert","lines":["o"]},{"start":{"row":6,"column":40},"end":{"row":6,"column":41},"action":"insert","lines":["n"]},{"start":{"row":6,"column":41},"end":{"row":6,"column":42},"action":"insert","lines":["\\"]},{"start":{"row":6,"column":42},"end":{"row":6,"column":43},"action":"insert","lines":["E"]},{"start":{"row":6,"column":43},"end":{"row":6,"column":44},"action":"insert","lines":["x"]},{"start":{"row":6,"column":44},"end":{"row":6,"column":45},"action":"insert","lines":["c"]}],[{"start":{"row":6,"column":45},"end":{"row":6,"column":46},"action":"insert","lines":["e"],"id":93}],[{"start":{"row":6,"column":42},"end":{"row":6,"column":46},"action":"remove","lines":["Exce"],"id":94},{"start":{"row":6,"column":42},"end":{"row":6,"column":60},"action":"insert","lines":["ExceptionInterface"]}],[{"start":{"row":6,"column":60},"end":{"row":6,"column":61},"action":"insert","lines":[";"],"id":95}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":6,"column":0},"end":{"row":6,"column":61},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1616122103075,"hash":"2c05e7591c432aff3351beb561214725e24d14e5"}