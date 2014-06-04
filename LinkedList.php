<?php

require "Node.php";

Class LinkedList {
	private $root;
	private $size;
	
	public function __construct() {
		$this->size = 0;
	}
	
	public function add($data, $target = null) {
		if($target > $this->size || $target < 0) {
			throw new OutOfBoundsException();
		}
		
		if($this->root == null) {
			$this->root = new Node($data);
			$this->size++;
		}
		else {
			$this->_add($this->root, $data, $target, 1);
		}
	}
	
	private function _add($current, $data, $target, $index) {
		if($target != null){
			if($index != $target) {
				$this->_add($current->next, $data, $target, $index + 1);
			}
			else {
				$temp = new Node($data);
				$temp->next = $current->next;
				$current->next = $temp;
				$this->size++;
			}
		}
		else {
			if($current->next != null) {
				$this->_add($current->next, $data, $target, $index + 1);
			}
			else {
				$current->next = new Node($data);
				$this->size++;
			}
		}
	}
	
	public function get($target) {
		if($target >= $this->size || $target < 0) {
			throw new OutOfBoundsException();
		}
		
		return $this->_get($this->root, $target, 0);
	}
	
	private function _get($current, $target, $index) {
		if($index != $target) {
			return $this->_get($current->next, $target, $index + 1);
		}
		else {
			return $current->data;
		}
	}
	
	public function set($data, $target) {
		if($target >= $this->size || $target < 0) {
			throw new OutOfBoundsException();
		}
		
		$this->_set($this->root, $data, $target, 0);
	}	

	private function _set($current, $data, $target, $index) {
		if($index != $target) {
			$this->_set($current->next, $data, $target, $index + 1);
		}
		else {
			$current->data = $data;
		}
	}
	
	public function remove($target) {
		if($target >= $this->size || $target < 0) {
			throw new OutOfBoundsException();
		}
		
		$this->_remove($this->root, $target, 0);
	}
	
	private function _remove($current, $target, $index) {
		if($target == 0) {
			$current = $current->next;
			$this->root = $current;
			$this->size--;
		}
		else if($index != $target - 1) {
			$this->_remove($current->next, $target, $index + 1);
		}
		else {
			$current->next = $current->next->next;
			$this->size--;
		}
	}

	public function size() {
		return $this->size;
	}
}