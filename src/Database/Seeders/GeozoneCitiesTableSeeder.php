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

        \DB::table('geozone_cities')->insert(array(
            0 => array(
                'country_id' => 1,
                'id' => 1,
                'name' => 'Adana',
            ),
            1 => array(
                'country_id' => 1,
                'id' => 2,
                'name' => 'Adıyaman',
            ),
            2 => array(
                'country_id' => 1,
                'id' => 3,
                'name' => 'Afyonkarahisar',
            ),
            3 => array(
                'country_id' => 1,
                'id' => 4,
                'name' => 'Ağrı',
            ),
            4 => array(
                'country_id' => 1,
                'id' => 5,
                'name' => 'Amasya',
            ),
            5 => array(
                'country_id' => 1,
                'id' => 6,
                'name' => 'Ankara',
            ),
            6 => array(
                'country_id' => 1,
                'id' => 7,
                'name' => 'Antalya',
            ),
            7 => array(
                'country_id' => 1,
                'id' => 8,
                'name' => 'Artvin',
            ),
            8 => array(
                'country_id' => 1,
                'id' => 9,
                'name' => 'Aydın',
            ),
            9 => array(
                'country_id' => 1,
                'id' => 10,
                'name' => 'Balıkesir',
            ),
            10 => array(
                'country_id' => 1,
                'id' => 11,
                'name' => 'Bilecik',
            ),
            11 => array(
                'country_id' => 1,
                'id' => 12,
                'name' => 'Bingöl',
            ),
            12 => array(
                'country_id' => 1,
                'id' => 13,
                'name' => 'Bitlis',
            ),
            13 => array(
                'country_id' => 1,
                'id' => 14,
                'name' => 'Bolu',
            ),
            14 => array(
                'country_id' => 1,
                'id' => 15,
                'name' => 'Burdur',
            ),
            15 => array(
                'country_id' => 1,
                'id' => 16,
                'name' => 'Bursa',
            ),
            16 => array(
                'country_id' => 1,
                'id' => 17,
                'name' => 'Çanakkale',
            ),
            17 => array(
                'country_id' => 1,
                'id' => 18,
                'name' => 'Çankırı',
            ),
            18 => array(
                'country_id' => 1,
                'id' => 19,
                'name' => 'Çorum',
            ),
            19 => array(
                'country_id' => 1,
                'id' => 20,
                'name' => 'Denizli',
            ),
            20 => array(
                'country_id' => 1,
                'id' => 21,
                'name' => 'Diyarbakır',
            ),
            21 => array(
                'country_id' => 1,
                'id' => 22,
                'name' => 'Edirne',
            ),
            22 => array(
                'country_id' => 1,
                'id' => 23,
                'name' => 'Elazığ',
            ),
            23 => array(
                'country_id' => 1,
                'id' => 24,
                'name' => 'Erzincan',
            ),
            24 => array(
                'country_id' => 1,
                'id' => 25,
                'name' => 'Erzurum',
            ),
            25 => array(
                'country_id' => 1,
                'id' => 26,
                'name' => 'Eskişehir',
            ),
            26 => array(
                'country_id' => 1,
                'id' => 27,
                'name' => 'Gaziantep',
            ),
            27 => array(
                'country_id' => 1,
                'id' => 28,
                'name' => 'Giresun',
            ),
            28 => array(
                'country_id' => 1,
                'id' => 29,
                'name' => 'Gümüşhane',
            ),
            29 => array(
                'country_id' => 1,
                'id' => 30,
                'name' => 'Hakkari',
            ),
            30 => array(
                'country_id' => 1,
                'id' => 31,
                'name' => 'Hatay',
            ),
            31 => array(
                'country_id' => 1,
                'id' => 32,
                'name' => 'Isparta',
            ),
            32 => array(
                'country_id' => 1,
                'id' => 33,
                'name' => 'Mersin',
            ),
            33 => array(
                'country_id' => 1,
                'id' => 34,
                'name' => 'İstanbul',
            ),
            34 => array(
                'country_id' => 1,
                'id' => 35,
                'name' => 'İzmir',
            ),
            35 => array(
                'country_id' => 1,
                'id' => 36,
                'name' => 'Kars',
            ),
            36 => array(
                'country_id' => 1,
                'id' => 37,
                'name' => 'Kastamonu',
            ),
            37 => array(
                'country_id' => 1,
                'id' => 38,
                'name' => 'Kayseri',
            ),
            38 => array(
                'country_id' => 1,
                'id' => 39,
                'name' => 'Kırklareli',
            ),
            39 => array(
                'country_id' => 1,
                'id' => 40,
                'name' => 'Kırşehir',
            ),
            40 => array(
                'country_id' => 1,
                'id' => 41,
                'name' => 'Kocaeli',
            ),
            41 => array(
                'country_id' => 1,
                'id' => 42,
                'name' => 'Konya',
            ),
            42 => array(
                'country_id' => 1,
                'id' => 43,
                'name' => 'Kütahya',
            ),
            43 => array(
                'country_id' => 1,
                'id' => 44,
                'name' => 'Malatya',
            ),
            44 => array(
                'country_id' => 1,
                'id' => 45,
                'name' => 'Manisa',
            ),
            45 => array(
                'country_id' => 1,
                'id' => 46,
                'name' => 'Kahramanmaraş',
            ),
            46 => array(
                'country_id' => 1,
                'id' => 47,
                'name' => 'Mardin',
            ),
            47 => array(
                'country_id' => 1,
                'id' => 48,
                'name' => 'Muğla',
            ),
            48 => array(
                'country_id' => 1,
                'id' => 49,
                'name' => 'Muş',
            ),
            49 => array(
                'country_id' => 1,
                'id' => 50,
                'name' => 'Nevşehir',
            ),
            50 => array(
                'country_id' => 1,
                'id' => 51,
                'name' => 'Niğde',
            ),
            51 => array(
                'country_id' => 1,
                'id' => 52,
                'name' => 'Ordu',
            ),
            52 => array(
                'country_id' => 1,
                'id' => 53,
                'name' => 'Rize',
            ),
            53 => array(
                'country_id' => 1,
                'id' => 54,
                'name' => 'Sakarya',
            ),
            54 => array(
                'country_id' => 1,
                'id' => 55,
                'name' => 'Samsun',
            ),
            55 => array(
                'country_id' => 1,
                'id' => 56,
                'name' => 'Siirt',
            ),
            56 => array(
                'country_id' => 1,
                'id' => 57,
                'name' => 'Sinop',
            ),
            57 => array(
                'country_id' => 1,
                'id' => 58,
                'name' => 'Sivas',
            ),
            58 => array(
                'country_id' => 1,
                'id' => 59,
                'name' => 'Tekirdağ',
            ),
            59 => array(
                'country_id' => 1,
                'id' => 60,
                'name' => 'Tokat',
            ),
            60 => array(
                'country_id' => 1,
                'id' => 61,
                'name' => 'Trabzon',
            ),
            61 => array(
                'country_id' => 1,
                'id' => 62,
                'name' => 'Tunceli',
            ),
            62 => array(
                'country_id' => 1,
                'id' => 63,
                'name' => 'Şanlıurfa',
            ),
            63 => array(
                'country_id' => 1,
                'id' => 64,
                'name' => 'Uşak',
            ),
            64 => array(
                'country_id' => 1,
                'id' => 65,
                'name' => 'Van',
            ),
            65 => array(
                'country_id' => 1,
                'id' => 66,
                'name' => 'Yozgat',
            ),
            66 => array(
                'country_id' => 1,
                'id' => 67,
                'name' => 'Zonguldak',
            ),
            67 => array(
                'country_id' => 1,
                'id' => 68,
                'name' => 'Aksaray',
            ),
            68 => array(
                'country_id' => 1,
                'id' => 69,
                'name' => 'Bayburt',
            ),
            69 => array(
                'country_id' => 1,
                'id' => 70,
                'name' => 'Karaman',
            ),
            70 => array(
                'country_id' => 1,
                'id' => 71,
                'name' => 'Kırıkkale',
            ),
            71 => array(
                'country_id' => 1,
                'id' => 72,
                'name' => 'Batman',
            ),
            72 => array(
                'country_id' => 1,
                'id' => 73,
                'name' => 'Şırnak',
            ),
            73 => array(
                'country_id' => 1,
                'id' => 74,
                'name' => 'Bartın',
            ),
            74 => array(
                'country_id' => 1,
                'id' => 75,
                'name' => 'Ardahan',
            ),
            75 => array(
                'country_id' => 1,
                'id' => 76,
                'name' => 'Iğdır',
            ),
            76 => array(
                'country_id' => 1,
                'id' => 77,
                'name' => 'Yalova',
            ),
            77 => array(
                'country_id' => 1,
                'id' => 78,
                'name' => 'Karabük',
            ),
            78 => array(
                'country_id' => 1,
                'id' => 79,
                'name' => 'Kilis',
            ),
            79 => array(
                'country_id' => 1,
                'id' => 80,
                'name' => 'Osmaniye',
            ),
            80 => array(
                'country_id' => 1,
                'id' => 81,
                'name' => 'Düzce',
            ),
        ));
    }
}
