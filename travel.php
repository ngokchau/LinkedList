<?php

//travel(2, 3);
//
//function travel($x, $y) {
//	echo "<pre>";
//	traverse($x, $y, array());
//	echo "</pre>";
//}
//
//function traverse($x, $y, $list) {
//	if($x == 0 && $y == 0) {
//		print_r($list);
//	}
//	else if($y >= 0 && $x >= 0) {
//		array_push($list, "N");
//		traverse($x, $y - 1, $list);
//		array_pop($list);
//		array_push($list, "E");
//		traverse($x - 1, $y, $list);
//		array_pop($list);
//		array_push($list, "NE");
//		traverse($x - 1, $y - 1, $list);
//		array_pop($list);
//	}
//}
