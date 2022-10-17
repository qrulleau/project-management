<?php

namespace Classes;

use \Traits\CodeTrait;
use \Traits\NameTrait;
use \Traits\NotesTrait;
use \Interface\CommonInterface;


class Customer implements CommonInterface
{
	use CodeNameNotesTrait;
}