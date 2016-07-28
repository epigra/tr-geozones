<?php

namespace Epigra\TrGeoZones\Console;

use Epigra\PMGen\MigrationGenerator;
use Illuminate\Console\Command;

class MigrationCommand extends MigrationGenerator
{

    protected $signature = 'geozones:migrate';
    protected $description = 'Creates a migrations for Turkish Geozones.';
}
