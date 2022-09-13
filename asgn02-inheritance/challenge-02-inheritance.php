<?php

class Bird {
  public $name;
  public $color;
  public $location;
  public $height;
  protected $canFly = true;
  
}

class Flamingos extends Bird {
  private $region;
  public $color = 'Pink';
  
  public function florida() {
    if ($region = 'North Ameica') {
      echo ('Wild $name who are found in North America resides in the south of Florida.');
    }
  }
}

class Kiwis extends Bird {
  protected var $canFly = false;
  public var $location = 'New Zealand';
}

$americanFlamingo = new Flamingos;
$americanFlamingo->name = 'American Flamingo';
$americanFlamingo->color = 'Pink';
$americanFlamingo->location = 'North and South America';
$americanFlamingo->height = '120 to 145 cm';
$americanFlamingo->canFly = true;
$americanFlamingo->region = 'North America';

$greatSpotted = new Kiwis;
$greatSpotted->name = 'Great Spotted Kiwi';
$greatSpotted->color = 'Grey-brown with lighter bands';
$greatSpotted->location = 'New Zealand';
$greatSpotted->height = '~45 cm';
$greatSpotted->canFly = false;

echo $americanFlamingo->name. '<br />'; 
echo get_parent_class($americanFlamingo) . '<br />';

echo $greatSpotted->name . '<br />';
echo get_parent_class($greatSpotted) . '<br />';

