<?php

declare(strict_types = 1);

abstract class Model {
	protected ?string $id = null; 

	public function setId(string $id) {
		$this->id = $id;
	}

	public function getId() {
		return $this->id;
	}
}
?>