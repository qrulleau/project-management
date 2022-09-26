<?php

class Environment
{
	private int $id;
	private string $name;
	private string $ip_adress;
	private int $ssh_port;
	private string $ssh_username;
	private string $phpmyadmin_link;
	private bool $ip_restriction;

	public function getCode(): string
	{
		return $this->code;
	}

	public function setCode(string $code): void
	{
		$this->code = $code;
	}

	public function getName(): string
	{
		return $this->name;
	}

	public function setName(string $name): void
	{
		$this->name = $name;
	}

    public function getNotes(): string
	{
		return $this->notes;
	}

	public function setNotes(string $notes): void
	{
		$this->notes = $notes;
	}
}
