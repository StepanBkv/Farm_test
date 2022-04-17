<?php
Class Chicken {
	private $number_chicken = 0;
	private $egg;
	public function __construct($number) {
		$this->number_chicken = $number;
		$this->egg = rand(0,1);
	}
	public function get_number_chicken() {
		return $this->number_chicken;
	}
	public function get_egg() {
		return $this->egg;
	}

}

Class Chicken_list extends Chicken {
	private $chicken_array = [];
	public function __construct(){
		return $this->chicken_array;
	}
	public function add_chicken($number){
		array_push($this->chicken_array, new Chicken($number));
		return $this->chicken_array;
	}

	public function get_egg_count($count){
		return $this->chicken_array[$count]->get_egg();
		return $this->chicken_array;
	}
}