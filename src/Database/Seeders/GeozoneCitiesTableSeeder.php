<?php

namespace Epigra\TrGeoZones\Database\Seeders;

use Illuminate\Database\Seeder;

class GeozoneCitiesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        \DB::table('geozone_cities')->delete();

        \DB::table('geozone_cities')->insert([
            0 => [
                'country_id' => 1,
                'id' => 1,
                'name' => 'Adana',
            ],
            1 => [
                'country_id' => 1,
                'id' => 2,
                'name' => 'Adıyaman',
            ],
            2 => [
                'country_id' => 1,
                'id' => 3,
                'name' => 'Afyonkarahisar',
            ],
            3 => [
                'country_id' => 1,
                'id' => 4,
                'name' => 'Ağrı',
            ],
            4 => [
                'country_id' => 1,
                'id' => 5,
                'name' => 'Amasya',
            ],
            5 => [
                'country_id' => 1,
                'id' => 6,
                'name' => 'Ankara',
            ],
            6 => [
                'country_id' => 1,
                'id' => 7,
                'name' => 'Antalya',
            ],
            7 => [
                'country_id' => 1,
                'id' => 8,
                'name' => 'Artvin',
            ],
            8 => [
                'country_id' => 1,
                'id' => 9,
                'name' => 'Aydın',
            ],
            9 => [
                'country_id' => 1,
                'id' => 10,
                'name' => 'Balıkesir',
            ],
            10 => [
                'country_id' => 1,
                'id' => 11,
                'name' => 'Bilecik',
            ],
            11 => [
                'country_id' => 1,
                'id' => 12,
                'name' => 'Bingöl',
            ],
            12 => [
                'country_id' => 1,
                'id' => 13,
                'name' => 'Bitlis',
            ],
            13 => [
                'country_id' => 1,
                'id' => 14,
                'name' => 'Bolu',
            ],
            14 => [
                'country_id' => 1,
                'id' => 15,
                'name' => 'Burdur',
            ],
            15 => [
                'country_id' => 1,
                'id' => 16,
                'name' => 'Bursa',
            ],
            16 => [
                'country_id' => 1,
                'id' => 17,
                'name' => 'Çanakkale',
            ],
            17 => [
                'country_id' => 1,
                'id' => 18,
                'name' => 'Çankırı',
            ],
            18 => [
                'country_id' => 1,
                'id' => 19,
                'name' => 'Çorum',
            ],
            19 => [
                'country_id' => 1,
                'id' => 20,
                'name' => 'Denizli',
            ],
            20 => [
                'country_id' => 1,
                'id' => 21,
                'name' => 'Diyarbakır',
            ],
            21 => [
                'country_id' => 1,
                'id' => 22,
                'name' => 'Edirne',
            ],
            22 => [
                'country_id' => 1,
                'id' => 23,
                'name' => 'Elazığ',
            ],
            23 => [
                'country_id' => 1,
                'id' => 24,
                'name' => 'Erzincan',
            ],
            24 => [
                'country_id' => 1,
                'id' => 25,
                'name' => 'Erzurum',
            ],
            25 => [
                'country_id' => 1,
                'id' => 26,
                'name' => 'Eskişehir',
            ],
            26 => [
                'country_id' => 1,
                'id' => 27,
                'name' => 'Gaziantep',
            ],
            27 => [
                'country_id' => 1,
                'id' => 28,
                'name' => 'Giresun',
            ],
            28 => [
                'country_id' => 1,
                'id' => 29,
                'name' => 'Gümüşhane',
            ],
            29 => [
                'country_id' => 1,
                'id' => 30,
                'name' => 'Hakkari',
            ],
            30 => [
                'country_id' => 1,
                'id' => 31,
                'name' => 'Hatay',
            ],
            31 => [
                'country_id' => 1,
                'id' => 32,
                'name' => 'Isparta',
            ],
            32 => [
                'country_id' => 1,
                'id' => 33,
                'name' => 'Mersin',
            ],
            33 => [
                'country_id' => 1,
                'id' => 34,
                'name' => 'İstanbul',
            ],
            34 => [
                'country_id' => 1,
                'id' => 35,
                'name' => 'İzmir',
            ],
            35 => [
                'country_id' => 1,
                'id' => 36,
                'name' => 'Kars',
            ],
            36 => [
                'country_id' => 1,
                'id' => 37,
                'name' => 'Kastamonu',
            ],
            37 => [
                'country_id' => 1,
                'id' => 38,
                'name' => 'Kayseri',
            ],
            38 => [
                'country_id' => 1,
                'id' => 39,
                'name' => 'Kırklareli',
            ],
            39 => [
                'country_id' => 1,
                'id' => 40,
                'name' => 'Kırşehir',
            ],
            40 => [
                'country_id' => 1,
                'id' => 41,
                'name' => 'Kocaeli',
            ],
            41 => [
                'country_id' => 1,
                'id' => 42,
                'name' => 'Konya',
            ],
            42 => [
                'country_id' => 1,
                'id' => 43,
                'name' => 'Kütahya',
            ],
            43 => [
                'country_id' => 1,
                'id' => 44,
                'name' => 'Malatya',
            ],
            44 => [
                'country_id' => 1,
                'id' => 45,
                'name' => 'Manisa',
            ],
            45 => [
                'country_id' => 1,
                'id' => 46,
                'name' => 'Kahramanmaraş',
            ],
            46 => [
                'country_id' => 1,
                'id' => 47,
                'name' => 'Mardin',
            ],
            47 => [
                'country_id' => 1,
                'id' => 48,
                'name' => 'Muğla',
            ],
            48 => [
                'country_id' => 1,
                'id' => 49,
                'name' => 'Muş',
            ],
            49 => [
                'country_id' => 1,
                'id' => 50,
                'name' => 'Nevşehir',
            ],
            50 => [
                'country_id' => 1,
                'id' => 51,
                'name' => 'Niğde',
            ],
            51 => [
                'country_id' => 1,
                'id' => 52,
                'name' => 'Ordu',
            ],
            52 => [
                'country_id' => 1,
                'id' => 53,
                'name' => 'Rize',
            ],
            53 => [
                'country_id' => 1,
                'id' => 54,
                'name' => 'Sakarya',
            ],
            54 => [
                'country_id' => 1,
                'id' => 55,
                'name' => 'Samsun',
            ],
            55 => [
                'country_id' => 1,
                'id' => 56,
                'name' => 'Siirt',
            ],
            56 => [
                'country_id' => 1,
                'id' => 57,
                'name' => 'Sinop',
            ],
            57 => [
                'country_id' => 1,
                'id' => 58,
                'name' => 'Sivas',
            ],
            58 => [
                'country_id' => 1,
                'id' => 59,
                'name' => 'Tekirdağ',
            ],
            59 => [
                'country_id' => 1,
                'id' => 60,
                'name' => 'Tokat',
            ],
            60 => [
                'country_id' => 1,
                'id' => 61,
                'name' => 'Trabzon',
            ],
            61 => [
                'country_id' => 1,
                'id' => 62,
                'name' => 'Tunceli',
            ],
            62 => [
                'country_id' => 1,
                'id' => 63,
                'name' => 'Şanlıurfa',
            ],
            63 => [
                'country_id' => 1,
                'id' => 64,
                'name' => 'Uşak',
            ],
            64 => [
                'country_id' => 1,
                'id' => 65,
                'name' => 'Van',
            ],
            65 => [
                'country_id' => 1,
                'id' => 66,
                'name' => 'Yozgat',
            ],
            66 => [
                'country_id' => 1,
                'id' => 67,
                'name' => 'Zonguldak',
            ],
            67 => [
                'country_id' => 1,
                'id' => 68,
                'name' => 'Aksaray',
            ],
            68 => [
                'country_id' => 1,
                'id' => 69,
                'name' => 'Bayburt',
            ],
            69 => [
                'country_id' => 1,
                'id' => 70,
                'name' => 'Karaman',
            ],
            70 => [
                'country_id' => 1,
                'id' => 71,
                'name' => 'Kırıkkale',
            ],
            71 => [
                'country_id' => 1,
                'id' => 72,
                'name' => 'Batman',
            ],
            72 => [
                'country_id' => 1,
                'id' => 73,
                'name' => 'Şırnak',
            ],
            73 => [
                'country_id' => 1,
                'id' => 74,
                'name' => 'Bartın',
            ],
            74 => [
                'country_id' => 1,
                'id' => 75,
                'name' => 'Ardahan',
            ],
            75 => [
                'country_id' => 1,
                'id' => 76,
                'name' => 'Iğdır',
            ],
            76 => [
                'country_id' => 1,
                'id' => 77,
                'name' => 'Yalova',
            ],
            77 => [
                'country_id' => 1,
                'id' => 78,
                'name' => 'Karabük',
            ],
            78 => [
                'country_id' => 1,
                'id' => 79,
                'name' => 'Kilis',
            ],
            79 => [
                'country_id' => 1,
                'id' => 80,
                'name' => 'Osmaniye',
            ],
            80 => [
                'country_id' => 1,
                'id' => 81,
                'name' => 'Düzce',
            ],
        ]);
    }
}
