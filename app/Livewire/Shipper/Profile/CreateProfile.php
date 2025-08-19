<?php

namespace App\Livewire\Shipper\Profile;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProfile extends Component
{
    use WithFileUploads;
    public $user;
    public $countryCodes = [];
    public $currentCountry;
    public $name;
    public $account_type = 'Personal';
    public $phone;
    public $business_type;
    public $reg_no;
    public $tin;
    public $address;
    public $city;
    public $country;
    public $dial_code;
    public $zip;
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
            'account_type' => 'required|string|in:Personal,Business',
            'phone' => 'required|numeric',
            'business_type' => 'nullable|string',
            'reg_no' => 'nullable|string',
            'tin' => 'nullable|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'country' => 'required|string',
            'dial_code' => 'required|string',
            'zip' => 'required|string',
            'logo' => 'required|image|mimes:jpg,jpeg,png,webp,svg|max:5120'
        ]);
        $validated['phone'] = $validated['phone']/1;
        $this->user->update(['name' => $validated['name']]);
        unset($validated['name']);
        $logo = $validated['logo'];
        $logoName = $this->user->email. '.' .$logo->extension();
        $validated['logo'] = $logo->storeAs('logos', $logoName, 'public');
        $this->user->shipper()->create($validated);
        request()->session()->flash("created");
        $this->dispatch('profile-updated');
    }

    public function changeType($type)
    {
        $this->account_type = $type;
        $this->dispatch('load-countries-plugin');
    }

    public function closePage()
    {
        $this->dispatch('close-page');
    }
    public function render()
    {
        return view('livewire.shipper.profile.create-profile');
    }
}
