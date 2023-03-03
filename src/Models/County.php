<?php

namespace Epigra\TrGeoZones\Models;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    public $timestamps = false;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'geozone_counties';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'city_id'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function districts()
    {
        return $this->hasMany(District::class);
    }
}
