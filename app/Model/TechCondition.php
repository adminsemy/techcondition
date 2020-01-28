<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TechCondition extends Model
{
    private $unit;
    protected $table = "tehnicheskie_uslovia";

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->unit = new Unit();
    }

    public function signTechConditionModel()
    {
        return $this->belongsTo('App\Model\SignTechCondition', 'PriznakTU');
    }

    public function natureLoadModel()
    {
        return $this->belongsTo('App\Model\NatureLoad', 'CodKharNagruzki');
    }

    public function connectionVoltageModel()
    {
        return $this->belongsTo('App\Model\ConnectionVoltage', 'CodNapryazhenia');
    }

    public function substationModel()
    {
        return $this->belongsTo('App\Model\Substation', 'CodPodstancii')->whereIn('№№PP',$this->unit->getResAllowed());
    }

}
