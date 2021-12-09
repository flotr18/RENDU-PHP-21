<?php

declare(strict_types = 1);

class Champion extends Model {
	private string $firstName;
	private string $role;
	

	public function __construct(string $firstName, string $role) {
		$this->firstName = $firstName;
		$this->role = $role;
		
    }

	public function setFirstName(string $Name) {
		$this->firstName = $firstName;
	}
	public function setRole(string $role) {
		$this->role = $role;
	}

    public function getFirstName(){
        return $this->firstName;
    }

    public function getRole(){
        return $this->role;
    }

	public function __toString() {
		return json_encode(array(
			'id' => $this->id,
			'Name' => $this->firstName,
			'Role' => $this->role,
			
		));
	}
	
}