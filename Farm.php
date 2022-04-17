<?php
require_once "Chicken.php";
require_once "Cow.php";

Class Farm {
	private $cow;
	private $chicken;
	private $count_egg = 0;
	private $count_milk = 0;
	private $count_chicken = 0;
	private $count_cow = 0;
	private $sum_count_milk=0;
	private $sum_count_egg=0;
	private $day=0;
	public function __construct() {
		$this->cow = new Cow_list();
		$this->chicken = new Chicken_list();
	}

	public function add_mani_chicken($count) {
		for ($i=0; $i < $count; $i++) {
			$this->chicken->add_chicken($i+$this->count_chicken);
		}
		$this->count_chicken += $count;
		return "Добавлено на ферму: {$count} куриц \n";
	}

	public function add_mani_cow($count) {
		for ($i=0; $i < $count; $i++) {
			$this->cow->add_cow($i+$this->count_cow);
		}
		$this->count_cow += $count;
		return "Добавлено на ферму: {$count} коров \n";
	}

	public function get_value_egg(){
		for ($i=0; $i < $this->count_chicken; $i++){
			$this->count_egg += $this->chicken->get_egg_count($i);
		}
		$this->sum_count_egg += $this->count_egg;
		return "Собрано яиц: #{$this->count_egg} \n";
	}

	public function get_value_milk(){
		for ($i = 0; $i < $this->count_cow; $i++) {
			$this->count_milk += $this->cow->get_milk_count($i);
		}
		$this->sum_count_milk += $this->count_milk;
		return "Собрано яиц: #{$this->count_milk} \n";
	}
	public function get_count_chicken() {
		return "Количество куриц на ферме: {$this->count_chicken} \n";
	}
	public function get_count_cow() {
		return "Количество коров на ферме: {$this->count_cow} \n";
	}
	private function sum_count_egg() {
		return "Собрано яиц за неделю: {$this->sum_count_egg} \n";
	}
	private function sum_count_milk() {
		return "Собрано яиц за неделю: {$this->sum_count_milk} \n";
	}
	public function get_production () {
		if($this->day != 7){
			echo $this->get_value_egg();
			echo $this->get_value_milk();
			$this->day++;
		}
		else {
			echo $this->sum_count_milk();
			echo $this->sum_count_egg();
			$this->day = 0;
		}
	}
}

