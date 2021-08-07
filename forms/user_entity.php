<?php

/**
 * 
 */
class UserEntity
{
	private $con;
	private $props;

	public function __construct()
	{
		$this->con = new mysqli("localhost","root","","BFK2161SE");

		$this->props = array(
			"user_id" => null,
			"name" => null,
			"nic" => null,
			"age" => null,
			"gender" => null,
			"education" => null
		);
	}

	public function __get($property) {
		if (array_key_exists($property, $this->props)) {
			return $this->props[$property];
		}
	}

	public function __set($property, $value) {
		if (array_key_exists($property, $this->props)) {
			return $this->props[$property] = $value;
		}

		return $this;
	}

	public function save() {
		//TODO: Add error handling
		$sql = "INSERT INTO users(user_id, name, nic, age, gender, education) VALUES(?, ?, ?, ?, ?, ?);";
		$stmt = $this->con->prepare($sql);

		$stmt->bind_param('sssiss',
			$this->props['user_id'],
			$this->props['name'],
			$this->props['nic'],
			$this->props['age'],
			$this->props['gender'],
			$this->props['education']
		);

		$stmt->execute();

		return $stmt->affected_rows;
	}

	public function viewProps() {
		return $this->props;
	}
}
