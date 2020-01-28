<?php

namespace App\Http\Controllers;

use App\Model\TechCondition;
use Illuminate\Http\Request;

class TechConditionController extends Controller
{
    private $techCondition;

    public function __construct(TechCondition $techCondition )
    {
        $this->techCondition = $techCondition;
    }

    public function index()
    {
        $techConditions = $this->techCondition->searchCustomers();
        return view('tech_condition.index', compact('techConditions'));
    }
}
