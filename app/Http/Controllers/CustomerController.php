<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Model\Customer;
use App\Model\LegalForm;
use App\Model\Unit;

class CustomerController extends Controller
{
    private $customer;
    private $unit;

    public function __construct(Customer $customer, Unit $unit)
    {
        $this->customer = $customer;
        $this->unit = $unit;
    }

    public function index()
    {
        $customers = $this->customer->searchCustomers();
        return view('customers.index', compact('customers'));
    }

    public function search(CustomerRequest $request)
    {
        $lastName = $request->lastName;
        $customers = $this->customer->searchCustomers($lastName);
        return view('customers.index', compact('customers', 'lastName'));
    }

    public function edit($id)
    {
        $customer = Customer::all()->find($id);
        $legalForms = LegalForm::query()->orderBy('FormaPredpr')->get();
        $unit = $this->unit->getSelectRes();
        return view('customers.edit', compact('customer', 'legalForms', 'unit'));
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
