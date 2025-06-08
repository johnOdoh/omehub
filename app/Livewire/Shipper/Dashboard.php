<?php

namespace App\Livewire\Shipper;

use Livewire\Component;

class Dashboard extends Component
{
    public int $qty;
    public $total = 0;
    public $width;
    public $height;
    public $length;
    public $unit = 'cm';

    public function calc()
    {
        $validated = $this->validate([
            'qty' => 'required|integer|min:1',
            'width' => 'required|numeric|min:0',
            'height' => 'required|numeric|min:0',
            'length' => 'required|numeric|min:0',
            'unit' => 'required|string|in:cm,in',
        ]);
        $total = $validated['qty'] * $validated['width'] * $validated['height'] * $validated['length'];
        if ($validated['unit'] === 'cm') {
            $total = number_format($total / 1000000, 2);
        }else {
            $total = number_format($total / 61023.744094, 2);
        }
        $this->total = $total;
    }

    public function render()
    {
        return view('livewire.shipper.dashboard', [
            'user' => request()->user()
        ]);
    }
}
