<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Model\Customer;
use App\Model\LegalForm;

class CustomerController extends Controller
{
    private $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
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
        return view('customers.edit', compact('customer', 'legalForms'));
    }

    public function create()
    {
        $legalForms = LegalForm::query()->orderBy('FormaPredpr')->get();
        return view('customers.create', compact('legalForms'));
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
