<?php

namespace App\View\Components;

use App\Models\Financing;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FinancialRequestDetails extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public Financing $request)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.financial-request-details');
    }
}
