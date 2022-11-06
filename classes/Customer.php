<?php

namespace Classes;

use Interface\NameInterface;
use Traits\CodeTrait;
use Traits\NameTrait;
use Traits\NotesTrait;

class Customer implements NameInterface
{
	use CodeTrait;
	use NameTrait;
	use NotesTrait;
}