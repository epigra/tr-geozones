# Ülkeler ve Türkiye İl İlçe Semt Mahalle ve Posta Kodu Veritabanı (Laravel) 

Bu paket Türkiye'deki İl, İlçe, Semt ve Mahalleleri içeren veritabanıdır. Ayrıca bu veritabanı içerisinde yer alan verilerin posta kodları da bulunmaktadır.

## Yükleme

`composer require epigra/trgeozones` diyerek paketi indirebilirsiniz.

### Migrate

Kurulumu tamamladıktan sonra tabloları oluşturmak için

```
php artisan migrate
```

demeniz gerekmektedir.

### Seed
Tüm tabloları seed etmek için sisteminizdeki DatabaseSeeder'da yer alan `run()` methodu içerisine

```
$this->call(Epigra\TrGeoZones\Database\Seeders\TrGeoZonesDatabaseSeeder::class);
```

satırını ekleyerek tüm seederları çalıştırabilir; ayrı ayrı çalıştırmak isterseniz opsiyonel olarak aşağıdaki sınıfları kullanabilirsiniz.

```
$this->call(Epigra\TrGeoZones\Database\Seeders\GeozoneCountriesTableSeeder::class);
$this->call(Epigra\TrGeoZones\Database\Seeders\GeozoneCitiesTableSeeder::class);
$this->call(Epigra\TrGeoZones\Database\Seeders\GeozoneCountiesTableSeeder::class);
$this->call(Epigra\TrGeoZones\Database\Seeders\GeozoneDistrictsTableSeeder::class);
$this->call(Epigra\TrGeoZones\Database\Seeders\GeozoneNeighbourhoodsTableSeeder::class);
```

şeklinde ekleyebilirsiniz.

## Veri Güncelliği

Veriler http://postakodu.ptt.gov.tr/ adresinde yayınlanan veriler doğrultusunda 10.08.2022 itibarıyla günceldir.

İndirdiğiniz excel tablosu üzerinden güncelleme yapmak isterseniz öncesinde `composer require maatwebsite/excel epigra/trstringhelper` komutunu çalıştırarak gerekli paketleri kurduğunuzdan ve Kernel içerisine `\Epigra\TrGeoZones\Console\ExcelMigrator::class` eklediğinizden emin olduktan sonra 

```
php artisan trgeozones:import
```

komutunu kullanarak excel importu gerçekleştirebilirsiniz.

Excel Import komutu statik olarak storage klasörünün içerisinde yer alacak `trgeozones_update.xlsx` dosyasına bakacak şekilde çalışmaktadır..


## SQL Dump
Seeder kullanmadan SQL formatında dumpları indirmek için http://epigra.com/packages/tr_geozones_sql_dump-2020-09-28.zip adresindeki arşivi kullanabilirsiniz.


