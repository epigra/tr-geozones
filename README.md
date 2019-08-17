# Ülkeler ve Türkiye İl İlçe Semt Mahalle ve Posta Kodu Veritabanı (Laravel) 

## Yükleme

`composer require epigra/trgeozones` diyerek paketi indirebilirsiniz.

###Migrate

Kurulumu tamamladıktan sonra tabloları oluşturmak için

```
php artisan migrate
```

demeniz gerekmektedir.

###Seed
Tüm tabloları seed etmek için sisteminizdeki DatabaseSeeder'da yer alan `run()` methodu içerisine

```
$this->call(Epigra\TrGeoZones\Database\Seeds\TRGeoZonesDatabaseSeeder::class);
```

satırını ekleyerek tüm seederları çalıştırabilir; ayrı ayrı çalıştırmak isterseniz opsiyonel olarak aşağıdaki sınıfları kullanabilirsiniz.

```
$this->call(Epigra\TrGeoZones\Database\Seeders\GeozoneCountriesTableSeeder::class);
$this->call(Epigra\TrGeoZones\Database\Seeders\GeozoneCitiesTableSeeder::class);
$this->call(Epigra\TrGeoZones\Database\Seeders\GeozoneCityDistrictsTableSeeder::class);
```

şeklinde ekleyebilirsiniz.

## Nova Resources
Laravel Nova kullanıcıları [dokümantasyonda](https://nova.laravel.com/docs/2.0/resources/#registering-resources) görebilecekleri şekilde 
`App/Providers/NovaServiceProvider` içerisindeki `resources()` methodunun üzerine yazarak veya AppServiceProvider içerisine aşağıdaki kod bloğunu gerekli şekilde ekleyerek

```
Nova::resources([
	\Epigra\TrGeoZones\Nova\City::class,
	\Epigra\TrGeoZones\Nova\CityDistrict::class,
	\Epigra\TrGeoZones\Nova\Country::class
]);

```
resource'ları register edebilirler.


##Veri Güncelliği

Veriler http://postakodu.ptt.gov.tr/ adresinde yayınlanan veriler doğrultusunda 17.08.2019 itibarıyla günceldir.

İndirdiğiniz excel tablosu üzerinden güncelleme yapmak isterseniz öncesinde `composer require maatwebsite/excel epigra/trstringhelper` komutunu çalıştırarak gerekli paketleri kurduğunuzdan ve Kernel içerisine `\Epigra\TrGeoZones\Console\ExcelMigrator::class` eklediğinizden emin olduktan sonra 

```
php artisan trgeozones:import
```

komutunu kullanarak excel importu gerçekleştirebilirsiniz.

Excel Import komutu statik olarak public içerisinde yer alacak `trgeozones_update.xlsx` dosyasına bakacak şekilde çalışmaktadır..



