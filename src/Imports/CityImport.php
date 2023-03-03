<?php

namespace Epigra\TrGeoZones\Imports;

use Epigra\TrGeoZones\Models\City;
use Epigra\TrGeoZones\Models\County;
use Epigra\TrGeoZones\Models\District;
use Epigra\TrGeoZones\Models\Neighbourhood;
use Epigra\TRStringHelper;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithProgressBar;
use Maatwebsite\Excel\Concerns\WithStartRow;

class CityImport implements ToModel, WithStartRow, WithChunkReading, WithProgressBar
{
    use Importable;

    public function model(array $row)
    {
        $stringHelper = new TRStringHelper();
        $row[0] = rtrim($stringHelper->withString($row[0])->toLower()->ucWords()->result());
        $row[1] = rtrim($stringHelper->withString($row[1])->toLower()->ucWords()->result());
        $row[2] = rtrim($stringHelper->withString($row[2])->toLower()->ucWords()->result());
        $row[3] = rtrim($stringHelper->withString($row[3])->toLower()->ucWords()->result());
        $row[4] = rtrim($row[4]);

        $city = City::firstOrCreate([
            'name' => $row[0],
            'country_id' => 1,
        ]);

        $county = County::firstOrCreate([
            'name' => $row[1],
            'city_id' => $city->id,
        ]);

        $district = District::firstOrCreate([
            'name' => $row[2],
            'county_id' => $county->id,
        ]);

        return Neighbourhood::firstOrCreate([
            'name' => $row[3],
            'district_id' => $district->id,
            'post_code' => $row[4],
        ]);
    }

    public function startRow(): int
    {
        return 2;
    }

    public function chunkSize(): int
    {
        return 5000;
    }
}
