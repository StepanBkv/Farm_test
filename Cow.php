<?php

Class Cow {
	private $number_cow = 0;
	private $milk;
	public function __construct($number) {
		$this->number_cow = $number;
		$this->milk = rand(8, 12);
	}
	public function get_number_cow() {
		return $this->get_number_cow;
	}
	public function get_milk() {
		return $this->milk;
	}

}

Class Cow_list extends Cow {
	private $cow_array = [];
	public function __construct(){
	}
	public function get_cow_array() {
		return $this->cow_array;
	}
	public function add_cow($number){
		array_push($this->cow_array, new Cow($number));
	}
	public function get_milk_count($count){
		return $this->cow_array[$count]->get_milk();
	}
}
