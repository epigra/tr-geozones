<?php

namespace Epigra\TrGeoZones\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeozoneDistrictsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        DB::table('geozone_districts')->delete();

        DB::table('geozone_districts')->insert(
            array(
                0 =>
                array(
                    'id' => 1,
                    'county_id' => 1,
                    'name' => 'Aladağ',
                ),
                1 =>
                array(
                    'id' => 2,
                    'county_id' => 1,
                    'name' => 'Madenli',
                ),
                2 =>
                array(
                    'id' => 3,
                    'county_id' => 2,
                    'name' => 'Büyükmangıt',
                ),
                3 =>
                array(
                    'id' => 4,
                    'county_id' => 2,
                    'name' => 'Ceyhan',
                ),
                4 =>
                array(
                    'id' => 5,
                    'county_id' => 2,
                    'name' => 'Mustafabeyli',
                ),
                5 =>
                array(
                    'id' => 6,
                    'county_id' => 3,
                    'name' => 'Huzurevleri',
                ),
                6 =>
                array(
                    'id' => 7,
                    'county_id' => 3,
                    'name' => 'Mahfesığmaz',
                ),
                7 =>
                array(
                    'id' => 8,
                    'county_id' => 3,
                    'name' => 'Salbaş',
                ),
                8 =>
                array(
                    'id' => 9,
                    'county_id' => 4,
                    'name' => 'Akkaya',
                ),
                9 =>
                array(
                    'id' => 10,
                    'county_id' => 4,
                    'name' => 'Feke',
                ),
                10 =>
                array(
                    'id' => 11,
                    'county_id' => 5,
                    'name' => 'İmamoğlu',
                ),
                11 =>
                array(
                    'id' => 12,
                    'county_id' => 5,
                    'name' => 'Saygeçit',
                ),
                12 =>
                array(
                    'id' => 13,
                    'county_id' => 6,
                    'name' => 'Karaisalı',
                ),
                13 =>
                array(
                    'id' => 14,
                    'county_id' => 7,
                    'name' => 'Karataş',
                ),
                14 =>
                array(
                    'id' => 15,
                    'county_id' => 8,
                    'name' => 'Hacıbeyli',
                ),
                15 =>
                array(
                    'id' => 16,
                    'county_id' => 8,
                    'name' => 'Kahveli',
                ),
                16 =>
                array(
                    'id' => 17,
                    'county_id' => 8,
                    'name' => 'Kozan',
                ),
                17 =>
                array(
                    'id' => 18,
                    'county_id' => 9,
                    'name' => 'Akçatekir',
                ),
                18 =>
                array(
                    'id' => 19,
                    'county_id' => 9,
                    'name' => 'Gökbez',
                ),
                19 =>
                array(
                    'id' => 20,
                    'county_id' => 9,
                    'name' => 'Pozantı',
                ),
                20 =>
                array(
                    'id' => 21,
                    'county_id' => 10,
                    'name' => 'Saimbeyli',
                ),
                21 =>
                array(
                    'id' => 22,
                    'county_id' => 11,
                    'name' => 'Baklalı',
                ),
                22 =>
                array(
                    'id' => 23,
                    'county_id' => 11,
                    'name' => 'Buruk',
                ),
                23 =>
                array(
                    'id' => 24,
                    'county_id' => 11,
                    'name' => 'İncirlik',
                ),
                24 =>
                array(
                    'id' => 25,
                    'county_id' => 11,
                    'name' => 'Osmangazi',
                ),
                25 =>
                array(
                    'id' => 26,
                    'county_id' => 11,
                    'name' => 'Remzioğuzarık',
                ),
                26 =>
                array(
                    'id' => 27,
                    'county_id' => 12,
                    'name' => 'Akkapı',
                ),
                27 =>
                array(
                    'id' => 28,
                    'county_id' => 12,
                    'name' => 'Denizli',
                ),
                28 =>
                array(
                    'id' => 29,
                    'county_id' => 12,
                    'name' => 'Emek',
                ),
                29 =>
                array(
                    'id' => 30,
                    'county_id' => 12,
                    'name' => 'Fevzipaşa',
                ),
                30 =>
                array(
                    'id' => 31,
                    'county_id' => 12,
                    'name' => 'Gazipaşa',
                ),
                31 =>
                array(
                    'id' => 32,
                    'county_id' => 12,
                    'name' => 'Gülbahçesi',
                ),
                32 =>
                array(
                    'id' => 33,
                    'county_id' => 12,
                    'name' => 'Gürselpaşa',
                ),
                33 =>
                array(
                    'id' => 34,
                    'county_id' => 12,
                    'name' => 'Hadırlı',
                ),
                34 =>
                array(
                    'id' => 35,
                    'county_id' => 12,
                    'name' => 'Hükümet',
                ),
                35 =>
                array(
                    'id' => 36,
                    'county_id' => 12,
                    'name' => 'Karayusuflu',
                ),
                36 =>
                array(
                    'id' => 37,
                    'county_id' => 12,
                    'name' => 'Kuruköprü',
                ),
                37 =>
                array(
                    'id' => 38,
                    'county_id' => 12,
                    'name' => 'Küçükdikili',
                ),
                38 =>
                array(
                    'id' => 39,
                    'county_id' => 12,
                    'name' => 'Mavi Bulvar Yurt',
                ),
                39 =>
                array(
                    'id' => 40,
                    'county_id' => 12,
                    'name' => 'Meydan',
                ),
                40 =>
                array(
                    'id' => 41,
                    'county_id' => 12,
                    'name' => 'Saydam',
                ),
                41 =>
                array(
                    'id' => 42,
                    'county_id' => 12,
                    'name' => 'Şakirpaşa',
                ),
                42 =>
                array(
                    'id' => 43,
                    'county_id' => 12,
                    'name' => 'Yağcami',
                ),
                43 =>
                array(
                    'id' => 44,
                    'county_id' => 12,
                    'name' => 'Yeşilevler',
                ),
                44 =>
                array(
                    'id' => 45,
                    'county_id' => 12,
                    'name' => 'Yeşiloba',
                ),
                45 =>
                array(
                    'id' => 46,
                    'county_id' => 12,
                    'name' => 'Yeşilyurt',
                ),
                46 =>
                array(
                    'id' => 47,
                    'county_id' => 12,
                    'name' => 'Ziyapaşa',
                ),
                47 =>
                array(
                    'id' => 48,
                    'county_id' => 13,
                    'name' => 'Damlalı',
                ),
                48 =>
                array(
                    'id' => 49,
                    'county_id' => 13,
                    'name' => 'Tufanbeyli',
                ),
                49 =>
                array(
                    'id' => 50,
                    'county_id' => 14,
                    'name' => 'Kalemli',
                ),
                50 =>
                array(
                    'id' => 51,
                    'county_id' => 14,
                    'name' => 'Yumurtalık',
                ),
                51 =>
                array(
                    'id' => 52,
                    'county_id' => 15,
                    'name' => 'Abdioğlu',
                ),
                52 =>
                array(
                    'id' => 53,
                    'county_id' => 15,
                    'name' => 'Alihocalı',
                ),
                53 =>
                array(
                    'id' => 54,
                    'county_id' => 15,
                    'name' => 'Bahçelievler',
                ),
                54 =>
                array(
                    'id' => 55,
                    'county_id' => 15,
                    'name' => 'Doğankent',
                ),
                55 =>
                array(
                    'id' => 56,
                    'county_id' => 15,
                    'name' => 'Havutlu',
                ),
                56 =>
                array(
                    'id' => 57,
                    'county_id' => 15,
                    'name' => 'İncirlik',
                ),
                57 =>
                array(
                    'id' => 58,
                    'county_id' => 15,
                    'name' => 'Karacaoğlan',
                ),
                58 =>
                array(
                    'id' => 59,
                    'county_id' => 15,
                    'name' => 'Karşıyaka',
                ),
                59 =>
                array(
                    'id' => 60,
                    'county_id' => 15,
                    'name' => 'Kazımkarabekir',
                ),
                60 =>
                array(
                    'id' => 61,
                    'county_id' => 15,
                    'name' => 'Keresteciler',
                ),
                61 =>
                array(
                    'id' => 62,
                    'county_id' => 15,
                    'name' => 'Pttevleri',
                ),
                62 =>
                array(
                    'id' => 63,
                    'county_id' => 15,
                    'name' => 'Yakapınar',
                ),
                63 =>
                array(
                    'id' => 64,
                    'county_id' => 15,
                    'name' => 'Yamaçlı',
                ),
                64 =>
                array(
                    'id' => 65,
                    'county_id' => 15,
                    'name' => 'Yavuzlar',
                ),
                65 =>
                array(
                    'id' => 66,
                    'county_id' => 16,
                    'name' => 'Besni',
                ),
                66 =>
                array(
                    'id' => 67,
                    'county_id' => 16,
                    'name' => 'Çakırhüyük',
                ),
                67 =>
                array(
                    'id' => 68,
                    'county_id' => 16,
                    'name' => 'Kesmetepe',
                ),
                68 =>
                array(
                    'id' => 69,
                    'county_id' => 16,
                    'name' => 'Köseceli',
                ),
                69 =>
                array(
                    'id' => 70,
                    'county_id' => 16,
                    'name' => 'Merkezköyler',
                ),
                70 =>
                array(
                    'id' => 71,
                    'county_id' => 16,
                    'name' => 'Suvarlı',
                ),
                71 =>
                array(
                    'id' => 72,
                    'county_id' => 16,
                    'name' => 'Şambayat',
                ),
                72 =>
                array(
                    'id' => 73,
                    'county_id' => 17,
                    'name' => 'Çelikhan',
                ),
                73 =>
                array(
                    'id' => 74,
                    'county_id' => 17,
                    'name' => 'Merkezköyler',
                ),
                74 =>
                array(
                    'id' => 75,
                    'county_id' => 17,
                    'name' => 'Pınarbaşı',
                ),
                75 =>
                array(
                    'id' => 76,
                    'county_id' => 18,
                    'name' => 'Gerger',
                ),
                76 =>
                array(
                    'id' => 77,
                    'county_id' => 18,
                    'name' => 'Merkezköyler',
                ),
                77 =>
                array(
                    'id' => 78,
                    'county_id' => 19,
                    'name' => 'Balkar',
                ),
                78 =>
                array(
                    'id' => 79,
                    'county_id' => 19,
                    'name' => 'Belören',
                ),
                79 =>
                array(
                    'id' => 80,
                    'county_id' => 19,
                    'name' => 'Gölbaşı',
                ),
                80 =>
                array(
                    'id' => 81,
                    'county_id' => 19,
                    'name' => 'Harmanlı',
                ),
                81 =>
                array(
                    'id' => 82,
                    'county_id' => 19,
                    'name' => 'Merkezköyler',
                ),
                82 =>
                array(
                    'id' => 83,
                    'county_id' => 20,
                    'name' => 'Akıncılar',
                ),
                83 =>
                array(
                    'id' => 84,
                    'county_id' => 20,
                    'name' => 'Bölükyayla',
                ),
                84 =>
                array(
                    'id' => 85,
                    'county_id' => 20,
                    'name' => 'Kahta',
                ),
                85 =>
                array(
                    'id' => 86,
                    'county_id' => 20,
                    'name' => 'Merkezköyler',
                ),
                86 =>
                array(
                    'id' => 87,
                    'county_id' => 21,
                    'name' => 'Eskisaray',
                ),
                87 =>
                array(
                    'id' => 88,
                    'county_id' => 21,
                    'name' => 'İmamağa',
                ),
                88 =>
                array(
                    'id' => 89,
                    'county_id' => 21,
                    'name' => 'Kömür',
                ),
                89 =>
                array(
                    'id' => 90,
                    'county_id' => 21,
                    'name' => 'Merkez Köyler',
                ),
                90 =>
                array(
                    'id' => 91,
                    'county_id' => 21,
                    'name' => 'Sümerevler',
                ),
                91 =>
                array(
                    'id' => 92,
                    'county_id' => 21,
                    'name' => 'Yaylakonak',
                ),
                92 =>
                array(
                    'id' => 93,
                    'county_id' => 21,
                    'name' => 'Yenisanayi',
                ),
                93 =>
                array(
                    'id' => 94,
                    'county_id' => 22,
                    'name' => 'Merkezköyler',
                ),
                94 =>
                array(
                    'id' => 95,
                    'county_id' => 22,
                    'name' => 'Samsat',
                ),
                95 =>
                array(
                    'id' => 96,
                    'county_id' => 23,
                    'name' => 'İnlice',
                ),
                96 =>
                array(
                    'id' => 97,
                    'county_id' => 23,
                    'name' => 'Merkezköyler',
                ),
                97 =>
                array(
                    'id' => 98,
                    'county_id' => 23,
                    'name' => 'Sincik',
                ),
                98 =>
                array(
                    'id' => 99,
                    'county_id' => 24,
                    'name' => 'Merkezköyler',
                ),
                99 =>
                array(
                    'id' => 100,
                    'county_id' => 24,
                    'name' => 'Tut',
                ),
                100 =>
                array(
                    'id' => 101,
                    'county_id' => 25,
                    'name' => 'Başmakçı',
                ),
                101 =>
                array(
                    'id' => 102,
                    'county_id' => 25,
                    'name' => 'Merkezköyler',
                ),
                102 =>
                array(
                    'id' => 103,
                    'county_id' => 26,
                    'name' => 'Bayat',
                ),
                103 =>
                array(
                    'id' => 104,
                    'county_id' => 26,
                    'name' => 'Merkezköyler',
                ),
                104 =>
                array(
                    'id' => 105,
                    'county_id' => 27,
                    'name' => 'Bolvadin',
                ),
                105 =>
                array(
                    'id' => 106,
                    'county_id' => 27,
                    'name' => 'Dişli',
                ),
                106 =>
                array(
                    'id' => 107,
                    'county_id' => 27,
                    'name' => 'Merkezköyler',
                ),
                107 =>
                array(
                    'id' => 108,
                    'county_id' => 27,
                    'name' => 'Özburun',
                ),
                108 =>
                array(
                    'id' => 109,
                    'county_id' => 28,
                    'name' => 'Çay',
                ),
                109 =>
                array(
                    'id' => 110,
                    'county_id' => 28,
                    'name' => 'Karamıkkaracaören',
                ),
                110 =>
                array(
                    'id' => 111,
                    'county_id' => 28,
                    'name' => 'Merkezköyler',
                ),
                111 =>
                array(
                    'id' => 112,
                    'county_id' => 28,
                    'name' => 'Pazarağaç',
                ),
                112 =>
                array(
                    'id' => 113,
                    'county_id' => 29,
                    'name' => 'Çobanlar',
                ),
                113 =>
                array(
                    'id' => 114,
                    'county_id' => 29,
                    'name' => 'Kocaöz',
                ),
                114 =>
                array(
                    'id' => 115,
                    'county_id' => 29,
                    'name' => 'Merkezköyler',
                ),
                115 =>
                array(
                    'id' => 116,
                    'county_id' => 30,
                    'name' => 'Dazkırı',
                ),
                116 =>
                array(
                    'id' => 117,
                    'county_id' => 30,
                    'name' => 'Merkezköyler',
                ),
                117 =>
                array(
                    'id' => 118,
                    'county_id' => 31,
                    'name' => 'Dinar',
                ),
                118 =>
                array(
                    'id' => 119,
                    'county_id' => 31,
                    'name' => 'Haydarlı',
                ),
                119 =>
                array(
                    'id' => 120,
                    'county_id' => 31,
                    'name' => 'Merkezköyler',
                ),
                120 =>
                array(
                    'id' => 121,
                    'county_id' => 31,
                    'name' => 'Tatarlı',
                ),
                121 =>
                array(
                    'id' => 122,
                    'county_id' => 32,
                    'name' => 'Davulga',
                ),
                122 =>
                array(
                    'id' => 123,
                    'county_id' => 32,
                    'name' => 'Emirdağ',
                ),
                123 =>
                array(
                    'id' => 124,
                    'county_id' => 32,
                    'name' => 'Gömü',
                ),
                124 =>
                array(
                    'id' => 125,
                    'county_id' => 32,
                    'name' => 'Merkezköyler',
                ),
                125 =>
                array(
                    'id' => 126,
                    'county_id' => 33,
                    'name' => 'Evciler',
                ),
                126 =>
                array(
                    'id' => 127,
                    'county_id' => 33,
                    'name' => 'Merkezköyler',
                ),
                127 =>
                array(
                    'id' => 128,
                    'county_id' => 34,
                    'name' => 'Hocalar',
                ),
                128 =>
                array(
                    'id' => 129,
                    'county_id' => 34,
                    'name' => 'Merkezköyler',
                ),
                129 =>
                array(
                    'id' => 130,
                    'county_id' => 35,
                    'name' => 'Döğer',
                ),
                130 =>
                array(
                    'id' => 131,
                    'county_id' => 35,
                    'name' => 'Gazlıgöl',
                ),
                131 =>
                array(
                    'id' => 132,
                    'county_id' => 35,
                    'name' => 'İhsaniye',
                ),
                132 =>
                array(
                    'id' => 133,
                    'county_id' => 35,
                    'name' => 'Kayıhan',
                ),
                133 =>
                array(
                    'id' => 134,
                    'county_id' => 35,
                    'name' => 'Merkezköyler',
                ),
                134 =>
                array(
                    'id' => 135,
                    'county_id' => 35,
                    'name' => 'Yaylabağı',
                ),
                135 =>
                array(
                    'id' => 136,
                    'county_id' => 36,
                    'name' => 'İscehisar',
                ),
                136 =>
                array(
                    'id' => 137,
                    'county_id' => 36,
                    'name' => 'Merkezköyler',
                ),
                137 =>
                array(
                    'id' => 138,
                    'county_id' => 36,
                    'name' => 'Seydiler',
                ),
                138 =>
                array(
                    'id' => 139,
                    'county_id' => 37,
                    'name' => 'Kızılören',
                ),
                139 =>
                array(
                    'id' => 140,
                    'county_id' => 37,
                    'name' => 'Merkezköyler',
                ),
                140 =>
                array(
                    'id' => 141,
                    'county_id' => 38,
                    'name' => 'Adliye',
                ),
                141 =>
                array(
                    'id' => 142,
                    'county_id' => 38,
                    'name' => 'Beyyazı',
                ),
                142 =>
                array(
                    'id' => 143,
                    'county_id' => 38,
                    'name' => 'Çarşı',
                ),
                143 =>
                array(
                    'id' => 144,
                    'county_id' => 38,
                    'name' => 'Çayırbağ',
                ),
                144 =>
                array(
                    'id' => 145,
                    'county_id' => 38,
                    'name' => 'Çıkrık',
                ),
                145 =>
                array(
                    'id' => 146,
                    'county_id' => 38,
                    'name' => 'Değirmenayvalı',
                ),
                146 =>
                array(
                    'id' => 147,
                    'county_id' => 38,
                    'name' => 'Erkmen',
                ),
                147 =>
                array(
                    'id' => 148,
                    'county_id' => 38,
                    'name' => 'Fatih',
                ),
                148 =>
                array(
                    'id' => 149,
                    'county_id' => 38,
                    'name' => 'Fethibey',
                ),
                149 =>
                array(
                    'id' => 150,
                    'county_id' => 38,
                    'name' => 'Gebeceler',
                ),
                150 =>
                array(
                    'id' => 151,
                    'county_id' => 38,
                    'name' => 'Işıklar',
                ),
                151 =>
                array(
                    'id' => 152,
                    'county_id' => 38,
                    'name' => 'Kale',
                ),
                152 =>
                array(
                    'id' => 153,
                    'county_id' => 38,
                    'name' => 'Kocatepe',
                ),
                153 =>
                array(
                    'id' => 154,
                    'county_id' => 38,
                    'name' => 'Merkezköyler',
                ),
                154 =>
                array(
                    'id' => 155,
                    'county_id' => 38,
                    'name' => 'Nuribey',
                ),
                155 =>
                array(
                    'id' => 156,
                    'county_id' => 38,
                    'name' => 'Salar',
                ),
                156 =>
                array(
                    'id' => 157,
                    'county_id' => 38,
                    'name' => 'Susuz',
                ),
                157 =>
                array(
                    'id' => 158,
                    'county_id' => 38,
                    'name' => 'Sülümenli',
                ),
                158 =>
                array(
                    'id' => 159,
                    'county_id' => 38,
                    'name' => 'Sülün',
                ),
                159 =>
                array(
                    'id' => 160,
                    'county_id' => 38,
                    'name' => 'Uydukent',
                ),
                160 =>
                array(
                    'id' => 161,
                    'county_id' => 39,
                    'name' => 'Akharım',
                ),
                161 =>
                array(
                    'id' => 162,
                    'county_id' => 39,
                    'name' => 'Merkezköyler',
                ),
                162 =>
                array(
                    'id' => 163,
                    'county_id' => 39,
                    'name' => 'Sandıklı',
                ),
                163 =>
                array(
                    'id' => 164,
                    'county_id' => 40,
                    'name' => 'Ahmetpaşa',
                ),
                164 =>
                array(
                    'id' => 165,
                    'county_id' => 40,
                    'name' => 'Akören',
                ),
                165 =>
                array(
                    'id' => 166,
                    'county_id' => 40,
                    'name' => 'Düzağaç',
                ),
                166 =>
                array(
                    'id' => 167,
                    'county_id' => 40,
                    'name' => 'Güney',
                ),
                167 =>
                array(
                    'id' => 168,
                    'county_id' => 40,
                    'name' => 'Kılıçarslan',
                ),
                168 =>
                array(
                    'id' => 169,
                    'county_id' => 40,
                    'name' => 'Kırka',
                ),
                169 =>
                array(
                    'id' => 170,
                    'county_id' => 40,
                    'name' => 'Küçükhüyük',
                ),
                170 =>
                array(
                    'id' => 171,
                    'county_id' => 40,
                    'name' => 'Merkezköyler',
                ),
                171 =>
                array(
                    'id' => 172,
                    'county_id' => 40,
                    'name' => 'Serban',
                ),
                172 =>
                array(
                    'id' => 173,
                    'county_id' => 40,
                    'name' => 'Sinanpaşa',
                ),
                173 =>
                array(
                    'id' => 174,
                    'county_id' => 40,
                    'name' => 'Taşoluk',
                ),
                174 =>
                array(
                    'id' => 175,
                    'county_id' => 40,
                    'name' => 'Tınaztepe',
                ),
                175 =>
                array(
                    'id' => 176,
                    'county_id' => 41,
                    'name' => 'Dereçine',
                ),
                176 =>
                array(
                    'id' => 177,
                    'county_id' => 41,
                    'name' => 'Merkezköyler',
                ),
                177 =>
                array(
                    'id' => 178,
                    'county_id' => 41,
                    'name' => 'Sultandağı',
                ),
                178 =>
                array(
                    'id' => 179,
                    'county_id' => 41,
                    'name' => 'Yeşilçiftlik',
                ),
                179 =>
                array(
                    'id' => 180,
                    'county_id' => 42,
                    'name' => 'Karaadilli',
                ),
                180 =>
                array(
                    'id' => 181,
                    'county_id' => 42,
                    'name' => 'Merkezköyler',
                ),
                181 =>
                array(
                    'id' => 182,
                    'county_id' => 42,
                    'name' => 'Şuhut',
                ),
                182 =>
                array(
                    'id' => 183,
                    'county_id' => 43,
                    'name' => 'Diyadin',
                ),
                183 =>
                array(
                    'id' => 184,
                    'county_id' => 43,
                    'name' => 'Merkezköyler',
                ),
                184 =>
                array(
                    'id' => 185,
                    'county_id' => 44,
                    'name' => 'Doğubayazıt',
                ),
                185 =>
                array(
                    'id' => 186,
                    'county_id' => 44,
                    'name' => 'Merkezköyler',
                ),
                186 =>
                array(
                    'id' => 187,
                    'county_id' => 45,
                    'name' => 'Eleşkirt',
                ),
                187 =>
                array(
                    'id' => 188,
                    'county_id' => 45,
                    'name' => 'Merkezköyler',
                ),
                188 =>
                array(
                    'id' => 189,
                    'county_id' => 45,
                    'name' => 'Tahir',
                ),
                189 =>
                array(
                    'id' => 190,
                    'county_id' => 45,
                    'name' => 'Yayladüzü',
                ),
                190 =>
                array(
                    'id' => 191,
                    'county_id' => 45,
                    'name' => 'Yücekapı',
                ),
                191 =>
                array(
                    'id' => 192,
                    'county_id' => 46,
                    'name' => 'Hamur',
                ),
                192 =>
                array(
                    'id' => 193,
                    'county_id' => 46,
                    'name' => 'Merkezköyler',
                ),
                193 =>
                array(
                    'id' => 194,
                    'county_id' => 47,
                    'name' => 'Fevziçakmak',
                ),
                194 =>
                array(
                    'id' => 195,
                    'county_id' => 47,
                    'name' => 'Kazımkarabekir',
                ),
                195 =>
                array(
                    'id' => 196,
                    'county_id' => 47,
                    'name' => 'Merkezköyler',
                ),
                196 =>
                array(
                    'id' => 197,
                    'county_id' => 48,
                    'name' => 'Dedeli',
                ),
                197 =>
                array(
                    'id' => 198,
                    'county_id' => 48,
                    'name' => 'Merkezköyler',
                ),
                198 =>
                array(
                    'id' => 199,
                    'county_id' => 48,
                    'name' => 'Patnos',
                ),
                199 =>
                array(
                    'id' => 200,
                    'county_id' => 48,
                    'name' => 'Sarısu',
                ),
                200 =>
                array(
                    'id' => 201,
                    'county_id' => 49,
                    'name' => 'Merkezköyler',
                ),
                201 =>
                array(
                    'id' => 202,
                    'county_id' => 49,
                    'name' => 'Taşlıçay',
                ),
                202 =>
                array(
                    'id' => 203,
                    'county_id' => 50,
                    'name' => 'Merkezköyler',
                ),
                203 =>
                array(
                    'id' => 204,
                    'county_id' => 50,
                    'name' => 'Tutak',
                ),
                204 =>
                array(
                    'id' => 205,
                    'county_id' => 51,
                    'name' => 'Ağaçören',
                ),
                205 =>
                array(
                    'id' => 206,
                    'county_id' => 51,
                    'name' => 'Merkezköyler',
                ),
                206 =>
                array(
                    'id' => 207,
                    'county_id' => 52,
                    'name' => 'Eskil',
                ),
                207 =>
                array(
                    'id' => 208,
                    'county_id' => 52,
                    'name' => 'Eşmekaya',
                ),
                208 =>
                array(
                    'id' => 209,
                    'county_id' => 52,
                    'name' => 'Merkezköyler',
                ),
                209 =>
                array(
                    'id' => 210,
                    'county_id' => 53,
                    'name' => 'Demirci',
                ),
                210 =>
                array(
                    'id' => 211,
                    'county_id' => 53,
                    'name' => 'Gülağaç',
                ),
                211 =>
                array(
                    'id' => 212,
                    'county_id' => 53,
                    'name' => 'Gülpınar',
                ),
                212 =>
                array(
                    'id' => 213,
                    'county_id' => 53,
                    'name' => 'Merkezköyler',
                ),
                213 =>
                array(
                    'id' => 214,
                    'county_id' => 53,
                    'name' => 'Saratlı',
                ),
                214 =>
                array(
                    'id' => 215,
                    'county_id' => 54,
                    'name' => 'Güzelyurt',
                ),
                215 =>
                array(
                    'id' => 216,
                    'county_id' => 54,
                    'name' => 'Ihlara',
                ),
                216 =>
                array(
                    'id' => 217,
                    'county_id' => 54,
                    'name' => 'Merkezköyler',
                ),
                217 =>
                array(
                    'id' => 218,
                    'county_id' => 54,
                    'name' => 'Selime',
                ),
                218 =>
                array(
                    'id' => 219,
                    'county_id' => 55,
                    'name' => 'Bağlıkaya',
                ),
                219 =>
                array(
                    'id' => 220,
                    'county_id' => 55,
                    'name' => 'Çarşı',
                ),
                220 =>
                array(
                    'id' => 221,
                    'county_id' => 55,
                    'name' => 'Helvadere',
                ),
                221 =>
                array(
                    'id' => 222,
                    'county_id' => 55,
                    'name' => 'Merkezköyler',
                ),
                222 =>
                array(
                    'id' => 223,
                    'county_id' => 55,
                    'name' => 'Sağlık',
                ),
                223 =>
                array(
                    'id' => 224,
                    'county_id' => 55,
                    'name' => 'Sanayi',
                ),
                224 =>
                array(
                    'id' => 225,
                    'county_id' => 55,
                    'name' => 'Taşpınar',
                ),
                225 =>
                array(
                    'id' => 226,
                    'county_id' => 55,
                    'name' => 'Topakkaya',
                ),
                226 =>
                array(
                    'id' => 227,
                    'county_id' => 55,
                    'name' => 'Yenikent',
                ),
                227 =>
                array(
                    'id' => 228,
                    'county_id' => 55,
                    'name' => 'Yeşilova',
                ),
                228 =>
                array(
                    'id' => 229,
                    'county_id' => 55,
                    'name' => 'Yeşiltepe',
                ),
                229 =>
                array(
                    'id' => 230,
                    'county_id' => 56,
                    'name' => 'Balcı',
                ),
                230 =>
                array(
                    'id' => 231,
                    'county_id' => 56,
                    'name' => 'Merkezköyler',
                ),
                231 =>
                array(
                    'id' => 232,
                    'county_id' => 56,
                    'name' => 'Ortaköy',
                ),
                232 =>
                array(
                    'id' => 233,
                    'county_id' => 57,
                    'name' => 'Merkezköyler',
                ),
                233 =>
                array(
                    'id' => 234,
                    'county_id' => 57,
                    'name' => 'Sarıyahşi',
                ),
                234 =>
                array(
                    'id' => 235,
                    'county_id' => 58,
                    'name' => 'Sultanhanı',
                ),
                235 =>
                array(
                    'id' => 236,
                    'county_id' => 59,
                    'name' => 'Göynücek',
                ),
                236 =>
                array(
                    'id' => 237,
                    'county_id' => 59,
                    'name' => 'Merkezköyler',
                ),
                237 =>
                array(
                    'id' => 238,
                    'county_id' => 60,
                    'name' => 'Gümüşhacıköy',
                ),
                238 =>
                array(
                    'id' => 239,
                    'county_id' => 60,
                    'name' => 'Merkezköyler',
                ),
                239 =>
                array(
                    'id' => 240,
                    'county_id' => 61,
                    'name' => 'Hamamözü',
                ),
                240 =>
                array(
                    'id' => 241,
                    'county_id' => 61,
                    'name' => 'Merkezköyler',
                ),
                241 =>
                array(
                    'id' => 242,
                    'county_id' => 62,
                    'name' => 'Dereboyu',
                ),
                242 =>
                array(
                    'id' => 243,
                    'county_id' => 62,
                    'name' => 'Gen.hikmetakıncı',
                ),
                243 =>
                array(
                    'id' => 244,
                    'county_id' => 62,
                    'name' => 'Gökmedrese',
                ),
                244 =>
                array(
                    'id' => 245,
                    'county_id' => 62,
                    'name' => 'Merkezköyler',
                ),
                245 =>
                array(
                    'id' => 246,
                    'county_id' => 62,
                    'name' => 'Ziyaret',
                ),
                246 =>
                array(
                    'id' => 247,
                    'county_id' => 63,
                    'name' => 'Merkezköyler',
                ),
                247 =>
                array(
                    'id' => 248,
                    'county_id' => 63,
                    'name' => 'Merzifon',
                ),
                248 =>
                array(
                    'id' => 249,
                    'county_id' => 64,
                    'name' => 'Merkezköyler',
                ),
                249 =>
                array(
                    'id' => 250,
                    'county_id' => 64,
                    'name' => 'Suluova',
                ),
                250 =>
                array(
                    'id' => 251,
                    'county_id' => 65,
                    'name' => 'Merkezköyler',
                ),
                251 =>
                array(
                    'id' => 252,
                    'county_id' => 65,
                    'name' => 'Taşova',
                ),
                252 =>
                array(
                    'id' => 253,
                    'county_id' => 66,
                    'name' => 'Akyurt',
                ),
                253 =>
                array(
                    'id' => 254,
                    'county_id' => 67,
                    'name' => 'Altındağ',
                ),
                254 =>
                array(
                    'id' => 255,
                    'county_id' => 67,
                    'name' => 'Aydınlıkevler',
                ),
                255 =>
                array(
                    'id' => 256,
                    'county_id' => 67,
                    'name' => 'Hasköy',
                ),
                256 =>
                array(
                    'id' => 257,
                    'county_id' => 67,
                    'name' => 'İskitler',
                ),
                257 =>
                array(
                    'id' => 258,
                    'county_id' => 67,
                    'name' => 'Karacaören',
                ),
                258 =>
                array(
                    'id' => 259,
                    'county_id' => 67,
                    'name' => 'Samanpazarı',
                ),
                259 =>
                array(
                    'id' => 260,
                    'county_id' => 67,
                    'name' => 'Ulubey',
                ),
                260 =>
                array(
                    'id' => 261,
                    'county_id' => 67,
                    'name' => 'Ulus',
                ),
                261 =>
                array(
                    'id' => 262,
                    'county_id' => 68,
                    'name' => 'Ayaş',
                ),
                262 =>
                array(
                    'id' => 263,
                    'county_id' => 69,
                    'name' => 'Bala',
                ),
                263 =>
                array(
                    'id' => 264,
                    'county_id' => 70,
                    'name' => 'Beypazarı',
                ),
                264 =>
                array(
                    'id' => 265,
                    'county_id' => 71,
                    'name' => 'Çamlıdere',
                ),
                265 =>
                array(
                    'id' => 266,
                    'county_id' => 72,
                    'name' => '100.Yıl',
                ),
                266 =>
                array(
                    'id' => 267,
                    'county_id' => 72,
                    'name' => 'Ahlatlıbel',
                ),
                267 =>
                array(
                    'id' => 268,
                    'county_id' => 72,
                    'name' => 'Bahçelievler',
                ),
                268 =>
                array(
                    'id' => 269,
                    'county_id' => 72,
                    'name' => 'Balgat',
                ),
                269 =>
                array(
                    'id' => 270,
                    'county_id' => 72,
                    'name' => 'Bilkent',
                ),
                270 =>
                array(
                    'id' => 271,
                    'county_id' => 72,
                    'name' => 'Birlik',
                ),
                271 =>
                array(
                    'id' => 272,
                    'county_id' => 72,
                    'name' => 'Cebeci',
                ),
                272 =>
                array(
                    'id' => 273,
                    'county_id' => 72,
                    'name' => 'Çankaya',
                ),
                273 =>
                array(
                    'id' => 274,
                    'county_id' => 72,
                    'name' => 'Çayyolu',
                ),
                274 =>
                array(
                    'id' => 275,
                    'county_id' => 72,
                    'name' => 'Dikmen',
                ),
                275 =>
                array(
                    'id' => 276,
                    'county_id' => 72,
                    'name' => 'Esat',
                ),
                276 =>
                array(
                    'id' => 277,
                    'county_id' => 72,
                    'name' => 'Karataş',
                ),
                277 =>
                array(
                    'id' => 278,
                    'county_id' => 72,
                    'name' => 'Kavaklıdere',
                ),
                278 =>
                array(
                    'id' => 279,
                    'county_id' => 72,
                    'name' => 'Maltepe',
                ),
                279 =>
                array(
                    'id' => 280,
                    'county_id' => 72,
                    'name' => 'Öveçler',
                ),
                280 =>
                array(
                    'id' => 281,
                    'county_id' => 72,
                    'name' => 'Yenişehir',
                ),
                281 =>
                array(
                    'id' => 282,
                    'county_id' => 72,
                    'name' => 'Yıldız',
                ),
                282 =>
                array(
                    'id' => 283,
                    'county_id' => 72,
                    'name' => 'Zafertepe',
                ),
                283 =>
                array(
                    'id' => 284,
                    'county_id' => 73,
                    'name' => 'Çubuk',
                ),
                284 =>
                array(
                    'id' => 285,
                    'county_id' => 74,
                    'name' => 'Elmadağ',
                ),
                285 =>
                array(
                    'id' => 286,
                    'county_id' => 74,
                    'name' => 'Hasanoğlan',
                ),
                286 =>
                array(
                    'id' => 287,
                    'county_id' => 75,
                    'name' => '30Ağustos',
                ),
                287 =>
                array(
                    'id' => 288,
                    'county_id' => 75,
                    'name' => 'Bahçekapı',
                ),
                288 =>
                array(
                    'id' => 289,
                    'county_id' => 75,
                    'name' => 'Elvankent',
                ),
                289 =>
                array(
                    'id' => 290,
                    'county_id' => 75,
                    'name' => 'Eryamanevleri',
                ),
                290 =>
                array(
                    'id' => 291,
                    'county_id' => 75,
                    'name' => 'Etimesgut',
                ),
                291 =>
                array(
                    'id' => 292,
                    'county_id' => 75,
                    'name' => 'Göksu',
                ),
                292 =>
                array(
                    'id' => 293,
                    'county_id' => 75,
                    'name' => 'Güzelkent',
                ),
                293 =>
                array(
                    'id' => 294,
                    'county_id' => 75,
                    'name' => 'Yurtçu',
                ),
                294 =>
                array(
                    'id' => 295,
                    'county_id' => 76,
                    'name' => 'Evren',
                ),
                295 =>
                array(
                    'id' => 296,
                    'county_id' => 77,
                    'name' => 'Gölbaşı',
                ),
                296 =>
                array(
                    'id' => 297,
                    'county_id' => 78,
                    'name' => 'Güdül',
                ),
                297 =>
                array(
                    'id' => 298,
                    'county_id' => 79,
                    'name' => 'Haymana',
                ),
                298 =>
                array(
                    'id' => 299,
                    'county_id' => 80,
                    'name' => 'Kazan',
                ),
                299 =>
                array(
                    'id' => 300,
                    'county_id' => 81,
                    'name' => 'Kalecik',
                ),
                300 =>
                array(
                    'id' => 301,
                    'county_id' => 82,
                    'name' => 'Aktepe',
                ),
                301 =>
                array(
                    'id' => 302,
                    'county_id' => 82,
                    'name' => 'Bağlum',
                ),
                302 =>
                array(
                    'id' => 303,
                    'county_id' => 82,
                    'name' => 'Esertepe',
                ),
                303 =>
                array(
                    'id' => 304,
                    'county_id' => 82,
                    'name' => 'Etlik',
                ),
                304 =>
                array(
                    'id' => 305,
                    'county_id' => 82,
                    'name' => 'Hasköy S.evleri',
                ),
                305 =>
                array(
                    'id' => 306,
                    'county_id' => 82,
                    'name' => 'Kalaba',
                ),
                306 =>
                array(
                    'id' => 307,
                    'county_id' => 82,
                    'name' => 'Sanatoryum',
                ),
                307 =>
                array(
                    'id' => 308,
                    'county_id' => 82,
                    'name' => 'Şenlik',
                ),
                308 =>
                array(
                    'id' => 309,
                    'county_id' => 82,
                    'name' => 'Ufuktepe',
                ),
                309 =>
                array(
                    'id' => 310,
                    'county_id' => 83,
                    'name' => 'Kızılcahamam',
                ),
                310 =>
                array(
                    'id' => 311,
                    'county_id' => 84,
                    'name' => 'Abidinpaşa',
                ),
                311 =>
                array(
                    'id' => 312,
                    'county_id' => 84,
                    'name' => 'Akdere',
                ),
                312 =>
                array(
                    'id' => 313,
                    'county_id' => 84,
                    'name' => 'Demirlibahçe',
                ),
                313 =>
                array(
                    'id' => 314,
                    'county_id' => 84,
                    'name' => 'Gülveren',
                ),
                314 =>
                array(
                    'id' => 315,
                    'county_id' => 84,
                    'name' => 'Hüseyingazi',
                ),
                315 =>
                array(
                    'id' => 316,
                    'county_id' => 84,
                    'name' => 'Kayaş',
                ),
                316 =>
                array(
                    'id' => 317,
                    'county_id' => 84,
                    'name' => 'Lalahan',
                ),
                317 =>
                array(
                    'id' => 318,
                    'county_id' => 84,
                    'name' => 'Mamak',
                ),
                318 =>
                array(
                    'id' => 319,
                    'county_id' => 85,
                    'name' => 'Nallıhan',
                ),
                319 =>
                array(
                    'id' => 320,
                    'county_id' => 86,
                    'name' => 'Polatlı',
                ),
                320 =>
                array(
                    'id' => 321,
                    'county_id' => 87,
                    'name' => 'Pursaklar',
                ),
                321 =>
                array(
                    'id' => 322,
                    'county_id' => 88,
                    'name' => 'Ahievran',
                ),
                322 =>
                array(
                    'id' => 323,
                    'county_id' => 88,
                    'name' => 'Fatih',
                ),
                323 =>
                array(
                    'id' => 324,
                    'county_id' => 88,
                    'name' => 'Sincan',
                ),
                324 =>
                array(
                    'id' => 325,
                    'county_id' => 88,
                    'name' => 'Temelli',
                ),
                325 =>
                array(
                    'id' => 326,
                    'county_id' => 88,
                    'name' => 'Yenikent',
                ),
                326 =>
                array(
                    'id' => 327,
                    'county_id' => 89,
                    'name' => 'Şereflikoçhisar',
                ),
                327 =>
                array(
                    'id' => 328,
                    'county_id' => 90,
                    'name' => 'A.o.çiftliği',
                ),
                328 =>
                array(
                    'id' => 329,
                    'county_id' => 90,
                    'name' => 'Batıkent',
                ),
                329 =>
                array(
                    'id' => 330,
                    'county_id' => 90,
                    'name' => 'Demetevler',
                ),
                330 =>
                array(
                    'id' => 331,
                    'county_id' => 90,
                    'name' => 'İvedik Osb',
                ),
                331 =>
                array(
                    'id' => 332,
                    'county_id' => 90,
                    'name' => 'Karşıyaka',
                ),
                332 =>
                array(
                    'id' => 333,
                    'county_id' => 90,
                    'name' => 'Macunköy',
                ),
                333 =>
                array(
                    'id' => 334,
                    'county_id' => 90,
                    'name' => 'Ostim',
                ),
                334 =>
                array(
                    'id' => 335,
                    'county_id' => 90,
                    'name' => 'Şentepe',
                ),
                335 =>
                array(
                    'id' => 336,
                    'county_id' => 90,
                    'name' => 'Yenimahalle',
                ),
                336 =>
                array(
                    'id' => 337,
                    'county_id' => 91,
                    'name' => 'Akseki',
                ),
                337 =>
                array(
                    'id' => 338,
                    'county_id' => 91,
                    'name' => 'Cevizli',
                ),
                338 =>
                array(
                    'id' => 339,
                    'county_id' => 92,
                    'name' => 'Aksu',
                ),
                339 =>
                array(
                    'id' => 340,
                    'county_id' => 93,
                    'name' => 'Alanya',
                ),
                340 =>
                array(
                    'id' => 341,
                    'county_id' => 93,
                    'name' => 'Avsallar',
                ),
                341 =>
                array(
                    'id' => 342,
                    'county_id' => 93,
                    'name' => 'Demirtaş',
                ),
                342 =>
                array(
                    'id' => 343,
                    'county_id' => 93,
                    'name' => 'Kestel',
                ),
                343 =>
                array(
                    'id' => 344,
                    'county_id' => 93,
                    'name' => 'Mahmutlar',
                ),
                344 =>
                array(
                    'id' => 345,
                    'county_id' => 94,
                    'name' => 'Davazlar',
                ),
                345 =>
                array(
                    'id' => 346,
                    'county_id' => 94,
                    'name' => 'Demre',
                ),
                346 =>
                array(
                    'id' => 347,
                    'county_id' => 94,
                    'name' => 'Kale',
                ),
                347 =>
                array(
                    'id' => 348,
                    'county_id' => 95,
                    'name' => 'Döşemealtı',
                ),
                348 =>
                array(
                    'id' => 349,
                    'county_id' => 96,
                    'name' => 'Akçay',
                ),
                349 =>
                array(
                    'id' => 350,
                    'county_id' => 96,
                    'name' => 'Elmalı',
                ),
                350 =>
                array(
                    'id' => 351,
                    'county_id' => 97,
                    'name' => 'Finike',
                ),
                351 =>
                array(
                    'id' => 352,
                    'county_id' => 98,
                    'name' => 'Gazipaşa',
                ),
                352 =>
                array(
                    'id' => 353,
                    'county_id' => 99,
                    'name' => 'Gündoğmuş',
                ),
                353 =>
                array(
                    'id' => 354,
                    'county_id' => 100,
                    'name' => 'Aydınkent',
                ),
                354 =>
                array(
                    'id' => 355,
                    'county_id' => 101,
                    'name' => 'Cemre',
                ),
                355 =>
                array(
                    'id' => 356,
                    'county_id' => 101,
                    'name' => 'Gömbe',
                ),
                356 =>
                array(
                    'id' => 357,
                    'county_id' => 101,
                    'name' => 'Kalkan',
                ),
                357 =>
                array(
                    'id' => 358,
                    'county_id' => 101,
                    'name' => 'Kaş',
                ),
                358 =>
                array(
                    'id' => 359,
                    'county_id' => 101,
                    'name' => 'Kınık',
                ),
                359 =>
                array(
                    'id' => 360,
                    'county_id' => 101,
                    'name' => 'Ova',
                ),
                360 =>
                array(
                    'id' => 361,
                    'county_id' => 101,
                    'name' => 'Yeşilköy',
                ),
                361 =>
                array(
                    'id' => 362,
                    'county_id' => 102,
                    'name' => 'Beldibi',
                ),
                362 =>
                array(
                    'id' => 363,
                    'county_id' => 102,
                    'name' => 'Beycik',
                ),
                363 =>
                array(
                    'id' => 364,
                    'county_id' => 102,
                    'name' => 'Çamyuva',
                ),
                364 =>
                array(
                    'id' => 365,
                    'county_id' => 102,
                    'name' => 'Göynük',
                ),
                365 =>
                array(
                    'id' => 366,
                    'county_id' => 102,
                    'name' => 'Kemer',
                ),
                366 =>
                array(
                    'id' => 367,
                    'county_id' => 102,
                    'name' => 'Tekirova',
                ),
                367 =>
                array(
                    'id' => 368,
                    'county_id' => 103,
                    'name' => 'Ahatlı',
                ),
                368 =>
                array(
                    'id' => 369,
                    'county_id' => 103,
                    'name' => 'Altınova',
                ),
                369 =>
                array(
                    'id' => 370,
                    'county_id' => 103,
                    'name' => 'Dokuma',
                ),
                370 =>
                array(
                    'id' => 371,
                    'county_id' => 103,
                    'name' => 'Duraliler',
                ),
                371 =>
                array(
                    'id' => 372,
                    'county_id' => 103,
                    'name' => 'Düdenbaşı',
                ),
                372 =>
                array(
                    'id' => 373,
                    'county_id' => 103,
                    'name' => 'Erenköy',
                ),
                373 =>
                array(
                    'id' => 374,
                    'county_id' => 103,
                    'name' => 'Sütçüler',
                ),
                374 =>
                array(
                    'id' => 375,
                    'county_id' => 103,
                    'name' => 'Varsak',
                ),
                375 =>
                array(
                    'id' => 376,
                    'county_id' => 103,
                    'name' => 'Yeniemek',
                ),
                376 =>
                array(
                    'id' => 377,
                    'county_id' => 104,
                    'name' => 'Arapsuyu',
                ),
                377 =>
                array(
                    'id' => 378,
                    'county_id' => 104,
                    'name' => 'Liman',
                ),
                378 =>
                array(
                    'id' => 379,
                    'county_id' => 105,
                    'name' => 'Korkuteli',
                ),
                379 =>
                array(
                    'id' => 380,
                    'county_id' => 106,
                    'name' => 'Kumluca',
                ),
                380 =>
                array(
                    'id' => 381,
                    'county_id' => 106,
                    'name' => 'Mavikent',
                ),
                381 =>
                array(
                    'id' => 382,
                    'county_id' => 107,
                    'name' => 'Çolaklı',
                ),
                382 =>
                array(
                    'id' => 383,
                    'county_id' => 107,
                    'name' => 'Manavgat',
                ),
                383 =>
                array(
                    'id' => 384,
                    'county_id' => 107,
                    'name' => 'Side',
                ),
                384 =>
                array(
                    'id' => 385,
                    'county_id' => 107,
                    'name' => 'Taşağıl',
                ),
                385 =>
                array(
                    'id' => 386,
                    'county_id' => 108,
                    'name' => 'Bahçelievler',
                ),
                386 =>
                array(
                    'id' => 387,
                    'county_id' => 108,
                    'name' => 'Çarşı',
                ),
                387 =>
                array(
                    'id' => 388,
                    'county_id' => 108,
                    'name' => 'Eskisanayi',
                ),
                388 =>
                array(
                    'id' => 389,
                    'county_id' => 108,
                    'name' => 'Fener',
                ),
                389 =>
                array(
                    'id' => 390,
                    'county_id' => 108,
                    'name' => 'Gençlik',
                ),
                390 =>
                array(
                    'id' => 391,
                    'county_id' => 108,
                    'name' => 'Kızıltoprak',
                ),
                391 =>
                array(
                    'id' => 392,
                    'county_id' => 108,
                    'name' => 'Lara',
                ),
                392 =>
                array(
                    'id' => 393,
                    'county_id' => 108,
                    'name' => 'Meltem',
                ),
                393 =>
                array(
                    'id' => 394,
                    'county_id' => 108,
                    'name' => 'Meydankavağı',
                ),
                394 =>
                array(
                    'id' => 395,
                    'county_id' => 109,
                    'name' => 'Serik',
                ),
                395 =>
                array(
                    'id' => 396,
                    'county_id' => 110,
                    'name' => 'Çıldır',
                ),
                396 =>
                array(
                    'id' => 397,
                    'county_id' => 110,
                    'name' => 'Merkezköyler',
                ),
                397 =>
                array(
                    'id' => 398,
                    'county_id' => 111,
                    'name' => 'Damal',
                ),
                398 =>
                array(
                    'id' => 399,
                    'county_id' => 111,
                    'name' => 'Merkezköyler',
                ),
                399 =>
                array(
                    'id' => 400,
                    'county_id' => 112,
                    'name' => 'Göle',
                ),
                400 =>
                array(
                    'id' => 401,
                    'county_id' => 112,
                    'name' => 'Köprülü',
                ),
                401 =>
                array(
                    'id' => 402,
                    'county_id' => 112,
                    'name' => 'Merkezköyler',
                ),
                402 =>
                array(
                    'id' => 403,
                    'county_id' => 113,
                    'name' => 'Hanak',
                ),
                403 =>
                array(
                    'id' => 404,
                    'county_id' => 113,
                    'name' => 'Merkezköyler',
                ),
                404 =>
                array(
                    'id' => 405,
                    'county_id' => 114,
                    'name' => 'Ardahan',
                ),
                405 =>
                array(
                    'id' => 406,
                    'county_id' => 114,
                    'name' => 'Hasköy',
                ),
                406 =>
                array(
                    'id' => 407,
                    'county_id' => 114,
                    'name' => 'Merkezköyler',
                ),
                407 =>
                array(
                    'id' => 408,
                    'county_id' => 114,
                    'name' => 'Yanlızçam',
                ),
                408 =>
                array(
                    'id' => 409,
                    'county_id' => 115,
                    'name' => 'Merkezköyler',
                ),
                409 =>
                array(
                    'id' => 410,
                    'county_id' => 115,
                    'name' => 'Posof',
                ),
                410 =>
                array(
                    'id' => 411,
                    'county_id' => 116,
                    'name' => 'Ardanuç',
                ),
                411 =>
                array(
                    'id' => 412,
                    'county_id' => 116,
                    'name' => 'Merkezköyler',
                ),
                412 =>
                array(
                    'id' => 413,
                    'county_id' => 117,
                    'name' => 'Arhavi',
                ),
                413 =>
                array(
                    'id' => 414,
                    'county_id' => 117,
                    'name' => 'Merkezköyler',
                ),
                414 =>
                array(
                    'id' => 415,
                    'county_id' => 118,
                    'name' => 'Borçka',
                ),
                415 =>
                array(
                    'id' => 416,
                    'county_id' => 118,
                    'name' => 'Merkezköyler',
                ),
                416 =>
                array(
                    'id' => 417,
                    'county_id' => 119,
                    'name' => 'Hopa',
                ),
                417 =>
                array(
                    'id' => 418,
                    'county_id' => 119,
                    'name' => 'Merkezköyler',
                ),
                418 =>
                array(
                    'id' => 419,
                    'county_id' => 120,
                    'name' => 'Kemalpaşa',
                ),
                419 =>
                array(
                    'id' => 420,
                    'county_id' => 120,
                    'name' => 'Merkezköyler',
                ),
                420 =>
                array(
                    'id' => 421,
                    'county_id' => 121,
                    'name' => 'Artvin',
                ),
                421 =>
                array(
                    'id' => 422,
                    'county_id' => 121,
                    'name' => 'Merkezköyler',
                ),
                422 =>
                array(
                    'id' => 423,
                    'county_id' => 122,
                    'name' => 'Göktaş',
                ),
                423 =>
                array(
                    'id' => 424,
                    'county_id' => 122,
                    'name' => 'Merkezköyler',
                ),
                424 =>
                array(
                    'id' => 425,
                    'county_id' => 123,
                    'name' => 'Merkezköyler',
                ),
                425 =>
                array(
                    'id' => 426,
                    'county_id' => 123,
                    'name' => 'Şavşat',
                ),
                426 =>
                array(
                    'id' => 427,
                    'county_id' => 124,
                    'name' => 'Merkezköyler',
                ),
                427 =>
                array(
                    'id' => 428,
                    'county_id' => 124,
                    'name' => 'Yusufeli',
                ),
                428 =>
                array(
                    'id' => 429,
                    'county_id' => 125,
                    'name' => 'Bozdoğan',
                ),
                429 =>
                array(
                    'id' => 430,
                    'county_id' => 126,
                    'name' => 'Çubukdağı',
                ),
                430 =>
                array(
                    'id' => 431,
                    'county_id' => 127,
                    'name' => 'Çine',
                ),
                431 =>
                array(
                    'id' => 432,
                    'county_id' => 128,
                    'name' => 'Akyeniköy',
                ),
                432 =>
                array(
                    'id' => 433,
                    'county_id' => 128,
                    'name' => 'Yenihisar',
                ),
                433 =>
                array(
                    'id' => 434,
                    'county_id' => 129,
                    'name' => 'Çarşı',
                ),
                434 =>
                array(
                    'id' => 435,
                    'county_id' => 129,
                    'name' => 'Kurtuluş',
                ),
                435 =>
                array(
                    'id' => 436,
                    'county_id' => 129,
                    'name' => 'Sanayi',
                ),
                436 =>
                array(
                    'id' => 437,
                    'county_id' => 129,
                    'name' => 'Umurlu',
                ),
                437 =>
                array(
                    'id' => 438,
                    'county_id' => 130,
                    'name' => 'Germencik',
                ),
                438 =>
                array(
                    'id' => 439,
                    'county_id' => 130,
                    'name' => 'Ortaklar',
                ),
                439 =>
                array(
                    'id' => 440,
                    'county_id' => 131,
                    'name' => 'İncirliova',
                ),
                440 =>
                array(
                    'id' => 441,
                    'county_id' => 132,
                    'name' => 'Karacasu',
                ),
                441 =>
                array(
                    'id' => 442,
                    'county_id' => 133,
                    'name' => 'Karpuzlu',
                ),
                442 =>
                array(
                    'id' => 443,
                    'county_id' => 134,
                    'name' => 'Koçarlı',
                ),
                443 =>
                array(
                    'id' => 444,
                    'county_id' => 135,
                    'name' => 'Köşk',
                ),
                444 =>
                array(
                    'id' => 445,
                    'county_id' => 136,
                    'name' => 'Kuşadası',
                ),
                445 =>
                array(
                    'id' => 446,
                    'county_id' => 137,
                    'name' => 'Kuyucak',
                ),
                446 =>
                array(
                    'id' => 447,
                    'county_id' => 138,
                    'name' => 'Nazilli',
                ),
                447 =>
                array(
                    'id' => 448,
                    'county_id' => 138,
                    'name' => 'Sümer',
                ),
                448 =>
                array(
                    'id' => 449,
                    'county_id' => 139,
                    'name' => 'Söke',
                ),
                449 =>
                array(
                    'id' => 450,
                    'county_id' => 140,
                    'name' => 'Sultanhisar',
                ),
                450 =>
                array(
                    'id' => 451,
                    'county_id' => 141,
                    'name' => 'Yenipazar',
                ),
                451 =>
                array(
                    'id' => 452,
                    'county_id' => 142,
                    'name' => 'Altıeylül',
                ),
                452 =>
                array(
                    'id' => 453,
                    'county_id' => 142,
                    'name' => 'Ertuğrul',
                ),
                453 =>
                array(
                    'id' => 454,
                    'county_id' => 142,
                    'name' => 'Gündoğan',
                ),
                454 =>
                array(
                    'id' => 455,
                    'county_id' => 142,
                    'name' => 'Konakpınar',
                ),
                455 =>
                array(
                    'id' => 456,
                    'county_id' => 142,
                    'name' => 'Pamukçu',
                ),
                456 =>
                array(
                    'id' => 457,
                    'county_id' => 142,
                    'name' => 'Plevne',
                ),
                457 =>
                array(
                    'id' => 458,
                    'county_id' => 143,
                    'name' => 'Alibeyadası',
                ),
                458 =>
                array(
                    'id' => 459,
                    'county_id' => 143,
                    'name' => 'Altınova',
                ),
                459 =>
                array(
                    'id' => 460,
                    'county_id' => 143,
                    'name' => 'Ayvalık',
                ),
                460 =>
                array(
                    'id' => 461,
                    'county_id' => 143,
                    'name' => 'Küçükköy',
                ),
                461 =>
                array(
                    'id' => 462,
                    'county_id' => 144,
                    'name' => 'Balya',
                ),
                462 =>
                array(
                    'id' => 463,
                    'county_id' => 144,
                    'name' => 'Patlak',
                ),
                463 =>
                array(
                    'id' => 464,
                    'county_id' => 145,
                    'name' => 'Aksakal',
                ),
                464 =>
                array(
                    'id' => 465,
                    'county_id' => 145,
                    'name' => 'Bandırma',
                ),
                465 =>
                array(
                    'id' => 466,
                    'county_id' => 145,
                    'name' => 'Doğruca',
                ),
                466 =>
                array(
                    'id' => 467,
                    'county_id' => 145,
                    'name' => 'Edincik',
                ),
                467 =>
                array(
                    'id' => 468,
                    'county_id' => 146,
                    'name' => 'Bigadiç',
                ),
                468 =>
                array(
                    'id' => 469,
                    'county_id' => 146,
                    'name' => 'Çağış',
                ),
                469 =>
                array(
                    'id' => 470,
                    'county_id' => 146,
                    'name' => 'Salmanlı',
                ),
                470 =>
                array(
                    'id' => 471,
                    'county_id' => 147,
                    'name' => 'Burhaniye',
                ),
                471 =>
                array(
                    'id' => 472,
                    'county_id' => 147,
                    'name' => 'Çoruk',
                ),
                472 =>
                array(
                    'id' => 473,
                    'county_id' => 147,
                    'name' => 'Pelitköy',
                ),
                473 =>
                array(
                    'id' => 474,
                    'county_id' => 148,
                    'name' => 'Dursunbey',
                ),
                474 =>
                array(
                    'id' => 475,
                    'county_id' => 148,
                    'name' => 'Hacılar',
                ),
                475 =>
                array(
                    'id' => 476,
                    'county_id' => 149,
                    'name' => 'Akçay',
                ),
                476 =>
                array(
                    'id' => 477,
                    'county_id' => 149,
                    'name' => 'Altınoluk',
                ),
                477 =>
                array(
                    'id' => 478,
                    'county_id' => 149,
                    'name' => 'Edremit',
                ),
                478 =>
                array(
                    'id' => 479,
                    'county_id' => 150,
                    'name' => 'Belkıs',
                ),
                479 =>
                array(
                    'id' => 480,
                    'county_id' => 150,
                    'name' => 'Erdek',
                ),
                480 =>
                array(
                    'id' => 481,
                    'county_id' => 151,
                    'name' => 'Dursunlu',
                ),
                481 =>
                array(
                    'id' => 482,
                    'county_id' => 151,
                    'name' => 'Gömeç',
                ),
                482 =>
                array(
                    'id' => 483,
                    'county_id' => 151,
                    'name' => 'Karaağaç',
                ),
                483 =>
                array(
                    'id' => 484,
                    'county_id' => 152,
                    'name' => 'Gönen',
                ),
                484 =>
                array(
                    'id' => 485,
                    'county_id' => 152,
                    'name' => 'Hasanbey',
                ),
                485 =>
                array(
                    'id' => 486,
                    'county_id' => 152,
                    'name' => 'Sarıköy',
                ),
                486 =>
                array(
                    'id' => 487,
                    'county_id' => 153,
                    'name' => 'Havran',
                ),
                487 =>
                array(
                    'id' => 488,
                    'county_id' => 153,
                    'name' => 'Temaşalık',
                ),
                488 =>
                array(
                    'id' => 489,
                    'county_id' => 154,
                    'name' => 'Büyükyenice',
                ),
                489 =>
                array(
                    'id' => 490,
                    'county_id' => 154,
                    'name' => 'Gökçeyazı',
                ),
                490 =>
                array(
                    'id' => 491,
                    'county_id' => 154,
                    'name' => 'İvrindi',
                ),
                491 =>
                array(
                    'id' => 492,
                    'county_id' => 154,
                    'name' => 'Kayapa',
                ),
                492 =>
                array(
                    'id' => 493,
                    'county_id' => 154,
                    'name' => 'Korucu',
                ),
                493 =>
                array(
                    'id' => 494,
                    'county_id' => 154,
                    'name' => 'Sarıca',
                ),
                494 =>
                array(
                    'id' => 495,
                    'county_id' => 155,
                    'name' => 'Atatürk',
                ),
                495 =>
                array(
                    'id' => 496,
                    'county_id' => 155,
                    'name' => 'Karesi',
                ),
                496 =>
                array(
                    'id' => 497,
                    'county_id' => 155,
                    'name' => 'Sakarya',
                ),
                497 =>
                array(
                    'id' => 498,
                    'county_id' => 155,
                    'name' => 'Şamlı',
                ),
                498 =>
                array(
                    'id' => 499,
                    'county_id' => 156,
                    'name' => 'Kepsut',
                ),
                499 =>
                array(
                    'id' => 500,
                    'county_id' => 156,
                    'name' => 'Servet',
                ),
                500 =>
                array(
                    'id' => 501,
                    'county_id' => 157,
                    'name' => 'Kayaca',
                ),
                501 =>
                array(
                    'id' => 502,
                    'county_id' => 157,
                    'name' => 'Manyas',
                ),
                502 =>
                array(
                    'id' => 503,
                    'county_id' => 158,
                    'name' => 'Avşa',
                ),
                503 =>
                array(
                    'id' => 504,
                    'county_id' => 158,
                    'name' => 'Marmara',
                ),
                504 =>
                array(
                    'id' => 505,
                    'county_id' => 159,
                    'name' => 'Karaçam',
                ),
                505 =>
                array(
                    'id' => 506,
                    'county_id' => 159,
                    'name' => 'Sarıbeyler',
                ),
                506 =>
                array(
                    'id' => 507,
                    'county_id' => 159,
                    'name' => 'Savaştepe',
                ),
                507 =>
                array(
                    'id' => 508,
                    'county_id' => 160,
                    'name' => 'Mandıra',
                ),
                508 =>
                array(
                    'id' => 509,
                    'county_id' => 160,
                    'name' => 'Sındırgı',
                ),
                509 =>
                array(
                    'id' => 510,
                    'county_id' => 161,
                    'name' => 'Göbel',
                ),
                510 =>
                array(
                    'id' => 511,
                    'county_id' => 161,
                    'name' => 'Kayıkçı',
                ),
                511 =>
                array(
                    'id' => 512,
                    'county_id' => 161,
                    'name' => 'Susurluk',
                ),
                512 =>
                array(
                    'id' => 513,
                    'county_id' => 162,
                    'name' => 'Amasra',
                ),
                513 =>
                array(
                    'id' => 514,
                    'county_id' => 162,
                    'name' => 'Merkezköyler',
                ),
                514 =>
                array(
                    'id' => 515,
                    'county_id' => 163,
                    'name' => 'Kurucaşile',
                ),
                515 =>
                array(
                    'id' => 516,
                    'county_id' => 163,
                    'name' => 'Merkezköyler',
                ),
                516 =>
                array(
                    'id' => 517,
                    'county_id' => 164,
                    'name' => 'Demirciler',
                ),
                517 =>
                array(
                    'id' => 518,
                    'county_id' => 164,
                    'name' => 'Hasankadı',
                ),
                518 =>
                array(
                    'id' => 519,
                    'county_id' => 164,
                    'name' => 'Kozcağız',
                ),
                519 =>
                array(
                    'id' => 520,
                    'county_id' => 164,
                    'name' => 'Merkezköyler',
                ),
                520 =>
                array(
                    'id' => 521,
                    'county_id' => 164,
                    'name' => 'Yenisanayi',
                ),
                521 =>
                array(
                    'id' => 522,
                    'county_id' => 165,
                    'name' => 'Abdipaşa',
                ),
                522 =>
                array(
                    'id' => 523,
                    'county_id' => 165,
                    'name' => 'Kumluca',
                ),
                523 =>
                array(
                    'id' => 524,
                    'county_id' => 165,
                    'name' => 'Merkezköyler',
                ),
                524 =>
                array(
                    'id' => 525,
                    'county_id' => 165,
                    'name' => 'Ulus',
                ),
                525 =>
                array(
                    'id' => 526,
                    'county_id' => 166,
                    'name' => 'Beşiri',
                ),
                526 =>
                array(
                    'id' => 527,
                    'county_id' => 166,
                    'name' => 'İkiköprü',
                ),
                527 =>
                array(
                    'id' => 528,
                    'county_id' => 166,
                    'name' => 'Merkezköyler',
                ),
                528 =>
                array(
                    'id' => 529,
                    'county_id' => 167,
                    'name' => 'Gercüş',
                ),
                529 =>
                array(
                    'id' => 530,
                    'county_id' => 167,
                    'name' => 'Kayapınar',
                ),
                530 =>
                array(
                    'id' => 531,
                    'county_id' => 167,
                    'name' => 'Merkezköyler',
                ),
                531 =>
                array(
                    'id' => 532,
                    'county_id' => 168,
                    'name' => 'Hasankeyf',
                ),
                532 =>
                array(
                    'id' => 533,
                    'county_id' => 168,
                    'name' => 'Merkezköyler',
                ),
                533 =>
                array(
                    'id' => 534,
                    'county_id' => 169,
                    'name' => 'Bekirhan',
                ),
                534 =>
                array(
                    'id' => 535,
                    'county_id' => 169,
                    'name' => 'Kozluk',
                ),
                535 =>
                array(
                    'id' => 536,
                    'county_id' => 169,
                    'name' => 'Merkezköyler',
                ),
                536 =>
                array(
                    'id' => 537,
                    'county_id' => 170,
                    'name' => 'Balpınar',
                ),
                537 =>
                array(
                    'id' => 538,
                    'county_id' => 170,
                    'name' => 'Çarşı',
                ),
                538 =>
                array(
                    'id' => 539,
                    'county_id' => 170,
                    'name' => 'Gap',
                ),
                539 =>
                array(
                    'id' => 540,
                    'county_id' => 170,
                    'name' => 'Kültür',
                ),
                540 =>
                array(
                    'id' => 541,
                    'county_id' => 170,
                    'name' => 'Merkezköyler',
                ),
                541 =>
                array(
                    'id' => 542,
                    'county_id' => 170,
                    'name' => 'Petrol',
                ),
                542 =>
                array(
                    'id' => 543,
                    'county_id' => 171,
                    'name' => 'Merkezköyler',
                ),
                543 =>
                array(
                    'id' => 544,
                    'county_id' => 171,
                    'name' => 'Sason',
                ),
                544 =>
                array(
                    'id' => 545,
                    'county_id' => 171,
                    'name' => 'Yücebağ',
                ),
                545 =>
                array(
                    'id' => 546,
                    'county_id' => 172,
                    'name' => 'Aydıntepe',
                ),
                546 =>
                array(
                    'id' => 547,
                    'county_id' => 172,
                    'name' => 'Merkezköyler',
                ),
                547 =>
                array(
                    'id' => 548,
                    'county_id' => 173,
                    'name' => 'Demirözü',
                ),
                548 =>
                array(
                    'id' => 549,
                    'county_id' => 173,
                    'name' => 'Gökçedere',
                ),
                549 =>
                array(
                    'id' => 550,
                    'county_id' => 173,
                    'name' => 'Merkezköyler',
                ),
                550 =>
                array(
                    'id' => 551,
                    'county_id' => 174,
                    'name' => 'Arpalı',
                ),
                551 =>
                array(
                    'id' => 552,
                    'county_id' => 174,
                    'name' => 'Bayburt',
                ),
                552 =>
                array(
                    'id' => 553,
                    'county_id' => 174,
                    'name' => 'Maden',
                ),
                553 =>
                array(
                    'id' => 554,
                    'county_id' => 174,
                    'name' => 'Merkezköyler',
                ),
                554 =>
                array(
                    'id' => 555,
                    'county_id' => 175,
                    'name' => 'Bozüyük',
                ),
                555 =>
                array(
                    'id' => 556,
                    'county_id' => 175,
                    'name' => 'Dodurga',
                ),
                556 =>
                array(
                    'id' => 557,
                    'county_id' => 175,
                    'name' => 'Merkezköyler',
                ),
                557 =>
                array(
                    'id' => 558,
                    'county_id' => 176,
                    'name' => 'Gölpazarı',
                ),
                558 =>
                array(
                    'id' => 559,
                    'county_id' => 176,
                    'name' => 'Merkezköyler',
                ),
                559 =>
                array(
                    'id' => 560,
                    'county_id' => 177,
                    'name' => 'İnhisar',
                ),
                560 =>
                array(
                    'id' => 561,
                    'county_id' => 177,
                    'name' => 'Merkezköyler',
                ),
                561 =>
                array(
                    'id' => 562,
                    'county_id' => 178,
                    'name' => 'Bayırköy',
                ),
                562 =>
                array(
                    'id' => 563,
                    'county_id' => 178,
                    'name' => 'Bilecik',
                ),
                563 =>
                array(
                    'id' => 564,
                    'county_id' => 178,
                    'name' => 'Merkezköyler',
                ),
                564 =>
                array(
                    'id' => 565,
                    'county_id' => 178,
                    'name' => 'Vezirhan',
                ),
                565 =>
                array(
                    'id' => 566,
                    'county_id' => 179,
                    'name' => 'Merkezköyler',
                ),
                566 =>
                array(
                    'id' => 567,
                    'county_id' => 179,
                    'name' => 'Osmaneli',
                ),
                567 =>
                array(
                    'id' => 568,
                    'county_id' => 180,
                    'name' => 'Merkezköyler',
                ),
                568 =>
                array(
                    'id' => 569,
                    'county_id' => 180,
                    'name' => 'Pazaryeri',
                ),
                569 =>
                array(
                    'id' => 570,
                    'county_id' => 181,
                    'name' => 'Merkezköyler',
                ),
                570 =>
                array(
                    'id' => 571,
                    'county_id' => 181,
                    'name' => 'Söğüt',
                ),
                571 =>
                array(
                    'id' => 572,
                    'county_id' => 182,
                    'name' => 'Merkezköyler',
                ),
                572 =>
                array(
                    'id' => 573,
                    'county_id' => 182,
                    'name' => 'Yenipazar',
                ),
                573 =>
                array(
                    'id' => 574,
                    'county_id' => 183,
                    'name' => 'Adaklı',
                ),
                574 =>
                array(
                    'id' => 575,
                    'county_id' => 183,
                    'name' => 'Merkezköyler',
                ),
                575 =>
                array(
                    'id' => 576,
                    'county_id' => 184,
                    'name' => 'Genç',
                ),
                576 =>
                array(
                    'id' => 577,
                    'county_id' => 184,
                    'name' => 'Merkezköyler',
                ),
                577 =>
                array(
                    'id' => 578,
                    'county_id' => 185,
                    'name' => 'Karlıova',
                ),
                578 =>
                array(
                    'id' => 579,
                    'county_id' => 185,
                    'name' => 'Merkezköyler',
                ),
                579 =>
                array(
                    'id' => 580,
                    'county_id' => 186,
                    'name' => 'Kiğı',
                ),
                580 =>
                array(
                    'id' => 581,
                    'county_id' => 186,
                    'name' => 'Merkezköyler',
                ),
                581 =>
                array(
                    'id' => 582,
                    'county_id' => 187,
                    'name' => 'Ağaçeli',
                ),
                582 =>
                array(
                    'id' => 583,
                    'county_id' => 187,
                    'name' => 'Bingöl',
                ),
                583 =>
                array(
                    'id' => 584,
                    'county_id' => 187,
                    'name' => 'Ilıcalar',
                ),
                584 =>
                array(
                    'id' => 585,
                    'county_id' => 187,
                    'name' => 'Merkezköyler',
                ),
                585 =>
                array(
                    'id' => 586,
                    'county_id' => 187,
                    'name' => 'Sancak',
                ),
                586 =>
                array(
                    'id' => 587,
                    'county_id' => 188,
                    'name' => 'Arakonak',
                ),
                587 =>
                array(
                    'id' => 588,
                    'county_id' => 188,
                    'name' => 'Merkezköyler',
                ),
                588 =>
                array(
                    'id' => 589,
                    'county_id' => 188,
                    'name' => 'Solhan',
                ),
                589 =>
                array(
                    'id' => 590,
                    'county_id' => 189,
                    'name' => 'Merkezköyler',
                ),
                590 =>
                array(
                    'id' => 591,
                    'county_id' => 189,
                    'name' => 'Yayladere',
                ),
                591 =>
                array(
                    'id' => 592,
                    'county_id' => 190,
                    'name' => 'Merkezköyler',
                ),
                592 =>
                array(
                    'id' => 593,
                    'county_id' => 190,
                    'name' => 'Yedisu',
                ),
                593 =>
                array(
                    'id' => 594,
                    'county_id' => 191,
                    'name' => 'Adilcevaz',
                ),
                594 =>
                array(
                    'id' => 595,
                    'county_id' => 191,
                    'name' => 'Aydınlar',
                ),
                595 =>
                array(
                    'id' => 596,
                    'county_id' => 191,
                    'name' => 'Merkezköyler',
                ),
                596 =>
                array(
                    'id' => 597,
                    'county_id' => 192,
                    'name' => 'Ahlat',
                ),
                597 =>
                array(
                    'id' => 598,
                    'county_id' => 192,
                    'name' => 'Merkezköyler',
                ),
                598 =>
                array(
                    'id' => 599,
                    'county_id' => 192,
                    'name' => 'Ovakışla',
                ),
                599 =>
                array(
                    'id' => 600,
                    'county_id' => 193,
                    'name' => 'Gölbaşı',
                ),
                600 =>
                array(
                    'id' => 601,
                    'county_id' => 193,
                    'name' => 'Günkırı',
                ),
                601 =>
                array(
                    'id' => 602,
                    'county_id' => 193,
                    'name' => 'Güroymak',
                ),
                602 =>
                array(
                    'id' => 603,
                    'county_id' => 193,
                    'name' => 'Merkezköyler',
                ),
                603 =>
                array(
                    'id' => 604,
                    'county_id' => 194,
                    'name' => 'Hizan',
                ),
                604 =>
                array(
                    'id' => 605,
                    'county_id' => 194,
                    'name' => 'Merkezköyler',
                ),
                605 =>
                array(
                    'id' => 606,
                    'county_id' => 195,
                    'name' => 'Bitlis',
                ),
                606 =>
                array(
                    'id' => 607,
                    'county_id' => 195,
                    'name' => 'Bölükyazı',
                ),
                607 =>
                array(
                    'id' => 608,
                    'county_id' => 195,
                    'name' => 'Merkezköyler',
                ),
                608 =>
                array(
                    'id' => 609,
                    'county_id' => 195,
                    'name' => 'Yolalan',
                ),
                609 =>
                array(
                    'id' => 610,
                    'county_id' => 196,
                    'name' => 'Geyikpınar',
                ),
                610 =>
                array(
                    'id' => 611,
                    'county_id' => 196,
                    'name' => 'Kavakbaşı',
                ),
                611 =>
                array(
                    'id' => 612,
                    'county_id' => 196,
                    'name' => 'Merkezköyler',
                ),
                612 =>
                array(
                    'id' => 613,
                    'county_id' => 196,
                    'name' => 'Meydan',
                ),
                613 =>
                array(
                    'id' => 614,
                    'county_id' => 196,
                    'name' => 'Mutki',
                ),
                614 =>
                array(
                    'id' => 615,
                    'county_id' => 197,
                    'name' => 'Merkezköyler',
                ),
                615 =>
                array(
                    'id' => 616,
                    'county_id' => 197,
                    'name' => 'Tatvan',
                ),
                616 =>
                array(
                    'id' => 617,
                    'county_id' => 197,
                    'name' => 'Yelkenli',
                ),
                617 =>
                array(
                    'id' => 618,
                    'county_id' => 198,
                    'name' => 'Dörtdivan',
                ),
                618 =>
                array(
                    'id' => 619,
                    'county_id' => 198,
                    'name' => 'Merkezköyler',
                ),
                619 =>
                array(
                    'id' => 620,
                    'county_id' => 199,
                    'name' => 'Gerede',
                ),
                620 =>
                array(
                    'id' => 621,
                    'county_id' => 199,
                    'name' => 'Merkezköyler',
                ),
                621 =>
                array(
                    'id' => 622,
                    'county_id' => 200,
                    'name' => 'Göynük',
                ),
                622 =>
                array(
                    'id' => 623,
                    'county_id' => 200,
                    'name' => 'Merkezköyler',
                ),
                623 =>
                array(
                    'id' => 624,
                    'county_id' => 201,
                    'name' => 'Kıbrıscık',
                ),
                624 =>
                array(
                    'id' => 625,
                    'county_id' => 201,
                    'name' => 'Merkezköyler',
                ),
                625 =>
                array(
                    'id' => 626,
                    'county_id' => 202,
                    'name' => 'Gökçesu',
                ),
                626 =>
                array(
                    'id' => 627,
                    'county_id' => 202,
                    'name' => 'Mengen',
                ),
                627 =>
                array(
                    'id' => 628,
                    'county_id' => 202,
                    'name' => 'Merkezköyler',
                ),
                628 =>
                array(
                    'id' => 629,
                    'county_id' => 203,
                    'name' => 'Aşağısoku',
                ),
                629 =>
                array(
                    'id' => 630,
                    'county_id' => 203,
                    'name' => 'İhsaniye',
                ),
                630 =>
                array(
                    'id' => 631,
                    'county_id' => 203,
                    'name' => 'Karacasu',
                ),
                631 =>
                array(
                    'id' => 632,
                    'county_id' => 203,
                    'name' => 'Karamanlı',
                ),
                632 =>
                array(
                    'id' => 633,
                    'county_id' => 203,
                    'name' => 'Merkezköyler',
                ),
                633 =>
                array(
                    'id' => 634,
                    'county_id' => 204,
                    'name' => 'Merkezköyler',
                ),
                634 =>
                array(
                    'id' => 635,
                    'county_id' => 204,
                    'name' => 'Mudurnu',
                ),
                635 =>
                array(
                    'id' => 636,
                    'county_id' => 204,
                    'name' => 'Taşkesti',
                ),
                636 =>
                array(
                    'id' => 637,
                    'county_id' => 205,
                    'name' => 'Merkezköyler',
                ),
                637 =>
                array(
                    'id' => 638,
                    'county_id' => 205,
                    'name' => 'Seben',
                ),
                638 =>
                array(
                    'id' => 639,
                    'county_id' => 206,
                    'name' => 'Merkezköyler',
                ),
                639 =>
                array(
                    'id' => 640,
                    'county_id' => 206,
                    'name' => 'Yeniçağa',
                ),
                640 =>
                array(
                    'id' => 641,
                    'county_id' => 207,
                    'name' => 'Ağlasun',
                ),
                641 =>
                array(
                    'id' => 642,
                    'county_id' => 207,
                    'name' => 'Merkezköyler',
                ),
                642 =>
                array(
                    'id' => 643,
                    'county_id' => 208,
                    'name' => 'Dirmil',
                ),
                643 =>
                array(
                    'id' => 644,
                    'county_id' => 208,
                    'name' => 'Merkezköyler',
                ),
                644 =>
                array(
                    'id' => 645,
                    'county_id' => 209,
                    'name' => 'Bucak',
                ),
                645 =>
                array(
                    'id' => 646,
                    'county_id' => 209,
                    'name' => 'Kızılkaya',
                ),
                646 =>
                array(
                    'id' => 647,
                    'county_id' => 209,
                    'name' => 'Kocaaliler',
                ),
                647 =>
                array(
                    'id' => 648,
                    'county_id' => 209,
                    'name' => 'Merkezköyler',
                ),
                648 =>
                array(
                    'id' => 649,
                    'county_id' => 210,
                    'name' => 'Çavdır',
                ),
                649 =>
                array(
                    'id' => 650,
                    'county_id' => 210,
                    'name' => 'Merkezköyler',
                ),
                650 =>
                array(
                    'id' => 651,
                    'county_id' => 210,
                    'name' => 'Söğüt',
                ),
                651 =>
                array(
                    'id' => 652,
                    'county_id' => 211,
                    'name' => 'Çeltikçi',
                ),
                652 =>
                array(
                    'id' => 653,
                    'county_id' => 211,
                    'name' => 'Merkezköyler',
                ),
                653 =>
                array(
                    'id' => 654,
                    'county_id' => 212,
                    'name' => 'Gölhisar',
                ),
                654 =>
                array(
                    'id' => 655,
                    'county_id' => 212,
                    'name' => 'Merkezköyler',
                ),
                655 =>
                array(
                    'id' => 656,
                    'county_id' => 212,
                    'name' => 'Yusufça',
                ),
                656 =>
                array(
                    'id' => 657,
                    'county_id' => 213,
                    'name' => 'Karamanlı',
                ),
                657 =>
                array(
                    'id' => 658,
                    'county_id' => 213,
                    'name' => 'Merkezköyler',
                ),
                658 =>
                array(
                    'id' => 659,
                    'county_id' => 214,
                    'name' => 'Kemer',
                ),
                659 =>
                array(
                    'id' => 660,
                    'county_id' => 214,
                    'name' => 'Merkezköyler',
                ),
                660 =>
                array(
                    'id' => 661,
                    'county_id' => 215,
                    'name' => 'Bahçelievler',
                ),
                661 =>
                array(
                    'id' => 662,
                    'county_id' => 215,
                    'name' => 'Çeşmedamı',
                ),
                662 =>
                array(
                    'id' => 663,
                    'county_id' => 215,
                    'name' => 'Merkezköyler',
                ),
                663 =>
                array(
                    'id' => 664,
                    'county_id' => 215,
                    'name' => 'Sanayi',
                ),
                664 =>
                array(
                    'id' => 665,
                    'county_id' => 215,
                    'name' => 'Yenice',
                ),
                665 =>
                array(
                    'id' => 666,
                    'county_id' => 216,
                    'name' => 'Merkezköyler',
                ),
                666 =>
                array(
                    'id' => 667,
                    'county_id' => 216,
                    'name' => 'Tefenni',
                ),
                667 =>
                array(
                    'id' => 668,
                    'county_id' => 217,
                    'name' => 'Merkezköyler',
                ),
                668 =>
                array(
                    'id' => 669,
                    'county_id' => 217,
                    'name' => 'Yeşilova',
                ),
                669 =>
                array(
                    'id' => 670,
                    'county_id' => 218,
                    'name' => 'Büyükorhan',
                ),
                670 =>
                array(
                    'id' => 671,
                    'county_id' => 219,
                    'name' => 'Gemlik',
                ),
                671 =>
                array(
                    'id' => 672,
                    'county_id' => 220,
                    'name' => 'Gürsu',
                ),
                672 =>
                array(
                    'id' => 673,
                    'county_id' => 221,
                    'name' => 'Harmancık',
                ),
                673 =>
                array(
                    'id' => 674,
                    'county_id' => 222,
                    'name' => 'İnegöl',
                ),
                674 =>
                array(
                    'id' => 675,
                    'county_id' => 223,
                    'name' => 'İznik',
                ),
                675 =>
                array(
                    'id' => 676,
                    'county_id' => 224,
                    'name' => 'Karacabey',
                ),
                676 =>
                array(
                    'id' => 677,
                    'county_id' => 225,
                    'name' => 'Keles',
                ),
                677 =>
                array(
                    'id' => 678,
                    'county_id' => 226,
                    'name' => 'Kestel',
                ),
                678 =>
                array(
                    'id' => 679,
                    'county_id' => 227,
                    'name' => 'Mudanya',
                ),
                679 =>
                array(
                    'id' => 680,
                    'county_id' => 228,
                    'name' => 'Mustafakemalpaşa',
                ),
                680 =>
                array(
                    'id' => 681,
                    'county_id' => 229,
                    'name' => 'Alaattinbey',
                ),
                681 =>
                array(
                    'id' => 682,
                    'county_id' => 229,
                    'name' => 'Altınşehir',
                ),
                682 =>
                array(
                    'id' => 683,
                    'county_id' => 229,
                    'name' => 'Ataevler',
                ),
                683 =>
                array(
                    'id' => 684,
                    'county_id' => 229,
                    'name' => 'Balat',
                ),
                684 =>
                array(
                    'id' => 685,
                    'county_id' => 229,
                    'name' => 'Beşevler',
                ),
                685 =>
                array(
                    'id' => 686,
                    'county_id' => 229,
                    'name' => 'Çalı',
                ),
                686 =>
                array(
                    'id' => 687,
                    'county_id' => 229,
                    'name' => 'Ertuğrul',
                ),
                687 =>
                array(
                    'id' => 688,
                    'county_id' => 229,
                    'name' => 'Görükle',
                ),
                688 =>
                array(
                    'id' => 689,
                    'county_id' => 229,
                    'name' => 'Hasanağa',
                ),
                689 =>
                array(
                    'id' => 690,
                    'county_id' => 229,
                    'name' => 'İhsaniye',
                ),
                690 =>
                array(
                    'id' => 691,
                    'county_id' => 229,
                    'name' => 'İzmiryolboyu',
                ),
                691 =>
                array(
                    'id' => 692,
                    'county_id' => 229,
                    'name' => 'Konak',
                ),
                692 =>
                array(
                    'id' => 693,
                    'county_id' => 229,
                    'name' => 'Nilüferköy',
                ),
                693 =>
                array(
                    'id' => 694,
                    'county_id' => 229,
                    'name' => 'Nosab',
                ),
                694 =>
                array(
                    'id' => 695,
                    'county_id' => 229,
                    'name' => 'Organizesanayi',
                ),
                695 =>
                array(
                    'id' => 696,
                    'county_id' => 229,
                    'name' => 'Üçevler',
                ),
                696 =>
                array(
                    'id' => 697,
                    'county_id' => 230,
                    'name' => 'Orhaneli',
                ),
                697 =>
                array(
                    'id' => 698,
                    'county_id' => 231,
                    'name' => 'Orhangazi',
                ),
                698 =>
                array(
                    'id' => 699,
                    'county_id' => 232,
                    'name' => 'Alemdar',
                ),
                699 =>
                array(
                    'id' => 700,
                    'county_id' => 232,
                    'name' => 'Altıparmak',
                ),
                700 =>
                array(
                    'id' => 701,
                    'county_id' => 232,
                    'name' => 'Bağlarbaşı',
                ),
                701 =>
                array(
                    'id' => 702,
                    'county_id' => 232,
                    'name' => 'Bahar',
                ),
                702 =>
                array(
                    'id' => 703,
                    'county_id' => 232,
                    'name' => 'Balıklı',
                ),
                703 =>
                array(
                    'id' => 704,
                    'county_id' => 232,
                    'name' => 'Çarşı',
                ),
                704 =>
                array(
                    'id' => 705,
                    'county_id' => 232,
                    'name' => 'Çekirge',
                ),
                705 =>
                array(
                    'id' => 706,
                    'county_id' => 232,
                    'name' => 'Demirtaş',
                ),
                706 =>
                array(
                    'id' => 707,
                    'county_id' => 232,
                    'name' => 'Dosab',
                ),
                707 =>
                array(
                    'id' => 708,
                    'county_id' => 232,
                    'name' => 'Emek',
                ),
                708 =>
                array(
                    'id' => 709,
                    'county_id' => 232,
                    'name' => 'Hamitler',
                ),
                709 =>
                array(
                    'id' => 710,
                    'county_id' => 232,
                    'name' => 'Hisar',
                ),
                710 =>
                array(
                    'id' => 711,
                    'county_id' => 232,
                    'name' => 'Hüdavendigar',
                ),
                711 =>
                array(
                    'id' => 712,
                    'county_id' => 232,
                    'name' => 'Hürriyet',
                ),
                712 =>
                array(
                    'id' => 713,
                    'county_id' => 232,
                    'name' => 'Küplüpınar',
                ),
                713 =>
                array(
                    'id' => 714,
                    'county_id' => 232,
                    'name' => 'Maksem',
                ),
                714 =>
                array(
                    'id' => 715,
                    'county_id' => 232,
                    'name' => 'Osmangaziköy',
                ),
                715 =>
                array(
                    'id' => 716,
                    'county_id' => 232,
                    'name' => 'Ovaakça',
                ),
                716 =>
                array(
                    'id' => 717,
                    'county_id' => 232,
                    'name' => 'Panayır',
                ),
                717 =>
                array(
                    'id' => 718,
                    'county_id' => 232,
                    'name' => 'Ulumahalle',
                ),
                718 =>
                array(
                    'id' => 719,
                    'county_id' => 232,
                    'name' => 'Yunuseli',
                ),
                719 =>
                array(
                    'id' => 720,
                    'county_id' => 233,
                    'name' => 'Yenişehir',
                ),
                720 =>
                array(
                    'id' => 721,
                    'county_id' => 234,
                    'name' => 'Arabayatağı',
                ),
                721 =>
                array(
                    'id' => 722,
                    'county_id' => 234,
                    'name' => 'Beyazıt',
                ),
                722 =>
                array(
                    'id' => 723,
                    'county_id' => 234,
                    'name' => 'Davutkadı',
                ),
                723 =>
                array(
                    'id' => 724,
                    'county_id' => 234,
                    'name' => 'Duaçınar',
                ),
                724 =>
                array(
                    'id' => 725,
                    'county_id' => 234,
                    'name' => 'Esenevler',
                ),
                725 =>
                array(
                    'id' => 726,
                    'county_id' => 234,
                    'name' => 'Ortabağlar',
                ),
                726 =>
                array(
                    'id' => 727,
                    'county_id' => 234,
                    'name' => 'Setbaşı',
                ),
                727 =>
                array(
                    'id' => 728,
                    'county_id' => 234,
                    'name' => 'Yıldırım',
                ),
                728 =>
                array(
                    'id' => 729,
                    'county_id' => 235,
                    'name' => 'Ayvacık',
                ),
                729 =>
                array(
                    'id' => 730,
                    'county_id' => 235,
                    'name' => 'Küçükkuyu',
                ),
                730 =>
                array(
                    'id' => 731,
                    'county_id' => 235,
                    'name' => 'Merkezköyler',
                ),
                731 =>
                array(
                    'id' => 732,
                    'county_id' => 236,
                    'name' => 'Bayramiç',
                ),
                732 =>
                array(
                    'id' => 733,
                    'county_id' => 236,
                    'name' => 'Evciler',
                ),
                733 =>
                array(
                    'id' => 734,
                    'county_id' => 236,
                    'name' => 'Merkezköyler',
                ),
                734 =>
                array(
                    'id' => 735,
                    'county_id' => 236,
                    'name' => 'Yiğitler',
                ),
                735 =>
                array(
                    'id' => 736,
                    'county_id' => 237,
                    'name' => 'Biga',
                ),
                736 =>
                array(
                    'id' => 737,
                    'county_id' => 237,
                    'name' => 'Gümüşçay',
                ),
                737 =>
                array(
                    'id' => 738,
                    'county_id' => 237,
                    'name' => 'Karabiga',
                ),
                738 =>
                array(
                    'id' => 739,
                    'county_id' => 237,
                    'name' => 'Merkezköyler',
                ),
                739 =>
                array(
                    'id' => 740,
                    'county_id' => 238,
                    'name' => 'Bozcaada',
                ),
                740 =>
                array(
                    'id' => 741,
                    'county_id' => 239,
                    'name' => 'Çan',
                ),
                741 =>
                array(
                    'id' => 742,
                    'county_id' => 239,
                    'name' => 'Merkezköyler',
                ),
                742 =>
                array(
                    'id' => 743,
                    'county_id' => 239,
                    'name' => 'Terzialan',
                ),
                743 =>
                array(
                    'id' => 744,
                    'county_id' => 240,
                    'name' => 'Eceabat',
                ),
                744 =>
                array(
                    'id' => 745,
                    'county_id' => 240,
                    'name' => 'Merkezköyler',
                ),
                745 =>
                array(
                    'id' => 746,
                    'county_id' => 241,
                    'name' => 'Ezine',
                ),
                746 =>
                array(
                    'id' => 747,
                    'county_id' => 241,
                    'name' => 'Geyikli',
                ),
                747 =>
                array(
                    'id' => 748,
                    'county_id' => 241,
                    'name' => 'Merkezköyler',
                ),
                748 =>
                array(
                    'id' => 749,
                    'county_id' => 242,
                    'name' => 'Evreşe',
                ),
                749 =>
                array(
                    'id' => 750,
                    'county_id' => 242,
                    'name' => 'Gelibolu',
                ),
                750 =>
                array(
                    'id' => 751,
                    'county_id' => 242,
                    'name' => 'Kavakköy',
                ),
                751 =>
                array(
                    'id' => 752,
                    'county_id' => 242,
                    'name' => 'Merkezköyler',
                ),
                752 =>
                array(
                    'id' => 753,
                    'county_id' => 243,
                    'name' => 'İmroz',
                ),
                753 =>
                array(
                    'id' => 754,
                    'county_id' => 243,
                    'name' => 'Merkezköyler',
                ),
                754 =>
                array(
                    'id' => 755,
                    'county_id' => 244,
                    'name' => 'Çardak',
                ),
                755 =>
                array(
                    'id' => 756,
                    'county_id' => 244,
                    'name' => 'Lapseki',
                ),
                756 =>
                array(
                    'id' => 757,
                    'county_id' => 244,
                    'name' => 'Merkezköyler',
                ),
                757 =>
                array(
                    'id' => 758,
                    'county_id' => 244,
                    'name' => 'Umurbey',
                ),
                758 =>
                array(
                    'id' => 759,
                    'county_id' => 245,
                    'name' => 'Barbaros',
                ),
                759 =>
                array(
                    'id' => 760,
                    'county_id' => 245,
                    'name' => 'Cevatpaşa',
                ),
                760 =>
                array(
                    'id' => 761,
                    'county_id' => 245,
                    'name' => 'Kepez',
                ),
                761 =>
                array(
                    'id' => 762,
                    'county_id' => 245,
                    'name' => 'Merkezköyler',
                ),
                762 =>
                array(
                    'id' => 763,
                    'county_id' => 246,
                    'name' => 'Kalkım',
                ),
                763 =>
                array(
                    'id' => 764,
                    'county_id' => 246,
                    'name' => 'Merkezköyler',
                ),
                764 =>
                array(
                    'id' => 765,
                    'county_id' => 246,
                    'name' => 'Yenice',
                ),
                765 =>
                array(
                    'id' => 766,
                    'county_id' => 247,
                    'name' => 'Atkaracalar',
                ),
                766 =>
                array(
                    'id' => 767,
                    'county_id' => 247,
                    'name' => 'Çardaklı',
                ),
                767 =>
                array(
                    'id' => 768,
                    'county_id' => 247,
                    'name' => 'Merkezköyler',
                ),
                768 =>
                array(
                    'id' => 769,
                    'county_id' => 248,
                    'name' => 'Bayramören',
                ),
                769 =>
                array(
                    'id' => 770,
                    'county_id' => 248,
                    'name' => 'Merkezköyler',
                ),
                770 =>
                array(
                    'id' => 771,
                    'county_id' => 249,
                    'name' => 'Çerkeş',
                ),
                771 =>
                array(
                    'id' => 772,
                    'county_id' => 249,
                    'name' => 'Merkezköyler',
                ),
                772 =>
                array(
                    'id' => 773,
                    'county_id' => 249,
                    'name' => 'Saçak',
                ),
                773 =>
                array(
                    'id' => 774,
                    'county_id' => 250,
                    'name' => 'Eldivan',
                ),
                774 =>
                array(
                    'id' => 775,
                    'county_id' => 250,
                    'name' => 'Merkezköyler',
                ),
                775 =>
                array(
                    'id' => 776,
                    'county_id' => 251,
                    'name' => 'Ilgaz',
                ),
                776 =>
                array(
                    'id' => 777,
                    'county_id' => 251,
                    'name' => 'Merkezköyler',
                ),
                777 =>
                array(
                    'id' => 778,
                    'county_id' => 252,
                    'name' => 'Kızılırmak',
                ),
                778 =>
                array(
                    'id' => 779,
                    'county_id' => 252,
                    'name' => 'Merkezköyler',
                ),
                779 =>
                array(
                    'id' => 780,
                    'county_id' => 253,
                    'name' => 'Korgun',
                ),
                780 =>
                array(
                    'id' => 781,
                    'county_id' => 253,
                    'name' => 'Merkezköyler',
                ),
                781 =>
                array(
                    'id' => 782,
                    'county_id' => 254,
                    'name' => 'Kurşunlu',
                ),
                782 =>
                array(
                    'id' => 783,
                    'county_id' => 254,
                    'name' => 'Merkezköyler',
                ),
                783 =>
                array(
                    'id' => 784,
                    'county_id' => 255,
                    'name' => 'Çarşı',
                ),
                784 =>
                array(
                    'id' => 785,
                    'county_id' => 255,
                    'name' => 'Merkezköyler',
                ),
                785 =>
                array(
                    'id' => 786,
                    'county_id' => 255,
                    'name' => 'Taşmescit',
                ),
                786 =>
                array(
                    'id' => 787,
                    'county_id' => 256,
                    'name' => 'Merkezköyler',
                ),
                787 =>
                array(
                    'id' => 788,
                    'county_id' => 256,
                    'name' => 'Orta',
                ),
                788 =>
                array(
                    'id' => 789,
                    'county_id' => 256,
                    'name' => 'Yaylakent',
                ),
                789 =>
                array(
                    'id' => 790,
                    'county_id' => 257,
                    'name' => 'Merkezköyler',
                ),
                790 =>
                array(
                    'id' => 791,
                    'county_id' => 257,
                    'name' => 'Şabanözü',
                ),
                791 =>
                array(
                    'id' => 792,
                    'county_id' => 258,
                    'name' => 'Merkezköyler',
                ),
                792 =>
                array(
                    'id' => 793,
                    'county_id' => 258,
                    'name' => 'Yapraklı',
                ),
                793 =>
                array(
                    'id' => 794,
                    'county_id' => 259,
                    'name' => 'Alaca',
                ),
                794 =>
                array(
                    'id' => 795,
                    'county_id' => 259,
                    'name' => 'Merkezköyler',
                ),
                795 =>
                array(
                    'id' => 796,
                    'county_id' => 260,
                    'name' => 'Bayat',
                ),
                796 =>
                array(
                    'id' => 797,
                    'county_id' => 260,
                    'name' => 'Merkezköyler',
                ),
                797 =>
                array(
                    'id' => 798,
                    'county_id' => 261,
                    'name' => 'Boğazkale',
                ),
                798 =>
                array(
                    'id' => 799,
                    'county_id' => 261,
                    'name' => 'Merkezköyler',
                ),
                799 =>
                array(
                    'id' => 800,
                    'county_id' => 262,
                    'name' => 'Dodurga',
                ),
                800 =>
                array(
                    'id' => 801,
                    'county_id' => 262,
                    'name' => 'Merkezköyler',
                ),
                801 =>
                array(
                    'id' => 802,
                    'county_id' => 263,
                    'name' => 'İskilip',
                ),
                802 =>
                array(
                    'id' => 803,
                    'county_id' => 263,
                    'name' => 'Merkezköyler',
                ),
                803 =>
                array(
                    'id' => 804,
                    'county_id' => 264,
                    'name' => 'Kargı',
                ),
                804 =>
                array(
                    'id' => 805,
                    'county_id' => 264,
                    'name' => 'Merkezköyler',
                ),
                805 =>
                array(
                    'id' => 806,
                    'county_id' => 265,
                    'name' => 'Laçin',
                ),
                806 =>
                array(
                    'id' => 807,
                    'county_id' => 265,
                    'name' => 'Merkezköyler',
                ),
                807 =>
                array(
                    'id' => 808,
                    'county_id' => 266,
                    'name' => 'Mecitözü',
                ),
                808 =>
                array(
                    'id' => 809,
                    'county_id' => 266,
                    'name' => 'Merkezköyler',
                ),
                809 =>
                array(
                    'id' => 810,
                    'county_id' => 267,
                    'name' => 'Düvenci',
                ),
                810 =>
                array(
                    'id' => 811,
                    'county_id' => 267,
                    'name' => 'Gülabibey',
                ),
                811 =>
                array(
                    'id' => 812,
                    'county_id' => 267,
                    'name' => 'Karakeçili',
                ),
                812 =>
                array(
                    'id' => 813,
                    'county_id' => 267,
                    'name' => 'Merkezköyler',
                ),
                813 =>
                array(
                    'id' => 814,
                    'county_id' => 267,
                    'name' => 'Ulukavak',
                ),
                814 =>
                array(
                    'id' => 815,
                    'county_id' => 267,
                    'name' => 'Yeniyol',
                ),
                815 =>
                array(
                    'id' => 816,
                    'county_id' => 268,
                    'name' => 'Karaören',
                ),
                816 =>
                array(
                    'id' => 817,
                    'county_id' => 268,
                    'name' => 'Merkezköyler',
                ),
                817 =>
                array(
                    'id' => 818,
                    'county_id' => 269,
                    'name' => 'Aştavul',
                ),
                818 =>
                array(
                    'id' => 819,
                    'county_id' => 269,
                    'name' => 'Merkezköyler',
                ),
                819 =>
                array(
                    'id' => 820,
                    'county_id' => 269,
                    'name' => 'Ortaköy',
                ),
                820 =>
                array(
                    'id' => 821,
                    'county_id' => 270,
                    'name' => 'Merkezköyler',
                ),
                821 =>
                array(
                    'id' => 822,
                    'county_id' => 270,
                    'name' => 'Osmancık',
                ),
                822 =>
                array(
                    'id' => 823,
                    'county_id' => 271,
                    'name' => 'Merkezköyler',
                ),
                823 =>
                array(
                    'id' => 824,
                    'county_id' => 271,
                    'name' => 'Sungurlu',
                ),
                824 =>
                array(
                    'id' => 825,
                    'county_id' => 272,
                    'name' => 'Merkezköyler',
                ),
                825 =>
                array(
                    'id' => 826,
                    'county_id' => 272,
                    'name' => 'Uğurludağ',
                ),
                826 =>
                array(
                    'id' => 827,
                    'county_id' => 273,
                    'name' => 'Acıpayam',
                ),
                827 =>
                array(
                    'id' => 828,
                    'county_id' => 274,
                    'name' => 'Babadağ',
                ),
                828 =>
                array(
                    'id' => 829,
                    'county_id' => 275,
                    'name' => 'Baklan',
                ),
                829 =>
                array(
                    'id' => 830,
                    'county_id' => 276,
                    'name' => 'Bekilli',
                ),
                830 =>
                array(
                    'id' => 831,
                    'county_id' => 277,
                    'name' => 'Beyağaç',
                ),
                831 =>
                array(
                    'id' => 832,
                    'county_id' => 278,
                    'name' => 'Bozkurt',
                ),
                832 =>
                array(
                    'id' => 833,
                    'county_id' => 279,
                    'name' => 'Buldan',
                ),
                833 =>
                array(
                    'id' => 834,
                    'county_id' => 280,
                    'name' => 'Çal',
                ),
                834 =>
                array(
                    'id' => 835,
                    'county_id' => 281,
                    'name' => 'Çameli',
                ),
                835 =>
                array(
                    'id' => 836,
                    'county_id' => 282,
                    'name' => 'Çardak',
                ),
                836 =>
                array(
                    'id' => 837,
                    'county_id' => 283,
                    'name' => 'Çivril',
                ),
                837 =>
                array(
                    'id' => 838,
                    'county_id' => 284,
                    'name' => 'Güney',
                ),
                838 =>
                array(
                    'id' => 839,
                    'county_id' => 285,
                    'name' => 'Honaz',
                ),
                839 =>
                array(
                    'id' => 840,
                    'county_id' => 286,
                    'name' => 'Kale',
                ),
                840 =>
                array(
                    'id' => 841,
                    'county_id' => 287,
                    'name' => 'Adalet',
                ),
                841 =>
                array(
                    'id' => 842,
                    'county_id' => 287,
                    'name' => 'Gümüşler',
                ),
                842 =>
                array(
                    'id' => 843,
                    'county_id' => 287,
                    'name' => 'Saraylar',
                ),
                843 =>
                array(
                    'id' => 844,
                    'county_id' => 287,
                    'name' => 'Sümer',
                ),
                844 =>
                array(
                    'id' => 845,
                    'county_id' => 287,
                    'name' => 'Üçler',
                ),
                845 =>
                array(
                    'id' => 846,
                    'county_id' => 287,
                    'name' => 'Üzerlik',
                ),
                846 =>
                array(
                    'id' => 847,
                    'county_id' => 288,
                    'name' => 'Akköy',
                ),
                847 =>
                array(
                    'id' => 848,
                    'county_id' => 288,
                    'name' => 'Çeşmebaşı',
                ),
                848 =>
                array(
                    'id' => 849,
                    'county_id' => 288,
                    'name' => 'İstiklal',
                ),
                849 =>
                array(
                    'id' => 850,
                    'county_id' => 288,
                    'name' => 'Karşıyaka',
                ),
                850 =>
                array(
                    'id' => 851,
                    'county_id' => 288,
                    'name' => 'Kınıklı',
                ),
                851 =>
                array(
                    'id' => 852,
                    'county_id' => 289,
                    'name' => 'Sarayköy',
                ),
                852 =>
                array(
                    'id' => 853,
                    'county_id' => 290,
                    'name' => 'Serinhisar',
                ),
                853 =>
                array(
                    'id' => 854,
                    'county_id' => 291,
                    'name' => 'Tavas',
                ),
                854 =>
                array(
                    'id' => 855,
                    'county_id' => 292,
                    'name' => 'Alipınar',
                ),
                855 =>
                array(
                    'id' => 856,
                    'county_id' => 292,
                    'name' => 'Körhat',
                ),
                856 =>
                array(
                    'id' => 857,
                    'county_id' => 292,
                    'name' => 'Selahattineyyubi',
                ),
                857 =>
                array(
                    'id' => 858,
                    'county_id' => 293,
                    'name' => 'Bismil',
                ),
                858 =>
                array(
                    'id' => 859,
                    'county_id' => 294,
                    'name' => 'Çermik',
                ),
                859 =>
                array(
                    'id' => 860,
                    'county_id' => 295,
                    'name' => 'Çınar',
                ),
                860 =>
                array(
                    'id' => 861,
                    'county_id' => 296,
                    'name' => 'Çüngüş',
                ),
                861 =>
                array(
                    'id' => 862,
                    'county_id' => 297,
                    'name' => 'Dicle',
                ),
                862 =>
                array(
                    'id' => 863,
                    'county_id' => 298,
                    'name' => 'Eğil',
                ),
                863 =>
                array(
                    'id' => 864,
                    'county_id' => 299,
                    'name' => 'Ergani',
                ),
                864 =>
                array(
                    'id' => 865,
                    'county_id' => 300,
                    'name' => 'Hani',
                ),
                865 =>
                array(
                    'id' => 866,
                    'county_id' => 301,
                    'name' => 'Hazro',
                ),
                866 =>
                array(
                    'id' => 867,
                    'county_id' => 302,
                    'name' => 'Kayapınar',
                ),
                867 =>
                array(
                    'id' => 868,
                    'county_id' => 303,
                    'name' => 'Kocaköy',
                ),
                868 =>
                array(
                    'id' => 869,
                    'county_id' => 304,
                    'name' => 'Kulp',
                ),
                869 =>
                array(
                    'id' => 870,
                    'county_id' => 305,
                    'name' => 'Lice',
                ),
                870 =>
                array(
                    'id' => 871,
                    'county_id' => 306,
                    'name' => 'Silvan',
                ),
                871 =>
                array(
                    'id' => 872,
                    'county_id' => 307,
                    'name' => 'Balıkçılarbaşı',
                ),
                872 =>
                array(
                    'id' => 873,
                    'county_id' => 307,
                    'name' => 'Suriçi',
                ),
                873 =>
                array(
                    'id' => 874,
                    'county_id' => 308,
                    'name' => 'Cumhuriyet',
                ),
                874 =>
                array(
                    'id' => 875,
                    'county_id' => 308,
                    'name' => 'Şehitlik',
                ),
                875 =>
                array(
                    'id' => 876,
                    'county_id' => 308,
                    'name' => 'Yenişehir',
                ),
                876 =>
                array(
                    'id' => 877,
                    'county_id' => 309,
                    'name' => 'Akçakoca',
                ),
                877 =>
                array(
                    'id' => 878,
                    'county_id' => 309,
                    'name' => 'Merkezköyler',
                ),
                878 =>
                array(
                    'id' => 879,
                    'county_id' => 310,
                    'name' => 'Cumayeri',
                ),
                879 =>
                array(
                    'id' => 880,
                    'county_id' => 310,
                    'name' => 'Merkezköyler',
                ),
                880 =>
                array(
                    'id' => 881,
                    'county_id' => 311,
                    'name' => 'Çilimli',
                ),
                881 =>
                array(
                    'id' => 882,
                    'county_id' => 311,
                    'name' => 'Merkezköyler',
                ),
                882 =>
                array(
                    'id' => 883,
                    'county_id' => 312,
                    'name' => 'Gölyaka',
                ),
                883 =>
                array(
                    'id' => 884,
                    'county_id' => 312,
                    'name' => 'Merkez Köyler',
                ),
                884 =>
                array(
                    'id' => 885,
                    'county_id' => 313,
                    'name' => 'Gümüşova',
                ),
                885 =>
                array(
                    'id' => 886,
                    'county_id' => 313,
                    'name' => 'Merkezköyler',
                ),
                886 =>
                array(
                    'id' => 887,
                    'county_id' => 314,
                    'name' => 'Kaynaşlı',
                ),
                887 =>
                array(
                    'id' => 888,
                    'county_id' => 314,
                    'name' => 'Merkezköyler',
                ),
                888 =>
                array(
                    'id' => 889,
                    'county_id' => 315,
                    'name' => 'Bahçeşehir',
                ),
                889 =>
                array(
                    'id' => 890,
                    'county_id' => 315,
                    'name' => 'Beyköy',
                ),
                890 =>
                array(
                    'id' => 891,
                    'county_id' => 315,
                    'name' => 'Boğaziçi',
                ),
                891 =>
                array(
                    'id' => 892,
                    'county_id' => 315,
                    'name' => 'Cedidiye',
                ),
                892 =>
                array(
                    'id' => 893,
                    'county_id' => 315,
                    'name' => 'Çay',
                ),
                893 =>
                array(
                    'id' => 894,
                    'county_id' => 315,
                    'name' => 'Hamidiye',
                ),
                894 =>
                array(
                    'id' => 895,
                    'county_id' => 315,
                    'name' => 'Koçyazı',
                ),
                895 =>
                array(
                    'id' => 896,
                    'county_id' => 315,
                    'name' => 'Konuralp',
                ),
                896 =>
                array(
                    'id' => 897,
                    'county_id' => 315,
                    'name' => 'Merkezköyler',
                ),
                897 =>
                array(
                    'id' => 898,
                    'county_id' => 316,
                    'name' => 'Merkezköyler',
                ),
                898 =>
                array(
                    'id' => 899,
                    'county_id' => 316,
                    'name' => 'Yığılca',
                ),
                899 =>
                array(
                    'id' => 900,
                    'county_id' => 317,
                    'name' => 'Enez',
                ),
                900 =>
                array(
                    'id' => 901,
                    'county_id' => 317,
                    'name' => 'Merkezköyler',
                ),
                901 =>
                array(
                    'id' => 902,
                    'county_id' => 318,
                    'name' => 'Hasköy',
                ),
                902 =>
                array(
                    'id' => 903,
                    'county_id' => 318,
                    'name' => 'Havsa',
                ),
                903 =>
                array(
                    'id' => 904,
                    'county_id' => 318,
                    'name' => 'Merkezköyler',
                ),
                904 =>
                array(
                    'id' => 905,
                    'county_id' => 319,
                    'name' => 'Esetçe',
                ),
                905 =>
                array(
                    'id' => 906,
                    'county_id' => 319,
                    'name' => 'İpsala',
                ),
                906 =>
                array(
                    'id' => 907,
                    'county_id' => 319,
                    'name' => 'Merkezköyler',
                ),
                907 =>
                array(
                    'id' => 908,
                    'county_id' => 319,
                    'name' => 'Yenikarpuzlu',
                ),
                908 =>
                array(
                    'id' => 909,
                    'county_id' => 320,
                    'name' => 'Beğendik',
                ),
                909 =>
                array(
                    'id' => 910,
                    'county_id' => 320,
                    'name' => 'Keşan',
                ),
                910 =>
                array(
                    'id' => 911,
                    'county_id' => 320,
                    'name' => 'Mecidiye',
                ),
                911 =>
                array(
                    'id' => 912,
                    'county_id' => 320,
                    'name' => 'Merkezköyler',
                ),
                912 =>
                array(
                    'id' => 913,
                    'county_id' => 320,
                    'name' => 'Yenimuhacir',
                ),
                913 =>
                array(
                    'id' => 914,
                    'county_id' => 320,
                    'name' => 'Yerlisu',
                ),
                914 =>
                array(
                    'id' => 915,
                    'county_id' => 321,
                    'name' => 'Lalapaşa',
                ),
                915 =>
                array(
                    'id' => 916,
                    'county_id' => 321,
                    'name' => 'Merkezköyler',
                ),
                916 =>
                array(
                    'id' => 917,
                    'county_id' => 322,
                    'name' => 'Küplü',
                ),
                917 =>
                array(
                    'id' => 918,
                    'county_id' => 322,
                    'name' => 'Meriç',
                ),
                918 =>
                array(
                    'id' => 919,
                    'county_id' => 322,
                    'name' => 'Merkezköyler',
                ),
                919 =>
                array(
                    'id' => 920,
                    'county_id' => 322,
                    'name' => 'Subaşı',
                ),
                920 =>
                array(
                    'id' => 921,
                    'county_id' => 323,
                    'name' => 'Edirne',
                ),
                921 =>
                array(
                    'id' => 922,
                    'county_id' => 323,
                    'name' => 'Merkezköyler',
                ),
                922 =>
                array(
                    'id' => 923,
                    'county_id' => 324,
                    'name' => 'Merkezköyler',
                ),
                923 =>
                array(
                    'id' => 924,
                    'county_id' => 324,
                    'name' => 'Süloğlu',
                ),
                924 =>
                array(
                    'id' => 925,
                    'county_id' => 325,
                    'name' => 'Aşçıoğlu',
                ),
                925 =>
                array(
                    'id' => 926,
                    'county_id' => 325,
                    'name' => 'Çöpköy',
                ),
                926 =>
                array(
                    'id' => 927,
                    'county_id' => 325,
                    'name' => 'Hamidiye',
                ),
                927 =>
                array(
                    'id' => 928,
                    'county_id' => 325,
                    'name' => 'Kırcasalih',
                ),
                928 =>
                array(
                    'id' => 929,
                    'county_id' => 325,
                    'name' => 'Merkezköyler',
                ),
                929 =>
                array(
                    'id' => 930,
                    'county_id' => 325,
                    'name' => 'Uzunköprü',
                ),
                930 =>
                array(
                    'id' => 931,
                    'county_id' => 326,
                    'name' => 'Ağın',
                ),
                931 =>
                array(
                    'id' => 932,
                    'county_id' => 326,
                    'name' => 'Merkezköyler',
                ),
                932 =>
                array(
                    'id' => 933,
                    'county_id' => 327,
                    'name' => 'Alacakaya',
                ),
                933 =>
                array(
                    'id' => 934,
                    'county_id' => 327,
                    'name' => 'Merkezköyler',
                ),
                934 =>
                array(
                    'id' => 935,
                    'county_id' => 328,
                    'name' => 'Arıcak',
                ),
                935 =>
                array(
                    'id' => 936,
                    'county_id' => 328,
                    'name' => 'Bükardı',
                ),
                936 =>
                array(
                    'id' => 937,
                    'county_id' => 328,
                    'name' => 'Erimli',
                ),
                937 =>
                array(
                    'id' => 938,
                    'county_id' => 328,
                    'name' => 'Merkezköyler',
                ),
                938 =>
                array(
                    'id' => 939,
                    'county_id' => 328,
                    'name' => 'Üçocak',
                ),
                939 =>
                array(
                    'id' => 940,
                    'county_id' => 329,
                    'name' => 'Baskil',
                ),
                940 =>
                array(
                    'id' => 941,
                    'county_id' => 329,
                    'name' => 'Merkezköyler',
                ),
                941 =>
                array(
                    'id' => 942,
                    'county_id' => 330,
                    'name' => 'Karakoçan',
                ),
                942 =>
                array(
                    'id' => 943,
                    'county_id' => 330,
                    'name' => 'Merkezköyler',
                ),
                943 =>
                array(
                    'id' => 944,
                    'county_id' => 330,
                    'name' => 'Sarıcan',
                ),
                944 =>
                array(
                    'id' => 945,
                    'county_id' => 331,
                    'name' => 'Keban',
                ),
                945 =>
                array(
                    'id' => 946,
                    'county_id' => 331,
                    'name' => 'Merkezköyler',
                ),
                946 =>
                array(
                    'id' => 947,
                    'county_id' => 332,
                    'name' => 'Kovancılar',
                ),
                947 =>
                array(
                    'id' => 948,
                    'county_id' => 332,
                    'name' => 'Merkezköyler',
                ),
                948 =>
                array(
                    'id' => 949,
                    'county_id' => 333,
                    'name' => 'Maden',
                ),
                949 =>
                array(
                    'id' => 950,
                    'county_id' => 333,
                    'name' => 'Merkezköyler',
                ),
                950 =>
                array(
                    'id' => 951,
                    'county_id' => 334,
                    'name' => 'Abdullahpaşa',
                ),
                951 =>
                array(
                    'id' => 952,
                    'county_id' => 334,
                    'name' => 'Akçakiraz',
                ),
                952 =>
                array(
                    'id' => 953,
                    'county_id' => 334,
                    'name' => 'Aksaray',
                ),
                953 =>
                array(
                    'id' => 954,
                    'county_id' => 334,
                    'name' => 'Doğukent',
                ),
                954 =>
                array(
                    'id' => 955,
                    'county_id' => 334,
                    'name' => 'Hankendi',
                ),
                955 =>
                array(
                    'id' => 956,
                    'county_id' => 334,
                    'name' => 'Harput',
                ),
                956 =>
                array(
                    'id' => 957,
                    'county_id' => 334,
                    'name' => 'İzzetpaşa',
                ),
                957 =>
                array(
                    'id' => 958,
                    'county_id' => 334,
                    'name' => 'Merkezköyler',
                ),
                958 =>
                array(
                    'id' => 959,
                    'county_id' => 334,
                    'name' => 'Mollakendi',
                ),
                959 =>
                array(
                    'id' => 960,
                    'county_id' => 334,
                    'name' => 'Mustafapaşa',
                ),
                960 =>
                array(
                    'id' => 961,
                    'county_id' => 334,
                    'name' => 'Nailbey',
                ),
                961 =>
                array(
                    'id' => 962,
                    'county_id' => 334,
                    'name' => 'Sürsürü',
                ),
                962 =>
                array(
                    'id' => 963,
                    'county_id' => 334,
                    'name' => 'Yazıkonak',
                ),
                963 =>
                array(
                    'id' => 964,
                    'county_id' => 334,
                    'name' => 'Yurtbaşı',
                ),
                964 =>
                array(
                    'id' => 965,
                    'county_id' => 335,
                    'name' => 'Beyhan',
                ),
                965 =>
                array(
                    'id' => 966,
                    'county_id' => 335,
                    'name' => 'Merkezköyler',
                ),
                966 =>
                array(
                    'id' => 967,
                    'county_id' => 335,
                    'name' => 'Palu',
                ),
                967 =>
                array(
                    'id' => 968,
                    'county_id' => 336,
                    'name' => 'Merkezköyler',
                ),
                968 =>
                array(
                    'id' => 969,
                    'county_id' => 336,
                    'name' => 'Sivrice',
                ),
                969 =>
                array(
                    'id' => 970,
                    'county_id' => 337,
                    'name' => 'Çayırlı',
                ),
                970 =>
                array(
                    'id' => 971,
                    'county_id' => 337,
                    'name' => 'Merkezköyler',
                ),
                971 =>
                array(
                    'id' => 972,
                    'county_id' => 338,
                    'name' => 'İliç',
                ),
                972 =>
                array(
                    'id' => 973,
                    'county_id' => 338,
                    'name' => 'Merkezköyler',
                ),
                973 =>
                array(
                    'id' => 974,
                    'county_id' => 339,
                    'name' => 'Kemah',
                ),
                974 =>
                array(
                    'id' => 975,
                    'county_id' => 339,
                    'name' => 'Merkezköyler',
                ),
                975 =>
                array(
                    'id' => 976,
                    'county_id' => 340,
                    'name' => 'Başpınar',
                ),
                976 =>
                array(
                    'id' => 977,
                    'county_id' => 340,
                    'name' => 'Dutluca',
                ),
                977 =>
                array(
                    'id' => 978,
                    'county_id' => 340,
                    'name' => 'Kemaliye',
                ),
                978 =>
                array(
                    'id' => 979,
                    'county_id' => 340,
                    'name' => 'Merkezköyler',
                ),
                979 =>
                array(
                    'id' => 980,
                    'county_id' => 341,
                    'name' => 'Akşemsettin',
                ),
                980 =>
                array(
                    'id' => 981,
                    'county_id' => 341,
                    'name' => 'Bahçelievler',
                ),
                981 =>
                array(
                    'id' => 982,
                    'county_id' => 341,
                    'name' => 'Çağlayan',
                ),
                982 =>
                array(
                    'id' => 983,
                    'county_id' => 341,
                    'name' => 'Merkezköyler',
                ),
                983 =>
                array(
                    'id' => 984,
                    'county_id' => 341,
                    'name' => 'Mollaköy',
                ),
                984 =>
                array(
                    'id' => 985,
                    'county_id' => 342,
                    'name' => 'Merkezköyler',
                ),
                985 =>
                array(
                    'id' => 986,
                    'county_id' => 342,
                    'name' => 'Otlukbeli',
                ),
                986 =>
                array(
                    'id' => 987,
                    'county_id' => 343,
                    'name' => 'Merkezköyler',
                ),
                987 =>
                array(
                    'id' => 988,
                    'county_id' => 343,
                    'name' => 'Refahiye',
                ),
                988 =>
                array(
                    'id' => 989,
                    'county_id' => 344,
                    'name' => 'Çadırkaya',
                ),
                989 =>
                array(
                    'id' => 990,
                    'county_id' => 344,
                    'name' => 'Kargın',
                ),
                990 =>
                array(
                    'id' => 991,
                    'county_id' => 344,
                    'name' => 'Mercan',
                ),
                991 =>
                array(
                    'id' => 992,
                    'county_id' => 344,
                    'name' => 'Merkezköyler',
                ),
                992 =>
                array(
                    'id' => 993,
                    'county_id' => 344,
                    'name' => 'Tercan',
                ),
                993 =>
                array(
                    'id' => 994,
                    'county_id' => 345,
                    'name' => 'Altınbaşak',
                ),
                994 =>
                array(
                    'id' => 995,
                    'county_id' => 345,
                    'name' => 'Merkezköyler',
                ),
                995 =>
                array(
                    'id' => 996,
                    'county_id' => 345,
                    'name' => 'Üzümlü',
                ),
                996 =>
                array(
                    'id' => 997,
                    'county_id' => 346,
                    'name' => 'Aşkale',
                ),
                997 =>
                array(
                    'id' => 998,
                    'county_id' => 347,
                    'name' => 'Ilıca',
                ),
                998 =>
                array(
                    'id' => 999,
                    'county_id' => 348,
                    'name' => 'Çat',
                ),
                999 =>
                array(
                    'id' => 1000,
                    'county_id' => 349,
                    'name' => 'Hınıs',
                ),
                1000 =>
                array(
                    'id' => 1001,
                    'county_id' => 350,
                    'name' => 'Horasan',
                ),
                1001 =>
                array(
                    'id' => 1002,
                    'county_id' => 351,
                    'name' => 'İspir',
                ),
                1002 =>
                array(
                    'id' => 1003,
                    'county_id' => 352,
                    'name' => 'Karaçoban',
                ),
                1003 =>
                array(
                    'id' => 1004,
                    'county_id' => 353,
                    'name' => 'Karayazı',
                ),
                1004 =>
                array(
                    'id' => 1005,
                    'county_id' => 354,
                    'name' => 'Köprüköy',
                ),
                1005 =>
                array(
                    'id' => 1006,
                    'county_id' => 355,
                    'name' => 'Narman',
                ),
                1006 =>
                array(
                    'id' => 1007,
                    'county_id' => 356,
                    'name' => 'Oltu',
                ),
                1007 =>
                array(
                    'id' => 1008,
                    'county_id' => 357,
                    'name' => 'Olur',
                ),
                1008 =>
                array(
                    'id' => 1009,
                    'county_id' => 358,
                    'name' => 'Palandöken',
                ),
                1009 =>
                array(
                    'id' => 1010,
                    'county_id' => 358,
                    'name' => 'Yıldızkent',
                ),
                1010 =>
                array(
                    'id' => 1011,
                    'county_id' => 359,
                    'name' => 'Pasinler',
                ),
                1011 =>
                array(
                    'id' => 1012,
                    'county_id' => 360,
                    'name' => 'Pazaryolu',
                ),
                1012 =>
                array(
                    'id' => 1013,
                    'county_id' => 361,
                    'name' => 'Şenkaya',
                ),
                1013 =>
                array(
                    'id' => 1014,
                    'county_id' => 362,
                    'name' => 'Tekman',
                ),
                1014 =>
                array(
                    'id' => 1015,
                    'county_id' => 363,
                    'name' => 'Tortum',
                ),
                1015 =>
                array(
                    'id' => 1016,
                    'county_id' => 364,
                    'name' => 'Uzundere',
                ),
                1016 =>
                array(
                    'id' => 1017,
                    'county_id' => 365,
                    'name' => 'Mumcu',
                ),
                1017 =>
                array(
                    'id' => 1018,
                    'county_id' => 365,
                    'name' => 'Terminal',
                ),
                1018 =>
                array(
                    'id' => 1019,
                    'county_id' => 365,
                    'name' => 'Yakutiye',
                ),
                1019 =>
                array(
                    'id' => 1020,
                    'county_id' => 366,
                    'name' => 'Alpu',
                ),
                1020 =>
                array(
                    'id' => 1021,
                    'county_id' => 367,
                    'name' => 'Beylikova',
                ),
                1021 =>
                array(
                    'id' => 1022,
                    'county_id' => 368,
                    'name' => 'Çifteler',
                ),
                1022 =>
                array(
                    'id' => 1023,
                    'county_id' => 369,
                    'name' => 'Günyüzü',
                ),
                1023 =>
                array(
                    'id' => 1024,
                    'county_id' => 370,
                    'name' => 'Han',
                ),
                1024 =>
                array(
                    'id' => 1025,
                    'county_id' => 371,
                    'name' => 'İnönü',
                ),
                1025 =>
                array(
                    'id' => 1026,
                    'county_id' => 372,
                    'name' => 'Mahmudiye',
                ),
                1026 =>
                array(
                    'id' => 1027,
                    'county_id' => 373,
                    'name' => 'Mihalgazi',
                ),
                1027 =>
                array(
                    'id' => 1028,
                    'county_id' => 374,
                    'name' => 'Dinek',
                ),
                1028 =>
                array(
                    'id' => 1029,
                    'county_id' => 375,
                    'name' => 'Alanönü',
                ),
                1029 =>
                array(
                    'id' => 1030,
                    'county_id' => 375,
                    'name' => 'Arifiye',
                ),
                1030 =>
                array(
                    'id' => 1031,
                    'county_id' => 375,
                    'name' => 'Büyükdere',
                ),
                1031 =>
                array(
                    'id' => 1032,
                    'county_id' => 375,
                    'name' => 'Emek',
                ),
                1032 =>
                array(
                    'id' => 1033,
                    'county_id' => 375,
                    'name' => 'Gökmeydan',
                ),
                1033 =>
                array(
                    'id' => 1034,
                    'county_id' => 375,
                    'name' => 'Huzur',
                ),
                1034 =>
                array(
                    'id' => 1035,
                    'county_id' => 375,
                    'name' => 'Kanlıpınar',
                ),
                1035 =>
                array(
                    'id' => 1036,
                    'county_id' => 375,
                    'name' => 'Kurtuluş',
                ),
                1036 =>
                array(
                    'id' => 1037,
                    'county_id' => 375,
                    'name' => 'Odunpazarıköy',
                ),
                1037 =>
                array(
                    'id' => 1038,
                    'county_id' => 375,
                    'name' => 'Orhangazi',
                ),
                1038 =>
                array(
                    'id' => 1039,
                    'county_id' => 375,
                    'name' => 'Sultandere',
                ),
                1039 =>
                array(
                    'id' => 1040,
                    'county_id' => 375,
                    'name' => 'Sümer',
                ),
                1040 =>
                array(
                    'id' => 1041,
                    'county_id' => 375,
                    'name' => 'Vadişehir',
                ),
                1041 =>
                array(
                    'id' => 1042,
                    'county_id' => 375,
                    'name' => 'Vişnelik',
                ),
                1042 =>
                array(
                    'id' => 1043,
                    'county_id' => 375,
                    'name' => 'Yenikent',
                ),
                1043 =>
                array(
                    'id' => 1044,
                    'county_id' => 376,
                    'name' => 'Sarıcakaya',
                ),
                1044 =>
                array(
                    'id' => 1045,
                    'county_id' => 377,
                    'name' => 'Seyitgazi',
                ),
                1045 =>
                array(
                    'id' => 1046,
                    'county_id' => 378,
                    'name' => 'Sivrihisar',
                ),
                1046 =>
                array(
                    'id' => 1047,
                    'county_id' => 379,
                    'name' => 'Bahçelievler',
                ),
                1047 =>
                array(
                    'id' => 1048,
                    'county_id' => 379,
                    'name' => 'Cumhuriye',
                ),
                1048 =>
                array(
                    'id' => 1049,
                    'county_id' => 379,
                    'name' => 'Çamlıca',
                ),
                1049 =>
                array(
                    'id' => 1050,
                    'county_id' => 379,
                    'name' => 'Çukurhisar',
                ),
                1050 =>
                array(
                    'id' => 1051,
                    'county_id' => 379,
                    'name' => 'Fatih',
                ),
                1051 =>
                array(
                    'id' => 1052,
                    'county_id' => 379,
                    'name' => 'Fevziçakmak',
                ),
                1052 =>
                array(
                    'id' => 1053,
                    'county_id' => 379,
                    'name' => 'Hacıalibey',
                ),
                1053 =>
                array(
                    'id' => 1054,
                    'county_id' => 379,
                    'name' => 'Muttalip',
                ),
                1054 =>
                array(
                    'id' => 1055,
                    'county_id' => 379,
                    'name' => 'Sazova',
                ),
                1055 =>
                array(
                    'id' => 1056,
                    'county_id' => 379,
                    'name' => 'Tepebaşıköy',
                ),
                1056 =>
                array(
                    'id' => 1057,
                    'county_id' => 379,
                    'name' => 'Uluönder',
                ),
                1057 =>
                array(
                    'id' => 1058,
                    'county_id' => 379,
                    'name' => 'Yeşiltepe',
                ),
                1058 =>
                array(
                    'id' => 1059,
                    'county_id' => 380,
                    'name' => 'Araban',
                ),
                1059 =>
                array(
                    'id' => 1060,
                    'county_id' => 381,
                    'name' => 'İslahiye',
                ),
                1060 =>
                array(
                    'id' => 1061,
                    'county_id' => 382,
                    'name' => 'Karkamış',
                ),
                1061 =>
                array(
                    'id' => 1062,
                    'county_id' => 383,
                    'name' => 'Nizip',
                ),
                1062 =>
                array(
                    'id' => 1063,
                    'county_id' => 384,
                    'name' => 'Nurdağı',
                ),
                1063 =>
                array(
                    'id' => 1064,
                    'county_id' => 385,
                    'name' => 'Oğuzeli',
                ),
                1064 =>
                array(
                    'id' => 1065,
                    'county_id' => 385,
                    'name' => 'Yeşildere',
                ),
                1065 =>
                array(
                    'id' => 1066,
                    'county_id' => 386,
                    'name' => 'Alaybey',
                ),
                1066 =>
                array(
                    'id' => 1067,
                    'county_id' => 386,
                    'name' => 'Düztepe',
                ),
                1067 =>
                array(
                    'id' => 1068,
                    'county_id' => 386,
                    'name' => 'Hoşgör',
                ),
                1068 =>
                array(
                    'id' => 1069,
                    'county_id' => 386,
                    'name' => 'Karataş',
                ),
                1069 =>
                array(
                    'id' => 1070,
                    'county_id' => 386,
                    'name' => 'Konak',
                ),
                1070 =>
                array(
                    'id' => 1071,
                    'county_id' => 386,
                    'name' => 'Perilikaya',
                ),
                1071 =>
                array(
                    'id' => 1072,
                    'county_id' => 386,
                    'name' => 'Şahinbey',
                ),
                1072 =>
                array(
                    'id' => 1073,
                    'county_id' => 386,
                    'name' => 'Tabakhane',
                ),
                1073 =>
                array(
                    'id' => 1074,
                    'county_id' => 387,
                    'name' => 'Çıksorut',
                ),
                1074 =>
                array(
                    'id' => 1075,
                    'county_id' => 387,
                    'name' => 'Emek',
                ),
                1075 =>
                array(
                    'id' => 1076,
                    'county_id' => 387,
                    'name' => 'Gazikent',
                ),
                1076 =>
                array(
                    'id' => 1077,
                    'county_id' => 387,
                    'name' => 'İbrahimli',
                ),
                1077 =>
                array(
                    'id' => 1078,
                    'county_id' => 387,
                    'name' => 'İncilipınar',
                ),
                1078 =>
                array(
                    'id' => 1079,
                    'county_id' => 387,
                    'name' => 'Karşıyaka',
                ),
                1079 =>
                array(
                    'id' => 1080,
                    'county_id' => 387,
                    'name' => 'Küsget',
                ),
                1080 =>
                array(
                    'id' => 1081,
                    'county_id' => 387,
                    'name' => 'Merve',
                ),
                1081 =>
                array(
                    'id' => 1082,
                    'county_id' => 387,
                    'name' => 'Organize',
                ),
                1082 =>
                array(
                    'id' => 1083,
                    'county_id' => 387,
                    'name' => 'Şehitkamil',
                ),
                1083 =>
                array(
                    'id' => 1084,
                    'county_id' => 388,
                    'name' => 'Yavuzeli',
                ),
                1084 =>
                array(
                    'id' => 1085,
                    'county_id' => 389,
                    'name' => 'Alucra',
                ),
                1085 =>
                array(
                    'id' => 1086,
                    'county_id' => 389,
                    'name' => 'Merkezköyler',
                ),
                1086 =>
                array(
                    'id' => 1087,
                    'county_id' => 390,
                    'name' => 'Aydındere',
                ),
                1087 =>
                array(
                    'id' => 1088,
                    'county_id' => 390,
                    'name' => 'Bulancak',
                ),
                1088 =>
                array(
                    'id' => 1089,
                    'county_id' => 390,
                    'name' => 'Kovanlık',
                ),
                1089 =>
                array(
                    'id' => 1090,
                    'county_id' => 390,
                    'name' => 'Merkezköyler',
                ),
                1090 =>
                array(
                    'id' => 1091,
                    'county_id' => 391,
                    'name' => 'Çamoluk',
                ),
                1091 =>
                array(
                    'id' => 1092,
                    'county_id' => 391,
                    'name' => 'Merkezköyler',
                ),
                1092 =>
                array(
                    'id' => 1093,
                    'county_id' => 392,
                    'name' => 'Çanakçı',
                ),
                1093 =>
                array(
                    'id' => 1094,
                    'county_id' => 393,
                    'name' => 'Dereli',
                ),
                1094 =>
                array(
                    'id' => 1095,
                    'county_id' => 393,
                    'name' => 'Merkezköyler',
                ),
                1095 =>
                array(
                    'id' => 1096,
                    'county_id' => 393,
                    'name' => 'Yavuzkemal',
                ),
                1096 =>
                array(
                    'id' => 1097,
                    'county_id' => 394,
                    'name' => 'Doğankent',
                ),
                1097 =>
                array(
                    'id' => 1098,
                    'county_id' => 394,
                    'name' => 'Merkezköyler',
                ),
                1098 =>
                array(
                    'id' => 1099,
                    'county_id' => 395,
                    'name' => 'Espiye',
                ),
                1099 =>
                array(
                    'id' => 1100,
                    'county_id' => 395,
                    'name' => 'Merkezköyler',
                ),
                1100 =>
                array(
                    'id' => 1101,
                    'county_id' => 395,
                    'name' => 'Soğukpınar',
                ),
                1101 =>
                array(
                    'id' => 1102,
                    'county_id' => 396,
                    'name' => 'Eynesil',
                ),
                1102 =>
                array(
                    'id' => 1103,
                    'county_id' => 396,
                    'name' => 'Merkezköyler',
                ),
                1103 =>
                array(
                    'id' => 1104,
                    'county_id' => 396,
                    'name' => 'Ören',
                ),
                1104 =>
                array(
                    'id' => 1105,
                    'county_id' => 397,
                    'name' => 'Çavuşlu',
                ),
                1105 =>
                array(
                    'id' => 1106,
                    'county_id' => 397,
                    'name' => 'Görele',
                ),
                1106 =>
                array(
                    'id' => 1107,
                    'county_id' => 397,
                    'name' => 'Merkezköyler',
                ),
                1107 =>
                array(
                    'id' => 1108,
                    'county_id' => 398,
                    'name' => 'Güce',
                ),
                1108 =>
                array(
                    'id' => 1109,
                    'county_id' => 398,
                    'name' => 'Merkezköyler',
                ),
                1109 =>
                array(
                    'id' => 1110,
                    'county_id' => 399,
                    'name' => 'Keşap',
                ),
                1110 =>
                array(
                    'id' => 1111,
                    'county_id' => 399,
                    'name' => 'Merkezköyler',
                ),
                1111 =>
                array(
                    'id' => 1112,
                    'county_id' => 400,
                    'name' => 'Aksu',
                ),
                1112 =>
                array(
                    'id' => 1113,
                    'county_id' => 400,
                    'name' => 'Batlama',
                ),
                1113 =>
                array(
                    'id' => 1114,
                    'county_id' => 400,
                    'name' => 'Duroğlu',
                ),
                1114 =>
                array(
                    'id' => 1115,
                    'county_id' => 400,
                    'name' => 'Merkezköyler',
                ),
                1115 =>
                array(
                    'id' => 1116,
                    'county_id' => 401,
                    'name' => 'Merkezköyler',
                ),
                1116 =>
                array(
                    'id' => 1117,
                    'county_id' => 401,
                    'name' => 'Piraziz',
                ),
                1117 =>
                array(
                    'id' => 1118,
                    'county_id' => 402,
                    'name' => 'Merkezköyler',
                ),
                1118 =>
                array(
                    'id' => 1119,
                    'county_id' => 402,
                    'name' => 'Şebinkarahisar',
                ),
                1119 =>
                array(
                    'id' => 1120,
                    'county_id' => 403,
                    'name' => 'Merkezköyler',
                ),
                1120 =>
                array(
                    'id' => 1121,
                    'county_id' => 403,
                    'name' => 'Tirebolu',
                ),
                1121 =>
                array(
                    'id' => 1122,
                    'county_id' => 404,
                    'name' => 'Merkezköyler',
                ),
                1122 =>
                array(
                    'id' => 1123,
                    'county_id' => 404,
                    'name' => 'Üçtepe',
                ),
                1123 =>
                array(
                    'id' => 1124,
                    'county_id' => 404,
                    'name' => 'Yağlıdere',
                ),
                1124 =>
                array(
                    'id' => 1125,
                    'county_id' => 405,
                    'name' => 'Deredolu',
                ),
                1125 =>
                array(
                    'id' => 1126,
                    'county_id' => 405,
                    'name' => 'Gümüşgöze',
                ),
                1126 =>
                array(
                    'id' => 1127,
                    'county_id' => 405,
                    'name' => 'Kelkit',
                ),
                1127 =>
                array(
                    'id' => 1128,
                    'county_id' => 405,
                    'name' => 'Merkezköyler',
                ),
                1128 =>
                array(
                    'id' => 1129,
                    'county_id' => 405,
                    'name' => 'Öbektaş',
                ),
                1129 =>
                array(
                    'id' => 1130,
                    'county_id' => 405,
                    'name' => 'Söğütlü',
                ),
                1130 =>
                array(
                    'id' => 1131,
                    'county_id' => 405,
                    'name' => 'Ünlüpınar',
                ),
                1131 =>
                array(
                    'id' => 1132,
                    'county_id' => 406,
                    'name' => 'Köse',
                ),
                1132 =>
                array(
                    'id' => 1133,
                    'county_id' => 406,
                    'name' => 'Merkezköyler',
                ),
                1133 =>
                array(
                    'id' => 1134,
                    'county_id' => 407,
                    'name' => 'Kürtün',
                ),
                1134 =>
                array(
                    'id' => 1135,
                    'county_id' => 407,
                    'name' => 'Merkezköyler',
                ),
                1135 =>
                array(
                    'id' => 1136,
                    'county_id' => 407,
                    'name' => 'Özkürtün',
                ),
                1136 =>
                array(
                    'id' => 1137,
                    'county_id' => 408,
                    'name' => 'Arzularkabaköy',
                ),
                1137 =>
                array(
                    'id' => 1138,
                    'county_id' => 408,
                    'name' => 'Gümüşhane',
                ),
                1138 =>
                array(
                    'id' => 1139,
                    'county_id' => 408,
                    'name' => 'Merkezköyler',
                ),
                1139 =>
                array(
                    'id' => 1140,
                    'county_id' => 409,
                    'name' => 'Merkezköyler',
                ),
                1140 =>
                array(
                    'id' => 1141,
                    'county_id' => 409,
                    'name' => 'Şiran',
                ),
                1141 =>
                array(
                    'id' => 1142,
                    'county_id' => 409,
                    'name' => 'Yeşilbük',
                ),
                1142 =>
                array(
                    'id' => 1143,
                    'county_id' => 410,
                    'name' => 'Merkezköyler',
                ),
                1143 =>
                array(
                    'id' => 1144,
                    'county_id' => 410,
                    'name' => 'Torul',
                ),
                1144 =>
                array(
                    'id' => 1145,
                    'county_id' => 411,
                    'name' => 'Çığlı',
                ),
                1145 =>
                array(
                    'id' => 1146,
                    'county_id' => 411,
                    'name' => 'Çukurca',
                ),
                1146 =>
                array(
                    'id' => 1147,
                    'county_id' => 411,
                    'name' => 'Merkezköyler',
                ),
                1147 =>
                array(
                    'id' => 1148,
                    'county_id' => 412,
                    'name' => 'Derecik',
                ),
                1148 =>
                array(
                    'id' => 1149,
                    'county_id' => 412,
                    'name' => 'Merkezköyler',
                ),
                1149 =>
                array(
                    'id' => 1150,
                    'county_id' => 413,
                    'name' => 'Durankaya',
                ),
                1150 =>
                array(
                    'id' => 1151,
                    'county_id' => 413,
                    'name' => 'Hakkari',
                ),
                1151 =>
                array(
                    'id' => 1152,
                    'county_id' => 413,
                    'name' => 'Merkezköyler',
                ),
                1152 =>
                array(
                    'id' => 1153,
                    'county_id' => 414,
                    'name' => 'Merkezköyler',
                ),
                1153 =>
                array(
                    'id' => 1154,
                    'county_id' => 414,
                    'name' => 'Şemdinli',
                ),
                1154 =>
                array(
                    'id' => 1155,
                    'county_id' => 415,
                    'name' => 'Büyükçiftlik',
                ),
                1155 =>
                array(
                    'id' => 1156,
                    'county_id' => 415,
                    'name' => 'Esendere',
                ),
                1156 =>
                array(
                    'id' => 1157,
                    'county_id' => 415,
                    'name' => 'Merkezköyler',
                ),
                1157 =>
                array(
                    'id' => 1158,
                    'county_id' => 415,
                    'name' => 'Yüksekova',
                ),
                1158 =>
                array(
                    'id' => 1159,
                    'county_id' => 416,
                    'name' => 'Altınözü',
                ),
                1159 =>
                array(
                    'id' => 1160,
                    'county_id' => 417,
                    'name' => 'Esentepe',
                ),
                1160 =>
                array(
                    'id' => 1161,
                    'county_id' => 417,
                    'name' => 'Haraparası',
                ),
                1161 =>
                array(
                    'id' => 1162,
                    'county_id' => 417,
                    'name' => 'Kanatlı',
                ),
                1162 =>
                array(
                    'id' => 1163,
                    'county_id' => 417,
                    'name' => 'Kışlasaray',
                ),
                1163 =>
                array(
                    'id' => 1164,
                    'county_id' => 418,
                    'name' => 'Arsuz',
                ),
                1164 =>
                array(
                    'id' => 1165,
                    'county_id' => 418,
                    'name' => 'Karaağaç',
                ),
                1165 =>
                array(
                    'id' => 1166,
                    'county_id' => 419,
                    'name' => 'Belen',
                ),
                1166 =>
                array(
                    'id' => 1167,
                    'county_id' => 420,
                    'name' => 'Defne',
                ),
                1167 =>
                array(
                    'id' => 1168,
                    'county_id' => 421,
                    'name' => 'Dörtyol',
                ),
                1168 =>
                array(
                    'id' => 1169,
                    'county_id' => 422,
                    'name' => 'Erzin',
                ),
                1169 =>
                array(
                    'id' => 1170,
                    'county_id' => 423,
                    'name' => 'Hassa',
                ),
                1170 =>
                array(
                    'id' => 1171,
                    'county_id' => 424,
                    'name' => 'Azganlık',
                ),
                1171 =>
                array(
                    'id' => 1172,
                    'county_id' => 424,
                    'name' => 'Cumhuriyet',
                ),
                1172 =>
                array(
                    'id' => 1173,
                    'county_id' => 424,
                    'name' => 'Meydan',
                ),
                1173 =>
                array(
                    'id' => 1174,
                    'county_id' => 424,
                    'name' => 'Sanayi',
                ),
                1174 =>
                array(
                    'id' => 1175,
                    'county_id' => 424,
                    'name' => 'Tepeler',
                ),
                1175 =>
                array(
                    'id' => 1176,
                    'county_id' => 425,
                    'name' => 'Kırıkhan',
                ),
                1176 =>
                array(
                    'id' => 1177,
                    'county_id' => 426,
                    'name' => 'Kumlu',
                ),
                1177 =>
                array(
                    'id' => 1178,
                    'county_id' => 427,
                    'name' => 'Payas',
                ),
                1178 =>
                array(
                    'id' => 1179,
                    'county_id' => 428,
                    'name' => 'Reyhanlı',
                ),
                1179 =>
                array(
                    'id' => 1180,
                    'county_id' => 429,
                    'name' => 'Samandağ',
                ),
                1180 =>
                array(
                    'id' => 1181,
                    'county_id' => 430,
                    'name' => 'Yayladağı',
                ),
                1181 =>
                array(
                    'id' => 1182,
                    'county_id' => 431,
                    'name' => 'Aralık',
                ),
                1182 =>
                array(
                    'id' => 1183,
                    'county_id' => 431,
                    'name' => 'Merkezköyler',
                ),
                1183 =>
                array(
                    'id' => 1184,
                    'county_id' => 432,
                    'name' => 'Karakoyunlu',
                ),
                1184 =>
                array(
                    'id' => 1185,
                    'county_id' => 432,
                    'name' => 'Merkezköyler',
                ),
                1185 =>
                array(
                    'id' => 1186,
                    'county_id' => 433,
                    'name' => 'Halfeli',
                ),
                1186 =>
                array(
                    'id' => 1187,
                    'county_id' => 433,
                    'name' => 'Hoşhaber',
                ),
                1187 =>
                array(
                    'id' => 1188,
                    'county_id' => 433,
                    'name' => 'Iğdır',
                ),
                1188 =>
                array(
                    'id' => 1189,
                    'county_id' => 433,
                    'name' => 'Melekli',
                ),
                1189 =>
                array(
                    'id' => 1190,
                    'county_id' => 433,
                    'name' => 'Merkezköyler',
                ),
                1190 =>
                array(
                    'id' => 1191,
                    'county_id' => 434,
                    'name' => 'Merkezköyler',
                ),
                1191 =>
                array(
                    'id' => 1192,
                    'county_id' => 434,
                    'name' => 'Tuzluca',
                ),
                1192 =>
                array(
                    'id' => 1193,
                    'county_id' => 435,
                    'name' => 'Aksu',
                ),
                1193 =>
                array(
                    'id' => 1194,
                    'county_id' => 435,
                    'name' => 'Merkezköyler',
                ),
                1194 =>
                array(
                    'id' => 1195,
                    'county_id' => 436,
                    'name' => 'Atabey',
                ),
                1195 =>
                array(
                    'id' => 1196,
                    'county_id' => 436,
                    'name' => 'Merkezköyler',
                ),
                1196 =>
                array(
                    'id' => 1197,
                    'county_id' => 437,
                    'name' => 'Eğirdir',
                ),
                1197 =>
                array(
                    'id' => 1198,
                    'county_id' => 437,
                    'name' => 'Merkezköyler',
                ),
                1198 =>
                array(
                    'id' => 1199,
                    'county_id' => 437,
                    'name' => 'Sarıidris',
                ),
                1199 =>
                array(
                    'id' => 1200,
                    'county_id' => 438,
                    'name' => 'Gelendost',
                ),
                1200 =>
                array(
                    'id' => 1201,
                    'county_id' => 438,
                    'name' => 'Merkezköyler',
                ),
                1201 =>
                array(
                    'id' => 1202,
                    'county_id' => 439,
                    'name' => 'Gönen',
                ),
                1202 =>
                array(
                    'id' => 1203,
                    'county_id' => 439,
                    'name' => 'Güneykent',
                ),
                1203 =>
                array(
                    'id' => 1204,
                    'county_id' => 439,
                    'name' => 'Merkezköyler',
                ),
                1204 =>
                array(
                    'id' => 1205,
                    'county_id' => 440,
                    'name' => 'Keçiborlu',
                ),
                1205 =>
                array(
                    'id' => 1206,
                    'county_id' => 440,
                    'name' => 'Merkezköyler',
                ),
                1206 =>
                array(
                    'id' => 1207,
                    'county_id' => 440,
                    'name' => 'Senir',
                ),
                1207 =>
                array(
                    'id' => 1208,
                    'county_id' => 441,
                    'name' => 'Çelebiler',
                ),
                1208 =>
                array(
                    'id' => 1209,
                    'county_id' => 441,
                    'name' => 'Kepeci',
                ),
                1209 =>
                array(
                    'id' => 1210,
                    'county_id' => 441,
                    'name' => 'Kuleönü',
                ),
                1210 =>
                array(
                    'id' => 1211,
                    'county_id' => 441,
                    'name' => 'Kutlubey',
                ),
                1211 =>
                array(
                    'id' => 1212,
                    'county_id' => 441,
                    'name' => 'Merkezköyler',
                ),
                1212 =>
                array(
                    'id' => 1213,
                    'county_id' => 441,
                    'name' => 'Sanayi',
                ),
                1213 =>
                array(
                    'id' => 1214,
                    'county_id' => 441,
                    'name' => 'Sav',
                ),
                1214 =>
                array(
                    'id' => 1215,
                    'county_id' => 442,
                    'name' => 'Büyükkabaca',
                ),
                1215 =>
                array(
                    'id' => 1216,
                    'county_id' => 442,
                    'name' => 'Merkezköyler',
                ),
                1216 =>
                array(
                    'id' => 1217,
                    'county_id' => 442,
                    'name' => 'Senirkent',
                ),
                1217 =>
                array(
                    'id' => 1218,
                    'county_id' => 443,
                    'name' => 'Merkezköyler',
                ),
                1218 =>
                array(
                    'id' => 1219,
                    'county_id' => 443,
                    'name' => 'Sütçüler',
                ),
                1219 =>
                array(
                    'id' => 1220,
                    'county_id' => 444,
                    'name' => 'Çarıksaraylar',
                ),
                1220 =>
                array(
                    'id' => 1221,
                    'county_id' => 444,
                    'name' => 'Çiçekpınar',
                ),
                1221 =>
                array(
                    'id' => 1222,
                    'county_id' => 444,
                    'name' => 'Merkezköyler',
                ),
                1222 =>
                array(
                    'id' => 1223,
                    'county_id' => 444,
                    'name' => 'Şarkikaraağaç',
                ),
                1223 =>
                array(
                    'id' => 1224,
                    'county_id' => 445,
                    'name' => 'Merkezköyler',
                ),
                1224 =>
                array(
                    'id' => 1225,
                    'county_id' => 445,
                    'name' => 'Uluborlu',
                ),
                1225 =>
                array(
                    'id' => 1226,
                    'county_id' => 446,
                    'name' => 'Hüyüklü',
                ),
                1226 =>
                array(
                    'id' => 1227,
                    'county_id' => 446,
                    'name' => 'Merkezköyler',
                ),
                1227 =>
                array(
                    'id' => 1228,
                    'county_id' => 446,
                    'name' => 'Yalvaç',
                ),
                1228 =>
                array(
                    'id' => 1229,
                    'county_id' => 447,
                    'name' => 'Merkezköyler',
                ),
                1229 =>
                array(
                    'id' => 1230,
                    'county_id' => 447,
                    'name' => 'Yenişarbademli',
                ),
                1230 =>
                array(
                    'id' => 1231,
                    'county_id' => 448,
                    'name' => 'Burgazada',
                ),
                1231 =>
                array(
                    'id' => 1232,
                    'county_id' => 448,
                    'name' => 'Büyükada',
                ),
                1232 =>
                array(
                    'id' => 1233,
                    'county_id' => 448,
                    'name' => 'Heybeliada',
                ),
                1233 =>
                array(
                    'id' => 1234,
                    'county_id' => 448,
                    'name' => 'Kınalıada',
                ),
                1234 =>
                array(
                    'id' => 1235,
                    'county_id' => 449,
                    'name' => 'Arnavutköy',
                ),
                1235 =>
                array(
                    'id' => 1236,
                    'county_id' => 449,
                    'name' => 'Baklalı',
                ),
                1236 =>
                array(
                    'id' => 1237,
                    'county_id' => 449,
                    'name' => 'Boğazköy',
                ),
                1237 =>
                array(
                    'id' => 1238,
                    'county_id' => 449,
                    'name' => 'Bolluca',
                ),
                1238 =>
                array(
                    'id' => 1239,
                    'county_id' => 449,
                    'name' => 'Hadımköy',
                ),
                1239 =>
                array(
                    'id' => 1240,
                    'county_id' => 449,
                    'name' => 'Haraççı',
                ),
                1240 =>
                array(
                    'id' => 1241,
                    'county_id' => 449,
                    'name' => 'Taşoluk',
                ),
                1241 =>
                array(
                    'id' => 1242,
                    'county_id' => 450,
                    'name' => 'Atatürk',
                ),
                1242 =>
                array(
                    'id' => 1243,
                    'county_id' => 450,
                    'name' => 'Ferhatpaşa',
                ),
                1243 =>
                array(
                    'id' => 1244,
                    'county_id' => 450,
                    'name' => 'İçerenköy',
                ),
                1244 =>
                array(
                    'id' => 1245,
                    'county_id' => 450,
                    'name' => 'Kayışdağı',
                ),
                1245 =>
                array(
                    'id' => 1246,
                    'county_id' => 450,
                    'name' => 'Küçükbakkalköy',
                ),
                1246 =>
                array(
                    'id' => 1247,
                    'county_id' => 450,
                    'name' => 'Mustafakemal',
                ),
                1247 =>
                array(
                    'id' => 1248,
                    'county_id' => 450,
                    'name' => 'Örnek',
                ),
                1248 =>
                array(
                    'id' => 1249,
                    'county_id' => 450,
                    'name' => 'Yeniçamlıca',
                ),
                1249 =>
                array(
                    'id' => 1250,
                    'county_id' => 450,
                    'name' => 'Yenisahra',
                ),
                1250 =>
                array(
                    'id' => 1251,
                    'county_id' => 451,
                    'name' => 'Ambarlı',
                ),
                1251 =>
                array(
                    'id' => 1252,
                    'county_id' => 451,
                    'name' => 'Avcılar',
                ),
                1252 =>
                array(
                    'id' => 1253,
                    'county_id' => 451,
                    'name' => 'Firuzköy',
                ),
                1253 =>
                array(
                    'id' => 1254,
                    'county_id' => 451,
                    'name' => 'Gümüşpala',
                ),
                1254 =>
                array(
                    'id' => 1255,
                    'county_id' => 452,
                    'name' => 'Bağcılar',
                ),
                1255 =>
                array(
                    'id' => 1256,
                    'county_id' => 452,
                    'name' => 'Güneşli',
                ),
                1256 =>
                array(
                    'id' => 1257,
                    'county_id' => 452,
                    'name' => 'Mahmutbey',
                ),
                1257 =>
                array(
                    'id' => 1258,
                    'county_id' => 453,
                    'name' => 'Bahçelievler',
                ),
                1258 =>
                array(
                    'id' => 1259,
                    'county_id' => 453,
                    'name' => 'Şirinevler',
                ),
                1259 =>
                array(
                    'id' => 1260,
                    'county_id' => 453,
                    'name' => 'Yenibosna',
                ),
                1260 =>
                array(
                    'id' => 1261,
                    'county_id' => 454,
                    'name' => 'Ataköy',
                ),
                1261 =>
                array(
                    'id' => 1262,
                    'county_id' => 454,
                    'name' => 'Cevizlik',
                ),
                1262 =>
                array(
                    'id' => 1263,
                    'county_id' => 454,
                    'name' => 'Florya',
                ),
                1263 =>
                array(
                    'id' => 1264,
                    'county_id' => 454,
                    'name' => 'Kartaltepe',
                ),
                1264 =>
                array(
                    'id' => 1265,
                    'county_id' => 454,
                    'name' => 'Osmaniye',
                ),
                1265 =>
                array(
                    'id' => 1266,
                    'county_id' => 454,
                    'name' => 'Yeşilköy',
                ),
                1266 =>
                array(
                    'id' => 1267,
                    'county_id' => 454,
                    'name' => 'Zeytinlik',
                ),
                1267 =>
                array(
                    'id' => 1268,
                    'county_id' => 454,
                    'name' => 'Zuhuratbaba',
                ),
                1268 =>
                array(
                    'id' => 1269,
                    'county_id' => 455,
                    'name' => 'Altınşehir',
                ),
                1269 =>
                array(
                    'id' => 1270,
                    'county_id' => 455,
                    'name' => 'Bahçeşehir',
                ),
                1270 =>
                array(
                    'id' => 1271,
                    'county_id' => 455,
                    'name' => 'Başakşehir',
                ),
                1271 =>
                array(
                    'id' => 1272,
                    'county_id' => 455,
                    'name' => 'İkitelli',
                ),
                1272 =>
                array(
                    'id' => 1273,
                    'county_id' => 455,
                    'name' => 'Şamlar',
                ),
                1273 =>
                array(
                    'id' => 1274,
                    'county_id' => 456,
                    'name' => 'Altıntepsi',
                ),
                1274 =>
                array(
                    'id' => 1275,
                    'county_id' => 456,
                    'name' => 'Muratpaşa',
                ),
                1275 =>
                array(
                    'id' => 1276,
                    'county_id' => 456,
                    'name' => 'Numunebağ',
                ),
                1276 =>
                array(
                    'id' => 1277,
                    'county_id' => 456,
                    'name' => 'Yıldırım',
                ),
                1277 =>
                array(
                    'id' => 1278,
                    'county_id' => 457,
                    'name' => 'Abbasağa',
                ),
                1278 =>
                array(
                    'id' => 1279,
                    'county_id' => 457,
                    'name' => 'Akatlar',
                ),
                1279 =>
                array(
                    'id' => 1280,
                    'county_id' => 457,
                    'name' => 'Arnavutköy',
                ),
                1280 =>
                array(
                    'id' => 1281,
                    'county_id' => 457,
                    'name' => 'Bebek',
                ),
                1281 =>
                array(
                    'id' => 1282,
                    'county_id' => 457,
                    'name' => 'Etiler',
                ),
                1282 =>
                array(
                    'id' => 1283,
                    'county_id' => 457,
                    'name' => 'Gayrettepe',
                ),
                1283 =>
                array(
                    'id' => 1284,
                    'county_id' => 457,
                    'name' => 'Levazım',
                ),
                1284 =>
                array(
                    'id' => 1285,
                    'county_id' => 457,
                    'name' => 'Levent',
                ),
                1285 =>
                array(
                    'id' => 1286,
                    'county_id' => 457,
                    'name' => 'Ortaköy',
                ),
                1286 =>
                array(
                    'id' => 1287,
                    'county_id' => 457,
                    'name' => 'Türkali',
                ),
                1287 =>
                array(
                    'id' => 1288,
                    'county_id' => 458,
                    'name' => 'Anadoluhisarı',
                ),
                1288 =>
                array(
                    'id' => 1289,
                    'county_id' => 458,
                    'name' => 'Beykoz',
                ),
                1289 =>
                array(
                    'id' => 1290,
                    'county_id' => 458,
                    'name' => 'Çavuşbaşı',
                ),
                1290 =>
                array(
                    'id' => 1291,
                    'county_id' => 458,
                    'name' => 'Çubuklu',
                ),
                1291 =>
                array(
                    'id' => 1292,
                    'county_id' => 458,
                    'name' => 'Göksu',
                ),
                1292 =>
                array(
                    'id' => 1293,
                    'county_id' => 458,
                    'name' => 'Paşabahçe',
                ),
                1293 =>
                array(
                    'id' => 1294,
                    'county_id' => 458,
                    'name' => 'Polonezköy',
                ),
                1294 =>
                array(
                    'id' => 1295,
                    'county_id' => 458,
                    'name' => 'Tokatköy',
                ),
                1295 =>
                array(
                    'id' => 1296,
                    'county_id' => 459,
                    'name' => 'Beylikdüzü',
                ),
                1296 =>
                array(
                    'id' => 1297,
                    'county_id' => 459,
                    'name' => 'Gürpınar',
                ),
                1297 =>
                array(
                    'id' => 1298,
                    'county_id' => 459,
                    'name' => 'Yakuplu',
                ),
                1298 =>
                array(
                    'id' => 1299,
                    'county_id' => 460,
                    'name' => 'Arapcami',
                ),
                1299 =>
                array(
                    'id' => 1300,
                    'county_id' => 460,
                    'name' => 'Cihangir',
                ),
                1300 =>
                array(
                    'id' => 1301,
                    'county_id' => 460,
                    'name' => 'Halıcıoğlu',
                ),
                1301 =>
                array(
                    'id' => 1302,
                    'county_id' => 460,
                    'name' => 'İstiklal',
                ),
                1302 =>
                array(
                    'id' => 1303,
                    'county_id' => 460,
                    'name' => 'Kasımpaşa',
                ),
                1303 =>
                array(
                    'id' => 1304,
                    'county_id' => 460,
                    'name' => 'Kemankeş',
                ),
                1304 =>
                array(
                    'id' => 1305,
                    'county_id' => 460,
                    'name' => 'Pürtelaş',
                ),
                1305 =>
                array(
                    'id' => 1306,
                    'county_id' => 460,
                    'name' => 'Taksim',
                ),
                1306 =>
                array(
                    'id' => 1307,
                    'county_id' => 460,
                    'name' => 'Tarlabaşı',
                ),
                1307 =>
                array(
                    'id' => 1308,
                    'county_id' => 461,
                    'name' => 'Büyükçekmece',
                ),
                1308 =>
                array(
                    'id' => 1309,
                    'county_id' => 461,
                    'name' => 'Celaliye',
                ),
                1309 =>
                array(
                    'id' => 1310,
                    'county_id' => 461,
                    'name' => 'Kumburgaz',
                ),
                1310 =>
                array(
                    'id' => 1311,
                    'county_id' => 461,
                    'name' => 'Mimarsinan',
                ),
                1311 =>
                array(
                    'id' => 1312,
                    'county_id' => 461,
                    'name' => 'Tepecik',
                ),
                1312 =>
                array(
                    'id' => 1313,
                    'county_id' => 462,
                    'name' => 'Çatalca',
                ),
                1313 =>
                array(
                    'id' => 1314,
                    'county_id' => 463,
                    'name' => 'Alemdağ',
                ),
                1314 =>
                array(
                    'id' => 1315,
                    'county_id' => 463,
                    'name' => 'Çekmeköy',
                ),
                1315 =>
                array(
                    'id' => 1316,
                    'county_id' => 463,
                    'name' => 'Ömerli',
                ),
                1316 =>
                array(
                    'id' => 1317,
                    'county_id' => 463,
                    'name' => 'Taşdelen',
                ),
                1317 =>
                array(
                    'id' => 1318,
                    'county_id' => 464,
                    'name' => 'Atışalanı',
                ),
                1318 =>
                array(
                    'id' => 1319,
                    'county_id' => 464,
                    'name' => 'Esenler',
                ),
                1319 =>
                array(
                    'id' => 1320,
                    'county_id' => 464,
                    'name' => 'Karabayır',
                ),
                1320 =>
                array(
                    'id' => 1321,
                    'county_id' => 464,
                    'name' => 'Sanayi',
                ),
                1321 =>
                array(
                    'id' => 1322,
                    'county_id' => 465,
                    'name' => 'Esenyurt',
                ),
                1322 =>
                array(
                    'id' => 1323,
                    'county_id' => 465,
                    'name' => 'İncirtepe',
                ),
                1323 =>
                array(
                    'id' => 1324,
                    'county_id' => 465,
                    'name' => 'Kıraç',
                ),
                1324 =>
                array(
                    'id' => 1325,
                    'county_id' => 465,
                    'name' => 'Mehterçeşme',
                ),
                1325 =>
                array(
                    'id' => 1326,
                    'county_id' => 465,
                    'name' => 'Saadetdere',
                ),
                1326 =>
                array(
                    'id' => 1327,
                    'county_id' => 465,
                    'name' => 'Sanayi',
                ),
                1327 =>
                array(
                    'id' => 1328,
                    'county_id' => 466,
                    'name' => 'Alibeyköy',
                ),
                1328 =>
                array(
                    'id' => 1329,
                    'county_id' => 466,
                    'name' => 'Çırçır',
                ),
                1329 =>
                array(
                    'id' => 1330,
                    'county_id' => 466,
                    'name' => 'Eyüp',
                ),
                1330 =>
                array(
                    'id' => 1331,
                    'county_id' => 466,
                    'name' => 'Göktürk',
                ),
                1331 =>
                array(
                    'id' => 1332,
                    'county_id' => 466,
                    'name' => 'Işıklar',
                ),
                1332 =>
                array(
                    'id' => 1333,
                    'county_id' => 466,
                    'name' => 'Kemerburgaz',
                ),
                1333 =>
                array(
                    'id' => 1334,
                    'county_id' => 466,
                    'name' => 'Rami',
                ),
                1334 =>
                array(
                    'id' => 1335,
                    'county_id' => 466,
                    'name' => 'Yeşilpınar',
                ),
                1335 =>
                array(
                    'id' => 1336,
                    'county_id' => 467,
                    'name' => 'Aksaray',
                ),
                1336 =>
                array(
                    'id' => 1337,
                    'county_id' => 467,
                    'name' => 'Balat',
                ),
                1337 =>
                array(
                    'id' => 1338,
                    'county_id' => 467,
                    'name' => 'Bayazıt',
                ),
                1338 =>
                array(
                    'id' => 1339,
                    'county_id' => 467,
                    'name' => 'Eminönü',
                ),
                1339 =>
                array(
                    'id' => 1340,
                    'county_id' => 467,
                    'name' => 'İskenderpaşa',
                ),
                1340 =>
                array(
                    'id' => 1341,
                    'county_id' => 467,
                    'name' => 'Karagümrük',
                ),
                1341 =>
                array(
                    'id' => 1342,
                    'county_id' => 467,
                    'name' => 'Kocamustafapaşa',
                ),
                1342 =>
                array(
                    'id' => 1343,
                    'county_id' => 467,
                    'name' => 'Kumkapı',
                ),
                1343 =>
                array(
                    'id' => 1344,
                    'county_id' => 467,
                    'name' => 'Mahmutpaşa',
                ),
                1344 =>
                array(
                    'id' => 1345,
                    'county_id' => 467,
                    'name' => 'Sirkeci',
                ),
                1345 =>
                array(
                    'id' => 1346,
                    'county_id' => 467,
                    'name' => 'Sultanahmet',
                ),
                1346 =>
                array(
                    'id' => 1347,
                    'county_id' => 467,
                    'name' => 'Şehremini',
                ),
                1347 =>
                array(
                    'id' => 1348,
                    'county_id' => 467,
                    'name' => 'Tahtakale',
                ),
                1348 =>
                array(
                    'id' => 1349,
                    'county_id' => 467,
                    'name' => 'Topkapı',
                ),
                1349 =>
                array(
                    'id' => 1350,
                    'county_id' => 467,
                    'name' => 'Vefa',
                ),
                1350 =>
                array(
                    'id' => 1351,
                    'county_id' => 467,
                    'name' => 'Yedikule',
                ),
                1351 =>
                array(
                    'id' => 1352,
                    'county_id' => 467,
                    'name' => 'Zeyrek',
                ),
                1352 =>
                array(
                    'id' => 1353,
                    'county_id' => 468,
                    'name' => 'Gaziosmanpaşa',
                ),
                1353 =>
                array(
                    'id' => 1354,
                    'county_id' => 468,
                    'name' => 'Küçükköy',
                ),
                1354 =>
                array(
                    'id' => 1355,
                    'county_id' => 468,
                    'name' => 'Mevlana',
                ),
                1355 =>
                array(
                    'id' => 1356,
                    'county_id' => 468,
                    'name' => 'Yıldıztabya',
                ),
                1356 =>
                array(
                    'id' => 1357,
                    'county_id' => 469,
                    'name' => 'Akıncılar',
                ),
                1357 =>
                array(
                    'id' => 1358,
                    'county_id' => 469,
                    'name' => 'Güngören',
                ),
                1358 =>
                array(
                    'id' => 1359,
                    'county_id' => 469,
                    'name' => 'Sanayi',
                ),
                1359 =>
                array(
                    'id' => 1360,
                    'county_id' => 469,
                    'name' => 'Tozkoparan',
                ),
                1360 =>
                array(
                    'id' => 1361,
                    'county_id' => 470,
                    'name' => 'Bostancı',
                ),
                1361 =>
                array(
                    'id' => 1362,
                    'county_id' => 470,
                    'name' => 'Caddebostan',
                ),
                1362 =>
                array(
                    'id' => 1363,
                    'county_id' => 470,
                    'name' => 'Caferağa',
                ),
                1363 =>
                array(
                    'id' => 1364,
                    'county_id' => 470,
                    'name' => 'Eğitim',
                ),
                1364 =>
                array(
                    'id' => 1365,
                    'county_id' => 470,
                    'name' => 'Erenköy',
                ),
                1365 =>
                array(
                    'id' => 1366,
                    'county_id' => 470,
                    'name' => 'Fenerbahçe',
                ),
                1366 =>
                array(
                    'id' => 1367,
                    'county_id' => 470,
                    'name' => 'Feneryolu',
                ),
                1367 =>
                array(
                    'id' => 1368,
                    'county_id' => 470,
                    'name' => 'Fikirtepe',
                ),
                1368 =>
                array(
                    'id' => 1369,
                    'county_id' => 470,
                    'name' => 'Göztepe',
                ),
                1369 =>
                array(
                    'id' => 1370,
                    'county_id' => 470,
                    'name' => 'Koşuyolu',
                ),
                1370 =>
                array(
                    'id' => 1371,
                    'county_id' => 470,
                    'name' => 'Kozyatağı',
                ),
                1371 =>
                array(
                    'id' => 1372,
                    'county_id' => 470,
                    'name' => 'Merdivenköy',
                ),
                1372 =>
                array(
                    'id' => 1373,
                    'county_id' => 470,
                    'name' => 'Ondokuzmayıs',
                ),
                1373 =>
                array(
                    'id' => 1374,
                    'county_id' => 470,
                    'name' => 'Osmanağa',
                ),
                1374 =>
                array(
                    'id' => 1375,
                    'county_id' => 470,
                    'name' => 'Rasimpaşa',
                ),
                1375 =>
                array(
                    'id' => 1376,
                    'county_id' => 470,
                    'name' => 'Sahrayıcedit',
                ),
                1376 =>
                array(
                    'id' => 1377,
                    'county_id' => 470,
                    'name' => 'Suadiye',
                ),
                1377 =>
                array(
                    'id' => 1378,
                    'county_id' => 471,
                    'name' => 'Çağlayan',
                ),
                1378 =>
                array(
                    'id' => 1379,
                    'county_id' => 471,
                    'name' => 'Çeliktepe',
                ),
                1379 =>
                array(
                    'id' => 1380,
                    'county_id' => 471,
                    'name' => 'Gültepe',
                ),
                1380 =>
                array(
                    'id' => 1381,
                    'county_id' => 471,
                    'name' => 'Gürsel',
                ),
                1381 =>
                array(
                    'id' => 1382,
                    'county_id' => 471,
                    'name' => 'Hamidiye',
                ),
                1382 =>
                array(
                    'id' => 1383,
                    'county_id' => 471,
                    'name' => 'Kağıthane Merkez',
                ),
                1383 =>
                array(
                    'id' => 1384,
                    'county_id' => 471,
                    'name' => 'Seyrantepe',
                ),
                1384 =>
                array(
                    'id' => 1385,
                    'county_id' => 471,
                    'name' => 'Şirintepe',
                ),
                1385 =>
                array(
                    'id' => 1386,
                    'county_id' => 472,
                    'name' => 'Atalar',
                ),
                1386 =>
                array(
                    'id' => 1387,
                    'county_id' => 472,
                    'name' => 'Esentepe',
                ),
                1387 =>
                array(
                    'id' => 1388,
                    'county_id' => 472,
                    'name' => 'Kartal',
                ),
                1388 =>
                array(
                    'id' => 1389,
                    'county_id' => 472,
                    'name' => 'Orhantepe',
                ),
                1389 =>
                array(
                    'id' => 1390,
                    'county_id' => 472,
                    'name' => 'Soğanlık',
                ),
                1390 =>
                array(
                    'id' => 1391,
                    'county_id' => 472,
                    'name' => 'Topselvi',
                ),
                1391 =>
                array(
                    'id' => 1392,
                    'county_id' => 472,
                    'name' => 'Uğur Mumcu',
                ),
                1392 =>
                array(
                    'id' => 1393,
                    'county_id' => 472,
                    'name' => 'Yakacık',
                ),
                1393 =>
                array(
                    'id' => 1394,
                    'county_id' => 473,
                    'name' => 'Atakent',
                ),
                1394 =>
                array(
                    'id' => 1395,
                    'county_id' => 473,
                    'name' => 'Halkalı',
                ),
                1395 =>
                array(
                    'id' => 1396,
                    'county_id' => 473,
                    'name' => 'Küçükçekmece',
                ),
                1396 =>
                array(
                    'id' => 1397,
                    'county_id' => 473,
                    'name' => 'Sefaköy',
                ),
                1397 =>
                array(
                    'id' => 1398,
                    'county_id' => 474,
                    'name' => 'Aydınevler',
                ),
                1398 =>
                array(
                    'id' => 1399,
                    'county_id' => 474,
                    'name' => 'Büyükbakkalköy',
                ),
                1399 =>
                array(
                    'id' => 1400,
                    'county_id' => 474,
                    'name' => 'Cevizli',
                ),
                1400 =>
                array(
                    'id' => 1401,
                    'county_id' => 474,
                    'name' => 'Feyzullah',
                ),
                1401 =>
                array(
                    'id' => 1402,
                    'county_id' => 474,
                    'name' => 'Gülsuyu',
                ),
                1402 =>
                array(
                    'id' => 1403,
                    'county_id' => 474,
                    'name' => 'İdealtepe',
                ),
                1403 =>
                array(
                    'id' => 1404,
                    'county_id' => 474,
                    'name' => 'Küçükyalı',
                ),
                1404 =>
                array(
                    'id' => 1405,
                    'county_id' => 474,
                    'name' => 'Yalı',
                ),
                1405 =>
                array(
                    'id' => 1406,
                    'county_id' => 474,
                    'name' => 'Zümrütevler',
                ),
                1406 =>
                array(
                    'id' => 1407,
                    'county_id' => 475,
                    'name' => 'Bahçelievler',
                ),
                1407 =>
                array(
                    'id' => 1408,
                    'county_id' => 475,
                    'name' => 'Çamçeşme',
                ),
                1408 =>
                array(
                    'id' => 1409,
                    'county_id' => 475,
                    'name' => 'Çarşı',
                ),
                1409 =>
                array(
                    'id' => 1410,
                    'county_id' => 475,
                    'name' => 'Çınardere',
                ),
                1410 =>
                array(
                    'id' => 1411,
                    'county_id' => 475,
                    'name' => 'Esenyalı',
                ),
                1411 =>
                array(
                    'id' => 1412,
                    'county_id' => 475,
                    'name' => 'Kurna',
                ),
                1412 =>
                array(
                    'id' => 1413,
                    'county_id' => 475,
                    'name' => 'Şeyhli',
                ),
                1413 =>
                array(
                    'id' => 1414,
                    'county_id' => 475,
                    'name' => 'Yayalar',
                ),
                1414 =>
                array(
                    'id' => 1415,
                    'county_id' => 475,
                    'name' => 'Yenişehir',
                ),
                1415 =>
                array(
                    'id' => 1416,
                    'county_id' => 476,
                    'name' => 'Eyüpsultan',
                ),
                1416 =>
                array(
                    'id' => 1417,
                    'county_id' => 476,
                    'name' => 'Osmangazi',
                ),
                1417 =>
                array(
                    'id' => 1418,
                    'county_id' => 476,
                    'name' => 'Sarıgazi',
                ),
                1418 =>
                array(
                    'id' => 1419,
                    'county_id' => 476,
                    'name' => 'Yenidoğan',
                ),
                1419 =>
                array(
                    'id' => 1420,
                    'county_id' => 477,
                    'name' => 'Bahçeköy',
                ),
                1420 =>
                array(
                    'id' => 1421,
                    'county_id' => 477,
                    'name' => 'Büyükdere',
                ),
                1421 =>
                array(
                    'id' => 1422,
                    'county_id' => 477,
                    'name' => 'Emirgan',
                ),
                1422 =>
                array(
                    'id' => 1423,
                    'county_id' => 477,
                    'name' => 'İstinye',
                ),
                1423 =>
                array(
                    'id' => 1424,
                    'county_id' => 477,
                    'name' => 'Maslak',
                ),
                1424 =>
                array(
                    'id' => 1425,
                    'county_id' => 477,
                    'name' => 'Rumelihisarı',
                ),
                1425 =>
                array(
                    'id' => 1426,
                    'county_id' => 477,
                    'name' => 'Sarıyer',
                ),
                1426 =>
                array(
                    'id' => 1427,
                    'county_id' => 477,
                    'name' => 'Tarabya',
                ),
                1427 =>
                array(
                    'id' => 1428,
                    'county_id' => 477,
                    'name' => 'Yeniköy',
                ),
                1428 =>
                array(
                    'id' => 1429,
                    'county_id' => 478,
                    'name' => 'Büyükçavuşlu',
                ),
                1429 =>
                array(
                    'id' => 1430,
                    'county_id' => 478,
                    'name' => 'Çanta',
                ),
                1430 =>
                array(
                    'id' => 1431,
                    'county_id' => 478,
                    'name' => 'Değirmenköy',
                ),
                1431 =>
                array(
                    'id' => 1432,
                    'county_id' => 478,
                    'name' => 'Fener',
                ),
                1432 =>
                array(
                    'id' => 1433,
                    'county_id' => 478,
                    'name' => 'Gümüşyaka',
                ),
                1433 =>
                array(
                    'id' => 1434,
                    'county_id' => 478,
                    'name' => 'Kavaklı',
                ),
                1434 =>
                array(
                    'id' => 1435,
                    'county_id' => 478,
                    'name' => 'Ortaköy',
                ),
                1435 =>
                array(
                    'id' => 1436,
                    'county_id' => 478,
                    'name' => 'Selimpaşa',
                ),
                1436 =>
                array(
                    'id' => 1437,
                    'county_id' => 478,
                    'name' => 'Silivri',
                ),
                1437 =>
                array(
                    'id' => 1438,
                    'county_id' => 479,
                    'name' => 'Mehmetakif',
                ),
                1438 =>
                array(
                    'id' => 1439,
                    'county_id' => 479,
                    'name' => 'Mimarsinan',
                ),
                1439 =>
                array(
                    'id' => 1440,
                    'county_id' => 479,
                    'name' => 'Necipfazıl',
                ),
                1440 =>
                array(
                    'id' => 1441,
                    'county_id' => 479,
                    'name' => 'Turgutreis',
                ),
                1441 =>
                array(
                    'id' => 1442,
                    'county_id' => 480,
                    'name' => 'Sultançiftliği',
                ),
                1442 =>
                array(
                    'id' => 1443,
                    'county_id' => 480,
                    'name' => 'Sultangazi',
                ),
                1443 =>
                array(
                    'id' => 1444,
                    'county_id' => 480,
                    'name' => 'Zübeydehanım',
                ),
                1444 =>
                array(
                    'id' => 1445,
                    'county_id' => 481,
                    'name' => 'Ağva',
                ),
                1445 =>
                array(
                    'id' => 1446,
                    'county_id' => 481,
                    'name' => 'Ahmetli',
                ),
                1446 =>
                array(
                    'id' => 1447,
                    'county_id' => 481,
                    'name' => 'Şile',
                ),
                1447 =>
                array(
                    'id' => 1448,
                    'county_id' => 482,
                    'name' => 'Bozkurt',
                ),
                1448 =>
                array(
                    'id' => 1449,
                    'county_id' => 482,
                    'name' => 'Cumhuriyet',
                ),
                1449 =>
                array(
                    'id' => 1450,
                    'county_id' => 482,
                    'name' => 'Duatepe',
                ),
                1450 =>
                array(
                    'id' => 1451,
                    'county_id' => 482,
                    'name' => 'Esentepe',
                ),
                1451 =>
                array(
                    'id' => 1452,
                    'county_id' => 482,
                    'name' => 'Feriköy',
                ),
                1452 =>
                array(
                    'id' => 1453,
                    'county_id' => 482,
                    'name' => 'Halaskargazi',
                ),
                1453 =>
                array(
                    'id' => 1454,
                    'county_id' => 482,
                    'name' => 'Harbiye',
                ),
                1454 =>
                array(
                    'id' => 1455,
                    'county_id' => 482,
                    'name' => 'Mecidiyeköy',
                ),
                1455 =>
                array(
                    'id' => 1456,
                    'county_id' => 482,
                    'name' => 'Meşrutiyet',
                ),
                1456 =>
                array(
                    'id' => 1457,
                    'county_id' => 482,
                    'name' => 'Okmeydanı',
                ),
                1457 =>
                array(
                    'id' => 1458,
                    'county_id' => 482,
                    'name' => 'Pangaltı',
                ),
                1458 =>
                array(
                    'id' => 1459,
                    'county_id' => 482,
                    'name' => 'Teşvikiye',
                ),
                1459 =>
                array(
                    'id' => 1460,
                    'county_id' => 483,
                    'name' => 'Akfırat',
                ),
                1460 =>
                array(
                    'id' => 1461,
                    'county_id' => 483,
                    'name' => 'Aydınlı',
                ),
                1461 =>
                array(
                    'id' => 1462,
                    'county_id' => 483,
                    'name' => 'Çarşı',
                ),
                1462 =>
                array(
                    'id' => 1463,
                    'county_id' => 483,
                    'name' => 'İçmeler',
                ),
                1463 =>
                array(
                    'id' => 1464,
                    'county_id' => 483,
                    'name' => 'Mimarsinan',
                ),
                1464 =>
                array(
                    'id' => 1465,
                    'county_id' => 483,
                    'name' => 'Orhanlı',
                ),
                1465 =>
                array(
                    'id' => 1466,
                    'county_id' => 483,
                    'name' => 'Tersaneler',
                ),
                1466 =>
                array(
                    'id' => 1467,
                    'county_id' => 484,
                    'name' => 'Aşağıdudullu',
                ),
                1467 =>
                array(
                    'id' => 1468,
                    'county_id' => 484,
                    'name' => 'Atakent',
                ),
                1468 =>
                array(
                    'id' => 1469,
                    'county_id' => 484,
                    'name' => 'Atatürk',
                ),
                1469 =>
                array(
                    'id' => 1470,
                    'county_id' => 484,
                    'name' => 'Çakmak',
                ),
                1470 =>
                array(
                    'id' => 1471,
                    'county_id' => 484,
                    'name' => 'Esenşehir',
                ),
                1471 =>
                array(
                    'id' => 1472,
                    'county_id' => 484,
                    'name' => 'Ihlamurkuyu',
                ),
                1472 =>
                array(
                    'id' => 1473,
                    'county_id' => 484,
                    'name' => 'İnkılap',
                ),
                1473 =>
                array(
                    'id' => 1474,
                    'county_id' => 484,
                    'name' => 'Kazımkarabekir',
                ),
                1474 =>
                array(
                    'id' => 1475,
                    'county_id' => 484,
                    'name' => 'Namıkkemal',
                ),
                1475 =>
                array(
                    'id' => 1476,
                    'county_id' => 484,
                    'name' => 'Yukarıdudullu',
                ),
                1476 =>
                array(
                    'id' => 1477,
                    'county_id' => 485,
                    'name' => 'Acıbadem',
                ),
                1477 =>
                array(
                    'id' => 1478,
                    'county_id' => 485,
                    'name' => 'Altunizade',
                ),
                1478 =>
                array(
                    'id' => 1479,
                    'county_id' => 485,
                    'name' => 'Bahçelievler',
                ),
                1479 =>
                array(
                    'id' => 1480,
                    'county_id' => 485,
                    'name' => 'Beylerbeyi',
                ),
                1480 =>
                array(
                    'id' => 1481,
                    'county_id' => 485,
                    'name' => 'Bulgurlu',
                ),
                1481 =>
                array(
                    'id' => 1482,
                    'county_id' => 485,
                    'name' => 'Cumhuriyet',
                ),
                1482 =>
                array(
                    'id' => 1483,
                    'county_id' => 485,
                    'name' => 'Çengelköy',
                ),
                1483 =>
                array(
                    'id' => 1484,
                    'county_id' => 485,
                    'name' => 'Ferah',
                ),
                1484 =>
                array(
                    'id' => 1485,
                    'county_id' => 485,
                    'name' => 'Kandilli',
                ),
                1485 =>
                array(
                    'id' => 1486,
                    'county_id' => 485,
                    'name' => 'Kirazlıtepe',
                ),
                1486 =>
                array(
                    'id' => 1487,
                    'county_id' => 485,
                    'name' => 'Kuzguncuk',
                ),
                1487 =>
                array(
                    'id' => 1488,
                    'county_id' => 485,
                    'name' => 'Mimarsinan',
                ),
                1488 =>
                array(
                    'id' => 1489,
                    'county_id' => 485,
                    'name' => 'Muratreis',
                ),
                1489 =>
                array(
                    'id' => 1490,
                    'county_id' => 485,
                    'name' => 'Selimiye',
                ),
                1490 =>
                array(
                    'id' => 1491,
                    'county_id' => 485,
                    'name' => 'Ünalan',
                ),
                1491 =>
                array(
                    'id' => 1492,
                    'county_id' => 485,
                    'name' => 'Yavuztürk',
                ),
                1492 =>
                array(
                    'id' => 1493,
                    'county_id' => 486,
                    'name' => 'Çırpıcı',
                ),
                1493 =>
                array(
                    'id' => 1494,
                    'county_id' => 486,
                    'name' => 'Seyitnizam',
                ),
                1494 =>
                array(
                    'id' => 1495,
                    'county_id' => 486,
                    'name' => 'Telsiz',
                ),
                1495 =>
                array(
                    'id' => 1496,
                    'county_id' => 486,
                    'name' => 'Topkapı',
                ),
                1496 =>
                array(
                    'id' => 1497,
                    'county_id' => 487,
                    'name' => 'Aliağa',
                ),
                1497 =>
                array(
                    'id' => 1498,
                    'county_id' => 487,
                    'name' => 'Helvacı',
                ),
                1498 =>
                array(
                    'id' => 1499,
                    'county_id' => 488,
                    'name' => 'Balçova',
                ),
                1499 =>
                array(
                    'id' => 1500,
                    'county_id' => 489,
                    'name' => 'Bayındır',
                ),
                1500 =>
                array(
                    'id' => 1501,
                    'county_id' => 489,
                    'name' => 'Canlı',
                ),
                1501 =>
                array(
                    'id' => 1502,
                    'county_id' => 489,
                    'name' => 'Çırpı',
                ),
                1502 =>
                array(
                    'id' => 1503,
                    'county_id' => 490,
                    'name' => 'Alpaslan',
                ),
                1503 =>
                array(
                    'id' => 1504,
                    'county_id' => 490,
                    'name' => 'Bayraklı',
                ),
                1504 =>
                array(
                    'id' => 1505,
                    'county_id' => 490,
                    'name' => 'Gümüşpala',
                ),
                1505 =>
                array(
                    'id' => 1506,
                    'county_id' => 490,
                    'name' => 'Manavkuyu',
                ),
                1506 =>
                array(
                    'id' => 1507,
                    'county_id' => 490,
                    'name' => 'Soğukkuyu',
                ),
                1507 =>
                array(
                    'id' => 1508,
                    'county_id' => 491,
                    'name' => 'Bergama',
                ),
                1508 =>
                array(
                    'id' => 1509,
                    'county_id' => 492,
                    'name' => 'Beydağ',
                ),
                1509 =>
                array(
                    'id' => 1510,
                    'county_id' => 493,
                    'name' => 'Altındağ',
                ),
                1510 =>
                array(
                    'id' => 1511,
                    'county_id' => 493,
                    'name' => 'Atatürk',
                ),
                1511 =>
                array(
                    'id' => 1512,
                    'county_id' => 493,
                    'name' => 'Bornova',
                ),
                1512 =>
                array(
                    'id' => 1513,
                    'county_id' => 493,
                    'name' => 'Çamdibi',
                ),
                1513 =>
                array(
                    'id' => 1514,
                    'county_id' => 493,
                    'name' => 'Işıkkent',
                ),
                1514 =>
                array(
                    'id' => 1515,
                    'county_id' => 493,
                    'name' => 'Kazımdirik',
                ),
                1515 =>
                array(
                    'id' => 1516,
                    'county_id' => 493,
                    'name' => 'Naldöken',
                ),
                1516 =>
                array(
                    'id' => 1517,
                    'county_id' => 493,
                    'name' => 'Pınarbaşı',
                ),
                1517 =>
                array(
                    'id' => 1518,
                    'county_id' => 494,
                    'name' => 'Buca',
                ),
                1518 =>
                array(
                    'id' => 1519,
                    'county_id' => 494,
                    'name' => 'Evka1',
                ),
                1519 =>
                array(
                    'id' => 1520,
                    'county_id' => 494,
                    'name' => 'İşçievleri',
                ),
                1520 =>
                array(
                    'id' => 1521,
                    'county_id' => 494,
                    'name' => 'Kaynaklar',
                ),
                1521 =>
                array(
                    'id' => 1522,
                    'county_id' => 494,
                    'name' => 'Şirinyer',
                ),
                1522 =>
                array(
                    'id' => 1523,
                    'county_id' => 495,
                    'name' => 'Alaçatı',
                ),
                1523 =>
                array(
                    'id' => 1524,
                    'county_id' => 495,
                    'name' => 'Çeşme',
                ),
                1524 =>
                array(
                    'id' => 1525,
                    'county_id' => 495,
                    'name' => 'Dalyan',
                ),
                1525 =>
                array(
                    'id' => 1526,
                    'county_id' => 496,
                    'name' => 'Büyükçiğli',
                ),
                1526 =>
                array(
                    'id' => 1527,
                    'county_id' => 496,
                    'name' => 'Çiğli',
                ),
                1527 =>
                array(
                    'id' => 1528,
                    'county_id' => 496,
                    'name' => 'Egekent',
                ),
                1528 =>
                array(
                    'id' => 1529,
                    'county_id' => 496,
                    'name' => 'Harmandalı',
                ),
                1529 =>
                array(
                    'id' => 1530,
                    'county_id' => 497,
                    'name' => 'Dikili',
                ),
                1530 =>
                array(
                    'id' => 1531,
                    'county_id' => 498,
                    'name' => 'Bağarası',
                ),
                1531 =>
                array(
                    'id' => 1532,
                    'county_id' => 498,
                    'name' => 'Foça',
                ),
                1532 =>
                array(
                    'id' => 1533,
                    'county_id' => 498,
                    'name' => 'Yenifoça',
                ),
                1533 =>
                array(
                    'id' => 1534,
                    'county_id' => 499,
                    'name' => 'Gaziemir',
                ),
                1534 =>
                array(
                    'id' => 1535,
                    'county_id' => 500,
                    'name' => 'Güzelbahçe',
                ),
                1535 =>
                array(
                    'id' => 1536,
                    'county_id' => 501,
                    'name' => 'Fahrettinaltay',
                ),
                1536 =>
                array(
                    'id' => 1537,
                    'county_id' => 501,
                    'name' => 'Hatay',
                ),
                1537 =>
                array(
                    'id' => 1538,
                    'county_id' => 501,
                    'name' => 'Karabağlar',
                ),
                1538 =>
                array(
                    'id' => 1539,
                    'county_id' => 501,
                    'name' => 'Kibar',
                ),
                1539 =>
                array(
                    'id' => 1540,
                    'county_id' => 501,
                    'name' => 'Yeşilyurt',
                ),
                1540 =>
                array(
                    'id' => 1541,
                    'county_id' => 501,
                    'name' => 'Zincirlikuyu',
                ),
                1541 =>
                array(
                    'id' => 1542,
                    'county_id' => 502,
                    'name' => 'Karaburun',
                ),
                1542 =>
                array(
                    'id' => 1543,
                    'county_id' => 502,
                    'name' => 'Mordoğan',
                ),
                1543 =>
                array(
                    'id' => 1544,
                    'county_id' => 503,
                    'name' => 'Alaybey',
                ),
                1544 =>
                array(
                    'id' => 1545,
                    'county_id' => 503,
                    'name' => 'Cumhuriyet',
                ),
                1545 =>
                array(
                    'id' => 1546,
                    'county_id' => 503,
                    'name' => 'Denizbostanlısı',
                ),
                1546 =>
                array(
                    'id' => 1547,
                    'county_id' => 503,
                    'name' => 'İmbatlı',
                ),
                1547 =>
                array(
                    'id' => 1548,
                    'county_id' => 503,
                    'name' => 'Karşıyaka',
                ),
                1548 =>
                array(
                    'id' => 1549,
                    'county_id' => 503,
                    'name' => 'Nergiz',
                ),
                1549 =>
                array(
                    'id' => 1550,
                    'county_id' => 503,
                    'name' => 'Yalı',
                ),
                1550 =>
                array(
                    'id' => 1551,
                    'county_id' => 504,
                    'name' => 'Armutlu',
                ),
                1551 =>
                array(
                    'id' => 1552,
                    'county_id' => 504,
                    'name' => 'Bağyurdu',
                ),
                1552 =>
                array(
                    'id' => 1553,
                    'county_id' => 504,
                    'name' => 'Kemalpaşa',
                ),
                1553 =>
                array(
                    'id' => 1554,
                    'county_id' => 504,
                    'name' => 'Ören',
                ),
                1554 =>
                array(
                    'id' => 1555,
                    'county_id' => 504,
                    'name' => 'Ulucak',
                ),
                1555 =>
                array(
                    'id' => 1556,
                    'county_id' => 505,
                    'name' => 'Kınık',
                ),
                1556 =>
                array(
                    'id' => 1557,
                    'county_id' => 506,
                    'name' => 'Kiraz',
                ),
                1557 =>
                array(
                    'id' => 1558,
                    'county_id' => 507,
                    'name' => 'Alsancak',
                ),
                1558 =>
                array(
                    'id' => 1559,
                    'county_id' => 507,
                    'name' => 'Basmane',
                ),
                1559 =>
                array(
                    'id' => 1560,
                    'county_id' => 507,
                    'name' => 'Eşrefpaşa',
                ),
                1560 =>
                array(
                    'id' => 1561,
                    'county_id' => 507,
                    'name' => 'Gültepe',
                ),
                1561 =>
                array(
                    'id' => 1562,
                    'county_id' => 507,
                    'name' => 'Gürçeşme',
                ),
                1562 =>
                array(
                    'id' => 1563,
                    'county_id' => 507,
                    'name' => 'Güzelyalı',
                ),
                1563 =>
                array(
                    'id' => 1564,
                    'county_id' => 507,
                    'name' => 'Kahramanlar',
                ),
                1564 =>
                array(
                    'id' => 1565,
                    'county_id' => 507,
                    'name' => 'Kemeraltı',
                ),
                1565 =>
                array(
                    'id' => 1566,
                    'county_id' => 507,
                    'name' => 'Konak',
                ),
                1566 =>
                array(
                    'id' => 1567,
                    'county_id' => 507,
                    'name' => 'Küçükyalı',
                ),
                1567 =>
                array(
                    'id' => 1568,
                    'county_id' => 507,
                    'name' => 'Pasaport',
                ),
                1568 =>
                array(
                    'id' => 1569,
                    'county_id' => 507,
                    'name' => 'Yenişehir',
                ),
                1569 =>
                array(
                    'id' => 1570,
                    'county_id' => 508,
                    'name' => 'Ataköy',
                ),
                1570 =>
                array(
                    'id' => 1571,
                    'county_id' => 508,
                    'name' => 'Değirmendere',
                ),
                1571 =>
                array(
                    'id' => 1572,
                    'county_id' => 508,
                    'name' => 'Develi',
                ),
                1572 =>
                array(
                    'id' => 1573,
                    'county_id' => 508,
                    'name' => 'Görece',
                ),
                1573 =>
                array(
                    'id' => 1574,
                    'county_id' => 508,
                    'name' => 'Gümüldür',
                ),
                1574 =>
                array(
                    'id' => 1575,
                    'county_id' => 508,
                    'name' => 'Kısık',
                ),
                1575 =>
                array(
                    'id' => 1576,
                    'county_id' => 508,
                    'name' => 'Menderes',
                ),
                1576 =>
                array(
                    'id' => 1577,
                    'county_id' => 508,
                    'name' => 'Özdere',
                ),
                1577 =>
                array(
                    'id' => 1578,
                    'county_id' => 508,
                    'name' => 'Tekeli',
                ),
                1578 =>
                array(
                    'id' => 1579,
                    'county_id' => 509,
                    'name' => 'Menemen',
                ),
                1579 =>
                array(
                    'id' => 1580,
                    'county_id' => 510,
                    'name' => 'Narlıdere',
                ),
                1580 =>
                array(
                    'id' => 1581,
                    'county_id' => 511,
                    'name' => 'Ödemiş',
                ),
                1581 =>
                array(
                    'id' => 1582,
                    'county_id' => 512,
                    'name' => 'Doğanbey',
                ),
                1582 =>
                array(
                    'id' => 1583,
                    'county_id' => 512,
                    'name' => 'Seferihisar',
                ),
                1583 =>
                array(
                    'id' => 1584,
                    'county_id' => 512,
                    'name' => 'Ürkmez',
                ),
                1584 =>
                array(
                    'id' => 1585,
                    'county_id' => 513,
                    'name' => 'Selçuk',
                ),
                1585 =>
                array(
                    'id' => 1586,
                    'county_id' => 514,
                    'name' => 'Tire',
                ),
                1586 =>
                array(
                    'id' => 1587,
                    'county_id' => 515,
                    'name' => 'Ayrancılar',
                ),
                1587 =>
                array(
                    'id' => 1588,
                    'county_id' => 515,
                    'name' => 'Çaybaşı',
                ),
                1588 =>
                array(
                    'id' => 1589,
                    'county_id' => 515,
                    'name' => 'Pancar',
                ),
                1589 =>
                array(
                    'id' => 1590,
                    'county_id' => 515,
                    'name' => 'Subaşı',
                ),
                1590 =>
                array(
                    'id' => 1591,
                    'county_id' => 515,
                    'name' => 'Torbalı',
                ),
                1591 =>
                array(
                    'id' => 1592,
                    'county_id' => 515,
                    'name' => 'Yazıbaşı',
                ),
                1592 =>
                array(
                    'id' => 1593,
                    'county_id' => 515,
                    'name' => 'Yeniköyosb',
                ),
                1593 =>
                array(
                    'id' => 1594,
                    'county_id' => 516,
                    'name' => 'Bademler',
                ),
                1594 =>
                array(
                    'id' => 1595,
                    'county_id' => 516,
                    'name' => 'Balıklıova',
                ),
                1595 =>
                array(
                    'id' => 1596,
                    'county_id' => 516,
                    'name' => 'Çeşmealtı',
                ),
                1596 =>
                array(
                    'id' => 1597,
                    'county_id' => 516,
                    'name' => 'İskele',
                ),
                1597 =>
                array(
                    'id' => 1598,
                    'county_id' => 516,
                    'name' => 'İyte',
                ),
                1598 =>
                array(
                    'id' => 1599,
                    'county_id' => 516,
                    'name' => 'Kuşçular',
                ),
                1599 =>
                array(
                    'id' => 1600,
                    'county_id' => 516,
                    'name' => 'Özbek',
                ),
                1600 =>
                array(
                    'id' => 1601,
                    'county_id' => 516,
                    'name' => 'Urla',
                ),
                1601 =>
                array(
                    'id' => 1602,
                    'county_id' => 516,
                    'name' => 'Zeytinalanı',
                ),
                1602 =>
                array(
                    'id' => 1603,
                    'county_id' => 517,
                    'name' => 'Afşin',
                ),
                1603 =>
                array(
                    'id' => 1604,
                    'county_id' => 518,
                    'name' => 'Andırın',
                ),
                1604 =>
                array(
                    'id' => 1605,
                    'county_id' => 518,
                    'name' => 'Çokak',
                ),
                1605 =>
                array(
                    'id' => 1606,
                    'county_id' => 519,
                    'name' => 'Çağlayancerit',
                ),
                1606 =>
                array(
                    'id' => 1607,
                    'county_id' => 520,
                    'name' => 'Adliye',
                ),
                1607 =>
                array(
                    'id' => 1608,
                    'county_id' => 520,
                    'name' => 'Ağabeyli',
                ),
                1608 =>
                array(
                    'id' => 1609,
                    'county_id' => 520,
                    'name' => 'Sanayi',
                ),
                1609 =>
                array(
                    'id' => 1610,
                    'county_id' => 520,
                    'name' => 'Sütçüimam',
                ),
                1610 =>
                array(
                    'id' => 1611,
                    'county_id' => 521,
                    'name' => 'Ekinözü',
                ),
                1611 =>
                array(
                    'id' => 1612,
                    'county_id' => 522,
                    'name' => 'Elbistan',
                ),
                1612 =>
                array(
                    'id' => 1613,
                    'county_id' => 523,
                    'name' => 'Göksun',
                ),
                1613 =>
                array(
                    'id' => 1614,
                    'county_id' => 524,
                    'name' => 'Nurhak',
                ),
                1614 =>
                array(
                    'id' => 1615,
                    'county_id' => 525,
                    'name' => 'Binevler',
                ),
                1615 =>
                array(
                    'id' => 1616,
                    'county_id' => 525,
                    'name' => 'Hacıbayram',
                ),
                1616 =>
                array(
                    'id' => 1617,
                    'county_id' => 525,
                    'name' => 'Süleymanlı',
                ),
                1617 =>
                array(
                    'id' => 1618,
                    'county_id' => 526,
                    'name' => 'Pazarcık',
                ),
                1618 =>
                array(
                    'id' => 1619,
                    'county_id' => 527,
                    'name' => 'Türkoğlu',
                ),
                1619 =>
                array(
                    'id' => 1620,
                    'county_id' => 528,
                    'name' => 'Eflani',
                ),
                1620 =>
                array(
                    'id' => 1621,
                    'county_id' => 528,
                    'name' => 'Merkezköyler',
                ),
                1621 =>
                array(
                    'id' => 1622,
                    'county_id' => 529,
                    'name' => 'Eskipazar',
                ),
                1622 =>
                array(
                    'id' => 1623,
                    'county_id' => 529,
                    'name' => 'Merkezköyler',
                ),
                1623 =>
                array(
                    'id' => 1624,
                    'county_id' => 530,
                    'name' => '100.Yıl',
                ),
                1624 =>
                array(
                    'id' => 1625,
                    'county_id' => 530,
                    'name' => 'Bayır',
                ),
                1625 =>
                array(
                    'id' => 1626,
                    'county_id' => 530,
                    'name' => 'Beşbinevler',
                ),
                1626 =>
                array(
                    'id' => 1627,
                    'county_id' => 530,
                    'name' => 'Kayabaşı',
                ),
                1627 =>
                array(
                    'id' => 1628,
                    'county_id' => 530,
                    'name' => 'Merkezköyler',
                ),
                1628 =>
                array(
                    'id' => 1629,
                    'county_id' => 530,
                    'name' => 'Yenişehir',
                ),
                1629 =>
                array(
                    'id' => 1630,
                    'county_id' => 531,
                    'name' => 'Merkezköyler',
                ),
                1630 =>
                array(
                    'id' => 1631,
                    'county_id' => 531,
                    'name' => 'Ovacık',
                ),
                1631 =>
                array(
                    'id' => 1632,
                    'county_id' => 532,
                    'name' => 'Merkezköyler',
                ),
                1632 =>
                array(
                    'id' => 1633,
                    'county_id' => 532,
                    'name' => 'Safranbolu',
                ),
                1633 =>
                array(
                    'id' => 1634,
                    'county_id' => 533,
                    'name' => 'Merkezköyler',
                ),
                1634 =>
                array(
                    'id' => 1635,
                    'county_id' => 533,
                    'name' => 'Yenice',
                ),
                1635 =>
                array(
                    'id' => 1636,
                    'county_id' => 533,
                    'name' => 'Yortan',
                ),
                1636 =>
                array(
                    'id' => 1637,
                    'county_id' => 534,
                    'name' => 'Ayrancı',
                ),
                1637 =>
                array(
                    'id' => 1638,
                    'county_id' => 534,
                    'name' => 'Merkezköyler',
                ),
                1638 =>
                array(
                    'id' => 1639,
                    'county_id' => 535,
                    'name' => 'Başyayla',
                ),
                1639 =>
                array(
                    'id' => 1640,
                    'county_id' => 535,
                    'name' => 'Merkezköyler',
                ),
                1640 =>
                array(
                    'id' => 1641,
                    'county_id' => 536,
                    'name' => 'Ermenek',
                ),
                1641 =>
                array(
                    'id' => 1642,
                    'county_id' => 536,
                    'name' => 'Güneyyurt',
                ),
                1642 =>
                array(
                    'id' => 1643,
                    'county_id' => 536,
                    'name' => 'Kazancı',
                ),
                1643 =>
                array(
                    'id' => 1644,
                    'county_id' => 536,
                    'name' => 'Merkezköyler',
                ),
                1644 =>
                array(
                    'id' => 1645,
                    'county_id' => 537,
                    'name' => 'Kazımkarabekir',
                ),
                1645 =>
                array(
                    'id' => 1646,
                    'county_id' => 537,
                    'name' => 'Merkezköyler',
                ),
                1646 =>
                array(
                    'id' => 1647,
                    'county_id' => 538,
                    'name' => 'Akçaşehir',
                ),
                1647 =>
                array(
                    'id' => 1648,
                    'county_id' => 538,
                    'name' => 'Hisar',
                ),
                1648 =>
                array(
                    'id' => 1649,
                    'county_id' => 538,
                    'name' => 'Merkezköyler',
                ),
                1649 =>
                array(
                    'id' => 1650,
                    'county_id' => 538,
                    'name' => 'Sudurağı',
                ),
                1650 =>
                array(
                    'id' => 1651,
                    'county_id' => 538,
                    'name' => 'Sümer',
                ),
                1651 =>
                array(
                    'id' => 1652,
                    'county_id' => 539,
                    'name' => 'Göktepe',
                ),
                1652 =>
                array(
                    'id' => 1653,
                    'county_id' => 539,
                    'name' => 'Merkezköyler',
                ),
                1653 =>
                array(
                    'id' => 1654,
                    'county_id' => 539,
                    'name' => 'Sarıveliler',
                ),
                1654 =>
                array(
                    'id' => 1655,
                    'county_id' => 540,
                    'name' => 'Akyaka',
                ),
                1655 =>
                array(
                    'id' => 1656,
                    'county_id' => 540,
                    'name' => 'Merkezköyler',
                ),
                1656 =>
                array(
                    'id' => 1657,
                    'county_id' => 541,
                    'name' => 'Arpaçay',
                ),
                1657 =>
                array(
                    'id' => 1658,
                    'county_id' => 541,
                    'name' => 'Merkezköyler',
                ),
                1658 =>
                array(
                    'id' => 1659,
                    'county_id' => 542,
                    'name' => 'Dağpınar',
                ),
                1659 =>
                array(
                    'id' => 1660,
                    'county_id' => 542,
                    'name' => 'Digor',
                ),
                1660 =>
                array(
                    'id' => 1661,
                    'county_id' => 542,
                    'name' => 'Merkezköyler',
                ),
                1661 =>
                array(
                    'id' => 1662,
                    'county_id' => 543,
                    'name' => 'Kağızman',
                ),
                1662 =>
                array(
                    'id' => 1663,
                    'county_id' => 543,
                    'name' => 'Merkezköyler',
                ),
                1663 =>
                array(
                    'id' => 1664,
                    'county_id' => 544,
                    'name' => 'Kars',
                ),
                1664 =>
                array(
                    'id' => 1665,
                    'county_id' => 544,
                    'name' => 'Merkezköyler',
                ),
                1665 =>
                array(
                    'id' => 1666,
                    'county_id' => 545,
                    'name' => 'Merkezköyler',
                ),
                1666 =>
                array(
                    'id' => 1667,
                    'county_id' => 545,
                    'name' => 'Sarıkamış',
                ),
                1667 =>
                array(
                    'id' => 1668,
                    'county_id' => 546,
                    'name' => 'Merkezköyler',
                ),
                1668 =>
                array(
                    'id' => 1669,
                    'county_id' => 546,
                    'name' => 'Selim',
                ),
                1669 =>
                array(
                    'id' => 1670,
                    'county_id' => 547,
                    'name' => 'Merkezköyler',
                ),
                1670 =>
                array(
                    'id' => 1671,
                    'county_id' => 547,
                    'name' => 'Susuz',
                ),
                1671 =>
                array(
                    'id' => 1672,
                    'county_id' => 548,
                    'name' => 'Abana',
                ),
                1672 =>
                array(
                    'id' => 1673,
                    'county_id' => 548,
                    'name' => 'Merkezköyler',
                ),
                1673 =>
                array(
                    'id' => 1674,
                    'county_id' => 549,
                    'name' => 'Ağlı',
                ),
                1674 =>
                array(
                    'id' => 1675,
                    'county_id' => 549,
                    'name' => 'Merkezköyler',
                ),
                1675 =>
                array(
                    'id' => 1676,
                    'county_id' => 550,
                    'name' => 'Araç',
                ),
                1676 =>
                array(
                    'id' => 1677,
                    'county_id' => 550,
                    'name' => 'Merkezköyler',
                ),
                1677 =>
                array(
                    'id' => 1678,
                    'county_id' => 551,
                    'name' => 'Azdavay',
                ),
                1678 =>
                array(
                    'id' => 1679,
                    'county_id' => 551,
                    'name' => 'Merkezköyler',
                ),
                1679 =>
                array(
                    'id' => 1680,
                    'county_id' => 552,
                    'name' => 'Bozkurt',
                ),
                1680 =>
                array(
                    'id' => 1681,
                    'county_id' => 552,
                    'name' => 'Merkezköyler',
                ),
                1681 =>
                array(
                    'id' => 1682,
                    'county_id' => 553,
                    'name' => 'Cide',
                ),
                1682 =>
                array(
                    'id' => 1683,
                    'county_id' => 553,
                    'name' => 'Merkezköyler',
                ),
                1683 =>
                array(
                    'id' => 1684,
                    'county_id' => 554,
                    'name' => 'Çatalzeytin',
                ),
                1684 =>
                array(
                    'id' => 1685,
                    'county_id' => 554,
                    'name' => 'Merkezköyler',
                ),
                1685 =>
                array(
                    'id' => 1686,
                    'county_id' => 555,
                    'name' => 'Daday',
                ),
                1686 =>
                array(
                    'id' => 1687,
                    'county_id' => 555,
                    'name' => 'Merkezköyler',
                ),
                1687 =>
                array(
                    'id' => 1688,
                    'county_id' => 556,
                    'name' => 'Devrekani',
                ),
                1688 =>
                array(
                    'id' => 1689,
                    'county_id' => 556,
                    'name' => 'Merkezköyler',
                ),
                1689 =>
                array(
                    'id' => 1690,
                    'county_id' => 557,
                    'name' => 'Doğanyurt',
                ),
                1690 =>
                array(
                    'id' => 1691,
                    'county_id' => 557,
                    'name' => 'Merkezköyler',
                ),
                1691 =>
                array(
                    'id' => 1692,
                    'county_id' => 558,
                    'name' => 'Gökçeağaç',
                ),
                1692 =>
                array(
                    'id' => 1693,
                    'county_id' => 558,
                    'name' => 'Merkezköyler',
                ),
                1693 =>
                array(
                    'id' => 1694,
                    'county_id' => 559,
                    'name' => 'İhsangazi',
                ),
                1694 =>
                array(
                    'id' => 1695,
                    'county_id' => 559,
                    'name' => 'Merkezköyler',
                ),
                1695 =>
                array(
                    'id' => 1696,
                    'county_id' => 560,
                    'name' => 'İnebolu',
                ),
                1696 =>
                array(
                    'id' => 1697,
                    'county_id' => 560,
                    'name' => 'Merkezköyler',
                ),
                1697 =>
                array(
                    'id' => 1698,
                    'county_id' => 561,
                    'name' => 'Küre',
                ),
                1698 =>
                array(
                    'id' => 1699,
                    'county_id' => 561,
                    'name' => 'Merkezköyler',
                ),
                1699 =>
                array(
                    'id' => 1700,
                    'county_id' => 562,
                    'name' => 'Akmescit',
                ),
                1700 =>
                array(
                    'id' => 1701,
                    'county_id' => 562,
                    'name' => 'Cebrail',
                ),
                1701 =>
                array(
                    'id' => 1702,
                    'county_id' => 562,
                    'name' => 'Kuzeykent',
                ),
                1702 =>
                array(
                    'id' => 1703,
                    'county_id' => 562,
                    'name' => 'Merkezköyler',
                ),
                1703 =>
                array(
                    'id' => 1704,
                    'county_id' => 563,
                    'name' => 'Merkezköyler',
                ),
                1704 =>
                array(
                    'id' => 1705,
                    'county_id' => 563,
                    'name' => 'Pınarbaşı',
                ),
                1705 =>
                array(
                    'id' => 1706,
                    'county_id' => 564,
                    'name' => 'Merkezköyler',
                ),
                1706 =>
                array(
                    'id' => 1707,
                    'county_id' => 564,
                    'name' => 'Seydiler',
                ),
                1707 =>
                array(
                    'id' => 1708,
                    'county_id' => 565,
                    'name' => 'Merkezköyler',
                ),
                1708 =>
                array(
                    'id' => 1709,
                    'county_id' => 565,
                    'name' => 'Şenpazar',
                ),
                1709 =>
                array(
                    'id' => 1710,
                    'county_id' => 566,
                    'name' => 'Merkezköyler',
                ),
                1710 =>
                array(
                    'id' => 1711,
                    'county_id' => 566,
                    'name' => 'Taşköprü',
                ),
                1711 =>
                array(
                    'id' => 1712,
                    'county_id' => 567,
                    'name' => 'Merkezköyler',
                ),
                1712 =>
                array(
                    'id' => 1713,
                    'county_id' => 567,
                    'name' => 'Tosya',
                ),
                1713 =>
                array(
                    'id' => 1714,
                    'county_id' => 568,
                    'name' => 'Akkışla',
                ),
                1714 =>
                array(
                    'id' => 1715,
                    'county_id' => 569,
                    'name' => 'Bünyan',
                ),
                1715 =>
                array(
                    'id' => 1716,
                    'county_id' => 570,
                    'name' => 'Develi',
                ),
                1716 =>
                array(
                    'id' => 1717,
                    'county_id' => 571,
                    'name' => 'Felahiye',
                ),
                1717 =>
                array(
                    'id' => 1718,
                    'county_id' => 572,
                    'name' => 'Hacılar',
                ),
                1718 =>
                array(
                    'id' => 1719,
                    'county_id' => 572,
                    'name' => 'Hacılar Köyler',
                ),
                1719 =>
                array(
                    'id' => 1720,
                    'county_id' => 573,
                    'name' => 'İncesu',
                ),
                1720 =>
                array(
                    'id' => 1721,
                    'county_id' => 574,
                    'name' => 'Ankarayoluköyler',
                ),
                1721 =>
                array(
                    'id' => 1722,
                    'county_id' => 574,
                    'name' => 'Argıncık',
                ),
                1722 =>
                array(
                    'id' => 1723,
                    'county_id' => 574,
                    'name' => 'Beyazşehir',
                ),
                1723 =>
                array(
                    'id' => 1724,
                    'county_id' => 574,
                    'name' => 'Erkilet',
                ),
                1724 =>
                array(
                    'id' => 1725,
                    'county_id' => 574,
                    'name' => 'Erkilet Köyler',
                ),
                1725 =>
                array(
                    'id' => 1726,
                    'county_id' => 574,
                    'name' => 'Fevzi Çakmak',
                ),
                1726 =>
                array(
                    'id' => 1727,
                    'county_id' => 574,
                    'name' => 'Güneşli',
                ),
                1727 =>
                array(
                    'id' => 1728,
                    'county_id' => 574,
                    'name' => 'Kazım Karabekir',
                ),
                1728 =>
                array(
                    'id' => 1729,
                    'county_id' => 574,
                    'name' => 'Sanayi',
                ),
                1729 =>
                array(
                    'id' => 1730,
                    'county_id' => 574,
                    'name' => 'Valilik',
                ),
                1730 =>
                array(
                    'id' => 1731,
                    'county_id' => 574,
                    'name' => 'Yeni Mahalle',
                ),
                1731 =>
                array(
                    'id' => 1732,
                    'county_id' => 574,
                    'name' => 'Yenişehir',
                ),
                1732 =>
                array(
                    'id' => 1733,
                    'county_id' => 575,
                    'name' => 'Battalgazi',
                ),
                1733 =>
                array(
                    'id' => 1734,
                    'county_id' => 575,
                    'name' => 'Belsin',
                ),
                1734 =>
                array(
                    'id' => 1735,
                    'county_id' => 575,
                    'name' => 'Çarşı',
                ),
                1735 =>
                array(
                    'id' => 1736,
                    'county_id' => 575,
                    'name' => 'Gesi',
                ),
                1736 =>
                array(
                    'id' => 1737,
                    'county_id' => 575,
                    'name' => 'Gürpınar',
                ),
                1737 =>
                array(
                    'id' => 1738,
                    'county_id' => 575,
                    'name' => 'Hisarcık',
                ),
                1738 =>
                array(
                    'id' => 1739,
                    'county_id' => 575,
                    'name' => 'Hürriyet',
                ),
                1739 =>
                array(
                    'id' => 1740,
                    'county_id' => 575,
                    'name' => 'İldem',
                ),
                1740 =>
                array(
                    'id' => 1741,
                    'county_id' => 575,
                    'name' => 'Kazım Karabekir',
                ),
                1741 =>
                array(
                    'id' => 1742,
                    'county_id' => 575,
                    'name' => 'Kılıçaslan',
                ),
                1742 =>
                array(
                    'id' => 1743,
                    'county_id' => 575,
                    'name' => 'Mimarsinan',
                ),
                1743 =>
                array(
                    'id' => 1744,
                    'county_id' => 576,
                    'name' => 'Çukur',
                ),
                1744 =>
                array(
                    'id' => 1745,
                    'county_id' => 577,
                    'name' => 'Pınarbaşı',
                ),
                1745 =>
                array(
                    'id' => 1746,
                    'county_id' => 578,
                    'name' => 'Sarıoğlan',
                ),
                1746 =>
                array(
                    'id' => 1747,
                    'county_id' => 579,
                    'name' => 'Sarız',
                ),
                1747 =>
                array(
                    'id' => 1748,
                    'county_id' => 580,
                    'name' => 'Talas',
                ),
                1748 =>
                array(
                    'id' => 1749,
                    'county_id' => 580,
                    'name' => 'Talas Köyler',
                ),
                1749 =>
                array(
                    'id' => 1750,
                    'county_id' => 581,
                    'name' => 'Tomarza',
                ),
                1750 =>
                array(
                    'id' => 1751,
                    'county_id' => 582,
                    'name' => 'Yahyalı',
                ),
                1751 =>
                array(
                    'id' => 1752,
                    'county_id' => 583,
                    'name' => 'Yeşilhisar',
                ),
                1752 =>
                array(
                    'id' => 1753,
                    'county_id' => 584,
                    'name' => 'Bahşılı',
                ),
                1753 =>
                array(
                    'id' => 1754,
                    'county_id' => 584,
                    'name' => 'Merkezköyler',
                ),
                1754 =>
                array(
                    'id' => 1755,
                    'county_id' => 585,
                    'name' => 'Balışeyh',
                ),
                1755 =>
                array(
                    'id' => 1756,
                    'county_id' => 585,
                    'name' => 'Merkezköyler',
                ),
                1756 =>
                array(
                    'id' => 1757,
                    'county_id' => 586,
                    'name' => 'Çelebi',
                ),
                1757 =>
                array(
                    'id' => 1758,
                    'county_id' => 586,
                    'name' => 'Merkezköyler',
                ),
                1758 =>
                array(
                    'id' => 1759,
                    'county_id' => 587,
                    'name' => 'Çerikli',
                ),
                1759 =>
                array(
                    'id' => 1760,
                    'county_id' => 587,
                    'name' => 'Delice',
                ),
                1760 =>
                array(
                    'id' => 1761,
                    'county_id' => 587,
                    'name' => 'Merkezköyler',
                ),
                1761 =>
                array(
                    'id' => 1762,
                    'county_id' => 588,
                    'name' => 'Karakeçili',
                ),
                1762 =>
                array(
                    'id' => 1763,
                    'county_id' => 588,
                    'name' => 'Merkezköyler',
                ),
                1763 =>
                array(
                    'id' => 1764,
                    'county_id' => 589,
                    'name' => 'Keskin',
                ),
                1764 =>
                array(
                    'id' => 1765,
                    'county_id' => 589,
                    'name' => 'Merkezköyler',
                ),
                1765 =>
                array(
                    'id' => 1766,
                    'county_id' => 590,
                    'name' => 'Fabrikalar',
                ),
                1766 =>
                array(
                    'id' => 1767,
                    'county_id' => 590,
                    'name' => 'Hacılar',
                ),
                1767 =>
                array(
                    'id' => 1768,
                    'county_id' => 590,
                    'name' => 'Merkezköyler',
                ),
                1768 =>
                array(
                    'id' => 1769,
                    'county_id' => 590,
                    'name' => 'Sanayi',
                ),
                1769 =>
                array(
                    'id' => 1770,
                    'county_id' => 590,
                    'name' => 'Tepebaşı',
                ),
                1770 =>
                array(
                    'id' => 1771,
                    'county_id' => 590,
                    'name' => 'Yuva',
                ),
                1771 =>
                array(
                    'id' => 1772,
                    'county_id' => 591,
                    'name' => 'Merkezköyler',
                ),
                1772 =>
                array(
                    'id' => 1773,
                    'county_id' => 591,
                    'name' => 'Sulakyurt',
                ),
                1773 =>
                array(
                    'id' => 1774,
                    'county_id' => 592,
                    'name' => 'Merkezköyler',
                ),
                1774 =>
                array(
                    'id' => 1775,
                    'county_id' => 592,
                    'name' => 'Yahşihan',
                ),
                1775 =>
                array(
                    'id' => 1776,
                    'county_id' => 593,
                    'name' => 'Alpullu',
                ),
                1776 =>
                array(
                    'id' => 1777,
                    'county_id' => 593,
                    'name' => 'Babaeski',
                ),
                1777 =>
                array(
                    'id' => 1778,
                    'county_id' => 593,
                    'name' => 'Büyükmandıra',
                ),
                1778 =>
                array(
                    'id' => 1779,
                    'county_id' => 593,
                    'name' => 'Karahalil',
                ),
                1779 =>
                array(
                    'id' => 1780,
                    'county_id' => 593,
                    'name' => 'Merkezköyler',
                ),
                1780 =>
                array(
                    'id' => 1781,
                    'county_id' => 594,
                    'name' => 'Demirköy',
                ),
                1781 =>
                array(
                    'id' => 1782,
                    'county_id' => 594,
                    'name' => 'İğneada',
                ),
                1782 =>
                array(
                    'id' => 1783,
                    'county_id' => 594,
                    'name' => 'Merkezköyler',
                ),
                1783 =>
                array(
                    'id' => 1784,
                    'county_id' => 595,
                    'name' => 'Kofçaz',
                ),
                1784 =>
                array(
                    'id' => 1785,
                    'county_id' => 595,
                    'name' => 'Merkezköyler',
                ),
                1785 =>
                array(
                    'id' => 1786,
                    'county_id' => 596,
                    'name' => 'Ahmetbey',
                ),
                1786 =>
                array(
                    'id' => 1787,
                    'county_id' => 596,
                    'name' => 'Büyükkarıştıran',
                ),
                1787 =>
                array(
                    'id' => 1788,
                    'county_id' => 596,
                    'name' => 'Evrensekiz',
                ),
                1788 =>
                array(
                    'id' => 1789,
                    'county_id' => 596,
                    'name' => 'Lüleburgaz',
                ),
                1789 =>
                array(
                    'id' => 1790,
                    'county_id' => 596,
                    'name' => 'Merkezköyler',
                ),
                1790 =>
                array(
                    'id' => 1791,
                    'county_id' => 597,
                    'name' => 'Dereköy',
                ),
                1791 =>
                array(
                    'id' => 1792,
                    'county_id' => 597,
                    'name' => 'İnece',
                ),
                1792 =>
                array(
                    'id' => 1793,
                    'county_id' => 597,
                    'name' => 'Kavaklı',
                ),
                1793 =>
                array(
                    'id' => 1794,
                    'county_id' => 597,
                    'name' => 'Kırklareli',
                ),
                1794 =>
                array(
                    'id' => 1795,
                    'county_id' => 597,
                    'name' => 'Merkezköyler',
                ),
                1795 =>
                array(
                    'id' => 1796,
                    'county_id' => 597,
                    'name' => 'Üsküp',
                ),
                1796 =>
                array(
                    'id' => 1797,
                    'county_id' => 598,
                    'name' => 'Merkezköyler',
                ),
                1797 =>
                array(
                    'id' => 1798,
                    'county_id' => 598,
                    'name' => 'Pehlivanköy',
                ),
                1798 =>
                array(
                    'id' => 1799,
                    'county_id' => 599,
                    'name' => 'Kaynarca',
                ),
                1799 =>
                array(
                    'id' => 1800,
                    'county_id' => 599,
                    'name' => 'Merkezköyler',
                ),
                1800 =>
                array(
                    'id' => 1801,
                    'county_id' => 599,
                    'name' => 'Pınarhisar',
                ),
                1801 =>
                array(
                    'id' => 1802,
                    'county_id' => 600,
                    'name' => 'Çakıllı',
                ),
                1802 =>
                array(
                    'id' => 1803,
                    'county_id' => 600,
                    'name' => 'Kıyıköy',
                ),
                1803 =>
                array(
                    'id' => 1804,
                    'county_id' => 600,
                    'name' => 'Merkezköyler',
                ),
                1804 =>
                array(
                    'id' => 1805,
                    'county_id' => 600,
                    'name' => 'Sergen',
                ),
                1805 =>
                array(
                    'id' => 1806,
                    'county_id' => 600,
                    'name' => 'Vize',
                ),
                1806 =>
                array(
                    'id' => 1807,
                    'county_id' => 601,
                    'name' => 'Akçakent',
                ),
                1807 =>
                array(
                    'id' => 1808,
                    'county_id' => 601,
                    'name' => 'Kösefakılı',
                ),
                1808 =>
                array(
                    'id' => 1809,
                    'county_id' => 601,
                    'name' => 'Merkezköyler',
                ),
                1809 =>
                array(
                    'id' => 1810,
                    'county_id' => 602,
                    'name' => 'Akpınar',
                ),
                1810 =>
                array(
                    'id' => 1811,
                    'county_id' => 602,
                    'name' => 'Merkezköyler',
                ),
                1811 =>
                array(
                    'id' => 1812,
                    'county_id' => 603,
                    'name' => 'Boztepe',
                ),
                1812 =>
                array(
                    'id' => 1813,
                    'county_id' => 603,
                    'name' => 'Merkezköyler',
                ),
                1813 =>
                array(
                    'id' => 1814,
                    'county_id' => 604,
                    'name' => 'Çiçekdağı',
                ),
                1814 =>
                array(
                    'id' => 1815,
                    'county_id' => 604,
                    'name' => 'Köseli',
                ),
                1815 =>
                array(
                    'id' => 1816,
                    'county_id' => 604,
                    'name' => 'Merkezköyler',
                ),
                1816 =>
                array(
                    'id' => 1817,
                    'county_id' => 605,
                    'name' => 'Kaman',
                ),
                1817 =>
                array(
                    'id' => 1818,
                    'county_id' => 605,
                    'name' => 'Kurancılı',
                ),
                1818 =>
                array(
                    'id' => 1819,
                    'county_id' => 605,
                    'name' => 'Merkezköyler',
                ),
                1819 =>
                array(
                    'id' => 1820,
                    'county_id' => 606,
                    'name' => 'Çarşı',
                ),
                1820 =>
                array(
                    'id' => 1821,
                    'county_id' => 606,
                    'name' => 'Merkezköyler',
                ),
                1821 =>
                array(
                    'id' => 1822,
                    'county_id' => 606,
                    'name' => 'Özbağ',
                ),
                1822 =>
                array(
                    'id' => 1823,
                    'county_id' => 607,
                    'name' => 'Merkezköyler',
                ),
                1823 =>
                array(
                    'id' => 1824,
                    'county_id' => 607,
                    'name' => 'Mucur',
                ),
                1824 =>
                array(
                    'id' => 1825,
                    'county_id' => 608,
                    'name' => 'Elbeyli',
                ),
                1825 =>
                array(
                    'id' => 1826,
                    'county_id' => 608,
                    'name' => 'Merkezköyler',
                ),
                1826 =>
                array(
                    'id' => 1827,
                    'county_id' => 609,
                    'name' => 'Kilis',
                ),
                1827 =>
                array(
                    'id' => 1828,
                    'county_id' => 609,
                    'name' => 'Merkezköyler',
                ),
                1828 =>
                array(
                    'id' => 1829,
                    'county_id' => 610,
                    'name' => 'Merkezköyler',
                ),
                1829 =>
                array(
                    'id' => 1830,
                    'county_id' => 610,
                    'name' => 'Musabeyli',
                ),
                1830 =>
                array(
                    'id' => 1831,
                    'county_id' => 611,
                    'name' => 'Merkezköyler',
                ),
                1831 =>
                array(
                    'id' => 1832,
                    'county_id' => 611,
                    'name' => 'Polateli',
                ),
                1832 =>
                array(
                    'id' => 1833,
                    'county_id' => 612,
                    'name' => 'Bahçecik',
                ),
                1833 =>
                array(
                    'id' => 1834,
                    'county_id' => 612,
                    'name' => 'Başiskele',
                ),
                1834 =>
                array(
                    'id' => 1835,
                    'county_id' => 612,
                    'name' => 'Kullar',
                ),
                1835 =>
                array(
                    'id' => 1836,
                    'county_id' => 612,
                    'name' => 'Seymen',
                ),
                1836 =>
                array(
                    'id' => 1837,
                    'county_id' => 612,
                    'name' => 'Yeniköy',
                ),
                1837 =>
                array(
                    'id' => 1838,
                    'county_id' => 612,
                    'name' => 'Yuvacık',
                ),
                1838 =>
                array(
                    'id' => 1839,
                    'county_id' => 613,
                    'name' => 'Çayırova',
                ),
                1839 =>
                array(
                    'id' => 1840,
                    'county_id' => 614,
                    'name' => 'Darıca',
                ),
                1840 =>
                array(
                    'id' => 1841,
                    'county_id' => 615,
                    'name' => 'Derince',
                ),
                1841 =>
                array(
                    'id' => 1842,
                    'county_id' => 616,
                    'name' => 'Dilovası',
                ),
                1842 =>
                array(
                    'id' => 1843,
                    'county_id' => 617,
                    'name' => 'Gebze',
                ),
                1843 =>
                array(
                    'id' => 1844,
                    'county_id' => 618,
                    'name' => 'Değirmendere',
                ),
                1844 =>
                array(
                    'id' => 1845,
                    'county_id' => 618,
                    'name' => 'Gölcük',
                ),
                1845 =>
                array(
                    'id' => 1846,
                    'county_id' => 619,
                    'name' => 'Alikahya',
                ),
                1846 =>
                array(
                    'id' => 1847,
                    'county_id' => 619,
                    'name' => 'Çarşı',
                ),
                1847 =>
                array(
                    'id' => 1848,
                    'county_id' => 619,
                    'name' => 'Gündoğdu',
                ),
                1848 =>
                array(
                    'id' => 1849,
                    'county_id' => 619,
                    'name' => 'İzmit',
                ),
                1849 =>
                array(
                    'id' => 1850,
                    'county_id' => 619,
                    'name' => 'Sahil',
                ),
                1850 =>
                array(
                    'id' => 1851,
                    'county_id' => 619,
                    'name' => 'Saraybahçe',
                ),
                1851 =>
                array(
                    'id' => 1852,
                    'county_id' => 619,
                    'name' => 'Yenidoğan',
                ),
                1852 =>
                array(
                    'id' => 1853,
                    'county_id' => 619,
                    'name' => 'Yenişehir',
                ),
                1853 =>
                array(
                    'id' => 1854,
                    'county_id' => 620,
                    'name' => 'Kandıra',
                ),
                1854 =>
                array(
                    'id' => 1855,
                    'county_id' => 621,
                    'name' => 'Karamürsel',
                ),
                1855 =>
                array(
                    'id' => 1856,
                    'county_id' => 622,
                    'name' => 'Arslanbey',
                ),
                1856 =>
                array(
                    'id' => 1857,
                    'county_id' => 622,
                    'name' => 'Büyükderbent',
                ),
                1857 =>
                array(
                    'id' => 1858,
                    'county_id' => 622,
                    'name' => 'Köseköy',
                ),
                1858 =>
                array(
                    'id' => 1859,
                    'county_id' => 622,
                    'name' => 'Maşukiye',
                ),
                1859 =>
                array(
                    'id' => 1860,
                    'county_id' => 622,
                    'name' => 'Suadiye',
                ),
                1860 =>
                array(
                    'id' => 1861,
                    'county_id' => 622,
                    'name' => 'Uzunçiftlik',
                ),
                1861 =>
                array(
                    'id' => 1862,
                    'county_id' => 622,
                    'name' => 'Uzuntarla',
                ),
                1862 =>
                array(
                    'id' => 1863,
                    'county_id' => 623,
                    'name' => 'Hereke',
                ),
                1863 =>
                array(
                    'id' => 1864,
                    'county_id' => 623,
                    'name' => 'Körfez',
                ),
                1864 =>
                array(
                    'id' => 1865,
                    'county_id' => 624,
                    'name' => 'Ahırlı',
                ),
                1865 =>
                array(
                    'id' => 1866,
                    'county_id' => 624,
                    'name' => 'Akkise',
                ),
                1866 =>
                array(
                    'id' => 1867,
                    'county_id' => 625,
                    'name' => 'Akören',
                ),
                1867 =>
                array(
                    'id' => 1868,
                    'county_id' => 626,
                    'name' => 'Akşehir',
                ),
                1868 =>
                array(
                    'id' => 1869,
                    'county_id' => 626,
                    'name' => 'Kızılca',
                ),
                1869 =>
                array(
                    'id' => 1870,
                    'county_id' => 626,
                    'name' => 'Nasreddin',
                ),
                1870 =>
                array(
                    'id' => 1871,
                    'county_id' => 627,
                    'name' => 'Altınekin',
                ),
                1871 =>
                array(
                    'id' => 1872,
                    'county_id' => 628,
                    'name' => 'Beyşehir',
                ),
                1872 =>
                array(
                    'id' => 1873,
                    'county_id' => 628,
                    'name' => 'Hamidiye',
                ),
                1873 =>
                array(
                    'id' => 1874,
                    'county_id' => 629,
                    'name' => 'Bozkır',
                ),
                1874 =>
                array(
                    'id' => 1875,
                    'county_id' => 630,
                    'name' => 'Cihanbeyli',
                ),
                1875 =>
                array(
                    'id' => 1876,
                    'county_id' => 630,
                    'name' => 'Cumhuriyet',
                ),
                1876 =>
                array(
                    'id' => 1877,
                    'county_id' => 630,
                    'name' => 'Yeniceoba',
                ),
                1877 =>
                array(
                    'id' => 1878,
                    'county_id' => 631,
                    'name' => 'Çeltik',
                ),
                1878 =>
                array(
                    'id' => 1879,
                    'county_id' => 632,
                    'name' => 'Bardakçı',
                ),
                1879 =>
                array(
                    'id' => 1880,
                    'county_id' => 632,
                    'name' => 'Çumra',
                ),
                1880 =>
                array(
                    'id' => 1881,
                    'county_id' => 632,
                    'name' => 'İçeri Çumra',
                ),
                1881 =>
                array(
                    'id' => 1882,
                    'county_id' => 633,
                    'name' => 'Derbent',
                ),
                1882 =>
                array(
                    'id' => 1883,
                    'county_id' => 634,
                    'name' => 'Derebucak',
                ),
                1883 =>
                array(
                    'id' => 1884,
                    'county_id' => 635,
                    'name' => 'Başköy',
                ),
                1884 =>
                array(
                    'id' => 1885,
                    'county_id' => 635,
                    'name' => 'Doğanhisar',
                ),
                1885 =>
                array(
                    'id' => 1886,
                    'county_id' => 635,
                    'name' => 'Karaağa',
                ),
                1886 =>
                array(
                    'id' => 1887,
                    'county_id' => 636,
                    'name' => 'Emirgazi',
                ),
                1887 =>
                array(
                    'id' => 1888,
                    'county_id' => 637,
                    'name' => 'Ereğli',
                ),
                1888 =>
                array(
                    'id' => 1889,
                    'county_id' => 637,
                    'name' => 'Gülbahçe',
                ),
                1889 =>
                array(
                    'id' => 1890,
                    'county_id' => 637,
                    'name' => 'Sümer',
                ),
                1890 =>
                array(
                    'id' => 1891,
                    'county_id' => 638,
                    'name' => 'Güneysınır',
                ),
                1891 =>
                array(
                    'id' => 1892,
                    'county_id' => 639,
                    'name' => 'Hadim',
                ),
                1892 =>
                array(
                    'id' => 1893,
                    'county_id' => 640,
                    'name' => 'Halkapınar',
                ),
                1893 =>
                array(
                    'id' => 1894,
                    'county_id' => 641,
                    'name' => 'Hüyük',
                ),
                1894 =>
                array(
                    'id' => 1895,
                    'county_id' => 641,
                    'name' => 'İmrenler',
                ),
                1895 =>
                array(
                    'id' => 1896,
                    'county_id' => 641,
                    'name' => 'Kıreli',
                ),
                1896 =>
                array(
                    'id' => 1897,
                    'county_id' => 642,
                    'name' => 'Argıthanı',
                ),
                1897 =>
                array(
                    'id' => 1898,
                    'county_id' => 642,
                    'name' => 'Camiatik',
                ),
                1898 =>
                array(
                    'id' => 1899,
                    'county_id' => 642,
                    'name' => 'Çiğil',
                ),
                1899 =>
                array(
                    'id' => 1900,
                    'county_id' => 642,
                    'name' => 'Ilgın',
                ),
                1900 =>
                array(
                    'id' => 1901,
                    'county_id' => 643,
                    'name' => 'Kadınhanı',
                ),
                1901 =>
                array(
                    'id' => 1902,
                    'county_id' => 644,
                    'name' => 'Karapınar',
                ),
                1902 =>
                array(
                    'id' => 1903,
                    'county_id' => 645,
                    'name' => 'Erenler',
                ),
                1903 =>
                array(
                    'id' => 1904,
                    'county_id' => 645,
                    'name' => 'Fevziçakmak',
                ),
                1904 =>
                array(
                    'id' => 1905,
                    'county_id' => 645,
                    'name' => 'Karatay',
                ),
                1905 =>
                array(
                    'id' => 1906,
                    'county_id' => 645,
                    'name' => 'Mevlana',
                ),
                1906 =>
                array(
                    'id' => 1907,
                    'county_id' => 645,
                    'name' => 'Selimiye',
                ),
                1907 =>
                array(
                    'id' => 1908,
                    'county_id' => 646,
                    'name' => 'Alparslan',
                ),
                1908 =>
                array(
                    'id' => 1909,
                    'county_id' => 646,
                    'name' => 'Kulu',
                ),
                1909 =>
                array(
                    'id' => 1910,
                    'county_id' => 646,
                    'name' => 'Ömeranlı',
                ),
                1910 =>
                array(
                    'id' => 1911,
                    'county_id' => 647,
                    'name' => 'Alaaddin',
                ),
                1911 =>
                array(
                    'id' => 1912,
                    'county_id' => 647,
                    'name' => 'Gödene',
                ),
                1912 =>
                array(
                    'id' => 1913,
                    'county_id' => 647,
                    'name' => 'Kaşınhanı',
                ),
                1913 =>
                array(
                    'id' => 1914,
                    'county_id' => 647,
                    'name' => 'Lalebahçe',
                ),
                1914 =>
                array(
                    'id' => 1915,
                    'county_id' => 647,
                    'name' => 'Meram',
                ),
                1915 =>
                array(
                    'id' => 1916,
                    'county_id' => 647,
                    'name' => 'Taşcami',
                ),
                1916 =>
                array(
                    'id' => 1917,
                    'county_id' => 647,
                    'name' => 'Yaka',
                ),
                1917 =>
                array(
                    'id' => 1918,
                    'county_id' => 648,
                    'name' => 'İstasyon',
                ),
                1918 =>
                array(
                    'id' => 1919,
                    'county_id' => 648,
                    'name' => 'Sarayönü',
                ),
                1919 =>
                array(
                    'id' => 1920,
                    'county_id' => 649,
                    'name' => 'Aydınlık',
                ),
                1920 =>
                array(
                    'id' => 1921,
                    'county_id' => 649,
                    'name' => 'Bosna',
                ),
                1921 =>
                array(
                    'id' => 1922,
                    'county_id' => 649,
                    'name' => 'Büyükkayacık',
                ),
                1922 =>
                array(
                    'id' => 1923,
                    'county_id' => 649,
                    'name' => 'Cumhuriyet',
                ),
                1923 =>
                array(
                    'id' => 1924,
                    'county_id' => 649,
                    'name' => 'Fatih',
                ),
                1924 =>
                array(
                    'id' => 1925,
                    'county_id' => 649,
                    'name' => 'Horozluhan',
                ),
                1925 =>
                array(
                    'id' => 1926,
                    'county_id' => 649,
                    'name' => 'Kampüs',
                ),
                1926 =>
                array(
                    'id' => 1927,
                    'county_id' => 649,
                    'name' => 'Mimar Sinan',
                ),
                1927 =>
                array(
                    'id' => 1928,
                    'county_id' => 649,
                    'name' => 'Nalçacı',
                ),
                1928 =>
                array(
                    'id' => 1929,
                    'county_id' => 649,
                    'name' => 'Selçuklu',
                ),
                1929 =>
                array(
                    'id' => 1930,
                    'county_id' => 649,
                    'name' => 'Sille',
                ),
                1930 =>
                array(
                    'id' => 1931,
                    'county_id' => 649,
                    'name' => 'Tatköy',
                ),
                1931 =>
                array(
                    'id' => 1932,
                    'county_id' => 649,
                    'name' => 'Yazır',
                ),
                1932 =>
                array(
                    'id' => 1933,
                    'county_id' => 650,
                    'name' => 'Alaylar',
                ),
                1933 =>
                array(
                    'id' => 1934,
                    'county_id' => 650,
                    'name' => 'Seydişehir',
                ),
                1934 =>
                array(
                    'id' => 1935,
                    'county_id' => 650,
                    'name' => 'Seyitharun',
                ),
                1935 =>
                array(
                    'id' => 1936,
                    'county_id' => 651,
                    'name' => 'Taşkent',
                ),
                1936 =>
                array(
                    'id' => 1937,
                    'county_id' => 652,
                    'name' => 'Tuzlukçu',
                ),
                1937 =>
                array(
                    'id' => 1938,
                    'county_id' => 653,
                    'name' => 'Yalıhüyük',
                ),
                1938 =>
                array(
                    'id' => 1939,
                    'county_id' => 654,
                    'name' => 'Yunak',
                ),
                1939 =>
                array(
                    'id' => 1940,
                    'county_id' => 655,
                    'name' => 'Altıntaş',
                ),
                1940 =>
                array(
                    'id' => 1941,
                    'county_id' => 655,
                    'name' => 'Merkezköyler',
                ),
                1941 =>
                array(
                    'id' => 1942,
                    'county_id' => 656,
                    'name' => 'Aslanapa',
                ),
                1942 =>
                array(
                    'id' => 1943,
                    'county_id' => 656,
                    'name' => 'Merkezköyler',
                ),
                1943 =>
                array(
                    'id' => 1944,
                    'county_id' => 657,
                    'name' => 'Çavdarhisar',
                ),
                1944 =>
                array(
                    'id' => 1945,
                    'county_id' => 657,
                    'name' => 'Merkezköyler',
                ),
                1945 =>
                array(
                    'id' => 1946,
                    'county_id' => 658,
                    'name' => 'Çukurca',
                ),
                1946 =>
                array(
                    'id' => 1947,
                    'county_id' => 658,
                    'name' => 'Domaniç',
                ),
                1947 =>
                array(
                    'id' => 1948,
                    'county_id' => 658,
                    'name' => 'Merkezköyler',
                ),
                1948 =>
                array(
                    'id' => 1949,
                    'county_id' => 659,
                    'name' => 'Dumlupınar',
                ),
                1949 =>
                array(
                    'id' => 1950,
                    'county_id' => 659,
                    'name' => 'Merkezköyler',
                ),
                1950 =>
                array(
                    'id' => 1951,
                    'county_id' => 660,
                    'name' => 'Emet',
                ),
                1951 =>
                array(
                    'id' => 1952,
                    'county_id' => 660,
                    'name' => 'Merkezköyler',
                ),
                1952 =>
                array(
                    'id' => 1953,
                    'county_id' => 661,
                    'name' => 'Eskigediz',
                ),
                1953 =>
                array(
                    'id' => 1954,
                    'county_id' => 661,
                    'name' => 'Gediz',
                ),
                1954 =>
                array(
                    'id' => 1955,
                    'county_id' => 661,
                    'name' => 'Gökler',
                ),
                1955 =>
                array(
                    'id' => 1956,
                    'county_id' => 661,
                    'name' => 'Merkezköyler',
                ),
                1956 =>
                array(
                    'id' => 1957,
                    'county_id' => 661,
                    'name' => 'Yenikent',
                ),
                1957 =>
                array(
                    'id' => 1958,
                    'county_id' => 662,
                    'name' => 'Hisarcık',
                ),
                1958 =>
                array(
                    'id' => 1959,
                    'county_id' => 662,
                    'name' => 'Merkezköyler',
                ),
                1959 =>
                array(
                    'id' => 1960,
                    'county_id' => 663,
                    'name' => 'Alipaşa',
                ),
                1960 =>
                array(
                    'id' => 1961,
                    'county_id' => 663,
                    'name' => 'Börekçiler',
                ),
                1961 =>
                array(
                    'id' => 1962,
                    'county_id' => 663,
                    'name' => 'Hamidiye',
                ),
                1962 =>
                array(
                    'id' => 1963,
                    'county_id' => 663,
                    'name' => 'Merkezköyler',
                ),
                1963 =>
                array(
                    'id' => 1964,
                    'county_id' => 663,
                    'name' => 'Seyitömer',
                ),
                1964 =>
                array(
                    'id' => 1965,
                    'county_id' => 664,
                    'name' => 'Merkezköyler',
                ),
                1965 =>
                array(
                    'id' => 1966,
                    'county_id' => 664,
                    'name' => 'Pazarlar',
                ),
                1966 =>
                array(
                    'id' => 1967,
                    'county_id' => 665,
                    'name' => 'Akdağ',
                ),
                1967 =>
                array(
                    'id' => 1968,
                    'county_id' => 665,
                    'name' => 'Çitgöl',
                ),
                1968 =>
                array(
                    'id' => 1969,
                    'county_id' => 665,
                    'name' => 'Demirci',
                ),
                1969 =>
                array(
                    'id' => 1970,
                    'county_id' => 665,
                    'name' => 'Güney',
                ),
                1970 =>
                array(
                    'id' => 1971,
                    'county_id' => 665,
                    'name' => 'Kuşu',
                ),
                1971 =>
                array(
                    'id' => 1972,
                    'county_id' => 665,
                    'name' => 'Merkezköyler',
                ),
                1972 =>
                array(
                    'id' => 1973,
                    'county_id' => 665,
                    'name' => 'Naşa',
                ),
                1973 =>
                array(
                    'id' => 1974,
                    'county_id' => 665,
                    'name' => 'Simav',
                ),
                1974 =>
                array(
                    'id' => 1975,
                    'county_id' => 666,
                    'name' => 'Merkezköyler',
                ),
                1975 =>
                array(
                    'id' => 1976,
                    'county_id' => 666,
                    'name' => 'Şaphane',
                ),
                1976 =>
                array(
                    'id' => 1977,
                    'county_id' => 667,
                    'name' => 'Balıköy',
                ),
                1977 =>
                array(
                    'id' => 1978,
                    'county_id' => 667,
                    'name' => 'Kuruçay',
                ),
                1978 =>
                array(
                    'id' => 1979,
                    'county_id' => 667,
                    'name' => 'Merkezköyler',
                ),
                1979 =>
                array(
                    'id' => 1980,
                    'county_id' => 667,
                    'name' => 'Tavşanlı',
                ),
                1980 =>
                array(
                    'id' => 1981,
                    'county_id' => 667,
                    'name' => 'Tepecik',
                ),
                1981 =>
                array(
                    'id' => 1982,
                    'county_id' => 667,
                    'name' => 'Tunçbilek',
                ),
                1982 =>
                array(
                    'id' => 1983,
                    'county_id' => 668,
                    'name' => 'Akçadağ',
                ),
                1983 =>
                array(
                    'id' => 1984,
                    'county_id' => 669,
                    'name' => 'Arapgir',
                ),
                1984 =>
                array(
                    'id' => 1985,
                    'county_id' => 670,
                    'name' => 'Arguvan',
                ),
                1985 =>
                array(
                    'id' => 1986,
                    'county_id' => 671,
                    'name' => 'Battalgazi',
                ),
                1986 =>
                array(
                    'id' => 1987,
                    'county_id' => 671,
                    'name' => 'Beydağı',
                ),
                1987 =>
                array(
                    'id' => 1988,
                    'county_id' => 671,
                    'name' => 'Dabakhane',
                ),
                1988 =>
                array(
                    'id' => 1989,
                    'county_id' => 671,
                    'name' => 'Hanımınçiftliği',
                ),
                1989 =>
                array(
                    'id' => 1990,
                    'county_id' => 671,
                    'name' => 'Kanalboyu',
                ),
                1990 =>
                array(
                    'id' => 1991,
                    'county_id' => 671,
                    'name' => 'Kapalıçarşı',
                ),
                1991 =>
                array(
                    'id' => 1992,
                    'county_id' => 671,
                    'name' => 'Orduzu',
                ),
                1992 =>
                array(
                    'id' => 1993,
                    'county_id' => 671,
                    'name' => 'Sıtmapınarı',
                ),
                1993 =>
                array(
                    'id' => 1994,
                    'county_id' => 671,
                    'name' => 'Taştepe',
                ),
                1994 =>
                array(
                    'id' => 1995,
                    'county_id' => 672,
                    'name' => 'Darende',
                ),
                1995 =>
                array(
                    'id' => 1996,
                    'county_id' => 673,
                    'name' => 'Doğanşehir',
                ),
                1996 =>
                array(
                    'id' => 1997,
                    'county_id' => 674,
                    'name' => 'Doğanyol',
                ),
                1997 =>
                array(
                    'id' => 1998,
                    'county_id' => 675,
                    'name' => 'Hekimhan',
                ),
                1998 =>
                array(
                    'id' => 1999,
                    'county_id' => 676,
                    'name' => 'Kale',
                ),
                1999 =>
                array(
                    'id' => 2000,
                    'county_id' => 677,
                    'name' => 'Kuluncak',
                ),
                2000 =>
                array(
                    'id' => 2001,
                    'county_id' => 678,
                    'name' => 'Pötürge',
                ),
                2001 =>
                array(
                    'id' => 2002,
                    'county_id' => 679,
                    'name' => 'Yazıhan',
                ),
                2002 =>
                array(
                    'id' => 2003,
                    'county_id' => 680,
                    'name' => 'Bostanbaşı',
                ),
                2003 =>
                array(
                    'id' => 2004,
                    'county_id' => 680,
                    'name' => 'Çavuşoğlu',
                ),
                2004 =>
                array(
                    'id' => 2005,
                    'county_id' => 680,
                    'name' => 'Dilek',
                ),
                2005 =>
                array(
                    'id' => 2006,
                    'county_id' => 680,
                    'name' => 'Gündüzbey',
                ),
                2006 =>
                array(
                    'id' => 2007,
                    'county_id' => 680,
                    'name' => 'Karakavak',
                ),
                2007 =>
                array(
                    'id' => 2008,
                    'county_id' => 680,
                    'name' => 'Özalper',
                ),
                2008 =>
                array(
                    'id' => 2009,
                    'county_id' => 680,
                    'name' => 'Şahnahan',
                ),
                2009 =>
                array(
                    'id' => 2010,
                    'county_id' => 680,
                    'name' => 'Topsöğüt',
                ),
                2010 =>
                array(
                    'id' => 2011,
                    'county_id' => 680,
                    'name' => 'Yakınca',
                ),
                2011 =>
                array(
                    'id' => 2012,
                    'county_id' => 680,
                    'name' => 'Yeşiltepe',
                ),
                2012 =>
                array(
                    'id' => 2013,
                    'county_id' => 680,
                    'name' => 'Yeşilyurt',
                ),
                2013 =>
                array(
                    'id' => 2014,
                    'county_id' => 681,
                    'name' => 'Ahmetli',
                ),
                2014 =>
                array(
                    'id' => 2015,
                    'county_id' => 681,
                    'name' => 'Gökkaya',
                ),
                2015 =>
                array(
                    'id' => 2016,
                    'county_id' => 682,
                    'name' => 'Akhisar',
                ),
                2016 =>
                array(
                    'id' => 2017,
                    'county_id' => 683,
                    'name' => 'Alaşehir',
                ),
                2017 =>
                array(
                    'id' => 2018,
                    'county_id' => 683,
                    'name' => 'Kavaklıdere',
                ),
                2018 =>
                array(
                    'id' => 2019,
                    'county_id' => 683,
                    'name' => 'Kemaliye',
                ),
                2019 =>
                array(
                    'id' => 2020,
                    'county_id' => 683,
                    'name' => 'Killik',
                ),
                2020 =>
                array(
                    'id' => 2021,
                    'county_id' => 683,
                    'name' => 'Piyadeler',
                ),
                2021 =>
                array(
                    'id' => 2022,
                    'county_id' => 683,
                    'name' => 'Uluderbent',
                ),
                2022 =>
                array(
                    'id' => 2023,
                    'county_id' => 683,
                    'name' => 'Yeşilyurt',
                ),
                2023 =>
                array(
                    'id' => 2024,
                    'county_id' => 684,
                    'name' => 'Demirci',
                ),
                2024 =>
                array(
                    'id' => 2025,
                    'county_id' => 684,
                    'name' => 'Durhasan',
                ),
                2025 =>
                array(
                    'id' => 2026,
                    'county_id' => 684,
                    'name' => 'Mahmutlar',
                ),
                2026 =>
                array(
                    'id' => 2027,
                    'county_id' => 685,
                    'name' => 'Gölmarmara',
                ),
                2027 =>
                array(
                    'id' => 2028,
                    'county_id' => 686,
                    'name' => 'Çiçekli',
                ),
                2028 =>
                array(
                    'id' => 2029,
                    'county_id' => 686,
                    'name' => 'Gördes',
                ),
                2029 =>
                array(
                    'id' => 2030,
                    'county_id' => 686,
                    'name' => 'Güneşli',
                ),
                2030 =>
                array(
                    'id' => 2031,
                    'county_id' => 686,
                    'name' => 'Kayacık',
                ),
                2031 =>
                array(
                    'id' => 2032,
                    'county_id' => 687,
                    'name' => 'Bakır',
                ),
                2032 =>
                array(
                    'id' => 2033,
                    'county_id' => 687,
                    'name' => 'Gelenbe',
                ),
                2033 =>
                array(
                    'id' => 2034,
                    'county_id' => 687,
                    'name' => 'İlyaslar',
                ),
                2034 =>
                array(
                    'id' => 2035,
                    'county_id' => 687,
                    'name' => 'Karakurt',
                ),
                2035 =>
                array(
                    'id' => 2036,
                    'county_id' => 687,
                    'name' => 'Kırkağaç',
                ),
                2036 =>
                array(
                    'id' => 2037,
                    'county_id' => 688,
                    'name' => 'Köprübaşı',
                ),
                2037 =>
                array(
                    'id' => 2038,
                    'county_id' => 689,
                    'name' => 'Kula',
                ),
                2038 =>
                array(
                    'id' => 2039,
                    'county_id' => 690,
                    'name' => 'Adala',
                ),
                2039 =>
                array(
                    'id' => 2040,
                    'county_id' => 690,
                    'name' => 'Durasıllı',
                ),
                2040 =>
                array(
                    'id' => 2041,
                    'county_id' => 690,
                    'name' => 'Poyraz',
                ),
                2041 =>
                array(
                    'id' => 2042,
                    'county_id' => 690,
                    'name' => 'Salihli',
                ),
                2042 =>
                array(
                    'id' => 2043,
                    'county_id' => 690,
                    'name' => 'Sart',
                ),
                2043 =>
                array(
                    'id' => 2044,
                    'county_id' => 691,
                    'name' => 'Sarıgöl',
                ),
                2044 =>
                array(
                    'id' => 2045,
                    'county_id' => 692,
                    'name' => 'Alibeyli',
                ),
                2045 =>
                array(
                    'id' => 2046,
                    'county_id' => 692,
                    'name' => 'Büyükbelen',
                ),
                2046 =>
                array(
                    'id' => 2047,
                    'county_id' => 692,
                    'name' => 'Dilek',
                ),
                2047 =>
                array(
                    'id' => 2048,
                    'county_id' => 692,
                    'name' => 'Gökçeköy',
                ),
                2048 =>
                array(
                    'id' => 2049,
                    'county_id' => 692,
                    'name' => 'Gümülceli',
                ),
                2049 =>
                array(
                    'id' => 2050,
                    'county_id' => 692,
                    'name' => 'Hacırahmanlı',
                ),
                2050 =>
                array(
                    'id' => 2051,
                    'county_id' => 692,
                    'name' => 'Halitpaşa',
                ),
                2051 =>
                array(
                    'id' => 2052,
                    'county_id' => 692,
                    'name' => 'İshakçelebi',
                ),
                2052 =>
                array(
                    'id' => 2053,
                    'county_id' => 692,
                    'name' => 'Koldere',
                ),
                2053 =>
                array(
                    'id' => 2054,
                    'county_id' => 692,
                    'name' => 'Kumkuyucak',
                ),
                2054 =>
                array(
                    'id' => 2055,
                    'county_id' => 692,
                    'name' => 'Mütevelli',
                ),
                2055 =>
                array(
                    'id' => 2056,
                    'county_id' => 692,
                    'name' => 'Nuriye',
                ),
                2056 =>
                array(
                    'id' => 2057,
                    'county_id' => 692,
                    'name' => 'Paşaköy',
                ),
                2057 =>
                array(
                    'id' => 2058,
                    'county_id' => 692,
                    'name' => 'Saruhanlı',
                ),
                2058 =>
                array(
                    'id' => 2059,
                    'county_id' => 693,
                    'name' => 'Selendi',
                ),
                2059 =>
                array(
                    'id' => 2060,
                    'county_id' => 694,
                    'name' => 'Avdan',
                ),
                2060 =>
                array(
                    'id' => 2061,
                    'county_id' => 694,
                    'name' => 'Cenkyeri',
                ),
                2061 =>
                array(
                    'id' => 2062,
                    'county_id' => 694,
                    'name' => 'Soma',
                ),
                2062 =>
                array(
                    'id' => 2063,
                    'county_id' => 694,
                    'name' => 'Turgutalp',
                ),
                2063 =>
                array(
                    'id' => 2064,
                    'county_id' => 694,
                    'name' => 'Yağcılı',
                ),
                2064 =>
                array(
                    'id' => 2065,
                    'county_id' => 695,
                    'name' => 'Aşağıçobanisa',
                ),
                2065 =>
                array(
                    'id' => 2066,
                    'county_id' => 695,
                    'name' => 'Çarşı',
                ),
                2066 =>
                array(
                    'id' => 2067,
                    'county_id' => 695,
                    'name' => 'Hacıhaliller',
                ),
                2067 =>
                array(
                    'id' => 2068,
                    'county_id' => 695,
                    'name' => 'Karaağaçlı',
                ),
                2068 =>
                array(
                    'id' => 2069,
                    'county_id' => 695,
                    'name' => 'Karaköy',
                ),
                2069 =>
                array(
                    'id' => 2070,
                    'county_id' => 695,
                    'name' => 'Karaoğlanlı',
                ),
                2070 =>
                array(
                    'id' => 2071,
                    'county_id' => 695,
                    'name' => 'Kuzey',
                ),
                2071 =>
                array(
                    'id' => 2072,
                    'county_id' => 695,
                    'name' => 'Sancaklıbozköy',
                ),
                2072 =>
                array(
                    'id' => 2073,
                    'county_id' => 695,
                    'name' => 'Şehzadeler',
                ),
                2073 =>
                array(
                    'id' => 2074,
                    'county_id' => 696,
                    'name' => 'Derbent',
                ),
                2074 =>
                array(
                    'id' => 2075,
                    'county_id' => 696,
                    'name' => 'Turgutlu',
                ),
                2075 =>
                array(
                    'id' => 2076,
                    'county_id' => 696,
                    'name' => 'Urganlı',
                ),
                2076 =>
                array(
                    'id' => 2077,
                    'county_id' => 697,
                    'name' => '50.Yıl',
                ),
                2077 =>
                array(
                    'id' => 2078,
                    'county_id' => 697,
                    'name' => 'Laleli',
                ),
                2078 =>
                array(
                    'id' => 2079,
                    'county_id' => 697,
                    'name' => 'Muradiye',
                ),
                2079 =>
                array(
                    'id' => 2080,
                    'county_id' => 697,
                    'name' => 'Tevfikiye',
                ),
                2080 =>
                array(
                    'id' => 2081,
                    'county_id' => 697,
                    'name' => 'Üçpınar',
                ),
                2081 =>
                array(
                    'id' => 2082,
                    'county_id' => 697,
                    'name' => 'Yunusemre',
                ),
                2082 =>
                array(
                    'id' => 2083,
                    'county_id' => 698,
                    'name' => 'Gökçe',
                ),
                2083 =>
                array(
                    'id' => 2084,
                    'county_id' => 698,
                    'name' => 'İstasyon',
                ),
                2084 =>
                array(
                    'id' => 2085,
                    'county_id' => 698,
                    'name' => 'Kabala',
                ),
                2085 =>
                array(
                    'id' => 2086,
                    'county_id' => 698,
                    'name' => 'Nur',
                ),
                2086 =>
                array(
                    'id' => 2087,
                    'county_id' => 698,
                    'name' => 'Savurkapı',
                ),
                2087 =>
                array(
                    'id' => 2088,
                    'county_id' => 699,
                    'name' => 'Dargeçit',
                ),
                2088 =>
                array(
                    'id' => 2089,
                    'county_id' => 700,
                    'name' => 'Derik',
                ),
                2089 =>
                array(
                    'id' => 2090,
                    'county_id' => 701,
                    'name' => 'Kızıltepe',
                ),
                2090 =>
                array(
                    'id' => 2091,
                    'county_id' => 702,
                    'name' => 'Mazıdağı',
                ),
                2091 =>
                array(
                    'id' => 2092,
                    'county_id' => 703,
                    'name' => 'Eskimidyat',
                ),
                2092 =>
                array(
                    'id' => 2093,
                    'county_id' => 703,
                    'name' => 'Hükümet',
                ),
                2093 =>
                array(
                    'id' => 2094,
                    'county_id' => 704,
                    'name' => 'Nusaybin',
                ),
                2094 =>
                array(
                    'id' => 2095,
                    'county_id' => 705,
                    'name' => 'Ömerli',
                ),
                2095 =>
                array(
                    'id' => 2096,
                    'county_id' => 706,
                    'name' => 'Savur',
                ),
                2096 =>
                array(
                    'id' => 2097,
                    'county_id' => 707,
                    'name' => 'Yeşilli',
                ),
                2097 =>
                array(
                    'id' => 2098,
                    'county_id' => 708,
                    'name' => 'Adanalıoğlu',
                ),
                2098 =>
                array(
                    'id' => 2099,
                    'county_id' => 708,
                    'name' => 'Barış',
                ),
                2099 =>
                array(
                    'id' => 2100,
                    'county_id' => 708,
                    'name' => 'Camiişerif',
                ),
                2100 =>
                array(
                    'id' => 2101,
                    'county_id' => 708,
                    'name' => 'Çankaya',
                ),
                2101 =>
                array(
                    'id' => 2102,
                    'county_id' => 708,
                    'name' => 'Dikilitaş',
                ),
                2102 =>
                array(
                    'id' => 2103,
                    'county_id' => 708,
                    'name' => 'Evci',
                ),
                2103 =>
                array(
                    'id' => 2104,
                    'county_id' => 708,
                    'name' => 'Gündoğdu',
                ),
                2104 =>
                array(
                    'id' => 2105,
                    'county_id' => 708,
                    'name' => 'Hal',
                ),
                2105 =>
                array(
                    'id' => 2106,
                    'county_id' => 708,
                    'name' => 'Huzurkent',
                ),
                2106 =>
                array(
                    'id' => 2107,
                    'county_id' => 708,
                    'name' => 'Karacailyas',
                ),
                2107 =>
                array(
                    'id' => 2108,
                    'county_id' => 708,
                    'name' => 'Karaduvar',
                ),
                2108 =>
                array(
                    'id' => 2109,
                    'county_id' => 708,
                    'name' => 'Kazanlı',
                ),
                2109 =>
                array(
                    'id' => 2110,
                    'county_id' => 708,
                    'name' => 'Nusratiye',
                ),
                2110 =>
                array(
                    'id' => 2111,
                    'county_id' => 709,
                    'name' => 'Anamur',
                ),
                2111 =>
                array(
                    'id' => 2112,
                    'county_id' => 709,
                    'name' => 'Göktaş',
                ),
                2112 =>
                array(
                    'id' => 2113,
                    'county_id' => 709,
                    'name' => 'İskele',
                ),
                2113 =>
                array(
                    'id' => 2114,
                    'county_id' => 710,
                    'name' => 'Aydıncık',
                ),
                2114 =>
                array(
                    'id' => 2115,
                    'county_id' => 710,
                    'name' => 'Karadere',
                ),
                2115 =>
                array(
                    'id' => 2116,
                    'county_id' => 711,
                    'name' => 'Ardıçlıtaş',
                ),
                2116 =>
                array(
                    'id' => 2117,
                    'county_id' => 711,
                    'name' => 'Bozyazı',
                ),
                2117 =>
                array(
                    'id' => 2118,
                    'county_id' => 712,
                    'name' => 'Çamlıyayla',
                ),
                2118 =>
                array(
                    'id' => 2119,
                    'county_id' => 712,
                    'name' => 'Darıpınarı',
                ),
                2119 =>
                array(
                    'id' => 2120,
                    'county_id' => 713,
                    'name' => 'Erdemli',
                ),
                2120 =>
                array(
                    'id' => 2121,
                    'county_id' => 714,
                    'name' => 'Gülnar',
                ),
                2121 =>
                array(
                    'id' => 2122,
                    'county_id' => 714,
                    'name' => 'Köseçobanlı',
                ),
                2122 =>
                array(
                    'id' => 2123,
                    'county_id' => 715,
                    'name' => 'Akdeniz',
                ),
                2123 =>
                array(
                    'id' => 2124,
                    'county_id' => 715,
                    'name' => 'Atatürk',
                ),
                2124 =>
                array(
                    'id' => 2125,
                    'county_id' => 715,
                    'name' => 'Davultepe',
                ),
                2125 =>
                array(
                    'id' => 2126,
                    'county_id' => 715,
                    'name' => 'Fındıkpınarı',
                ),
                2126 =>
                array(
                    'id' => 2127,
                    'county_id' => 715,
                    'name' => 'Tece',
                ),
                2127 =>
                array(
                    'id' => 2128,
                    'county_id' => 716,
                    'name' => 'Mut',
                ),
                2128 =>
                array(
                    'id' => 2129,
                    'county_id' => 717,
                    'name' => 'Atakent',
                ),
                2129 =>
                array(
                    'id' => 2130,
                    'county_id' => 717,
                    'name' => 'Atayurt',
                ),
                2130 =>
                array(
                    'id' => 2131,
                    'county_id' => 717,
                    'name' => 'Gazi',
                ),
                2131 =>
                array(
                    'id' => 2132,
                    'county_id' => 717,
                    'name' => 'Pazarkaşı',
                ),
                2132 =>
                array(
                    'id' => 2133,
                    'county_id' => 717,
                    'name' => 'Silifke',
                ),
                2133 =>
                array(
                    'id' => 2134,
                    'county_id' => 717,
                    'name' => 'Taşucu',
                ),
                2134 =>
                array(
                    'id' => 2135,
                    'county_id' => 718,
                    'name' => '82Evler',
                ),
                2135 =>
                array(
                    'id' => 2136,
                    'county_id' => 718,
                    'name' => 'Akşemsettin',
                ),
                2136 =>
                array(
                    'id' => 2137,
                    'county_id' => 718,
                    'name' => 'Altaylılar',
                ),
                2137 =>
                array(
                    'id' => 2138,
                    'county_id' => 718,
                    'name' => 'Anıt',
                ),
                2138 =>
                array(
                    'id' => 2139,
                    'county_id' => 718,
                    'name' => 'Aşağı Köyler',
                ),
                2139 =>
                array(
                    'id' => 2140,
                    'county_id' => 718,
                    'name' => 'Bahçe',
                ),
                2140 =>
                array(
                    'id' => 2141,
                    'county_id' => 718,
                    'name' => 'Beydeğirmeni',
                ),
                2141 =>
                array(
                    'id' => 2142,
                    'county_id' => 718,
                    'name' => 'Caminur',
                ),
                2142 =>
                array(
                    'id' => 2143,
                    'county_id' => 718,
                    'name' => 'Çamlıyayla',
                ),
                2143 =>
                array(
                    'id' => 2144,
                    'county_id' => 718,
                    'name' => 'Kavaklı',
                ),
                2144 =>
                array(
                    'id' => 2145,
                    'county_id' => 718,
                    'name' => 'Kızılmurat',
                ),
                2145 =>
                array(
                    'id' => 2146,
                    'county_id' => 718,
                    'name' => 'Yenice',
                ),
                2146 =>
                array(
                    'id' => 2147,
                    'county_id' => 718,
                    'name' => 'Yolboyu',
                ),
                2147 =>
                array(
                    'id' => 2148,
                    'county_id' => 718,
                    'name' => 'Yukarı Köyler',
                ),
                2148 =>
                array(
                    'id' => 2149,
                    'county_id' => 719,
                    'name' => 'Akbelen',
                ),
                2149 =>
                array(
                    'id' => 2150,
                    'county_id' => 719,
                    'name' => 'Arslanköy',
                ),
                2150 =>
                array(
                    'id' => 2151,
                    'county_id' => 719,
                    'name' => 'Çavuşlu',
                ),
                2151 =>
                array(
                    'id' => 2152,
                    'county_id' => 719,
                    'name' => 'Demirtaş',
                ),
                2152 =>
                array(
                    'id' => 2153,
                    'county_id' => 719,
                    'name' => 'Halkkent',
                ),
                2153 =>
                array(
                    'id' => 2154,
                    'county_id' => 719,
                    'name' => 'Sağlık',
                ),
                2154 =>
                array(
                    'id' => 2155,
                    'county_id' => 719,
                    'name' => 'Selçuklar',
                ),
                2155 =>
                array(
                    'id' => 2156,
                    'county_id' => 720,
                    'name' => 'Afetevler',
                ),
                2156 =>
                array(
                    'id' => 2157,
                    'county_id' => 720,
                    'name' => 'Bahçelievler',
                ),
                2157 =>
                array(
                    'id' => 2158,
                    'county_id' => 720,
                    'name' => 'Barbaros',
                ),
                2158 =>
                array(
                    'id' => 2159,
                    'county_id' => 720,
                    'name' => 'Cumhuriyet',
                ),
                2159 =>
                array(
                    'id' => 2160,
                    'county_id' => 720,
                    'name' => 'Değirmençay',
                ),
                2160 =>
                array(
                    'id' => 2161,
                    'county_id' => 721,
                    'name' => 'Bodrum',
                ),
                2161 =>
                array(
                    'id' => 2162,
                    'county_id' => 722,
                    'name' => 'Dalaman',
                ),
                2162 =>
                array(
                    'id' => 2163,
                    'county_id' => 723,
                    'name' => 'Datça',
                ),
                2163 =>
                array(
                    'id' => 2164,
                    'county_id' => 724,
                    'name' => 'Fethiye',
                ),
                2164 =>
                array(
                    'id' => 2165,
                    'county_id' => 725,
                    'name' => 'Kavaklıdere',
                ),
                2165 =>
                array(
                    'id' => 2166,
                    'county_id' => 726,
                    'name' => 'Köyceğiz',
                ),
                2166 =>
                array(
                    'id' => 2167,
                    'county_id' => 727,
                    'name' => 'Marmaris',
                ),
                2167 =>
                array(
                    'id' => 2168,
                    'county_id' => 728,
                    'name' => 'Menteşe',
                ),
                2168 =>
                array(
                    'id' => 2169,
                    'county_id' => 729,
                    'name' => 'Milas',
                ),
                2169 =>
                array(
                    'id' => 2170,
                    'county_id' => 730,
                    'name' => 'Ortaca',
                ),
                2170 =>
                array(
                    'id' => 2171,
                    'county_id' => 731,
                    'name' => 'Seydikemer',
                ),
                2171 =>
                array(
                    'id' => 2172,
                    'county_id' => 732,
                    'name' => 'Ula',
                ),
                2172 =>
                array(
                    'id' => 2173,
                    'county_id' => 733,
                    'name' => 'Yatağan',
                ),
                2173 =>
                array(
                    'id' => 2174,
                    'county_id' => 734,
                    'name' => 'Bulanık',
                ),
                2174 =>
                array(
                    'id' => 2175,
                    'county_id' => 734,
                    'name' => 'Elmakaya',
                ),
                2175 =>
                array(
                    'id' => 2176,
                    'county_id' => 734,
                    'name' => 'Erentepe',
                ),
                2176 =>
                array(
                    'id' => 2177,
                    'county_id' => 734,
                    'name' => 'Merkezköyler',
                ),
                2177 =>
                array(
                    'id' => 2178,
                    'county_id' => 734,
                    'name' => 'Rüstemgedik',
                ),
                2178 =>
                array(
                    'id' => 2179,
                    'county_id' => 734,
                    'name' => 'Sarıpınar',
                ),
                2179 =>
                array(
                    'id' => 2180,
                    'county_id' => 734,
                    'name' => 'Uzgörür',
                ),
                2180 =>
                array(
                    'id' => 2181,
                    'county_id' => 734,
                    'name' => 'Yoncalı',
                ),
                2181 =>
                array(
                    'id' => 2182,
                    'county_id' => 735,
                    'name' => 'Düzkışla',
                ),
                2182 =>
                array(
                    'id' => 2183,
                    'county_id' => 735,
                    'name' => 'Hasköy',
                ),
                2183 =>
                array(
                    'id' => 2184,
                    'county_id' => 735,
                    'name' => 'Merkezköyler',
                ),
                2184 =>
                array(
                    'id' => 2185,
                    'county_id' => 736,
                    'name' => 'Altınova',
                ),
                2185 =>
                array(
                    'id' => 2186,
                    'county_id' => 736,
                    'name' => 'Korkut',
                ),
                2186 =>
                array(
                    'id' => 2187,
                    'county_id' => 736,
                    'name' => 'Merkezköyler',
                ),
                2187 =>
                array(
                    'id' => 2188,
                    'county_id' => 737,
                    'name' => 'Aktuzla',
                ),
                2188 =>
                array(
                    'id' => 2189,
                    'county_id' => 737,
                    'name' => 'Karahasan',
                ),
                2189 =>
                array(
                    'id' => 2190,
                    'county_id' => 737,
                    'name' => 'Konakkuran',
                ),
                2190 =>
                array(
                    'id' => 2191,
                    'county_id' => 737,
                    'name' => 'Malazgirt',
                ),
                2191 =>
                array(
                    'id' => 2192,
                    'county_id' => 737,
                    'name' => 'Merkezköyler',
                ),
                2192 =>
                array(
                    'id' => 2193,
                    'county_id' => 737,
                    'name' => 'Nurettin',
                ),
                2193 =>
                array(
                    'id' => 2194,
                    'county_id' => 738,
                    'name' => 'Karaağaçlı',
                ),
                2194 =>
                array(
                    'id' => 2195,
                    'county_id' => 738,
                    'name' => 'Kırköy',
                ),
                2195 =>
                array(
                    'id' => 2196,
                    'county_id' => 738,
                    'name' => 'Kızılağaç',
                ),
                2196 =>
                array(
                    'id' => 2197,
                    'county_id' => 738,
                    'name' => 'Konukbekler',
                ),
                2197 =>
                array(
                    'id' => 2198,
                    'county_id' => 738,
                    'name' => 'Merkez',
                ),
                2198 =>
                array(
                    'id' => 2199,
                    'county_id' => 738,
                    'name' => 'Merkezköyler',
                ),
                2199 =>
                array(
                    'id' => 2200,
                    'county_id' => 738,
                    'name' => 'Serinova',
                ),
                2200 =>
                array(
                    'id' => 2201,
                    'county_id' => 738,
                    'name' => 'Sungu',
                ),
                2201 =>
                array(
                    'id' => 2202,
                    'county_id' => 738,
                    'name' => 'Yaygın',
                ),
                2202 =>
                array(
                    'id' => 2203,
                    'county_id' => 738,
                    'name' => 'Yeşilova',
                ),
                2203 =>
                array(
                    'id' => 2204,
                    'county_id' => 739,
                    'name' => 'Çaylar',
                ),
                2204 =>
                array(
                    'id' => 2205,
                    'county_id' => 739,
                    'name' => 'Merkezköyler',
                ),
                2205 =>
                array(
                    'id' => 2206,
                    'county_id' => 739,
                    'name' => 'Varto',
                ),
                2206 =>
                array(
                    'id' => 2207,
                    'county_id' => 740,
                    'name' => 'Acıgöl',
                ),
                2207 =>
                array(
                    'id' => 2208,
                    'county_id' => 740,
                    'name' => 'Karapınar',
                ),
                2208 =>
                array(
                    'id' => 2209,
                    'county_id' => 740,
                    'name' => 'Merkezköyler',
                ),
                2209 =>
                array(
                    'id' => 2210,
                    'county_id' => 740,
                    'name' => 'Tatların',
                ),
                2210 =>
                array(
                    'id' => 2211,
                    'county_id' => 741,
                    'name' => 'Avanos',
                ),
                2211 =>
                array(
                    'id' => 2212,
                    'county_id' => 741,
                    'name' => 'Çalış',
                ),
                2212 =>
                array(
                    'id' => 2213,
                    'county_id' => 741,
                    'name' => 'Kalaba',
                ),
                2213 =>
                array(
                    'id' => 2214,
                    'county_id' => 741,
                    'name' => 'Merkezköyler',
                ),
                2214 =>
                array(
                    'id' => 2215,
                    'county_id' => 741,
                    'name' => 'Özkonak',
                ),
                2215 =>
                array(
                    'id' => 2216,
                    'county_id' => 742,
                    'name' => 'Derinkuyu',
                ),
                2216 =>
                array(
                    'id' => 2217,
                    'county_id' => 742,
                    'name' => 'Merkezköyler',
                ),
                2217 =>
                array(
                    'id' => 2218,
                    'county_id' => 742,
                    'name' => 'Yazıhüyük',
                ),
                2218 =>
                array(
                    'id' => 2219,
                    'county_id' => 743,
                    'name' => 'Gülşehir',
                ),
                2219 =>
                array(
                    'id' => 2220,
                    'county_id' => 743,
                    'name' => 'Merkezköyler',
                ),
                2220 =>
                array(
                    'id' => 2221,
                    'county_id' => 744,
                    'name' => 'Hacıbektaş',
                ),
                2221 =>
                array(
                    'id' => 2222,
                    'county_id' => 744,
                    'name' => 'Merkezköyler',
                ),
                2222 =>
                array(
                    'id' => 2223,
                    'county_id' => 745,
                    'name' => 'Kozaklı',
                ),
                2223 =>
                array(
                    'id' => 2224,
                    'county_id' => 745,
                    'name' => 'Merkezköyler',
                ),
                2224 =>
                array(
                    'id' => 2225,
                    'county_id' => 746,
                    'name' => 'Camicedit',
                ),
                2225 =>
                array(
                    'id' => 2226,
                    'county_id' => 746,
                    'name' => 'Çarşı',
                ),
                2226 =>
                array(
                    'id' => 2227,
                    'county_id' => 746,
                    'name' => 'Çat',
                ),
                2227 =>
                array(
                    'id' => 2228,
                    'county_id' => 746,
                    'name' => 'Göre',
                ),
                2228 =>
                array(
                    'id' => 2229,
                    'county_id' => 746,
                    'name' => 'Göreme',
                ),
                2229 =>
                array(
                    'id' => 2230,
                    'county_id' => 746,
                    'name' => 'Kavak',
                ),
                2230 =>
                array(
                    'id' => 2231,
                    'county_id' => 746,
                    'name' => 'Kaymaklı',
                ),
                2231 =>
                array(
                    'id' => 2232,
                    'county_id' => 746,
                    'name' => 'Merkezköyler',
                ),
                2232 =>
                array(
                    'id' => 2233,
                    'county_id' => 746,
                    'name' => 'Nar',
                ),
                2233 =>
                array(
                    'id' => 2234,
                    'county_id' => 746,
                    'name' => 'Sulusaray',
                ),
                2234 =>
                array(
                    'id' => 2235,
                    'county_id' => 746,
                    'name' => 'Uçhisar',
                ),
                2235 =>
                array(
                    'id' => 2236,
                    'county_id' => 747,
                    'name' => 'Merkezköyler',
                ),
                2236 =>
                array(
                    'id' => 2237,
                    'county_id' => 747,
                    'name' => 'Ortahisar',
                ),
                2237 =>
                array(
                    'id' => 2238,
                    'county_id' => 747,
                    'name' => 'Ürgüp',
                ),
                2238 =>
                array(
                    'id' => 2239,
                    'county_id' => 748,
                    'name' => 'Altunhisar',
                ),
                2239 =>
                array(
                    'id' => 2240,
                    'county_id' => 748,
                    'name' => 'Karakapı',
                ),
                2240 =>
                array(
                    'id' => 2241,
                    'county_id' => 748,
                    'name' => 'Keçikalesi',
                ),
                2241 =>
                array(
                    'id' => 2242,
                    'county_id' => 748,
                    'name' => 'Merkezköyler',
                ),
                2242 =>
                array(
                    'id' => 2243,
                    'county_id' => 749,
                    'name' => 'Bahçeli',
                ),
                2243 =>
                array(
                    'id' => 2244,
                    'county_id' => 749,
                    'name' => 'Bor',
                ),
                2244 =>
                array(
                    'id' => 2245,
                    'county_id' => 749,
                    'name' => 'Çukurkuyu',
                ),
                2245 =>
                array(
                    'id' => 2246,
                    'county_id' => 749,
                    'name' => 'Kemerhisar',
                ),
                2246 =>
                array(
                    'id' => 2247,
                    'county_id' => 749,
                    'name' => 'Merkezköyler',
                ),
                2247 =>
                array(
                    'id' => 2248,
                    'county_id' => 750,
                    'name' => 'Çamardı',
                ),
                2248 =>
                array(
                    'id' => 2249,
                    'county_id' => 750,
                    'name' => 'Merkezköyler',
                ),
                2249 =>
                array(
                    'id' => 2250,
                    'county_id' => 751,
                    'name' => 'Azatlı',
                ),
                2250 =>
                array(
                    'id' => 2251,
                    'county_id' => 751,
                    'name' => 'Bozköy',
                ),
                2251 =>
                array(
                    'id' => 2252,
                    'county_id' => 751,
                    'name' => 'Divarlı',
                ),
                2252 =>
                array(
                    'id' => 2253,
                    'county_id' => 751,
                    'name' => 'Merkezköyler',
                ),
                2253 =>
                array(
                    'id' => 2254,
                    'county_id' => 751,
                    'name' => 'Özyurt',
                ),
                2254 =>
                array(
                    'id' => 2255,
                    'county_id' => 752,
                    'name' => 'Afetevleri',
                ),
                2255 =>
                array(
                    'id' => 2256,
                    'county_id' => 752,
                    'name' => 'Aktaş',
                ),
                2256 =>
                array(
                    'id' => 2257,
                    'county_id' => 752,
                    'name' => 'Alay',
                ),
                2257 =>
                array(
                    'id' => 2258,
                    'county_id' => 752,
                    'name' => 'Bağlama',
                ),
                2258 =>
                array(
                    'id' => 2259,
                    'county_id' => 752,
                    'name' => 'Değirmenli',
                ),
                2259 =>
                array(
                    'id' => 2260,
                    'county_id' => 752,
                    'name' => 'Dündarlı',
                ),
                2260 =>
                array(
                    'id' => 2261,
                    'county_id' => 752,
                    'name' => 'Edikli',
                ),
                2261 =>
                array(
                    'id' => 2262,
                    'county_id' => 752,
                    'name' => 'Gümüşler',
                ),
                2262 =>
                array(
                    'id' => 2263,
                    'county_id' => 752,
                    'name' => 'Hacıabdullah',
                ),
                2263 =>
                array(
                    'id' => 2264,
                    'county_id' => 752,
                    'name' => 'Karaatlı',
                ),
                2264 =>
                array(
                    'id' => 2265,
                    'county_id' => 752,
                    'name' => 'Kiledere',
                ),
                2265 =>
                array(
                    'id' => 2266,
                    'county_id' => 752,
                    'name' => 'Konaklı',
                ),
                2266 =>
                array(
                    'id' => 2267,
                    'county_id' => 752,
                    'name' => 'Merkezköyler',
                ),
                2267 =>
                array(
                    'id' => 2268,
                    'county_id' => 752,
                    'name' => 'Orhanlı',
                ),
                2268 =>
                array(
                    'id' => 2269,
                    'county_id' => 752,
                    'name' => 'Sazlıca',
                ),
                2269 =>
                array(
                    'id' => 2270,
                    'county_id' => 752,
                    'name' => 'Sungurbey',
                ),
                2270 =>
                array(
                    'id' => 2271,
                    'county_id' => 752,
                    'name' => 'Yeşilgölcük',
                ),
                2271 =>
                array(
                    'id' => 2272,
                    'county_id' => 752,
                    'name' => 'Yıldıztepe',
                ),
                2272 =>
                array(
                    'id' => 2273,
                    'county_id' => 753,
                    'name' => 'Merkezköyler',
                ),
                2273 =>
                array(
                    'id' => 2274,
                    'county_id' => 753,
                    'name' => 'Ulukışla',
                ),
                2274 =>
                array(
                    'id' => 2275,
                    'county_id' => 754,
                    'name' => 'Akkuş',
                ),
                2275 =>
                array(
                    'id' => 2276,
                    'county_id' => 755,
                    'name' => 'Bahcelievler',
                ),
                2276 =>
                array(
                    'id' => 2277,
                    'county_id' => 755,
                    'name' => 'Düz Mahalle',
                ),
                2277 =>
                array(
                    'id' => 2278,
                    'county_id' => 755,
                    'name' => 'Saraycık',
                ),
                2278 =>
                array(
                    'id' => 2279,
                    'county_id' => 756,
                    'name' => 'Aybastı',
                ),
                2279 =>
                array(
                    'id' => 2280,
                    'county_id' => 757,
                    'name' => 'Çamaş',
                ),
                2280 =>
                array(
                    'id' => 2281,
                    'county_id' => 758,
                    'name' => 'Çatalpınar',
                ),
                2281 =>
                array(
                    'id' => 2282,
                    'county_id' => 759,
                    'name' => 'Çaybaşı',
                ),
                2282 =>
                array(
                    'id' => 2283,
                    'county_id' => 760,
                    'name' => 'Fatsa',
                ),
                2283 =>
                array(
                    'id' => 2284,
                    'county_id' => 761,
                    'name' => 'Gölköy',
                ),
                2284 =>
                array(
                    'id' => 2285,
                    'county_id' => 762,
                    'name' => 'Gülyalı',
                ),
                2285 =>
                array(
                    'id' => 2286,
                    'county_id' => 763,
                    'name' => 'Gürgentepe',
                ),
                2286 =>
                array(
                    'id' => 2287,
                    'county_id' => 764,
                    'name' => 'İkizce',
                ),
                2287 =>
                array(
                    'id' => 2288,
                    'county_id' => 765,
                    'name' => 'Karadüz',
                ),
                2288 =>
                array(
                    'id' => 2289,
                    'county_id' => 766,
                    'name' => 'Kabataş',
                ),
                2289 =>
                array(
                    'id' => 2290,
                    'county_id' => 767,
                    'name' => 'Korgan',
                ),
                2290 =>
                array(
                    'id' => 2291,
                    'county_id' => 768,
                    'name' => 'Kumru',
                ),
                2291 =>
                array(
                    'id' => 2292,
                    'county_id' => 769,
                    'name' => 'Mesudiye',
                ),
                2292 =>
                array(
                    'id' => 2293,
                    'county_id' => 770,
                    'name' => 'Perşembe',
                ),
                2293 =>
                array(
                    'id' => 2294,
                    'county_id' => 771,
                    'name' => 'Ulubey',
                ),
                2294 =>
                array(
                    'id' => 2295,
                    'county_id' => 772,
                    'name' => 'Ünye',
                ),
                2295 =>
                array(
                    'id' => 2296,
                    'county_id' => 773,
                    'name' => 'Bahçe',
                ),
                2296 =>
                array(
                    'id' => 2297,
                    'county_id' => 773,
                    'name' => 'Merkezköyler',
                ),
                2297 =>
                array(
                    'id' => 2298,
                    'county_id' => 774,
                    'name' => 'Atalan',
                ),
                2298 =>
                array(
                    'id' => 2299,
                    'county_id' => 774,
                    'name' => 'Böcekli',
                ),
                2299 =>
                array(
                    'id' => 2300,
                    'county_id' => 774,
                    'name' => 'Düziçi',
                ),
                2300 =>
                array(
                    'id' => 2301,
                    'county_id' => 774,
                    'name' => 'Ellek',
                ),
                2301 =>
                array(
                    'id' => 2302,
                    'county_id' => 774,
                    'name' => 'Merkezköyler',
                ),
                2302 =>
                array(
                    'id' => 2303,
                    'county_id' => 774,
                    'name' => 'Yarbaşı',
                ),
                2303 =>
                array(
                    'id' => 2304,
                    'county_id' => 775,
                    'name' => 'Hasanbeyli',
                ),
                2304 =>
                array(
                    'id' => 2305,
                    'county_id' => 775,
                    'name' => 'Merkezköyler',
                ),
                2305 =>
                array(
                    'id' => 2306,
                    'county_id' => 776,
                    'name' => 'Cemalpaşa',
                ),
                2306 =>
                array(
                    'id' => 2307,
                    'county_id' => 776,
                    'name' => 'Kadirli',
                ),
                2307 =>
                array(
                    'id' => 2308,
                    'county_id' => 776,
                    'name' => 'Merkezköyler',
                ),
                2308 =>
                array(
                    'id' => 2309,
                    'county_id' => 777,
                    'name' => 'Atatürk',
                ),
                2309 =>
                array(
                    'id' => 2310,
                    'county_id' => 777,
                    'name' => 'Cevdetiye',
                ),
                2310 =>
                array(
                    'id' => 2311,
                    'county_id' => 777,
                    'name' => 'Merkezköyler',
                ),
                2311 =>
                array(
                    'id' => 2312,
                    'county_id' => 778,
                    'name' => 'Mehmetli',
                ),
                2312 =>
                array(
                    'id' => 2313,
                    'county_id' => 778,
                    'name' => 'Merkezköyler',
                ),
                2313 =>
                array(
                    'id' => 2314,
                    'county_id' => 778,
                    'name' => 'Sumbas',
                ),
                2314 =>
                array(
                    'id' => 2315,
                    'county_id' => 779,
                    'name' => 'Merkezköyler',
                ),
                2315 =>
                array(
                    'id' => 2316,
                    'county_id' => 779,
                    'name' => 'Toprakkale',
                ),
                2316 =>
                array(
                    'id' => 2317,
                    'county_id' => 779,
                    'name' => 'Tüysüz',
                ),
                2317 =>
                array(
                    'id' => 2318,
                    'county_id' => 780,
                    'name' => 'Ardeşen',
                ),
                2318 =>
                array(
                    'id' => 2319,
                    'county_id' => 780,
                    'name' => 'Merkezköyler',
                ),
                2319 =>
                array(
                    'id' => 2320,
                    'county_id' => 780,
                    'name' => 'Tunca',
                ),
                2320 =>
                array(
                    'id' => 2321,
                    'county_id' => 781,
                    'name' => 'Çamlıhemşin',
                ),
                2321 =>
                array(
                    'id' => 2322,
                    'county_id' => 781,
                    'name' => 'Merkezköyler',
                ),
                2322 =>
                array(
                    'id' => 2323,
                    'county_id' => 782,
                    'name' => 'Büyükköy',
                ),
                2323 =>
                array(
                    'id' => 2324,
                    'county_id' => 782,
                    'name' => 'Çayeli',
                ),
                2324 =>
                array(
                    'id' => 2325,
                    'county_id' => 782,
                    'name' => 'Madenli',
                ),
                2325 =>
                array(
                    'id' => 2326,
                    'county_id' => 782,
                    'name' => 'Merkezköyler',
                ),
                2326 =>
                array(
                    'id' => 2327,
                    'county_id' => 783,
                    'name' => 'Derepazarı',
                ),
                2327 =>
                array(
                    'id' => 2328,
                    'county_id' => 783,
                    'name' => 'Merkezköyler',
                ),
                2328 =>
                array(
                    'id' => 2329,
                    'county_id' => 784,
                    'name' => 'Fındıklı',
                ),
                2329 =>
                array(
                    'id' => 2330,
                    'county_id' => 784,
                    'name' => 'Merkezköyler',
                ),
                2330 =>
                array(
                    'id' => 2331,
                    'county_id' => 785,
                    'name' => 'Güneysu',
                ),
                2331 =>
                array(
                    'id' => 2332,
                    'county_id' => 785,
                    'name' => 'Merkezköyler',
                ),
                2332 =>
                array(
                    'id' => 2333,
                    'county_id' => 786,
                    'name' => 'Hemşin',
                ),
                2333 =>
                array(
                    'id' => 2334,
                    'county_id' => 786,
                    'name' => 'Merkezköyler',
                ),
                2334 =>
                array(
                    'id' => 2335,
                    'county_id' => 787,
                    'name' => 'İkizdere',
                ),
                2335 =>
                array(
                    'id' => 2336,
                    'county_id' => 787,
                    'name' => 'Merkezköyler',
                ),
                2336 =>
                array(
                    'id' => 2337,
                    'county_id' => 788,
                    'name' => 'İyidere',
                ),
                2337 =>
                array(
                    'id' => 2338,
                    'county_id' => 788,
                    'name' => 'Merkezköyler',
                ),
                2338 =>
                array(
                    'id' => 2339,
                    'county_id' => 789,
                    'name' => 'Kalkandere',
                ),
                2339 =>
                array(
                    'id' => 2340,
                    'county_id' => 789,
                    'name' => 'Merkezköyler',
                ),
                2340 =>
                array(
                    'id' => 2341,
                    'county_id' => 790,
                    'name' => 'Gündoğdu',
                ),
                2341 =>
                array(
                    'id' => 2342,
                    'county_id' => 790,
                    'name' => 'Kendirli',
                ),
                2342 =>
                array(
                    'id' => 2343,
                    'county_id' => 790,
                    'name' => 'Merkezköyler',
                ),
                2343 =>
                array(
                    'id' => 2344,
                    'county_id' => 790,
                    'name' => 'Muradiye',
                ),
                2344 =>
                array(
                    'id' => 2345,
                    'county_id' => 790,
                    'name' => 'Rize',
                ),
                2345 =>
                array(
                    'id' => 2346,
                    'county_id' => 790,
                    'name' => 'Salarha',
                ),
                2346 =>
                array(
                    'id' => 2347,
                    'county_id' => 791,
                    'name' => 'Merkezköyler',
                ),
                2347 =>
                array(
                    'id' => 2348,
                    'county_id' => 791,
                    'name' => 'Pazar',
                ),
                2348 =>
                array(
                    'id' => 2349,
                    'county_id' => 792,
                    'name' => 'Adapazarı',
                ),
                2349 =>
                array(
                    'id' => 2350,
                    'county_id' => 792,
                    'name' => 'Karaman',
                ),
                2350 =>
                array(
                    'id' => 2351,
                    'county_id' => 793,
                    'name' => 'Akyazı',
                ),
                2351 =>
                array(
                    'id' => 2352,
                    'county_id' => 794,
                    'name' => 'Arifiye',
                ),
                2352 =>
                array(
                    'id' => 2353,
                    'county_id' => 795,
                    'name' => 'Erenler',
                ),
                2353 =>
                array(
                    'id' => 2354,
                    'county_id' => 796,
                    'name' => 'Ferizli',
                ),
                2354 =>
                array(
                    'id' => 2355,
                    'county_id' => 797,
                    'name' => 'Geyve',
                ),
                2355 =>
                array(
                    'id' => 2356,
                    'county_id' => 798,
                    'name' => 'Hendek',
                ),
                2356 =>
                array(
                    'id' => 2357,
                    'county_id' => 799,
                    'name' => 'Karapürçek',
                ),
                2357 =>
                array(
                    'id' => 2358,
                    'county_id' => 800,
                    'name' => 'Karasu',
                ),
                2358 =>
                array(
                    'id' => 2359,
                    'county_id' => 801,
                    'name' => 'Kaynarca',
                ),
                2359 =>
                array(
                    'id' => 2360,
                    'county_id' => 802,
                    'name' => 'Kocaali',
                ),
                2360 =>
                array(
                    'id' => 2361,
                    'county_id' => 803,
                    'name' => 'Pamukova',
                ),
                2361 =>
                array(
                    'id' => 2362,
                    'county_id' => 804,
                    'name' => 'Sapanca',
                ),
                2362 =>
                array(
                    'id' => 2363,
                    'county_id' => 805,
                    'name' => 'Serdivan',
                ),
                2363 =>
                array(
                    'id' => 2364,
                    'county_id' => 805,
                    'name' => 'Yazlık',
                ),
                2364 =>
                array(
                    'id' => 2365,
                    'county_id' => 806,
                    'name' => 'Söğütlü',
                ),
                2365 =>
                array(
                    'id' => 2366,
                    'county_id' => 807,
                    'name' => 'Taraklı',
                ),
                2366 =>
                array(
                    'id' => 2367,
                    'county_id' => 808,
                    'name' => '19 Mayıs Ballıca',
                ),
                2367 =>
                array(
                    'id' => 2368,
                    'county_id' => 809,
                    'name' => 'Alaçam',
                ),
                2368 =>
                array(
                    'id' => 2369,
                    'county_id' => 810,
                    'name' => 'Asarcık',
                ),
                2369 =>
                array(
                    'id' => 2370,
                    'county_id' => 811,
                    'name' => 'Atakum',
                ),
                2370 =>
                array(
                    'id' => 2371,
                    'county_id' => 811,
                    'name' => 'Kurupelit',
                ),
                2371 =>
                array(
                    'id' => 2372,
                    'county_id' => 812,
                    'name' => 'Ayvacık',
                ),
                2372 =>
                array(
                    'id' => 2373,
                    'county_id' => 813,
                    'name' => 'Bafra',
                ),
                2373 =>
                array(
                    'id' => 2374,
                    'county_id' => 814,
                    'name' => 'Canik',
                ),
                2374 =>
                array(
                    'id' => 2375,
                    'county_id' => 815,
                    'name' => 'Çarşamba',
                ),
                2375 =>
                array(
                    'id' => 2376,
                    'county_id' => 816,
                    'name' => 'Havza',
                ),
                2376 =>
                array(
                    'id' => 2377,
                    'county_id' => 817,
                    'name' => 'Bahçelievler',
                ),
                2377 =>
                array(
                    'id' => 2378,
                    'county_id' => 817,
                    'name' => 'İstasyon',
                ),
                2378 =>
                array(
                    'id' => 2379,
                    'county_id' => 817,
                    'name' => 'Kadıköy',
                ),
                2379 =>
                array(
                    'id' => 2380,
                    'county_id' => 817,
                    'name' => 'Kale',
                ),
                2380 =>
                array(
                    'id' => 2381,
                    'county_id' => 817,
                    'name' => 'Liman',
                ),
                2381 =>
                array(
                    'id' => 2382,
                    'county_id' => 817,
                    'name' => 'Rasathane',
                ),
                2382 =>
                array(
                    'id' => 2383,
                    'county_id' => 817,
                    'name' => 'Unkapanı',
                ),
                2383 =>
                array(
                    'id' => 2384,
                    'county_id' => 817,
                    'name' => 'Yeşilkent',
                ),
                2384 =>
                array(
                    'id' => 2385,
                    'county_id' => 818,
                    'name' => 'Kavak',
                ),
                2385 =>
                array(
                    'id' => 2386,
                    'county_id' => 819,
                    'name' => 'Ladik',
                ),
                2386 =>
                array(
                    'id' => 2387,
                    'county_id' => 820,
                    'name' => 'Salıpazarı',
                ),
                2387 =>
                array(
                    'id' => 2388,
                    'county_id' => 821,
                    'name' => 'Aşağıçinik',
                ),
                2388 =>
                array(
                    'id' => 2389,
                    'county_id' => 821,
                    'name' => 'Büyüklü',
                ),
                2389 =>
                array(
                    'id' => 2390,
                    'county_id' => 821,
                    'name' => 'Kutlukent',
                ),
                2390 =>
                array(
                    'id' => 2391,
                    'county_id' => 821,
                    'name' => 'Tekkeköy',
                ),
                2391 =>
                array(
                    'id' => 2392,
                    'county_id' => 822,
                    'name' => 'Terme',
                ),
                2392 =>
                array(
                    'id' => 2393,
                    'county_id' => 823,
                    'name' => 'Merkezköyler',
                ),
                2393 =>
                array(
                    'id' => 2394,
                    'county_id' => 823,
                    'name' => 'Vezirköprü',
                ),
                2394 =>
                array(
                    'id' => 2395,
                    'county_id' => 824,
                    'name' => 'Yakakent',
                ),
                2395 =>
                array(
                    'id' => 2396,
                    'county_id' => 825,
                    'name' => 'Atabağı',
                ),
                2396 =>
                array(
                    'id' => 2397,
                    'county_id' => 825,
                    'name' => 'Baykan',
                ),
                2397 =>
                array(
                    'id' => 2398,
                    'county_id' => 825,
                    'name' => 'Dilektepe',
                ),
                2398 =>
                array(
                    'id' => 2399,
                    'county_id' => 825,
                    'name' => 'Merkezköyler',
                ),
                2399 =>
                array(
                    'id' => 2400,
                    'county_id' => 825,
                    'name' => 'Veyselkarani',
                ),
                2400 =>
                array(
                    'id' => 2401,
                    'county_id' => 826,
                    'name' => 'Bağgöze',
                ),
                2401 =>
                array(
                    'id' => 2402,
                    'county_id' => 826,
                    'name' => 'Eruh',
                ),
                2402 =>
                array(
                    'id' => 2403,
                    'county_id' => 826,
                    'name' => 'Merkezköyler',
                ),
                2403 =>
                array(
                    'id' => 2404,
                    'county_id' => 827,
                    'name' => 'Kayabağlar',
                ),
                2404 =>
                array(
                    'id' => 2405,
                    'county_id' => 827,
                    'name' => 'Kurtalan',
                ),
                2405 =>
                array(
                    'id' => 2406,
                    'county_id' => 827,
                    'name' => 'Merkezköyler',
                ),
                2406 =>
                array(
                    'id' => 2407,
                    'county_id' => 828,
                    'name' => 'Gökçebağ',
                ),
                2407 =>
                array(
                    'id' => 2408,
                    'county_id' => 828,
                    'name' => 'Merkezköyler',
                ),
                2408 =>
                array(
                    'id' => 2409,
                    'county_id' => 828,
                    'name' => 'Siirt',
                ),
                2409 =>
                array(
                    'id' => 2410,
                    'county_id' => 829,
                    'name' => 'Beğendik',
                ),
                2410 =>
                array(
                    'id' => 2411,
                    'county_id' => 829,
                    'name' => 'Merkezköyler',
                ),
                2411 =>
                array(
                    'id' => 2412,
                    'county_id' => 829,
                    'name' => 'Pervari',
                ),
                2412 =>
                array(
                    'id' => 2413,
                    'county_id' => 830,
                    'name' => 'Cevizlik',
                ),
                2413 =>
                array(
                    'id' => 2414,
                    'county_id' => 830,
                    'name' => 'Merkezköyler',
                ),
                2414 =>
                array(
                    'id' => 2415,
                    'county_id' => 830,
                    'name' => 'Özpınar',
                ),
                2415 =>
                array(
                    'id' => 2416,
                    'county_id' => 830,
                    'name' => 'Şirvan',
                ),
                2416 =>
                array(
                    'id' => 2417,
                    'county_id' => 831,
                    'name' => 'Aydınlar',
                ),
                2417 =>
                array(
                    'id' => 2418,
                    'county_id' => 831,
                    'name' => 'Merkezköyler',
                ),
                2418 =>
                array(
                    'id' => 2419,
                    'county_id' => 832,
                    'name' => 'Ayancık',
                ),
                2419 =>
                array(
                    'id' => 2420,
                    'county_id' => 832,
                    'name' => 'Merkezköyler',
                ),
                2420 =>
                array(
                    'id' => 2421,
                    'county_id' => 833,
                    'name' => 'Boyabat',
                ),
                2421 =>
                array(
                    'id' => 2422,
                    'county_id' => 833,
                    'name' => 'Merkezköyler',
                ),
                2422 =>
                array(
                    'id' => 2423,
                    'county_id' => 834,
                    'name' => 'Dikmen',
                ),
                2423 =>
                array(
                    'id' => 2424,
                    'county_id' => 834,
                    'name' => 'Merkezköyler',
                ),
                2424 =>
                array(
                    'id' => 2425,
                    'county_id' => 835,
                    'name' => 'Durağan',
                ),
                2425 =>
                array(
                    'id' => 2426,
                    'county_id' => 835,
                    'name' => 'Merkezköyler',
                ),
                2426 =>
                array(
                    'id' => 2427,
                    'county_id' => 836,
                    'name' => 'Erfelek',
                ),
                2427 =>
                array(
                    'id' => 2428,
                    'county_id' => 836,
                    'name' => 'Merkezköyler',
                ),
                2428 =>
                array(
                    'id' => 2429,
                    'county_id' => 837,
                    'name' => 'Gerze',
                ),
                2429 =>
                array(
                    'id' => 2430,
                    'county_id' => 837,
                    'name' => 'Merkezköyler',
                ),
                2430 =>
                array(
                    'id' => 2431,
                    'county_id' => 838,
                    'name' => 'Merkezköyler',
                ),
                2431 =>
                array(
                    'id' => 2432,
                    'county_id' => 838,
                    'name' => 'Sinop',
                ),
                2432 =>
                array(
                    'id' => 2433,
                    'county_id' => 839,
                    'name' => 'Merkezköyler',
                ),
                2433 =>
                array(
                    'id' => 2434,
                    'county_id' => 839,
                    'name' => 'Saraydüzü',
                ),
                2434 =>
                array(
                    'id' => 2435,
                    'county_id' => 840,
                    'name' => 'Merkezköyler',
                ),
                2435 =>
                array(
                    'id' => 2436,
                    'county_id' => 840,
                    'name' => 'Türkeli',
                ),
                2436 =>
                array(
                    'id' => 2437,
                    'county_id' => 841,
                    'name' => 'Akıncılar',
                ),
                2437 =>
                array(
                    'id' => 2438,
                    'county_id' => 841,
                    'name' => 'Merkezköyler',
                ),
                2438 =>
                array(
                    'id' => 2439,
                    'county_id' => 842,
                    'name' => 'Altınyayla',
                ),
                2439 =>
                array(
                    'id' => 2440,
                    'county_id' => 842,
                    'name' => 'Deliilyas',
                ),
                2440 =>
                array(
                    'id' => 2441,
                    'county_id' => 842,
                    'name' => 'Merkezköyler',
                ),
                2441 =>
                array(
                    'id' => 2442,
                    'county_id' => 843,
                    'name' => 'Divriği',
                ),
                2442 =>
                array(
                    'id' => 2443,
                    'county_id' => 843,
                    'name' => 'Merkezköyler',
                ),
                2443 =>
                array(
                    'id' => 2444,
                    'county_id' => 844,
                    'name' => 'Doğanşar',
                ),
                2444 =>
                array(
                    'id' => 2445,
                    'county_id' => 844,
                    'name' => 'Merkezköyler',
                ),
                2445 =>
                array(
                    'id' => 2446,
                    'county_id' => 845,
                    'name' => 'Çepni',
                ),
                2446 =>
                array(
                    'id' => 2447,
                    'county_id' => 845,
                    'name' => 'Eğerci',
                ),
                2447 =>
                array(
                    'id' => 2448,
                    'county_id' => 845,
                    'name' => 'Gemerek',
                ),
                2448 =>
                array(
                    'id' => 2449,
                    'county_id' => 845,
                    'name' => 'İnkışla',
                ),
                2449 =>
                array(
                    'id' => 2450,
                    'county_id' => 845,
                    'name' => 'Merkezköyler',
                ),
                2450 =>
                array(
                    'id' => 2451,
                    'county_id' => 845,
                    'name' => 'Sızır',
                ),
                2451 =>
                array(
                    'id' => 2452,
                    'county_id' => 845,
                    'name' => 'Yeniçubuk',
                ),
                2452 =>
                array(
                    'id' => 2453,
                    'county_id' => 846,
                    'name' => 'Gölova',
                ),
                2453 =>
                array(
                    'id' => 2454,
                    'county_id' => 846,
                    'name' => 'Merkezköyler',
                ),
                2454 =>
                array(
                    'id' => 2455,
                    'county_id' => 847,
                    'name' => 'Gürün',
                ),
                2455 =>
                array(
                    'id' => 2456,
                    'county_id' => 847,
                    'name' => 'Merkezköyler',
                ),
                2456 =>
                array(
                    'id' => 2457,
                    'county_id' => 848,
                    'name' => 'Hafik',
                ),
                2457 =>
                array(
                    'id' => 2458,
                    'county_id' => 848,
                    'name' => 'Merkezköyler',
                ),
                2458 =>
                array(
                    'id' => 2459,
                    'county_id' => 849,
                    'name' => 'İmranlı',
                ),
                2459 =>
                array(
                    'id' => 2460,
                    'county_id' => 849,
                    'name' => 'Merkezköyler',
                ),
                2460 =>
                array(
                    'id' => 2461,
                    'county_id' => 850,
                    'name' => 'Kangal',
                ),
                2461 =>
                array(
                    'id' => 2462,
                    'county_id' => 850,
                    'name' => 'Merkezköyler',
                ),
                2462 =>
                array(
                    'id' => 2463,
                    'county_id' => 851,
                    'name' => 'Koyulhisar',
                ),
                2463 =>
                array(
                    'id' => 2464,
                    'county_id' => 851,
                    'name' => 'Merkezköyler',
                ),
                2464 =>
                array(
                    'id' => 2465,
                    'county_id' => 852,
                    'name' => 'Alibaba',
                ),
                2465 =>
                array(
                    'id' => 2466,
                    'county_id' => 852,
                    'name' => 'Aydoğan',
                ),
                2466 =>
                array(
                    'id' => 2467,
                    'county_id' => 852,
                    'name' => 'Çarşı',
                ),
                2467 =>
                array(
                    'id' => 2468,
                    'county_id' => 852,
                    'name' => 'Kümbet',
                ),
                2468 =>
                array(
                    'id' => 2469,
                    'county_id' => 852,
                    'name' => 'Merkezköyler',
                ),
                2469 =>
                array(
                    'id' => 2470,
                    'county_id' => 852,
                    'name' => 'Yenişehir',
                ),
                2470 =>
                array(
                    'id' => 2471,
                    'county_id' => 852,
                    'name' => 'Yıldız',
                ),
                2471 =>
                array(
                    'id' => 2472,
                    'county_id' => 853,
                    'name' => 'Merkezköyler',
                ),
                2472 =>
                array(
                    'id' => 2473,
                    'county_id' => 853,
                    'name' => 'Suşehri',
                ),
                2473 =>
                array(
                    'id' => 2474,
                    'county_id' => 854,
                    'name' => 'Cemel',
                ),
                2474 =>
                array(
                    'id' => 2475,
                    'county_id' => 854,
                    'name' => 'Gürçayır',
                ),
                2475 =>
                array(
                    'id' => 2476,
                    'county_id' => 854,
                    'name' => 'Merkezköyler',
                ),
                2476 =>
                array(
                    'id' => 2477,
                    'county_id' => 854,
                    'name' => 'Şarkışla',
                ),
                2477 =>
                array(
                    'id' => 2478,
                    'county_id' => 855,
                    'name' => 'Merkezköyler',
                ),
                2478 =>
                array(
                    'id' => 2479,
                    'county_id' => 855,
                    'name' => 'Ulaş',
                ),
                2479 =>
                array(
                    'id' => 2480,
                    'county_id' => 856,
                    'name' => 'Güneykaya',
                ),
                2480 =>
                array(
                    'id' => 2481,
                    'county_id' => 856,
                    'name' => 'Merkezköyler',
                ),
                2481 =>
                array(
                    'id' => 2482,
                    'county_id' => 856,
                    'name' => 'Yıldızeli',
                ),
                2482 =>
                array(
                    'id' => 2483,
                    'county_id' => 857,
                    'name' => 'Merkezköyler',
                ),
                2483 =>
                array(
                    'id' => 2484,
                    'county_id' => 857,
                    'name' => 'Zara',
                ),
                2484 =>
                array(
                    'id' => 2485,
                    'county_id' => 858,
                    'name' => 'Akçakale',
                ),
                2485 =>
                array(
                    'id' => 2486,
                    'county_id' => 859,
                    'name' => 'Birecik',
                ),
                2486 =>
                array(
                    'id' => 2487,
                    'county_id' => 860,
                    'name' => 'Bozova',
                ),
                2487 =>
                array(
                    'id' => 2488,
                    'county_id' => 860,
                    'name' => 'Yaylak',
                ),
                2488 =>
                array(
                    'id' => 2489,
                    'county_id' => 861,
                    'name' => 'Ceylanpınar',
                ),
                2489 =>
                array(
                    'id' => 2490,
                    'county_id' => 862,
                    'name' => 'Çarşı',
                ),
                2490 =>
                array(
                    'id' => 2491,
                    'county_id' => 862,
                    'name' => 'Eyyübiye',
                ),
                2491 =>
                array(
                    'id' => 2492,
                    'county_id' => 863,
                    'name' => 'Halfeti',
                ),
                2492 =>
                array(
                    'id' => 2493,
                    'county_id' => 864,
                    'name' => 'Bağlarbaşı',
                ),
                2493 =>
                array(
                    'id' => 2494,
                    'county_id' => 864,
                    'name' => 'Bahçelievler',
                ),
                2494 =>
                array(
                    'id' => 2495,
                    'county_id' => 864,
                    'name' => 'Şairnabi',
                ),
                2495 =>
                array(
                    'id' => 2496,
                    'county_id' => 864,
                    'name' => 'Yenişehir',
                ),
                2496 =>
                array(
                    'id' => 2497,
                    'county_id' => 865,
                    'name' => 'Harran',
                ),
                2497 =>
                array(
                    'id' => 2498,
                    'county_id' => 866,
                    'name' => 'Hilvan',
                ),
                2498 =>
                array(
                    'id' => 2499,
                    'county_id' => 867,
                    'name' => 'Karaköprü',
                ),
                2499 =>
                array(
                    'id' => 2500,
                    'county_id' => 868,
                    'name' => 'Siverek',
                ),
                2500 =>
                array(
                    'id' => 2501,
                    'county_id' => 869,
                    'name' => 'Suruç',
                ),
                2501 =>
                array(
                    'id' => 2502,
                    'county_id' => 870,
                    'name' => 'Viranşehir',
                ),
                2502 =>
                array(
                    'id' => 2503,
                    'county_id' => 871,
                    'name' => 'Beytüşşebap',
                ),
                2503 =>
                array(
                    'id' => 2504,
                    'county_id' => 871,
                    'name' => 'Merkezköyler',
                ),
                2504 =>
                array(
                    'id' => 2505,
                    'county_id' => 872,
                    'name' => 'Cizre',
                ),
                2505 =>
                array(
                    'id' => 2506,
                    'county_id' => 872,
                    'name' => 'Merkezköyler',
                ),
                2506 =>
                array(
                    'id' => 2507,
                    'county_id' => 873,
                    'name' => 'Fındık',
                ),
                2507 =>
                array(
                    'id' => 2508,
                    'county_id' => 873,
                    'name' => 'Güçlükonak',
                ),
                2508 =>
                array(
                    'id' => 2509,
                    'county_id' => 873,
                    'name' => 'Merkezköyler',
                ),
                2509 =>
                array(
                    'id' => 2510,
                    'county_id' => 874,
                    'name' => 'İdil',
                ),
                2510 =>
                array(
                    'id' => 2511,
                    'county_id' => 874,
                    'name' => 'Karalar',
                ),
                2511 =>
                array(
                    'id' => 2512,
                    'county_id' => 874,
                    'name' => 'Merkezköyler',
                ),
                2512 =>
                array(
                    'id' => 2513,
                    'county_id' => 874,
                    'name' => 'Sırtköy',
                ),
                2513 =>
                array(
                    'id' => 2514,
                    'county_id' => 875,
                    'name' => 'Balveren',
                ),
                2514 =>
                array(
                    'id' => 2515,
                    'county_id' => 875,
                    'name' => 'Kasrik',
                ),
                2515 =>
                array(
                    'id' => 2516,
                    'county_id' => 875,
                    'name' => 'Kumçatı',
                ),
                2516 =>
                array(
                    'id' => 2517,
                    'county_id' => 875,
                    'name' => 'Merkezköyler',
                ),
                2517 =>
                array(
                    'id' => 2518,
                    'county_id' => 875,
                    'name' => 'Şırnak',
                ),
                2518 =>
                array(
                    'id' => 2519,
                    'county_id' => 876,
                    'name' => 'Başverimli',
                ),
                2519 =>
                array(
                    'id' => 2520,
                    'county_id' => 876,
                    'name' => 'Çalışkan',
                ),
                2520 =>
                array(
                    'id' => 2521,
                    'county_id' => 876,
                    'name' => 'Görümlü',
                ),
                2521 =>
                array(
                    'id' => 2522,
                    'county_id' => 876,
                    'name' => 'Merkezköyler',
                ),
                2522 =>
                array(
                    'id' => 2523,
                    'county_id' => 876,
                    'name' => 'Silopi',
                ),
                2523 =>
                array(
                    'id' => 2524,
                    'county_id' => 877,
                    'name' => 'Hilal',
                ),
                2524 =>
                array(
                    'id' => 2525,
                    'county_id' => 877,
                    'name' => 'Merkezköyler',
                ),
                2525 =>
                array(
                    'id' => 2526,
                    'county_id' => 877,
                    'name' => 'Şenoba',
                ),
                2526 =>
                array(
                    'id' => 2527,
                    'county_id' => 877,
                    'name' => 'Uludere',
                ),
                2527 =>
                array(
                    'id' => 2528,
                    'county_id' => 877,
                    'name' => 'Uzungeçit',
                ),
                2528 =>
                array(
                    'id' => 2529,
                    'county_id' => 878,
                    'name' => 'Çerkezköy',
                ),
                2529 =>
                array(
                    'id' => 2530,
                    'county_id' => 879,
                    'name' => 'Çorlu',
                ),
                2530 =>
                array(
                    'id' => 2531,
                    'county_id' => 879,
                    'name' => 'Silahtar',
                ),
                2531 =>
                array(
                    'id' => 2532,
                    'county_id' => 880,
                    'name' => 'Marmaracık',
                ),
                2532 =>
                array(
                    'id' => 2533,
                    'county_id' => 881,
                    'name' => 'Hayrabolu',
                ),
                2533 =>
                array(
                    'id' => 2534,
                    'county_id' => 882,
                    'name' => 'Kapaklı',
                ),
                2534 =>
                array(
                    'id' => 2535,
                    'county_id' => 883,
                    'name' => 'Malkara',
                ),
                2535 =>
                array(
                    'id' => 2536,
                    'county_id' => 884,
                    'name' => 'Marmaraereğlisi',
                ),
                2536 =>
                array(
                    'id' => 2537,
                    'county_id' => 885,
                    'name' => 'Muratlı',
                ),
                2537 =>
                array(
                    'id' => 2538,
                    'county_id' => 886,
                    'name' => 'Saray',
                ),
                2538 =>
                array(
                    'id' => 2539,
                    'county_id' => 887,
                    'name' => 'Altınova',
                ),
                2539 =>
                array(
                    'id' => 2540,
                    'county_id' => 887,
                    'name' => 'Aydoğdu',
                ),
                2540 =>
                array(
                    'id' => 2541,
                    'county_id' => 887,
                    'name' => 'Eskicami',
                ),
                2541 =>
                array(
                    'id' => 2542,
                    'county_id' => 887,
                    'name' => 'Kumbağ',
                ),
                2542 =>
                array(
                    'id' => 2543,
                    'county_id' => 887,
                    'name' => 'Süleymanpaşa',
                ),
                2543 =>
                array(
                    'id' => 2544,
                    'county_id' => 888,
                    'name' => 'Şarköy',
                ),
                2544 =>
                array(
                    'id' => 2545,
                    'county_id' => 889,
                    'name' => 'Akarçay Görümlü',
                ),
                2545 =>
                array(
                    'id' => 2546,
                    'county_id' => 889,
                    'name' => 'Almus',
                ),
                2546 =>
                array(
                    'id' => 2547,
                    'county_id' => 889,
                    'name' => 'Ataköy',
                ),
                2547 =>
                array(
                    'id' => 2548,
                    'county_id' => 889,
                    'name' => 'Çevreli',
                ),
                2548 =>
                array(
                    'id' => 2549,
                    'county_id' => 889,
                    'name' => 'Gölgeli',
                ),
                2549 =>
                array(
                    'id' => 2550,
                    'county_id' => 889,
                    'name' => 'Kınık',
                ),
                2550 =>
                array(
                    'id' => 2551,
                    'county_id' => 889,
                    'name' => 'Merkezköyler',
                ),
                2551 =>
                array(
                    'id' => 2552,
                    'county_id' => 890,
                    'name' => 'Artova',
                ),
                2552 =>
                array(
                    'id' => 2553,
                    'county_id' => 890,
                    'name' => 'Merkezköyler',
                ),
                2553 =>
                array(
                    'id' => 2554,
                    'county_id' => 891,
                    'name' => 'Başçiftlik',
                ),
                2554 =>
                array(
                    'id' => 2555,
                    'county_id' => 891,
                    'name' => 'Hatipli',
                ),
                2555 =>
                array(
                    'id' => 2556,
                    'county_id' => 891,
                    'name' => 'Merkezköyler',
                ),
                2556 =>
                array(
                    'id' => 2557,
                    'county_id' => 892,
                    'name' => 'Erbaa',
                ),
                2557 =>
                array(
                    'id' => 2558,
                    'county_id' => 892,
                    'name' => 'Gökal',
                ),
                2558 =>
                array(
                    'id' => 2559,
                    'county_id' => 892,
                    'name' => 'Karayaka',
                ),
                2559 =>
                array(
                    'id' => 2560,
                    'county_id' => 892,
                    'name' => 'Merkezköyler',
                ),
                2560 =>
                array(
                    'id' => 2561,
                    'county_id' => 892,
                    'name' => 'Tanoba',
                ),
                2561 =>
                array(
                    'id' => 2562,
                    'county_id' => 893,
                    'name' => 'Çamlıbel',
                ),
                2562 =>
                array(
                    'id' => 2563,
                    'county_id' => 893,
                    'name' => 'Çat',
                ),
                2563 =>
                array(
                    'id' => 2564,
                    'county_id' => 893,
                    'name' => 'Emirseyit',
                ),
                2564 =>
                array(
                    'id' => 2565,
                    'county_id' => 893,
                    'name' => 'Geyras',
                ),
                2565 =>
                array(
                    'id' => 2566,
                    'county_id' => 893,
                    'name' => 'Gökdere',
                ),
                2566 =>
                array(
                    'id' => 2567,
                    'county_id' => 893,
                    'name' => 'Güryıldız',
                ),
                2567 =>
                array(
                    'id' => 2568,
                    'county_id' => 893,
                    'name' => 'Karşıyaka',
                ),
                2568 =>
                array(
                    'id' => 2569,
                    'county_id' => 893,
                    'name' => 'Merkezköyler',
                ),
                2569 =>
                array(
                    'id' => 2570,
                    'county_id' => 894,
                    'name' => 'Gökçeli',
                ),
                2570 =>
                array(
                    'id' => 2571,
                    'county_id' => 894,
                    'name' => 'Gürçeşme',
                ),
                2571 =>
                array(
                    'id' => 2572,
                    'county_id' => 894,
                    'name' => 'Merkezköyler',
                ),
                2572 =>
                array(
                    'id' => 2573,
                    'county_id' => 894,
                    'name' => 'Niksar',
                ),
                2573 =>
                array(
                    'id' => 2574,
                    'county_id' => 894,
                    'name' => 'Serenli',
                ),
                2574 =>
                array(
                    'id' => 2575,
                    'county_id' => 894,
                    'name' => 'Yazıcık',
                ),
                2575 =>
                array(
                    'id' => 2576,
                    'county_id' => 894,
                    'name' => 'Yolkonak',
                ),
                2576 =>
                array(
                    'id' => 2577,
                    'county_id' => 895,
                    'name' => 'Merkezköyler',
                ),
                2577 =>
                array(
                    'id' => 2578,
                    'county_id' => 895,
                    'name' => 'Pazar',
                ),
                2578 =>
                array(
                    'id' => 2579,
                    'county_id' => 895,
                    'name' => 'Üzümören',
                ),
                2579 =>
                array(
                    'id' => 2580,
                    'county_id' => 896,
                    'name' => 'Baydarlı',
                ),
                2580 =>
                array(
                    'id' => 2581,
                    'county_id' => 896,
                    'name' => 'Bereketli',
                ),
                2581 =>
                array(
                    'id' => 2582,
                    'county_id' => 896,
                    'name' => 'Bozçalı',
                ),
                2582 =>
                array(
                    'id' => 2583,
                    'county_id' => 896,
                    'name' => 'Cimitekke',
                ),
                2583 =>
                array(
                    'id' => 2584,
                    'county_id' => 896,
                    'name' => 'Hasanşeyh',
                ),
                2584 =>
                array(
                    'id' => 2585,
                    'county_id' => 896,
                    'name' => 'Merkezköyler',
                ),
                2585 =>
                array(
                    'id' => 2586,
                    'county_id' => 896,
                    'name' => 'Reşadiye',
                ),
                2586 =>
                array(
                    'id' => 2587,
                    'county_id' => 897,
                    'name' => 'Merkezköyler',
                ),
                2587 =>
                array(
                    'id' => 2588,
                    'county_id' => 897,
                    'name' => 'Sulusaray',
                ),
                2588 =>
                array(
                    'id' => 2589,
                    'county_id' => 898,
                    'name' => 'Merkezköyler',
                ),
                2589 =>
                array(
                    'id' => 2590,
                    'county_id' => 898,
                    'name' => 'Şenyurt',
                ),
                2590 =>
                array(
                    'id' => 2591,
                    'county_id' => 898,
                    'name' => 'Turhal',
                ),
                2591 =>
                array(
                    'id' => 2592,
                    'county_id' => 899,
                    'name' => 'Merkezköyler',
                ),
                2592 =>
                array(
                    'id' => 2593,
                    'county_id' => 899,
                    'name' => 'Yeşilyurt',
                ),
                2593 =>
                array(
                    'id' => 2594,
                    'county_id' => 900,
                    'name' => 'Merkezköyler',
                ),
                2594 =>
                array(
                    'id' => 2595,
                    'county_id' => 900,
                    'name' => 'Zile',
                ),
                2595 =>
                array(
                    'id' => 2596,
                    'county_id' => 901,
                    'name' => 'Akçaabat',
                ),
                2596 =>
                array(
                    'id' => 2597,
                    'county_id' => 902,
                    'name' => 'Araklı',
                ),
                2597 =>
                array(
                    'id' => 2598,
                    'county_id' => 903,
                    'name' => 'Arsin',
                ),
                2598 =>
                array(
                    'id' => 2599,
                    'county_id' => 904,
                    'name' => 'Beşikdüzü',
                ),
                2599 =>
                array(
                    'id' => 2600,
                    'county_id' => 905,
                    'name' => 'Çarşıbaşı',
                ),
                2600 =>
                array(
                    'id' => 2601,
                    'county_id' => 906,
                    'name' => 'Çaykara',
                ),
                2601 =>
                array(
                    'id' => 2602,
                    'county_id' => 907,
                    'name' => 'Dernekpazarı',
                ),
                2602 =>
                array(
                    'id' => 2603,
                    'county_id' => 908,
                    'name' => 'Düzköy',
                ),
                2603 =>
                array(
                    'id' => 2604,
                    'county_id' => 909,
                    'name' => 'Hayrat',
                ),
                2604 =>
                array(
                    'id' => 2605,
                    'county_id' => 910,
                    'name' => 'Köprübaşı',
                ),
                2605 =>
                array(
                    'id' => 2606,
                    'county_id' => 911,
                    'name' => 'Maçka',
                ),
                2606 =>
                array(
                    'id' => 2607,
                    'county_id' => 912,
                    'name' => 'Of',
                ),
                2607 =>
                array(
                    'id' => 2608,
                    'county_id' => 913,
                    'name' => 'Beşirli',
                ),
                2608 =>
                array(
                    'id' => 2609,
                    'county_id' => 913,
                    'name' => 'Bostancı',
                ),
                2609 =>
                array(
                    'id' => 2610,
                    'county_id' => 913,
                    'name' => 'Boztepe',
                ),
                2610 =>
                array(
                    'id' => 2611,
                    'county_id' => 913,
                    'name' => 'Çarşı',
                ),
                2611 =>
                array(
                    'id' => 2612,
                    'county_id' => 913,
                    'name' => 'Erdoğdu',
                ),
                2612 =>
                array(
                    'id' => 2613,
                    'county_id' => 914,
                    'name' => 'Sürmene',
                ),
                2613 =>
                array(
                    'id' => 2614,
                    'county_id' => 915,
                    'name' => 'Şalpazarı',
                ),
                2614 =>
                array(
                    'id' => 2615,
                    'county_id' => 916,
                    'name' => 'Tonya',
                ),
                2615 =>
                array(
                    'id' => 2616,
                    'county_id' => 917,
                    'name' => 'Vakfıkebir',
                ),
                2616 =>
                array(
                    'id' => 2617,
                    'county_id' => 918,
                    'name' => 'Yomra',
                ),
                2617 =>
                array(
                    'id' => 2618,
                    'county_id' => 919,
                    'name' => 'Çemişgezek',
                ),
                2618 =>
                array(
                    'id' => 2619,
                    'county_id' => 919,
                    'name' => 'Merkezköyler',
                ),
                2619 =>
                array(
                    'id' => 2620,
                    'county_id' => 920,
                    'name' => 'Hozat',
                ),
                2620 =>
                array(
                    'id' => 2621,
                    'county_id' => 920,
                    'name' => 'Merkezköyler',
                ),
                2621 =>
                array(
                    'id' => 2622,
                    'county_id' => 921,
                    'name' => 'Akpazar',
                ),
                2622 =>
                array(
                    'id' => 2623,
                    'county_id' => 921,
                    'name' => 'Mazgirt',
                ),
                2623 =>
                array(
                    'id' => 2624,
                    'county_id' => 921,
                    'name' => 'Merkezköyler',
                ),
                2624 =>
                array(
                    'id' => 2625,
                    'county_id' => 922,
                    'name' => 'Merkezköyler',
                ),
                2625 =>
                array(
                    'id' => 2626,
                    'county_id' => 922,
                    'name' => 'Tunceli',
                ),
                2626 =>
                array(
                    'id' => 2627,
                    'county_id' => 923,
                    'name' => 'Merkezköyler',
                ),
                2627 =>
                array(
                    'id' => 2628,
                    'county_id' => 923,
                    'name' => 'Nazımiye',
                ),
                2628 =>
                array(
                    'id' => 2629,
                    'county_id' => 924,
                    'name' => 'Merkezköyler',
                ),
                2629 =>
                array(
                    'id' => 2630,
                    'county_id' => 924,
                    'name' => 'Ovacık',
                ),
                2630 =>
                array(
                    'id' => 2631,
                    'county_id' => 925,
                    'name' => 'Merkezköyler',
                ),
                2631 =>
                array(
                    'id' => 2632,
                    'county_id' => 925,
                    'name' => 'Pertek',
                ),
                2632 =>
                array(
                    'id' => 2633,
                    'county_id' => 926,
                    'name' => 'Merkezköyler',
                ),
                2633 =>
                array(
                    'id' => 2634,
                    'county_id' => 926,
                    'name' => 'Pülümür',
                ),
                2634 =>
                array(
                    'id' => 2635,
                    'county_id' => 927,
                    'name' => 'Banaz',
                ),
                2635 =>
                array(
                    'id' => 2636,
                    'county_id' => 927,
                    'name' => 'Kızılcasöğüt',
                ),
                2636 =>
                array(
                    'id' => 2637,
                    'county_id' => 927,
                    'name' => 'Merkezköyler',
                ),
                2637 =>
                array(
                    'id' => 2638,
                    'county_id' => 928,
                    'name' => 'Eşme',
                ),
                2638 =>
                array(
                    'id' => 2639,
                    'county_id' => 928,
                    'name' => 'Merkezköyler',
                ),
                2639 =>
                array(
                    'id' => 2640,
                    'county_id' => 928,
                    'name' => 'Yeleğen',
                ),
                2640 =>
                array(
                    'id' => 2641,
                    'county_id' => 929,
                    'name' => 'Karahallı',
                ),
                2641 =>
                array(
                    'id' => 2642,
                    'county_id' => 929,
                    'name' => 'Merkezköyler',
                ),
                2642 =>
                array(
                    'id' => 2643,
                    'county_id' => 930,
                    'name' => 'Cumhuriyet',
                ),
                2643 =>
                array(
                    'id' => 2644,
                    'county_id' => 930,
                    'name' => 'Merkezköyler',
                ),
                2644 =>
                array(
                    'id' => 2645,
                    'county_id' => 931,
                    'name' => 'Merkezköyler',
                ),
                2645 =>
                array(
                    'id' => 2646,
                    'county_id' => 931,
                    'name' => 'Pınarbaşı',
                ),
                2646 =>
                array(
                    'id' => 2647,
                    'county_id' => 931,
                    'name' => 'Selçikler',
                ),
                2647 =>
                array(
                    'id' => 2648,
                    'county_id' => 931,
                    'name' => 'Sivaslı',
                ),
                2648 =>
                array(
                    'id' => 2649,
                    'county_id' => 931,
                    'name' => 'Tatar',
                ),
                2649 =>
                array(
                    'id' => 2650,
                    'county_id' => 932,
                    'name' => 'Merkezköyler',
                ),
                2650 =>
                array(
                    'id' => 2651,
                    'county_id' => 932,
                    'name' => 'Ulubey',
                ),
                2651 =>
                array(
                    'id' => 2652,
                    'county_id' => 933,
                    'name' => 'Bahçesaray',
                ),
                2652 =>
                array(
                    'id' => 2653,
                    'county_id' => 934,
                    'name' => 'Başkale',
                ),
                2653 =>
                array(
                    'id' => 2654,
                    'county_id' => 935,
                    'name' => 'Çaldıran',
                ),
                2654 =>
                array(
                    'id' => 2655,
                    'county_id' => 936,
                    'name' => 'Çatak',
                ),
                2655 =>
                array(
                    'id' => 2656,
                    'county_id' => 937,
                    'name' => 'Gümüşdere',
                ),
                2656 =>
                array(
                    'id' => 2657,
                    'county_id' => 937,
                    'name' => 'Süphan',
                ),
                2657 =>
                array(
                    'id' => 2658,
                    'county_id' => 938,
                    'name' => 'Erciş',
                ),
                2658 =>
                array(
                    'id' => 2659,
                    'county_id' => 939,
                    'name' => 'Gevaş',
                ),
                2659 =>
                array(
                    'id' => 2660,
                    'county_id' => 940,
                    'name' => 'Gürpınar',
                ),
                2660 =>
                array(
                    'id' => 2661,
                    'county_id' => 941,
                    'name' => 'Erçek',
                ),
                2661 =>
                array(
                    'id' => 2662,
                    'county_id' => 941,
                    'name' => 'Valimitatbey',
                ),
                2662 =>
                array(
                    'id' => 2663,
                    'county_id' => 942,
                    'name' => 'Muradiye',
                ),
                2663 =>
                array(
                    'id' => 2664,
                    'county_id' => 943,
                    'name' => 'Özalp',
                ),
                2664 =>
                array(
                    'id' => 2665,
                    'county_id' => 944,
                    'name' => 'Saray',
                ),
                2665 =>
                array(
                    'id' => 2666,
                    'county_id' => 945,
                    'name' => 'İskele',
                ),
                2666 =>
                array(
                    'id' => 2667,
                    'county_id' => 945,
                    'name' => 'İstasyon',
                ),
                2667 =>
                array(
                    'id' => 2668,
                    'county_id' => 946,
                    'name' => 'Altınova',
                ),
                2668 =>
                array(
                    'id' => 2669,
                    'county_id' => 946,
                    'name' => 'Kaytazdere',
                ),
                2669 =>
                array(
                    'id' => 2670,
                    'county_id' => 946,
                    'name' => 'Merkezköyler',
                ),
                2670 =>
                array(
                    'id' => 2671,
                    'county_id' => 946,
                    'name' => 'Subaşı',
                ),
                2671 =>
                array(
                    'id' => 2672,
                    'county_id' => 946,
                    'name' => 'Tavşanlı',
                ),
                2672 =>
                array(
                    'id' => 2673,
                    'county_id' => 947,
                    'name' => 'Armutlu',
                ),
                2673 =>
                array(
                    'id' => 2674,
                    'county_id' => 947,
                    'name' => 'Merkezköyler',
                ),
                2674 =>
                array(
                    'id' => 2675,
                    'county_id' => 948,
                    'name' => 'Çınarcık',
                ),
                2675 =>
                array(
                    'id' => 2676,
                    'county_id' => 948,
                    'name' => 'Esenköy',
                ),
                2676 =>
                array(
                    'id' => 2677,
                    'county_id' => 948,
                    'name' => 'Koru',
                ),
                2677 =>
                array(
                    'id' => 2678,
                    'county_id' => 948,
                    'name' => 'Merkezköyler',
                ),
                2678 =>
                array(
                    'id' => 2679,
                    'county_id' => 948,
                    'name' => 'Teşvikiye',
                ),
                2679 =>
                array(
                    'id' => 2680,
                    'county_id' => 949,
                    'name' => 'Çiftlikköy',
                ),
                2680 =>
                array(
                    'id' => 2681,
                    'county_id' => 949,
                    'name' => 'Merkezköyler',
                ),
                2681 =>
                array(
                    'id' => 2682,
                    'county_id' => 949,
                    'name' => 'Taşköprü',
                ),
                2682 =>
                array(
                    'id' => 2683,
                    'county_id' => 950,
                    'name' => 'Bağlarbaşı',
                ),
                2683 =>
                array(
                    'id' => 2684,
                    'county_id' => 950,
                    'name' => 'Kadıköy',
                ),
                2684 =>
                array(
                    'id' => 2685,
                    'county_id' => 950,
                    'name' => 'Merkezköyler',
                ),
                2685 =>
                array(
                    'id' => 2686,
                    'county_id' => 951,
                    'name' => 'Merkezköyler',
                ),
                2686 =>
                array(
                    'id' => 2687,
                    'county_id' => 951,
                    'name' => 'Termal',
                ),
                2687 =>
                array(
                    'id' => 2688,
                    'county_id' => 952,
                    'name' => 'Akdağmadeni',
                ),
                2688 =>
                array(
                    'id' => 2689,
                    'county_id' => 952,
                    'name' => 'Belekçehan',
                ),
                2689 =>
                array(
                    'id' => 2690,
                    'county_id' => 952,
                    'name' => 'Merkezköyler',
                ),
                2690 =>
                array(
                    'id' => 2691,
                    'county_id' => 952,
                    'name' => 'Oluközü',
                ),
                2691 =>
                array(
                    'id' => 2692,
                    'county_id' => 952,
                    'name' => 'Umutlu',
                ),
                2692 =>
                array(
                    'id' => 2693,
                    'county_id' => 953,
                    'name' => 'Aydıncık',
                ),
                2693 =>
                array(
                    'id' => 2694,
                    'county_id' => 953,
                    'name' => 'Baydiğin',
                ),
                2694 =>
                array(
                    'id' => 2695,
                    'county_id' => 953,
                    'name' => 'Merkezköyler',
                ),
                2695 =>
                array(
                    'id' => 2696,
                    'county_id' => 954,
                    'name' => 'Boğazlıyan',
                ),
                2696 =>
                array(
                    'id' => 2697,
                    'county_id' => 954,
                    'name' => 'Merkezköyler',
                ),
                2697 =>
                array(
                    'id' => 2698,
                    'county_id' => 954,
                    'name' => 'Ovakent',
                ),
                2698 =>
                array(
                    'id' => 2699,
                    'county_id' => 954,
                    'name' => 'Sırçalı',
                ),
                2699 =>
                array(
                    'id' => 2700,
                    'county_id' => 954,
                    'name' => 'Uzunlu',
                ),
                2700 =>
                array(
                    'id' => 2701,
                    'county_id' => 954,
                    'name' => 'Yamaçlı',
                ),
                2701 =>
                array(
                    'id' => 2702,
                    'county_id' => 954,
                    'name' => 'Yenipazar',
                ),
                2702 =>
                array(
                    'id' => 2703,
                    'county_id' => 955,
                    'name' => 'Çandır',
                ),
                2703 =>
                array(
                    'id' => 2704,
                    'county_id' => 955,
                    'name' => 'Merkezköyler',
                ),
                2704 =>
                array(
                    'id' => 2705,
                    'county_id' => 956,
                    'name' => 'Çayıralan',
                ),
                2705 =>
                array(
                    'id' => 2706,
                    'county_id' => 956,
                    'name' => 'Konuklar',
                ),
                2706 =>
                array(
                    'id' => 2707,
                    'county_id' => 956,
                    'name' => 'Merkezköyler',
                ),
                2707 =>
                array(
                    'id' => 2708,
                    'county_id' => 957,
                    'name' => 'Çekerek',
                ),
                2708 =>
                array(
                    'id' => 2709,
                    'county_id' => 957,
                    'name' => 'Merkezköyler',
                ),
                2709 =>
                array(
                    'id' => 2710,
                    'county_id' => 957,
                    'name' => 'Özükavak',
                ),
                2710 =>
                array(
                    'id' => 2711,
                    'county_id' => 958,
                    'name' => 'Halıköy',
                ),
                2711 =>
                array(
                    'id' => 2712,
                    'county_id' => 958,
                    'name' => 'Kadışehri',
                ),
                2712 =>
                array(
                    'id' => 2713,
                    'county_id' => 958,
                    'name' => 'Merkezköyler',
                ),
                2713 =>
                array(
                    'id' => 2714,
                    'county_id' => 959,
                    'name' => 'Merkezköyler',
                ),
                2714 =>
                array(
                    'id' => 2715,
                    'county_id' => 959,
                    'name' => 'Yozgat',
                ),
                2715 =>
                array(
                    'id' => 2716,
                    'county_id' => 960,
                    'name' => 'Dedefakılı',
                ),
                2716 =>
                array(
                    'id' => 2717,
                    'county_id' => 960,
                    'name' => 'Merkezköyler',
                ),
                2717 =>
                array(
                    'id' => 2718,
                    'county_id' => 960,
                    'name' => 'Ozan',
                ),
                2718 =>
                array(
                    'id' => 2719,
                    'county_id' => 960,
                    'name' => 'Saraykent',
                ),
                2719 =>
                array(
                    'id' => 2720,
                    'county_id' => 961,
                    'name' => 'Karayakup',
                ),
                2720 =>
                array(
                    'id' => 2721,
                    'county_id' => 961,
                    'name' => 'Merkezköyler',
                ),
                2721 =>
                array(
                    'id' => 2722,
                    'county_id' => 961,
                    'name' => 'Sarıkaya',
                ),
                2722 =>
                array(
                    'id' => 2723,
                    'county_id' => 962,
                    'name' => 'Araplı',
                ),
                2723 =>
                array(
                    'id' => 2724,
                    'county_id' => 962,
                    'name' => 'Bahadın',
                ),
                2724 =>
                array(
                    'id' => 2725,
                    'county_id' => 962,
                    'name' => 'Çiğdemli',
                ),
                2725 =>
                array(
                    'id' => 2726,
                    'county_id' => 962,
                    'name' => 'Doğankent',
                ),
                2726 =>
                array(
                    'id' => 2727,
                    'county_id' => 962,
                    'name' => 'Eymir',
                ),
                2727 =>
                array(
                    'id' => 2728,
                    'county_id' => 962,
                    'name' => 'Gülşehri',
                ),
                2728 =>
                array(
                    'id' => 2729,
                    'county_id' => 962,
                    'name' => 'Merkezköyler',
                ),
                2729 =>
                array(
                    'id' => 2730,
                    'county_id' => 962,
                    'name' => 'Sorgun',
                ),
                2730 =>
                array(
                    'id' => 2731,
                    'county_id' => 962,
                    'name' => 'Yeniyer',
                ),
                2731 =>
                array(
                    'id' => 2732,
                    'county_id' => 963,
                    'name' => 'Merkezköyler',
                ),
                2732 =>
                array(
                    'id' => 2733,
                    'county_id' => 963,
                    'name' => 'Şefaatli',
                ),
                2733 =>
                array(
                    'id' => 2734,
                    'county_id' => 964,
                    'name' => 'Merkezköyler',
                ),
                2734 =>
                array(
                    'id' => 2735,
                    'county_id' => 964,
                    'name' => 'Yenifakılı',
                ),
                2735 =>
                array(
                    'id' => 2736,
                    'county_id' => 965,
                    'name' => 'Merkezköyler',
                ),
                2736 =>
                array(
                    'id' => 2737,
                    'county_id' => 965,
                    'name' => 'Yerköy',
                ),
                2737 =>
                array(
                    'id' => 2738,
                    'county_id' => 966,
                    'name' => 'Alaplı',
                ),
                2738 =>
                array(
                    'id' => 2739,
                    'county_id' => 966,
                    'name' => 'Gümeli',
                ),
                2739 =>
                array(
                    'id' => 2740,
                    'county_id' => 966,
                    'name' => 'Merkezköyler',
                ),
                2740 =>
                array(
                    'id' => 2741,
                    'county_id' => 967,
                    'name' => 'Çaycuma',
                ),
                2741 =>
                array(
                    'id' => 2742,
                    'county_id' => 967,
                    'name' => 'Filyos',
                ),
                2742 =>
                array(
                    'id' => 2743,
                    'county_id' => 967,
                    'name' => 'Karapınar',
                ),
                2743 =>
                array(
                    'id' => 2744,
                    'county_id' => 967,
                    'name' => 'Merkezköyler',
                ),
                2744 =>
                array(
                    'id' => 2745,
                    'county_id' => 967,
                    'name' => 'Nebioğlu',
                ),
                2745 =>
                array(
                    'id' => 2746,
                    'county_id' => 967,
                    'name' => 'Perşembe',
                ),
                2746 =>
                array(
                    'id' => 2747,
                    'county_id' => 967,
                    'name' => 'Saltukova',
                ),
                2747 =>
                array(
                    'id' => 2748,
                    'county_id' => 968,
                    'name' => 'Çaydeğirmeni',
                ),
                2748 =>
                array(
                    'id' => 2749,
                    'county_id' => 968,
                    'name' => 'Devrek',
                ),
                2749 =>
                array(
                    'id' => 2750,
                    'county_id' => 968,
                    'name' => 'Eğerci',
                ),
                2750 =>
                array(
                    'id' => 2751,
                    'county_id' => 968,
                    'name' => 'Merkezköyler',
                ),
                2751 =>
                array(
                    'id' => 2752,
                    'county_id' => 969,
                    'name' => 'Gülüç',
                ),
                2752 =>
                array(
                    'id' => 2753,
                    'county_id' => 969,
                    'name' => 'Kandilli',
                ),
                2753 =>
                array(
                    'id' => 2754,
                    'county_id' => 969,
                    'name' => 'Karadenizereğli',
                ),
                2754 =>
                array(
                    'id' => 2755,
                    'county_id' => 969,
                    'name' => 'Merkezköyler',
                ),
                2755 =>
                array(
                    'id' => 2756,
                    'county_id' => 969,
                    'name' => 'Ormanlı',
                ),
                2756 =>
                array(
                    'id' => 2757,
                    'county_id' => 970,
                    'name' => 'Bakacakkadı',
                ),
                2757 =>
                array(
                    'id' => 2758,
                    'county_id' => 970,
                    'name' => 'Gökçebey',
                ),
                2758 =>
                array(
                    'id' => 2759,
                    'county_id' => 970,
                    'name' => 'Merkezköyler',
                ),
                2759 =>
                array(
                    'id' => 2760,
                    'county_id' => 971,
                    'name' => 'Çatalağzı',
                ),
                2760 =>
                array(
                    'id' => 2761,
                    'county_id' => 971,
                    'name' => 'Gelik',
                ),
                2761 =>
                array(
                    'id' => 2762,
                    'county_id' => 971,
                    'name' => 'Kilimli',
                ),
                2762 =>
                array(
                    'id' => 2763,
                    'county_id' => 971,
                    'name' => 'Merkezköyler',
                ),
                2763 =>
                array(
                    'id' => 2764,
                    'county_id' => 971,
                    'name' => 'Muslu',
                ),
                2764 =>
                array(
                    'id' => 2765,
                    'county_id' => 972,
                    'name' => 'Kozlu',
                ),
                2765 =>
                array(
                    'id' => 2766,
                    'county_id' => 972,
                    'name' => 'Merkezköyler',
                ),
                2766 =>
                array(
                    'id' => 2767,
                    'county_id' => 973,
                    'name' => 'Beycuma',
                ),
                2767 =>
                array(
                    'id' => 2768,
                    'county_id' => 973,
                    'name' => 'Elvanpazarcık',
                ),
                2768 =>
                array(
                    'id' => 2769,
                    'county_id' => 973,
                    'name' => 'Karaman',
                ),
                2769 =>
                array(
                    'id' => 2770,
                    'county_id' => 973,
                    'name' => 'Merkezköyler',
                ),
                2770 =>
                array(
                    'id' => 2771,
                    'county_id' => 973,
                    'name' => 'Zonguldak',
                ),
            )
        );
    }
}
