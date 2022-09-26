<?php

class Contact
{
	private string $email;
	private string $phone_number;
	private string $role;

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
}