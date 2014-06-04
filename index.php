<?php

require "LinkedList.php";

$list = new LinkedList();
$data_points = 10;

for($i = 0; $i < $data_points; $i++) {
	$list->add($i);
}

$list->add("z");
$list->add("z", 5);
$list->add("x", 12);


echo $list->get(10);

//$list->set('a', 5);


echo "<pre>";
print_r($list);
echo "</pre>";