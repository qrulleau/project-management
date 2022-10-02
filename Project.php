<?php
require_once('Customer.php'),
require_once('Host.php'),


    class Projet{
        public function __construct(
        private int $id,
        private string $name,
        private string $code,
        private string $lastpass_folder,
        private string $link_mock_ups,
        private bool $managed_server,
        private string $notes,
        private Customer $customer_id,
        private Host $host_id
        )

        public function getId(): int 
        {
            return $this->id;
        }

        public function setId( int $id ): void
        {
            $this->id= $id;
        }

        public function getName(): string 
        {
            return $this->name;
        }

        public function setName( string $name ): void
        {
            $this->name= $name;
        }

        public function getCode(): string 
        {
            return $this->code;
        }

        public function setCode( string $code ): void
        {
            $this->code= $code;
        }

        public function getLastpass_folder(): string 
        {
            return $this->lastpass_folder;
        }

        public function setLastpass_folder( string $lastpass_folder ): void
        {
            $this->lastpass_folder= $lastpass_folder;
        }

        public function getLink_mock_ups(): string 
        {
            return $this->lastpass_folder;
        }

        public function setLink_mock_ups( string $link_mock_ups ): void
        {
            $this->link_mock_ups= $link_mock_ups;
        }

        public function setManaged_server(): bool
        {
            return $this->managed_server;
        }

        public function setManaged_server( bool $managed_server): void
        {
            $this->managed_server = $managed_server;
        }

        public function getNotes(): string 
        {
            return $this->notes;
        }

        public function setNotes( string $notes ): void
        {
            $this->notes= $notes;
        }

        public function getHost_id(): int 
        {
            return $this->host_id;
        }

        public function setHost_id( int $host_id ): void
        {
            $this->host_id= $host_id;
        }

        public function getCustomer_id(): int 
        {
            return $this->customer_id;
        }

        public function setCustomer_id ( int $customer_id): int
        {
            $this->customer_id = $customer_id;
        }




        
    }
