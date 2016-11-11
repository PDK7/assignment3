<?php
class StoryMaker {
  protected $name1 = "RAWR!";
  protected $name2;
  protected $noun1;
  protected $noun2;
  protected $vehicle;
  protected $beverage;

  public function __construct($name1, $name2, $noun1, $noun2, $vehicle, $beverage) {
    $this->name1 = $name1;
    $this->name2 = $name2;
    $this->noun1 = $noun1;
    $this->noun2 = $noun2;
    $this->vehicle = $vehicle;
    $this->beverage = $beverage;
  }

  public function introduction() {
    return "There once were two friends named $this->name1 and $this->name2.";
  }
  
  public function exposition() {
    return "The two of them decided it would be a good idea to steal some $this->noun1 from $this->noun1 APALOOZA.";
  }

  public function climax() {
    return "They managed to steal an 18-wheeler that was destined for $this->noun1 PALOOZA $this->name1 stole a $this->vehicle and fled the scene of the crime. $this->name2 however, was caught!";
  }

  public function denoument() {
    return "Now $this->name2 is serving 20 to life, even though, in the end, it turned out that the truck was actually carrying $this->noun2 instead! Poor $this->name2 can\'t even have his favorite beverage, $this->beverage in the joint.";
  }

  public function __toString() {
    return "This story's actors were $this->name1 and $this->name2. It revolved around $this->noun1 and $this->noun2 and also involved delicious $this->beverage and $this->vehicle.";
  }

  public function __clone() {
    return $this->__construct($this->name1, $this->name2, $this->noun1, $this->noun2, $this->vehicle, $this->beverage);
  }
}
?>
