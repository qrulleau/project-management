<?php

require_once '../traits/Trait.php';
require '../interface/NameInterface.php';
require 'ConnexionDB.php';

class Customer implements NameInterface
{
	use CodeNameNotesTrait;
}