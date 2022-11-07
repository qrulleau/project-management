<?php

namespace Classes;

use Classes\Project;
use Interface\IdInterface;
use Interface\NameInterface;
use Traits\IdTrait;
use Traits\NameTrait;

class Environment implements IdInterface, NameInterface
{
	use IdInterface, NameInterface;

	private ?string $link;
	private ?string $ip_address;
	private ?int $ssh_port;
	private ?string $ssh_username;
	private ?string $phpmyadmin_link;
	private bool $ip_restriction;
	private Project $project;

	public function getLink(): ?string
	{
		return $this->link;
	}

	public function getProject(): Project
	{
		return $this->project;
	}

	public function getSSHPort(): ?int
	{
		return $this->ssh_port;
	}

	public function getSSHUserName(): ?string
	{
		return $this->ssh_username;
	}

	public function getPHPAdminLink(): ?string
	{
		return $this->phpmyadmin_link;
	}

	public function getIPRestriction(): bool
	{
		return $this->ip_restriction;
	}

	public function getIPAddress(): ?string
	{
		return $this->ip_address;
	}

	public function setLink(string $link): void
	{
		$this->link = $link;
	}

	public function setProject(Project $project): void
	{
		$this->project = $project;
	}

	public function setIPAddress(int $ip_address): void
	{
		$this->ip_address = $ip_address;
	}

	public function setSSHName(string $ssh_username): void
	{
		$this->ssh_username = $ssh_username;
	}

	public function setSSHPort(int $ssh_port): void
	{
		$this->ssh_port = $ssh_port;
	}

	public function setPHPAdminLink(string $php_admin_link): void
	{
		$this->phpmyadmin_link = $php_admin_link;
	}

	public function setIPRestriction(bool $ip_restriction): void
	{
		$this->ip_restriction = $ip_restriction;
	}

	public function __toString()
    {
        return $this->id;
    }
}