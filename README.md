# Ülkeler ve Türkiye İl İlçe Semt Mahalle ve Posta Kodu Veritabanı (Laravel) 

## Yükleme

`composer require epigra/trgeozones` demeniz veya 

`composer.json` dosyamızı içerisinde

```
"require": {
    "epigra/trgeozones":"dev-master"
},
```

olacak şekilde güncellemeniz yeterlidir...

Sonrasında `config/app.php` dosyası içerisindeki `providers` arrayine 

```
Epigra\TrGeoZones\Providers\TrGeoZonesServiceProvider::class,
```

ekliyoruz.

###Migration
Paket ile birlikte gelen artisan komutu ile tabloları oluşturmak için gereken `migration` ları oluşturmak için:

```
php artisan geozones:migrate
```

dedikten sonra

```
php artisan migrate
```

diyerek tabloları oluşturabilirsiniz.

###District Özel Kullanım
Tablo üzerinde çok fazla veri olduğu için semt,mahalle ve posta kodu sütunlarını kullanmaya ihtiyacınız yoksa Epigra\TrGeoZones\Models\CityDistrict modelini ve paket içeriğinde bulunan seeder'ı extend ederek gerekli düzenlemeleri yapabilirsiniz.

Seeder içerisindeki veriler birlikte çalıştığı modelin `fillable` property sine göre otomatik olarak filtrelenmektedir.

P.S Config veya Alias üzerinden tanımlamalar yapılarak sistemin esnek class yapısı ile çalışması to-do'lar arasında ;) 

###Seeder
Sisteminizdeki DatabaseSeeder içerisinde yer alan `run()` methodu içerisine

```
$this->call(Epigra\TrGeoZones\Database\Seeds\TRGeoZonesDatabaseSeeder::class);
```

satırını ekleyerek tüm seederları çalıştırabilir veya ayrı ayrı çalıştırmak isterseniz

```
$this->call(Epigra\TrGeoZones\Database\Seeds\CountrySeeder::class);
$this->call(Epigra\TrGeoZones\Database\Seeds\CitySeeder::class);
$this->call(Epigra\TrGeoZones\Database\Seeds\CityDistrictsSeeder::class);
```

şeklinde ekleyebilirsiniz.

####Alternatif Seeder
```
php artisan db:seed --class="Epigra\TrGeoZones\Database\Seeds\TRGeoZonesDatabaseSeeder"
```

komutunu da kullanabilirsiniz.




