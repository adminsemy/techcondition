<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'CodRES' => 'exists:App\Model\Unit,id',
            'CodFormsPredpr' => 'exists:App\Model\LegalForm,id',
            'Familiya' => 'required|not_regex:/\s/i|string',
            'Imya' => 'required|not_regex:/\s/i|string',
            'Otchestvo' => 'required|not_regex:/\s/i|string',
            'Gorod' => 'required|string',
            'Adres' => 'required|string',
            'Telefon' => 'numeric|digits:11',
            'Seria' => 'numeric|digits_between:4,4|required_if:CodFormsPredpr,1|nullable',
            'Nomer' => 'numeric|digits_between:6,6|required_if:CodFormsPredpr,1|nullable',
            'Data' => 'date|required_if:CodFormsPredpr,1|nullable',
            'KemVidan' => 'string|required_if:CodFormsPredpr,1|nullable',
            'NaimenOrg' => 'string|required_unless:CodFormsPredpr,1|nullable',
            'VLice' => 'string|required_unless:CodFormsPredpr,1|nullable',
            'NaOsnovanii' => 'string|required_unless:CodFormsPredpr,1|nullable',
            'INN' => 'numeric|digits_between:10,12|required_unless:CodFormsPredpr,1|nullable',
            'KPP' => 'numeric|digits_between:9,9|required_unless:CodFormsPredpr,1|nullable',
            'RS' => 'numeric|digits_between:20,20|required_unless:CodFormsPredpr,1|nullable',
        ];
    }

    public function messages()
    {
        return [
            'CodFormsPredpr.exists' => __('validation.CodFormsPredpr.exists'),
            'Familiya.required' => __('validation.Familiya.required'),
            'Familiya.not_regex' => __('validation.Familiya.not_regex'),
            'Familiya.string' => __('validation.Familiya.string'),
            'Imya.required' => __('validation.Imya.required'),
            'Imya.not_regex' => __('validation.Imya.not_regex'),
            'Imya.string' => __('validation.Imya.string'),
            'Otchestvo.required' => __('validation.Otchestvo.required'),
            'Otchestvo.not_regex' => __('validation.Otchestvo.not_regex'),
            'Otchestvo.string' => __('validation.Otchestvo.string'),
            'Gorod.required' => __('validation.Gorod.required'),
            'Gorod.string' => __('validation.Gorod.string'),
            'Adres.required' => __('validation.Adres.required'),
            'Adres.string' => __('validation.Adres.string'),
            'Telefon.numeric' => __('validation.Telefon.numeric'),
            'Telefon.digits' => __('validation.Telefon.digits'),
            'Seria.numeric' => __('validation.Seria.numeric'),
            'Seria.digits_between' => __('validation.Seria.digits_between'),
            'Seria.required_if' => __('validation.Seria.required_if'),
            'Nomer.numeric' => __('validation.Nomer.numeric'),
            'Nomer.digits_between' => __('validation.Nomer.digits_between'),
            'Nomer.required_if' => __('validation.Nomer.required_if'),
            'Data.date' => __('validation.Data.date'),
            'Data.required_if' => __('validation.Data.required_if'),
            'KemVidan.string' => __('validation.KemVidan.string'),
            'KemVidan.required_if' => __('validation.KemVidan.required_if'),
            'NaimenOrg.string' => __('validation.NaimenOrg.string'),
            'NaimenOrg.required_unless' => __('validation.NaimenOrg.required_unless'),
            'VLice.string' => __('validation.VLice.string'),
            'VLice.required_unless' => __('validation.VLice.required_unless'),
            'NaOsnovanii.string' => __('validation.NaOsnovanii.string'),
            'NaOsnovanii.required_unless' => __('validation.NaOsnovanii.required_unless'),
            'INN.numeric' => __('validation.INN.numeric'),
            'INN.digits_between' => __('validation.INN.digits_between'),
            'INN.required_unless' => __('validation.INN.required_unless'),
            'KPP.numeric' => __('validation.KPP.numeric'),
            'KPP.digits_between' => __('validation.KPP.digits_between'),
            'KPP.required_unless' => __('validation.KPP.required_unless'),
            'RS.numeric' => __('validation.RS.numeric'),
            'RS.digits_between' => __('validation.RS.digits_between'),
            'RS.required_unless' => __('validation.RS.required_unless'),
        ];
    }
}
