<?php

namespace Epigra\TrGeoZones\Models;

use Epigra\TrGeoZones\Models\City;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Country extends Model implements HasMedia
{
    use InteractsWithMedia;

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

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('flags');
}
}
