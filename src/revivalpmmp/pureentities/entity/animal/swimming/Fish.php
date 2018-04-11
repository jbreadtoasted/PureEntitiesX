<?php
/**
 * PureEntitiesX: Mob AI Plugin for PMMP
 * Copyright (C)  2018 RevivalPMMP
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */


namespace revivalpmmp\pureentities\entity\animal\swimming;


use pocketmine\entity\WaterAnimal;
use pocketmine\level\format\io\leveldb\LevelDB;
use pocketmine\level\Level;
use pocketmine\nbt\tag\CompoundTag;

abstract class Fish extends WaterAnimal {

	protected $fromBucket = false;

	public function __construct(Level $level, CompoundTag $nbt, bool $fromBucket){
		parent::__construct($level, $nbt);
		$this->fromBucket = $fromBucket;
	}

	public function isFromBucket(): bool{
		return $this->fromBucket;
	}

}