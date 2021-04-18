{"changed":true,"filter":false,"title":"TestDataAPIInterface.php","tooltip":"/Domain/Infrastructure/TestData/TestDataAPIInterface.php","value":"<?php\ndeclare( strict_types = 1 );\nnamespace JasonWKeith\\Domain\\Boundary\\Infrastructure\\TestData;\n\nuse JasonWKeith\\Domain\\Boundary\\DataObject\\Book\\BookTestDataFactoryInterface;\nuse JasonWKeith\\Domain\\Boundary\\DataObject\\Book\\RawBookTestDataFactoryInterface;\nuse JasonWKeith\\Domain\\Boundary\\DataObject\\Person\\PersonTestDataFactoryInterface;\nuse JasonWKeith\\Domain\\Boundary\\DataObject\\Person\\RawPersonTestDataFactoryInterface;\nuse JasonWKeith\\Domain\\Boundary\\Infrastructure\\Exception\\RawExceptionTestDataFactoryInterface;\n\ninterface TestDataAPIInterface\n{\n    public function createBookTestDataFactory(): BookTestDataFactoryInterface;\n    public function createPersonTestDataFactory(): PersonTestDataFactoryInterface;   \n    public function createRawBookTestDataFactory(): RawBookTestDataFactoryInterface;\n    public function createRawExceptionTestDataFactory(): RawExceptionTestDataFactoryInterface;\n    public function createRawPersonTestDataFactory(): RawPersonTestDataFactoryInterface;\n}","undoManager":{"mark":-2,"position":2,"stack":[[{"start":{"row":10,"column":18},"end":{"row":10,"column":31},"action":"remove","lines":["MasterFactory"],"id":2},{"start":{"row":10,"column":18},"end":{"row":10,"column":19},"action":"insert","lines":["A"]},{"start":{"row":10,"column":19},"end":{"row":10,"column":20},"action":"insert","lines":["P"]},{"start":{"row":10,"column":20},"end":{"row":10,"column":21},"action":"insert","lines":["I"]}],[{"start":{"row":2,"column":61},"end":{"row":2,"column":67},"action":"remove","lines":["Master"],"id":3},{"start":{"row":2,"column":61},"end":{"row":2,"column":62},"action":"insert","lines":["A"]},{"start":{"row":2,"column":62},"end":{"row":2,"column":63},"action":"insert","lines":["P"]},{"start":{"row":2,"column":63},"end":{"row":2,"column":64},"action":"insert","lines":["I"]}],[{"start":{"row":2,"column":63},"end":{"row":2,"column":64},"action":"remove","lines":["I"],"id":4},{"start":{"row":2,"column":62},"end":{"row":2,"column":63},"action":"remove","lines":["P"]},{"start":{"row":2,"column":61},"end":{"row":2,"column":62},"action":"remove","lines":["A"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":6,"column":30},"end":{"row":6,"column":30},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1617637801511}