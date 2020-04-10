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


    "1 EVEN Christian 1.\n2 TYPE Danske Regenter\n2 DATE FROM 1448 TO 1481\n2 NOTE Se [Danmarkshistorien](https://danmarkshistorien.dk/leksikon-og-kilder/vis/materiale/christian-1-1426-1481/)",
    "1 EVEN Hans\n2 TYPE Danske Regenter\n2 DATE FROM 1481 TO 1513\n2 NOTE Se [Danmarkshistorien](https://danmarkshistorien.dk/leksikon-og-kilder/vis/materiale/hans-1455-1513/)",
    "1 EVEN Christian 2.\n2 TYPE Danske Regenter\n2 DATE FROM 1513 TO 1523\n2 NOTE Se [Danmarkshistorien](https://danmarkshistorien.dk/leksikon-og-kilder/vis/materiale/kongeraekken/)",
    "1 EVEN Frederik 1.\n2 TYPE Danske Regenter\n2 DATE FROM 1523 TO 20 APR 1533\n2 NOTE Se [Danmarkshistorien](https://danmarkshistorien.dk/leksikon-og-kilder/vis/materiale/frederik-1-1471-1533/)",

    "1 EVEN Interregnum\n2 TYPE Danske Regenter\n2 DATE FROM 15 MAY 1533 TO 20 APR 1534\n2 NOTE ",
    
    "1 EVEN Christian 3.\n2 TYPE Danske Regenter\n2 DATE FROM 1534 TO 1 jan 1559\n2 NOTE Se [Danmarkshistorien](https://danmarkshistorien.dk/leksikon-og-kilder/vis/materiale/christian-3-1503-1559/)",
    "1 EVEN Frederik 2.\n2 TYPE Danske Regenter\n2 DATE FROM 1 JAN 1559 TO 4 APR 1588\n2 NOTE Se [Danmarkshistorien](https://danmarkshistorien.dk/leksikon-og-kilder/vis/materiale/frederik-2-1534-1588/)",
    "1 EVEN Christian 4.\n2 TYPE Danske Regenter\n2 DATE FROM 4 APR 1588 TO 28 FEB 1648\n2 NOTE Se [Danmarkshistorien](https://danmarkshistorien.dk/leksikon-og-kilder/vis/materiale/christian-4-1577-1648/)",
    "1 EVEN Frederik 3.\n2 TYPE Danske Regenter\n2 DATE FROM 6 JUL 1648 TO 9 FEB 1670\n2 NOTE Se [Danmarkshistorien](https://danmarkshistorien.dk/leksikon-og-kilder/vis/materiale/frederik-3-1609-1670/)",
    "1 EVEN Christian 5.\n2 TYPE Danske Regenter\n2 DATE FROM 9 FEB 1670 TO 20 APR 1699\n2 NOTE Se [Danmarkshistorien](https://danmarkshistorien.dk/leksikon-og-kilder/vis/materiale/christian-5-1646-1699/)",
    "1 EVEN Frederik 4.\n2 TYPE Danske Regenter\n2 DATE FROM 20 APR 1699 TO 12 OCT 1730\n2 NOTE Se [Danmarkshistorien](https://danmarkshistorien.dk/leksikon-og-kilder/vis/materiale/frederik-4-1671-1730/)",
    "1 EVEN Christian 6.\n2 TYPE Danske Regenter\n2 DATE FROM 12 OCT 1730 TO 6 AUG 1746\n2 NOTE Se [Danmarkshistorien](https://danmarkshistorien.dk/leksikon-og-kilder/vis/materiale/christian-6-1699-1746/)",
    "1 EVEN Frederik 5.\n2 TYPE Danske Regenter\n2 DATE FROM 15 MAY 1746 TO 14 JAN 1766\n2 NOTE Se [Danmarkshistorien](https://danmarkshistorien.dk/leksikon-og-kilder/vis/materiale/frederik-5-1723-1766/)",
    "1 EVEN Christian 7.\n2 TYPE Danske Regenter\n2 DATE FROM 14 JAN 1766 TO 13 MAR 1808\n2 NOTE Se [Danmarkshistorien](https://danmarkshistorien.dk/leksikon-og-kilder/vis/materiale/christian-7-1749-1808/)",
    "1 EVEN Frederik 6.\n2 TYPE Danske Regenter\n2 DATE FROM 13 MAR 1808 TO 3 DEC 1839\n2 NOTE Se [Danmarkshistorien](https://danmarkshistorien.dk/leksikon-og-kilder/vis/materiale/frederik-6-1768-1839/) ",
    "1 EVEN Christian 8.\n2 TYPE Danske Regenter\n2 DATE FROM 3 DEC 1839 TO 20 JAN 1848\n2 NOTE Se [Danmarkshistorien](https://danmarkshistorien.dk/leksikon-og-kilder/vis/materiale/christian-8-1786-1848/) ",
    "1 EVEN Frederik 7.\n2 TYPE Danske Regenter\n2 DATE FROM 20 JAN 1848 TO 15 NOV 1863\n2 NOTE Se [Danmarkshistorien](https://danmarkshistorien.dk/leksikon-og-kilder/vis/materiale/frederik-7-1808-1863/) ",
    "1 EVEN Christian 9.\n2 TYPE Danske Regenter\n2 DATE FROM 15 NOV 1863 TO 20 APR 1906\n2 NOTE Se [Danmarkshistorien](https://danmarkshistorien.dk/leksikon-og-kilder/vis/materiale/christian-9-1818-1906/) ",
    "1 EVEN Frederik 8.\n2 TYPE Danske Regenter\n2 DATE FROM 15 MAY 1906 TO 15 MAY 1912\n2 NOTE Se [Danmarkshistorien](https://danmarkshistorien.dk/leksikon-og-kilder/vis/materiale/frederik-8-1843-1912/) ",
    "1 EVEN Christian 10.\n2 TYPE Danske Regenter\n2 DATE FROM 15 MAY 1912 TO 20 APR 1947\n2 NOTE Se [Danmarkshistorien](https://danmarkshistorien.dk/leksikon-og-kilder/vis/materiale/christian-10-1870-1947/) ",
    "1 EVEN Frederik 9.\n2 TYPE Danske Regenter\n2 DATE FROM 20 APR 1947 TO 14 JAN 1972\n2 NOTE Se [Danmarkshistorien](https://danmarkshistorien.dk/leksikon-og-kilder/vis/materiale/frederik-9-1899-1972/) ",
    "1 EVEN Margrethe 2.\n2 TYPE Danske Regenter\n2 DATE FROM 14 Jan 1972\n2 NOTE Se [Danmarkshistorien](https://danmarkshistorien.dk/leksikon-og-kilder/vis/materiale/margrethe-2-1940/) ",

    "1 EVEN 1. Verdenskrig\n2 TYPE Danske Krige\n2 DATE FROM 1 AUG 1914 TO 11 NOV 1918\n2 NOTE Selv om Danmark opretholdt streng neutralitet, og ikke deltog aktivt i krigen, fik den stor indflydelse på livet i Danmark, Se [Wikipedia](https://da.wikipedia.org/wiki/1._verdenskrig) ",
    "1 EVEN Besættelsen\n2 TYPE Danske Krige\n2 DATE FROM 9 APR 1940 TO 5 MAY 1945\n2 NOTE ",

    "1 EVEN Den Spanske Syge\n2 TYPE Epidemier\n2 DATE 1918 \n2 NOTE Verdensomspændende influenza epidemi der kostede 50 mill mennesker livet, heraf 14.000 danske, se [Wikipedia](https://da.wikipedia.org/wiki/Den_spanske_syge)",
    "1 EVEN Polio epidemien\n2 TYPE Epidemier\n2 DATE 1952\n2 NOTE Sommeren 1952 blev København ramt af [en polioepidemi af hidtid usete dimensioner](https://da.wikipedia.org/wiki/Polio)",



    ]);
  }
};


