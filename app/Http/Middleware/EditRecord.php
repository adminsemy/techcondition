<?php

namespace App\Http\Middleware;

use App\Interfaces\EditRecordInterface;
use App\Model\Customer;
use App\Model\Unit;
use Closure;

class EditRecord
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     * @return mixed
     */
    private $unit;

     public function __construct()
     {
        $this->unit = new Unit();
     }

    public function handle($request, Closure $next, $name_model)
    {
        $res = $name_model::find($request->id)->CodRES;
        $allowedRes = $this->unit->getResAllowed();
        if (! in_array($res, $allowedRes) ) {
            return redirect()->route('customers.index');
        }
        
        return $next($request);
    }
}
