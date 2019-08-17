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

        \DB::table('geozone_countries')->insert(array(
            0 => array(
                'id' => 1,
                'iso_code' => 'TR',
                'name' => 'Türkiye',
            ),
            1 => array(
                'id' => 2,
                'iso_code' => 'AF',
                'name' => 'Afganistan',
            ),
            2 => array(
                'id' => 3,
                'iso_code' => 'AX',
                'name' => 'Aland Adaları',
            ),
            3 => array(
                'id' => 4,
                'iso_code' => 'DE',
                'name' => 'Almanya',
            ),
            4 => array(
                'id' => 5,
                'iso_code' => 'US',
                'name' => 'Amerika Birleşik Devletleri',
            ),
            5 => array(
                'id' => 6,
                'iso_code' => 'UM',
                'name' => 'Amerika Birleşik Devletleri Küçük Dış Adaları',
            ),
            6 => array(
                'id' => 7,
                'iso_code' => 'AS',
                'name' => 'Amerikan Samoası',
            ),
            7 => array(
                'id' => 8,
                'iso_code' => 'VI',
                'name' => 'ABD Virgin Adaları',
            ),
            8 => array(
                'id' => 9,
                'iso_code' => 'AD',
                'name' => 'Andorra',
            ),
            9 => array(
                'id' => 10,
                'iso_code' => 'AO',
                'name' => 'Angola',
            ),
            10 => array(
                'id' => 11,
                'iso_code' => 'AI',
                'name' => 'Anguilla',
            ),
            11 => array(
                'id' => 12,
                'iso_code' => 'AQ',
                'name' => 'Antarktika',
            ),
            12 => array(
                'id' => 13,
                'iso_code' => 'AG',
                'name' => 'Antigua ve Barbuda',
            ),
            13 => array(
                'id' => 14,
                'iso_code' => 'AR',
                'name' => 'Arjantin',
            ),
            14 => array(
                'id' => 15,
                'iso_code' => 'AL',
                'name' => 'Arnavutluk',
            ),
            15 => array(
                'id' => 16,
                'iso_code' => 'AW',
                'name' => 'Aruba',
            ),
            16 => array(
                'id' => 17,
                'iso_code' => 'AU',
                'name' => 'Avustralya',
            ),
            17 => array(
                'id' => 18,
                'iso_code' => 'AT',
                'name' => 'Avusturya',
            ),
            18 => array(
                'id' => 19,
                'iso_code' => 'AZ',
                'name' => 'Azerbaycan',
            ),
            19 => array(
                'id' => 20,
                'iso_code' => 'BS',
                'name' => 'Bahamalar',
            ),
            20 => array(
                'id' => 21,
                'iso_code' => 'BH',
                'name' => 'Bahreyn',
            ),
            21 => array(
                'id' => 22,
                'iso_code' => 'BD',
                'name' => 'Bangladeş',
            ),
            22 => array(
                'id' => 23,
                'iso_code' => 'BB',
                'name' => 'Barbados',
            ),
            23 => array(
                'id' => 24,
                'iso_code' => 'EH',
                'name' => 'Batı Sahara',
            ),
            24 => array(
                'id' => 25,
                'iso_code' => 'BZ',
                'name' => 'Belize',
            ),
            25 => array(
                'id' => 26,
                'iso_code' => 'BE',
                'name' => 'Belçika',
            ),
            26 => array(
                'id' => 27,
                'iso_code' => 'BJ',
                'name' => 'Benin',
            ),
            27 => array(
                'id' => 28,
                'iso_code' => 'BM',
                'name' => 'Bermuda',
            ),
            28 => array(
                'id' => 29,
                'iso_code' => 'BY',
                'name' => 'Beyaz Rusya',
            ),
            29 => array(
                'id' => 30,
                'iso_code' => 'BT',
                'name' => 'Bhutan',
            ),
            30 => array(
                'id' => 31,
                'iso_code' => 'ZZ',
                'name' => 'Bilinmeyen veya Geçersiz Bölge',
            ),
            31 => array(
                'id' => 32,
                'iso_code' => 'AE',
                'name' => 'Birleşik Arap Emirlikleri',
            ),
            32 => array(
                'id' => 33,
                'iso_code' => 'GB',
                'name' => 'Birleşik Krallık',
            ),
            33 => array(
                'id' => 34,
                'iso_code' => 'BO',
                'name' => 'Bolivya',
            ),
            34 => array(
                'id' => 35,
                'iso_code' => 'BA',
                'name' => 'Bosna Hersek',
            ),
            35 => array(
                'id' => 36,
                'iso_code' => 'BW',
                'name' => 'Botsvana',
            ),
            36 => array(
                'id' => 37,
                'iso_code' => 'BV',
                'name' => 'Bouvet Adası',
            ),
            37 => array(
                'id' => 38,
                'iso_code' => 'BR',
                'name' => 'Brezilya',
            ),
            38 => array(
                'id' => 39,
                'iso_code' => 'BN',
                'name' => 'Brunei',
            ),
            39 => array(
                'id' => 40,
                'iso_code' => 'BG',
                'name' => 'Bulgaristan',
            ),
            40 => array(
                'id' => 41,
                'iso_code' => 'BF',
                'name' => 'Burkina Faso',
            ),
            41 => array(
                'id' => 42,
                'iso_code' => 'BI',
                'name' => 'Burundi',
            ),
            42 => array(
                'id' => 43,
                'iso_code' => 'CV',
                'name' => 'Cape Verde',
            ),
            43 => array(
                'id' => 44,
                'iso_code' => 'KY',
                'name' => 'Cayman Adaları',
            ),
            44 => array(
                'id' => 45,
                'iso_code' => 'GI',
                'name' => 'Cebelitarık',
            ),
            45 => array(
                'id' => 46,
                'iso_code' => 'DZ',
                'name' => 'Cezayir',
            ),
            46 => array(
                'id' => 47,
                'iso_code' => 'CX',
                'name' => 'Christmas Adası',
            ),
            47 => array(
                'id' => 48,
                'iso_code' => 'DJ',
                'name' => 'Cibuti',
            ),
            48 => array(
                'id' => 49,
                'iso_code' => 'CC',
                'name' => 'Cocos Adaları',
            ),
            49 => array(
                'id' => 50,
                'iso_code' => 'CK',
                'name' => 'Cook Adaları',
            ),
            50 => array(
                'id' => 51,
                'iso_code' => 'DK',
                'name' => 'Danimarka',
            ),
            51 => array(
                'id' => 52,
                'iso_code' => 'DO',
                'name' => 'Dominik Cumhuriyeti',
            ),
            52 => array(
                'id' => 53,
                'iso_code' => 'DM',
                'name' => 'Dominika',
            ),
            53 => array(
                'id' => 54,
                'iso_code' => 'TL',
                'name' => 'Doğu Timor',
            ),
            54 => array(
                'id' => 55,
                'iso_code' => 'EC',
                'name' => 'Ekvador',
            ),
            55 => array(
                'id' => 56,
                'iso_code' => 'GQ',
                'name' => 'Ekvator Ginesi',
            ),
            56 => array(
                'id' => 57,
                'iso_code' => 'SV',
                'name' => 'El Salvador',
            ),
            57 => array(
                'id' => 58,
                'iso_code' => 'ID',
                'name' => 'Endonezya',
            ),
            58 => array(
                'id' => 59,
                'iso_code' => 'ER',
                'name' => 'Eritre',
            ),
            59 => array(
                'id' => 60,
                'iso_code' => 'AM',
                'name' => 'Ermenistan',
            ),
            60 => array(
                'id' => 61,
                'iso_code' => 'EE',
                'name' => 'Estonya',
            ),
            61 => array(
                'id' => 62,
                'iso_code' => 'ET',
                'name' => 'Etiyopya',
            ),
            62 => array(
                'id' => 63,
                'iso_code' => 'FK',
                'name' => 'Falkland Adaları',
            ),
            63 => array(
                'id' => 64,
                'iso_code' => 'FO',
                'name' => 'Faroe Adaları',
            ),
            64 => array(
                'id' => 65,
                'iso_code' => 'MA',
                'name' => 'Fas',
            ),
            65 => array(
                'id' => 66,
                'iso_code' => 'FJ',
                'name' => 'Fiji',
            ),
            66 => array(
                'id' => 67,
                'iso_code' => 'CI',
                'name' => 'Fildişi Sahili',
            ),
            67 => array(
                'id' => 68,
                'iso_code' => 'PH',
                'name' => 'Filipinler',
            ),
            68 => array(
                'id' => 69,
                'iso_code' => 'PS',
                'name' => 'Filistin Bölgesi',
            ),
            69 => array(
                'id' => 70,
                'iso_code' => 'FI',
                'name' => 'Finlandiya',
            ),
            70 => array(
                'id' => 71,
                'iso_code' => 'FR',
                'name' => 'Fransa',
            ),
            71 => array(
                'id' => 72,
                'iso_code' => 'GF',
                'name' => 'Fransız Guyanası',
            ),
            72 => array(
                'id' => 73,
                'iso_code' => 'TF',
                'name' => 'Fransız Güney Bölgeleri',
            ),
            73 => array(
                'id' => 74,
                'iso_code' => 'PF',
                'name' => 'Fransız Polinezyası',
            ),
            74 => array(
                'id' => 75,
                'iso_code' => 'GA',
                'name' => 'Gabon',
            ),
            75 => array(
                'id' => 76,
                'iso_code' => 'GM',
                'name' => 'Gambiya',
            ),
            76 => array(
                'id' => 77,
                'iso_code' => 'GH',
                'name' => 'Gana',
            ),
            77 => array(
                'id' => 78,
                'iso_code' => 'GN',
                'name' => 'Gine',
            ),
            78 => array(
                'id' => 79,
                'iso_code' => 'GW',
                'name' => 'Gine-Bissau',
            ),
            79 => array(
                'id' => 80,
                'iso_code' => 'GD',
                'name' => 'Grenada',
            ),
            80 => array(
                'id' => 81,
                'iso_code' => 'GL',
                'name' => 'Grönland',
            ),
            81 => array(
                'id' => 82,
                'iso_code' => 'GP',
                'name' => 'Guadeloupe',
            ),
            82 => array(
                'id' => 83,
                'iso_code' => 'GU',
                'name' => 'Guam',
            ),
            83 => array(
                'id' => 84,
                'iso_code' => 'GT',
                'name' => 'Guatemala',
            ),
            84 => array(
                'id' => 85,
                'iso_code' => 'GG',
                'name' => 'Guernsey',
            ),
            85 => array(
                'id' => 86,
                'iso_code' => 'GY',
                'name' => 'Guyana',
            ),
            86 => array(
                'id' => 87,
                'iso_code' => 'ZA',
                'name' => 'Güney Afrika',
            ),
            87 => array(
                'id' => 88,
                'iso_code' => 'GS',
                'name' => 'Güney Georgia ve Güney Sandwich Adaları',
            ),
            88 => array(
                'id' => 89,
                'iso_code' => 'KR',
                'name' => 'Güney Kore',
            ),
            89 => array(
                'id' => 90,
                'iso_code' => 'CY',
                'name' => 'Güney Kıbrıs Rum Kesimi',
            ),
            90 => array(
                'id' => 91,
                'iso_code' => 'GE',
                'name' => 'Gürcistan',
            ),
            91 => array(
                'id' => 92,
                'iso_code' => 'HT',
                'name' => 'Haiti',
            ),
            92 => array(
                'id' => 93,
                'iso_code' => 'HM',
                'name' => 'Heard Adası ve McDonald Adaları',
            ),
            93 => array(
                'id' => 94,
                'iso_code' => 'IN',
                'name' => 'Hindistan',
            ),
            94 => array(
                'id' => 95,
                'iso_code' => 'IO',
                'name' => 'Hint Okyanusu İngiliz Bölgesi',
            ),
            95 => array(
                'id' => 96,
                'iso_code' => 'NL',
                'name' => 'Hollanda',
            ),
            96 => array(
                'id' => 97,
                'iso_code' => 'AN',
                'name' => 'Hollanda Antilleri',
            ),
            97 => array(
                'id' => 98,
                'iso_code' => 'HN',
                'name' => 'Honduras',
            ),
            98 => array(
                'id' => 99,
                'iso_code' => 'HK',
                'name' => 'Hong Kong SAR - Çin',
            ),
            99 => array(
                'id' => 100,
                'iso_code' => 'HR',
                'name' => 'Hırvatistan',
            ),
            100 => array(
                'id' => 101,
                'iso_code' => 'IQ',
                'name' => 'Irak',
            ),
            101 => array(
                'id' => 102,
                'iso_code' => 'JM',
                'name' => 'Jamaika',
            ),
            102 => array(
                'id' => 103,
                'iso_code' => 'JP',
                'name' => 'Japonya',
            ),
            103 => array(
                'id' => 104,
                'iso_code' => 'JE',
                'name' => 'Jersey',
            ),
            104 => array(
                'id' => 105,
                'iso_code' => 'KH',
                'name' => 'Kamboçya',
            ),
            105 => array(
                'id' => 106,
                'iso_code' => 'CM',
                'name' => 'Kamerun',
            ),
            106 => array(
                'id' => 107,
                'iso_code' => 'CA',
                'name' => 'Kanada',
            ),
            107 => array(
                'id' => 108,
                'iso_code' => 'ME',
                'name' => 'Karadağ',
            ),
            108 => array(
                'id' => 109,
                'iso_code' => 'QA',
                'name' => 'Katar',
            ),
            109 => array(
                'id' => 110,
                'iso_code' => 'KZ',
                'name' => 'Kazakistan',
            ),
            110 => array(
                'id' => 111,
                'iso_code' => 'KE',
                'name' => 'Kenya',
            ),
            111 => array(
                'id' => 112,
                'iso_code' => 'KI',
                'name' => 'Kiribati',
            ),
            112 => array(
                'id' => 113,
                'iso_code' => 'CO',
                'name' => 'Kolombiya',
            ),
            113 => array(
                'id' => 114,
                'iso_code' => 'KM',
                'name' => 'Komorlar',
            ),
            114 => array(
                'id' => 115,
                'iso_code' => 'CG',
                'name' => 'Kongo - Brazavil',
            ),
            115 => array(
                'id' => 116,
                'iso_code' => 'CD',
                'name' => 'Kongo - Kinşasa',
            ),
            116 => array(
                'id' => 117,
                'iso_code' => 'CR',
                'name' => 'Kosta Rika',
            ),
            117 => array(
                'id' => 118,
                'iso_code' => 'KW',
                'name' => 'Kuveyt',
            ),
            118 => array(
                'id' => 119,
                'iso_code' => 'KP',
                'name' => 'Kuzey Kore',
            ),
            119 => array(
                'id' => 120,
                'iso_code' => 'MP',
                'name' => 'Kuzey Mariana Adaları',
            ),
            120 => array(
                'id' => 121,
                'iso_code' => 'KK',
                'name' => 'Kuzey Kıbrıs Türk Cumhuriyeti',
            ),
            121 => array(
                'id' => 122,
                'iso_code' => 'CU',
                'name' => 'Küba',
            ),
            122 => array(
                'id' => 123,
                'iso_code' => 'KG',
                'name' => 'Kırgızistan',
            ),
            123 => array(
                'id' => 124,
                'iso_code' => 'LA',
                'name' => 'Laos',
            ),
            124 => array(
                'id' => 125,
                'iso_code' => 'LS',
                'name' => 'Lesotho',
            ),
            125 => array(
                'id' => 126,
                'iso_code' => 'LV',
                'name' => 'Letonya',
            ),
            126 => array(
                'id' => 127,
                'iso_code' => 'LR',
                'name' => 'Liberya',
            ),
            127 => array(
                'id' => 128,
                'iso_code' => 'LY',
                'name' => 'Libya',
            ),
            128 => array(
                'id' => 129,
                'iso_code' => 'LI',
                'name' => 'Liechtenstein',
            ),
            129 => array(
                'id' => 130,
                'iso_code' => 'LT',
                'name' => 'Litvanya',
            ),
            130 => array(
                'id' => 131,
                'iso_code' => 'LB',
                'name' => 'Lübnan',
            ),
            131 => array(
                'id' => 132,
                'iso_code' => 'LU',
                'name' => 'Lüksemburg',
            ),
            132 => array(
                'id' => 133,
                'iso_code' => 'HU',
                'name' => 'Macaristan',
            ),
            133 => array(
                'id' => 134,
                'iso_code' => 'MG',
                'name' => 'Madagaskar',
            ),
            134 => array(
                'id' => 135,
                'iso_code' => 'MO',
                'name' => 'Makao S.A.R. Çin',
            ),
            135 => array(
                'id' => 136,
                'iso_code' => 'MK',
                'name' => 'Makedonya',
            ),
            136 => array(
                'id' => 137,
                'iso_code' => 'MW',
                'name' => 'Malavi',
            ),
            137 => array(
                'id' => 138,
                'iso_code' => 'MV',
                'name' => 'Maldivler',
            ),
            138 => array(
                'id' => 139,
                'iso_code' => 'MY',
                'name' => 'Malezya',
            ),
            139 => array(
                'id' => 140,
                'iso_code' => 'ML',
                'name' => 'Mali',
            ),
            140 => array(
                'id' => 141,
                'iso_code' => 'MT',
                'name' => 'Malta',
            ),
            141 => array(
                'id' => 142,
                'iso_code' => 'IM',
                'name' => 'Man Adası',
            ),
            142 => array(
                'id' => 143,
                'iso_code' => 'MH',
                'name' => 'Marshall Adaları',
            ),
            143 => array(
                'id' => 144,
                'iso_code' => 'MQ',
                'name' => 'Martinik',
            ),
            144 => array(
                'id' => 145,
                'iso_code' => 'MU',
                'name' => 'Mauritius',
            ),
            145 => array(
                'id' => 146,
                'iso_code' => 'YT',
                'name' => 'Mayotte',
            ),
            146 => array(
                'id' => 147,
                'iso_code' => 'MX',
                'name' => 'Meksika',
            ),
            147 => array(
                'id' => 148,
                'iso_code' => 'FM',
                'name' => 'Mikronezya Federal Eyaletleri',
            ),
            148 => array(
                'id' => 149,
                'iso_code' => 'MD',
                'name' => 'Moldova',
            ),
            149 => array(
                'id' => 150,
                'iso_code' => 'MC',
                'name' => 'Monako',
            ),
            150 => array(
                'id' => 151,
                'iso_code' => 'MS',
                'name' => 'Montserrat',
            ),
            151 => array(
                'id' => 152,
                'iso_code' => 'MR',
                'name' => 'Moritanya',
            ),
            152 => array(
                'id' => 153,
                'iso_code' => 'MZ',
                'name' => 'Mozambik',
            ),
            153 => array(
                'id' => 154,
                'iso_code' => 'MN',
                'name' => 'Moğolistan',
            ),
            154 => array(
                'id' => 155,
                'iso_code' => 'MM',
                'name' => 'Myanmar',
            ),
            155 => array(
                'id' => 156,
                'iso_code' => 'EG',
                'name' => 'Mısır',
            ),
            156 => array(
                'id' => 157,
                'iso_code' => 'NA',
                'name' => 'Namibya',
            ),
            157 => array(
                'id' => 158,
                'iso_code' => 'NR',
                'name' => 'Nauru',
            ),
            158 => array(
                'id' => 159,
                'iso_code' => 'NP',
                'name' => 'Nepal',
            ),
            159 => array(
                'id' => 160,
                'iso_code' => 'NE',
                'name' => 'Nijer',
            ),
            160 => array(
                'id' => 161,
                'iso_code' => 'NG',
                'name' => 'Nijerya',
            ),
            161 => array(
                'id' => 162,
                'iso_code' => 'NI',
                'name' => 'Nikaragua',
            ),
            162 => array(
                'id' => 163,
                'iso_code' => 'NU',
                'name' => 'Niue',
            ),
            163 => array(
                'id' => 164,
                'iso_code' => 'NF',
                'name' => 'Norfolk Adası',
            ),
            164 => array(
                'id' => 165,
                'iso_code' => 'NO',
                'name' => 'Norveç',
            ),
            165 => array(
                'id' => 166,
                'iso_code' => 'CF',
                'name' => 'Orta Afrika Cumhuriyeti',
            ),
            166 => array(
                'id' => 167,
                'iso_code' => 'PK',
                'name' => 'Pakistan',
            ),
            167 => array(
                'id' => 168,
                'iso_code' => 'PW',
                'name' => 'Palau',
            ),
            168 => array(
                'id' => 169,
                'iso_code' => 'PA',
                'name' => 'Panama',
            ),
            169 => array(
                'id' => 170,
                'iso_code' => 'PG',
                'name' => 'Papua Yeni Gine',
            ),
            170 => array(
                'id' => 171,
                'iso_code' => 'PY',
                'name' => 'Paraguay',
            ),
            171 => array(
                'id' => 172,
                'iso_code' => 'PE',
                'name' => 'Peru',
            ),
            172 => array(
                'id' => 173,
                'iso_code' => 'PN',
                'name' => 'Pitcairn',
            ),
            173 => array(
                'id' => 174,
                'iso_code' => 'PL',
                'name' => 'Polonya',
            ),
            174 => array(
                'id' => 175,
                'iso_code' => 'PT',
                'name' => 'Portekiz',
            ),
            175 => array(
                'id' => 176,
                'iso_code' => 'PR',
                'name' => 'Porto Riko',
            ),
            176 => array(
                'id' => 177,
                'iso_code' => 'RE',
                'name' => 'Reunion',
            ),
            177 => array(
                'id' => 178,
                'iso_code' => 'RO',
                'name' => 'Romanya',
            ),
            178 => array(
                'id' => 179,
                'iso_code' => 'RW',
                'name' => 'Ruanda',
            ),
            179 => array(
                'id' => 180,
                'iso_code' => 'RU',
                'name' => 'Rusya Federasyonu',
            ),
            180 => array(
                'id' => 181,
                'iso_code' => 'BL',
                'name' => 'Saint Barthelemy',
            ),
            181 => array(
                'id' => 182,
                'iso_code' => 'SH',
                'name' => 'Saint Helena',
            ),
            182 => array(
                'id' => 183,
                'iso_code' => 'KN',
                'name' => 'Saint Kitts ve Nevis',
            ),
            183 => array(
                'id' => 184,
                'iso_code' => 'LC',
                'name' => 'Saint Lucia',
            ),
            184 => array(
                'id' => 185,
                'iso_code' => 'MF',
                'name' => 'Saint Martin',
            ),
            185 => array(
                'id' => 186,
                'iso_code' => 'PM',
                'name' => 'Saint Pierre ve Miquelon',
            ),
            186 => array(
                'id' => 187,
                'iso_code' => 'VC',
                'name' => 'Saint Vincent ve Grenadinler',
            ),
            187 => array(
                'id' => 188,
                'iso_code' => 'WS',
                'name' => 'Samoa',
            ),
            188 => array(
                'id' => 189,
                'iso_code' => 'SM',
                'name' => 'San Marino',
            ),
            189 => array(
                'id' => 190,
                'iso_code' => 'ST',
                'name' => 'Sao Tome ve Principe',
            ),
            190 => array(
                'id' => 191,
                'iso_code' => 'SN',
                'name' => 'Senegal',
            ),
            191 => array(
                'id' => 192,
                'iso_code' => 'SC',
                'name' => 'Seyşel Adaları',
            ),
            192 => array(
                'id' => 193,
                'iso_code' => 'SL',
                'name' => 'Sierra Leone',
            ),
            193 => array(
                'id' => 194,
                'iso_code' => 'SG',
                'name' => 'Singapur',
            ),
            194 => array(
                'id' => 195,
                'iso_code' => 'SK',
                'name' => 'Slovakya',
            ),
            195 => array(
                'id' => 196,
                'iso_code' => 'SI',
                'name' => 'Slovenya',
            ),
            196 => array(
                'id' => 197,
                'iso_code' => 'SB',
                'name' => 'Solomon Adaları',
            ),
            197 => array(
                'id' => 198,
                'iso_code' => 'SO',
                'name' => 'Somali',
            ),
            198 => array(
                'id' => 199,
                'iso_code' => 'LK',
                'name' => 'Sri Lanka',
            ),
            199 => array(
                'id' => 200,
                'iso_code' => 'SD',
                'name' => 'Sudan',
            ),
            200 => array(
                'id' => 201,
                'iso_code' => 'SR',
                'name' => 'Surinam',
            ),
            201 => array(
                'id' => 202,
                'iso_code' => 'SY',
                'name' => 'Suriye',
            ),
            202 => array(
                'id' => 203,
                'iso_code' => 'SA',
                'name' => 'Suudi Arabistan',
            ),
            203 => array(
                'id' => 204,
                'iso_code' => 'SJ',
                'name' => 'Svalbard ve Jan Mayen',
            ),
            204 => array(
                'id' => 205,
                'iso_code' => 'SZ',
                'name' => 'Svaziland',
            ),
            205 => array(
                'id' => 206,
                'iso_code' => 'RS',
                'name' => 'Sırbistan',
            ),
            206 => array(
                'id' => 207,
                'iso_code' => 'CS',
                'name' => 'Sırbistan-Karadağ',
            ),
            207 => array(
                'id' => 208,
                'iso_code' => 'TJ',
                'name' => 'Tacikistan',
            ),
            208 => array(
                'id' => 209,
                'iso_code' => 'TZ',
                'name' => 'Tanzanya',
            ),
            209 => array(
                'id' => 210,
                'iso_code' => 'TH',
                'name' => 'Tayland',
            ),
            210 => array(
                'id' => 211,
                'iso_code' => 'TW',
                'name' => 'Tayvan',
            ),
            211 => array(
                'id' => 212,
                'iso_code' => 'TG',
                'name' => 'Togo',
            ),
            212 => array(
                'id' => 213,
                'iso_code' => 'TK',
                'name' => 'Tokelau',
            ),
            213 => array(
                'id' => 214,
                'iso_code' => 'TO',
                'name' => 'Tonga',
            ),
            214 => array(
                'id' => 215,
                'iso_code' => 'TT',
                'name' => 'Trinidad ve Tobago',
            ),
            215 => array(
                'id' => 216,
                'iso_code' => 'TN',
                'name' => 'Tunus',
            ),
            216 => array(
                'id' => 217,
                'iso_code' => 'TC',
                'name' => 'Turks ve Caicos Adaları',
            ),
            217 => array(
                'id' => 218,
                'iso_code' => 'TV',
                'name' => 'Tuvalu',
            ),
            218 => array(
                'id' => 219,
                'iso_code' => 'TM',
                'name' => 'Türkmenistan',
            ),
            219 => array(
                'id' => 220,
                'iso_code' => 'UG',
                'name' => 'Uganda',
            ),
            220 => array(
                'id' => 221,
                'iso_code' => 'UA',
                'name' => 'Ukrayna',
            ),
            221 => array(
                'id' => 222,
                'iso_code' => 'OM',
                'name' => 'Umman',
            ),
            222 => array(
                'id' => 223,
                'iso_code' => 'UY',
                'name' => 'Uruguay',
            ),
            223 => array(
                'id' => 224,
                'iso_code' => 'VU',
                'name' => 'Vanuatu',
            ),
            224 => array(
                'id' => 225,
                'iso_code' => 'VA',
                'name' => 'Vatikan',
            ),
            225 => array(
                'id' => 226,
                'iso_code' => 'VE',
                'name' => 'Venezuela',
            ),
            226 => array(
                'id' => 227,
                'iso_code' => 'VN',
                'name' => 'Vietnam',
            ),
            227 => array(
                'id' => 228,
                'iso_code' => 'WF',
                'name' => 'Wallis ve Futuna',
            ),
            228 => array(
                'id' => 229,
                'iso_code' => 'YE',
                'name' => 'Yemen',
            ),
            229 => array(
                'id' => 230,
                'iso_code' => 'NC',
                'name' => 'Yeni Kaledonya',
            ),
            230 => array(
                'id' => 231,
                'iso_code' => 'NZ',
                'name' => 'Yeni Zelanda',
            ),
            231 => array(
                'id' => 232,
                'iso_code' => 'GR',
                'name' => 'Yunanistan',
            ),
            232 => array(
                'id' => 233,
                'iso_code' => 'ZM',
                'name' => 'Zambiya',
            ),
            233 => array(
                'id' => 234,
                'iso_code' => 'ZW',
                'name' => 'Zimbabve',
            ),
            234 => array(
                'id' => 235,
                'iso_code' => 'TD',
                'name' => 'Çad',
            ),
            235 => array(
                'id' => 236,
                'iso_code' => 'CZ',
                'name' => 'Çek Cumhuriyeti',
            ),
            236 => array(
                'id' => 237,
                'iso_code' => 'CN',
                'name' => 'Çin',
            ),
            237 => array(
                'id' => 238,
                'iso_code' => 'UZ',
                'name' => 'Özbekistan',
            ),
            238 => array(
                'id' => 239,
                'iso_code' => 'JO',
                'name' => 'Ürdün',
            ),
            239 => array(
                'id' => 240,
                'iso_code' => 'VG',
                'name' => 'İngiliz Virgin Adaları',
            ),
            240 => array(
                'id' => 241,
                'iso_code' => 'IR',
                'name' => 'İran',
            ),
            241 => array(
                'id' => 242,
                'iso_code' => 'IE',
                'name' => 'İrlanda',
            ),
            242 => array(
                'id' => 243,
                'iso_code' => 'ES',
                'name' => 'İspanya',
            ),
            243 => array(
                'id' => 244,
                'iso_code' => 'IL',
                'name' => 'İsrail',
            ),
            244 => array(
                'id' => 245,
                'iso_code' => 'SE',
                'name' => 'İsveç',
            ),
            245 => array(
                'id' => 246,
                'iso_code' => 'CH',
                'name' => 'İsviçre',
            ),
            246 => array(
                'id' => 247,
                'iso_code' => 'IT',
                'name' => 'İtalya',
            ),
            247 => array(
                'id' => 248,
                'iso_code' => 'IS',
                'name' => 'İzlanda',
            ),
            248 => array(
                'id' => 249,
                'iso_code' => 'CL',
                'name' => 'Şili',
            ),
        ));
    }
}
