<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Integer;
use phpDocumentor\Reflection\Types\This;

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
    const SEM_RES = 11;
    const BOR_RES = 15;
    const KRBAKI_RES = 12;
    const VOSKR_RES = 13;
    const VARN_RES = 14;
    const ALL_RES = [self::SEM_RES, self::BOR_RES, self::KRBAKI_RES, self::VOSKR_RES, self::VARN_RES];

    protected $table = 'zakazchiki';
    protected $perPage = 100;

    public function legalForm()
    {
        return $this->belongsTo('App\Model\LegalForm', 'CodFormsPredpr');
    }

    public function searchCustomers($first_name = ''): object
    {
        $customers = Customer::query()->where('Familiya', '<>', null)
            ->where('Familiya', 'like', '%' . $first_name . '%')
            ->whereIn('CodRES', self::res())
            ->with('legalForm')
            ->orderBy('Familiya')
            ->orderBy('Imya')
            ->orderBy('Otchestvo')
            ->paginate();
        return $customers;
    }

    public static function res(): array
    {
        return self::ALL_RES;
    }

    public function updateRecord(int $id, array $data)
    {
        try {
            $result = $this->fieldMatching(Customer::all()->find($id), $data);
            $result->save();
            return true;
        } catch (\DomainException $e) {
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
        } catch (\DomainException $e) {
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
