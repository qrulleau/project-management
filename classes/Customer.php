<?php

require_once '../traits/Trait.php';
require '../interface/CommonInterface.php';

class Customer implements CommonInterface
{
	use CodeNameNotesTrait;
}