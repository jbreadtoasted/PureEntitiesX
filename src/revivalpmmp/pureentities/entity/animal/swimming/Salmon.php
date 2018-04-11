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

use pocketmine\item\Item;
use pocketmine\item\ItemIds;
use pocketmine\level\Level;
use pocketmine\nbt\tag\CompoundTag;
use revivalpmmp\pureentities\data\Data;

class Salmon extends Fish{

	const NETWORK_ID = Data::NETWORK_IDS["salmon"];

	public function __construct(Level $level, CompoundTag $nbt, bool $fromBucket){
		parent::__construct($level, $nbt, $fromBucket);
	}

	public function getName(): string{
		return "Salmon";
	}

	public function getDrops(): array {
		$drops = [
			Item::get(ItemIds::RAW_SALMON, 0, 1),

			// TODO implement drop quantity based on size.
			Item::get(ItemIds::BONE, 0, 1)
		];
		return $drops;
	}

}