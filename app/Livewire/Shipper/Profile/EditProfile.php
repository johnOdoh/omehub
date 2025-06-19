<?php

namespace App\Livewire\Shipper\Profile;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class EditProfile extends Component
{
    public $user;
    public $countryCodes = [];
    public $currentCountry;
    public string $name = '';
    public string $account_type = '';
    public string $phone = '';
    public string $business_type = '';
    public string $address = '';
    public string $city = '';
    public string $country = '';
    public string $dial_code;
    public string $zip = '';

    public function mount()
    {
        $this->dispatch('load-countries-plugin');
        $this->countryCodes = DB::table('countries')->orderBy('name')->get();
        $this->currentCountry = getCountryFromCode();
        $this->dial_code = $this->currentCountry->dial_code;
        $this->name = $this->user->name;
        $this->fill($this->user->shipper);
        $this->dispatch('load-defaults');
    }

    public function updateProfile()
    {
        $validated = $this->validate([
            'business_type' => 'nullable|string',
            'phone' => 'required|numeric',
            'address' => 'required|string',
            'city' => 'required|string',
            'country' => 'required|string',
            'dial_code' => 'required|string',
            'zip' => 'required|string'
        ]);
        $validated['phone'] = $validated['phone']/1;
        $this->user->shipper()->update($validated);
        request()->session()->flash("updated");
        $this->dispatch('profile-updated');
    }

    public function closePage()
    {
        $this->dispatch('close-page');
    }

    public function render()
    {
        return view('livewire.shipper.profile.edit-profile');
    }
}
