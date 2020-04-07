<?php

namespace App\Http\Controllers;

use App\Model\ConnectionVoltage;
use App\Model\Customer;
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
        $substations = Substation::all()->where('№№PP', $techCondition->CodPodrazdelenia);
        return view('tech_condition.edit', compact('techCondition', 'units', 'customers', 'connectionVoltages', 'substations'));
    }

    public function create()
    {
        $unit = $this->unit->getSelectRes();
        return view('tech_condition.create', compact('legalForms', 'unit'));
    }

    public function store(CustomerRequest $request)
    {
        $result = $this->techCondition->newRecord($request->all());
        if ($result) {
            return redirect()->route('tech_condition.index')->with('success', __('flash.success_save'));
        } else {
            return redirect()->route('tech_condition.create')->with('error', $result);
        }
    }

    public function updateRecord($id, CustomerRequest $request)
    {
        $result = $this->techCondition->updateRecord($id, $request->all());
        if ($result) {
            return redirect()->route('tech_condition.edit', $id)->with('success', __('flash.success_save'));
        } else {
            return redirect()->route('tech_condition.edit', $id)->with('error', $result);
        }
    }

}
