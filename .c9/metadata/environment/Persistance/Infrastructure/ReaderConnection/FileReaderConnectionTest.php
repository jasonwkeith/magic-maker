{"filter":false,"title":"FileReaderConnectionTest.php","tooltip":"/Persistance/Infrastructure/ReaderConnection/FileReaderConnectionTest.php","undoManager":{"mark":81,"position":81,"stack":[[{"start":{"row":24,"column":4},"end":{"row":25,"column":0},"action":"insert","lines":["",""],"id":166},{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":25,"column":0},"end":{"row":31,"column":5},"action":"insert","lines":["    public function testInvalidFilePathThrowsException():void","    {","        $invalid_path = \"/jasonwkeith/Storage/Invalid/Path\";","        $connection_parameters = $this->connection_parameters_factory->createFileConnection( $invalid_path, $this->file_handle, $this->file_extension );","        $this->expectException( ExceptionInterface::class );","        $this->system_under_test_factory->create( $connection_parameters );","    }"],"id":167}],[{"start":{"row":25,"column":35},"end":{"row":25,"column":39},"action":"remove","lines":["Path"],"id":168},{"start":{"row":25,"column":35},"end":{"row":25,"column":36},"action":"insert","lines":["H"]},{"start":{"row":25,"column":36},"end":{"row":25,"column":37},"action":"insert","lines":["a"]},{"start":{"row":25,"column":37},"end":{"row":25,"column":38},"action":"insert","lines":["n"]},{"start":{"row":25,"column":38},"end":{"row":25,"column":39},"action":"insert","lines":["d"]},{"start":{"row":25,"column":39},"end":{"row":25,"column":40},"action":"insert","lines":["l"]},{"start":{"row":25,"column":40},"end":{"row":25,"column":41},"action":"insert","lines":["e"]}],[{"start":{"row":27,"column":17},"end":{"row":27,"column":21},"action":"remove","lines":["path"],"id":169},{"start":{"row":27,"column":17},"end":{"row":27,"column":18},"action":"insert","lines":["h"]},{"start":{"row":27,"column":18},"end":{"row":27,"column":19},"action":"insert","lines":["a"]},{"start":{"row":27,"column":19},"end":{"row":27,"column":20},"action":"insert","lines":["n"]},{"start":{"row":27,"column":20},"end":{"row":27,"column":21},"action":"insert","lines":["d"]},{"start":{"row":27,"column":21},"end":{"row":27,"column":22},"action":"insert","lines":["l"]},{"start":{"row":27,"column":22},"end":{"row":27,"column":23},"action":"insert","lines":["e"]}],[{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["/"],"id":170},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["j"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["a"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["s"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["o"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["n"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["w"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["k"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["e"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["i"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["t"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["h"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["/"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["S"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["t"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["o"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["r"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["a"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["g"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["e"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["/"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["I"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["n"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["v"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["a"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["l"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["i"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["d"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["/"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["P"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["a"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["t"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["h"]}],[{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"insert","lines":["g"],"id":171},{"start":{"row":27,"column":28},"end":{"row":27,"column":29},"action":"insert","lines":["a"]},{"start":{"row":27,"column":29},"end":{"row":27,"column":30},"action":"insert","lines":["r"]},{"start":{"row":27,"column":30},"end":{"row":27,"column":31},"action":"insert","lines":["a"]},{"start":{"row":27,"column":31},"end":{"row":27,"column":32},"action":"insert","lines":["b"]}],[{"start":{"row":27,"column":31},"end":{"row":27,"column":32},"action":"remove","lines":["b"],"id":172},{"start":{"row":27,"column":30},"end":{"row":27,"column":31},"action":"remove","lines":["a"]}],[{"start":{"row":27,"column":30},"end":{"row":27,"column":31},"action":"insert","lines":["b"],"id":173},{"start":{"row":27,"column":31},"end":{"row":27,"column":32},"action":"insert","lines":["a"]},{"start":{"row":27,"column":32},"end":{"row":27,"column":33},"action":"insert","lines":["g"]},{"start":{"row":27,"column":33},"end":{"row":27,"column":34},"action":"insert","lines":["e"]},{"start":{"row":27,"column":34},"end":{"row":27,"column":35},"action":"insert","lines":["_"]},{"start":{"row":27,"column":35},"end":{"row":27,"column":36},"action":"insert","lines":["h"]},{"start":{"row":27,"column":36},"end":{"row":27,"column":37},"action":"insert","lines":["a"]},{"start":{"row":27,"column":37},"end":{"row":27,"column":38},"action":"insert","lines":["n"]},{"start":{"row":27,"column":38},"end":{"row":27,"column":39},"action":"insert","lines":["d"]},{"start":{"row":27,"column":39},"end":{"row":27,"column":40},"action":"insert","lines":["l"]}],[{"start":{"row":27,"column":40},"end":{"row":27,"column":41},"action":"insert","lines":["e"],"id":174},{"start":{"row":27,"column":41},"end":{"row":27,"column":42},"action":"insert","lines":["_"]},{"start":{"row":27,"column":42},"end":{"row":27,"column":43},"action":"insert","lines":["v"]},{"start":{"row":27,"column":43},"end":{"row":27,"column":44},"action":"insert","lines":["a"]},{"start":{"row":27,"column":44},"end":{"row":27,"column":45},"action":"insert","lines":["l"]},{"start":{"row":27,"column":45},"end":{"row":27,"column":46},"action":"insert","lines":["u"]},{"start":{"row":27,"column":46},"end":{"row":27,"column":47},"action":"insert","lines":["e"]}],[{"start":{"row":27,"column":47},"end":{"row":27,"column":48},"action":"insert","lines":["_"],"id":175},{"start":{"row":27,"column":48},"end":{"row":27,"column":49},"action":"insert","lines":["d"]},{"start":{"row":27,"column":49},"end":{"row":27,"column":50},"action":"insert","lines":["o"]},{"start":{"row":27,"column":50},"end":{"row":27,"column":51},"action":"insert","lines":["e"]},{"start":{"row":27,"column":51},"end":{"row":27,"column":52},"action":"insert","lines":["s"]},{"start":{"row":27,"column":52},"end":{"row":27,"column":53},"action":"insert","lines":["_"]},{"start":{"row":27,"column":53},"end":{"row":27,"column":54},"action":"insert","lines":["n"]},{"start":{"row":27,"column":54},"end":{"row":27,"column":55},"action":"insert","lines":["o"]},{"start":{"row":27,"column":55},"end":{"row":27,"column":56},"action":"insert","lines":["t"]}],[{"start":{"row":27,"column":56},"end":{"row":27,"column":57},"action":"insert","lines":[" "],"id":176}],[{"start":{"row":27,"column":56},"end":{"row":27,"column":57},"action":"remove","lines":[" "],"id":177}],[{"start":{"row":27,"column":56},"end":{"row":27,"column":57},"action":"insert","lines":["_"],"id":178},{"start":{"row":27,"column":57},"end":{"row":27,"column":58},"action":"insert","lines":["e"]},{"start":{"row":27,"column":58},"end":{"row":27,"column":59},"action":"insert","lines":["x"]},{"start":{"row":27,"column":59},"end":{"row":27,"column":60},"action":"insert","lines":["i"]},{"start":{"row":27,"column":60},"end":{"row":27,"column":61},"action":"insert","lines":["s"]},{"start":{"row":27,"column":61},"end":{"row":27,"column":62},"action":"insert","lines":["t"]}],[{"start":{"row":28,"column":94},"end":{"row":28,"column":95},"action":"insert","lines":["t"],"id":179},{"start":{"row":28,"column":95},"end":{"row":28,"column":96},"action":"insert","lines":["h"]},{"start":{"row":28,"column":96},"end":{"row":28,"column":97},"action":"insert","lines":["i"]},{"start":{"row":28,"column":97},"end":{"row":28,"column":98},"action":"insert","lines":["s"]},{"start":{"row":28,"column":98},"end":{"row":28,"column":99},"action":"insert","lines":["-"]},{"start":{"row":28,"column":99},"end":{"row":28,"column":100},"action":"insert","lines":[">"]}],[{"start":{"row":28,"column":115},"end":{"row":28,"column":121},"action":"remove","lines":["this->"],"id":180}],[{"start":{"row":28,"column":100},"end":{"row":28,"column":101},"action":"remove","lines":["i"],"id":181},{"start":{"row":28,"column":100},"end":{"row":28,"column":101},"action":"remove","lines":["n"]},{"start":{"row":28,"column":100},"end":{"row":28,"column":101},"action":"remove","lines":["v"]},{"start":{"row":28,"column":100},"end":{"row":28,"column":101},"action":"remove","lines":["a"]},{"start":{"row":28,"column":100},"end":{"row":28,"column":101},"action":"remove","lines":["l"]}],[{"start":{"row":28,"column":100},"end":{"row":28,"column":101},"action":"remove","lines":["i"],"id":182},{"start":{"row":28,"column":100},"end":{"row":28,"column":101},"action":"remove","lines":["d"]},{"start":{"row":28,"column":100},"end":{"row":28,"column":101},"action":"remove","lines":["_"]}],[{"start":{"row":28,"column":107},"end":{"row":28,"column":111},"action":"remove","lines":["file"],"id":183},{"start":{"row":28,"column":107},"end":{"row":28,"column":108},"action":"insert","lines":["i"]},{"start":{"row":28,"column":108},"end":{"row":28,"column":109},"action":"insert","lines":["n"]},{"start":{"row":28,"column":109},"end":{"row":28,"column":110},"action":"insert","lines":["v"]},{"start":{"row":28,"column":110},"end":{"row":28,"column":111},"action":"insert","lines":["a"]},{"start":{"row":28,"column":111},"end":{"row":28,"column":112},"action":"insert","lines":["l"]},{"start":{"row":28,"column":112},"end":{"row":28,"column":113},"action":"insert","lines":["i"]},{"start":{"row":28,"column":113},"end":{"row":28,"column":114},"action":"insert","lines":["d"]}],[{"start":{"row":31,"column":9},"end":{"row":32,"column":0},"action":"insert","lines":["",""],"id":184},{"start":{"row":32,"column":0},"end":{"row":32,"column":4},"action":"insert","lines":["    "]},{"start":{"row":32,"column":4},"end":{"row":33,"column":0},"action":"insert","lines":["",""]},{"start":{"row":33,"column":0},"end":{"row":33,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":33,"column":0},"end":{"row":39,"column":8},"action":"insert","lines":["    public function testInvalidFileHandleThrowsException():void","    {","        $invalid_handle = \"garbage_handle_value_does_not_exist\";","        $connection_parameters = $this->connection_parameters_factory->createFileConnection( $this->path, $invalid_handle, $this->file_extension );","        $this->expectException( ExceptionInterface::class );","        $this->system_under_test_factory->create( $connection_parameters );","    }   "],"id":185}],[{"start":{"row":33,"column":31},"end":{"row":33,"column":35},"action":"remove","lines":["File"],"id":186},{"start":{"row":33,"column":31},"end":{"row":33,"column":32},"action":"insert","lines":["E"]},{"start":{"row":33,"column":32},"end":{"row":33,"column":33},"action":"insert","lines":["x"]},{"start":{"row":33,"column":33},"end":{"row":33,"column":34},"action":"insert","lines":["t"]},{"start":{"row":33,"column":34},"end":{"row":33,"column":35},"action":"insert","lines":["e"]},{"start":{"row":33,"column":35},"end":{"row":33,"column":36},"action":"insert","lines":["n"]},{"start":{"row":33,"column":36},"end":{"row":33,"column":37},"action":"insert","lines":["s"]},{"start":{"row":33,"column":37},"end":{"row":33,"column":38},"action":"insert","lines":["i"]},{"start":{"row":33,"column":38},"end":{"row":33,"column":39},"action":"insert","lines":["o"]},{"start":{"row":33,"column":39},"end":{"row":33,"column":40},"action":"insert","lines":["n"]}],[{"start":{"row":33,"column":40},"end":{"row":33,"column":41},"action":"remove","lines":["H"],"id":187},{"start":{"row":33,"column":40},"end":{"row":33,"column":41},"action":"remove","lines":["a"]},{"start":{"row":33,"column":40},"end":{"row":33,"column":41},"action":"remove","lines":["n"]},{"start":{"row":33,"column":40},"end":{"row":33,"column":41},"action":"remove","lines":["d"]},{"start":{"row":33,"column":40},"end":{"row":33,"column":41},"action":"remove","lines":["l"]},{"start":{"row":33,"column":40},"end":{"row":33,"column":41},"action":"remove","lines":["e"]}],[{"start":{"row":35,"column":17},"end":{"row":35,"column":23},"action":"remove","lines":["handle"],"id":188},{"start":{"row":35,"column":17},"end":{"row":35,"column":18},"action":"insert","lines":["e"]},{"start":{"row":35,"column":18},"end":{"row":35,"column":19},"action":"insert","lines":["x"]},{"start":{"row":35,"column":19},"end":{"row":35,"column":20},"action":"insert","lines":["t"]},{"start":{"row":35,"column":20},"end":{"row":35,"column":21},"action":"insert","lines":["e"]}],[{"start":{"row":35,"column":21},"end":{"row":35,"column":22},"action":"insert","lines":["n"],"id":189},{"start":{"row":35,"column":22},"end":{"row":35,"column":23},"action":"insert","lines":["s"]},{"start":{"row":35,"column":23},"end":{"row":35,"column":24},"action":"insert","lines":["i"]},{"start":{"row":35,"column":24},"end":{"row":35,"column":25},"action":"insert","lines":["o"]},{"start":{"row":35,"column":25},"end":{"row":35,"column":26},"action":"insert","lines":["n"]}],[{"start":{"row":35,"column":38},"end":{"row":35,"column":44},"action":"remove","lines":["handle"],"id":190},{"start":{"row":35,"column":38},"end":{"row":35,"column":39},"action":"insert","lines":["e"]},{"start":{"row":35,"column":39},"end":{"row":35,"column":40},"action":"insert","lines":["x"]},{"start":{"row":35,"column":40},"end":{"row":35,"column":41},"action":"insert","lines":["t"]},{"start":{"row":35,"column":41},"end":{"row":35,"column":42},"action":"insert","lines":["e"]},{"start":{"row":35,"column":42},"end":{"row":35,"column":43},"action":"insert","lines":["n"]},{"start":{"row":35,"column":43},"end":{"row":35,"column":44},"action":"insert","lines":["s"]},{"start":{"row":35,"column":44},"end":{"row":35,"column":45},"action":"insert","lines":["i"]},{"start":{"row":35,"column":45},"end":{"row":35,"column":46},"action":"insert","lines":["o"]},{"start":{"row":35,"column":46},"end":{"row":35,"column":47},"action":"insert","lines":["n"]}],[{"start":{"row":36,"column":124},"end":{"row":36,"column":134},"action":"remove","lines":["this->file"],"id":191},{"start":{"row":36,"column":124},"end":{"row":36,"column":125},"action":"insert","lines":["i"]},{"start":{"row":36,"column":125},"end":{"row":36,"column":126},"action":"insert","lines":["n"]},{"start":{"row":36,"column":126},"end":{"row":36,"column":127},"action":"insert","lines":["v"]}],[{"start":{"row":36,"column":123},"end":{"row":36,"column":137},"action":"remove","lines":["$inv_extension"],"id":192},{"start":{"row":36,"column":123},"end":{"row":36,"column":141},"action":"insert","lines":["$invalid_extension"]}],[{"start":{"row":36,"column":106},"end":{"row":36,"column":121},"action":"remove","lines":["$invalid_handle"],"id":193},{"start":{"row":36,"column":106},"end":{"row":36,"column":124},"action":"insert","lines":["$this->file_handle"]}],[{"start":{"row":46,"column":45},"end":{"row":46,"column":66},"action":"remove","lines":["InternalMasterFactory"],"id":194},{"start":{"row":46,"column":45},"end":{"row":46,"column":46},"action":"insert","lines":["I"]},{"start":{"row":46,"column":46},"end":{"row":46,"column":47},"action":"insert","lines":["n"]},{"start":{"row":46,"column":47},"end":{"row":46,"column":48},"action":"insert","lines":["f"]},{"start":{"row":46,"column":48},"end":{"row":46,"column":49},"action":"insert","lines":["r"]}],[{"start":{"row":46,"column":45},"end":{"row":46,"column":49},"action":"remove","lines":["Infr"],"id":195},{"start":{"row":46,"column":45},"end":{"row":46,"column":62},"action":"insert","lines":["InfrastructureAPI"]}],[{"start":{"row":46,"column":15},"end":{"row":46,"column":38},"action":"remove","lines":["internal_master_factory"],"id":196},{"start":{"row":46,"column":15},"end":{"row":46,"column":16},"action":"insert","lines":["i"]},{"start":{"row":46,"column":16},"end":{"row":46,"column":17},"action":"insert","lines":["n"]},{"start":{"row":46,"column":17},"end":{"row":46,"column":18},"action":"insert","lines":["f"]},{"start":{"row":46,"column":18},"end":{"row":46,"column":19},"action":"insert","lines":["r"]}],[{"start":{"row":46,"column":15},"end":{"row":46,"column":19},"action":"remove","lines":["infr"],"id":197},{"start":{"row":46,"column":15},"end":{"row":46,"column":33},"action":"insert","lines":["infrastructure_api"]}],[{"start":{"row":47,"column":54},"end":{"row":47,"column":77},"action":"remove","lines":["internal_master_factory"],"id":198},{"start":{"row":47,"column":54},"end":{"row":47,"column":55},"action":"insert","lines":["i"]},{"start":{"row":47,"column":55},"end":{"row":47,"column":56},"action":"insert","lines":["n"]},{"start":{"row":47,"column":56},"end":{"row":47,"column":57},"action":"insert","lines":["f"]}],[{"start":{"row":47,"column":54},"end":{"row":47,"column":57},"action":"remove","lines":["inf"],"id":199},{"start":{"row":47,"column":54},"end":{"row":47,"column":72},"action":"insert","lines":["infrastructure_api"]}],[{"start":{"row":48,"column":50},"end":{"row":48,"column":73},"action":"remove","lines":["internal_master_factory"],"id":200},{"start":{"row":48,"column":50},"end":{"row":48,"column":51},"action":"insert","lines":["i"]},{"start":{"row":48,"column":51},"end":{"row":48,"column":52},"action":"insert","lines":["n"]},{"start":{"row":48,"column":52},"end":{"row":48,"column":53},"action":"insert","lines":["f"]}],[{"start":{"row":48,"column":50},"end":{"row":48,"column":53},"action":"remove","lines":["inf"],"id":201},{"start":{"row":48,"column":50},"end":{"row":48,"column":68},"action":"insert","lines":["infrastructure_api"]}],[{"start":{"row":49,"column":29},"end":{"row":49,"column":52},"action":"remove","lines":["internal_master_factory"],"id":202},{"start":{"row":49,"column":29},"end":{"row":49,"column":30},"action":"insert","lines":["i"]},{"start":{"row":49,"column":30},"end":{"row":49,"column":31},"action":"insert","lines":["n"]},{"start":{"row":49,"column":31},"end":{"row":49,"column":32},"action":"insert","lines":["f"]}],[{"start":{"row":49,"column":29},"end":{"row":49,"column":32},"action":"remove","lines":["inf"],"id":203},{"start":{"row":49,"column":29},"end":{"row":49,"column":47},"action":"insert","lines":["infrastructure_api"]}],[{"start":{"row":6,"column":43},"end":{"row":6,"column":57},"action":"remove","lines":["InternalMaster"],"id":204},{"start":{"row":6,"column":43},"end":{"row":6,"column":44},"action":"insert","lines":["A"]},{"start":{"row":6,"column":44},"end":{"row":6,"column":45},"action":"insert","lines":["P"]},{"start":{"row":6,"column":45},"end":{"row":6,"column":46},"action":"insert","lines":["I"]}],[{"start":{"row":6,"column":47},"end":{"row":6,"column":68},"action":"remove","lines":["InternalMasterFactory"],"id":205},{"start":{"row":6,"column":47},"end":{"row":6,"column":48},"action":"insert","lines":["A"]},{"start":{"row":6,"column":48},"end":{"row":6,"column":49},"action":"insert","lines":["P"]},{"start":{"row":6,"column":49},"end":{"row":6,"column":50},"action":"insert","lines":["I"]},{"start":{"row":6,"column":50},"end":{"row":6,"column":51},"action":"insert","lines":["D"]}],[{"start":{"row":6,"column":50},"end":{"row":6,"column":51},"action":"remove","lines":["D"],"id":206}],[{"start":{"row":6,"column":50},"end":{"row":6,"column":51},"action":"insert","lines":[" "],"id":207},{"start":{"row":6,"column":51},"end":{"row":6,"column":52},"action":"insert","lines":["a"]},{"start":{"row":6,"column":52},"end":{"row":6,"column":53},"action":"insert","lines":["s"]}],[{"start":{"row":6,"column":53},"end":{"row":6,"column":54},"action":"insert","lines":[" "],"id":208},{"start":{"row":6,"column":54},"end":{"row":6,"column":55},"action":"insert","lines":["I"]},{"start":{"row":6,"column":55},"end":{"row":6,"column":56},"action":"insert","lines":["n"]},{"start":{"row":6,"column":56},"end":{"row":6,"column":57},"action":"insert","lines":["f"]}],[{"start":{"row":6,"column":54},"end":{"row":6,"column":57},"action":"remove","lines":["Inf"],"id":209},{"start":{"row":6,"column":54},"end":{"row":6,"column":71},"action":"insert","lines":["InfrastructureAPI"]}],[{"start":{"row":44,"column":43},"end":{"row":45,"column":0},"action":"insert","lines":["",""],"id":210},{"start":{"row":45,"column":0},"end":{"row":45,"column":8},"action":"insert","lines":["        "]},{"start":{"row":45,"column":8},"end":{"row":46,"column":0},"action":"insert","lines":["",""]},{"start":{"row":46,"column":0},"end":{"row":46,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":46,"column":0},"end":{"row":47,"column":115},"action":"insert","lines":["        $this->exception_factory = new ExceptionFactory;","        $this->infrastructure_api = new InfrastructureAPI( TestConstants::STORAGE_PATH, $this->exception_factory );"],"id":211}],[{"start":{"row":48,"column":0},"end":{"row":49,"column":58},"action":"remove","lines":["","        $this->infrastructure_api = new InfrastructureAPI;"],"id":212}],[{"start":{"row":4,"column":31},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":213}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":65},"action":"insert","lines":["use JasonWKeith\\Domain\\Infrastructure\\Exception\\ExceptionFactory;"],"id":214}],[{"start":{"row":7,"column":72},"end":{"row":8,"column":0},"action":"insert","lines":["",""],"id":215},{"start":{"row":8,"column":0},"end":{"row":8,"column":1},"action":"insert","lines":["u"]},{"start":{"row":8,"column":1},"end":{"row":8,"column":2},"action":"insert","lines":["s"]},{"start":{"row":8,"column":2},"end":{"row":8,"column":3},"action":"insert","lines":["e"]}],[{"start":{"row":8,"column":3},"end":{"row":8,"column":4},"action":"insert","lines":[" "],"id":216},{"start":{"row":8,"column":4},"end":{"row":8,"column":5},"action":"insert","lines":["J"]},{"start":{"row":8,"column":5},"end":{"row":8,"column":6},"action":"insert","lines":["a"]},{"start":{"row":8,"column":6},"end":{"row":8,"column":7},"action":"insert","lines":["s"]}],[{"start":{"row":8,"column":4},"end":{"row":8,"column":7},"action":"remove","lines":["Jas"],"id":217},{"start":{"row":8,"column":4},"end":{"row":8,"column":15},"action":"insert","lines":["JasonWKeith"]}],[{"start":{"row":8,"column":15},"end":{"row":8,"column":16},"action":"insert","lines":["\\"],"id":218},{"start":{"row":8,"column":16},"end":{"row":8,"column":17},"action":"insert","lines":["P"]}],[{"start":{"row":8,"column":16},"end":{"row":8,"column":17},"action":"remove","lines":["P"],"id":219},{"start":{"row":8,"column":16},"end":{"row":8,"column":27},"action":"insert","lines":["Persistance"]}],[{"start":{"row":8,"column":27},"end":{"row":8,"column":28},"action":"insert","lines":["\\"],"id":220},{"start":{"row":8,"column":28},"end":{"row":8,"column":29},"action":"insert","lines":["I"]},{"start":{"row":8,"column":29},"end":{"row":8,"column":30},"action":"insert","lines":["n"]}],[{"start":{"row":8,"column":28},"end":{"row":8,"column":30},"action":"remove","lines":["In"],"id":221},{"start":{"row":8,"column":28},"end":{"row":8,"column":42},"action":"insert","lines":["Infrastructure"]}],[{"start":{"row":8,"column":42},"end":{"row":8,"column":43},"action":"insert","lines":["\\"],"id":222},{"start":{"row":8,"column":43},"end":{"row":8,"column":44},"action":"insert","lines":["T"]},{"start":{"row":8,"column":44},"end":{"row":8,"column":45},"action":"insert","lines":["e"]}],[{"start":{"row":8,"column":43},"end":{"row":8,"column":45},"action":"remove","lines":["Te"],"id":223},{"start":{"row":8,"column":43},"end":{"row":8,"column":56},"action":"insert","lines":["TestConstants"]}],[{"start":{"row":8,"column":56},"end":{"row":8,"column":57},"action":"insert","lines":[";"],"id":224}],[{"start":{"row":49,"column":0},"end":{"row":49,"column":119},"action":"remove","lines":["        $this->infrastructure_api = new InfrastructureAPI( TestConstants::STORAGE_PATH, $this->exception_factory );    "],"id":225},{"start":{"row":49,"column":0},"end":{"row":50,"column":135},"action":"insert","lines":["        $this->infrastructure_api_factory = new InfrastructureAPIFactory;","        $this->infrastructure_api = $this->infrastructure_api_factory->create( TestConstants::STORAGE_PATH, $this->exception_factory );"]}],[{"start":{"row":7,"column":50},"end":{"row":7,"column":51},"action":"insert","lines":["F"],"id":226},{"start":{"row":7,"column":51},"end":{"row":7,"column":52},"action":"insert","lines":["a"]},{"start":{"row":7,"column":52},"end":{"row":7,"column":53},"action":"insert","lines":["c"]},{"start":{"row":7,"column":53},"end":{"row":7,"column":54},"action":"insert","lines":["t"]},{"start":{"row":7,"column":54},"end":{"row":7,"column":55},"action":"insert","lines":["o"]},{"start":{"row":7,"column":55},"end":{"row":7,"column":56},"action":"insert","lines":["r"]},{"start":{"row":7,"column":56},"end":{"row":7,"column":57},"action":"insert","lines":["y"]}],[{"start":{"row":7,"column":78},"end":{"row":7,"column":79},"action":"insert","lines":["F"],"id":227},{"start":{"row":7,"column":79},"end":{"row":7,"column":80},"action":"insert","lines":["a"]},{"start":{"row":7,"column":80},"end":{"row":7,"column":81},"action":"insert","lines":["c"]},{"start":{"row":7,"column":81},"end":{"row":7,"column":82},"action":"insert","lines":["t"]},{"start":{"row":7,"column":82},"end":{"row":7,"column":83},"action":"insert","lines":["o"]},{"start":{"row":7,"column":83},"end":{"row":7,"column":84},"action":"insert","lines":["r"]},{"start":{"row":7,"column":84},"end":{"row":7,"column":85},"action":"insert","lines":["y"]}],[{"start":{"row":58,"column":39},"end":{"row":58,"column":75},"action":"remove","lines":["$this->connection_parameters_factory"],"id":229},{"start":{"row":58,"column":39},"end":{"row":58,"column":64},"action":"insert","lines":["$this->infrastructure_api"]}],[{"start":{"row":58,"column":86},"end":{"row":58,"column":87},"action":"insert","lines":["P"],"id":230},{"start":{"row":58,"column":87},"end":{"row":58,"column":88},"action":"insert","lines":["a"]},{"start":{"row":58,"column":88},"end":{"row":58,"column":89},"action":"insert","lines":["r"]}],[{"start":{"row":58,"column":66},"end":{"row":58,"column":89},"action":"remove","lines":["createFileConnectionPar"],"id":231},{"start":{"row":58,"column":66},"end":{"row":58,"column":96},"action":"insert","lines":["createFileConnectionParameters"]}],[{"start":{"row":52,"column":0},"end":{"row":52,"column":110},"action":"remove","lines":["        $this->connection_parameters_factory = $this->infrastructure_api->createConnectionParametersFactory();"],"id":232},{"start":{"row":52,"column":0},"end":{"row":53,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":52,"column":0},"end":{"row":52,"column":102},"action":"remove","lines":["        $this->system_under_test_factory = $this->infrastructure_api->createReaderConnectionFactory();"],"id":233},{"start":{"row":52,"column":0},"end":{"row":53,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":58,"column":42},"end":{"row":58,"column":67},"action":"remove","lines":["system_under_test_factory"],"id":234},{"start":{"row":58,"column":42},"end":{"row":58,"column":60},"action":"insert","lines":["infrastructure_api"]}],[{"start":{"row":58,"column":68},"end":{"row":58,"column":69},"action":"insert","lines":["R"],"id":235},{"start":{"row":58,"column":69},"end":{"row":58,"column":70},"action":"insert","lines":["e"]},{"start":{"row":58,"column":70},"end":{"row":58,"column":71},"action":"insert","lines":["a"]}],[{"start":{"row":58,"column":62},"end":{"row":58,"column":71},"action":"remove","lines":["createRea"],"id":236},{"start":{"row":58,"column":62},"end":{"row":58,"column":84},"action":"insert","lines":["createReaderConnection"]}],[{"start":{"row":38,"column":33},"end":{"row":38,"column":91},"action":"remove","lines":["$this->connection_parameters_factory->createFileConnection"],"id":238},{"start":{"row":38,"column":33},"end":{"row":38,"column":90},"action":"insert","lines":["$this->infrastructure_api->createFileConnectionParameters"]}],[{"start":{"row":30,"column":33},"end":{"row":30,"column":91},"action":"remove","lines":["$this->connection_parameters_factory->createFileConnection"],"id":239},{"start":{"row":30,"column":33},"end":{"row":30,"column":90},"action":"insert","lines":["$this->infrastructure_api->createFileConnectionParameters"]}],[{"start":{"row":22,"column":33},"end":{"row":22,"column":91},"action":"remove","lines":["$this->connection_parameters_factory->createFileConnection"],"id":240},{"start":{"row":22,"column":33},"end":{"row":22,"column":90},"action":"insert","lines":["$this->infrastructure_api->createFileConnectionParameters"]}],[{"start":{"row":32,"column":7},"end":{"row":32,"column":48},"action":"remove","lines":[" $this->system_under_test_factory->create"],"id":244},{"start":{"row":32,"column":7},"end":{"row":32,"column":56},"action":"insert","lines":["$this->infrastructure_api->createReaderConnection"]}],[{"start":{"row":32,"column":7},"end":{"row":32,"column":8},"action":"insert","lines":[" "],"id":245}],[{"start":{"row":40,"column":8},"end":{"row":40,"column":48},"action":"remove","lines":["$this->system_under_test_factory->create"],"id":246},{"start":{"row":40,"column":8},"end":{"row":40,"column":57},"action":"insert","lines":["$this->infrastructure_api->createReaderConnection"]}],[{"start":{"row":24,"column":8},"end":{"row":24,"column":48},"action":"remove","lines":["$this->system_under_test_factory->create"],"id":247},{"start":{"row":24,"column":8},"end":{"row":24,"column":57},"action":"insert","lines":["$this->infrastructure_api->createReaderConnection"]}],[{"start":{"row":4,"column":31},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":250}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":54},"action":"insert","lines":["use JasonWKeith\\Domain\\APIFactory as DomainAPIFactory;"],"id":251}],[{"start":{"row":48,"column":8},"end":{"row":49,"column":0},"action":"insert","lines":["",""],"id":252},{"start":{"row":49,"column":0},"end":{"row":49,"column":8},"action":"insert","lines":["        "]},{"start":{"row":49,"column":8},"end":{"row":50,"column":0},"action":"insert","lines":["",""]},{"start":{"row":50,"column":0},"end":{"row":50,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":49,"column":0},"end":{"row":50,"column":66},"action":"insert","lines":["        $this->domain_api_factory = new DomainAPIFactory;","        $this->domain_api = $this->domain_api_factory->create();  "],"id":253}],[{"start":{"row":54,"column":0},"end":{"row":54,"column":139},"action":"remove","lines":["        $this->infrastructure_api = $this->infrastructure_api_factory->create( TestConstants::STORAGE_PATH, $this->exception_factory );    "],"id":254},{"start":{"row":54,"column":0},"end":{"row":54,"column":154},"action":"insert","lines":["        $this->infrastructure_api = $this->infrastructure_api_factory->create( TestConstants::STORAGE_PATH, $this->domain_api, $this->exception_factory );"]}]]},"ace":{"folds":[],"scrolltop":448,"scrollleft":0,"selection":{"start":{"row":54,"column":108},"end":{"row":54,"column":126},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1622240946513,"hash":"6d4c17ae28fc4e651bb5e24ac562d474efd0267f"}