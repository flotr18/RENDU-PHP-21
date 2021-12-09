<?php

declare(strict_types = 1);

class Champion extends Model {
	private string $Name;
	

	public function __construct(string $Name) {
		$this->Name = $Name;
		
    }

	public function setFirstName(string $Name) {
		$this->Name = $Name;
	}


	public function __toString() {
		return json_encode(array(
			'id' => $this->id,
			'Name' => $this->Name,
			
		));
	}
	
}