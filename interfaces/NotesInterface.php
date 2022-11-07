<?php

namespace Interfaces;

interface notesInterface
{
    public function getNotes(): ?string;
    public function setNotes(string $notes): void;
}