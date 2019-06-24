<?php
/**
 * Created by PhpStorm.
 * User: DaiDV
 * Date: 6/24/2019
 * Time: 6:35 PM
 */

namespace Model;

class Customer
{
	private $customerID;
	private $emailAddress;
	private $name;
	private $password;
	private $phone;

	/**
	 * @return mixed
	 */
	public function getCustomerID()
	{
		return $this->customerID;
	}

	/**
	 * @param mixed $customerID
	 */
	public function setCustomerID($customerID): void
	{
		$this->customerID = $customerID;
	}

	/**
	 * @return mixed
	 */
	public function getEmailAddress()
	{
		return $this->emailAddress;
	}

	/**
	 * @param mixed $emailAddress
	 */
	public function setEmailAddress($emailAddress): void
	{
		$this->emailAddress = $emailAddress;
	}

	/**
	 * @return mixed
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param mixed $name
	 */
	public function setName($name): void
	{
		$this->name = $name;
	}

	/**
	 * @return mixed
	 */
	public function getPassword()
	{
		return $this->password;
	}

	/**
	 * @param mixed $password
	 */
	public function setPassword($password): void
	{
		$this->password = $password;
	}

	/**
	 * @return mixed
	 */
	public function getPhone()
	{
		return $this->phone;
	}

	/**
	 * @param mixed $phone
	 */
	public function setPhone($phone): void
	{
		$this->phone = $phone;
	}
}