<?php

namespace Classes;

use \Traits\CodeTrait;
use \Traits\NameTrait;
use \Traits\NotesTrait;
use \Interface\NameInterface;


class Customer implements NameInterface
{
	use CodeNameNotesTrait;
}