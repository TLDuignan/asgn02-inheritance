<?php

class Bicycle {
  public $brand;
  public $model;
  public $year;
  public $description;
  private $weight_kg = 0.0;
  protected $wheels = 2;

  public function name() {
    return "This is a " . $this->weight_kg . " " . $this->description . " " . $this->year . " " . $this->brand . " " . $this->model . ".";
  }
  
  public function weight_lbs () {
    return floatval($this->weight_kg) * 2.2046226218 . " lbs";
  }
  
  public function set_weight_lbs($value) {
    $this->weight_kg = floatval($value) / 2.2046226218;
  }

  public function wheel_details() {
    $wheel_string = $this->wheels == 1 ? "1 wheel" : "{$this->wheels} wheels";
    return "It has " . $wheel_string . ".";
  }

  public function weight_kg() {
    return $this->weight_kg . ' kg';
  }

  public function set_weight_kg($value) {
    $this->weight_kg = floatval($value);
  }
}

class Unicycle extends Bicycle {
  protected $wheels = 1;
}



 
$bike = new Bicycle;
$bike->brand = 'Toyota';
$bike->model = 'Corolla';
$bike->year = '2014';
$bike->description = 'Red';
//$bike->weight_kg = "10";

$uni = new Unicycle;
$uni->brand = 'Toyota';
$uni->model = 'Prius';
$uni->year = '2009';
$uni->description = 'Silver';

echo "Bicycle: " . $bike->wheel_details() . "<br />";
echo "Unicycle: " . $uni->wheel_details() . "<br />";

echo "<strong>WEIGHT KG</strong> <br />";
$bike->set_weight_kg(5);
echo $bike->weight_kg() . "<br />";
echo $bike->weight_lbs() . "<br />";

echo "<strong>WEIGHT LB</strong> <br />";
$bike->set_weight_lbs(3);
echo $bike->weight_kg() . "<br />";
echo $bike->weight_lbs() . "<br />";




//echo $bike->name() . "<br>";
//echo $bike->weight_kg . "<br>";
//echo $bike->weight_lbs() . "<br>";

//$bike->set_weight_lbs(5);
//echo $bike->weight_kg . "<br>";
//echo $bike->weight_lbs() . "<br>";