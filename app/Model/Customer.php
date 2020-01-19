<?php

namespace App\Model;

use DomainException;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Integer;

/**
 * @property mixed CodFormsPredpr
 * @property string Familiya
 * @property string Imya
 * @property string Otchestvo
 * @property string Gorod
 * @property string Adres
 * @property mixed Telefon
 * @property mixed Seria
 * @property mixed Nomer
 * @property mixed Data
 * @property string KemVidan
 * @property string NaimenOrg
 * @property string VLice
 * @property string NaOsnovanii
 * @property mixed INN
 * @property mixed KPP
 * @property mixed RS
 * @property mixed Bank
 * @property integer BIK
 * @property integer KS
 * @property integer OKPO
 */
class Customer extends Model
{
    protected $table = 'zakazchiki';
    protected $perPage = 100;
    /**
     * @var Unit
     */
    private $unit;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->unit = new Unit();
    }

    public function legalForm()
    {
        return $this->belongsTo('App\Model\LegalForm', 'CodFormsPredpr');
    }

    public function unitModel()
    {
        return $this->belongsTo('App\Model\Unit', 'CodRES');
    }

    public function searchCustomers($first_name = ''): object
    {
        $customer = Customer::query()->where('Familiya', '<>', null)
            ->where('Familiya', 'like', '%' . $first_name . '%')
            ->whereIn('CodRES', $this->unit->getResAllowed())
            ->with('legalForm')
            ->with('unitModel')
            ->orderBy('Familiya')
            ->orderBy('Imya')
            ->orderBy('Otchestvo')
            ->paginate();
        return $customer;
    }

    public function updateRecord(int $id, array $data)
    {
        try {
            $result = $this->fieldMatching(Customer::all()->find($id), $data);
            $result->save();
            return true;
        } catch (DomainException $e) {
            return $e->getMessage();
        }
    }

    public function newRecord(array $data)
    {
        try {
            $result = $this->fieldMatching(new Customer, $data);
            $increment = 1;
            $result->id = Customer::all()->max('id') + $increment;
            $result->CodRES = 11;
            $result->save();
            return true;
        } catch (DomainException $e) {
            return $e->getMessage();
        }
    }

    private function fieldMatching(Model $result, array $data): object
    {
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
