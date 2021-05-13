{"filter":false,"title":"DateTimeDataTransferObject.php","tooltip":"/Domain/Boundary/Infrastructure/DateTime/DateTimeDataTransferObject.php","undoManager":{"mark":38,"position":38,"stack":[[{"start":{"row":11,"column":24},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]},{"start":{"row":12,"column":4},"end":{"row":13,"column":0},"action":"insert","lines":["",""]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":13,"column":0},"end":{"row":27,"column":7},"action":"insert","lines":["    public function duplicate( HistoryDataTransferObject $original ): HistoryDataTransferObject","    {","        $duplicate = new HistoryDataTransferObject;","        $duplicate->created_date = $original->created_date->duplicate();","        $duplicate->created_by = $original->created_by;","        ","        $duplicate->updated_date = null;","        if( $original->updated_date )","        {","            $duplicate->updated_date = $original->updated_date->duplicate();","        }","        $duplicate->updated_by = $original->updated_by;","        ","        return $duplicate;","    }  "],"id":3}],[{"start":{"row":13,"column":31},"end":{"row":13,"column":37},"action":"remove","lines":["Histor"],"id":4},{"start":{"row":13,"column":31},"end":{"row":13,"column":32},"action":"insert","lines":["D"]},{"start":{"row":13,"column":32},"end":{"row":13,"column":33},"action":"insert","lines":["a"]},{"start":{"row":13,"column":33},"end":{"row":13,"column":34},"action":"insert","lines":["t"]},{"start":{"row":13,"column":34},"end":{"row":13,"column":35},"action":"insert","lines":["e"]},{"start":{"row":13,"column":35},"end":{"row":13,"column":36},"action":"insert","lines":["T"]},{"start":{"row":13,"column":36},"end":{"row":13,"column":37},"action":"insert","lines":["i"]},{"start":{"row":13,"column":37},"end":{"row":13,"column":38},"action":"insert","lines":["m"]},{"start":{"row":13,"column":38},"end":{"row":13,"column":39},"action":"insert","lines":["e"]}],[{"start":{"row":13,"column":39},"end":{"row":13,"column":40},"action":"remove","lines":["y"],"id":5}],[{"start":{"row":13,"column":71},"end":{"row":13,"column":78},"action":"remove","lines":["History"],"id":6},{"start":{"row":13,"column":71},"end":{"row":13,"column":72},"action":"insert","lines":["D"]},{"start":{"row":13,"column":72},"end":{"row":13,"column":73},"action":"insert","lines":["a"]},{"start":{"row":13,"column":73},"end":{"row":13,"column":74},"action":"insert","lines":["t"]},{"start":{"row":13,"column":74},"end":{"row":13,"column":75},"action":"insert","lines":["e"]}],[{"start":{"row":13,"column":71},"end":{"row":13,"column":93},"action":"remove","lines":["DateDataTransferObject"],"id":7},{"start":{"row":13,"column":71},"end":{"row":13,"column":97},"action":"insert","lines":["DateTimeDataTransferObject"]}],[{"start":{"row":15,"column":25},"end":{"row":15,"column":32},"action":"remove","lines":["History"],"id":8},{"start":{"row":15,"column":25},"end":{"row":15,"column":26},"action":"insert","lines":["D"]},{"start":{"row":15,"column":26},"end":{"row":15,"column":27},"action":"insert","lines":["a"]},{"start":{"row":15,"column":27},"end":{"row":15,"column":28},"action":"insert","lines":["t"]},{"start":{"row":15,"column":28},"end":{"row":15,"column":29},"action":"insert","lines":["e"]}],[{"start":{"row":15,"column":25},"end":{"row":15,"column":29},"action":"remove","lines":["Date"],"id":9},{"start":{"row":15,"column":25},"end":{"row":15,"column":33},"action":"insert","lines":["DateTime"]}],[{"start":{"row":17,"column":0},"end":{"row":17,"column":55},"action":"remove","lines":["        $duplicate->created_by = $original->created_by;"],"id":10}],[{"start":{"row":16,"column":20},"end":{"row":16,"column":32},"action":"remove","lines":["created_date"],"id":11},{"start":{"row":16,"column":20},"end":{"row":16,"column":21},"action":"insert","lines":["d"]}],[{"start":{"row":16,"column":21},"end":{"row":16,"column":22},"action":"insert","lines":["a"],"id":12},{"start":{"row":16,"column":22},"end":{"row":16,"column":23},"action":"insert","lines":["y"]}],[{"start":{"row":16,"column":51},"end":{"row":16,"column":62},"action":"remove","lines":["duplicate()"],"id":13},{"start":{"row":16,"column":51},"end":{"row":16,"column":52},"action":"insert","lines":["d"]},{"start":{"row":16,"column":52},"end":{"row":16,"column":53},"action":"insert","lines":["a"]},{"start":{"row":16,"column":53},"end":{"row":16,"column":54},"action":"insert","lines":["t"]}],[{"start":{"row":16,"column":53},"end":{"row":16,"column":54},"action":"remove","lines":["t"],"id":14}],[{"start":{"row":16,"column":53},"end":{"row":16,"column":54},"action":"insert","lines":["y"],"id":15}],[{"start":{"row":19,"column":0},"end":{"row":24,"column":55},"action":"remove","lines":["        $duplicate->updated_date = null;","        if( $original->updated_date )","        {","            $duplicate->updated_date = $original->updated_date->duplicate();","        }","        $duplicate->updated_by = $original->updated_by;"],"id":16}],[{"start":{"row":17,"column":0},"end":{"row":17,"column":55},"action":"insert","lines":["        $duplicate->day = $original->created_date->day;"],"id":17}],[{"start":{"row":17,"column":55},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":18},{"start":{"row":18,"column":0},"end":{"row":18,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":18,"column":0},"end":{"row":18,"column":55},"action":"insert","lines":["        $duplicate->day = $original->created_date->day;"],"id":19}],[{"start":{"row":18,"column":55},"end":{"row":18,"column":63},"action":"remove","lines":["        "],"id":20},{"start":{"row":18,"column":55},"end":{"row":19,"column":0},"action":"insert","lines":["",""]},{"start":{"row":19,"column":0},"end":{"row":19,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":19,"column":0},"end":{"row":19,"column":55},"action":"insert","lines":["        $duplicate->day = $original->created_date->day;"],"id":21}],[{"start":{"row":19,"column":55},"end":{"row":19,"column":63},"action":"remove","lines":["        "],"id":22},{"start":{"row":19,"column":55},"end":{"row":20,"column":0},"action":"insert","lines":["",""]},{"start":{"row":20,"column":0},"end":{"row":20,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":20,"column":0},"end":{"row":20,"column":55},"action":"insert","lines":["        $duplicate->day = $original->created_date->day;"],"id":23}],[{"start":{"row":20,"column":55},"end":{"row":20,"column":63},"action":"remove","lines":["        "],"id":24},{"start":{"row":20,"column":55},"end":{"row":21,"column":0},"action":"insert","lines":["",""]},{"start":{"row":21,"column":0},"end":{"row":21,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":21,"column":0},"end":{"row":21,"column":55},"action":"insert","lines":["        $duplicate->day = $original->created_date->day;"],"id":25}],[{"start":{"row":21,"column":55},"end":{"row":21,"column":56},"action":"remove","lines":[" "],"id":26},{"start":{"row":21,"column":55},"end":{"row":21,"column":56},"action":"remove","lines":[" "]},{"start":{"row":21,"column":55},"end":{"row":21,"column":56},"action":"remove","lines":[" "]},{"start":{"row":21,"column":55},"end":{"row":21,"column":56},"action":"remove","lines":[" "]},{"start":{"row":21,"column":55},"end":{"row":21,"column":56},"action":"remove","lines":[" "]},{"start":{"row":21,"column":55},"end":{"row":21,"column":56},"action":"remove","lines":[" "]},{"start":{"row":21,"column":55},"end":{"row":21,"column":56},"action":"remove","lines":[" "]}],[{"start":{"row":21,"column":55},"end":{"row":21,"column":56},"action":"remove","lines":[" "],"id":27},{"start":{"row":21,"column":55},"end":{"row":22,"column":8},"action":"remove","lines":["","        "]},{"start":{"row":21,"column":55},"end":{"row":22,"column":0},"action":"remove","lines":["",""]},{"start":{"row":21,"column":55},"end":{"row":22,"column":8},"action":"remove","lines":["","        "]},{"start":{"row":21,"column":55},"end":{"row":22,"column":0},"action":"remove","lines":["",""]},{"start":{"row":21,"column":55},"end":{"row":21,"column":56},"action":"remove","lines":[" "]},{"start":{"row":21,"column":55},"end":{"row":21,"column":56},"action":"remove","lines":[" "]}],[{"start":{"row":21,"column":55},"end":{"row":21,"column":61},"action":"remove","lines":["      "],"id":28},{"start":{"row":21,"column":55},"end":{"row":22,"column":0},"action":"insert","lines":["",""]},{"start":{"row":22,"column":0},"end":{"row":22,"column":8},"action":"insert","lines":["        "]},{"start":{"row":22,"column":8},"end":{"row":23,"column":0},"action":"insert","lines":["",""]},{"start":{"row":23,"column":0},"end":{"row":23,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":17,"column":20},"end":{"row":17,"column":23},"action":"remove","lines":["day"],"id":29},{"start":{"row":17,"column":20},"end":{"row":17,"column":21},"action":"insert","lines":["h"]},{"start":{"row":17,"column":21},"end":{"row":17,"column":22},"action":"insert","lines":["o"]},{"start":{"row":17,"column":22},"end":{"row":17,"column":23},"action":"insert","lines":["u"]},{"start":{"row":17,"column":23},"end":{"row":17,"column":24},"action":"insert","lines":["r"]}],[{"start":{"row":17,"column":52},"end":{"row":17,"column":55},"action":"remove","lines":["day"],"id":30},{"start":{"row":17,"column":52},"end":{"row":17,"column":53},"action":"insert","lines":["h"]},{"start":{"row":17,"column":53},"end":{"row":17,"column":54},"action":"insert","lines":["o"]},{"start":{"row":17,"column":54},"end":{"row":17,"column":55},"action":"insert","lines":["u"]},{"start":{"row":17,"column":55},"end":{"row":17,"column":56},"action":"insert","lines":["r"]}],[{"start":{"row":18,"column":20},"end":{"row":18,"column":23},"action":"remove","lines":["day"],"id":31},{"start":{"row":18,"column":20},"end":{"row":18,"column":21},"action":"insert","lines":["m"]},{"start":{"row":18,"column":21},"end":{"row":18,"column":22},"action":"insert","lines":["i"]},{"start":{"row":18,"column":22},"end":{"row":18,"column":23},"action":"insert","lines":["n"]},{"start":{"row":18,"column":23},"end":{"row":18,"column":24},"action":"insert","lines":["u"]},{"start":{"row":18,"column":24},"end":{"row":18,"column":25},"action":"insert","lines":["t"]},{"start":{"row":18,"column":25},"end":{"row":18,"column":26},"action":"insert","lines":["e"]}],[{"start":{"row":18,"column":54},"end":{"row":18,"column":56},"action":"remove","lines":["da"],"id":32},{"start":{"row":18,"column":54},"end":{"row":18,"column":55},"action":"remove","lines":["y"]}],[{"start":{"row":18,"column":54},"end":{"row":18,"column":55},"action":"insert","lines":["m"],"id":33},{"start":{"row":18,"column":55},"end":{"row":18,"column":56},"action":"insert","lines":["i"]},{"start":{"row":18,"column":56},"end":{"row":18,"column":57},"action":"insert","lines":["n"]},{"start":{"row":18,"column":57},"end":{"row":18,"column":58},"action":"insert","lines":["u"]},{"start":{"row":18,"column":58},"end":{"row":18,"column":59},"action":"insert","lines":["t"]},{"start":{"row":18,"column":59},"end":{"row":18,"column":60},"action":"insert","lines":["e"]}],[{"start":{"row":19,"column":20},"end":{"row":19,"column":23},"action":"remove","lines":["day"],"id":34},{"start":{"row":19,"column":20},"end":{"row":19,"column":21},"action":"insert","lines":["m"]},{"start":{"row":19,"column":21},"end":{"row":19,"column":22},"action":"insert","lines":["o"]},{"start":{"row":19,"column":22},"end":{"row":19,"column":23},"action":"insert","lines":["n"]},{"start":{"row":19,"column":23},"end":{"row":19,"column":24},"action":"insert","lines":["t"]},{"start":{"row":19,"column":24},"end":{"row":19,"column":25},"action":"insert","lines":["h"]}],[{"start":{"row":19,"column":53},"end":{"row":19,"column":56},"action":"remove","lines":["day"],"id":35},{"start":{"row":19,"column":53},"end":{"row":19,"column":54},"action":"insert","lines":["m"]},{"start":{"row":19,"column":54},"end":{"row":19,"column":55},"action":"insert","lines":["o"]},{"start":{"row":19,"column":55},"end":{"row":19,"column":56},"action":"insert","lines":["n"]},{"start":{"row":19,"column":56},"end":{"row":19,"column":57},"action":"insert","lines":["t"]},{"start":{"row":19,"column":57},"end":{"row":19,"column":58},"action":"insert","lines":["h"]}],[{"start":{"row":20,"column":20},"end":{"row":20,"column":23},"action":"remove","lines":["day"],"id":36},{"start":{"row":20,"column":20},"end":{"row":20,"column":21},"action":"insert","lines":["s"]},{"start":{"row":20,"column":21},"end":{"row":20,"column":22},"action":"insert","lines":["e"]},{"start":{"row":20,"column":22},"end":{"row":20,"column":23},"action":"insert","lines":["c"]},{"start":{"row":20,"column":23},"end":{"row":20,"column":24},"action":"insert","lines":["o"]},{"start":{"row":20,"column":24},"end":{"row":20,"column":25},"action":"insert","lines":["n"]},{"start":{"row":20,"column":25},"end":{"row":20,"column":26},"action":"insert","lines":["d"]}],[{"start":{"row":20,"column":54},"end":{"row":20,"column":57},"action":"remove","lines":["day"],"id":37},{"start":{"row":20,"column":54},"end":{"row":20,"column":55},"action":"insert","lines":["s"]},{"start":{"row":20,"column":55},"end":{"row":20,"column":56},"action":"insert","lines":["e"]}],[{"start":{"row":20,"column":54},"end":{"row":20,"column":56},"action":"remove","lines":["se"],"id":38},{"start":{"row":20,"column":54},"end":{"row":20,"column":60},"action":"insert","lines":["second"]}],[{"start":{"row":21,"column":20},"end":{"row":21,"column":23},"action":"remove","lines":["day"],"id":39},{"start":{"row":21,"column":20},"end":{"row":21,"column":21},"action":"insert","lines":["y"]},{"start":{"row":21,"column":21},"end":{"row":21,"column":22},"action":"insert","lines":["e"]},{"start":{"row":21,"column":22},"end":{"row":21,"column":23},"action":"insert","lines":["a"]},{"start":{"row":21,"column":23},"end":{"row":21,"column":24},"action":"insert","lines":["r"]}],[{"start":{"row":21,"column":52},"end":{"row":21,"column":55},"action":"remove","lines":["day"],"id":40},{"start":{"row":21,"column":52},"end":{"row":21,"column":53},"action":"insert","lines":["y"]},{"start":{"row":21,"column":53},"end":{"row":21,"column":54},"action":"insert","lines":["e"]},{"start":{"row":21,"column":54},"end":{"row":21,"column":55},"action":"insert","lines":["a"]},{"start":{"row":21,"column":55},"end":{"row":21,"column":56},"action":"insert","lines":["r"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":27,"column":0},"end":{"row":27,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1620662493706,"hash":"4e2b2114796664a14003f38bcdeb73c02f591d8f"}