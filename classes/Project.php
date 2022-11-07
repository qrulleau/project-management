<?php

namespace Classes;

use Classes\Customer;
use Classes\Host;
use Interface\IdInterface;
use Interface\CodeInterface;
use Interface\NameInterface;
use Interface\NotesInterface;
use Traits\IdTrait;
use Traits\CodeTrait;
use Traits\NameTrait;
use Traits\NotesTrait;


class Project implements IdInterface, CodeInterface, NameInterface, NotesInterface
{
    use IdTrait, CodeTrait, NameTrait, NotesTrait;

    private ?string $lastpass_folder;
    private ?string $link_mock_ups;
    private bool $managed_server;
    private Customer $customer;
    private Host $host;

    public function getLastpass_folder(): ?string 
    {
        return $this->lastpass_folder;
    }

    public function setLastpass_folder(string $lastpass_folder): void
    {
        $this->lastpass_folder = $lastpass_folder;
    }

    public function getLink_mock_ups(): ?string 
    {
        return $this->lastpass_folder;
    }

    public function setLink_mock_ups(string $link_mock_ups): void
    {
        $this->link_mock_ups = $link_mock_ups;
    }

    public function getManaged_server(): bool
    {
        return $this->managed_server;
    }

    public function setManaged_server(bool $managed_server): void
    {
        $this->managed_server = $managed_server;
    }

    public function getHost(): Host 
    {
        return $this->host;
    }

    public function setHost(Host $host): void
    {
        $this->host = $host;
    }

    public function getCustomer(): Customer 
    {
        return $this->customer;
    }

    public function setCustomer(Customer $customer): void
    {
        $this->customer = $customer;
    }

    public function __toString()
    {
        return $this->id;
    }
}