<?php

namespace Epigra\TrGeoZones\Models;

use Epigra\TrGeoZones\Database\Factories\CountryFactory;
use Epigra\TrGeoZones\Models\City;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'geozone_countries';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'name'];

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public static function newFactory()
    {
        return CountryFactory::new();
    }
}
