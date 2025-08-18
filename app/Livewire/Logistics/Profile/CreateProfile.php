<?php

namespace App\Livewire\Logistics\Profile;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;

class CreateProfile extends Component
{
    use WithFileUploads;
    public $user;
    public $countryCodes = [];
    public $currentCountry;
    public $name;
    public $phone;
    public $address;
    public $city;
    public $country;
    public $dial_code;
    public $zip;
    public $reg_no;
    public $logo;

    public function mount()
    {
        $this->countryCodes = DB::table('countries')->orderBy('name')->get();
        $this->currentCountry = getCountryFromCode();
        $this->dial_code = $this->currentCountry->dial_code;
        $this->name = $this->user->name;
    }

    public function boot()
    {
        $this->dispatch('load-countries-plugin');
        // $this->dispatch('reRenderScripts');
    }

    public function createProfile()
    {
        $validated = $this->validate([
            'name' => 'required|string',
            'phone' => 'required|numeric',
            'address' => 'required|string',
            'city' => 'required|string',
            'country' => 'required|string',
            'dial_code' => 'required|string',
            'zip' => 'required|string',
            'reg_no' => 'required|string',
            'logo' => 'required|image|mimes:jpg,jpeg,png,webp,svg|max:5120'
        ]);
        $validated['phone'] = $validated['phone']/1;
        $this->user->update(['name' => $validated['name']]);
        unset($validated['name']);
        $logo = $validated['logo'];
        $logoName = uniqid($this->user->id). '.' .$logo->extension();
        $validated['logo'] = $logo->storeAs('logos', $logoName, 'public');
        $this->user->logistic_provider()->create($validated);
        session()->flash("created");
        $this->dispatch('profile-updated');
    }

    public function closePage()
    {
        $this->dispatch('close-page');
    }
    public function render()
    {
        return view('livewire.logistics.profile.create-profile');
    }
}
