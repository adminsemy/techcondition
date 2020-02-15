<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class TechCondition extends Model
{
    private $unit;
    protected $perPage = 100;
    protected $table = "tehnicheskie_uslovia";

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->unit = new Unit();
    }

    public function unitModel()
    {
        return $this->belongsTo('App\Model\Unit', 'CodPodrazdelenia');
    }

    public function signTechCondition()
    {
        return $this->belongsTo('App\Model\SingTechCondition', 'PriznakTU');
    }

    public function natureLoad()
    {
        return $this->belongsTo('App\Model\NatureLoad', 'CodKharNagruzki');
    }

    public function connectionVoltage()
    {
        return $this->belongsTo('App\Model\ConnectionVoltage', 'CodNapryazhenia');
    }

    public function substation()
    {
        return $this->belongsTo('App\Model\Substation', 'CodPodstancii')->whereIn('№№PP', $this->unit->getResAllowed());
    }

    public function customers()
    {
        return $this->belongsTo('App\Model\Customer', 'CodZakazchika');
    }

    public function searchTechCondition($first_name = ''): object
    {
        $techCondition = TechCondition::query()->whereIn('CodPodrazdelenia', $this->unit->getResAllowed())
            ->with(['customers', 'connectionVoltage', 'unitModel', 'natureLoad'])
            ->whereHas(
                'customers', function (Builder $query) use ($first_name) {
                    $query->where('Familiya', 'like', '%' . $first_name . '%');
                }
            )
            ->orderByDesc('id')
            ->paginate();
        return $techCondition;      
    }
} 
