<?php
class Avenger extends Superhero {

    public $team = 'Avengers';

    public function __construct($name, $gender, $oneliner)
    {
    parent::__construct($name, $gender, $this->team, $oneliner);
    }
    
    public function __toString() {
       return json_encode($this);
    }
}
