<?php

namespace Epigra\TrGeoZones\Models;

use Illuminate\Database\Eloquent\Model;

class CityDistrict extends Model
{
    public $timestamps = false;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'geozone_city_districts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['city_id', 'ilce', 'semt', 'mahalle', 'posta_kodu'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
