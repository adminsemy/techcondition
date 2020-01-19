<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = 'podrasdelenia';

    const SEM_RES = 11;
    const BOR_RES = 15;
    const KRBAKI_RES = 12;
    const VOSKR_RES = 13;
    const VARN_RES = 14;
    const ALL_RES = [self::SEM_RES, self::BOR_RES, self::KRBAKI_RES, self::VOSKR_RES, self::VARN_RES];

    public function getSelectRes(): object
    {
        $unit = Unit::query()->whereIn('id', $this->getResAllowed())->orderBy('NaimenPodrazdelenia')->get();
        return $unit;
    }

    public function getResAllowed()
    {
        $array = [];
        $array = self::ALL_RES;
        return $array;
    }
}
