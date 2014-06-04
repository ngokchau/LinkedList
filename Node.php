<?php

Class Node {
	public $data;
	public $next;
	
	public function __construct($data, $next = null) {
		$this->data = $data;
		$this->next = $next;
	}
}