<?php 

// When a class needs a lot of data to be created or needs complex processing
// The factory pattern is better than a classic class.

/* Classic class */

class Automobile {

    private $vehicleMake;
    private $vehicleModel;

    public function __construct($make, $model) {
        $this->vehicleMake = $make;
        $this->vehicleModel = $model;
    }

    public function getMakeAndModel() {
        return $this->vehicleMake.' - '.$this->vehicleModel;
    }
}

/* Factory pattern */

class AutomobileFactory {

    private static $model;

    public static function create($make) {
        self::$model = date('Y');
        return new Automobile($make, self::$model);
    }
}

$renault = new Automobile("Renault", 2019);
$toyota = AutomobileFactory::create("Toyota");