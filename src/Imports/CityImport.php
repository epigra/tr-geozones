<?php

namespace Epigra\TrGeoZones\Imports;

use Epigra\TRStringHelper;
use Epigra\TrGeoZones\Models\City;
use Epigra\TrGeoZones\Models\CityDistrict;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithProgressBar;
use Maatwebsite\Excel\Concerns\WithChunkReading;

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

        $city = City::where('country_id', 1)->where('name', $row[0])->first();

        if (empty($city)) {
            $city = City::create([
                'name' => $row[0],
                'country_id' => 1,
            ]);
        } 

        $district = CityDistrict::firstOrNew([
            'city_id' => $city->id,
            'ilce' => $row[1],
            'semt' => $row[2],
            'mahalle' => $row[3],
            'posta_kodu' => $row[4],
        ]);

        if (!$district->exists) {
            $district->save();
        }

        return $district;
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
