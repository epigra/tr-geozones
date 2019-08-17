<?php

namespace Epigra\TrGeoZones\Models;

use Epigra\TrGeoZones\Models\City;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
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
}
