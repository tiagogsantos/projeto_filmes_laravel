<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $fillable = [
        'series',
        'season',
        'number_epsode',
        'name_epsode',
        'duracion_epsode',
        'lancament_season',
        'description_epsode',
        'url_link'
    ];

    public function series ()
    {
        // Trazendo o relacionamento da serie

        return $this->belongsTo(Series::class, 'series', 'id');

    }

    public function setLancamentSeasonAttribute($value)
    {
        if(!empty($value)){
            $this->attributes['lancament_season'] = $this->convertStringToDate($value);
        }
    }

    public function getLancamentSeasonAttribute($value)
    {
        return date('d/m/Y', strtotime($value));
    }

    private function convertStringToDate(string $param)
    {
        // Na verificação abaixo estou convertendo de vario para nulo
        if (empty($param)) {
            return null;
        }

        list($day, $month, $year) = explode('/', $param);
        return (new \DateTime($year . '-'. $month . '-' . $day))->format('Y-m-d');
    }

}
