<?php 
require "Farm.php";

$farm = new Farm();
echo $farm->add_mani_chicken(20);
echo $farm->add_mani_cow(10);
for($i=0; $i<8;$i++) {
	 $farm->get_production();
}
echo $farm->add_mani_chicken(5);
echo $farm->add_mani_cow(1);
echo $farm->get_count_cow();
echo $farm->get_count_chicken();
for($i=0; $i<8;$i++) {
	 $farm->get_production();
}
?>