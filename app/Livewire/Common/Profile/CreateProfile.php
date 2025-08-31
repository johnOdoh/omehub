<?php

namespace App\Livewire\Common\Profile;

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
    public $account_type = 'Personal';
    public $business_type;
    public $phone;
    public $address;
    public $city;
    public $country;
    public $dial_code;
    public $zip;
    public $reg_no;
    public $tin;
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

    public function create()
    {
        $validated = $this->validate([
            'name' => 'required|string',
            'phone' => 'required|numeric',
            'address' => 'required|string',
            'city' => 'required|string',
            'country' => 'required|string',
            'dial_code' => 'required|string',
            'zip' => 'required|string',
            'reg_no' => 'nullable|string',
            'tin' => 'nullable|string',
            'logo' => 'required|image|mimes:jpg,jpeg,png,webp,svg|max:5120',
        ]);
        if ($this->user->role == 'Shipper') {
            $validatedShipper = $this->validate([
                'account_type' => 'nullable|string|in:Personal,Business',
                'business_type' => 'nullable|string'
            ]);
            $validated = array_merge($validated, $validatedShipper);
        }
        $validated['phone'] = $validated['phone']/1;
        $this->user->update(['name' => $validated['name']]);
        unset($validated['name']);
        $logo = $validated['logo'];
        $logoName = uniqid($this->user->id.'-'). '.' .$logo->extension();
        $validated['logo'] = $logo->storeAs('logos', $logoName, 'public');
        $this->user->profile()->create($validated);
        session()->flash("created");
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
        return view('livewire.common.profile.create-profile');
    }
}
