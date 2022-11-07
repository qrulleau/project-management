<?php
	
namespace Traits;

trait IdTrait
{
    private int $id;

    public function getId(): int
	{
		return $this->id;
	}

	public function setId(int $id): void
	{
		$this->id = $id;
	}
}