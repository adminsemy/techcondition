<?php

namespace App\Http\Controllers;

use App\Model\TechCondition;
use App\Model\Unit;
use Illuminate\Http\Request;

class TechConditionController extends Controller
{
    private $techCondition;
    private $unit;

    public function __construct(TechCondition $techCondition, Unit $unit)
    {
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
        $customer = TechCondition::all()->find($id);
        $unit = $this->unit->getSelectRes();
        return view('customers.edit', compact('customer', 'unit'));
    }

    public function create()
    {
        $legalForms = LegalForm::query()->orderBy('FormaPredpr')->get();
        $unit = $this->unit->getSelectRes();
        return view('customers.create', compact('legalForms', 'unit'));
    }

    public function store(CustomerRequest $request)
    {
        $result = $this->customer->newRecord($request->all());
        if ($result) {
            return redirect()->route('customers.index')->with('success', __('flash.success_save'));
        } else {
            return redirect()->route('customers.create')->with('error', $result);
        }
    }

    public function updateRecord($id, CustomerRequest $request)
    {
        $result = $this->customer->updateRecord($id, $request->all());
        if ($result) {
            return redirect()->route('customers.edit', $id)->with('success', __('flash.success_save'));
        } else {
            return redirect()->route('customers.edit', $id)->with('error', $result);
        }
    }

}
