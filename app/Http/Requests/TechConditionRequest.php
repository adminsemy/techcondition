<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TechConditionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'TU-1' => 'numeric',
            'TU-2' => 'numeric',
            'DataTU' => 'date',
            'CodZakazchika' => 'exists:App\Model\Customer,id',
            'NZayavki' => 'string',
            'DataZayavki' => 'date',
            'CodPodrazdelenia' => 'exists:App\Model\Unit,id',
            'NaChtoZayavka' => 'required|string',
            'NasPunktZayavki' => 'required|string',
            'ZayavNagruzka' => 'numeric',
            'VnovNagruzka' => 'numeric',
            'SuchestvNagruzka' => 'numeric',
            'CodNapryazhenia' => 'exists:App\Model\ConnectionVoltage,id',
            'Rasstoyanie' => 'numeric',
            'CodKharNagruzki' => 'exists:App\Model\NatureLoad,id',
            'CodKatNadezhnosti' => 'exists:App\Model\CategoryReliability,id',
            'CodPodstancii' => 'exists:App\Model\Substation,id',
            'OsnIstESnabzh' => 'string',
            'TPOsnIstESnabzh' => 'string',
            'TrebPoProekt' => 'string|nullable',
            'CodPodstRez' => 'nullable|exists:App\Model\Substation,id',
            'RezIstESnabzh' => 'string',
            'TPRezIstESnabzh' => 'string',
            'TrebPoProekt' => 'string',
            'TrebUchetEl' => 'string',
            'DopUkazaniya' => 'string'
        ];
    }

    public function messages()
    {
        return [
            
        ];
    }
}
