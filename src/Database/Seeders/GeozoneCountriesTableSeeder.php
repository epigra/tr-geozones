<?php

namespace Epigra\TrGeoZones\Database\Seeders;

use Illuminate\Database\Seeder;

class GeozoneCountriesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        \DB::table('geozone_countries')->delete();

        \DB::table('geozone_countries')->insert([
            0 => [
                'id' => 1,
                'iso_code' => 'TR',
                'name' => 'Türkiye',
            ],
            1 => [
                'id' => 2,
                'iso_code' => 'AF',
                'name' => 'Afganistan',
            ],
            2 => [
                'id' => 3,
                'iso_code' => 'AX',
                'name' => 'Aland Adaları',
            ],
            3 => [
                'id' => 4,
                'iso_code' => 'DE',
                'name' => 'Almanya',
            ],
            4 => [
                'id' => 5,
                'iso_code' => 'US',
                'name' => 'Amerika Birleşik Devletleri',
            ],
            5 => [
                'id' => 6,
                'iso_code' => 'UM',
                'name' => 'Amerika Birleşik Devletleri Küçük Dış Adaları',
            ],
            6 => [
                'id' => 7,
                'iso_code' => 'AS',
                'name' => 'Amerikan Samoası',
            ],
            7 => [
                'id' => 8,
                'iso_code' => 'VI',
                'name' => 'ABD Virgin Adaları',
            ],
            8 => [
                'id' => 9,
                'iso_code' => 'AD',
                'name' => 'Andorra',
            ],
            9 => [
                'id' => 10,
                'iso_code' => 'AO',
                'name' => 'Angola',
            ],
            10 => [
                'id' => 11,
                'iso_code' => 'AI',
                'name' => 'Anguilla',
            ],
            11 => [
                'id' => 12,
                'iso_code' => 'AQ',
                'name' => 'Antarktika',
            ],
            12 => [
                'id' => 13,
                'iso_code' => 'AG',
                'name' => 'Antigua ve Barbuda',
            ],
            13 => [
                'id' => 14,
                'iso_code' => 'AR',
                'name' => 'Arjantin',
            ],
            14 => [
                'id' => 15,
                'iso_code' => 'AL',
                'name' => 'Arnavutluk',
            ],
            15 => [
                'id' => 16,
                'iso_code' => 'AW',
                'name' => 'Aruba',
            ],
            16 => [
                'id' => 17,
                'iso_code' => 'AU',
                'name' => 'Avustralya',
            ],
            17 => [
                'id' => 18,
                'iso_code' => 'AT',
                'name' => 'Avusturya',
            ],
            18 => [
                'id' => 19,
                'iso_code' => 'AZ',
                'name' => 'Azerbaycan',
            ],
            19 => [
                'id' => 20,
                'iso_code' => 'BS',
                'name' => 'Bahamalar',
            ],
            20 => [
                'id' => 21,
                'iso_code' => 'BH',
                'name' => 'Bahreyn',
            ],
            21 => [
                'id' => 22,
                'iso_code' => 'BD',
                'name' => 'Bangladeş',
            ],
            22 => [
                'id' => 23,
                'iso_code' => 'BB',
                'name' => 'Barbados',
            ],
            23 => [
                'id' => 24,
                'iso_code' => 'EH',
                'name' => 'Batı Sahara',
            ],
            24 => [
                'id' => 25,
                'iso_code' => 'BZ',
                'name' => 'Belize',
            ],
            25 => [
                'id' => 26,
                'iso_code' => 'BE',
                'name' => 'Belçika',
            ],
            26 => [
                'id' => 27,
                'iso_code' => 'BJ',
                'name' => 'Benin',
            ],
            27 => [
                'id' => 28,
                'iso_code' => 'BM',
                'name' => 'Bermuda',
            ],
            28 => [
                'id' => 29,
                'iso_code' => 'BY',
                'name' => 'Beyaz Rusya',
            ],
            29 => [
                'id' => 30,
                'iso_code' => 'BT',
                'name' => 'Bhutan',
            ],
            30 => [
                'id' => 31,
                'iso_code' => 'ZZ',
                'name' => 'Bilinmeyen veya Geçersiz Bölge',
            ],
            31 => [
                'id' => 32,
                'iso_code' => 'AE',
                'name' => 'Birleşik Arap Emirlikleri',
            ],
            32 => [
                'id' => 33,
                'iso_code' => 'GB',
                'name' => 'Birleşik Krallık',
            ],
            33 => [
                'id' => 34,
                'iso_code' => 'BO',
                'name' => 'Bolivya',
            ],
            34 => [
                'id' => 35,
                'iso_code' => 'BA',
                'name' => 'Bosna Hersek',
            ],
            35 => [
                'id' => 36,
                'iso_code' => 'BW',
                'name' => 'Botsvana',
            ],
            36 => [
                'id' => 37,
                'iso_code' => 'BV',
                'name' => 'Bouvet Adası',
            ],
            37 => [
                'id' => 38,
                'iso_code' => 'BR',
                'name' => 'Brezilya',
            ],
            38 => [
                'id' => 39,
                'iso_code' => 'BN',
                'name' => 'Brunei',
            ],
            39 => [
                'id' => 40,
                'iso_code' => 'BG',
                'name' => 'Bulgaristan',
            ],
            40 => [
                'id' => 41,
                'iso_code' => 'BF',
                'name' => 'Burkina Faso',
            ],
            41 => [
                'id' => 42,
                'iso_code' => 'BI',
                'name' => 'Burundi',
            ],
            42 => [
                'id' => 43,
                'iso_code' => 'CV',
                'name' => 'Cape Verde',
            ],
            43 => [
                'id' => 44,
                'iso_code' => 'KY',
                'name' => 'Cayman Adaları',
            ],
            44 => [
                'id' => 45,
                'iso_code' => 'GI',
                'name' => 'Cebelitarık',
            ],
            45 => [
                'id' => 46,
                'iso_code' => 'DZ',
                'name' => 'Cezayir',
            ],
            46 => [
                'id' => 47,
                'iso_code' => 'CX',
                'name' => 'Christmas Adası',
            ],
            47 => [
                'id' => 48,
                'iso_code' => 'DJ',
                'name' => 'Cibuti',
            ],
            48 => [
                'id' => 49,
                'iso_code' => 'CC',
                'name' => 'Cocos Adaları',
            ],
            49 => [
                'id' => 50,
                'iso_code' => 'CK',
                'name' => 'Cook Adaları',
            ],
            50 => [
                'id' => 51,
                'iso_code' => 'DK',
                'name' => 'Danimarka',
            ],
            51 => [
                'id' => 52,
                'iso_code' => 'DO',
                'name' => 'Dominik Cumhuriyeti',
            ],
            52 => [
                'id' => 53,
                'iso_code' => 'DM',
                'name' => 'Dominika',
            ],
            53 => [
                'id' => 54,
                'iso_code' => 'TL',
                'name' => 'Doğu Timor',
            ],
            54 => [
                'id' => 55,
                'iso_code' => 'EC',
                'name' => 'Ekvador',
            ],
            55 => [
                'id' => 56,
                'iso_code' => 'GQ',
                'name' => 'Ekvator Ginesi',
            ],
            56 => [
                'id' => 57,
                'iso_code' => 'SV',
                'name' => 'El Salvador',
            ],
            57 => [
                'id' => 58,
                'iso_code' => 'ID',
                'name' => 'Endonezya',
            ],
            58 => [
                'id' => 59,
                'iso_code' => 'ER',
                'name' => 'Eritre',
            ],
            59 => [
                'id' => 60,
                'iso_code' => 'AM',
                'name' => 'Ermenistan',
            ],
            60 => [
                'id' => 61,
                'iso_code' => 'EE',
                'name' => 'Estonya',
            ],
            61 => [
                'id' => 62,
                'iso_code' => 'ET',
                'name' => 'Etiyopya',
            ],
            62 => [
                'id' => 63,
                'iso_code' => 'FK',
                'name' => 'Falkland Adaları',
            ],
            63 => [
                'id' => 64,
                'iso_code' => 'FO',
                'name' => 'Faroe Adaları',
            ],
            64 => [
                'id' => 65,
                'iso_code' => 'MA',
                'name' => 'Fas',
            ],
            65 => [
                'id' => 66,
                'iso_code' => 'FJ',
                'name' => 'Fiji',
            ],
            66 => [
                'id' => 67,
                'iso_code' => 'CI',
                'name' => 'Fildişi Sahili',
            ],
            67 => [
                'id' => 68,
                'iso_code' => 'PH',
                'name' => 'Filipinler',
            ],
            68 => [
                'id' => 69,
                'iso_code' => 'PS',
                'name' => 'Filistin Bölgesi',
            ],
            69 => [
                'id' => 70,
                'iso_code' => 'FI',
                'name' => 'Finlandiya',
            ],
            70 => [
                'id' => 71,
                'iso_code' => 'FR',
                'name' => 'Fransa',
            ],
            71 => [
                'id' => 72,
                'iso_code' => 'GF',
                'name' => 'Fransız Guyanası',
            ],
            72 => [
                'id' => 73,
                'iso_code' => 'TF',
                'name' => 'Fransız Güney Bölgeleri',
            ],
            73 => [
                'id' => 74,
                'iso_code' => 'PF',
                'name' => 'Fransız Polinezyası',
            ],
            74 => [
                'id' => 75,
                'iso_code' => 'GA',
                'name' => 'Gabon',
            ],
            75 => [
                'id' => 76,
                'iso_code' => 'GM',
                'name' => 'Gambiya',
            ],
            76 => [
                'id' => 77,
                'iso_code' => 'GH',
                'name' => 'Gana',
            ],
            77 => [
                'id' => 78,
                'iso_code' => 'GN',
                'name' => 'Gine',
            ],
            78 => [
                'id' => 79,
                'iso_code' => 'GW',
                'name' => 'Gine-Bissau',
            ],
            79 => [
                'id' => 80,
                'iso_code' => 'GD',
                'name' => 'Grenada',
            ],
            80 => [
                'id' => 81,
                'iso_code' => 'GL',
                'name' => 'Grönland',
            ],
            81 => [
                'id' => 82,
                'iso_code' => 'GP',
                'name' => 'Guadeloupe',
            ],
            82 => [
                'id' => 83,
                'iso_code' => 'GU',
                'name' => 'Guam',
            ],
            83 => [
                'id' => 84,
                'iso_code' => 'GT',
                'name' => 'Guatemala',
            ],
            84 => [
                'id' => 85,
                'iso_code' => 'GG',
                'name' => 'Guernsey',
            ],
            85 => [
                'id' => 86,
                'iso_code' => 'GY',
                'name' => 'Guyana',
            ],
            86 => [
                'id' => 87,
                'iso_code' => 'ZA',
                'name' => 'Güney Afrika',
            ],
            87 => [
                'id' => 88,
                'iso_code' => 'GS',
                'name' => 'Güney Georgia ve Güney Sandwich Adaları',
            ],
            88 => [
                'id' => 89,
                'iso_code' => 'KR',
                'name' => 'Güney Kore',
            ],
            89 => [
                'id' => 90,
                'iso_code' => 'CY',
                'name' => 'Güney Kıbrıs Rum Kesimi',
            ],
            90 => [
                'id' => 91,
                'iso_code' => 'GE',
                'name' => 'Gürcistan',
            ],
            91 => [
                'id' => 92,
                'iso_code' => 'HT',
                'name' => 'Haiti',
            ],
            92 => [
                'id' => 93,
                'iso_code' => 'HM',
                'name' => 'Heard Adası ve McDonald Adaları',
            ],
            93 => [
                'id' => 94,
                'iso_code' => 'IN',
                'name' => 'Hindistan',
            ],
            94 => [
                'id' => 95,
                'iso_code' => 'IO',
                'name' => 'Hint Okyanusu İngiliz Bölgesi',
            ],
            95 => [
                'id' => 96,
                'iso_code' => 'NL',
                'name' => 'Hollanda',
            ],
            96 => [
                'id' => 97,
                'iso_code' => 'AN',
                'name' => 'Hollanda Antilleri',
            ],
            97 => [
                'id' => 98,
                'iso_code' => 'HN',
                'name' => 'Honduras',
            ],
            98 => [
                'id' => 99,
                'iso_code' => 'HK',
                'name' => 'Hong Kong SAR - Çin',
            ],
            99 => [
                'id' => 100,
                'iso_code' => 'HR',
                'name' => 'Hırvatistan',
            ],
            100 => [
                'id' => 101,
                'iso_code' => 'IQ',
                'name' => 'Irak',
            ],
            101 => [
                'id' => 102,
                'iso_code' => 'JM',
                'name' => 'Jamaika',
            ],
            102 => [
                'id' => 103,
                'iso_code' => 'JP',
                'name' => 'Japonya',
            ],
            103 => [
                'id' => 104,
                'iso_code' => 'JE',
                'name' => 'Jersey',
            ],
            104 => [
                'id' => 105,
                'iso_code' => 'KH',
                'name' => 'Kamboçya',
            ],
            105 => [
                'id' => 106,
                'iso_code' => 'CM',
                'name' => 'Kamerun',
            ],
            106 => [
                'id' => 107,
                'iso_code' => 'CA',
                'name' => 'Kanada',
            ],
            107 => [
                'id' => 108,
                'iso_code' => 'ME',
                'name' => 'Karadağ',
            ],
            108 => [
                'id' => 109,
                'iso_code' => 'QA',
                'name' => 'Katar',
            ],
            109 => [
                'id' => 110,
                'iso_code' => 'KZ',
                'name' => 'Kazakistan',
            ],
            110 => [
                'id' => 111,
                'iso_code' => 'KE',
                'name' => 'Kenya',
            ],
            111 => [
                'id' => 112,
                'iso_code' => 'KI',
                'name' => 'Kiribati',
            ],
            112 => [
                'id' => 113,
                'iso_code' => 'CO',
                'name' => 'Kolombiya',
            ],
            113 => [
                'id' => 114,
                'iso_code' => 'KM',
                'name' => 'Komorlar',
            ],
            114 => [
                'id' => 115,
                'iso_code' => 'CG',
                'name' => 'Kongo - Brazavil',
            ],
            115 => [
                'id' => 116,
                'iso_code' => 'CD',
                'name' => 'Kongo - Kinşasa',
            ],
            116 => [
                'id' => 117,
                'iso_code' => 'CR',
                'name' => 'Kosta Rika',
            ],
            117 => [
                'id' => 118,
                'iso_code' => 'KW',
                'name' => 'Kuveyt',
            ],
            118 => [
                'id' => 119,
                'iso_code' => 'KP',
                'name' => 'Kuzey Kore',
            ],
            119 => [
                'id' => 120,
                'iso_code' => 'MP',
                'name' => 'Kuzey Mariana Adaları',
            ],
            120 => [
                'id' => 121,
                'iso_code' => 'KK',
                'name' => 'Kuzey Kıbrıs Türk Cumhuriyeti',
            ],
            121 => [
                'id' => 122,
                'iso_code' => 'CU',
                'name' => 'Küba',
            ],
            122 => [
                'id' => 123,
                'iso_code' => 'KG',
                'name' => 'Kırgızistan',
            ],
            123 => [
                'id' => 124,
                'iso_code' => 'LA',
                'name' => 'Laos',
            ],
            124 => [
                'id' => 125,
                'iso_code' => 'LS',
                'name' => 'Lesotho',
            ],
            125 => [
                'id' => 126,
                'iso_code' => 'LV',
                'name' => 'Letonya',
            ],
            126 => [
                'id' => 127,
                'iso_code' => 'LR',
                'name' => 'Liberya',
            ],
            127 => [
                'id' => 128,
                'iso_code' => 'LY',
                'name' => 'Libya',
            ],
            128 => [
                'id' => 129,
                'iso_code' => 'LI',
                'name' => 'Liechtenstein',
            ],
            129 => [
                'id' => 130,
                'iso_code' => 'LT',
                'name' => 'Litvanya',
            ],
            130 => [
                'id' => 131,
                'iso_code' => 'LB',
                'name' => 'Lübnan',
            ],
            131 => [
                'id' => 132,
                'iso_code' => 'LU',
                'name' => 'Lüksemburg',
            ],
            132 => [
                'id' => 133,
                'iso_code' => 'HU',
                'name' => 'Macaristan',
            ],
            133 => [
                'id' => 134,
                'iso_code' => 'MG',
                'name' => 'Madagaskar',
            ],
            134 => [
                'id' => 135,
                'iso_code' => 'MO',
                'name' => 'Makao S.A.R. Çin',
            ],
            135 => [
                'id' => 136,
                'iso_code' => 'MK',
                'name' => 'Makedonya',
            ],
            136 => [
                'id' => 137,
                'iso_code' => 'MW',
                'name' => 'Malavi',
            ],
            137 => [
                'id' => 138,
                'iso_code' => 'MV',
                'name' => 'Maldivler',
            ],
            138 => [
                'id' => 139,
                'iso_code' => 'MY',
                'name' => 'Malezya',
            ],
            139 => [
                'id' => 140,
                'iso_code' => 'ML',
                'name' => 'Mali',
            ],
            140 => [
                'id' => 141,
                'iso_code' => 'MT',
                'name' => 'Malta',
            ],
            141 => [
                'id' => 142,
                'iso_code' => 'IM',
                'name' => 'Man Adası',
            ],
            142 => [
                'id' => 143,
                'iso_code' => 'MH',
                'name' => 'Marshall Adaları',
            ],
            143 => [
                'id' => 144,
                'iso_code' => 'MQ',
                'name' => 'Martinik',
            ],
            144 => [
                'id' => 145,
                'iso_code' => 'MU',
                'name' => 'Mauritius',
            ],
            145 => [
                'id' => 146,
                'iso_code' => 'YT',
                'name' => 'Mayotte',
            ],
            146 => [
                'id' => 147,
                'iso_code' => 'MX',
                'name' => 'Meksika',
            ],
            147 => [
                'id' => 148,
                'iso_code' => 'FM',
                'name' => 'Mikronezya Federal Eyaletleri',
            ],
            148 => [
                'id' => 149,
                'iso_code' => 'MD',
                'name' => 'Moldova',
            ],
            149 => [
                'id' => 150,
                'iso_code' => 'MC',
                'name' => 'Monako',
            ],
            150 => [
                'id' => 151,
                'iso_code' => 'MS',
                'name' => 'Montserrat',
            ],
            151 => [
                'id' => 152,
                'iso_code' => 'MR',
                'name' => 'Moritanya',
            ],
            152 => [
                'id' => 153,
                'iso_code' => 'MZ',
                'name' => 'Mozambik',
            ],
            153 => [
                'id' => 154,
                'iso_code' => 'MN',
                'name' => 'Moğolistan',
            ],
            154 => [
                'id' => 155,
                'iso_code' => 'MM',
                'name' => 'Myanmar',
            ],
            155 => [
                'id' => 156,
                'iso_code' => 'EG',
                'name' => 'Mısır',
            ],
            156 => [
                'id' => 157,
                'iso_code' => 'NA',
                'name' => 'Namibya',
            ],
            157 => [
                'id' => 158,
                'iso_code' => 'NR',
                'name' => 'Nauru',
            ],
            158 => [
                'id' => 159,
                'iso_code' => 'NP',
                'name' => 'Nepal',
            ],
            159 => [
                'id' => 160,
                'iso_code' => 'NE',
                'name' => 'Nijer',
            ],
            160 => [
                'id' => 161,
                'iso_code' => 'NG',
                'name' => 'Nijerya',
            ],
            161 => [
                'id' => 162,
                'iso_code' => 'NI',
                'name' => 'Nikaragua',
            ],
            162 => [
                'id' => 163,
                'iso_code' => 'NU',
                'name' => 'Niue',
            ],
            163 => [
                'id' => 164,
                'iso_code' => 'NF',
                'name' => 'Norfolk Adası',
            ],
            164 => [
                'id' => 165,
                'iso_code' => 'NO',
                'name' => 'Norveç',
            ],
            165 => [
                'id' => 166,
                'iso_code' => 'CF',
                'name' => 'Orta Afrika Cumhuriyeti',
            ],
            166 => [
                'id' => 167,
                'iso_code' => 'PK',
                'name' => 'Pakistan',
            ],
            167 => [
                'id' => 168,
                'iso_code' => 'PW',
                'name' => 'Palau',
            ],
            168 => [
                'id' => 169,
                'iso_code' => 'PA',
                'name' => 'Panama',
            ],
            169 => [
                'id' => 170,
                'iso_code' => 'PG',
                'name' => 'Papua Yeni Gine',
            ],
            170 => [
                'id' => 171,
                'iso_code' => 'PY',
                'name' => 'Paraguay',
            ],
            171 => [
                'id' => 172,
                'iso_code' => 'PE',
                'name' => 'Peru',
            ],
            172 => [
                'id' => 173,
                'iso_code' => 'PN',
                'name' => 'Pitcairn',
            ],
            173 => [
                'id' => 174,
                'iso_code' => 'PL',
                'name' => 'Polonya',
            ],
            174 => [
                'id' => 175,
                'iso_code' => 'PT',
                'name' => 'Portekiz',
            ],
            175 => [
                'id' => 176,
                'iso_code' => 'PR',
                'name' => 'Porto Riko',
            ],
            176 => [
                'id' => 177,
                'iso_code' => 'RE',
                'name' => 'Reunion',
            ],
            177 => [
                'id' => 178,
                'iso_code' => 'RO',
                'name' => 'Romanya',
            ],
            178 => [
                'id' => 179,
                'iso_code' => 'RW',
                'name' => 'Ruanda',
            ],
            179 => [
                'id' => 180,
                'iso_code' => 'RU',
                'name' => 'Rusya Federasyonu',
            ],
            180 => [
                'id' => 181,
                'iso_code' => 'BL',
                'name' => 'Saint Barthelemy',
            ],
            181 => [
                'id' => 182,
                'iso_code' => 'SH',
                'name' => 'Saint Helena',
            ],
            182 => [
                'id' => 183,
                'iso_code' => 'KN',
                'name' => 'Saint Kitts ve Nevis',
            ],
            183 => [
                'id' => 184,
                'iso_code' => 'LC',
                'name' => 'Saint Lucia',
            ],
            184 => [
                'id' => 185,
                'iso_code' => 'MF',
                'name' => 'Saint Martin',
            ],
            185 => [
                'id' => 186,
                'iso_code' => 'PM',
                'name' => 'Saint Pierre ve Miquelon',
            ],
            186 => [
                'id' => 187,
                'iso_code' => 'VC',
                'name' => 'Saint Vincent ve Grenadinler',
            ],
            187 => [
                'id' => 188,
                'iso_code' => 'WS',
                'name' => 'Samoa',
            ],
            188 => [
                'id' => 189,
                'iso_code' => 'SM',
                'name' => 'San Marino',
            ],
            189 => [
                'id' => 190,
                'iso_code' => 'ST',
                'name' => 'Sao Tome ve Principe',
            ],
            190 => [
                'id' => 191,
                'iso_code' => 'SN',
                'name' => 'Senegal',
            ],
            191 => [
                'id' => 192,
                'iso_code' => 'SC',
                'name' => 'Seyşel Adaları',
            ],
            192 => [
                'id' => 193,
                'iso_code' => 'SL',
                'name' => 'Sierra Leone',
            ],
            193 => [
                'id' => 194,
                'iso_code' => 'SG',
                'name' => 'Singapur',
            ],
            194 => [
                'id' => 195,
                'iso_code' => 'SK',
                'name' => 'Slovakya',
            ],
            195 => [
                'id' => 196,
                'iso_code' => 'SI',
                'name' => 'Slovenya',
            ],
            196 => [
                'id' => 197,
                'iso_code' => 'SB',
                'name' => 'Solomon Adaları',
            ],
            197 => [
                'id' => 198,
                'iso_code' => 'SO',
                'name' => 'Somali',
            ],
            198 => [
                'id' => 199,
                'iso_code' => 'LK',
                'name' => 'Sri Lanka',
            ],
            199 => [
                'id' => 200,
                'iso_code' => 'SD',
                'name' => 'Sudan',
            ],
            200 => [
                'id' => 201,
                'iso_code' => 'SR',
                'name' => 'Surinam',
            ],
            201 => [
                'id' => 202,
                'iso_code' => 'SY',
                'name' => 'Suriye',
            ],
            202 => [
                'id' => 203,
                'iso_code' => 'SA',
                'name' => 'Suudi Arabistan',
            ],
            203 => [
                'id' => 204,
                'iso_code' => 'SJ',
                'name' => 'Svalbard ve Jan Mayen',
            ],
            204 => [
                'id' => 205,
                'iso_code' => 'SZ',
                'name' => 'Svaziland',
            ],
            205 => [
                'id' => 206,
                'iso_code' => 'RS',
                'name' => 'Sırbistan',
            ],
            206 => [
                'id' => 207,
                'iso_code' => 'CS',
                'name' => 'Sırbistan-Karadağ',
            ],
            207 => [
                'id' => 208,
                'iso_code' => 'TJ',
                'name' => 'Tacikistan',
            ],
            208 => [
                'id' => 209,
                'iso_code' => 'TZ',
                'name' => 'Tanzanya',
            ],
            209 => [
                'id' => 210,
                'iso_code' => 'TH',
                'name' => 'Tayland',
            ],
            210 => [
                'id' => 211,
                'iso_code' => 'TW',
                'name' => 'Tayvan',
            ],
            211 => [
                'id' => 212,
                'iso_code' => 'TG',
                'name' => 'Togo',
            ],
            212 => [
                'id' => 213,
                'iso_code' => 'TK',
                'name' => 'Tokelau',
            ],
            213 => [
                'id' => 214,
                'iso_code' => 'TO',
                'name' => 'Tonga',
            ],
            214 => [
                'id' => 215,
                'iso_code' => 'TT',
                'name' => 'Trinidad ve Tobago',
            ],
            215 => [
                'id' => 216,
                'iso_code' => 'TN',
                'name' => 'Tunus',
            ],
            216 => [
                'id' => 217,
                'iso_code' => 'TC',
                'name' => 'Turks ve Caicos Adaları',
            ],
            217 => [
                'id' => 218,
                'iso_code' => 'TV',
                'name' => 'Tuvalu',
            ],
            218 => [
                'id' => 219,
                'iso_code' => 'TM',
                'name' => 'Türkmenistan',
            ],
            219 => [
                'id' => 220,
                'iso_code' => 'UG',
                'name' => 'Uganda',
            ],
            220 => [
                'id' => 221,
                'iso_code' => 'UA',
                'name' => 'Ukrayna',
            ],
            221 => [
                'id' => 222,
                'iso_code' => 'OM',
                'name' => 'Umman',
            ],
            222 => [
                'id' => 223,
                'iso_code' => 'UY',
                'name' => 'Uruguay',
            ],
            223 => [
                'id' => 224,
                'iso_code' => 'VU',
                'name' => 'Vanuatu',
            ],
            224 => [
                'id' => 225,
                'iso_code' => 'VA',
                'name' => 'Vatikan',
            ],
            225 => [
                'id' => 226,
                'iso_code' => 'VE',
                'name' => 'Venezuela',
            ],
            226 => [
                'id' => 227,
                'iso_code' => 'VN',
                'name' => 'Vietnam',
            ],
            227 => [
                'id' => 228,
                'iso_code' => 'WF',
                'name' => 'Wallis ve Futuna',
            ],
            228 => [
                'id' => 229,
                'iso_code' => 'YE',
                'name' => 'Yemen',
            ],
            229 => [
                'id' => 230,
                'iso_code' => 'NC',
                'name' => 'Yeni Kaledonya',
            ],
            230 => [
                'id' => 231,
                'iso_code' => 'NZ',
                'name' => 'Yeni Zelanda',
            ],
            231 => [
                'id' => 232,
                'iso_code' => 'GR',
                'name' => 'Yunanistan',
            ],
            232 => [
                'id' => 233,
                'iso_code' => 'ZM',
                'name' => 'Zambiya',
            ],
            233 => [
                'id' => 234,
                'iso_code' => 'ZW',
                'name' => 'Zimbabve',
            ],
            234 => [
                'id' => 235,
                'iso_code' => 'TD',
                'name' => 'Çad',
            ],
            235 => [
                'id' => 236,
                'iso_code' => 'CZ',
                'name' => 'Çek Cumhuriyeti',
            ],
            236 => [
                'id' => 237,
                'iso_code' => 'CN',
                'name' => 'Çin',
            ],
            237 => [
                'id' => 238,
                'iso_code' => 'UZ',
                'name' => 'Özbekistan',
            ],
            238 => [
                'id' => 239,
                'iso_code' => 'JO',
                'name' => 'Ürdün',
            ],
            239 => [
                'id' => 240,
                'iso_code' => 'VG',
                'name' => 'İngiliz Virgin Adaları',
            ],
            240 => [
                'id' => 241,
                'iso_code' => 'IR',
                'name' => 'İran',
            ],
            241 => [
                'id' => 242,
                'iso_code' => 'IE',
                'name' => 'İrlanda',
            ],
            242 => [
                'id' => 243,
                'iso_code' => 'ES',
                'name' => 'İspanya',
            ],
            243 => [
                'id' => 244,
                'iso_code' => 'IL',
                'name' => 'İsrail',
            ],
            244 => [
                'id' => 245,
                'iso_code' => 'SE',
                'name' => 'İsveç',
            ],
            245 => [
                'id' => 246,
                'iso_code' => 'CH',
                'name' => 'İsviçre',
            ],
            246 => [
                'id' => 247,
                'iso_code' => 'IT',
                'name' => 'İtalya',
            ],
            247 => [
                'id' => 248,
                'iso_code' => 'IS',
                'name' => 'İzlanda',
            ],
            248 => [
                'id' => 249,
                'iso_code' => 'CL',
                'name' => 'Şili',
            ],
        ]);
    }
}
