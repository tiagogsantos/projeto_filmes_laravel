<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Films extends Model
{
    protected $fillable = [
        'title',
        'films_category',
        'quality_image',
        'sinopse',
        'language',
        'duraction',
        'lancament'
    ];

    public function setLancamentAttribute($value)
    {
        $this->attributes['lancament'] = $this->convertStringToDate($value);
    }

    public function getLancamentAttribute($value)
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
