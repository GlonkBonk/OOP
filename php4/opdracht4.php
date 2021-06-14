<?php
class bucket {
 public $brand;
 public $color;
 public function __construct($name, $color) {
   $this->brand = $brand;
   $this->color = $color;
 }
 public function intro() {
   echo "The bucket is from {$this->name} and the color is {$this->color}.";
 }
}
// blokker is inherited from bucket
class blokker extends bucket {
 public function message() {
   echo "is this a bucket or a tub? ";
 }
}
$blokker = new blokker("blokker", "Orange");
$blokker->message();
$blokker->intro();
?>