<?php

require_once 'Customer.php';
require_once 'Host.php';

class Contact
{
	private string $email;
	private string $phone_number;
	private string $role;
	private Customer $customer;
	private Host $host;
    

    public function __construct(string $email, string $phone_number, string $role, Customer $customer, Host $host)
    {
        $this->email = $email;
        $this->phone_number = $phone_number;
        $this->role = $role;
        $this->customer = $customer;
        $this->host = $host;
    }

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

	public function getCustomer(): Customer
	{
		return $this->customer;
	}

	public function setCustomer (Customer $customer): void
	{
		$this->customer = $customer;
	}

	public function getHost(): Host 
	{
		return $this->host;
	}

	public function setHost (Host $host): void
	{
		$this->host = $host;
	}
}