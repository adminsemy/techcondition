<?php

namespace App\Http\Controllers;

use App\Http\Requests\TechConditionRequest;
use App\Model\CategoryReliability;
use App\Model\ConnectionVoltage;
use App\Model\Customer;
use App\Model\NatureLoad;
use App\Model\Substation;
use App\Model\TechCondition;
use App\Model\Unit;
use Illuminate\Http\Request;

class TechConditionController extends Controller
{
    private $techCondition;
    private $unit;

    public function __construct(TechCondition $techCondition, Unit $unit)
    {
        $this->middleware('auth');
        $this->techCondition = $techCondition;
        $this->unit = $unit;
    }

    public function index()
    {
        $techConditions = $this->techCondition->searchTechCondition();
        return view('tech_condition.index', compact('techConditions'));
    }

    public function search(Request $request)
    {
        $lastName = $request->lastName;
        $techConditions = $this->techCondition->searchTechCondition($lastName);
        return view('tech_condition.index', compact('techConditions', 'lastName'));
    }

    public function edit($id)
    {
        $techCondition = TechCondition::find($id);
        $customers = Customer::all()->where('CodRES', $techCondition->CodPodrazdelenia)->sortBy('Otchestvo')->sortBy('Imya')->sortBy('Familiya');
        $units = $this->unit->getSelectRes();
        $connectionVoltages = ConnectionVoltage::all();
        $natureLoads = NatureLoad::all()->sortBy('KharNagruzki');
        $categoryReliabilities = CategoryReliability::all();
        $substations = Substation::all()->where('№№PP', $techCondition->CodPodrazdelenia);
        return view('tech_condition.edit', compact('techCondition', 'units', 'customers', 'connectionVoltages', 'substations', 'natureLoads', 'categoryReliabilities'));
    }

    public function create()
    {
        $units = $this->unit->getSelectRes();
        $unitsAllowed = $this->unit->getResAllowed();
        $connectionVoltages = ConnectionVoltage::all();
        $natureLoads = NatureLoad::all()->sortBy('KharNagruzki');
        $categoryReliabilities = CategoryReliability::all();
        $substations = Substation::all()->whereIn('№№PP', $unitsAllowed);
        $customers = Customer::all()->whereIn('CodRES', $unitsAllowed)->sortBy('Otchestvo')->sortBy('Imya')->sortBy('Familiya');
        return view('tech_condition.create', compact('units', 'customers', 'connectionVoltages', 'substations', 'natureLoads', 'categoryReliabilities'));
    }

    public function store(TechConditionRequest $request)
    {
        $result = $this->techCondition->newRecord($request->all());
        if ($result) {
            return redirect()->route('techCondition.index')->with('success', __('flash.success_save'));
        } else {
            return redirect()->route('techCondition.create')->with('error', $result);
        }
    }

    public function updateRecord($id, TechConditionRequest $request)
    {
        $result = $this->techCondition->updateRecord($id, $request->all());
        if ($result) {
            return redirect()->route('techCondition.edit', $id)->with('success', __('flash.success_save'));
        } else {
            return redirect()->route('techCondition.edit', $id)->with('error', $result);
        }
    }

}
