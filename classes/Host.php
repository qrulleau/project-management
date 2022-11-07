<?php

namespace Classes;

use Interface\IdInterface;
use Interface\CodeInterface;
use Interface\NameInterface;
use Interface\NotesInterface;
use Traits\IdTrait;
use Traits\CodeTrait;
use Traits\NameTrait;
use Traits\NotesTrait;

class Host implements IdInterface, CodeInterface, NameInterface, NotesInterface
{
	use IdTrait, CodeTrait, NameTrait, NotesTrait;

    public function __toString()
    {
        return $this->id;
    }
}