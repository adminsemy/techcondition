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

    public function categoyReliability()
    {
        return $this->belongsTo('App\Model\CategoryReliability', 'CodKatNadezhnosti');
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

    public function updateRecord(int $id, array $data)
    {
        try {
            $result = $this->fieldMatching(TechCondition::all()->find($id), $data);
            $result->save();
            return true;
        } catch (DomainException $e) {
            return $e->getMessage();
        }
    }

    public function newRecord(array $data)
    {
        try {
            $result = $this->fieldMatching(new TechCondition, $data);
            $increment = 1;
            $result->id = TechCondition::all()->max('id') + $increment;
            $result->save();
            return true;
        } catch (DomainException $e) {
            return $e->getMessage();
        }
    }

    protected function fieldMatching(Model $result, array $data): object
    {
        $result['CodPodrazdelenia'] = $this->unit->currentRes($data['CodPodrazdelenia']);
        $result['№TU-1'] = $data['TU-1'];
        $result['№TU-2'] = $data['TU-2'];
        $result['DataTU'] = $data['DataTU'];
        $result['№Zayavki'] = $data['NZayavki'];
        $result['CodPodrazdelenia'] = $data['CodPodrazdelenia'];
        $result['NaChtoZayavka'] = $data['NaChtoZayavka'];
        $result['NasPunktZayavki'] = $data['NasPunktZayavki'];
        $result['ZayavNagruzka'] = $data['ZayavNagruzka'];
        $result['VnovNagruzka'] = $data['VnovNagruzka'];
        $result['SuchestvNagruzka'] = $data['SuchestvNagruzka'];
        $result['CodNapryazhenia'] = $data['CodNapryazhenia'];
        $result['Rasstoyanie'] = $data['Rasstoyanie'];
        $result['CodKharNagruzki'] = $data['CodKharNagruzki'];
        $result['CodKatNadezhnosti'] = $data['CodKatNadezhnosti'];
        $result['CodPodstancii'] = $data['CodPodstancii'];
        $result['OsnIstESnabzh'] = $data['OsnIstESnabzh'];
        $result['TPOsnIstESnabzh'] = $data['TPOsnIstESnabzh'];
        $result['TrebPoProekt'] = $data['TrebPoProekt'];
        $result['CodPodstRez'] = $data['CodPodstRez'];
        $result['RezIstESnabzh'] = $data['RezIstESnabzh'];
        $result['TPRezIstESnabzh'] = $data['TPRezIstESnabzh'];
        $result['TrebPoPredlog'] = $data['TrebPoPredlog'];
        $result['TrebUchetEl'] = $data['TrebUchetEl'];
        $result['DopUkazaniya'] = $data['DopUkazaniya'];
        
        return $result;
    }
} 
