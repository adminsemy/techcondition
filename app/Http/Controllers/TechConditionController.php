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
        $techConditions = $this->techCondition->searchTechCondition();
        return view('tech_condition.index', compact('techConditions'));
    }
}
