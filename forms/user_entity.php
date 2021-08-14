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
			"id" => null,
			"user_id" => null,
			"name" => null,
			"passwd" => null,
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
		if (isset($this->con->connect_errno) && $this->con->connect_errno) {
			// TODO: Log the error
			return false;
		}

		$sql = "INSERT INTO users(user_id, name, passwd, nic, age, gender, education) VALUES(?, ?, ?, ?, ?, ?, ?);";
		$stmt = $this->con->prepare($sql);

		$stmt->bind_param('ssssiss',
			$this->props['user_id'],
			$this->props['name'],
			$this->props['passwd'],
			$this->props['nic'],
			$this->props['age'],
			$this->props['gender'],
			$this->props['education']
		);

		$stmt->execute();

		if ($stmt->errno) {
			// TODO: Log the error
			return false;
		}
		return $stmt->affected_rows;
	}

	public function viewProps() {
		return $this->props;
	}

	public function autheticate() {
		$sql = "SELECT * FROM users WHERE nic=? AND passwd=? LIMIT 1;";
		$stmt = $this->con->prepare($sql);

		$stmt->bind_param('ss',
			$this->props['nic'],
			$this->props['passwd']
		);

		$stmt->execute();

		$stmt->bind_result($id, $user_id, $name, $passwd, $nic, $age, $gender, $education);

		$stmt->fetch();

		$this->props = array(
			"id" => $id,
			"user_id" => $user_id,
			"name" => $name,
			"passwd" => $passwd,
			"nic" => $nic,
			"age" => $age,
			"gender" => $gender,
			"education" => $education
		);

		if (isset($this->props["id"]) && $this->props["id"]) {
			$_SESSION["user"] = array(
				"id" => $id,
				"user_id" => $user_id,
				"name" => $name,
				"nic" => $nic
			);

			header("Location: home.php?login=success");
		}
	}
}
