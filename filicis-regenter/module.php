<?php

/**
* webtrees: online genealogy
* Copyright (C) 2019 webtrees development team
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
* You should have received a copy of the GNU General Public License
* along with this program. If not, see <http://www.gnu.org/licenses/>.
*/

declare(strict_types=1);

namespace Filicis;

use Fisharebest\Webtrees\Module\AbstractModule;
use Fisharebest\Webtrees\Module\ModuleCustomInterface;
use Fisharebest\Webtrees\Module\ModuleCustomTrait;
use Fisharebest\Webtrees\Module\BritishMonarchs;



use Illuminate\Support\Collection;
use Fisharebest\Webtrees\Module\ModuleHistoricEventsTrait;

use Fisharebest\Webtrees\Module\ModuleHistoricEventsInterface;



/**
* Class BritishMonarchs
*/


return new class extends AbstractModule implements ModuleCustomInterface, ModuleHistoricEventsInterface
{
  use ModuleCustomTrait;
  use ModuleHistoricEventsTrait;

  /**
  * How should this module be identified in the control panel, etc.?
  *
  * @return string
  */
  public function title(): string
  {
    return 'Den Danske Kongerække';
  }


  /**
  * A sentence describing what this module does.
  *
  * @return string
  */
  public function description(): string
  {
    return 'Historical facts';
  }



  /**
  * The person or organisation who created this module.
  *
  * @return string
  */
  public function customModuleAuthorName(): string
  {
    return 'Michael Lindhardt Rasmussen';
  }

  /**
  * Should this module be enabled when it is first installed?
  *
  * @return bool
  */
  public function isEnabledByDefault(): bool
  {
    return true;
  }

  /**
  * All events provided by this module.
  *
  * @return Collection<string>
  */
  public function historicEventsAll(): Collection
  {
    return new Collection([
    "1 EVEN William I, William the Conqueror\n2 TYPE English King\n2 DATE FROM @#DJULIAN@ 25 DEC 1066 TO @#DJULIAN@ 09 SEP 1087",
     
      /* Danske Regenter */
    
    "1 EVEN Christian 10.\n2 TYPE Danske Regenter\n2 DATE FROM 15 MAY 1912 TO 20 APR 1947",
    "1 EVEN Frederik 9.\n2 TYPE Danske Regenter\n2 DATE FROM 20 APR 1947 TO 14 JAN 1972",
    "1 EVEN Margrethe 2.\n2 TYPE Danske Regenter\n2 DATE FROM 14 Jan 1972",
    ]);
  }
};


