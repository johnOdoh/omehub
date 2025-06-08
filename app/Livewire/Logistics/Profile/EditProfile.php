<?php

namespace App\Livewire\Logistics\Profile;

use Livewire\Component;

class EditProfile extends Component
{
    public $user;
    public $countryCodes = [];
    public $currentCountry;
    public string $name = '';
    public string $phone = '';
    public string $address = '';
    public string $city = '';
    public string $country = '';
    public string $dial_code;
    public string $zip = '';

    public function mount()
    {
        $this->dispatch('load-countries-plugin');
        $this->countryCodes = json_decode(file_get_contents(resource_path('data/country-codes.json')));
        $this->currentCountry = getCountryFromCode();
        $this->dial_code = $this->currentCountry->dial_code;
        $this->name = $this->user->name;
        $this->fill($this->user->logistic_provider);
        $this->dispatch('load-defaults');
    }

    public function updateProfile()
    {
        $validated = $this->validate([
            'phone' => 'required|numeric',
            'address' => 'required|string',
            'city' => 'required|string',
            'country' => 'required|string',
            'dial_code' => 'required|string',
            'zip' => 'required|string'
        ]);
        $validated['phone'] = $validated['phone']/1;
        $this->user->logistic_provider()->update($validated);
        request()->session()->flash("updated");
        $this->dispatch('profile-updated');
    }

    public function closePage()
    {
        $this->dispatch('close-page');
    }

    public function render()
    {
        return view('livewire.logistics.profile.edit-profile');
    }
}
