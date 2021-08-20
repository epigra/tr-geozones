<?php

namespace Epigra\TrGeoZones\Nova;

use App\Nova\Resource;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class CityDistrict extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'Epigra\\TrGeoZones\\Models\\CityDistrict';
    public static $group = 'Geozones';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'ilce';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'ilce',
    ];

    public static function label()
    {
        return __('City Districts');
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            BelongsTo::make('İl', 'city', 'Epigra\TrGeoZones\Nova\City')->sortable()->rules('required'),
            Text::make('İlçe', 'ilce')->rules('required', 'max:50')->withMeta([
                'extraAttributes' => [
                    'maxLength' => 50,
                ],
            ]),
            Text::make('Semt')->rules('required', 'max:50')->withMeta([
                'extraAttributes' => [
                    'maxLength' => 50,
                ],
            ]),
            Text::make('Mahalle')->rules('required', 'max:100')->withMeta([
                'extraAttributes' => [
                    'maxLength' => 100,
                ],
            ]),
            Text::make('Posta Kodu')->rules('required', 'digits:5')->withMeta([
                'extraAttributes' => [
                    'maxLength' => 5,
                ],
            ]),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
