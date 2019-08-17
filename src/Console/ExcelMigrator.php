<?php

namespace Epigra\TrGeoZones\Console;

use Illuminate\Console\Command;
use Epigra\TrGeoZones\Imports\CityImport;

class ExcelMigrator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'trgeozones:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'PTT den aldığınız excel ile il ilçe veritabanını güncellemek için kullanabilirsiniz.';

    /**
     * Create a new command instance.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        ini_set('memory_limit', '-1');

        (new CityImport())->withOutput($this->output)->import(public_path('trgeozones_update.xlsx'));

        $this->line('İçe aktarım tamamlandı.');
    }
}
