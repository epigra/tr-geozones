<?php

namespace Epigra\TrGeoZones\Console;

use Illuminate\Console\Command;
use Excel;
use Cache;
use Epigra\TRStringHelper;

use Epigra\TrGeoZones\Models\City;
use Epigra\TrGeoZones\Models\CityDistrict;

class ExcelMigrator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'excel:citdistricts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
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
        $this->cities = City::where("country_id",1)->with('districts')->get();

        Excel::load('public/pk_list_29.04.2016.xlsx', function($reader) {
            $stringHelper = new TRStringHelper();
            $reader->each(function($row) use ($stringHelper){
                $row->il = rtrim($stringHelper->withString($row->il)->toLower()->ucWords()->result());
                $row->ilce = rtrim($stringHelper->withString($row->ilce)->toLower()->ucWords()->result());
                $row->semt_bucak_belde = rtrim($stringHelper->withString($row->semt_bucak_belde)->toLower()->ucWords()->result());
                $row->mahalle = rtrim($stringHelper->withString($row->mahalle)->toLower()->ucWords()->result());
                $row->pk = rtrim($row->pk);

                $city = $this->cities->where("name",$row->il)->first();

                $this->line("{$row->il} {$row->ilce} {$row->semt_bucak_belde} {$row->mahalle}");

                if(empty($city)){
                    $city = City::create([
                        'name' => $row->il,
                        'country_id' => 1
                    ]);

                    $this->cities->push($city); 
                    $this->info("\t {$city->name} oluşturuldu");
                }
                else{
                    $this->warn("\t {$city->name} mevcut");
                }

                $district = CityDistrict::firstOrNew([
                    'city_id' => $city->id,
                    'ilce' => $row->ilce,
                    'semt' => $row->semt_bucak_belde,
                    'mahalle' => $row->mahalle,
                    'posta_kodu' => $row->pk
                ]);

                if(! $district->exists){
                    $district->save();
                    $city->districts->push($district);
                    $this->info("\t {$district->ilce} - {$district->semt} - {$district->mahalle} oluşturuldu");
                }
                else{
                    $this->warn("\t {$district->ilce} - {$district->semt} - {$district->mahalle} mevcut");
                    
                }

            });
        });
    }


}
