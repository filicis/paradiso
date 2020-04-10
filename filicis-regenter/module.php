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
* Danske Regenter
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
    return 'Danske Regenter';
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

    "1 EVEN Interregnum\n2 TYPE Danske Regenter\n2 DATE FROM 15 MAY 1533 TO 20 APR 1534",
    "1 EVEN Christian 3.\n2 TYPE Danske Regenter\n2 DATE FROM 1534 TO 1 jan 1559",
    "1 EVEN Frederik 2.\n2 TYPE Danske Regenter\n2 DATE FROM 1 JAN 1559 TO 4 APR 1588",
    "1 EVEN Christian 4.\n2 TYPE Danske Regenter\n2 DATE FROM 4 APR 1588 TO 28 FEB 1648",
    "1 EVEN Frederik 3.\n2 TYPE Danske Regenter\n2 DATE FROM 6 JUL 1648 TO 9 FEB 1670",
    "1 EVEN Christian 5.\n2 TYPE Danske Regenter\n2 DATE FROM 9 FEB 1670 TO 20 APR 1699",
    "1 EVEN Frederik 4.\n2 TYPE Danske Regenter\n2 DATE FROM 20 APR 1699 TO 12 OCT 1730",
    "1 EVEN Christian 6.\n2 TYPE Danske Regenter\n2 DATE FROM 12 OCT 1730 TO 6 AUG 1746",
    "1 EVEN Frederik 5.\n2 TYPE Danske Regenter\n2 DATE FROM 15 MAY 1746 TO 14 JAN 1766",
    "1 EVEN Christian 7.\n2 TYPE Danske Regenter\n2 DATE FROM 14 JAN 1766 TO 13 MAR 1808",
    "1 EVEN Frederik 6.\n2 TYPE Danske Regenter\n2 DATE FROM 13 MAR 1808 TO 3 DEC 1839",
    "1 EVEN Christian 8.\n2 TYPE Danske Regenter\n2 DATE FROM 3 DEC 1839 TO 20 JAN 1848",
    "1 EVEN Frederik 7.\n2 TYPE Danske Regenter\n2 DATE FROM 20 JAN 1848 TO 15 NOV 1863",
    "1 EVEN Christian 9.\n2 TYPE Danske Regenter\n2 DATE FROM 15 NOV 1863 TO 20 APR 1906",
    "1 EVEN Frederik 8.\n2 TYPE Danske Regenter\n2 DATE FROM 15 MAY 1906 TO 15 MAY 1912",
    "1 EVEN Christian 10.\n2 TYPE Danske Regenter\n2 DATE FROM 15 MAY 1912 TO 20 APR 1947",
    "1 EVEN Frederik 9.\n2 TYPE Danske Regenter\n2 DATE FROM 20 APR 1947 TO 14 JAN 1972",
    "1 EVEN Margrethe 2.\n2 TYPE Danske Regenter\n2 DATE FROM 14 Jan 1972",
    ]);
  }
};


