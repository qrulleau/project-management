<?php

require_once 'Host.php';
require_once 'Customer.php';

class Contact
{
	private string $email;
	private string $phone_number;
	private string $role;
	private Host $host_id;
	private Customer $customer_id;

	public function getEmail(): string
	{
		return $this->email;
	}

	public function setEmail(string $email): void
	{
		$this->email = $email;
	}

	public function getPhoneNumber(): string
	{
		return $this->phone_number;
	}

	public function setPhoneNumber(string $phone_number): void
	{
		$this->phone_number = $phone_number;
	}

    public function getRole(): string
	{
		return $this->role;
	}

	public function setRole(string $role): void
	{
		$this->role = $role;
	}
	public function getHostId(): Host
	{
		return $this->host_id;
	}
	public function setHostId(Host $host_id): void
	{
		$this->host_id = $host_id;
	}
	public function getCustomerId(): Customer
	{
		return $this->customer_id;
	}
	public function setCustomerId(Customer $customer_id): void
	{
		$this->customer_id = $customer_id;
	}
}