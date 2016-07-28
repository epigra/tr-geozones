<?php namespace Epigra\TrGeoZones\Database\Seeds;

use Illuminate\Database\Seeder;
use Epigra\TrGeoZones\Models\City;
use Epigra\TrGeoZones\Models\Country;


class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $tr_cities = array(
          array('id' => '1','name' => 'Adana','country_id' => 1),
          array('id' => '2','name' => 'Adıyaman','country_id' => 1),
          array('id' => '3','name' => 'Afyonkarahisar','country_id' => 1),
          array('id' => '4','name' => 'Ağrı','country_id' => 1),
          array('id' => '5','name' => 'Amasya','country_id' => 1),
          array('id' => '6','name' => 'Ankara','country_id' => 1),
          array('id' => '7','name' => 'Antalya','country_id' => 1),
          array('id' => '8','name' => 'Artvin','country_id' => 1),
          array('id' => '9','name' => 'Aydın','country_id' => 1),
          array('id' => '10','name' => 'Balıkesir','country_id' => 1),
          array('id' => '11','name' => 'Bilecik','country_id' => 1),
          array('id' => '12','name' => 'Bingöl','country_id' => 1),
          array('id' => '13','name' => 'Bitlis','country_id' => 1),
          array('id' => '14','name' => 'Bolu','country_id' => 1),
          array('id' => '15','name' => 'Burdur','country_id' => 1),
          array('id' => '16','name' => 'Bursa','country_id' => 1),
          array('id' => '17','name' => 'Çanakkale','country_id' => 1),
          array('id' => '18','name' => 'Çankırı','country_id' => 1),
          array('id' => '19','name' => 'Çorum','country_id' => 1),
          array('id' => '20','name' => 'Denizli','country_id' => 1),
          array('id' => '21','name' => 'Diyarbakır','country_id' => 1),
          array('id' => '22','name' => 'Edirne','country_id' => 1),
          array('id' => '23','name' => 'Elazığ','country_id' => 1),
          array('id' => '24','name' => 'Erzincan','country_id' => 1),
          array('id' => '25','name' => 'Erzurum','country_id' => 1),
          array('id' => '26','name' => 'Eskişehir','country_id' => 1),
          array('id' => '27','name' => 'Gaziantep','country_id' => 1),
          array('id' => '28','name' => 'Giresun','country_id' => 1),
          array('id' => '29','name' => 'Gümüşhane','country_id' => 1),
          array('id' => '30','name' => 'Hakkari','country_id' => 1),
          array('id' => '31','name' => 'Hatay','country_id' => 1),
          array('id' => '32','name' => 'Isparta','country_id' => 1),
          array('id' => '33','name' => 'Mersin','country_id' => 1),
          array('id' => '34','name' => 'İstanbul','country_id' => 1),
          array('id' => '35','name' => 'İzmir','country_id' => 1),
          array('id' => '36','name' => 'Kars','country_id' => 1),
          array('id' => '37','name' => 'Kastamonu','country_id' => 1),
          array('id' => '38','name' => 'Kayseri','country_id' => 1),
          array('id' => '39','name' => 'Kırklareli','country_id' => 1),
          array('id' => '40','name' => 'Kırşehir','country_id' => 1),
          array('id' => '41','name' => 'Kocaeli','country_id' => 1),
          array('id' => '42','name' => 'Konya','country_id' => 1),
          array('id' => '43','name' => 'Kütahya','country_id' => 1),
          array('id' => '44','name' => 'Malatya','country_id' => 1),
          array('id' => '45','name' => 'Manisa','country_id' => 1),
          array('id' => '46','name' => 'Kahramanmaraş','country_id' => 1),
          array('id' => '47','name' => 'Mardin','country_id' => 1),
          array('id' => '48','name' => 'Muğla','country_id' => 1),
          array('id' => '49','name' => 'Muş','country_id' => 1),
          array('id' => '50','name' => 'Nevşehir','country_id' => 1),
          array('id' => '51','name' => 'Niğde','country_id' => 1),
          array('id' => '52','name' => 'Ordu','country_id' => 1),
          array('id' => '53','name' => 'Rize','country_id' => 1),
          array('id' => '54','name' => 'Sakarya','country_id' => 1),
          array('id' => '55','name' => 'Samsun','country_id' => 1),
          array('id' => '56','name' => 'Siirt','country_id' => 1),
          array('id' => '57','name' => 'Sinop','country_id' => 1),
          array('id' => '58','name' => 'Sivas','country_id' => 1),
          array('id' => '59','name' => 'Tekirdağ','country_id' => 1),
          array('id' => '60','name' => 'Tokat','country_id' => 1),
          array('id' => '61','name' => 'Trabzon','country_id' => 1),
          array('id' => '62','name' => 'Tunceli','country_id' => 1),
          array('id' => '63','name' => 'Şanlıurfa','country_id' => 1),
          array('id' => '64','name' => 'Uşak','country_id' => 1),
          array('id' => '65','name' => 'Van','country_id' => 1),
          array('id' => '66','name' => 'Yozgat','country_id' => 1),
          array('id' => '67','name' => 'Zonguldak','country_id' => 1),
          array('id' => '68','name' => 'Aksaray','country_id' => 1),
          array('id' => '69','name' => 'Bayburt','country_id' => 1),
          array('id' => '70','name' => 'Karaman','country_id' => 1),
          array('id' => '71','name' => 'Kırıkkale','country_id' => 1),
          array('id' => '72','name' => 'Batman','country_id' => 1),
          array('id' => '73','name' => 'Şırnak','country_id' => 1),
          array('id' => '74','name' => 'Bartın','country_id' => 1),
          array('id' => '75','name' => 'Ardahan','country_id' => 1),
          array('id' => '76','name' => 'Iğdır','country_id' => 1),
          array('id' => '77','name' => 'Yalova','country_id' => 1),
          array('id' => '78','name' => 'Karabük','country_id' => 1),
          array('id' => '79','name' => 'Kilis','country_id' => 1),
          array('id' => '80','name' => 'Osmaniye','country_id' => 1),
          array('id' => '81','name' => 'Düzce','country_id' => 1)
        );
          City::truncate();
          City::insert($tr_cities);
    }
}
