<?php

namespace App\Livewire\Admin\Profile;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;

class CreateProfile extends Component
{
    use WithFileUploads;
    public $user;
    public $countryCodes = [];
    public $currentCountry;
    public string $phone = '';
    public string $address = '';
    public string $city = '';
    public string $country = '';
    public string $dial_code;
    public string $zip = '';
    public $logo;

    public function mount()
    {
        $this->countryCodes = DB::table('countries')->orderBy('name')->get();
        $this->currentCountry = getCountryFromCode();
        $this->dial_code = $this->currentCountry->dial_code;
    }

    public function boot()
    {
        $this->dispatch('load-countries-plugin');
        // $this->dispatch('reRenderScripts');
    }

    public function createProfile()
    {
        $validated = $this->validate([
            'phone' => 'required|numeric',
            'address' => 'required|string',
            'city' => 'required|string',
            'country' => 'required|string',
            'dial_code' => 'required|string',
            'zip' => 'required|string',
            'logo' => 'required|image|mimes:jpg,jpeg,png,webp,svg|max:5120'
        ]);
        $validated['phone'] = $validated['phone']/1;
        $logo = $validated['logo'];
        $validated['is_verified'] = true;
        $logoName = uniqid($this->user->id.'-'). '.' .$logo->extension();
        $validated['logo'] = $logo->storeAs('logos', $logoName, 'public');
        $this->user->profile()->create($validated);
        session()->flash("created");
        $this->dispatch('created');
    }

    public function render()
    {
        return view('livewire.admin.profile.create-profile');
    }
}
