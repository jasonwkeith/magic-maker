{"filter":false,"title":"ApplicationRawtDataFactory.php","tooltip":"/Domain/DataObject/Application/ApplicationRawtDataFactory.php","undoManager":{"mark":53,"position":53,"stack":[[{"start":{"row":12,"column":17},"end":{"row":12,"column":18},"action":"insert","lines":["R"],"id":2},{"start":{"row":12,"column":18},"end":{"row":12,"column":19},"action":"insert","lines":["a"]},{"start":{"row":12,"column":19},"end":{"row":12,"column":20},"action":"insert","lines":["w"]}],[{"start":{"row":12,"column":82},"end":{"row":12,"column":122},"action":"remove","lines":[", RawApplicationTestDataFactoryInterface"],"id":3}],[{"start":{"row":12,"column":58},"end":{"row":12,"column":59},"action":"insert","lines":["R"],"id":4},{"start":{"row":12,"column":59},"end":{"row":12,"column":60},"action":"insert","lines":["a"]},{"start":{"row":12,"column":60},"end":{"row":12,"column":61},"action":"insert","lines":["w"]}],[{"start":{"row":72,"column":28},"end":{"row":72,"column":39},"action":"remove","lines":["array $data"],"id":5},{"start":{"row":72,"column":28},"end":{"row":72,"column":29},"action":"insert","lines":["i"]},{"start":{"row":72,"column":29},"end":{"row":72,"column":30},"action":"insert","lines":["n"]},{"start":{"row":72,"column":30},"end":{"row":72,"column":31},"action":"insert","lines":["t"]}],[{"start":{"row":72,"column":31},"end":{"row":72,"column":32},"action":"insert","lines":[" "],"id":6},{"start":{"row":72,"column":32},"end":{"row":72,"column":33},"action":"insert","lines":["$"]},{"start":{"row":72,"column":33},"end":{"row":72,"column":34},"action":"insert","lines":["n"]},{"start":{"row":72,"column":34},"end":{"row":72,"column":35},"action":"insert","lines":["u"]},{"start":{"row":72,"column":35},"end":{"row":72,"column":36},"action":"insert","lines":["m"]},{"start":{"row":72,"column":36},"end":{"row":72,"column":37},"action":"insert","lines":["b"]},{"start":{"row":72,"column":37},"end":{"row":72,"column":38},"action":"insert","lines":["e"]},{"start":{"row":72,"column":38},"end":{"row":72,"column":39},"action":"insert","lines":["r"]}],[{"start":{"row":77,"column":3},"end":{"row":235,"column":7},"action":"remove","lines":[" public function create0(): ApplicationInterface","    {","        return $this->create( $this->createRaw0() );","    }","    ","    public function create1(): ApplicationInterface","    {","        return $this->create( $this->createRaw1() );","    }","    ","    public function create2(): ApplicationInterface","    {","        return $this->create( $this->createRaw2() );","    }","","    public function create3(): ApplicationInterface","    {","        return $this->create( $this->createRaw3() );","    }  ","    ","    public function create4(): ApplicationInterface","    {","        return $this->create( $this->createRaw4() );","    }  ","    ","    public function create5(): ApplicationInterface","    {","        return $this->create( $this->createRaw5() );","    }    ","","    public function create6(): ApplicationInterface","    {","        return $this->create( $this->createRaw6() );","    }   ","    ","    public function create7(): ApplicationInterface","    {","        return $this->create( $this->createRaw7() );","    } ","    ","    public function create8(): ApplicationInterface","    {","        return $this->create( $this->createRaw8() );","    }   ","    ","    public function create9(): ApplicationInterface","    {","        return $this->create( $this->createRaw9() );","    }  ","    ","    public function createDefault(): ApplicationInterface","    {","        return $this->create( $this->createRawDefault() );","    }","","    public function createArray0(): Array","    {","        $Applications[ 0 ] = $this->create( $this->createRaw0() );","        $Applications[ 1 ] = $this->create( $this->createRaw1() );","        $Applications[ 2 ] = $this->create( $this->createRaw2() );    ","        $Applications[ 3 ] = $this->create( $this->createRaw3() );    ","        ","        return $Applications;","    }      ","    ","    public function createCollection0(): ApplicationCollectionInterface","    {","        return $this->createCollection( $this->createArray() );","    }","","   public function createRaw0(): array","    {","        $dto = $this->application_factory->createDTO();","        $this->data_transfer_objects[ 0 ]->history = $this->history_test_data_factory->create0();","        $dto[ ApplicationInterface::GUID ] =\"4f92ed09-80f7-498f-842f-9a40b11f3791\";","        $this->data_transfer_objects[ 0 ]->name = \"JasonWKeith.com\";","        return $dto;","    }","    ","    public function createRaw1(): array","    {","        $dto = $this->application_factory->createDTO();","        $this->data_transfer_objects[ 0 ]->history = $this->history_test_data_factory->create1();        ","        $dto[ ApplicationInterface::GUID ] =\"958077c8-1406-4999-b1c3-d4f11ddf615b\";        ","        $this->data_transfer_objects[ 0 ]->name = \"Otto\";","        return $dto;","    }","    ","    public function createRaw2(): array","    {","        $dto = $this->application_factory->createDTO();","        $this->data_transfer_objects[ 0 ]->history = $this->history_test_data_factory->create2();        ","        $dto[ ApplicationInterface::GUID ] =\"f33c74c0-4454-4e79-93a2-5ec104210eae\";        ","        $this->data_transfer_objects[ 0 ]->name = \"HAL\";","        return $dto;","    }","","    public function createRaw3(): array","    {","        $dto = $this->application_factory->createDTO();","        $this->data_transfer_objects[ 0 ]->history = $this->history_test_data_factory->create3();        ","        $dto[ ApplicationInterface::GUID ] =\"dcb68857-4786-4084-a82b-b15ef7798a4c\";        ","        $this->data_transfer_objects[ 0 ]->name = \"Google.com\";","        return $dto;","    }  ","    ","    public function createRaw4(): array","    {","        $dto = $this->application_factory->createDTO();","        $this->data_transfer_objects[ 0 ]->history = $this->history_test_data_factory->create4();        ","        $dto[ ApplicationInterface::GUID ] =\"0b05aab9-6e76-4687-9871-6cc381beb9b7\";            ","        $this->data_transfer_objects[ 0 ]->name = \"Healthmate\";","        return $dto;","    }  ","    ","    public function createRaw5(): array","    {","        $dto = $this->application_factory->createDTO();","        $this->data_transfer_objects[ 0 ]->history = $this->history_test_data_factory->create5();        ","        $dto[ ApplicationInterface::GUID ] =\"bad9e498-c7c2-444d-aa78-ecbead3bac2e\";        ","        $this->data_transfer_objects[ 0 ]->name = \"Runkeeper\";","        return $dto;","    }    ","","    public function createRaw6(): array","    {","        $dto = $this->application_factory->createDTO();","        $this->data_transfer_objects[ 0 ]->history = $this->history_test_data_factory->create6();        ","        $dto[ ApplicationInterface::GUID ] =\"4a2e0108-382f-408f-a360-62d2c2dc2dae\";        ","        $this->data_transfer_objects[ 0 ]->name = \"Facebook\";","        return $dto;","    }   ","    ","    public function createRaw7(): array","    {","        $dto = $this->application_factory->createDTO();","        $this->data_transfer_objects[ 0 ]->history = $this->history_test_data_factory->create7();        ","        $dto[ ApplicationInterface::GUID ] =\"246eb42f-997b-4fd2-ac87-c6d53e3943c2\";        ","        $this->data_transfer_objects[ 0 ]->name = \"Twitter\";","        return $dto;","    } ","    ","    public function createRaw8(): array","    {","        $dto = $this->application_factory->createDTO();","        $this->data_transfer_objects[ 0 ]->history = $this->history_test_data_factory->create8();        ","        $dto[ ApplicationInterface::GUID ] =\"d32c0d2f-d514-41a3-ab67-2f9f19a64490\";               ","        $this->data_transfer_objects[ 0 ]->name = \"Yahoo Fantasy Sports\";","        return $dto;","    }   ","    ","    public function createRaw9(): array","    {","        $dto = $this->application_factory->createDTO();","        $this->data_transfer_objects[ 0 ]->history = $this->history_test_data_factory->create9();        ","        $dto[ ApplicationInterface::GUID ] =\"e8aaf393-4367-4e6c-9734-820853ba7ebe\";        ","        $this->data_transfer_objects[ 0 ]->name = \"StaleyNation\";","        return $dto;","    }  "],"id":7},{"start":{"row":77,"column":3},"end":{"row":78,"column":4},"action":"remove","lines":["","    "]},{"start":{"row":77,"column":3},"end":{"row":78,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":77,"column":3},"end":{"row":77,"column":4},"action":"remove","lines":[" "],"id":8},{"start":{"row":77,"column":3},"end":{"row":77,"column":4},"action":"remove","lines":[" "]},{"start":{"row":77,"column":3},"end":{"row":77,"column":4},"action":"remove","lines":[" "]}],[{"start":{"row":77,"column":26},"end":{"row":77,"column":29},"action":"remove","lines":["Raw"],"id":9}],[{"start":{"row":74,"column":51},"end":{"row":74,"column":123},"action":"remove","lines":["$data[ ApplicationInterface::GUID ], $data[ ApplicationInterface::NAME ]"],"id":10},{"start":{"row":74,"column":51},"end":{"row":74,"column":52},"action":"insert","lines":["$"]},{"start":{"row":74,"column":52},"end":{"row":74,"column":53},"action":"insert","lines":["t"]},{"start":{"row":74,"column":53},"end":{"row":74,"column":54},"action":"insert","lines":["h"]},{"start":{"row":74,"column":54},"end":{"row":74,"column":55},"action":"insert","lines":["i"]},{"start":{"row":74,"column":55},"end":{"row":74,"column":56},"action":"insert","lines":["s"]},{"start":{"row":74,"column":56},"end":{"row":74,"column":57},"action":"insert","lines":["-"]}],[{"start":{"row":74,"column":57},"end":{"row":74,"column":58},"action":"insert","lines":[">"],"id":11},{"start":{"row":74,"column":58},"end":{"row":74,"column":59},"action":"insert","lines":["d"]},{"start":{"row":74,"column":59},"end":{"row":74,"column":60},"action":"insert","lines":["a"]}],[{"start":{"row":74,"column":58},"end":{"row":74,"column":60},"action":"remove","lines":["da"],"id":12},{"start":{"row":74,"column":58},"end":{"row":74,"column":79},"action":"insert","lines":["data_transfer_objects"]}],[{"start":{"row":74,"column":79},"end":{"row":74,"column":81},"action":"insert","lines":["[]"],"id":13}],[{"start":{"row":74,"column":80},"end":{"row":74,"column":81},"action":"insert","lines":[" "],"id":14},{"start":{"row":74,"column":81},"end":{"row":74,"column":82},"action":"insert","lines":["$"]},{"start":{"row":74,"column":82},"end":{"row":74,"column":83},"action":"insert","lines":["n"]}],[{"start":{"row":74,"column":81},"end":{"row":74,"column":83},"action":"remove","lines":["$n"],"id":15},{"start":{"row":74,"column":81},"end":{"row":74,"column":88},"action":"insert","lines":["$number"]}],[{"start":{"row":74,"column":88},"end":{"row":74,"column":89},"action":"insert","lines":[" "],"id":16}],[{"start":{"row":74,"column":15},"end":{"row":74,"column":50},"action":"remove","lines":["$this->application_factory->create("],"id":18},{"start":{"row":74,"column":15},"end":{"row":74,"column":16},"action":"remove","lines":[" "]}],[{"start":{"row":74,"column":55},"end":{"row":74,"column":56},"action":"remove","lines":[")"],"id":19}],[{"start":{"row":74,"column":54},"end":{"row":74,"column":55},"action":"remove","lines":[" "],"id":20}],[{"start":{"row":72,"column":54},"end":{"row":72,"column":63},"action":"remove","lines":["Interface"],"id":21},{"start":{"row":72,"column":54},"end":{"row":72,"column":55},"action":"insert","lines":["D"]},{"start":{"row":72,"column":55},"end":{"row":72,"column":56},"action":"insert","lines":["a"]},{"start":{"row":72,"column":56},"end":{"row":72,"column":57},"action":"insert","lines":["t"]},{"start":{"row":72,"column":57},"end":{"row":72,"column":58},"action":"insert","lines":["a"]},{"start":{"row":72,"column":58},"end":{"row":72,"column":59},"action":"insert","lines":["T"]},{"start":{"row":72,"column":59},"end":{"row":72,"column":60},"action":"insert","lines":["r"]},{"start":{"row":72,"column":60},"end":{"row":72,"column":61},"action":"insert","lines":["a"]},{"start":{"row":72,"column":61},"end":{"row":72,"column":62},"action":"insert","lines":["n"]}],[{"start":{"row":72,"column":62},"end":{"row":72,"column":63},"action":"insert","lines":["s"],"id":22},{"start":{"row":72,"column":63},"end":{"row":72,"column":64},"action":"insert","lines":["f"]},{"start":{"row":72,"column":64},"end":{"row":72,"column":65},"action":"insert","lines":["e"]},{"start":{"row":72,"column":65},"end":{"row":72,"column":66},"action":"insert","lines":["r"]},{"start":{"row":72,"column":66},"end":{"row":72,"column":67},"action":"insert","lines":["O"]},{"start":{"row":72,"column":67},"end":{"row":72,"column":68},"action":"insert","lines":["b"]},{"start":{"row":72,"column":68},"end":{"row":72,"column":69},"action":"insert","lines":["j"]},{"start":{"row":72,"column":69},"end":{"row":72,"column":70},"action":"insert","lines":["e"]},{"start":{"row":72,"column":70},"end":{"row":72,"column":71},"action":"insert","lines":["c"]},{"start":{"row":72,"column":71},"end":{"row":72,"column":72},"action":"insert","lines":["t"]}],[{"start":{"row":77,"column":35},"end":{"row":77,"column":42},"action":"remove","lines":[": array"],"id":23},{"start":{"row":77,"column":35},"end":{"row":77,"column":66},"action":"insert","lines":[": ApplicationDataTransferObject"]}],[{"start":{"row":79,"column":0},"end":{"row":79,"column":59},"action":"remove","lines":["        $dto = $this->application_factory->createDTO();    "],"id":24},{"start":{"row":79,"column":0},"end":{"row":79,"column":4},"action":"remove","lines":["    "]},{"start":{"row":79,"column":0},"end":{"row":80,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":79,"column":15},"end":{"row":79,"column":19},"action":"remove","lines":["$dto"],"id":25},{"start":{"row":79,"column":15},"end":{"row":79,"column":54},"action":"insert","lines":["$this->application_factory->createDTO()"]}],[{"start":{"row":27,"column":87},"end":{"row":27,"column":96},"action":"remove","lines":["create1()"],"id":26},{"start":{"row":27,"column":87},"end":{"row":27,"column":98},"action":"insert","lines":["create( 0 )"]}],[{"start":{"row":32,"column":87},"end":{"row":32,"column":96},"action":"remove","lines":["create2()"],"id":27},{"start":{"row":32,"column":87},"end":{"row":32,"column":98},"action":"insert","lines":["create( 0 )"]}],[{"start":{"row":37,"column":87},"end":{"row":37,"column":96},"action":"remove","lines":["create3()"],"id":28},{"start":{"row":37,"column":87},"end":{"row":37,"column":98},"action":"insert","lines":["create( 0 )"]}],[{"start":{"row":42,"column":87},"end":{"row":42,"column":96},"action":"remove","lines":["create4()"],"id":29},{"start":{"row":42,"column":87},"end":{"row":42,"column":98},"action":"insert","lines":["create( 0 )"]}],[{"start":{"row":47,"column":87},"end":{"row":47,"column":96},"action":"remove","lines":["create5()"],"id":30},{"start":{"row":47,"column":87},"end":{"row":47,"column":98},"action":"insert","lines":["create( 0 )"]}],[{"start":{"row":52,"column":87},"end":{"row":52,"column":96},"action":"remove","lines":["create6()"],"id":31},{"start":{"row":52,"column":87},"end":{"row":52,"column":98},"action":"insert","lines":["create( 0 )"]}],[{"start":{"row":57,"column":87},"end":{"row":57,"column":96},"action":"remove","lines":["create7()"],"id":32},{"start":{"row":57,"column":87},"end":{"row":57,"column":98},"action":"insert","lines":["create( 0 )"]}],[{"start":{"row":62,"column":87},"end":{"row":62,"column":96},"action":"remove","lines":["create8()"],"id":33},{"start":{"row":62,"column":87},"end":{"row":62,"column":98},"action":"insert","lines":["create( 0 )"]}],[{"start":{"row":67,"column":87},"end":{"row":67,"column":96},"action":"remove","lines":["create9()"],"id":34},{"start":{"row":67,"column":87},"end":{"row":67,"column":98},"action":"insert","lines":["create( 0 )"]}],[{"start":{"row":67,"column":95},"end":{"row":67,"column":96},"action":"remove","lines":["0"],"id":35},{"start":{"row":67,"column":95},"end":{"row":67,"column":96},"action":"insert","lines":["9"]}],[{"start":{"row":62,"column":95},"end":{"row":62,"column":96},"action":"remove","lines":["0"],"id":36},{"start":{"row":62,"column":95},"end":{"row":62,"column":96},"action":"insert","lines":["8"]}],[{"start":{"row":57,"column":95},"end":{"row":57,"column":96},"action":"remove","lines":["0"],"id":37},{"start":{"row":57,"column":95},"end":{"row":57,"column":96},"action":"insert","lines":["7"]}],[{"start":{"row":52,"column":95},"end":{"row":52,"column":96},"action":"remove","lines":["0"],"id":38},{"start":{"row":52,"column":95},"end":{"row":52,"column":96},"action":"insert","lines":["6"]}],[{"start":{"row":47,"column":95},"end":{"row":47,"column":96},"action":"remove","lines":["0"],"id":39},{"start":{"row":47,"column":95},"end":{"row":47,"column":96},"action":"insert","lines":["5"]}],[{"start":{"row":42,"column":95},"end":{"row":42,"column":96},"action":"remove","lines":["0"],"id":40},{"start":{"row":42,"column":95},"end":{"row":42,"column":96},"action":"insert","lines":["4"]}],[{"start":{"row":37,"column":95},"end":{"row":37,"column":96},"action":"remove","lines":["0"],"id":41},{"start":{"row":37,"column":95},"end":{"row":37,"column":96},"action":"insert","lines":["3"]}],[{"start":{"row":32,"column":95},"end":{"row":32,"column":96},"action":"remove","lines":["0"],"id":42},{"start":{"row":32,"column":95},"end":{"row":32,"column":96},"action":"insert","lines":["2"]}],[{"start":{"row":27,"column":95},"end":{"row":27,"column":96},"action":"remove","lines":["0"],"id":43},{"start":{"row":27,"column":95},"end":{"row":27,"column":96},"action":"insert","lines":["1"]}],[{"start":{"row":25,"column":0},"end":{"row":26,"column":0},"action":"remove","lines":["",""],"id":44}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":46},"action":"remove","lines":["class ApplicationRawTestDataFactory implements"],"id":45},{"start":{"row":12,"column":0},"end":{"row":12,"column":1},"action":"insert","lines":["i"]},{"start":{"row":12,"column":1},"end":{"row":12,"column":2},"action":"insert","lines":["n"]},{"start":{"row":12,"column":2},"end":{"row":12,"column":3},"action":"insert","lines":["t"]},{"start":{"row":12,"column":3},"end":{"row":12,"column":4},"action":"insert","lines":["e"]},{"start":{"row":12,"column":4},"end":{"row":12,"column":5},"action":"insert","lines":["r"]},{"start":{"row":12,"column":5},"end":{"row":12,"column":6},"action":"insert","lines":["f"]},{"start":{"row":12,"column":6},"end":{"row":12,"column":7},"action":"insert","lines":["a"]},{"start":{"row":12,"column":7},"end":{"row":12,"column":8},"action":"insert","lines":["c"]},{"start":{"row":12,"column":8},"end":{"row":12,"column":9},"action":"insert","lines":["e"]}],[{"start":{"row":15,"column":3},"end":{"row":70,"column":0},"action":"remove","lines":[" {","        $this->application_factory = $application_factory;","        $this->history_test_data_factory = $history_test_data_factory;","        ","        $this->data_transfer_objects = array();","","        $this->data_transfer_objects[ 0 ]->history = $this->history_test_data_factory->create( 0 );","        $this->data_transfer_objects[ 0 ]->guid =\"4f92ed09-80f7-498f-842f-9a40b11f3791\";","        $this->data_transfer_objects[ 0 ]->name = \"JasonWKeith.com\";","","        $dto = $this->application_factory->createDTO();","        $this->data_transfer_objects[ 1 ]->history = $this->history_test_data_factory->create( 1 );        ","        $this->data_transfer_objects[ 1 ]->guid =\"958077c8-1406-4999-b1c3-d4f11ddf615b\";        ","        $this->data_transfer_objects[ 1 ]->name = \"Otto\";","","        $dto = $this->application_factory->createDTO();","        $this->data_transfer_objects[ 2 ]->history = $this->history_test_data_factory->create( 2 );        ","        $this->data_transfer_objects[ 2 ]->guid =\"f33c74c0-4454-4e79-93a2-5ec104210eae\";        ","        $this->data_transfer_objects[ 2 ]->name = \"HAL\";","","        $dto = $this->application_factory->createDTO();","        $this->data_transfer_objects[ 3 ]->history = $this->history_test_data_factory->create( 3 );        ","        $this->data_transfer_objects[ 3 ]->guid  =\"dcb68857-4786-4084-a82b-b15ef7798a4c\";        ","        $this->data_transfer_objects[ 3 ]->name = \"Google.com\";","","        $dto = $this->application_factory->createDTO();","        $this->data_transfer_objects[ 4 ]->history = $this->history_test_data_factory->create( 4 );        ","        $this->data_transfer_objects[ 4 ]->guid =\"0b05aab9-6e76-4687-9871-6cc381beb9b7\";            ","        $this->data_transfer_objects[ 4 ]->name = \"Healthmate\";","","        $dto = $this->application_factory->createDTO();","        $this->data_transfer_objects[ 5 ]->history = $this->history_test_data_factory->create( 5 );        ","        $this->data_transfer_objects[ 5 ]->guid =\"bad9e498-c7c2-444d-aa78-ecbead3bac2e\";        ","        $this->data_transfer_objects[ 5 ]->name = \"Runkeeper\";","","        $dto = $this->application_factory->createDTO();","        $this->data_transfer_objects[ 6 ]->history = $this->history_test_data_factory->create( 6 );        ","        $this->data_transfer_objects[ 6 ]->guid =\"4a2e0108-382f-408f-a360-62d2c2dc2dae\";        ","        $this->data_transfer_objects[ 6 ]->name = \"Facebook\";","","        $dto = $this->application_factory->createDTO();","        $this->data_transfer_objects[ 7 ]->history = $this->history_test_data_factory->create( 7 );        ","        $this->data_transfer_objects[ 7 ]->guid =\"246eb42f-997b-4fd2-ac87-c6d53e3943c2\";        ","        $this->data_transfer_objects[ 7 ]->name = \"Twitter\";","","        $dto = $this->application_factory->createDTO();","        $this->data_transfer_objects[ 8 ]->history = $this->history_test_data_factory->create( 8 );        ","        $this->data_transfer_objects[ 8 ]->guid =\"d32c0d2f-d514-41a3-ab67-2f9f19a64490\";               ","        $this->data_transfer_objects[ 8 ]->name = \"Yahoo Fantasy Sports\";","","        $dto = $this->application_factory->createDTO();","        $this->data_transfer_objects[ 9 ]->history = $this->history_test_data_factory->create( 9 );        ","        $this->data_transfer_objects[ 9 ]->guid =\"e8aaf393-4367-4e6c-9734-820853ba7ebe\";        ","        $this->data_transfer_objects[ 9 ]->name = \"StaleyNation\";        ","    }",""],"id":46},{"start":{"row":15,"column":3},"end":{"row":16,"column":0},"action":"remove","lines":["",""]},{"start":{"row":15,"column":3},"end":{"row":15,"column":4},"action":"remove","lines":[" "]},{"start":{"row":15,"column":3},"end":{"row":15,"column":4},"action":"remove","lines":[" "]},{"start":{"row":15,"column":3},"end":{"row":15,"column":4},"action":"remove","lines":[" "]}],[{"start":{"row":16,"column":0},"end":{"row":20,"column":8},"action":"remove","lines":["    {","        return $this->data_transfer_objects[ $number ];","    }","    ","    publ"],"id":47}],[{"start":{"row":16,"column":0},"end":{"row":16,"column":1},"action":"remove","lines":["i"],"id":48},{"start":{"row":16,"column":0},"end":{"row":16,"column":1},"action":"remove","lines":["c"]}],[{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "],"id":49}],[{"start":{"row":16,"column":4},"end":{"row":16,"column":5},"action":"insert","lines":["p"],"id":50},{"start":{"row":16,"column":5},"end":{"row":16,"column":6},"action":"insert","lines":["u"]},{"start":{"row":16,"column":6},"end":{"row":16,"column":7},"action":"insert","lines":["b"]},{"start":{"row":16,"column":7},"end":{"row":16,"column":8},"action":"insert","lines":["l"]},{"start":{"row":16,"column":8},"end":{"row":16,"column":9},"action":"insert","lines":["i"]},{"start":{"row":16,"column":9},"end":{"row":16,"column":10},"action":"insert","lines":["c"]}],[{"start":{"row":16,"column":66},"end":{"row":19,"column":11},"action":"remove","lines":["","    {","        return $this->application_factory->createDTO();","    }      "],"id":51},{"start":{"row":16,"column":66},"end":{"row":16,"column":67},"action":"insert","lines":[";"]}],[{"start":{"row":15,"column":72},"end":{"row":15,"column":73},"action":"insert","lines":[";"],"id":52}],[{"start":{"row":14,"column":143},"end":{"row":14,"column":144},"action":"insert","lines":[";"],"id":53}],[{"start":{"row":9,"column":0},"end":{"row":9,"column":81},"action":"remove","lines":["use JasonWKeith\\Domain\\Boundary\\DataObject\\Person\\PersonTestDataFactoryInterface;"],"id":54}],[{"start":{"row":4,"column":0},"end":{"row":8,"column":94},"action":"remove","lines":["use JasonWKeith\\Domain\\Boundary\\DataObject\\Application\\ApplicationInterface;","use JasonWKeith\\Domain\\Boundary\\DataObject\\Application\\ApplicationFactoryInterface;","use JasonWKeith\\Domain\\Boundary\\DataObject\\Application\\ApplicationCollectionInterface;","use JasonWKeith\\Domain\\Boundary\\DataObject\\Application\\ApplicationTestDataFactoryInterface;","use JasonWKeith\\Domain\\Boundary\\DataObject\\Application\\RawApplicationTestDataFactoryInterface;"],"id":55},{"start":{"row":4,"column":0},"end":{"row":5,"column":0},"action":"remove","lines":["",""]},{"start":{"row":4,"column":0},"end":{"row":5,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":0,"column":0},"end":{"row":2,"column":52},"action":"remove","lines":["<?php","declare( strict_types = 1 );","namespace JasonWKeith\\Domain\\DataObject\\Application;"],"id":56},{"start":{"row":0,"column":0},"end":{"row":2,"column":61},"action":"insert","lines":["<?php","declare( strict_types = 1 );","namespace JasonWKeith\\Domain\\Boundary\\DataObject\\Application;"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":2,"column":61},"end":{"row":2,"column":61},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1620073421546,"hash":"bba474bb2f509263be7a49d0e7b5ffec7620e746"}