<?php

namespace Minifixio\onevsone\model;

use pocketmine\scheduler\Task;
use pocketmine\utils\TextFormat;


class RoundCheckTask extends Task{
	
	public $arena;
	
	public function onRun(int $currentTick){
		$this->arena->onRoundEnd();
	}
	
}