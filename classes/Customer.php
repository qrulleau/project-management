<?php

require_once 'CNNTrait.php';
require 'interface/CommunInterface.php';

class Customer implements CommunInterface
{
	use CnnTrait;
}