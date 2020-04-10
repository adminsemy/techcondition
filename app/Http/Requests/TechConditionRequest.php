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
            'TU-1' => 'nullable|numeric',
            'TU-2' => 'nullable|numeric',
            'DataTU' => 'nullable|date',
            'CodZakazchika' => 'exists:App\Model\Customer,id',
            'NZayavki' => 'nullable|string',
            'DataZayavki' => 'nullable|date',
            'CodPodrazdelenia' => 'exists:App\Model\Unit,id',
            'NaChtoZayavka' => 'required|string',
            'NasPunktZayavki' => 'required|string',
            'ZayavNagruzka' => 'nullable|numeric',
            'VnovNagruzka' => 'nullable|numeric',
            'SuchestvNagruzka' => 'nullable|numeric',
            'CodNapryazhenia' => 'nullable|exists:App\Model\ConnectionVoltage,id',
            'Rasstoyanie' => 'nullable|numeric',
            'CodKharNagruzki' => 'nullable|exists:App\Model\NatureLoad,id',
            'CodKatNadezhnosti' => 'nullable|exists:App\Model\CategoryReliability,id',
            'CodPodstancii' => 'exists:App\Model\Substation,id',
            'OsnIstESnabzh' => 'string',
            'TPOsnIstESnabzh' => 'nullable|string',
            'TrebPoProekt' => 'nullable|string',
            'CodPodstRez' => 'numeric',
            'RezIstESnabzh' => 'nullable|string',
            'TPRezIstESnabzh' => 'nullable|string',
            'TrebPoPredlog' => 'nullable|string',
            'TrebUchetEl' => 'nullable|string',
            'DopUkazaniya' => 'string'
        ];
    }

    public function messages()
    {
        return [
            
        ];
    }
}
