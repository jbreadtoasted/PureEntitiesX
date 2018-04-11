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
use pocketmine\item\Item;
use pocketmine\item\ItemFactory;
use pocketmine\item\ItemIds;
use pocketmine\level\Location;
use pocketmine\level\Position;
use pocketmine\nbt\tag\CompoundTag;
use revivalpmmp\pureentities\components\BreedingComponent;
use revivalpmmp\pureentities\data\Data;
use revivalpmmp\pureentities\features\IntfCanBreed;
use revivalpmmp\pureentities\traits\Breedable;
use revivalpmmp\pureentities\traits\Feedable;

class Turtle extends WaterAnimal implements IntfCanBreed{
	// TODO Impelements Turtle Specific Methods
	// SEAGRASS ItemIDs are non-working placeholders until PMMP determines direction for StringIDs;


	use Breedable, Feedable;

	const NETWORK_ID = Data::NETWORK_IDS["turtle"];

	/**
	 * Turtles return to their home beach to lay eggs.
	 * @var Position
	 */
	private $homeBeach;

	public function __construct(Location $homeBeach, CompoundTag $nbt){
		parent::__construct($homeBeach->getLevel(), $nbt);
		$this->homeBeach = $homeBeach;
		$this->breedableClass = new BreedingComponent($this);
		$this->feedableItems = [ItemIds::SEAGRASS];
	}

	public function getName(): string {
		return "Turtle";
	}

	public function getHomeBeach(): Position {
		return $this->homeBeach;
	}

	public function canBreathe(): bool {
		return true;
	}

	public function getDrops(): array{
		$drops = [
			Item::get(ItemIds::SEAGRASS, 0 , mt_rand(0,2))
		];
		return $drops;
	}
}