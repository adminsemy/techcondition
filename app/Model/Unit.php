<?php

namespace App\Model;

use Auth;
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
        $currentUserRole = Auth::user()->role;
        switch ($currentUserRole) {
        case self::SEM_RES:
            $array[] = self::SEM_RES;
            break;
        case self::KRBAKI_RES:
            $array[] = self::KRBAKI_RES;
            break;
        case self::VOSKR_RES:
            $array[] = self::VOSKR_RES;
            break;
        case self::VARN_RES:
            $array[] = self::VARN_RES;
            break;
        case self::BOR_RES:
            $array[] = self::BOR_RES;
            break;
        default:
            $array = self::ALL_RES;
        }
        return $array;
    }

    public static function currentRes($defaultRes = 11)
    {
        if (!$defaultRes) {
            $defaultRes = 11;
        }
        $currentUserRole = Auth::user()->role;
        switch ($currentUserRole) {
        case self::SEM_RES:
            return self::SEM_RES;
        case self::KRBAKI_RES:
            return self::KRBAKI_RES;
        case self::VOSKR_RES:
            return self::VOSKR_RES;
        case self::VARN_RES:
            return self::VARN_RES;
        case self::BOR_RES:
            return self::BOR_RES;
        default:
            return $defaultRes;
        }
    }
}
