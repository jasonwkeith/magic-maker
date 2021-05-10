{"changed":true,"filter":false,"title":"PersonRawTestData.php","tooltip":"/Domain/DataObject/Person/PersonRawTestData.php","value":"<?php\ndeclare( strict_types = 1 );\nnamespace JasonWKeith\\Domain\\DataObject\\Person;\n\nuse JasonWKeith\\Domain\\Boundary\\DataObject\\Person\\PersonDataTransferObject;\n\n\nclass PersonRawTestDataFactory implements PersonRawTestDataFactoryInterface\n{\n    public function __construct()\n    {\n        $this->data_transfer_objects = array();\n\n        $this->data_transfer_objects[ 0 ] = new PersonDataTransferObject;\n        $this->data_transfer_objects[ 0 ]->guid =\"d62ea34e-97a6-4dea-a5b4-0ce6095cef29\";        \n        $this->data_transfer_objects[ 0 ]->first_name = \"John\";\n        $this->data_transfer_objects[ 0 ]->last_name = \"Doe\";\n\n        $this->data_transfer_objects[ 1 ] = new PersonDataTransferObject;\n        $this->data_transfer_objects[ 1 ]->guid =\"7685ba6a-fc76-482e-b964-258a454b003b\";        \n        $this->data_transfer_objects[ 1 ]->first_name = \"Ledger\";\n        $this->data_transfer_objects[ 1 ]->middle_name = \"James William\";\n        $this->data_transfer_objects[ 1 ]->last_name = \"Keith\";\n        $this->data_transfer_objects[ 1 ]->suffix = \"Junior\";\n     \n        $this->data_transfer_objects[ 2 ] = new PersonDataTransferObject;\n        $this->data_transfer_objects[ 2 ]->guid =\"26bca210-edc9-4395-a4e5-de97c1e19ce0\";        \n        $this->data_transfer_objects[ 2 ]->first_name = \"Thomas\";\n        $this->data_transfer_objects[ 2 ]->middle_name = \"Edward Patrick\";\n        $this->data_transfer_objects[ 2 ]->last_name = \"Brady\";\n        $this->data_transfer_objects[ 2 ]->nickname = \"The GOAT\";     \n        \n        $this->data_transfer_objects[ 3 ] = new PersonDataTransferObject;\n        $this->data_transfer_objects[ 3 ]->guid =\"fab2d907-ae7b-4195-82b0-a794236c87cd\";        \n        $this->data_transfer_objects[ 3 ]->first_name = \"Isiah\";\n        $this->data_transfer_objects[ 3 ]->middle_name = \"Lord\";\n        $this->data_transfer_objects[ 3 ]->last_name = \"Thomas\";\n        $this->data_transfer_objects[ 3 ]->nickname = \"Zeke\";            \n        \n        $this->data_transfer_objects[ 4 ] = new PersonDataTransferObject;\n        $this->data_transfer_objects[ 4 ]->guid =\"6ab7cd5c-9a69-4c6a-b031-5fb40ab98538\";        \n        $this->data_transfer_objects[ 4 ]->first_name = \"Serena\";\n        $this->data_transfer_objects[ 4 ]->last_name = \"Williams\";\n     \n        $this->data_transfer_objects[ 5 ] = new PersonDataTransferObject;\n        $this->data_transfer_objects[ 5 ]->guid =\"8b82171c-8380-4855-8842-c8876bdd2569\";        \n        $this->data_transfer_objects[ 5 ]->first_name = \"Dave\";\n        $this->data_transfer_objects[ 5 ]->last_name = \"Ramsey\";\n\n        $this->data_transfer_objects[ 6 ] = new PersonDataTransferObject;\n        $this->data_transfer_objects[ 6 ]->guid =\"02dca342-9d4d-4082-bdf2-7cc9aec78b30\";        \n        $this->data_transfer_objects[ 6 ]->first_name = \"David\";\n        $this->data_transfer_objects[ 6 ]->last_name = \"Allen\";\n\n        $this->data_transfer_objects[ 7 ] = new PersonDataTransferObject;\n        $this->data_transfer_objects[ 7 ]->guid =\"20197d41-42d3-449a-894b-48e68ba82786\";        \n        $this->data_transfer_objects[ 7 ]->first_name = \"Scott\";\n        $this->data_transfer_objects[ 7 ]->last_name = \"Alexander\";\n        \n        $this->data_transfer_objects[ 8 ] = new PersonDataTransferObject;\n        $this->data_transfer_objects[ 8 ]->guid =\"ddb29c63-040d-4ec4-95bd-ee1ccb703913\";        \n        $this->data_transfer_objects[ 8 ]->first_name = \"Spencer\";\n        $this->data_transfer_objects[ 8 ]->last_name = \"Johnson\";     \n        $this->data_transfer_objects[ 9 ]->has_md = true;          \n        \n        $this->data_transfer_objects[ 9 ] = new PersonDataTransferObject;\n        $this->data_transfer_objects[ 9 ]->guid =\"d9dc7c92-7266-43ac-97e5-9495d6cef8b1\";        \n        $this->data_transfer_objects[ 9 ]->first_name = \"Kenneth\";\n        $this->data_transfer_objects[ 9 ]->last_name = \"Blanchard\";    \n        $this->data_transfer_objects[ 9 ]->has_phd = true;            \n    }\n\n   public function create( int $number ): PersonDataTransferObject\n   {\n       $this->data_transfer_objects[ $number ];\n   }\n}","undoManager":{"mark":-267,"position":100,"stack":[[{"start":{"row":57,"column":53},"end":{"row":57,"column":55},"action":"insert","lines":["xa"],"id":376,"ignore":true}],[{"start":{"row":57,"column":55},"end":{"row":57,"column":57},"action":"insert","lines":["nd"],"id":377,"ignore":true}],[{"start":{"row":57,"column":57},"end":{"row":57,"column":59},"action":"insert","lines":["er"],"id":378,"ignore":true}],[{"start":{"row":57,"column":61},"end":{"row":59,"column":8},"action":"insert","lines":["","        ","        "],"id":379,"ignore":true}],[{"start":{"row":59,"column":0},"end":{"row":62,"column":61},"action":"insert","lines":["        $data_transfer_objects[ 7 ] = new PersonDataTransferObject;","        $data_transfer_objects[ 7 ]->guid =\"20197d41-42d3-449a-894b-48e68ba82786\";        ","        $data_transfer_objects[ 7 ]->first_name = \"Scott\";","        $data_transfer_objects[ 7 ]->last_name = \"Alexander\";"],"id":380,"ignore":true}],[{"start":{"row":59,"column":32},"end":{"row":59,"column":33},"action":"remove","lines":["7"],"id":381,"ignore":true},{"start":{"row":59,"column":32},"end":{"row":59,"column":33},"action":"insert","lines":["8"]}],[{"start":{"row":60,"column":32},"end":{"row":60,"column":33},"action":"remove","lines":["7"],"id":382,"ignore":true},{"start":{"row":60,"column":32},"end":{"row":60,"column":33},"action":"insert","lines":["8"]}],[{"start":{"row":61,"column":32},"end":{"row":61,"column":33},"action":"insert","lines":["8"],"id":383,"ignore":true},{"start":{"row":61,"column":33},"end":{"row":61,"column":34},"action":"remove","lines":["7"]}],[{"start":{"row":62,"column":32},"end":{"row":62,"column":33},"action":"remove","lines":["7"],"id":384,"ignore":true},{"start":{"row":62,"column":32},"end":{"row":62,"column":33},"action":"insert","lines":["8"]}],[{"start":{"row":60,"column":44},"end":{"row":60,"column":80},"action":"remove","lines":["20197d41-42d3-449a-894b-48e68ba82786"],"id":385,"ignore":true},{"start":{"row":60,"column":44},"end":{"row":60,"column":80},"action":"insert","lines":["ddb29c63-040d-4ec4-95bd-ee1ccb703913"]}],[{"start":{"row":61,"column":51},"end":{"row":61,"column":56},"action":"remove","lines":["Scott"],"id":386,"ignore":true},{"start":{"row":61,"column":51},"end":{"row":61,"column":52},"action":"insert","lines":["S"]}],[{"start":{"row":61,"column":52},"end":{"row":61,"column":55},"action":"insert","lines":["pen"],"id":387,"ignore":true}],[{"start":{"row":61,"column":55},"end":{"row":61,"column":56},"action":"insert","lines":["c"],"id":388,"ignore":true}],[{"start":{"row":61,"column":56},"end":{"row":61,"column":58},"action":"insert","lines":["er"],"id":389,"ignore":true}],[{"start":{"row":62,"column":50},"end":{"row":62,"column":59},"action":"remove","lines":["Alexander"],"id":390,"ignore":true},{"start":{"row":62,"column":50},"end":{"row":62,"column":51},"action":"insert","lines":["J"]}],[{"start":{"row":62,"column":51},"end":{"row":62,"column":52},"action":"insert","lines":["o"],"id":391,"ignore":true}],[{"start":{"row":62,"column":52},"end":{"row":62,"column":53},"action":"insert","lines":["h"],"id":392,"ignore":true}],[{"start":{"row":62,"column":50},"end":{"row":62,"column":53},"action":"remove","lines":["Joh"],"id":393,"ignore":true},{"start":{"row":62,"column":50},"end":{"row":62,"column":57},"action":"insert","lines":["Johnson"]}],[{"start":{"row":62,"column":67},"end":{"row":64,"column":8},"action":"insert","lines":["","        ","        "],"id":394,"ignore":true}],[{"start":{"row":64,"column":0},"end":{"row":67,"column":66},"action":"insert","lines":["        $data_transfer_objects[ 8 ] = new PersonDataTransferObject;","        $data_transfer_objects[ 8 ]->guid =\"ddb29c63-040d-4ec4-95bd-ee1ccb703913\";        ","        $data_transfer_objects[ 8 ]->first_name = \"Spencer\";","        $data_transfer_objects[ 8 ]->last_name = \"Johnson\";       "],"id":395,"ignore":true}],[{"start":{"row":64,"column":32},"end":{"row":64,"column":33},"action":"remove","lines":["8"],"id":396,"ignore":true},{"start":{"row":64,"column":32},"end":{"row":64,"column":33},"action":"insert","lines":["9"]}],[{"start":{"row":65,"column":32},"end":{"row":65,"column":33},"action":"remove","lines":["8"],"id":397,"ignore":true},{"start":{"row":65,"column":32},"end":{"row":65,"column":33},"action":"insert","lines":["9"]}],[{"start":{"row":66,"column":32},"end":{"row":66,"column":33},"action":"remove","lines":["8"],"id":398,"ignore":true},{"start":{"row":66,"column":32},"end":{"row":66,"column":33},"action":"insert","lines":["9"]}],[{"start":{"row":67,"column":32},"end":{"row":67,"column":33},"action":"remove","lines":["8"],"id":399,"ignore":true},{"start":{"row":67,"column":32},"end":{"row":67,"column":33},"action":"insert","lines":["9"]}],[{"start":{"row":66,"column":51},"end":{"row":66,"column":58},"action":"remove","lines":["Spencer"],"id":400,"ignore":true},{"start":{"row":66,"column":51},"end":{"row":66,"column":52},"action":"insert","lines":["K"]}],[{"start":{"row":66,"column":52},"end":{"row":66,"column":55},"action":"insert","lines":["enn"],"id":401,"ignore":true}],[{"start":{"row":66,"column":55},"end":{"row":66,"column":56},"action":"insert","lines":["e"],"id":402,"ignore":true}],[{"start":{"row":66,"column":56},"end":{"row":66,"column":58},"action":"insert","lines":["th"],"id":403,"ignore":true}],[{"start":{"row":67,"column":55},"end":{"row":67,"column":57},"action":"remove","lines":["on"],"id":404,"ignore":true}],[{"start":{"row":67,"column":50},"end":{"row":67,"column":55},"action":"remove","lines":["Johns"],"id":405,"ignore":true}],[{"start":{"row":67,"column":50},"end":{"row":67,"column":51},"action":"insert","lines":["B"],"id":406,"ignore":true}],[{"start":{"row":67,"column":51},"end":{"row":67,"column":52},"action":"insert","lines":["l"],"id":407,"ignore":true}],[{"start":{"row":67,"column":50},"end":{"row":67,"column":52},"action":"remove","lines":["Bl"],"id":408,"ignore":true},{"start":{"row":67,"column":50},"end":{"row":67,"column":59},"action":"insert","lines":["Blanchard"]}],[{"start":{"row":65,"column":44},"end":{"row":65,"column":80},"action":"remove","lines":["ddb29c63-040d-4ec4-95bd-ee1ccb703913"],"id":409,"ignore":true},{"start":{"row":65,"column":44},"end":{"row":65,"column":80},"action":"insert","lines":["d9dc7c92-7266-43ac-97e5-9495d6cef8b1"]}],[{"start":{"row":67,"column":65},"end":{"row":67,"column":76},"action":"remove","lines":["           "],"id":410,"ignore":true},{"start":{"row":67,"column":65},"end":{"row":68,"column":8},"action":"insert","lines":["","        "]}],[{"start":{"row":68,"column":0},"end":{"row":68,"column":65},"action":"insert","lines":["        $data_transfer_objects[ 9 ]->last_name = \"Blanchard\";    "],"id":411,"ignore":true}],[{"start":{"row":68,"column":37},"end":{"row":68,"column":46},"action":"remove","lines":["last_name"],"id":412,"ignore":true},{"start":{"row":68,"column":37},"end":{"row":68,"column":38},"action":"insert","lines":["h"]}],[{"start":{"row":68,"column":38},"end":{"row":68,"column":39},"action":"insert","lines":["a"],"id":413,"ignore":true}],[{"start":{"row":68,"column":39},"end":{"row":68,"column":40},"action":"insert","lines":["s"],"id":414,"ignore":true}],[{"start":{"row":68,"column":40},"end":{"row":68,"column":41},"action":"insert","lines":["_"],"id":415,"ignore":true}],[{"start":{"row":68,"column":41},"end":{"row":68,"column":42},"action":"insert","lines":["p"],"id":416,"ignore":true}],[{"start":{"row":68,"column":42},"end":{"row":68,"column":43},"action":"insert","lines":["h"],"id":417,"ignore":true}],[{"start":{"row":68,"column":43},"end":{"row":68,"column":44},"action":"insert","lines":["d"],"id":418,"ignore":true}],[{"start":{"row":68,"column":47},"end":{"row":68,"column":54},"action":"remove","lines":["\"Blanch"],"id":419,"ignore":true}],[{"start":{"row":68,"column":47},"end":{"row":68,"column":51},"action":"remove","lines":["ard\""],"id":420,"ignore":true},{"start":{"row":68,"column":47},"end":{"row":68,"column":48},"action":"insert","lines":["t"]}],[{"start":{"row":68,"column":48},"end":{"row":68,"column":49},"action":"insert","lines":["r"],"id":421,"ignore":true}],[{"start":{"row":68,"column":49},"end":{"row":68,"column":51},"action":"insert","lines":["ue"],"id":422,"ignore":true}],[{"start":{"row":62,"column":64},"end":{"row":62,"column":67},"action":"remove","lines":["   "],"id":423,"ignore":true},{"start":{"row":62,"column":64},"end":{"row":63,"column":8},"action":"insert","lines":["","        "]}],[{"start":{"row":63,"column":0},"end":{"row":63,"column":54},"action":"insert","lines":["        $data_transfer_objects[ 9 ]->has_phd = true;  "],"id":424,"ignore":true}],[{"start":{"row":63,"column":41},"end":{"row":63,"column":43},"action":"remove","lines":["ph"],"id":425,"ignore":true},{"start":{"row":63,"column":41},"end":{"row":63,"column":42},"action":"insert","lines":["m"]}],[{"start":{"row":63,"column":46},"end":{"row":63,"column":50},"action":"remove","lines":["true"],"id":426,"ignore":true},{"start":{"row":63,"column":46},"end":{"row":63,"column":47},"action":"insert","lines":["f"]}],[{"start":{"row":63,"column":47},"end":{"row":63,"column":49},"action":"insert","lines":["as"],"id":427,"ignore":true}],[{"start":{"row":63,"column":48},"end":{"row":63,"column":49},"action":"remove","lines":["s"],"id":428,"ignore":true}],[{"start":{"row":63,"column":48},"end":{"row":63,"column":50},"action":"insert","lines":["ls"],"id":429,"ignore":true}],[{"start":{"row":63,"column":50},"end":{"row":63,"column":51},"action":"insert","lines":["e"],"id":430,"ignore":true}],[{"start":{"row":63,"column":46},"end":{"row":63,"column":51},"action":"remove","lines":["false"],"id":431,"ignore":true},{"start":{"row":63,"column":46},"end":{"row":63,"column":47},"action":"insert","lines":["t"]}],[{"start":{"row":63,"column":47},"end":{"row":63,"column":48},"action":"insert","lines":["r"],"id":432,"ignore":true}],[{"start":{"row":63,"column":48},"end":{"row":63,"column":50},"action":"insert","lines":["ue"],"id":433,"ignore":true}],[{"start":{"row":11,"column":8},"end":{"row":11,"column":30},"action":"remove","lines":["$data_transfer_objects"],"id":434,"ignore":true},{"start":{"row":11,"column":8},"end":{"row":11,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":13,"column":8},"end":{"row":13,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":13,"column":8},"end":{"row":13,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":14,"column":8},"end":{"row":14,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":14,"column":8},"end":{"row":14,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":15,"column":8},"end":{"row":15,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":15,"column":8},"end":{"row":15,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":16,"column":8},"end":{"row":16,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":16,"column":8},"end":{"row":16,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":18,"column":8},"end":{"row":18,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":18,"column":8},"end":{"row":18,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":19,"column":8},"end":{"row":19,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":19,"column":8},"end":{"row":19,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":20,"column":8},"end":{"row":20,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":20,"column":8},"end":{"row":20,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":21,"column":8},"end":{"row":21,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":21,"column":8},"end":{"row":21,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":22,"column":8},"end":{"row":22,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":22,"column":8},"end":{"row":22,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":23,"column":8},"end":{"row":23,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":23,"column":8},"end":{"row":23,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":25,"column":8},"end":{"row":25,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":25,"column":8},"end":{"row":25,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":26,"column":8},"end":{"row":26,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":26,"column":8},"end":{"row":26,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":27,"column":8},"end":{"row":27,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":27,"column":8},"end":{"row":27,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":28,"column":8},"end":{"row":28,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":28,"column":8},"end":{"row":28,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":29,"column":8},"end":{"row":29,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":29,"column":8},"end":{"row":29,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":30,"column":8},"end":{"row":30,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":30,"column":8},"end":{"row":30,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":32,"column":8},"end":{"row":32,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":32,"column":8},"end":{"row":32,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":33,"column":8},"end":{"row":33,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":33,"column":8},"end":{"row":33,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":34,"column":8},"end":{"row":34,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":34,"column":8},"end":{"row":34,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":35,"column":8},"end":{"row":35,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":35,"column":8},"end":{"row":35,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":36,"column":8},"end":{"row":36,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":36,"column":8},"end":{"row":36,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":37,"column":8},"end":{"row":37,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":37,"column":8},"end":{"row":37,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":39,"column":8},"end":{"row":39,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":39,"column":8},"end":{"row":39,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":40,"column":8},"end":{"row":40,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":40,"column":8},"end":{"row":40,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":41,"column":8},"end":{"row":41,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":41,"column":8},"end":{"row":41,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":42,"column":8},"end":{"row":42,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":42,"column":8},"end":{"row":42,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":44,"column":8},"end":{"row":44,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":44,"column":8},"end":{"row":44,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":45,"column":8},"end":{"row":45,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":45,"column":8},"end":{"row":45,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":46,"column":8},"end":{"row":46,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":46,"column":8},"end":{"row":46,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":47,"column":8},"end":{"row":47,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":47,"column":8},"end":{"row":47,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":49,"column":8},"end":{"row":49,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":49,"column":8},"end":{"row":49,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":50,"column":8},"end":{"row":50,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":50,"column":8},"end":{"row":50,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":51,"column":8},"end":{"row":51,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":51,"column":8},"end":{"row":51,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":52,"column":8},"end":{"row":52,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":52,"column":8},"end":{"row":52,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":54,"column":8},"end":{"row":54,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":54,"column":8},"end":{"row":54,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":55,"column":8},"end":{"row":55,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":55,"column":8},"end":{"row":55,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":56,"column":8},"end":{"row":56,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":56,"column":8},"end":{"row":56,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":57,"column":8},"end":{"row":57,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":57,"column":8},"end":{"row":57,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":59,"column":8},"end":{"row":59,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":59,"column":8},"end":{"row":59,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":60,"column":8},"end":{"row":60,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":60,"column":8},"end":{"row":60,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":61,"column":8},"end":{"row":61,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":61,"column":8},"end":{"row":61,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":62,"column":8},"end":{"row":62,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":62,"column":8},"end":{"row":62,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":63,"column":8},"end":{"row":63,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":63,"column":8},"end":{"row":63,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":65,"column":8},"end":{"row":65,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":65,"column":8},"end":{"row":65,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":66,"column":8},"end":{"row":66,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":66,"column":8},"end":{"row":66,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":67,"column":8},"end":{"row":67,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":67,"column":8},"end":{"row":67,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":68,"column":8},"end":{"row":68,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":68,"column":8},"end":{"row":68,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]},{"start":{"row":69,"column":8},"end":{"row":69,"column":30},"action":"remove","lines":["$data_transfer_objects"]},{"start":{"row":69,"column":8},"end":{"row":69,"column":36},"action":"insert","lines":["$this->data_transfer_objects"]}],[{"start":{"row":74,"column":7},"end":{"row":74,"column":40},"action":"insert","lines":["$this->data_transfer_objects[ 0 ]"],"id":435,"ignore":true}],[{"start":{"row":72,"column":30},"end":{"row":72,"column":32},"action":"insert","lines":[" $"],"id":436,"ignore":true}],[{"start":{"row":72,"column":32},"end":{"row":72,"column":34},"action":"insert","lines":["nu"],"id":437,"ignore":true}],[{"start":{"row":72,"column":34},"end":{"row":72,"column":35},"action":"insert","lines":["m"],"id":438,"ignore":true}],[{"start":{"row":72,"column":35},"end":{"row":72,"column":36},"action":"insert","lines":["b"],"id":439,"ignore":true}],[{"start":{"row":72,"column":36},"end":{"row":72,"column":38},"action":"insert","lines":["er"],"id":440,"ignore":true}],[{"start":{"row":74,"column":37},"end":{"row":74,"column":38},"action":"remove","lines":["0"],"id":441,"ignore":true},{"start":{"row":74,"column":37},"end":{"row":74,"column":38},"action":"insert","lines":["$"]}],[{"start":{"row":74,"column":38},"end":{"row":74,"column":39},"action":"insert","lines":["n"],"id":442,"ignore":true}],[{"start":{"row":74,"column":37},"end":{"row":74,"column":39},"action":"remove","lines":["$n"],"id":443,"ignore":true},{"start":{"row":74,"column":37},"end":{"row":74,"column":44},"action":"insert","lines":["$number"]}],[{"start":{"row":74,"column":46},"end":{"row":74,"column":47},"action":"insert","lines":[";"],"id":444,"ignore":true}],[{"start":{"row":7,"column":24},"end":{"row":7,"column":25},"action":"insert","lines":["i"],"id":445,"ignore":true}],[{"start":{"row":7,"column":25},"end":{"row":7,"column":27},"action":"insert","lines":["mp"],"id":446,"ignore":true}],[{"start":{"row":7,"column":24},"end":{"row":7,"column":27},"action":"remove","lines":["imp"],"id":447,"ignore":true},{"start":{"row":7,"column":24},"end":{"row":7,"column":36},"action":"insert","lines":["implements P"]}],[{"start":{"row":7,"column":36},"end":{"row":7,"column":38},"action":"insert","lines":["er"],"id":448,"ignore":true}],[{"start":{"row":7,"column":38},"end":{"row":7,"column":41},"action":"insert","lines":["son"],"id":449,"ignore":true}],[{"start":{"row":7,"column":41},"end":{"row":7,"column":42},"action":"insert","lines":["R"],"id":450,"ignore":true}],[{"start":{"row":7,"column":42},"end":{"row":7,"column":44},"action":"insert","lines":["aw"],"id":451,"ignore":true}],[{"start":{"row":7,"column":35},"end":{"row":7,"column":44},"action":"remove","lines":["PersonRaw"],"id":452,"ignore":true},{"start":{"row":7,"column":35},"end":{"row":7,"column":52},"action":"insert","lines":["PersonRawTestData"]}],[{"start":{"row":7,"column":52},"end":{"row":7,"column":53},"action":"insert","lines":["I"],"id":453,"ignore":true}],[{"start":{"row":7,"column":53},"end":{"row":7,"column":54},"action":"insert","lines":["n"],"id":454,"ignore":true}],[{"start":{"row":7,"column":54},"end":{"row":7,"column":56},"action":"insert","lines":["te"],"id":455,"ignore":true}],[{"start":{"row":7,"column":56},"end":{"row":7,"column":57},"action":"insert","lines":["r"],"id":456,"ignore":true}],[{"start":{"row":7,"column":57},"end":{"row":7,"column":58},"action":"insert","lines":["f"],"id":457,"ignore":true}],[{"start":{"row":7,"column":58},"end":{"row":7,"column":59},"action":"insert","lines":["a"],"id":458,"ignore":true}],[{"start":{"row":7,"column":59},"end":{"row":7,"column":60},"action":"insert","lines":["c"],"id":459,"ignore":true}],[{"start":{"row":7,"column":60},"end":{"row":7,"column":61},"action":"insert","lines":["e"],"id":460,"ignore":true}],[{"start":{"row":72,"column":19},"end":{"row":72,"column":25},"action":"remove","lines":["getDTO"],"id":461,"ignore":true},{"start":{"row":72,"column":19},"end":{"row":72,"column":20},"action":"insert","lines":["c"]}],[{"start":{"row":72,"column":20},"end":{"row":72,"column":21},"action":"insert","lines":["r"],"id":462,"ignore":true}],[{"start":{"row":72,"column":21},"end":{"row":72,"column":22},"action":"insert","lines":["e"],"id":463,"ignore":true}],[{"start":{"row":72,"column":22},"end":{"row":72,"column":24},"action":"insert","lines":["at"],"id":464,"ignore":true}],[{"start":{"row":72,"column":24},"end":{"row":72,"column":25},"action":"insert","lines":["e"],"id":465,"ignore":true}],[{"start":{"row":7,"column":23},"end":{"row":7,"column":24},"action":"insert","lines":["F"],"id":466,"ignore":true}],[{"start":{"row":7,"column":24},"end":{"row":7,"column":25},"action":"insert","lines":["a"],"id":467,"ignore":true}],[{"start":{"row":7,"column":25},"end":{"row":7,"column":26},"action":"insert","lines":["c"],"id":468,"ignore":true}],[{"start":{"row":7,"column":26},"end":{"row":7,"column":27},"action":"insert","lines":["t"],"id":469,"ignore":true}],[{"start":{"row":7,"column":27},"end":{"row":7,"column":28},"action":"insert","lines":["o"],"id":470,"ignore":true}],[{"start":{"row":7,"column":28},"end":{"row":7,"column":29},"action":"insert","lines":["r"],"id":471,"ignore":true}],[{"start":{"row":7,"column":29},"end":{"row":7,"column":30},"action":"insert","lines":["y"],"id":472,"ignore":true}],[{"start":{"row":7,"column":59},"end":{"row":7,"column":60},"action":"insert","lines":["F"],"id":473,"ignore":true}],[{"start":{"row":7,"column":60},"end":{"row":7,"column":62},"action":"insert","lines":["ac"],"id":474,"ignore":true}],[{"start":{"row":7,"column":62},"end":{"row":7,"column":63},"action":"insert","lines":["t"],"id":475,"ignore":true}],[{"start":{"row":7,"column":63},"end":{"row":7,"column":66},"action":"insert","lines":["ory"],"id":476,"ignore":true}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":25,"column":55},"end":{"row":25,"column":55},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1620062694411}