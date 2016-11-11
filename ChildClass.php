<?php 
class HappyStoryMaker extends StoryMaker {

  private $branch;

  public function __construct($name1, $name2, $noun1, $noun2, $vehicle, $beverage) {
    parent::__construct($name1, $name2, $noun1, $noun2, $vehicle, $beverage);
    $this->branch = True;
  }

  public function exposition() {
    return "The two of them decided it would be a good idea to invest in $this->noun1. So they created $this->noun1 APALOOZIER!";
  }  

  public function climax() {
    return "But it turned out that the $this->noun1 they bought was actually $this->noun2! This was great news!";
  }  

  public function denoument() {
    if ($this->branch) {
      return "$this->name2 decided to cut $this->name1 out of the business. He took his millions and bought a $this->vehicle and gets a case of $this->beverage shipped to him everyday.";
    }
    else {
      return "$this->name2 decided to work with $this->name1 until the end of his days. Together they made billions of dollars and bought a $this->vehicle and a $this->beverage factory.";
    }
  }  

  public function change_ending() {
    $current_branch = $this->branch;
    $this->branch = !$current_branch;
  }
  
  public function __toString() {
    $part1 = parent::__toString();
    $intro = $this::introduction();
    $expo = $this::exposition();
    $clim = $this::climax();
    $denou = $this::denoument();
    $story_length = strlen($intro.$expo.$clim.$denou);
    $part2 = "This story had $story_length characters in it! I am so sorry!"; 
    return $part1."\n".$part2;
  }
}
?>
