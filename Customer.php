<?php

    class Customer{
        public function __construct(
        private int $id,
        private string $code,
        private string $name,
        private string $note,
        )

        public function getId(): int 
        {
            return $this->id;
        }

        public function setId( int $id): void
        {
            $this->id = $id;
        }

        public function getCode(): int
        {
            return $this->code;
        }

        public function setCode( string $code): void
        {
            $this->code = $code;
        }

        public function getName(): string
        {
            return $this->name;
        }

        public function setName( string $name): void
        {
            $this->name = $name;
        }

        public function getNote(): string 
        {
            return $this->note;
        }

        public function setNote(string $note): void
        {
            $this->note = $note;
        }


    }