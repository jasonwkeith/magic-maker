{"filter":false,"title":"BookTestDataFactory.php","tooltip":"/Domain/DataObject/Book/BookTestDataFactory.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":50,"column":22},"end":{"row":50,"column":36},"action":"remove","lines":["book_factory->"],"id":188}],[{"start":{"row":55,"column":22},"end":{"row":55,"column":36},"action":"remove","lines":["book_factory->"],"id":189}],[{"start":{"row":60,"column":22},"end":{"row":60,"column":36},"action":"remove","lines":["book_factory->"],"id":190}],[{"start":{"row":65,"column":22},"end":{"row":65,"column":36},"action":"remove","lines":["book_factory->"],"id":191}],[{"start":{"row":70,"column":22},"end":{"row":70,"column":36},"action":"remove","lines":["book_factory->"],"id":192}],[{"start":{"row":75,"column":22},"end":{"row":75,"column":36},"action":"remove","lines":["book_factory->"],"id":193}],[{"start":{"row":80,"column":29},"end":{"row":80,"column":43},"action":"remove","lines":["book_factory->"],"id":194}],[{"start":{"row":81,"column":29},"end":{"row":81,"column":43},"action":"remove","lines":["book_factory->"],"id":195}],[{"start":{"row":82,"column":29},"end":{"row":82,"column":43},"action":"remove","lines":["book_factory->"],"id":196}],[{"start":{"row":83,"column":29},"end":{"row":83,"column":43},"action":"remove","lines":["book_factory->"],"id":197}],[{"start":{"row":90,"column":22},"end":{"row":90,"column":36},"action":"remove","lines":["book_factory->"],"id":198}],[{"start":{"row":20,"column":44},"end":{"row":20,"column":45},"action":"insert","lines":["$"],"id":199},{"start":{"row":20,"column":45},"end":{"row":20,"column":46},"action":"insert","lines":["d"]},{"start":{"row":20,"column":46},"end":{"row":20,"column":47},"action":"insert","lines":["t"]}],[{"start":{"row":20,"column":46},"end":{"row":20,"column":47},"action":"remove","lines":["t"],"id":200}],[{"start":{"row":20,"column":46},"end":{"row":20,"column":47},"action":"insert","lines":["a"],"id":201},{"start":{"row":20,"column":47},"end":{"row":20,"column":48},"action":"insert","lines":["t"]},{"start":{"row":20,"column":48},"end":{"row":20,"column":49},"action":"insert","lines":["s"]},{"start":{"row":20,"column":49},"end":{"row":20,"column":50},"action":"insert","lines":["["]}],[{"start":{"row":20,"column":49},"end":{"row":20,"column":50},"action":"remove","lines":["["],"id":202},{"start":{"row":20,"column":48},"end":{"row":20,"column":49},"action":"remove","lines":["s"]}],[{"start":{"row":20,"column":48},"end":{"row":20,"column":49},"action":"insert","lines":["a"],"id":203},{"start":{"row":20,"column":49},"end":{"row":20,"column":50},"action":"insert","lines":["["]}],[{"start":{"row":20,"column":50},"end":{"row":20,"column":51},"action":"insert","lines":[" "],"id":204},{"start":{"row":20,"column":51},"end":{"row":20,"column":52},"action":"insert","lines":["B"]},{"start":{"row":20,"column":52},"end":{"row":20,"column":53},"action":"insert","lines":["O"]}],[{"start":{"row":20,"column":52},"end":{"row":20,"column":53},"action":"remove","lines":["O"],"id":205}],[{"start":{"row":20,"column":52},"end":{"row":20,"column":53},"action":"insert","lines":["o"],"id":206}],[{"start":{"row":20,"column":51},"end":{"row":20,"column":53},"action":"remove","lines":["Bo"],"id":207},{"start":{"row":20,"column":51},"end":{"row":20,"column":64},"action":"insert","lines":["BookInterface"]}],[{"start":{"row":20,"column":64},"end":{"row":20,"column":65},"action":"insert","lines":[":"],"id":208},{"start":{"row":20,"column":65},"end":{"row":20,"column":66},"action":"insert","lines":[":"]},{"start":{"row":20,"column":66},"end":{"row":20,"column":67},"action":"insert","lines":["G"]},{"start":{"row":20,"column":67},"end":{"row":20,"column":68},"action":"insert","lines":["U"]},{"start":{"row":20,"column":68},"end":{"row":20,"column":69},"action":"insert","lines":["I"]},{"start":{"row":20,"column":69},"end":{"row":20,"column":70},"action":"insert","lines":["D"]}],[{"start":{"row":20,"column":70},"end":{"row":20,"column":71},"action":"insert","lines":[" "],"id":209},{"start":{"row":20,"column":71},"end":{"row":20,"column":72},"action":"insert","lines":["]"]},{"start":{"row":20,"column":72},"end":{"row":20,"column":73},"action":"insert","lines":[","]}],[{"start":{"row":20,"column":73},"end":{"row":20,"column":74},"action":"insert","lines":[" "],"id":210}],[{"start":{"row":91,"column":5},"end":{"row":92,"column":0},"action":"insert","lines":["",""],"id":211},{"start":{"row":92,"column":0},"end":{"row":92,"column":4},"action":"insert","lines":["    "]},{"start":{"row":92,"column":4},"end":{"row":93,"column":0},"action":"insert","lines":["",""]},{"start":{"row":93,"column":0},"end":{"row":93,"column":4},"action":"insert","lines":["    "]},{"start":{"row":93,"column":4},"end":{"row":94,"column":0},"action":"insert","lines":["",""]},{"start":{"row":94,"column":0},"end":{"row":94,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":94,"column":0},"end":{"row":246,"column":8},"action":"insert","lines":["   public function createRaw0(): array","    {","        $dto = $this->book_factory->createDTO();","        ","        ","        $dto[ BookInterface::GUID ] =\"39c734cd-6082-4c1d-8d8e-766e7c18d757\";","        $dto[ BookInterface::AUTHORS ] = $this->person_test_data_factory->createCollection0();","        $dto[ BookInterface::PUBLISHED_YEAR ] = 1978;","        $dto[ BookInterface::SUBTITLE ] = \"How everything you know about Rhinos is wrong\";","        $dto[ BookInterface::TITLE ] = \"Rhinoceros Success\";","        ","        return $dto;","    }","    ","    public function createRaw1(): array","    {","        $dto = $this->book_factory->createDTO();","        $dto[ BookInterface::GUID ] =\"5e85781a-ef8f-4cf1-b9e3-16ccee5c59b9\";        ","        $dto[ BookInterface::AUTHORS ] = $this->person_test_data_factory->createCollection1();","        $dto[ BookInterface::PUBLISHED_YEAR ] = 1978;","        $dto[ BookInterface::SUBTITLE ] = \"How to stopping digging holes with new ideas\";","        $dto[ BookInterface::TITLE ] = \"Innovation Stack\";","        ","        return $dto;","    }","    ","    public function createRaw2(): array","    {","        $dto = $this->book_factory->createDTO();","        $dto[ BookInterface::GUID ] =\"832abfd0-c13e-44b9-a5da-7ff4f0233142\";        ","        $dto[ BookInterface::AUTHORS ] = $this->person_test_data_factory->createCollection2();","        $dto[ BookInterface::PUBLISHED_YEAR ] = 1988;","        $dto[ BookInterface::SUBTITLE ] = \"Its the Zombiepocolypse\";","        $dto[ BookInterface::TITLE ] = \"Dead Companies Walking\";","        ","        return $dto;","    }","","    public function createRaw3(): array","    {","        $dto = $this->book_factory->createDTO();","        $dto[ BookInterface::GUID ] =\"90320091-e4ab-4eb9-9be0-7bd8a3f2965c\";        ","        $dto[ BookInterface::AUTHORS ] = $this->person_test_data_factory->createCollection0();","        $dto[ BookInterface::PUBLISHED_YEAR ] = 1992;","        $dto[ BookInterface::SUBTITLE ] = \"Because your kids are socialists\";","        $dto[ BookInterface::TITLE ] = \"Post Capitalist Society\";","        ","        return $dto;","    }  ","    ","    public function createRaw4(): array","    {","        $dto = $this->book_factory->createDTO();","        $dto[ BookInterface::GUID ] =\"10a1a17f-4f15-4c8b-a516-938c4746f685\";        ","        $dto[ BookInterface::AUTHORS ] = $this->person_test_data_factory->createCollection1();","        $dto[ BookInterface::PUBLISHED_YEAR ] = 1998;","        $dto[ BookInterface::SUBTITLE ] = \"Where your leadership should be taking you\";","        $dto[ BookInterface::TITLE ] = \"True North\";","        ","        return $dto;","    }  ","    ","    public function createRaw5(): array","    {","        $dto = $this->book_factory->createDTO();","        $dto[ BookInterface::GUID ] =\"74e8bbf9-249a-452b-a518-a465f1d64ba5\";        ","        $dto[ BookInterface::AUTHORS ] = $this->person_test_data_factory->createCollection2();","        $dto[ BookInterface::PUBLISHED_YEAR ] = 2010;","        $dto[ BookInterface::SUBTITLE ] = \"Because your employees suck\";","        $dto[ BookInterface::TITLE ] = \"Extreme Ownership\";","        ","        return $dto;","    }    ","","    public function createRaw6(): array","    {","        $dto = $this->book_factory->createDTO();","        $dto[ BookInterface::GUID ] =\"45af3b87-6a67-43e9-8b42-ad901c9d2180\";        ","        $dto[ BookInterface::AUTHORS ] = $this->person_test_data_factory->createCollection0();","        $dto[ BookInterface::PUBLISHED_YEAR ] = 2015;","        $dto[ BookInterface::SUBTITLE ] = \"Five hats are so prepandemic\";","        $dto[ BookInterface::TITLE ] = \"Six Thinking Hats\";","        ","        return $dto;","    }   ","    ","    public function createRaw7(): array","    {","        $dto = $this->book_factory->createDTO();","        $dto[ BookInterface::GUID ] =\"445e6049-829d-4f7b-a3aa-92c1274f7e31\";        ","        $dto[ BookInterface::AUTHORS ] = $this->person_test_data_factory->createCollection0();","        $dto[ BookInterface::PUBLISHED_YEAR ] = 2018;","        $dto[ BookInterface::SUBTITLE ] = \"They are hard!\";","        $dto[ BookInterface::TITLE ] = \"The Hard Thing About Hard Things\";","        ","        return $dto;","    } ","    ","    public function createRaw8(): array","    {","        $dto = $this->book_factory->createDTO();","        $dto[ BookInterface::GUID ] =\"ded02299-91e1-41af-affb-529bd0a72dca\";        ","        $dto[ BookInterface::AUTHORS ] = $this->person_test_data_factory->createCollection1();","        $dto[ BookInterface::PUBLISHED_YEAR ] = 2020;","        $dto[ BookInterface::SUBTITLE ] = \"Economimists deny science\";","        $dto[ BookInterface::TITLE ] = \"The World is Flat\";","        ","        return $dto;","    }   ","    ","    public function createRaw9(): array","    {","        $dto = $this->book_factory->createDTO();","        $dto[ BookInterface::GUID ] =\"c5db4631-33a8-4b7e-9049-509cf771c6d2\";        ","        $dto[ BookInterface::AUTHORS ] = $this->person_test_data_factory->createCollection1();","        $dto[ BookInterface::PUBLISHED_YEAR ] = 2029;","        $dto[ BookInterface::SUBTITLE ] = \"Not to be confused with getting to yes\";","        $dto[ BookInterface::TITLE ] = \"Getting Past No\";","        ","        return $dto;","    }  ","    ","    public function createRawDefault(): array","    {","        $dto = $this->book_factory->createDTO();","        $dto[ BookInterface::SUBTITLE ] = \"\";","        ","        return $dto;","    }      ","    ","    public function createRawSubtitle(): array","    {","        $dto = $this->createRawDefault();","        $dto[ BookInterface::SUBTITLE ] = \"People are AWESOME!\";","        ","        return $dto;","    }    ","    ","    public function createRawDefaultSubtitle(): array","    {","        $dto = $this->createRawDefault();","        $dto[ BookInterface::SUBTITLE ] = $default_dto[ BookInterface::SUBTITLE ];","        ","        return $dto;","    }     ","  ","    public function createRawMultipleAuthors(): array","    {","     ","        $dto = $this->createRawDefault();","","        return $dto;","    }   "],"id":212}],[{"start":{"row":92,"column":0},"end":{"row":92,"column":4},"action":"remove","lines":["    "],"id":213},{"start":{"row":92,"column":0},"end":{"row":93,"column":4},"action":"remove","lines":["","    "]}],[{"start":{"row":16,"column":5},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":214},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"insert","lines":["    "]},{"start":{"row":17,"column":4},"end":{"row":18,"column":0},"action":"insert","lines":["",""]},{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":18,"column":4},"end":{"row":22,"column":5},"action":"insert","lines":["    public function __construct( BookFactoryInterface $book_dto_factory, PersonTestDataFactoryInterface $person_test_data_factory )","    {","        $this->book_factory = $book_factory;","        $this->person_test_data_factory = $person_test_data_factory;","    }"],"id":215}],[{"start":{"row":17,"column":0},"end":{"row":22,"column":5},"action":"remove","lines":["    ","        public function __construct( BookFactoryInterface $book_dto_factory, PersonTestDataFactoryInterface $person_test_data_factory )","    {","        $this->book_factory = $book_factory;","        $this->person_test_data_factory = $person_test_data_factory;","    }"],"id":216},{"start":{"row":17,"column":0},"end":{"row":18,"column":4},"action":"remove","lines":["","    "]}],[{"start":{"row":12,"column":67},"end":{"row":12,"column":129},"action":"remove","lines":[", RawBookTestDataFactoryInterface $raw_book_test_data_factory "],"id":217}],[{"start":{"row":15,"column":0},"end":{"row":15,"column":72},"action":"remove","lines":["        $this->raw_book_test_data_factory = $raw_book_test_data_factory;"],"id":218}],[{"start":{"row":25,"column":30},"end":{"row":25,"column":71},"action":"remove","lines":["$this->raw_book_test_data_factory->create"],"id":223},{"start":{"row":25,"column":30},"end":{"row":25,"column":46},"action":"insert","lines":["$this->createRaw"]},{"start":{"row":30,"column":30},"end":{"row":30,"column":71},"action":"remove","lines":["$this->raw_book_test_data_factory->create"]},{"start":{"row":30,"column":30},"end":{"row":30,"column":46},"action":"insert","lines":["$this->createRaw"]},{"start":{"row":35,"column":30},"end":{"row":35,"column":71},"action":"remove","lines":["$this->raw_book_test_data_factory->create"]},{"start":{"row":35,"column":30},"end":{"row":35,"column":46},"action":"insert","lines":["$this->createRaw"]},{"start":{"row":40,"column":30},"end":{"row":40,"column":71},"action":"remove","lines":["$this->raw_book_test_data_factory->create"]},{"start":{"row":40,"column":30},"end":{"row":40,"column":46},"action":"insert","lines":["$this->createRaw"]},{"start":{"row":45,"column":30},"end":{"row":45,"column":71},"action":"remove","lines":["$this->raw_book_test_data_factory->create"]},{"start":{"row":45,"column":30},"end":{"row":45,"column":46},"action":"insert","lines":["$this->createRaw"]},{"start":{"row":50,"column":30},"end":{"row":50,"column":71},"action":"remove","lines":["$this->raw_book_test_data_factory->create"]},{"start":{"row":50,"column":30},"end":{"row":50,"column":46},"action":"insert","lines":["$this->createRaw"]},{"start":{"row":55,"column":30},"end":{"row":55,"column":71},"action":"remove","lines":["$this->raw_book_test_data_factory->create"]},{"start":{"row":55,"column":30},"end":{"row":55,"column":46},"action":"insert","lines":["$this->createRaw"]},{"start":{"row":60,"column":30},"end":{"row":60,"column":71},"action":"remove","lines":["$this->raw_book_test_data_factory->create"]},{"start":{"row":60,"column":30},"end":{"row":60,"column":46},"action":"insert","lines":["$this->createRaw"]},{"start":{"row":65,"column":30},"end":{"row":65,"column":71},"action":"remove","lines":["$this->raw_book_test_data_factory->create"]},{"start":{"row":65,"column":30},"end":{"row":65,"column":46},"action":"insert","lines":["$this->createRaw"]},{"start":{"row":70,"column":30},"end":{"row":70,"column":71},"action":"remove","lines":["$this->raw_book_test_data_factory->create"]},{"start":{"row":70,"column":30},"end":{"row":70,"column":46},"action":"insert","lines":["$this->createRaw"]},{"start":{"row":75,"column":30},"end":{"row":75,"column":71},"action":"remove","lines":["$this->raw_book_test_data_factory->create"]},{"start":{"row":75,"column":30},"end":{"row":75,"column":46},"action":"insert","lines":["$this->createRaw"]},{"start":{"row":80,"column":37},"end":{"row":80,"column":78},"action":"remove","lines":["$this->raw_book_test_data_factory->create"]},{"start":{"row":80,"column":37},"end":{"row":80,"column":53},"action":"insert","lines":["$this->createRaw"]},{"start":{"row":81,"column":37},"end":{"row":81,"column":78},"action":"remove","lines":["$this->raw_book_test_data_factory->create"]},{"start":{"row":81,"column":37},"end":{"row":81,"column":53},"action":"insert","lines":["$this->createRaw"]},{"start":{"row":82,"column":37},"end":{"row":82,"column":78},"action":"remove","lines":["$this->raw_book_test_data_factory->create"]},{"start":{"row":82,"column":37},"end":{"row":82,"column":53},"action":"insert","lines":["$this->createRaw"]},{"start":{"row":83,"column":37},"end":{"row":83,"column":78},"action":"remove","lines":["$this->raw_book_test_data_factory->create"]},{"start":{"row":83,"column":37},"end":{"row":83,"column":53},"action":"insert","lines":["$this->createRaw"]}],[{"start":{"row":10,"column":65},"end":{"row":10,"column":66},"action":"insert","lines":[","],"id":224}],[{"start":{"row":10,"column":66},"end":{"row":10,"column":67},"action":"insert","lines":[" "],"id":225},{"start":{"row":10,"column":67},"end":{"row":10,"column":68},"action":"insert","lines":["R"]},{"start":{"row":10,"column":68},"end":{"row":10,"column":69},"action":"insert","lines":["a"]},{"start":{"row":10,"column":69},"end":{"row":10,"column":70},"action":"insert","lines":["w"]}],[{"start":{"row":10,"column":67},"end":{"row":10,"column":70},"action":"remove","lines":["Raw"],"id":226},{"start":{"row":10,"column":67},"end":{"row":10,"column":98},"action":"insert","lines":["RawBookTestDataFactoryInterface"]}],[{"start":{"row":12,"column":67},"end":{"row":12,"column":68},"action":"insert","lines":[","],"id":227}],[{"start":{"row":12,"column":68},"end":{"row":12,"column":69},"action":"insert","lines":[" "],"id":228},{"start":{"row":12,"column":69},"end":{"row":12,"column":70},"action":"insert","lines":["P"]},{"start":{"row":12,"column":70},"end":{"row":12,"column":71},"action":"insert","lines":["e"]},{"start":{"row":12,"column":71},"end":{"row":12,"column":72},"action":"insert","lines":["r"]},{"start":{"row":12,"column":72},"end":{"row":12,"column":73},"action":"insert","lines":["s"]},{"start":{"row":12,"column":73},"end":{"row":12,"column":74},"action":"insert","lines":["o"]},{"start":{"row":12,"column":74},"end":{"row":12,"column":75},"action":"insert","lines":["n"]},{"start":{"row":12,"column":75},"end":{"row":12,"column":76},"action":"insert","lines":["T"]},{"start":{"row":12,"column":76},"end":{"row":12,"column":77},"action":"insert","lines":["s"]}],[{"start":{"row":12,"column":76},"end":{"row":12,"column":77},"action":"remove","lines":["s"],"id":229}],[{"start":{"row":12,"column":76},"end":{"row":12,"column":77},"action":"insert","lines":["e"],"id":230},{"start":{"row":12,"column":77},"end":{"row":12,"column":78},"action":"insert","lines":["s"]},{"start":{"row":12,"column":78},"end":{"row":12,"column":79},"action":"insert","lines":["t"]},{"start":{"row":12,"column":79},"end":{"row":12,"column":80},"action":"insert","lines":["D"]},{"start":{"row":12,"column":80},"end":{"row":12,"column":81},"action":"insert","lines":["a"]},{"start":{"row":12,"column":81},"end":{"row":12,"column":82},"action":"insert","lines":["t"]}],[{"start":{"row":12,"column":69},"end":{"row":12,"column":82},"action":"remove","lines":["PersonTestDat"],"id":231},{"start":{"row":12,"column":69},"end":{"row":12,"column":99},"action":"insert","lines":["PersonTestDataFactoryInterface"]}],[{"start":{"row":12,"column":99},"end":{"row":12,"column":100},"action":"insert","lines":[" "],"id":232},{"start":{"row":12,"column":100},"end":{"row":12,"column":101},"action":"insert","lines":["$"]},{"start":{"row":12,"column":101},"end":{"row":12,"column":102},"action":"insert","lines":["p"]},{"start":{"row":12,"column":102},"end":{"row":12,"column":103},"action":"insert","lines":["e"]},{"start":{"row":12,"column":103},"end":{"row":12,"column":104},"action":"insert","lines":["r"]},{"start":{"row":12,"column":104},"end":{"row":12,"column":105},"action":"insert","lines":["s"]},{"start":{"row":12,"column":105},"end":{"row":12,"column":106},"action":"insert","lines":["o"]},{"start":{"row":12,"column":106},"end":{"row":12,"column":107},"action":"insert","lines":["n"]},{"start":{"row":12,"column":107},"end":{"row":12,"column":108},"action":"insert","lines":["_"]},{"start":{"row":12,"column":108},"end":{"row":12,"column":109},"action":"insert","lines":["t"]},{"start":{"row":12,"column":109},"end":{"row":12,"column":110},"action":"insert","lines":["e"]}],[{"start":{"row":12,"column":110},"end":{"row":12,"column":111},"action":"insert","lines":["s"],"id":233},{"start":{"row":12,"column":111},"end":{"row":12,"column":112},"action":"insert","lines":["t"]},{"start":{"row":12,"column":112},"end":{"row":12,"column":113},"action":"insert","lines":["_"]},{"start":{"row":12,"column":113},"end":{"row":12,"column":114},"action":"insert","lines":["d"]},{"start":{"row":12,"column":114},"end":{"row":12,"column":115},"action":"insert","lines":["a"]},{"start":{"row":12,"column":115},"end":{"row":12,"column":116},"action":"insert","lines":["t"]},{"start":{"row":12,"column":116},"end":{"row":12,"column":117},"action":"insert","lines":["a"]}],[{"start":{"row":12,"column":117},"end":{"row":12,"column":118},"action":"insert","lines":["_"],"id":234},{"start":{"row":12,"column":118},"end":{"row":12,"column":119},"action":"insert","lines":["f"]},{"start":{"row":12,"column":119},"end":{"row":12,"column":120},"action":"insert","lines":["a"]},{"start":{"row":12,"column":120},"end":{"row":12,"column":121},"action":"insert","lines":["c"]},{"start":{"row":12,"column":121},"end":{"row":12,"column":122},"action":"insert","lines":["t"]},{"start":{"row":12,"column":122},"end":{"row":12,"column":123},"action":"insert","lines":["o"]},{"start":{"row":12,"column":123},"end":{"row":12,"column":124},"action":"insert","lines":["r"]},{"start":{"row":12,"column":124},"end":{"row":12,"column":125},"action":"insert","lines":["y"]}],[{"start":{"row":14,"column":44},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":235},{"start":{"row":15,"column":0},"end":{"row":15,"column":8},"action":"insert","lines":["        "]},{"start":{"row":15,"column":8},"end":{"row":15,"column":9},"action":"insert","lines":["$"]},{"start":{"row":15,"column":9},"end":{"row":15,"column":10},"action":"insert","lines":["t"]},{"start":{"row":15,"column":10},"end":{"row":15,"column":11},"action":"insert","lines":["h"]},{"start":{"row":15,"column":11},"end":{"row":15,"column":12},"action":"insert","lines":["i"]},{"start":{"row":15,"column":12},"end":{"row":15,"column":13},"action":"insert","lines":["s"]},{"start":{"row":15,"column":13},"end":{"row":15,"column":14},"action":"insert","lines":["-"]},{"start":{"row":15,"column":14},"end":{"row":15,"column":15},"action":"insert","lines":[">"]},{"start":{"row":15,"column":15},"end":{"row":15,"column":16},"action":"insert","lines":["p"]}],[{"start":{"row":15,"column":16},"end":{"row":15,"column":17},"action":"insert","lines":["e"],"id":236},{"start":{"row":15,"column":17},"end":{"row":15,"column":18},"action":"insert","lines":["r"]},{"start":{"row":15,"column":18},"end":{"row":15,"column":19},"action":"insert","lines":["s"]},{"start":{"row":15,"column":19},"end":{"row":15,"column":20},"action":"insert","lines":["o"]}],[{"start":{"row":15,"column":20},"end":{"row":15,"column":21},"action":"insert","lines":[" "],"id":237}],[{"start":{"row":15,"column":20},"end":{"row":15,"column":21},"action":"remove","lines":[" "],"id":238}],[{"start":{"row":15,"column":20},"end":{"row":15,"column":21},"action":"insert","lines":["n"],"id":239}],[{"start":{"row":15,"column":15},"end":{"row":15,"column":21},"action":"remove","lines":["person"],"id":240},{"start":{"row":15,"column":15},"end":{"row":15,"column":39},"action":"insert","lines":["person_test_data_factory"]}],[{"start":{"row":15,"column":39},"end":{"row":15,"column":40},"action":"insert","lines":[" "],"id":241},{"start":{"row":15,"column":40},"end":{"row":15,"column":41},"action":"insert","lines":["="]}],[{"start":{"row":15,"column":41},"end":{"row":15,"column":42},"action":"insert","lines":[" "],"id":242},{"start":{"row":15,"column":42},"end":{"row":15,"column":43},"action":"insert","lines":["$"]},{"start":{"row":15,"column":43},"end":{"row":15,"column":44},"action":"insert","lines":["p"]},{"start":{"row":15,"column":44},"end":{"row":15,"column":45},"action":"insert","lines":["e"]},{"start":{"row":15,"column":45},"end":{"row":15,"column":46},"action":"insert","lines":["r"]},{"start":{"row":15,"column":46},"end":{"row":15,"column":47},"action":"insert","lines":["k"]},{"start":{"row":15,"column":47},"end":{"row":15,"column":48},"action":"insert","lines":[";"]}],[{"start":{"row":15,"column":47},"end":{"row":15,"column":48},"action":"remove","lines":[";"],"id":243},{"start":{"row":15,"column":46},"end":{"row":15,"column":47},"action":"remove","lines":["k"]}],[{"start":{"row":15,"column":46},"end":{"row":15,"column":47},"action":"insert","lines":["o"],"id":244},{"start":{"row":15,"column":47},"end":{"row":15,"column":48},"action":"insert","lines":["n"]}],[{"start":{"row":15,"column":47},"end":{"row":15,"column":48},"action":"remove","lines":["n"],"id":245},{"start":{"row":15,"column":46},"end":{"row":15,"column":47},"action":"remove","lines":["o"]}],[{"start":{"row":15,"column":46},"end":{"row":15,"column":47},"action":"insert","lines":["s"],"id":246},{"start":{"row":15,"column":47},"end":{"row":15,"column":48},"action":"insert","lines":["o"]},{"start":{"row":15,"column":48},"end":{"row":15,"column":49},"action":"insert","lines":["n"]}],[{"start":{"row":15,"column":42},"end":{"row":15,"column":49},"action":"remove","lines":["$person"],"id":247},{"start":{"row":15,"column":42},"end":{"row":15,"column":67},"action":"insert","lines":["$person_test_data_factory"]}],[{"start":{"row":15,"column":67},"end":{"row":15,"column":68},"action":"insert","lines":[";"],"id":248}],[{"start":{"row":15,"column":68},"end":{"row":16,"column":0},"action":"remove","lines":["",""],"id":249}],[{"start":{"row":8,"column":80},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":250}],[{"start":{"row":9,"column":0},"end":{"row":9,"column":30},"action":"insert","lines":["PersonTestDataFactoryInterface"],"id":251}],[{"start":{"row":9,"column":0},"end":{"row":9,"column":43},"action":"insert","lines":["use JasonWKeith\\Domain\\Boundary\\DataObject\\"],"id":252}],[{"start":{"row":9,"column":43},"end":{"row":9,"column":44},"action":"insert","lines":["P"],"id":253},{"start":{"row":9,"column":44},"end":{"row":9,"column":45},"action":"insert","lines":["e"]},{"start":{"row":9,"column":45},"end":{"row":9,"column":46},"action":"insert","lines":["r"]},{"start":{"row":9,"column":46},"end":{"row":9,"column":47},"action":"insert","lines":["s"]},{"start":{"row":9,"column":47},"end":{"row":9,"column":48},"action":"insert","lines":["o"]},{"start":{"row":9,"column":48},"end":{"row":9,"column":49},"action":"insert","lines":["n"]},{"start":{"row":9,"column":49},"end":{"row":9,"column":50},"action":"insert","lines":["\\"]}],[{"start":{"row":9,"column":80},"end":{"row":9,"column":81},"action":"insert","lines":[";"],"id":254}],[{"start":{"row":218,"column":46},"end":{"row":218,"column":47},"action":"insert","lines":[" "],"id":255}],[{"start":{"row":218,"column":46},"end":{"row":218,"column":47},"action":"remove","lines":[" "],"id":258}],[{"start":{"row":218,"column":48},"end":{"row":219,"column":0},"action":"insert","lines":["",""],"id":259},{"start":{"row":219,"column":0},"end":{"row":219,"column":8},"action":"insert","lines":["        "]},{"start":{"row":219,"column":8},"end":{"row":219,"column":9},"action":"insert","lines":["$"]},{"start":{"row":219,"column":9},"end":{"row":219,"column":10},"action":"insert","lines":["d"]},{"start":{"row":219,"column":10},"end":{"row":219,"column":11},"action":"insert","lines":["t"]},{"start":{"row":219,"column":11},"end":{"row":219,"column":12},"action":"insert","lines":["o"]}],[{"start":{"row":219,"column":12},"end":{"row":219,"column":13},"action":"insert","lines":[" "],"id":260}],[{"start":{"row":219,"column":12},"end":{"row":219,"column":13},"action":"remove","lines":[" "],"id":261}],[{"start":{"row":219,"column":12},"end":{"row":219,"column":14},"action":"insert","lines":["[]"],"id":262}],[{"start":{"row":219,"column":13},"end":{"row":219,"column":14},"action":"insert","lines":[" "],"id":263},{"start":{"row":219,"column":14},"end":{"row":219,"column":15},"action":"insert","lines":["B"]}],[{"start":{"row":219,"column":14},"end":{"row":219,"column":15},"action":"remove","lines":["B"],"id":264},{"start":{"row":219,"column":14},"end":{"row":219,"column":27},"action":"insert","lines":["BookInterface"]}],[{"start":{"row":219,"column":27},"end":{"row":219,"column":28},"action":"insert","lines":[":"],"id":265},{"start":{"row":219,"column":28},"end":{"row":219,"column":29},"action":"insert","lines":[":"]},{"start":{"row":219,"column":29},"end":{"row":219,"column":30},"action":"insert","lines":["A"]}],[{"start":{"row":219,"column":29},"end":{"row":219,"column":30},"action":"remove","lines":["A"],"id":266},{"start":{"row":219,"column":29},"end":{"row":219,"column":36},"action":"insert","lines":["AUTHORS"]}],[{"start":{"row":219,"column":36},"end":{"row":219,"column":37},"action":"insert","lines":[" "],"id":267}],[{"start":{"row":219,"column":38},"end":{"row":219,"column":39},"action":"insert","lines":[" "],"id":268},{"start":{"row":219,"column":39},"end":{"row":219,"column":40},"action":"insert","lines":["="]}],[{"start":{"row":219,"column":40},"end":{"row":219,"column":41},"action":"insert","lines":[" "],"id":269}],[{"start":{"row":219,"column":41},"end":{"row":219,"column":94},"action":"insert","lines":[" $this->person_test_data_factory->createCollection1()"],"id":270}],[{"start":{"row":219,"column":75},"end":{"row":219,"column":92},"action":"remove","lines":["createCollection1"],"id":271},{"start":{"row":219,"column":75},"end":{"row":219,"column":98},"action":"insert","lines":["createCollectionDefault"]}],[{"start":{"row":219,"column":100},"end":{"row":219,"column":101},"action":"insert","lines":[";"],"id":272}],[{"start":{"row":124,"column":90},"end":{"row":124,"column":91},"action":"remove","lines":["2"],"id":273},{"start":{"row":124,"column":90},"end":{"row":124,"column":91},"action":"insert","lines":["1"]}],[{"start":{"row":160,"column":90},"end":{"row":160,"column":91},"action":"remove","lines":["2"],"id":274},{"start":{"row":160,"column":90},"end":{"row":160,"column":91},"action":"insert","lines":["1"]}],[{"start":{"row":212,"column":0},"end":{"row":212,"column":8},"action":"remove","lines":["        "],"id":275},{"start":{"row":212,"column":0},"end":{"row":212,"column":57},"action":"insert","lines":["        $dto[ BookInterface::TITLE ] = \"Getting Past No\";"]}],[{"start":{"row":212,"column":40},"end":{"row":212,"column":55},"action":"remove","lines":["Getting Past No"],"id":276},{"start":{"row":212,"column":40},"end":{"row":212,"column":41},"action":"insert","lines":["B"]},{"start":{"row":212,"column":41},"end":{"row":212,"column":42},"action":"insert","lines":["o"]},{"start":{"row":212,"column":42},"end":{"row":212,"column":43},"action":"insert","lines":["o"]},{"start":{"row":212,"column":43},"end":{"row":212,"column":44},"action":"insert","lines":["k"]},{"start":{"row":212,"column":44},"end":{"row":212,"column":45},"action":"insert","lines":["9"]}],[{"start":{"row":200,"column":0},"end":{"row":200,"column":8},"action":"remove","lines":["        "],"id":277},{"start":{"row":200,"column":0},"end":{"row":200,"column":59},"action":"insert","lines":["        $dto[ BookInterface::TITLE ] = \"The World is Flat\";"]}],[{"start":{"row":200,"column":40},"end":{"row":200,"column":57},"action":"remove","lines":["The World is Flat"],"id":278},{"start":{"row":200,"column":40},"end":{"row":200,"column":41},"action":"insert","lines":["B"]},{"start":{"row":200,"column":41},"end":{"row":200,"column":42},"action":"insert","lines":["o"]},{"start":{"row":200,"column":42},"end":{"row":200,"column":43},"action":"insert","lines":["o"]},{"start":{"row":200,"column":43},"end":{"row":200,"column":44},"action":"insert","lines":["k"]},{"start":{"row":200,"column":44},"end":{"row":200,"column":45},"action":"insert","lines":["8"]}],[{"start":{"row":188,"column":0},"end":{"row":188,"column":7},"action":"remove","lines":["       "],"id":279},{"start":{"row":188,"column":0},"end":{"row":188,"column":74},"action":"insert","lines":["        $dto[ BookInterface::TITLE ] = \"The Hard Thing About Hard Things\";"]}],[{"start":{"row":188,"column":40},"end":{"row":188,"column":72},"action":"remove","lines":["The Hard Thing About Hard Things"],"id":280},{"start":{"row":188,"column":40},"end":{"row":188,"column":41},"action":"insert","lines":["B"]},{"start":{"row":188,"column":41},"end":{"row":188,"column":42},"action":"insert","lines":["o"]},{"start":{"row":188,"column":42},"end":{"row":188,"column":43},"action":"insert","lines":["o"]},{"start":{"row":188,"column":43},"end":{"row":188,"column":44},"action":"insert","lines":["k"]},{"start":{"row":188,"column":44},"end":{"row":188,"column":45},"action":"insert","lines":["7"]}],[{"start":{"row":176,"column":0},"end":{"row":176,"column":8},"action":"remove","lines":["        "],"id":281},{"start":{"row":176,"column":0},"end":{"row":176,"column":48},"action":"insert","lines":["        $dto[ BookInterface::TITLE ] = \"Book7\"; "]}],[{"start":{"row":176,"column":44},"end":{"row":176,"column":45},"action":"remove","lines":["7"],"id":282},{"start":{"row":176,"column":44},"end":{"row":176,"column":45},"action":"insert","lines":["6"]}],[{"start":{"row":164,"column":0},"end":{"row":164,"column":7},"action":"remove","lines":["       "],"id":283},{"start":{"row":164,"column":0},"end":{"row":164,"column":48},"action":"insert","lines":["        $dto[ BookInterface::TITLE ] = \"Book7\"; "]}],[{"start":{"row":164,"column":44},"end":{"row":164,"column":45},"action":"remove","lines":["7"],"id":284},{"start":{"row":164,"column":44},"end":{"row":164,"column":45},"action":"insert","lines":["5"]}],[{"start":{"row":152,"column":0},"end":{"row":152,"column":8},"action":"remove","lines":["        "],"id":285},{"start":{"row":152,"column":0},"end":{"row":152,"column":48},"action":"insert","lines":["        $dto[ BookInterface::TITLE ] = \"Book7\"; "]}],[{"start":{"row":152,"column":44},"end":{"row":152,"column":45},"action":"remove","lines":["7"],"id":286},{"start":{"row":152,"column":44},"end":{"row":152,"column":45},"action":"insert","lines":["4"]}],[{"start":{"row":140,"column":0},"end":{"row":140,"column":8},"action":"remove","lines":["        "],"id":287},{"start":{"row":140,"column":0},"end":{"row":140,"column":48},"action":"insert","lines":["        $dto[ BookInterface::TITLE ] = \"Book7\"; "]}],[{"start":{"row":140,"column":44},"end":{"row":140,"column":45},"action":"remove","lines":["7"],"id":288},{"start":{"row":140,"column":44},"end":{"row":140,"column":45},"action":"insert","lines":["3"]}],[{"start":{"row":128,"column":0},"end":{"row":128,"column":8},"action":"remove","lines":["        "],"id":289},{"start":{"row":128,"column":0},"end":{"row":128,"column":48},"action":"insert","lines":["        $dto[ BookInterface::TITLE ] = \"Book7\"; "]}],[{"start":{"row":128,"column":44},"end":{"row":128,"column":45},"action":"remove","lines":["7"],"id":290},{"start":{"row":128,"column":44},"end":{"row":128,"column":45},"action":"insert","lines":["2"]}],[{"start":{"row":116,"column":0},"end":{"row":116,"column":8},"action":"remove","lines":["        "],"id":291},{"start":{"row":116,"column":0},"end":{"row":116,"column":48},"action":"insert","lines":["        $dto[ BookInterface::TITLE ] = \"Book7\"; "]}],[{"start":{"row":116,"column":44},"end":{"row":116,"column":45},"action":"remove","lines":["7"],"id":292},{"start":{"row":116,"column":44},"end":{"row":116,"column":45},"action":"insert","lines":["1"]}],[{"start":{"row":104,"column":0},"end":{"row":104,"column":8},"action":"remove","lines":["        "],"id":293},{"start":{"row":104,"column":0},"end":{"row":104,"column":48},"action":"insert","lines":["        $dto[ BookInterface::TITLE ] = \"Book1\"; "]}],[{"start":{"row":104,"column":44},"end":{"row":104,"column":45},"action":"remove","lines":["1"],"id":294},{"start":{"row":104,"column":44},"end":{"row":104,"column":45},"action":"insert","lines":["0"]}]]},"ace":{"folds":[],"scrolltop":956.5,"scrollleft":0,"selection":{"start":{"row":104,"column":45},"end":{"row":104,"column":45},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":67,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1618700348800,"hash":"fd037d06cd03d483aed7a3677b54db2ce61bb660"}