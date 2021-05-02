{"filter":false,"title":"HistoryTrait.php","tooltip":"/Persistance/Infrastructure/History/HistoryTrait.php","undoManager":{"mark":91,"position":91,"stack":[[{"start":{"row":0,"column":0},"end":{"row":7,"column":1},"action":"insert","lines":["<?php","declare( strict_types = 1 );","namespace JasonWKeith\\Persistance\\Infrastructure\\FileHandler;","","use JasonWKeith\\Persistance\\Infrastructure\\Exception\\ExceptionFactoryTrait;","","trait FileHandlerTrait","{"],"id":1}],[{"start":{"row":7,"column":1},"end":{"row":8,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"insert","lines":["    "]},{"start":{"row":8,"column":4},"end":{"row":9,"column":0},"action":"insert","lines":["",""]},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "]},{"start":{"row":9,"column":4},"end":{"row":9,"column":5},"action":"insert","lines":["}"]},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":6,"column":6},"end":{"row":6,"column":7},"action":"remove","lines":["F"],"id":3},{"start":{"row":6,"column":6},"end":{"row":6,"column":7},"action":"remove","lines":["i"]},{"start":{"row":6,"column":6},"end":{"row":6,"column":7},"action":"remove","lines":["l"]},{"start":{"row":6,"column":6},"end":{"row":6,"column":7},"action":"remove","lines":["e"]},{"start":{"row":6,"column":6},"end":{"row":6,"column":7},"action":"remove","lines":["H"]},{"start":{"row":6,"column":6},"end":{"row":6,"column":7},"action":"remove","lines":["a"]},{"start":{"row":6,"column":6},"end":{"row":6,"column":7},"action":"remove","lines":["n"]},{"start":{"row":6,"column":6},"end":{"row":6,"column":7},"action":"remove","lines":["d"]},{"start":{"row":6,"column":6},"end":{"row":6,"column":7},"action":"remove","lines":["l"]},{"start":{"row":6,"column":6},"end":{"row":6,"column":7},"action":"remove","lines":["e"]},{"start":{"row":6,"column":6},"end":{"row":6,"column":7},"action":"remove","lines":["r"]}],[{"start":{"row":6,"column":6},"end":{"row":6,"column":7},"action":"insert","lines":["H"],"id":4},{"start":{"row":6,"column":7},"end":{"row":6,"column":8},"action":"insert","lines":["i"]},{"start":{"row":6,"column":8},"end":{"row":6,"column":9},"action":"insert","lines":["s"]},{"start":{"row":6,"column":9},"end":{"row":6,"column":10},"action":"insert","lines":["t"]},{"start":{"row":6,"column":10},"end":{"row":6,"column":11},"action":"insert","lines":["o"]},{"start":{"row":6,"column":11},"end":{"row":6,"column":12},"action":"insert","lines":["r"]},{"start":{"row":6,"column":12},"end":{"row":6,"column":13},"action":"insert","lines":["y"]}],[{"start":{"row":2,"column":49},"end":{"row":2,"column":60},"action":"remove","lines":["FileHandler"],"id":5},{"start":{"row":2,"column":49},"end":{"row":2,"column":50},"action":"insert","lines":["H"]},{"start":{"row":2,"column":50},"end":{"row":2,"column":51},"action":"insert","lines":["i"]},{"start":{"row":2,"column":51},"end":{"row":2,"column":52},"action":"insert","lines":["s"]},{"start":{"row":2,"column":52},"end":{"row":2,"column":53},"action":"insert","lines":["t"]},{"start":{"row":2,"column":53},"end":{"row":2,"column":54},"action":"insert","lines":["o"]},{"start":{"row":2,"column":54},"end":{"row":2,"column":55},"action":"insert","lines":["r"]},{"start":{"row":2,"column":55},"end":{"row":2,"column":56},"action":"insert","lines":["y"]}],[{"start":{"row":3,"column":0},"end":{"row":4,"column":75},"action":"remove","lines":["","use JasonWKeith\\Persistance\\Infrastructure\\Exception\\ExceptionFactoryTrait;"],"id":6},{"start":{"row":3,"column":0},"end":{"row":4,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":6,"column":0},"end":{"row":6,"column":4},"action":"insert","lines":["    "],"id":7}],[{"start":{"row":6,"column":4},"end":{"row":6,"column":5},"action":"insert","lines":["p"],"id":8},{"start":{"row":6,"column":5},"end":{"row":6,"column":6},"action":"insert","lines":["r"]},{"start":{"row":6,"column":6},"end":{"row":6,"column":7},"action":"insert","lines":["i"]},{"start":{"row":6,"column":7},"end":{"row":6,"column":8},"action":"insert","lines":["v"]},{"start":{"row":6,"column":8},"end":{"row":6,"column":9},"action":"insert","lines":["a"]},{"start":{"row":6,"column":9},"end":{"row":6,"column":10},"action":"insert","lines":["t"]},{"start":{"row":6,"column":10},"end":{"row":6,"column":11},"action":"insert","lines":["e"]}],[{"start":{"row":6,"column":11},"end":{"row":6,"column":12},"action":"insert","lines":[" "],"id":9},{"start":{"row":6,"column":12},"end":{"row":6,"column":13},"action":"insert","lines":["$"]}],[{"start":{"row":6,"column":12},"end":{"row":6,"column":13},"action":"remove","lines":["$"],"id":10}],[{"start":{"row":6,"column":12},"end":{"row":6,"column":13},"action":"insert","lines":["$"],"id":11},{"start":{"row":6,"column":13},"end":{"row":6,"column":14},"action":"insert","lines":["_"]}],[{"start":{"row":6,"column":14},"end":{"row":6,"column":15},"action":"insert","lines":["h"],"id":12},{"start":{"row":6,"column":15},"end":{"row":6,"column":16},"action":"insert","lines":["i"]},{"start":{"row":6,"column":16},"end":{"row":6,"column":17},"action":"insert","lines":["s"]},{"start":{"row":6,"column":17},"end":{"row":6,"column":18},"action":"insert","lines":["t"]},{"start":{"row":6,"column":18},"end":{"row":6,"column":19},"action":"insert","lines":["o"]},{"start":{"row":6,"column":19},"end":{"row":6,"column":20},"action":"insert","lines":["r"]},{"start":{"row":6,"column":20},"end":{"row":6,"column":21},"action":"insert","lines":["y"]},{"start":{"row":6,"column":21},"end":{"row":6,"column":22},"action":"insert","lines":["_"]}],[{"start":{"row":6,"column":22},"end":{"row":6,"column":23},"action":"insert","lines":["t"],"id":13},{"start":{"row":6,"column":23},"end":{"row":6,"column":24},"action":"insert","lines":["r"]},{"start":{"row":6,"column":24},"end":{"row":6,"column":25},"action":"insert","lines":["a"]},{"start":{"row":6,"column":25},"end":{"row":6,"column":26},"action":"insert","lines":["i"]},{"start":{"row":6,"column":26},"end":{"row":6,"column":27},"action":"insert","lines":["t"]}],[{"start":{"row":6,"column":26},"end":{"row":6,"column":27},"action":"remove","lines":["t"],"id":14},{"start":{"row":6,"column":25},"end":{"row":6,"column":26},"action":"remove","lines":["i"]},{"start":{"row":6,"column":24},"end":{"row":6,"column":25},"action":"remove","lines":["a"]},{"start":{"row":6,"column":23},"end":{"row":6,"column":24},"action":"remove","lines":["r"]},{"start":{"row":6,"column":22},"end":{"row":6,"column":23},"action":"remove","lines":["t"]},{"start":{"row":6,"column":21},"end":{"row":6,"column":22},"action":"remove","lines":["_"]},{"start":{"row":6,"column":20},"end":{"row":6,"column":21},"action":"remove","lines":["y"]},{"start":{"row":6,"column":19},"end":{"row":6,"column":20},"action":"remove","lines":["r"]},{"start":{"row":6,"column":18},"end":{"row":6,"column":19},"action":"remove","lines":["o"]},{"start":{"row":6,"column":17},"end":{"row":6,"column":18},"action":"remove","lines":["t"]},{"start":{"row":6,"column":16},"end":{"row":6,"column":17},"action":"remove","lines":["s"]},{"start":{"row":6,"column":15},"end":{"row":6,"column":16},"action":"remove","lines":["i"]},{"start":{"row":6,"column":14},"end":{"row":6,"column":15},"action":"remove","lines":["h"]},{"start":{"row":6,"column":13},"end":{"row":6,"column":14},"action":"remove","lines":["_"]},{"start":{"row":6,"column":12},"end":{"row":6,"column":13},"action":"remove","lines":["$"]},{"start":{"row":6,"column":11},"end":{"row":6,"column":12},"action":"remove","lines":[" "]},{"start":{"row":6,"column":10},"end":{"row":6,"column":11},"action":"remove","lines":["e"]},{"start":{"row":6,"column":9},"end":{"row":6,"column":10},"action":"remove","lines":["t"]},{"start":{"row":6,"column":8},"end":{"row":6,"column":9},"action":"remove","lines":["a"]},{"start":{"row":6,"column":7},"end":{"row":6,"column":8},"action":"remove","lines":["v"]}],[{"start":{"row":6,"column":6},"end":{"row":6,"column":7},"action":"remove","lines":["i"],"id":15},{"start":{"row":6,"column":5},"end":{"row":6,"column":6},"action":"remove","lines":["r"]},{"start":{"row":6,"column":4},"end":{"row":6,"column":5},"action":"remove","lines":["p"]}],[{"start":{"row":6,"column":4},"end":{"row":6,"column":5},"action":"insert","lines":["p"],"id":16},{"start":{"row":6,"column":5},"end":{"row":6,"column":6},"action":"insert","lines":["u"]},{"start":{"row":6,"column":6},"end":{"row":6,"column":7},"action":"insert","lines":["b"]},{"start":{"row":6,"column":7},"end":{"row":6,"column":8},"action":"insert","lines":["l"]},{"start":{"row":6,"column":8},"end":{"row":6,"column":9},"action":"insert","lines":["i"]},{"start":{"row":6,"column":9},"end":{"row":6,"column":10},"action":"insert","lines":["c"]}],[{"start":{"row":6,"column":9},"end":{"row":6,"column":10},"action":"remove","lines":["c"],"id":17},{"start":{"row":6,"column":8},"end":{"row":6,"column":9},"action":"remove","lines":["i"]},{"start":{"row":6,"column":7},"end":{"row":6,"column":8},"action":"remove","lines":["l"]},{"start":{"row":6,"column":6},"end":{"row":6,"column":7},"action":"remove","lines":["b"]},{"start":{"row":6,"column":5},"end":{"row":6,"column":6},"action":"remove","lines":["u"]},{"start":{"row":6,"column":4},"end":{"row":6,"column":5},"action":"remove","lines":["p"]}],[{"start":{"row":6,"column":4},"end":{"row":6,"column":5},"action":"insert","lines":["p"],"id":18},{"start":{"row":6,"column":5},"end":{"row":6,"column":6},"action":"insert","lines":["r"]},{"start":{"row":6,"column":6},"end":{"row":6,"column":7},"action":"insert","lines":["i"]},{"start":{"row":6,"column":7},"end":{"row":6,"column":8},"action":"insert","lines":["v"]},{"start":{"row":6,"column":8},"end":{"row":6,"column":9},"action":"insert","lines":["a"]},{"start":{"row":6,"column":9},"end":{"row":6,"column":10},"action":"insert","lines":["t"]},{"start":{"row":6,"column":10},"end":{"row":6,"column":11},"action":"insert","lines":["e"]}],[{"start":{"row":6,"column":11},"end":{"row":6,"column":12},"action":"insert","lines":[" "],"id":19},{"start":{"row":6,"column":12},"end":{"row":6,"column":13},"action":"insert","lines":["c"]},{"start":{"row":6,"column":13},"end":{"row":6,"column":14},"action":"insert","lines":["o"]},{"start":{"row":6,"column":14},"end":{"row":6,"column":15},"action":"insert","lines":["n"]}],[{"start":{"row":6,"column":14},"end":{"row":6,"column":15},"action":"remove","lines":["n"],"id":20}],[{"start":{"row":6,"column":14},"end":{"row":6,"column":15},"action":"insert","lines":["n"],"id":21}],[{"start":{"row":6,"column":14},"end":{"row":6,"column":15},"action":"remove","lines":["n"],"id":22},{"start":{"row":6,"column":13},"end":{"row":6,"column":14},"action":"remove","lines":["o"]},{"start":{"row":6,"column":12},"end":{"row":6,"column":13},"action":"remove","lines":["c"]}],[{"start":{"row":6,"column":12},"end":{"row":6,"column":13},"action":"insert","lines":["$"],"id":23},{"start":{"row":6,"column":13},"end":{"row":6,"column":14},"action":"insert","lines":["_"]},{"start":{"row":6,"column":14},"end":{"row":6,"column":15},"action":"insert","lines":["H"]}],[{"start":{"row":6,"column":15},"end":{"row":6,"column":16},"action":"insert","lines":["i"],"id":24}],[{"start":{"row":6,"column":15},"end":{"row":6,"column":16},"action":"remove","lines":["i"],"id":25},{"start":{"row":6,"column":14},"end":{"row":6,"column":15},"action":"remove","lines":["H"]}],[{"start":{"row":6,"column":14},"end":{"row":6,"column":15},"action":"insert","lines":["h"],"id":26},{"start":{"row":6,"column":15},"end":{"row":6,"column":16},"action":"insert","lines":["i"]},{"start":{"row":6,"column":16},"end":{"row":6,"column":17},"action":"insert","lines":["s"]},{"start":{"row":6,"column":17},"end":{"row":6,"column":18},"action":"insert","lines":["t"]},{"start":{"row":6,"column":18},"end":{"row":6,"column":19},"action":"insert","lines":["o"]},{"start":{"row":6,"column":19},"end":{"row":6,"column":20},"action":"insert","lines":["r"]},{"start":{"row":6,"column":20},"end":{"row":6,"column":21},"action":"insert","lines":["y"]},{"start":{"row":6,"column":21},"end":{"row":6,"column":22},"action":"insert","lines":["_"]},{"start":{"row":6,"column":22},"end":{"row":6,"column":23},"action":"insert","lines":["t"]},{"start":{"row":6,"column":23},"end":{"row":6,"column":24},"action":"insert","lines":["r"]},{"start":{"row":6,"column":24},"end":{"row":6,"column":25},"action":"insert","lines":["a"]},{"start":{"row":6,"column":25},"end":{"row":6,"column":26},"action":"insert","lines":["i"]},{"start":{"row":6,"column":26},"end":{"row":6,"column":27},"action":"insert","lines":["t"]}],[{"start":{"row":6,"column":27},"end":{"row":6,"column":28},"action":"insert","lines":[";"],"id":27}],[{"start":{"row":6,"column":28},"end":{"row":6,"column":32},"action":"remove","lines":["    "],"id":28},{"start":{"row":6,"column":28},"end":{"row":7,"column":0},"action":"insert","lines":["",""]},{"start":{"row":7,"column":0},"end":{"row":7,"column":4},"action":"insert","lines":["    "]},{"start":{"row":7,"column":4},"end":{"row":8,"column":0},"action":"insert","lines":["",""]},{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":8,"column":4},"end":{"row":8,"column":5},"action":"insert","lines":["S"],"id":29},{"start":{"row":8,"column":5},"end":{"row":8,"column":6},"action":"insert","lines":["e"]},{"start":{"row":8,"column":6},"end":{"row":8,"column":7},"action":"insert","lines":["t"]}],[{"start":{"row":8,"column":6},"end":{"row":8,"column":7},"action":"remove","lines":["t"],"id":30},{"start":{"row":8,"column":5},"end":{"row":8,"column":6},"action":"remove","lines":["e"]},{"start":{"row":8,"column":4},"end":{"row":8,"column":5},"action":"remove","lines":["S"]}],[{"start":{"row":8,"column":4},"end":{"row":8,"column":5},"action":"insert","lines":["p"],"id":31},{"start":{"row":8,"column":5},"end":{"row":8,"column":6},"action":"insert","lines":["u"]},{"start":{"row":8,"column":6},"end":{"row":8,"column":7},"action":"insert","lines":["b"]},{"start":{"row":8,"column":7},"end":{"row":8,"column":8},"action":"insert","lines":["l"]},{"start":{"row":8,"column":8},"end":{"row":8,"column":9},"action":"insert","lines":["i"]},{"start":{"row":8,"column":9},"end":{"row":8,"column":10},"action":"insert","lines":["c"]}],[{"start":{"row":8,"column":10},"end":{"row":8,"column":11},"action":"insert","lines":[" "],"id":32}],[{"start":{"row":8,"column":10},"end":{"row":8,"column":11},"action":"remove","lines":[" "],"id":33},{"start":{"row":8,"column":9},"end":{"row":8,"column":10},"action":"remove","lines":["c"]},{"start":{"row":8,"column":8},"end":{"row":8,"column":9},"action":"remove","lines":["i"]},{"start":{"row":8,"column":7},"end":{"row":8,"column":8},"action":"remove","lines":["l"]},{"start":{"row":8,"column":6},"end":{"row":8,"column":7},"action":"remove","lines":["b"]},{"start":{"row":8,"column":5},"end":{"row":8,"column":6},"action":"remove","lines":["u"]},{"start":{"row":8,"column":4},"end":{"row":8,"column":5},"action":"remove","lines":["p"]}],[{"start":{"row":8,"column":4},"end":{"row":8,"column":5},"action":"insert","lines":["P"],"id":34},{"start":{"row":8,"column":5},"end":{"row":8,"column":6},"action":"insert","lines":["r"]},{"start":{"row":8,"column":6},"end":{"row":8,"column":7},"action":"insert","lines":["i"]}],[{"start":{"row":8,"column":6},"end":{"row":8,"column":7},"action":"remove","lines":["i"],"id":35},{"start":{"row":8,"column":5},"end":{"row":8,"column":6},"action":"remove","lines":["r"]},{"start":{"row":8,"column":4},"end":{"row":8,"column":5},"action":"remove","lines":["P"]}],[{"start":{"row":8,"column":4},"end":{"row":8,"column":5},"action":"insert","lines":["p"],"id":36},{"start":{"row":8,"column":5},"end":{"row":8,"column":6},"action":"insert","lines":["r"]},{"start":{"row":8,"column":6},"end":{"row":8,"column":7},"action":"insert","lines":["i"]},{"start":{"row":8,"column":7},"end":{"row":8,"column":8},"action":"insert","lines":["v"]},{"start":{"row":8,"column":8},"end":{"row":8,"column":9},"action":"insert","lines":["a"]},{"start":{"row":8,"column":9},"end":{"row":8,"column":10},"action":"insert","lines":["t"]},{"start":{"row":8,"column":10},"end":{"row":8,"column":11},"action":"insert","lines":["e"]}],[{"start":{"row":8,"column":11},"end":{"row":8,"column":12},"action":"insert","lines":[" "],"id":37},{"start":{"row":8,"column":12},"end":{"row":8,"column":13},"action":"insert","lines":["f"]},{"start":{"row":8,"column":13},"end":{"row":8,"column":14},"action":"insert","lines":["u"]},{"start":{"row":8,"column":14},"end":{"row":8,"column":15},"action":"insert","lines":["n"]},{"start":{"row":8,"column":15},"end":{"row":8,"column":16},"action":"insert","lines":["c"]},{"start":{"row":8,"column":16},"end":{"row":8,"column":17},"action":"insert","lines":["t"]},{"start":{"row":8,"column":17},"end":{"row":8,"column":18},"action":"insert","lines":["i"]},{"start":{"row":8,"column":18},"end":{"row":8,"column":19},"action":"insert","lines":["o"]},{"start":{"row":8,"column":19},"end":{"row":8,"column":20},"action":"insert","lines":["n"]}],[{"start":{"row":8,"column":20},"end":{"row":8,"column":21},"action":"insert","lines":[" "],"id":38},{"start":{"row":8,"column":21},"end":{"row":8,"column":22},"action":"insert","lines":["g"]},{"start":{"row":8,"column":22},"end":{"row":8,"column":23},"action":"insert","lines":["e"]},{"start":{"row":8,"column":23},"end":{"row":8,"column":24},"action":"insert","lines":["t"]},{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"insert","lines":["C"]},{"start":{"row":8,"column":25},"end":{"row":8,"column":26},"action":"insert","lines":["r"]},{"start":{"row":8,"column":26},"end":{"row":8,"column":27},"action":"insert","lines":["e"]},{"start":{"row":8,"column":27},"end":{"row":8,"column":28},"action":"insert","lines":["a"]},{"start":{"row":8,"column":28},"end":{"row":8,"column":29},"action":"insert","lines":["t"]},{"start":{"row":8,"column":29},"end":{"row":8,"column":30},"action":"insert","lines":["e"]}],[{"start":{"row":8,"column":30},"end":{"row":8,"column":31},"action":"insert","lines":["d"],"id":39},{"start":{"row":8,"column":31},"end":{"row":8,"column":32},"action":"insert","lines":["D"]},{"start":{"row":8,"column":32},"end":{"row":8,"column":33},"action":"insert","lines":["a"]},{"start":{"row":8,"column":33},"end":{"row":8,"column":34},"action":"insert","lines":["t"]},{"start":{"row":8,"column":34},"end":{"row":8,"column":35},"action":"insert","lines":["e"]}],[{"start":{"row":8,"column":35},"end":{"row":8,"column":37},"action":"insert","lines":["()"],"id":40}],[{"start":{"row":8,"column":37},"end":{"row":8,"column":38},"action":"insert","lines":[":"],"id":41}],[{"start":{"row":8,"column":38},"end":{"row":8,"column":39},"action":"insert","lines":[" "],"id":42},{"start":{"row":8,"column":39},"end":{"row":8,"column":40},"action":"insert","lines":["s"]},{"start":{"row":8,"column":40},"end":{"row":8,"column":41},"action":"insert","lines":["t"]},{"start":{"row":8,"column":41},"end":{"row":8,"column":42},"action":"insert","lines":["r"]},{"start":{"row":8,"column":42},"end":{"row":8,"column":43},"action":"insert","lines":["i"]},{"start":{"row":8,"column":43},"end":{"row":8,"column":44},"action":"insert","lines":["n"]},{"start":{"row":8,"column":44},"end":{"row":8,"column":45},"action":"insert","lines":["g"]}],[{"start":{"row":8,"column":44},"end":{"row":8,"column":45},"action":"remove","lines":["g"],"id":43},{"start":{"row":8,"column":43},"end":{"row":8,"column":44},"action":"remove","lines":["n"]},{"start":{"row":8,"column":42},"end":{"row":8,"column":43},"action":"remove","lines":["i"]},{"start":{"row":8,"column":41},"end":{"row":8,"column":42},"action":"remove","lines":["r"]},{"start":{"row":8,"column":40},"end":{"row":8,"column":41},"action":"remove","lines":["t"]},{"start":{"row":8,"column":39},"end":{"row":8,"column":40},"action":"remove","lines":["s"]}],[{"start":{"row":8,"column":39},"end":{"row":8,"column":40},"action":"insert","lines":["D"],"id":44},{"start":{"row":8,"column":40},"end":{"row":8,"column":41},"action":"insert","lines":["a"]},{"start":{"row":8,"column":41},"end":{"row":8,"column":42},"action":"insert","lines":["t"]},{"start":{"row":8,"column":42},"end":{"row":8,"column":43},"action":"insert","lines":["e"]},{"start":{"row":8,"column":43},"end":{"row":8,"column":44},"action":"insert","lines":["T"]},{"start":{"row":8,"column":44},"end":{"row":8,"column":45},"action":"insert","lines":["i"]},{"start":{"row":8,"column":45},"end":{"row":8,"column":46},"action":"insert","lines":["m"]}],[{"start":{"row":8,"column":46},"end":{"row":8,"column":47},"action":"insert","lines":["e"],"id":45}],[{"start":{"row":8,"column":47},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":46},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"remove","lines":["    "],"id":47},{"start":{"row":8,"column":47},"end":{"row":9,"column":0},"action":"remove","lines":["",""]},{"start":{"row":8,"column":46},"end":{"row":8,"column":47},"action":"remove","lines":["e"]}],[{"start":{"row":8,"column":46},"end":{"row":8,"column":47},"action":"insert","lines":["e"],"id":48},{"start":{"row":8,"column":47},"end":{"row":8,"column":48},"action":"insert","lines":["I"]},{"start":{"row":8,"column":48},"end":{"row":8,"column":49},"action":"insert","lines":["n"]},{"start":{"row":8,"column":49},"end":{"row":8,"column":50},"action":"insert","lines":["t"]},{"start":{"row":8,"column":50},"end":{"row":8,"column":51},"action":"insert","lines":["e"]},{"start":{"row":8,"column":51},"end":{"row":8,"column":52},"action":"insert","lines":["r"]},{"start":{"row":8,"column":52},"end":{"row":8,"column":53},"action":"insert","lines":["f"]},{"start":{"row":8,"column":53},"end":{"row":8,"column":54},"action":"insert","lines":["a"]},{"start":{"row":8,"column":54},"end":{"row":8,"column":55},"action":"insert","lines":["c"]},{"start":{"row":8,"column":55},"end":{"row":8,"column":56},"action":"insert","lines":["e"]}],[{"start":{"row":8,"column":56},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":49},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "]},{"start":{"row":9,"column":4},"end":{"row":9,"column":5},"action":"insert","lines":["{"]}],[{"start":{"row":9,"column":5},"end":{"row":11,"column":5},"action":"insert","lines":["","        ","    }"],"id":50}],[{"start":{"row":10,"column":8},"end":{"row":10,"column":9},"action":"insert","lines":["r"],"id":51},{"start":{"row":10,"column":9},"end":{"row":10,"column":10},"action":"insert","lines":["e"]},{"start":{"row":10,"column":10},"end":{"row":10,"column":11},"action":"insert","lines":["t"]},{"start":{"row":10,"column":11},"end":{"row":10,"column":12},"action":"insert","lines":["u"]},{"start":{"row":10,"column":12},"end":{"row":10,"column":13},"action":"insert","lines":["r"]},{"start":{"row":10,"column":13},"end":{"row":10,"column":14},"action":"insert","lines":["n"]}],[{"start":{"row":10,"column":14},"end":{"row":10,"column":15},"action":"insert","lines":[" "],"id":52},{"start":{"row":10,"column":15},"end":{"row":10,"column":16},"action":"insert","lines":["$"]},{"start":{"row":10,"column":16},"end":{"row":10,"column":17},"action":"insert","lines":["d"]},{"start":{"row":10,"column":17},"end":{"row":10,"column":18},"action":"insert","lines":["a"]},{"start":{"row":10,"column":18},"end":{"row":10,"column":19},"action":"insert","lines":["t"]}],[{"start":{"row":10,"column":18},"end":{"row":10,"column":19},"action":"remove","lines":["t"],"id":53},{"start":{"row":10,"column":17},"end":{"row":10,"column":18},"action":"remove","lines":["a"]},{"start":{"row":10,"column":16},"end":{"row":10,"column":17},"action":"remove","lines":["d"]}],[{"start":{"row":10,"column":16},"end":{"row":10,"column":17},"action":"insert","lines":["_"],"id":54}],[{"start":{"row":10,"column":15},"end":{"row":10,"column":17},"action":"remove","lines":["$_"],"id":55},{"start":{"row":10,"column":15},"end":{"row":10,"column":30},"action":"insert","lines":["$_history_trait"]}],[{"start":{"row":10,"column":30},"end":{"row":10,"column":31},"action":"insert","lines":["-"],"id":56},{"start":{"row":10,"column":31},"end":{"row":10,"column":32},"action":"insert","lines":[">"]},{"start":{"row":10,"column":32},"end":{"row":10,"column":33},"action":"insert","lines":["d"]},{"start":{"row":10,"column":33},"end":{"row":10,"column":34},"action":"insert","lines":["a"]},{"start":{"row":10,"column":34},"end":{"row":10,"column":35},"action":"insert","lines":["t"]},{"start":{"row":10,"column":35},"end":{"row":10,"column":36},"action":"insert","lines":["e"]}],[{"start":{"row":10,"column":35},"end":{"row":10,"column":36},"action":"remove","lines":["e"],"id":57},{"start":{"row":10,"column":34},"end":{"row":10,"column":35},"action":"remove","lines":["t"]},{"start":{"row":10,"column":33},"end":{"row":10,"column":34},"action":"remove","lines":["a"]},{"start":{"row":10,"column":32},"end":{"row":10,"column":33},"action":"remove","lines":["d"]}],[{"start":{"row":10,"column":32},"end":{"row":10,"column":33},"action":"insert","lines":["c"],"id":58},{"start":{"row":10,"column":33},"end":{"row":10,"column":34},"action":"insert","lines":["r"]},{"start":{"row":10,"column":34},"end":{"row":10,"column":35},"action":"insert","lines":["e"]},{"start":{"row":10,"column":35},"end":{"row":10,"column":36},"action":"insert","lines":["a"]},{"start":{"row":10,"column":36},"end":{"row":10,"column":37},"action":"insert","lines":["t"]},{"start":{"row":10,"column":37},"end":{"row":10,"column":38},"action":"insert","lines":["e"]},{"start":{"row":10,"column":38},"end":{"row":10,"column":39},"action":"insert","lines":["d"]}],[{"start":{"row":10,"column":38},"end":{"row":10,"column":39},"action":"remove","lines":["d"],"id":59},{"start":{"row":10,"column":37},"end":{"row":10,"column":38},"action":"remove","lines":["e"]},{"start":{"row":10,"column":36},"end":{"row":10,"column":37},"action":"remove","lines":["t"]},{"start":{"row":10,"column":35},"end":{"row":10,"column":36},"action":"remove","lines":["a"]},{"start":{"row":10,"column":34},"end":{"row":10,"column":35},"action":"remove","lines":["e"]},{"start":{"row":10,"column":33},"end":{"row":10,"column":34},"action":"remove","lines":["r"]},{"start":{"row":10,"column":32},"end":{"row":10,"column":33},"action":"remove","lines":["c"]},{"start":{"row":10,"column":31},"end":{"row":10,"column":32},"action":"remove","lines":[">"]},{"start":{"row":10,"column":30},"end":{"row":10,"column":31},"action":"remove","lines":["-"]}],[{"start":{"row":10,"column":30},"end":{"row":10,"column":32},"action":"insert","lines":["[]"],"id":60}],[{"start":{"row":10,"column":31},"end":{"row":10,"column":32},"action":"insert","lines":[" "],"id":61}],[{"start":{"row":10,"column":32},"end":{"row":10,"column":34},"action":"insert","lines":["\"\""],"id":62}],[{"start":{"row":10,"column":33},"end":{"row":10,"column":34},"action":"insert","lines":["d"],"id":63},{"start":{"row":10,"column":34},"end":{"row":10,"column":35},"action":"insert","lines":["a"]},{"start":{"row":10,"column":35},"end":{"row":10,"column":36},"action":"insert","lines":["t"]},{"start":{"row":10,"column":36},"end":{"row":10,"column":37},"action":"insert","lines":["e"]},{"start":{"row":10,"column":37},"end":{"row":10,"column":38},"action":"insert","lines":["_"]}],[{"start":{"row":10,"column":37},"end":{"row":10,"column":38},"action":"remove","lines":["_"],"id":64},{"start":{"row":10,"column":36},"end":{"row":10,"column":37},"action":"remove","lines":["e"]},{"start":{"row":10,"column":35},"end":{"row":10,"column":36},"action":"remove","lines":["t"]},{"start":{"row":10,"column":34},"end":{"row":10,"column":35},"action":"remove","lines":["a"]}],[{"start":{"row":10,"column":34},"end":{"row":10,"column":35},"action":"insert","lines":["c"],"id":65}],[{"start":{"row":10,"column":34},"end":{"row":10,"column":35},"action":"remove","lines":["c"],"id":66},{"start":{"row":10,"column":33},"end":{"row":10,"column":34},"action":"remove","lines":["d"]}],[{"start":{"row":10,"column":33},"end":{"row":10,"column":34},"action":"insert","lines":["c"],"id":67},{"start":{"row":10,"column":34},"end":{"row":10,"column":35},"action":"insert","lines":["r"]},{"start":{"row":10,"column":35},"end":{"row":10,"column":36},"action":"insert","lines":["e"]},{"start":{"row":10,"column":36},"end":{"row":10,"column":37},"action":"insert","lines":["a"]},{"start":{"row":10,"column":37},"end":{"row":10,"column":38},"action":"insert","lines":["t"]},{"start":{"row":10,"column":38},"end":{"row":10,"column":39},"action":"insert","lines":["e"]},{"start":{"row":10,"column":39},"end":{"row":10,"column":40},"action":"insert","lines":["d"]},{"start":{"row":10,"column":40},"end":{"row":10,"column":41},"action":"insert","lines":["_"]}],[{"start":{"row":10,"column":40},"end":{"row":10,"column":41},"action":"remove","lines":["_"],"id":68}],[{"start":{"row":10,"column":42},"end":{"row":10,"column":43},"action":"insert","lines":[";"],"id":69}],[{"start":{"row":11,"column":5},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":70},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]},{"start":{"row":12,"column":4},"end":{"row":13,"column":0},"action":"insert","lines":["",""]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]},{"start":{"row":13,"column":4},"end":{"row":14,"column":0},"action":"insert","lines":["",""]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]},{"start":{"row":14,"column":4},"end":{"row":15,"column":0},"action":"insert","lines":["",""]},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"remove","lines":["    "],"id":71},{"start":{"row":13,"column":0},"end":{"row":16,"column":5},"action":"insert","lines":["    private function getCreatedDate(): DateTimeInterface","    {","        return $_history_trait[ \"created\"];","    }"]}],[{"start":{"row":13,"column":24},"end":{"row":13,"column":31},"action":"remove","lines":["Created"],"id":72},{"start":{"row":13,"column":24},"end":{"row":13,"column":25},"action":"insert","lines":["U"]},{"start":{"row":13,"column":25},"end":{"row":13,"column":26},"action":"insert","lines":["p"]},{"start":{"row":13,"column":26},"end":{"row":13,"column":27},"action":"insert","lines":["d"]},{"start":{"row":13,"column":27},"end":{"row":13,"column":28},"action":"insert","lines":["a"]},{"start":{"row":13,"column":28},"end":{"row":13,"column":29},"action":"insert","lines":["t"]},{"start":{"row":13,"column":29},"end":{"row":13,"column":30},"action":"insert","lines":["e"]}],[{"start":{"row":15,"column":33},"end":{"row":15,"column":40},"action":"remove","lines":["created"],"id":73},{"start":{"row":15,"column":33},"end":{"row":15,"column":34},"action":"insert","lines":["u"]},{"start":{"row":15,"column":34},"end":{"row":15,"column":35},"action":"insert","lines":["p"]},{"start":{"row":15,"column":35},"end":{"row":15,"column":36},"action":"insert","lines":["d"]},{"start":{"row":15,"column":36},"end":{"row":15,"column":37},"action":"insert","lines":["a"]},{"start":{"row":15,"column":37},"end":{"row":15,"column":38},"action":"insert","lines":["t"]},{"start":{"row":15,"column":38},"end":{"row":15,"column":39},"action":"insert","lines":["e"]},{"start":{"row":15,"column":39},"end":{"row":15,"column":40},"action":"insert","lines":["d"]}],[{"start":{"row":18,"column":0},"end":{"row":18,"column":3},"action":"remove","lines":["   "],"id":74},{"start":{"row":18,"column":0},"end":{"row":21,"column":5},"action":"insert","lines":["    private function getUpdateDate(): DateTimeInterface","    {","        return $_history_trait[ \"updated\"];","    }"]}],[{"start":{"row":18,"column":30},"end":{"row":18,"column":31},"action":"insert","lines":["d"],"id":75}],[{"start":{"row":13,"column":30},"end":{"row":13,"column":31},"action":"insert","lines":["d"],"id":76}],[{"start":{"row":18,"column":31},"end":{"row":18,"column":35},"action":"remove","lines":["Date"],"id":77},{"start":{"row":18,"column":31},"end":{"row":18,"column":32},"action":"insert","lines":["B"]},{"start":{"row":18,"column":32},"end":{"row":18,"column":33},"action":"insert","lines":["y"]}],[{"start":{"row":20,"column":40},"end":{"row":20,"column":41},"action":"insert","lines":["_"],"id":78},{"start":{"row":20,"column":41},"end":{"row":20,"column":42},"action":"insert","lines":["b"]},{"start":{"row":20,"column":42},"end":{"row":20,"column":43},"action":"insert","lines":["y"]}],[{"start":{"row":18,"column":37},"end":{"row":18,"column":54},"action":"remove","lines":["DateTimeInterface"],"id":79},{"start":{"row":18,"column":37},"end":{"row":18,"column":38},"action":"insert","lines":["s"]},{"start":{"row":18,"column":38},"end":{"row":18,"column":39},"action":"insert","lines":["t"]},{"start":{"row":18,"column":39},"end":{"row":18,"column":40},"action":"insert","lines":["r"]},{"start":{"row":18,"column":40},"end":{"row":18,"column":41},"action":"insert","lines":["i"]},{"start":{"row":18,"column":41},"end":{"row":18,"column":42},"action":"insert","lines":["n"]},{"start":{"row":18,"column":42},"end":{"row":18,"column":43},"action":"insert","lines":["g"]}],[{"start":{"row":11,"column":5},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":80},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]},{"start":{"row":12,"column":4},"end":{"row":13,"column":0},"action":"insert","lines":["",""]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":13,"column":0},"end":{"row":16,"column":5},"action":"insert","lines":["    private function getCreatedDate(): DateTimeInterface","    {","        return $_history_trait[ \"created\"];","    }"],"id":81}],[{"start":{"row":15,"column":40},"end":{"row":15,"column":41},"action":"insert","lines":["_"],"id":82},{"start":{"row":15,"column":41},"end":{"row":15,"column":42},"action":"insert","lines":["b"]},{"start":{"row":15,"column":42},"end":{"row":15,"column":43},"action":"insert","lines":["y"]}],[{"start":{"row":13,"column":31},"end":{"row":13,"column":35},"action":"remove","lines":["Date"],"id":83},{"start":{"row":13,"column":31},"end":{"row":13,"column":32},"action":"insert","lines":["B"]},{"start":{"row":13,"column":32},"end":{"row":13,"column":33},"action":"insert","lines":["y"]}],[{"start":{"row":13,"column":37},"end":{"row":13,"column":54},"action":"remove","lines":["DateTimeInterface"],"id":84},{"start":{"row":13,"column":37},"end":{"row":13,"column":38},"action":"insert","lines":["s"]},{"start":{"row":13,"column":38},"end":{"row":13,"column":39},"action":"insert","lines":["t"]},{"start":{"row":13,"column":39},"end":{"row":13,"column":40},"action":"insert","lines":["r"]},{"start":{"row":13,"column":40},"end":{"row":13,"column":41},"action":"insert","lines":["i"]},{"start":{"row":13,"column":41},"end":{"row":13,"column":42},"action":"insert","lines":["n"]},{"start":{"row":13,"column":42},"end":{"row":13,"column":43},"action":"insert","lines":["g"]}],[{"start":{"row":23,"column":4},"end":{"row":23,"column":11},"action":"remove","lines":["private"],"id":85},{"start":{"row":23,"column":4},"end":{"row":23,"column":5},"action":"insert","lines":["p"]},{"start":{"row":23,"column":5},"end":{"row":23,"column":6},"action":"insert","lines":["u"]},{"start":{"row":23,"column":6},"end":{"row":23,"column":7},"action":"insert","lines":["b"]},{"start":{"row":23,"column":7},"end":{"row":23,"column":8},"action":"insert","lines":["l"]},{"start":{"row":23,"column":8},"end":{"row":23,"column":9},"action":"insert","lines":["i"]},{"start":{"row":23,"column":9},"end":{"row":23,"column":10},"action":"insert","lines":["c"]}],[{"start":{"row":18,"column":10},"end":{"row":18,"column":11},"action":"remove","lines":["e"],"id":86},{"start":{"row":18,"column":9},"end":{"row":18,"column":10},"action":"remove","lines":["t"]},{"start":{"row":18,"column":8},"end":{"row":18,"column":9},"action":"remove","lines":["a"]},{"start":{"row":18,"column":7},"end":{"row":18,"column":8},"action":"remove","lines":["v"]},{"start":{"row":18,"column":6},"end":{"row":18,"column":7},"action":"remove","lines":["i"]},{"start":{"row":18,"column":5},"end":{"row":18,"column":6},"action":"remove","lines":["r"]},{"start":{"row":18,"column":4},"end":{"row":18,"column":5},"action":"remove","lines":["p"]}],[{"start":{"row":18,"column":4},"end":{"row":18,"column":5},"action":"insert","lines":["p"],"id":87},{"start":{"row":18,"column":5},"end":{"row":18,"column":6},"action":"insert","lines":["u"]},{"start":{"row":18,"column":6},"end":{"row":18,"column":7},"action":"insert","lines":["b"]},{"start":{"row":18,"column":7},"end":{"row":18,"column":8},"action":"insert","lines":["l"]},{"start":{"row":18,"column":8},"end":{"row":18,"column":9},"action":"insert","lines":["i"]},{"start":{"row":18,"column":9},"end":{"row":18,"column":10},"action":"insert","lines":["c"]}],[{"start":{"row":13,"column":10},"end":{"row":13,"column":11},"action":"remove","lines":["e"],"id":88},{"start":{"row":13,"column":9},"end":{"row":13,"column":10},"action":"remove","lines":["t"]},{"start":{"row":13,"column":8},"end":{"row":13,"column":9},"action":"remove","lines":["a"]},{"start":{"row":13,"column":7},"end":{"row":13,"column":8},"action":"remove","lines":["v"]},{"start":{"row":13,"column":6},"end":{"row":13,"column":7},"action":"remove","lines":["i"]},{"start":{"row":13,"column":5},"end":{"row":13,"column":6},"action":"remove","lines":["r"]},{"start":{"row":13,"column":4},"end":{"row":13,"column":5},"action":"remove","lines":["p"]}],[{"start":{"row":13,"column":4},"end":{"row":13,"column":5},"action":"insert","lines":["p"],"id":89},{"start":{"row":13,"column":5},"end":{"row":13,"column":6},"action":"insert","lines":["u"]}],[{"start":{"row":13,"column":4},"end":{"row":13,"column":6},"action":"remove","lines":["pu"],"id":90},{"start":{"row":13,"column":4},"end":{"row":13,"column":10},"action":"insert","lines":["public"]}],[{"start":{"row":8,"column":4},"end":{"row":8,"column":11},"action":"remove","lines":["private"],"id":91},{"start":{"row":8,"column":4},"end":{"row":8,"column":5},"action":"insert","lines":["p"]},{"start":{"row":8,"column":5},"end":{"row":8,"column":6},"action":"insert","lines":["u"]},{"start":{"row":8,"column":6},"end":{"row":8,"column":7},"action":"insert","lines":["b"]}],[{"start":{"row":8,"column":4},"end":{"row":8,"column":7},"action":"remove","lines":["pub"],"id":92},{"start":{"row":8,"column":4},"end":{"row":8,"column":10},"action":"insert","lines":["public"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":8,"column":10},"end":{"row":8,"column":10},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1619631575140,"hash":"069f1878c4bcab67b6fd46b2483ccba682290fb1"}