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
        $result->CodPodrazdelenia = $this->unit->currentRes($data['CodRES']);
        $result->CodFormsPredpr = $data['CodFormsPredpr'];
        $result->Familiya = $data['Familiya'];
        $result->Imya = $data['Imya'];
        $result->Otchestvo = $data['Otchestvo'];
        $result->Gorod = $data['Gorod'];
        $result->Adres = $data['Adres'];
        $result->Telefon = $data['Telefon'];
        $result->Seria = $data['Seria'];
        $result->Nomer = $data['Nomer'];
        $result->Data = $data['Data'];
        $result->KemVidan = $data['KemVidan'];
        $result->NaimenOrg = $data['NaimenOrg'];
        $result->VLice = $data['VLice'];
        $result->NaOsnovanii = $data['NaOsnovanii'];
        $result->INN = $data['INN'];
        $result->KPP = $data['KPP'];
        $result->RS = $data['RS'];
        $result->Bank = $data['Bank'];
        $result->BIK = $data['BIK'];
        $result->KS = $data['KS'];
        $result->OKPO = $data['OKPO'];

        return $result;
    }
} 
